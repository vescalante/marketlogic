$(window).on('load',function(){
    $(".se-pre-con").fadeOut("slow");
})

$(document).ready(function(){
    //Maping image
    $('img[usemap]').rwdImageMaps();


    //News Form Submit
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

    $( "#news_subscribe" ).submit(function(e) {
        //console.log("Form submited");
        e.preventDefault();
        var n1Val = $('#emailnews').val();
        var form = $(this);

        if(n1Val === '') {
            $.notify({
                title: '<strong>Error!</strong>',
                message: 'Invalid email address.'
            },{
                type: 'warning',
                delay: 1000,
                timer: 2000,
                animate: {
                    enter: 'animated fadeInUp',
                    exit: 'animated fadeOutDown'
                }
            });
        }else{
            $.ajax({

                type:'POST',
                url:'/ajaxRequest',
                data: form.serialize(), // serializes the form's elements.
                success:function(data){
                    //Sharpspring
                    __ss_noform.push(['submit', null, 'e9490bbf-f42d-47bd-b63c-6fe2ed7476cf']);

                    //Notify
                    $.notify({
                        title: '<strong>Request sended!</strong>',
                        message: 'Now you’re in the know.'
                    },{
                        type: 'success',
                        delay: 1000,
                        timer: 2000,
                        animate: {
                            enter: 'animated fadeInUp',
                            exit: 'animated fadeOutDown'
                        }
                    });
                }

            });
        }
    });

    $( "#contact_form" ).submit(function(e) {
        console.log("Contact Form submited");
        e.preventDefault();
        var nameVal = $('#contact_name').val();
        var emailVal = $('#contact_email').val();
        var subjectVal = $('#contact_subject').val();
        var messageVal = $('#contact_message').val();
        var form = $(this);

        if(nameVal === '' || emailVal === '' || subjectVal === '' || messageVal === '') {
            $.notify({
                title: '<strong>Error!</strong>',
                message: 'Please enter all the information in the contact form'
            },{
                type: 'warning',
                delay: 1000,
                timer: 2000,
                animate: {
                    enter: 'animated fadeInUp',
                    exit: 'animated fadeOutDown'
                }
            });
        }else{
            $.ajax({

                type:'POST',
                url:'/ajaxRequest',
                data: form.serialize(), // serializes the form's elements.
                success:function(data){
                    //Sharpspring
                    __ss_noform.push(['submit', null, '3d7c997a-7ba8-47ac-a5c0-89e8187c4518']);

                    //Notify
                    /*
                    $.notify({
                        title: '<strong>Message sended!</strong>',
                        message: 'Thanks for contacting us, soon we will answer your message'
                    },{
                        type: 'success',
                        delay: 1000,
                        timer: 9000,
                        animate: {
                            enter: 'animated fadeInUp',
                            exit: 'animated fadeOutDown'
                        }
                    });
                    */
                    
                    $('#contact_form').trigger("reset");
                    window.location.href = "/thankyou";
                }

            });
        }
    });



    const velocity = 300;
    //Index Menu - We Are
    $('#show-we-are').click(function() {
        if ($('#we-are-menu').is( ":hidden" ) ) {
            $('#we-are-menu').slideDown(velocity);
            $('#here-menu').slideUp(velocity);
            $('#for-you-menu').slideUp(velocity);
        }
    });
    $("#show-we-are").on({
        mouseenter: function (event) {
            if ($('#we-are-menu').is( ":hidden" ) ) {
                $('#we-are-menu').slideDown(velocity);
                $('#here-menu').slideUp(velocity);
                $('#for-you-menu').slideUp(velocity);
            } else {
                $('#we-are-menu').slideUp(velocity);
            }
        }
    });
    //Index Menu - Here
    $('#show-here').click(function() {
        if ($('#here-menu').is( ":hidden" ) ) {
            $('#here-menu').slideDown(velocity);
            $('#we-are-menu').slideUp(velocity);
            $('#for-you-menu').slideUp(velocity);
        }
    });
    $("#show-here").on({
        mouseenter: function (event) {
            if ($('#here-menu').is( ":hidden" ) ) {
                $('#here-menu').slideDown(velocity);
                $('#we-are-menu').slideUp(velocity);
                $('#for-you-menu').slideUp(velocity);
            } else {
                $('#here-menu').slideUp(velocity);
            }
        }
    });
    //Index Menu - For you
    $('#show-for-you').click(function() {
        if ($('#for-you-menu').is( ":hidden" ) ) {
            $('#for-you-menu').slideDown(velocity);
            $('#we-are-menu').slideUp(velocity);
            $('#here-menu').slideUp(velocity);
        }
    });
    $("#show-for-you").on({
        mouseenter: function (event) {
            if ($('#for-you-menu').is( ":hidden" ) ) {
                $('#for-you-menu').slideDown(velocity);
                $('#we-are-menu').slideUp(velocity);
                $('#here-menu').slideUp(velocity);
            } else {
                $('#for-you-menu').slideUp(velocity);
            }
        }
    });

    $(".section.home-menu").on({
        mouseleave: function (event) {
            if ($('#for-you-menu').not( ":hidden" ) ) {
                $('#for-you-menu').slideUp(velocity);
            }
            if ($('#we-are-menu').not( ":hidden" ) ) {
                $('#we-are-menu').slideUp(velocity);
            }
            if ($('#here-menu').not( ":hidden" ) ) {
                $('#here-menu').slideUp(velocity);
            }
        }
    });

    //Responsive Menu Submenu
    $('.toggled-menu').click(function() {
            $(".second.menu").addClass("submenu");
            $( '#h2-menu-we' ).removeClass( "text-primarycolor" );
            $( '#h2-menu-here' ).removeClass( "text-primarycolor" );
            $( '#h2-menu-for' ).removeClass( "text-primarycolor" );

    });

    //Top Menu Submenu
    $(".sub-we").on({
        mouseenter: function (event) {
            $(".second.menu").addClass("submenu");
            $( '#h2-menu-we' ).addClass( "text-primarycolor" );
            $( '#h2-menu-here' ).removeClass( "text-primarycolor" );
            $( '#h2-menu-for' ).removeClass( "text-primarycolor" );
        }
    });
    $(".sub-here").on({
        mouseenter: function (event) {
            $(".second.menu").addClass("submenu");
            $( '#h2-menu-here' ).addClass( "text-primarycolor" );
            $( '#h2-menu-we' ).removeClass( "text-primarycolor" );
            $( '#h2-menu-for' ).removeClass( "text-primarycolor" );
        }
    });
    $(".sub-for").on({
        mouseenter: function (event) {
            $(".second.menu").addClass("submenu");
            $( '#h2-menu-for' ).addClass( "text-primarycolor" );
            $( '#h2-menu-we' ).removeClass( "text-primarycolor" );
            $( '#h2-menu-here' ).removeClass( "text-primarycolor" );
        }
    });
    $(".second.menu").on({
        mouseleave: function (event) {
            $(".second.menu").removeClass("submenu");
            $( '#h2-menu-we' ).removeClass( "text-primarycolor" );
            $( '#h2-menu-here' ).removeClass( "text-primarycolor" );
            $( '#h2-menu-for' ).removeClass( "text-primarycolor" );
        }
    });
    $(".no-sub").on({
        mouseenter: function (event) {
            $(".second.menu").removeClass("submenu");
            $( '#h2-menu-we' ).removeClass( "text-primarycolor" );
            $( '#h2-menu-here' ).removeClass( "text-primarycolor" );
            $( '#h2-menu-for' ).removeClass( "text-primarycolor" );
        }
    });

    $(document).on("click", function(e) {
        if ($(e.target).is(".second.menu") === false) {
            if($(e.target).is("#show-submenu-we") === false) {
                if($(e.target).is("#show-submenu-here") === false) {
                    if ($(e.target).is("#show-submenu-for") === false) {
                        if ($(e.target).is(".toggled-menu") === false) {
                            $(".second.menu").removeClass("submenu");
                        }
                    }
                }
            }
        }
    });

    //Morphext Texto Cambiante
    $("#header-text").Morphext({
        // The [in] animation type. Refer to Animate.css for a list of available animations.
        animation: "fadeIn",
        // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
        separator: ";",
        // The delay between the changing of each phrase in milliseconds.
        speed: 3000,
        complete: function () {
            // Called after the entrance animation is executed.
        }
    });

    //GSAP Animations
    TweenMax.to("#welcome", 1, {opacity:1, ease: Circ. easeOut,delay:0.2});

    TweenMax.to("#show-we-are", 1, {opacity:1, xPercent: 50,  ease: Circ. easeOut,delay:0.5});
    TweenMax.to("#show-here", 1, {opacity:1, xPercent: 50, ease: Circ. easeOut, delay:0.4});
    TweenMax.to("#show-for-you", 1, {opacity:1, xPercent: 50, ease: Circ. easeOut, delay:0.3});

    //tween the element with ID of "myID"
    //TweenMax.to("#show-we-are", 2, {backgroundColor:"#ff0000", width:"50%", top:"100px", ease:Power2.easeInOut});
});