<?php

/**
 * Plugin Name: Very First Plugin
 * Description: This is the very first plugin I ever created.
 * Version: 1.0
 * Author: Richard Febres
 * Author URI: richardfebres.github.io
 **/

// Function to view and/or hide additional blog text

function dh_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );

// Function to get the exact time a user visited the site
function dh_get_visit_time()
{

    // Time of user visit
    $visit_time = date('F j, Y g:i a');

    //Check to see if cookie was previously set
    if (isset($_COOKIE['dh_visit_time'])) {

        //Set user greeting if set
        function visitor_greeting()
        {

            //Use data already stored in cookie to format greeting
            $last_visit = $_COOKIE['dh_visit_time'];

            $greeting .= 'You last clicked on our website ' . $last_visit . '. Check out whats new';

            return $greeting;
        }

    } else {

        //Do this if cookie not preset
        function visitor_greeting()
        {
            $greeting .= 'New here? Check this out...';

            return $greeting;
        }

        // Set the cookie
        setcookie('dh_get_visit_time', $visit_time, time() + 31556925);
    }

    // Add a shortcode
    add_shortcode('greet_user', 'visitor_greeting');

}
    //Initiate action
    add_action('init', 'dh_get_visit_time');

?>


<script type="text/javascript">

    // Function to highlight selected text and override window color

    function getSelected() {
        var selected = '';

        if (window.getSelection) {
            selected = window.getSelection().toString();
        } else if (document.getSelection) {
            selected = document.getSelection();
        } else if (document.selection) {
            selected = document.selection.createRange().text;
        }
    }

    $(document).ready(function(){
        $('p').on("mmouseup", function(){
            var selected = getSelected();

            $(this).html($(this).html().replaceAll(selected, '<span class="highlight">' + selected + '</span>'));

        }
}

</script>
