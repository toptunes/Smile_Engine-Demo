<?php
header('Pragma: public');
header('Cache-Control: max-age=386400');
header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 386400));


/*
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");*/
?><transition v-bind:[app.viewTransitionName]="transitionName" v-bind:[app.viewTransitionMode]="transitionMode" v-bind:[app.viewInAnimation]="'animate__animated ' + 'animate__' + inAnimation" v-bind:[app.viewOutAnimation]="'animate__animated ' + 'animate__' +  outAnimation"><div id="view1" v-bind:class="['app-view', classes]"><?php include "layouts.php"; ?></div></transition>