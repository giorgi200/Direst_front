// console.log($( ".search-icon img" ));

// show search
$( ".search-icon img" ).click(function() {
    $(".search-icon").toggleClass("mains-s");
});
   
$( "main").click(function() {
    $(".search-icon").removeClass("mains-s");
});
// end show search


//  datapicker and select
$(document).ready(function(){
    $("#speed").selectmenu();
    $("#datepicker").datepicker({
        minDate: new Date(),
        dateFormat: 'D, d M',
    });
    $("#datepicker").datepicker("setDate", new Date());

});



setTimeout(function(){
    
    var con = true;

    $("#speed-button").click(function() {
        
        if (con) {
            // aq dawere selectis ikonkis sorsi
            $(".ui-menu-item-wrapper").prepend('<img src="assets/img/to.svg" class="select-gue">');
            con = false;
        }
    })

}, 500) 
//  datapicker and select end

//  datapicker and select dish and restaurant
$(document).ready(function(){
    $("#speed-dish").selectmenu();
    $("#datepicker-dish").datepicker({
        minDate: new Date(),
        dateFormat: 'D, d M',
    });

});

setTimeout(function(){
    
    var con = true;

    $("#speed-dish-button").click(function() {
        
        if (con) {
            // aq dawere selectis ikonkis sorsi
            $(".ui-menu-item-wrapper").prepend('<img src="assets/img/to.svg" class="select-gue">');
            con = false;
        }
    })

}, 500) 
//  datapicker and select dish and restaurant end



// Dish modal
$(".prod-img:not(.__rs)").click(function(){
    $('#chmodal').show();
    $('body').css({"overflow-y": "hidden"});
});
$(".nm-price h1:not(.__rs)").click(function(){
    $('#chmodal').show();
    $('body').css({"overflow-y": "hidden"});
});

$(".close-type").click(function(){
    $('#chmodal').hide();
    $('body').css({"overflow-y": "auto"});
});

$(".rm-icon").click(function(){
    $(".dbl").toggleClass("for-dn");
    $(this).toggleClass("rm-cross");
    $("#res-menu").toggleClass("on-click");
});