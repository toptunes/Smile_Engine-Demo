<?php


readfile ("app/lib/meta.html");
?>
<style>
<?php

ob_start();
include ("./app/styles/toptunes.ir_app_1.css");
$code= ob_get_clean();
echo str_replace(array("\r", "\n"), '', $code);


ob_start();
 include "./app/styles/mainpage.css.php";
$code= ob_get_clean();
echo str_replace(array("\r", "\n"), '', $code);



?>

</style>
 <script>
      <?php

//include "./app/scripts/js_core.php";
?>
       <?php

echo file_get_contents("./app/scripts/smi_lee.js");
echo file_get_contents("./app/scripts/icons.js");

?>
    </script>
            
 <!--  <link rel="stylesheet" type="text/css" href="app/styles/toptunes.ir_app_1.css" />-->
 </head>
 <body>
  <keep-alive id="app">
   <router-view v-bind:app="app">
   </router-view>
  </keep-alive>
<?php
/*
  <div id="dialogs">
   <dab-alert v-bind:app="app"></dab-alert>
   <dab-toasts v-bind:app="app"></dab-toasts>
  </div> 
*/
?>
<div id="error_found"></div>
  <div id="dab-sidebar-overlay"></div>
  <script src="/app/scripts/nids.js"></script>
 <script src="/app/scripts/app.js.php?42"></script>

      <?php

include "./app/scripts/threejs_codes.php";
?>

  <script>
        jalaliDatepicker.startWatch({
            separatorChar: "/",
            minDate: "attr",
            maxDate: "attr",
            changeMonthRotateYear: true,
            showTodayBtn: true,
            showEmptyBtn: true
        });
      
    </script>
<script>
setTimeout("errorload()", 10000);
function errorload(){

var dear_nav_el = document.getElementById("dear_nav").innetHTML;

if(typeof dear_nav_el == 'undefined'){

document.getElementById("error_found").innetHTML = "<p>اگر سایت برای شما نمایش داده نمیشود . صفحه را ریفرش کنید یا مرورگر خود را آپدیت کنید . مرورگر پیشنهادی گوگل کروم یا فایر فاکس است</p>";
}


}

</script>
 </body>
</html>
