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
        array(
            'type'=> 'group',
            'field'=> 'contact_items',
            'label'=> __('contact Items','tuhin'),
            'add_more'=> true,
            'attributes'=> array(
                'class'=> 'widefat'
            ),
            'fields'=> array(
                array(
                    'type' => 'file',
                    'field' => 'client_image',
                    'label' => __('Upload Client Image','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'text',
                    'field' => 'client_name',
                    'label' => __('Client Name','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'text',
                    'field' => 'client_designation',
                    'label' => __('Clients Designation','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'field' => 'client_contact',
                    'label' => __('Clients contact','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
            )
        )

    )
)
   );