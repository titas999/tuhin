<?php
/**
 * Template Name: Home Page
 */
get_header();
$tuhin_current_page_id = get_the_ID();
$tuhin_page_sections = get_post_meta($tuhin_current_page_id,'tuhin_page_section');
foreach ($tuhin_page_sections as $tuhin_page_section) {
    $tuhin_section_id = $tuhin_page_section;
    $section_type = get_post_meta($tuhin_page_section, 'tuhin_section_type', true);
    get_template_part( "template-parts/sections/{$section_type}");
}

get_footer();