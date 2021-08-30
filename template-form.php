<?php
/*
Template Name: Frontend posting
*/
?>

<?php
acf_form_head();
get_header();
?>

<div id="content">

    <?php
    if (is_user_logged_in()) {

        acf_form(array(
            'post_id'        => 'new_post',
            'post_title'    => true,
            'post_content'    => true,
            'new_post'   => array(
                'post_status'   => 'publish',
            )
        ));
    }

    ?>

</div>

<?php get_footer(); ?>