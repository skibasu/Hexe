<?php

/* global setting page  */
require_once( get_template_directory() . '/includes/acf-settings-page/acf-settings-page.php' );

/* theme scripts and styles */
require_once( get_template_directory() . '/includes/scripts-styles/scripts-styles.php' );

/* activate menus */
require_once( get_template_directory() . '/includes/activate-support/activate-support.php' );

/* register shordcodes */
require_once( get_template_directory() . '/includes/register-shordcodes/register-shordcodes.php' );

/* custom excerpt */
require_once( get_template_directory() . '/includes/custom-excerpt/custom-excerpt.php' );

/* ajax load post */
require_once( get_template_directory() . '/includes/load-post/load-post.php' );

/* customize pagination */
require_once( get_template_directory() . '/includes/custom-pagination/custom-pagination.php' );

/* set unlimited post per page for brands */
require_once( get_template_directory() . '/includes/preget-posts/preget-posts.php' );

/* get template part width variables */
require_once( get_template_directory() . '/includes/template-part-variable/jpr-get-template-part-with-vars.php' );

/* flexible content fields */
require_once( get_template_directory() . '/includes/display-theme-block/display-theme-block.php' );
