<?php
/**
 * Title: Features Section
 * Post Type: section
 * Order: 20
 */

piklist('field', array(
    'type' => 'group',
    'field' => 'tuhin_features_section',
    'label' => __('Features Section', 'tuhin'),
    'list' => false,
    'fields' => array(
        array(
            'type' => 'text',
            'field' => 'features_heading',
            'label' => __('Features Heading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'features_subheading',
            'label'=> __('Features Subheading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'group',
            'field'=> 'features_items',
            'label'=> __('Features Item','tuhin'),
            'add_more'=> true,
            'attributes'=> array(
                'class'=> 'widefat'
            ),
            'fields'=> array(
                array(
                    'type' => 'file',
                    'field' => 'features_item_image',
                    'label' => __('Features Items Image','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'text',
                    'field' => 'features_items_name',
                    'label' => __('Features Item Name','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'field' => 'features_items_description',
                    'label' => __('Features Item Description','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                )
            )
        )

    )
)
   );