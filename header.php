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
?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo bloginfo("name"); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/js/bootstrap.min.js"></script>

	<!-- Loader Grids Tools -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/css/grids.css" rel="stylesheet">

	<!-- Loader User Site Style -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">

	<!-- Loading Site Jquery -->
	<script type='text/javascript' src='<?php echo esc_url( get_template_directory_uri() ); ?>/dist/js/site.js'></script>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
