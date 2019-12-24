<?php
/**
 * Title: Contact Section
 * Post Type: section
 * Order: 20
 */

piklist('field', array(
    'type' => 'group',
    'field' => 'tuhin_contact_section',
    'label' => __('Contact Section', 'tuhin'),
    'list' => false,
    'fields' => array(
        array(
            'type'=> 'text',
            'field'=> 'contact_heading',
            'label'=> __('contact Heading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'contact_subheading',
            'label'=> __('contact Subheading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),

    )
)
   );