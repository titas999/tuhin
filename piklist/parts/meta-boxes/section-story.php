<?php
/**
 * Title: Counter Section
 * Post Type: section
 * Order: 20
 */

piklist('field', array(
    'type' => 'group',
    'field' => 'tuhin_counter_section',
    'label' => __('Counter Section', 'tuhin'),
    'add_more' => true,
    'fields' => array(
        array(
            'type' => 'number',
            'field' => 'counter_number',
            'label' => __('Insert Number','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'counter_item_name',
            'label'=> __('Items Name','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),

    )
)
   );