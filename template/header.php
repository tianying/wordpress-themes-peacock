<!-- 页头 | 开始 -->
<div class="header">
	<!-- 顶部工具栏 | 开始 -->
	<div class="top-tools">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- 欢迎 | 开始 -->
					<span class="welcome text-color-gray">你好，欢迎来到<?php echo bloginfo("name"); ?>网站！</span>
					<!-- 欢迎 | 结束 -->				
				</div>
				<div class="col-md-4">
					<!-- 顶部工具栏菜单 | 开始 -->
					<div class="top-toolbar-menu text-color-gray">
						<?php
							wp_nav_menu(
					  	    	array(
					  	    		'menu'           =>       'topmenu',
					  	    		'menu_class'     =>       'topmenu',
					  	    		'depth'          =>       2
					 	        )
					 	    );
						?>
					</div>
					<!-- 顶部工具栏菜单 | 结束 -->
				</div>
			</div>
		</div>
	</div>
	<!-- 顶部工具栏 | 结束 -->
	<!-- 页面标示与工具栏 | 开始 -->
	<div class="site-toolbar">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<!-- 品牌 | 开始 -->
					<img src="<?php if (get_theme_mod( 'site_logo' )) : echo get_theme_mod( 'site_logo'); else: echo get_template_directory_uri().'/dist/images/site/logo.jpg'; endif; ?> " alt="site logo" />
					<!-- 品牌 | 结束 -->
				</div>
				<div class="col-md-9">
					<!-- 页面主要菜单 | 开始 -->
					<div class="main-menu">
						<div class="container">
							<?php
								wp_nav_menu(
									array(
										'menu'           =>       'mainmenu',
										'menu_class'     =>       'mainmenu',
										'depth'          =>       2
									)
								);
							?>
						</div>				
					</div>
					<!-- 页面主要菜单 | 结束 -->
				</div>
			</div>

		</div>
	</div>
	<!-- 页面标示与工具栏 | 结束 -->
	
</div>
<!-- 页头 | 结束 -->
