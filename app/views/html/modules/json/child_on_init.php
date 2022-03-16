<?php

/*    Purpose:

Phaser.AUTO, Phaser.CANVAS, Phaser.HEADLESS, or Phaser.WEBGL.

*/

$child_on_init = fill('div','child_on_init','
 {
     "type" : "AUTO",
    "width": "100",
    "height": "100",
    "parent" :"dear_app",
    "z_index" :"z-index: -1;",
    "zoom" :"1",
    "physics": {
        "default": "arcade",
        "arcade": {
            "gravity": { "y": "200" }
        }
    }
}



');



?>