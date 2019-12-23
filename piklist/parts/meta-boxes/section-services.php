<?php
/**
 * Title: Services Section
 * Post Type: section
 * Order: 20
 */

piklist('field', array(
    'type' => 'group',
    'field' => 'tuhin_services_section',
    'label' => __('Services Section', 'tuhin'),
    'list' => false,
    'fields' => array(
        array(
            'type' => 'text',
            'field' => 'services_subheading',
            'label' => __('Services Subheading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'services_heading',
            'label'=> __('Services Heading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'textarea',
            'field'=> 'services_description',
            'label'=> __('Services Description','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'services_button_text',
            'label'=> __('Services Button Text','tuhin'),
            'value'=> __('Start With Us','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(

            'type'=> 'url',
            'field'=> 'services_button_url',
            'label'=> __('Services Button Url','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'group',
            'field'=> 'services_items',
            'label'=> __('Services Item','tuhin'),
            'add_more'=> true,
            'attributes'=> array(
                'class'=> 'widefat'
            ),
            'fields'=> array(
                array(
                    'type' => 'file',
                    'field' => 'services_item_image',
                    'label' => __('Services Items Image','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'text',
                    'field' => 'services_items_name',
                    'label' => __('Services Item Name','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                )
            )
        )

    )
)
   );