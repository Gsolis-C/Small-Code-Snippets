# Shortcodes - Keep your PHP off of the editor.

Enter Shortcodes. Shortcodes allow you to call PHP functions from within the wordpress editor without having to do all of the nasty and potentially site-breaking dance of dumping a PHP call in the middle of your post.

so instead of

`
*Some Text*
<?php
    function roundabout_print(){
        echo ('Hello World');
    }
    roundabout_print();
?>
*Some More Text*
`

or, if you had almost but not quite enough precience

`
*Some Text*
<?php
    roundabout_print();
?>
*Some More Text*
`

All you need to do is 

`
*Some Text*
[roundabout_print]
*Some More Text*
`
## Create the Shortcode

## Add it to Wordpress

## Can I just get the code to copy please?