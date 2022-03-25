<?php

/*
header('Pragma: public');
header('Cache-Control: max-age=386400');
header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 386400));
*/


?>
<div id="cover"></div>
<div class="mm-page mm-slideout" id="mm-0">
   <div id="dear_nav" class="dear_element"></div>
   <div  id="hidden" class="dear_element"></div>
   <div  id="app_msg" class=" m-2 grey-text text-darken-1 dear_element app_msg text-danger"></div>
   <div id="loading_box_animated" class="backgg load_delay">
      <div class="spinner-border full_cover" style="width: 3rem; height: 3rem;"></div>
   </div>
   <div  id="dear_app" class="grey-text text-darken-1 dear_element"></div>
   <!-- The Modal -->
   <div id="myModal" class="modal fade show fade-in">
      <!-- Modal content -->
      <div class="modal-content">
         <span class="close" id="close_span">&times;</span>
         <div id="dear_modal_html" class="dear_element ">
         </div>
      </div>
   </div>
   <div id="preload_html" class="preload_html"></div>
</div>
<div id="s_popModal" class="fade-in" style="display:none">
   <div class="s_pop m-2">
      <div class="w-100 border-bottom" onclick="if_show_hide('s_popModal');history.back(-1)">
         <h1 class="close_x" >&times;</h1>
      </div>
      <div class="m-3">
         <div id="idoflocation" class="dear_element"></div>
      </div>
   </div>
</div>