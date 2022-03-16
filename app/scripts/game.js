let game_is_run = false;


function child_on_init(param){

    Game_start(param);

 

}


function Game_start(param){
    result = JSON.parse(param)
    let G_type;

    switch (result.type) {
        case "AUTO":
            G_type = Phaser.AUTO;
            break;
        case "CANVAS":
            G_type = Phaser.CANVAS;
            break;  
        case "HEADLESS":
            G_type = Phaser.HEADLESS;
            break;  
        case "WEBGL":
            G_type = Phaser.WEBGL;
            break;  

        default:
            G_type = Phaser.AUTO;
            break;
    }
  

   
    var config = {
        type: G_type,
        width: result.width,
        height: result.height,
        canvasStyle:"position: fixed;top:0;"+result.z_index,
        parent : result.parent,
        zoom:result.zoom,
        physics: {
            default: result.physics.default,
            arcade: {
                gravity: { y: result.physics.arcade.gravity.y }
            }
        },
        scene: {
            preload: preload,
            create: create,
            update: update
        }
    };

    var game = new Phaser.Game(config);
  
    function preload ()
    {
 
    }

    function create ()
    {
   
    }
    function update ()
    {

    }
  
}




function Camera_control(){

    this.objects.camera.setBackgroundColor('rgba(255, 0, 0, 0.5)');


}