<?php


class Tools {
    // based on 10 = limit 0 , 10  / limit 10 , 10 / 10 post per page
 
    public static function Make_pagination($sql,$based_on,$max_of_links,$active_class_name,$module_name,$current_page,$suffix = ""){
        
        $obj = (Array)json_decode(get_mysql($sql))[0];
        $total_row_all_news = get_value($obj,'total');	

        $p_link_c = ceil($total_row_all_news/$based_on);

        if($p_link_c > 0 && $p_link_c < $max_of_links){

            for($iz = 1; $iz <  $p_link_c; $iz++){ 
                $iz2 = $iz+1;
                if($iz ==$current_page){
                    $activve = "active";
                }else{
                    $activve = "";
                }
                $lin_c_p .= '<li class="page-item '.$activve.'"><a class="page-link btn_id" href="/'.$module_name.'/'.$iz.''.$suffix.'" id="'.$module_name.'" data-query="'.$module_name.'/'.$iz.''.$suffix.'" >'.$iz.'</a></li>'; 
            }
            
        }

        if($p_link_c > $max_of_links ){
            $maghsood = $current_page+$based_on;

            if($maghsood>$p_link_c){
                $maghsood = $p_link_c;
            }

            for($iz = $current_page-$based_on; $iz <  $maghsood; $iz++){ 
                $iz2 = $iz+1;
                if($iz ==$current_page){
                    $activve = "active";
                }else{
                    $activve = "";
                }
                if($iz > 0){
                    $lin_c_p .= '<li class="page-item '.$activve.'"><a class="page-link btn_id" href="/'.$module_name.'/'.$iz.''.$suffix.'" id="'.$module_name.'" data-query="'.$module_name.'/'.$iz.''.$suffix.'" >'.$iz.'</a></li>'; 

                }
            }
            
                
        }

        $next = $current_page+1;
        
        $Previous = $current_page-1;

        if($Previous != 0 && $total_row_all_news > $based_on){
          
            $Previous_html = '<li class="page-item"><a class="page-link btn_id" href="/'.$module_name.'/'.$Previous.''.$suffix.'" id="'.$module_name.'" data-query="'.$module_name.'/'.$Previous.''.$suffix.'" >قبلی</a></li>
            ';
        }

        if($next < $p_link_c){
            $next_html = '<li class="page-item"><a class="page-link btn_id" href="/'.$module_name.'/'.$next.''.$suffix.'" id="'.$module_name.'" data-query="'.$module_name.'/'.$next.''.$suffix.'" >بعدی</a></li>
            ';
        }
        return '
            <div class="">
                <ul class="pagination justify-content-center">
                    '.$Previous_html.'
                    '.$lin_c_p.'
                    '.$next_html.'
                </ul>
            </div>
        ';
    }

}