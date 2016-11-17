/**
 * Created by mahamadou on 15/11/16.
 */
$( document ).ready(function(){
    $('.dropdown-button1').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: true,
            hover: false,
            gutter: 0,
            belowOrigin: false
        }
    );
    $(".button-collapse").sideNav();

    $('select').material_select();

});
