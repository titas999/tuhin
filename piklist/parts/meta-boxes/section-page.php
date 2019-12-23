<?php
/**
 * Title: Section Settings
 * Post Type: page
 * Order: 10
 */

piklist('field', array(
    'type'=> 'select',
    'field'=> 'tuhin_page_section',
    'label'=> __('Select Section Type','tuhin'),
    'add_more'=> true,
    'choices'=> piklist(get_posts(array(
        'posts_per_page'=> -1,
        'post_type'=> 'section',
        'post_status'=> 'publish'
    )),array('ID','post_title')
    )

));