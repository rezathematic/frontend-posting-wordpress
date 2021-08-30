# Frontend posting in WordPress

We will use the ACF plugin to build a form that contains all the required fields of the backend.

## Settings

The `acf_form()` parameter contains two settings called `post_id` and `new_post`. By using these settings correctly, a new post an be created using the form data.

The `post_id` setting is used to edit an existing post, but when set to `‘new_post’`, a new post will be created.

The `new_post` setting is used to specify an array of elements that make up a post. These elements can be found in the [wp_insert_post()](https://codex.wordpress.org/Function_Reference/wp_insert_post) documentation.

## Create a page template

In the Theme folder create a new page template.

```
// template-form.php
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
    // check if the user is logged in
    if (is_user_logged_in()) {

        acf_form(array(
            'post_id'        => 'new_post',
            'post_title'    => true,
            'post_content'    => true,
            'new_post'   => array(
                'post_status'   => 'publish', // 'draft'
            )
        ));
    }

    ?>

</div>

<?php get_footer(); ?>
```

## Examples

Add the following code inside the `if (is_user_logged_in()) { ... }` statement.

### Basic Usage

This form will create a new post.

```
// template-form.php

acf_form(array(
    'post_id'		=> 'new_post',
    'post_title'	=> true,
    'post_content'	=> true,
));
```

### Custom Post Type

This form will create a new post.

```
// template-form.php

acf_form(array(
		'post_id'		=> 'new_post',
		'post_title'	=> true,
		'post_content'	=> true,
		'new_post'		=> array(
			'post_type'		=> 'cars', // 'car' is the name of the custom post type
			'post_status'	=> 'publish' // or 'draft'
		)
	));
```

## Read More

You can refer to the [ACF Documentation](https://www.advancedcustomfields.com/resources/using-acf_form-to-create-a-new-post/) for more.
