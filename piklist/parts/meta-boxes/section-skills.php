<?php
/**
 * Title: Projects Section
 * Post Type: section
 * Order: 20
 */

piklist('field', array(
    'type' => 'group',
    'field' => 'tuhin_projects_section',
    'label' => __('projects Section', 'tuhin'),
    'list' => false,
    'fields' => array(
        array(
            'type'=> 'file',
            'field'=> 'projects_main_image',
            'label'=> __('Projects Image','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'projects_heading',
            'label'=> __('Projects Heading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'textarea',
            'field'=> 'projects_description',
            'label'=> __('Projects Description','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'projects_button_text',
            'label'=> __('Projects Button Text','tuhin'),
            'value'=> __('Start With Us','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(

            'type'=> 'url',
            'field'=> 'projects_button_url',
            'label'=> __('Projects Button Url','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'group',
            'field'=> 'projects_items',
            'label'=> __('Projects Item','tuhin'),
            'add_more'=> true,
            'attributes'=> array(
                'class'=> 'widefat'
            ),
            'fields'=> array(
                array(
                    'type' => 'file',
                    'field' => 'projects_item_image',
                    'label' => __('Projects Items Image','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'text',
                    'field' => 'projects_items_name',
                    'label' => __('Projects Item Name','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'text',
                    'field' => 'projects_item_btn_text',
                    'label' => __('Button Text','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'url',
                    'field' => 'projects_item_btn_url',
                    'label' => __('Button URL','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
            )
        )

    )
)
   );