<?php
/**
 * Title: Testimonial Section
 * Post Type: section
 * Order: 20
 */

piklist('field', array(
    'type' => 'group',
    'field' => 'tuhin_testimonial_section',
    'label' => __('Testimonial Section', 'tuhin'),
    'list' => false,
    'fields' => array(
        array(
            'type'=> 'text',
            'field'=> 'testimonial_heading',
            'label'=> __('Testimonial Heading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'text',
            'field'=> 'testimonial_subheading',
            'label'=> __('Testimonial Subheading','tuhin'),
            'attributes' => array(
                'class' => 'widefat'
            )
        ),
        array(
            'type'=> 'group',
            'field'=> 'testimonial_items',
            'label'=> __('Testimonial Items','tuhin'),
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
                    'field' => 'client_testimonial',
                    'label' => __('Clients Testimonial','tuhin'),
                    'attributes' => array(
                        'class' => 'widefat'
                    )
                ),
            )
        )

    )
)
   );