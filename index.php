<?php
   // Pay attention! some "include" files will replace on release version 

   readfile("app/lib/meta.html");
   ?>
<style>
   <?php
      //  Pay attention! some "include" files will replace on release version

      include ("./app/styles/toptunes.ir_app_1.css");
      $code = ob_get_clean();
      echo str_replace(array(
          "\r",
          "\n"
      ) , '', $code);
      
      //  Pay attention! some "include" files will replace on release version
      ob_start();
      include "./app/styles/mainpage.css.php";
      $code = ob_get_clean();
      echo str_replace(array(
          "\r",
          "\n"
      ) , '', $code);
      
      ?>
</style>
<script>
   <?php
      //include "./app/scripts/js_core.php";
      
      ?>
    <?php
      //  Pay attention! some "include" files will replace on release version
      echo file_get_contents("./app/scripts/smi_lee.js");
  
      
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