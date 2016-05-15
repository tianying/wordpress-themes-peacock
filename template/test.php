<?php
/*
Template Name: News
*/

get_header(); ?>

<?php get_template_part( 'template/header' ); ?>

<?php 
	$tax = get_post_meta($post->ID, 'tax_value', true);
?>

<!-- 栏目特色 | 开始 -->
<div class="column-features">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/features/features-01.jpg">	
</div>
<!-- 栏目特色 | 结束 -->

<!-- 页面 | 开始 -->
<div class="page">

		<div class="container">
			 <div class="row">
			 	  <div class="col-md-3">

				  </div>
			 	  <div class="col-md-9">
				  	   <!-- 新闻动态 | 开始 -->
				  	   <div class="part">
					   		<div class="main-content">
								<?php 
										global $wp_query;
	
										//echo var_dump( $wp_query );
										echo var_dump( $wp_query->query_vars );
										echo var_dump( 'aa:'.$wp_query->query_vars['category'] );
								 ?>
									
							</div>
					   </div>
					   <!-- 新闻动态 | 结束 -->
				  </div>
				
				  </div>
			</div>
		</div>

</div>
<!-- 页面 | 结束 -->

<?php get_template_part( 'template/footer' ); ?>

<?php get_footer(); ?>
