<?php
$what_store= get_value($_GET,'what_store');
include "child/store_list/store_type_list.php";
include "child/store_list/all_stores_with_this_type.php";


$html_final = module('div','store_list','

<div class="container container-sm container-md container-lg container-xl container-xxl container-fluid">
        <div class="row p-2 justify-content-around flex-column flex-md-row">
            <div class="col-12 col-md-4 col-lg-3 border">
                <ul class="typeofstore ">
				
				'.$child_store_list_store_type_list.'
								

       
                </ul>
            </div>
			
            <div class="col-12 col-md-8 col-lg-9 border">
                <div class="title-of-partition mt-3 h5">'.$what_store.'</div>
                <div class="row mt-5">
				
				
				'.$child_store_list_all_stores_with_this_type.'

					
					
                 
                </div>
            </div>
        </div>
    </div>
	
	');