<?php



$child_on_init = fill('div','child_on_init','
 {
    "type": "Phaser.AUTO",
    "width": "800",
    "height": "600",
    "physics": {
        "default": "arcade",
        "arcade": {
            "gravity": { "y": "200" }
        }
    },
    "scene": {
        "preload": "preload",
        "create": "create"
    }
}



');



?>