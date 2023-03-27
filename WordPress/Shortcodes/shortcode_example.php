<?php
    /*API call to add a shortcode and associate it to a function*/
    add_shortcode("roundabout-print", "roundabout_print");
    /*Code to be executed when calling the shortcode*/
    function roundabout_print(){
        return('Hello World');
    }

    /*Similar example with the function inside the API call */
    add_shortcode("another-roundabout-print", function(){
        return('This is the text you will return');
    });

    /*Another example, but this one ready to use a variable */
    add_shortcode("roundabout-print", "roundabout_print");
    function roundabout_print($atts){
        return('Hello '.$atts['attribute']);
    }
?>