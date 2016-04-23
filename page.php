<?php
/*
Template Name: Page
*/

get_header(); ?>

<?php get_template_part( 'template/header' ); ?>

<!-- 电子商城 | 开始 -->
<div class="shop">
	<div class="container">

		<div class="row">
			<div class="col-md-9">
				<!-- 商城主要内容 | 开始 -->				
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
				<!-- 商城主要内容 | 结束 -->
			</div>
			<div class="col-md-3">
			<!-- 商城侧边工具栏 | 开始 -->
			page
			<!-- 商城侧边工具栏 | 结束 -->
			</div>
		</div>

	</div>
</div>
<!-- 电子商城 | 结束 -->

<?php get_template_part( 'template/footer' ); ?>

<?php get_footer(); ?>
