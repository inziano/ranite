// Basic js for the site
$(document).ready( function () {
    
    // Hamburger menu click
    $('#hamburger-icon').click( ()=> {
        // Find the overlaymenu and open/close the menu
        $('#overlay-menu').toggleClass('close');
    })

    // Body on scroll change header background
    $(window).scroll( ()=>{
        // Check height of the window
        var height = $(window).scrollTop();

        // Height 
        if (height === 0) {
            $('#top-bar').css('background','transparent');

        } else if ( height >= $(window).height()*0.2 ) {

            $('#top-bar').css('background','#4d5869');
        }

        console.log(height);
        // Change bg of navbar
       
    })
});