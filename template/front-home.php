<?php
/*
Template Name: Front Home
*/

get_header(); ?>

<?php get_template_part( 'template/header' ); ?>

<!-- 首页幻灯片 | 开始 -->
<div class="main-slides">
	<?php echo do_shortcode( '[rev_slider alias="MainSlides"]' ); ?>
</div>
<!-- 首页幻灯片 | 结束 -->

<!-- 首页 | 开始 -->
<div class="index">

		<div class="container">
			 <div class="row">
			 	  <div class="col-md-3">
					   <!-- 图片新闻 | 开始 -->
				  	   <div class="part">
					   		<div class="photo-news">
								 <?php echo do_shortcode( '[rev_slider alias="PhotoNews"]' ); ?>
							</div>
					   </div>
					   <!-- 图片新闻 | 结束 -->
				  </div>
			 	  <div class="col-md-6">
				  	   <!-- 新闻动态 | 开始 -->
				  	   <div class="part">
					   		<div class="news">
					   			 <div class="title">
								 	  新闻动态
								 	  <span class="text-font-size-12"><a href="#" id="tabMoreLink">更多 &gt;&gt;</a></span>
								 </div>
								 <div class="content">
								 	  <div class="headlines">
								 	  	   <?php echo do_shortcode( '[news_index_headlines]' ); ?>
								 	 </div>
								 	 <div class="thelist">
								 	 	  <?php echo do_shortcode( '[news_index_list]' ); ?>
								 	 </div>
								</div>
							</div>
					   </div>
					   <!-- 新闻动态 | 结束 -->
				  </div>
				  <div class="col-md-3">
				  	   <!-- 企业文化 | 开始 -->
				  	   <div class="part">
					   		<div class="culture">
					   			 <div class="title">
								 	  企业文化
								 	  <span class="text-font-size-12"><a href="/culture/" id="tabMoreLink">更多 &gt;&gt;</a></span>
								 </div>
								 <div class="content">
									 <!-- 视频在线 | 开始 -->
								 	 <div class="video">
										<?php echo do_shortcode( '[culture_index]' ); ?>
									</div>
									 <!-- 视频在线 | 结束 -->
								</div>
							</div>
					   </div>
					   <!-- 企业文化 | 结束 -->
				  	   <!-- 广告 | 开始 -->
				  	   <div class="ad">
							<a href="#" title="">	
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/ad/ad-01.png">	
							</a>
					   </div>
					   <!-- 广告 | 结束 -->
				  </div>
			</div>
		</div>
		
		<!-- 友情链接 | 开始 -->
		<div class="part">
			 <div class="friendship-link">
			 	  <div class="container">
			 	  	   <div class="row">
			 		   		<div class="col-md-1">
								 <div class="title">友情链接</div>
				 			</div>
							<div class="col-md-11">
								 <!-- 顶部工具栏菜单 | 开始 -->
								 <div class="text-color-gray">
								 <?php
									if(has_nav_menu('secondary')) {
					  	    		  wp_nav_menu( $topmenu );
					  	  			} else {
					  	    		  wp_nav_menu(
										array(
											'menu'           =>       'friendshiplink',
					  	    				'menu_class'     =>       'friendshiplink',
					  	    				'depth'          =>       1
					 	          			)
					 	      		);
					  	  		}
								?>
								</div>
							<!-- 顶部工具栏菜单 | 结束 -->
				 			</div>
					   </div>
			 	  </div>
			 </div>
		</div>
		<!-- 友情链接 | 结束 -->

</div>
<!-- 首页 | 结束 -->

<?php get_template_part( 'template/footer' ); ?>

<?php get_footer(); ?>
