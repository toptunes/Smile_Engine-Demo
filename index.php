<?php
   // Pay attention! some "include" files will replace on release version 
 
   readfile("app/lib/meta.html");
   ?>
<link type="text/css" rel="stylesheet" href="/app/styles/toptunes.ir_app_1.css" />
<link type="text/css" rel="stylesheet" href="/app/styles/custom.css" />

</head>
<body>
   <div id="app"></div>
   <div id="error_found"></div>
   <div id="dab-sidebar-overlay"></div>
   <script src="/app/scripts/smi_lee.js"></script>
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
      
         setTimeout(errorload, 10000 );
        
         function errorload(){
            
         var dear_nav_el=document.getElementById("dear_nav").innerText;
         var err_f = document.getElementById("error_found");
            if(typeof dear_nav_el == 'undefined'){
         
               err_f.innerText = "Please Update your browser!";
   
            }else{
   
               err_f.innerText = "";
   
            }
         }
         
   </script>
</body>
</html>