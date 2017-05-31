<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
        'key' => 'group_592df88a8b04f',
        'title' => 'Login UI',
        'fields' => array (
            array (
                'key' => 'field_592df8cdd4384',
                'label' => 'Custom Logo',
                'name' => 'custom_logo',
                'type' => 'image',
                'instructions' => 'Choose a custom logo to replace the default WordPress logo as appears on the wp-login page.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => 'jpg, jpeg, gif, png, svg',
            ),
            array (
                'key' => 'field_592dfdae3a854',
                'label' => 'Height',
                'name' => 'custom_logo_height',
                'type' => 'number',
                'instructions' => 'Choose a height in pixels, width is set automatically.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 200,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => 0,
                'max' => 500,
                'step' => 10,
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_592e0df30a0ed',
                'label' => 'Hide Forgot Password?',
                'name' => 'hide_forgot_password',
                'type' => 'true_false',
                'instructions' => 'Recommended for better security.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => 'Hide',
                'default_value' => 1,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-options',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

endif;