<?php
/**
 * Title: Section Settings
 * Post Type: section
 * Order: 10
 */

piklist('field', array(
    'type'=> 'select',
    'field'=> 'tuhin_section_type',
    'label'=> __('Select Section Type','tuhin'),
    'choices'=> array(
        'none'=>'Select a Type',
        'banner'=>'Banner',
        'about'=>'About',
        'services'=>'Services',
        'skills'=>'Skills',
        'blog'=>'Latest Blog',
        'story'=>'Story',
        'testimonial'=>'Testimonial',
        'contact'=>'Contact',
    )
));