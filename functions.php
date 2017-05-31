<?php

// Init ACf Fields (Production Only)
require_once 'acf.php';


// Init Options Page
$options_page = array(

    'page_title' => 'Options',
    'menu_title' => '',
    'menu_slug' => '',
    'capability' => 'edit_posts',
    'position' => false,
    'parent_slug' => '',
    'icon_url' => false,
    'redirect' => true,
    'post_id' => 'options',
    'autoload' => false,
);

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page($options_page);
}

// Custom Login UI
function hide_admin_parts(){ ?>
    <style>
        p#backtoblog {
            display: none;
        }

        <?php if(get_field('hide_forgot_password', 'options') == 1): ?>
        p#nav {
            display: none;
        }
        <?php endif ?>
    </style>


<?php }

function custom_admin_logo() { ?>

    <style type="text/css">
        #login {
            padding: 0 !important;
        }
        #login h1 a, .login h1 a {
            display: none;
        }
        .custom_admin_logo_wrapper {
            text-align: center;
            margin: 10px !important;
        }
        .custom_admin_logo {
            height: <?php echo the_field('custom_logo_height', 'options'); ?>px;
            width: auto;
        }

        body.login {
            margin-top:50vh;
            transform: translateY(-50%);
            height: auto;

        }
    </style>

    <div class="custom_admin_logo_wrapper"><img class="custom_admin_logo" src="<?php echo the_field('custom_logo', 'options'); ?>"/></div>



<?php }

add_action( 'login_enqueue_scripts', 'hide_admin_parts' );

if (get_field('custom_logo', 'options')){

    add_action( 'login_enqueue_scripts', 'custom_admin_logo' );
}



