<?php
/**
 * Title: Story Section
 * Post Type: section
 * Order: 20
 */

piklist('field', array(
        'type' => 'group',
        'field' => 'tuhin_story_section',
        'label' => __('My Story Section', 'tuhin'),
        'fields' => array(
            array(
                'type' => 'text',
                'field' => 'story_subheading',
                'label' => __('Story Sub Heading','tuhin'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'=> 'text',
                'field'=> 'story_heading',
                'label'=> __('Story Heading','tuhin'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'=> 'textarea',
                'field'=> 'story_description',
                'label'=> __('Story Description','tuhin'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'=> 'text',
                'field'=> 'story_btn_text',
                'label'=> __('Button Text','tuhin'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'=> 'url',
                'field'=> 'story_btn_url',
                'label'=> __('Button URL','tuhin'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),

        )
    )
);
piklist('field', array(
        'type' => 'group',
        'field' => 'tuhin_story_group',
        'add_more' => true,
        'label' => __('My Story Group', 'tuhin'),
        'fields' => array(
            array(
                'type' => 'text',
                'field' => 'story_year',
                'label' => __('Year','tuhin'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),
            array(
                'type'=> 'textarea',
                'field'=> 'story_year_description',
                'label'=> __('Description','tuhin'),
                'attributes' => array(
                    'class' => 'widefat'
                )
            ),

        )
    )
);