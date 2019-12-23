<?php
/**
 * Title: About Section
 * Post Type: section
 * Order: 20
 */
piklist('field', array(
    'type' => 'group'
,'field' => 'tuhin_about_s'
,'label' => __('About Section', 'tuhin')
,'list' => false
,'fields' => array(
        array(
            'type' => 'file',
            'field' => 'about_image_upload',
            'label' => __('About Image','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'about_subheading',
            'label'=> __('About Sub Heading','tuhin'),
            'value'=> 'Start With Us',
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'about_heading',
            'label'=> __('About Heading','tuhin'),
            'value'=> 'About Section Heading',
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'textarea',
            'field'=> 'about_description',
            'label'=> __('About Description','tuhin'),
            'value'=> 'About Section Description',
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'about_button_text',
            'label'=> __('About Button Text','tuhin'),
            'value'=> 'Contact Me',
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(

            'type'=> 'url',
            'field'=> 'about_button_url',
            'label'=> __('About Button Url','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        )

    )
));
