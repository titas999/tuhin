<?php
/**
 * Title: Skills Section
 * Post Type: section
 * Order: 20
 */

piklist('field', array(
    'type' => 'group',
    'field' => 'tuhin_skills_section',
    'label' => __('Skills Section', 'tuhin'),
    'list' => false,
    'fields' => array(
        array(
            'type'=> 'file',
            'field'=> 'skills_main_image',
            'label'=> __('Skills Section Image','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'skills_subheading',
            'label'=> __('Skills Sub Heading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'skills_heading',
            'label'=> __('Skills Heading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'textarea',
            'field'=> 'skills_description',
            'label'=> __('Skills Description','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'group',
            'field'=> 'skills_items',
            'label'=> __('Skills Item','tuhin'),
            'add_more'=> true,
            'attributes'=> array(
                'class'=> 'widefat'
            ),
            'fields'=> array(
                array(
                    'type' => 'text',
                    'field' => 'skills_items_name',
                    'label' => __('Skills Item Name','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'text',
                    'field' => 'skills_item_number',
                    'label' => __('Skills Number','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
            )
        )

    )
)
   );