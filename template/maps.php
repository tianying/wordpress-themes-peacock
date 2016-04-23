<?php
/*
Template Name: Maps
*/

get_header(); ?>

<?php get_template_part( 'template/header' ); ?>

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
					   <!-- 侧边栏导航 | 开始 -->
				  	   <div class="part">
					   		<div class="sidebar-navigation">
								 
								<div class="column-title">
									<i>+</i>
									<span>网站地图</span>
									<em>/ Maps</em>
								</div>

								<dl class="column-navigation">			
									
								</dl>

							</div>
					   </div>
					   <!-- 侧边栏导航 | 结束 -->
				  </div>
			 	  <div class="col-md-9">
				  	   <!-- 新闻动态 | 开始 -->
				  	   <div class="part">
					   		<div class="main-content">
								<?php if(have_posts()): while(have_posts()): the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; endif; ?>
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
