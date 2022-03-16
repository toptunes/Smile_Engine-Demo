let game_is_run = false;


function child_on_init(){

}

function config_game(){
    
    var config = {
        type: Phaser.AUTO,
        width: 800,
        height: 600,
        physics: {
            default: 'arcade',
            arcade: {
                gravity: { y: 200 }
            }
        },
        scene: {
            preload: preload,
            create: create
        }
    };

}





function Camera_control(){

    this.objects.camera.setBackgroundColor('rgba(255, 0, 0, 0.5)');


}