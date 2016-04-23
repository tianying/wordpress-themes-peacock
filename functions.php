<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Bamboo
 * @since Bamboo 1.0
 */

/*
|--------------------------------------------------------------------------
| Themes Install : 
|--------------------------------------------------------------------------
*/

require get_template_directory() . '/inc/themes-Install.php';

/*
|--------------------------------------------------------------------------
| Load Scripts Lib : 
|--------------------------------------------------------------------------
*/

/*require get_template_directory() . '/inc/scripts-lib.php';*/



/*
|--------------------------------------------------------------------------
| Modify template : Move page reference
|--------------------------------------------------------------------------
*/

require get_template_directory() . '/inc/modify.php';

/*
 |--------------------------------------------------------------------------
 | Post Article Definition : Set style
 |--------------------------------------------------------------------------
 */

require get_template_directory() . '/inc/post.php';

/*
|--------------------------------------------------------------------------
| The custom widget : Copyright text
|--------------------------------------------------------------------------
*/

require get_template_directory() . '/inc/custom-widget.php';


/*
|--------------------------------------------------------------------------
| Custom Fields : 
|--------------------------------------------------------------------------
*/

require get_template_directory() . '/inc/custom-fields.php';


/*
|--------------------------------------------------------------------------
| Customize Register : 
|--------------------------------------------------------------------------
*/

require get_template_directory() . '/inc/customize-register.php';

/*
|--------------------------------------------------------------------------

| Custom Template : 
|--------------------------------------------------------------------------
*/

require get_template_directory() . '/inc/custom-template.php';

/*
|--------------------------------------------------------------------------
| Woocommerce : 
|--------------------------------------------------------------------------
*/

require get_template_directory() . '/inc/woocommerce.php';
