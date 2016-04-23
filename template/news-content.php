<?php
/*
Template Name: News Content
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
									<span>新闻动态</span>
									<em>/ News</em>
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
					   		<div class="main-content text-color-gray">
								<?php echo do_shortcode('[custom_type_content type="news" taxonomy="news_category"]'); ?>
								<div class="notice-related-articles">
									<h2>相关链接</h2>	
									<ul>
										<?php echo do_shortcode('[custom_type_related_articles type="news"]'); ?>
									</ul>
								</div>
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
