<?php
/**
 * Title: Banner Section
 * Post Type: section
 * Order: 20
 */

piklist('field', array(
    'type' => 'group',
    'field' => 'tuhin_banner_s',
    'label' => __('Banner Section', 'tuhin'),
    'fields' => array(
        array(
            'type' => 'file',
            'field' => 'hero_image_upload',
            'label' => __('Header Image', 'tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type' => 'text',
            'field' => 'banner_heading',
            'label' => __('Banner Heading', 'tuhin'),
            'value' => 'Banner Headline',
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type' => 'text',
            'field' => 'banner_description',
            'label' => __('Banner Description', 'tuhin'),
            'value' => 'Banner Description Goes Here',
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type' => 'text',
            'field' => 'button_text',
            'label' => __('Button Text', 'tuhin'),
            'value' => 'Start With Us',
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type' => 'url',
            'field' => 'button_url',
            'label' => __('Button Url', 'tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ))
));
