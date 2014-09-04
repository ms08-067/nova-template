$(function(){
    
    // jQuery backstretch
    if (jQuery.browser.mobile === false) 
    {
        $.backstretch([
            "assets/img/rj-intro/bg-intro-1.jpg"
            , "assets/img/rj-intro/bg-intro-2.jpg"
        ], {duration: 1500, fade: 3000});
    }
});