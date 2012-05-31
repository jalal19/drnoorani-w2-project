<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>dr noorani</title>
	<link rel="stylesheet" type="text/css" 
	href="<?php bloginfo('template_url') ?>/reset.css" />
	<link rel="stylesheet" type="text/css"
	 href="<?php bloginfo('template_url') ?>/1styles.css" />
	<link rel="stylesheet" type="text/css" 
	href="<?php bloginfo('template_url') ?>/style.css" />
</head>
<body>
	<div class="container-topheader ">
		<div class="topheader w24">
			<div class="topmenu right last">
				<ul>	
                	<li><a href="#">خانه اصلی</a></li>
                    <li><a href="#">نمونه کارها</a></li>
                	<li><a href="#">خدمات</a></li>
                	<li><a href="#">گالری</a></li>
                	<li><a href="#">درباره ما</a></li>
                	<li><a href="#">تماس باما</a></li>
				</ul>
		<div class="clear"></div>
			</div>
			<div class="logo w7 mra"><h1>drnoorani</h1></div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="container-header"></div>
	<div class="container-addresspage"></div>
	<div class="container-content">
		<div class="content w24">
			<?php
				if(have_posts()){
				while(have_posts()){
				the_post();
			?>
			<article class='post'>
				<h2><?php the_title(); ?></h2>
				<p>
					<?php the_content(); ?>
				</p>
			</article>
			<?php
					}
				}else{
					echo 'Nothing ...';
				}
			?>
		</div>
	</div>
	<div class="container-footer">
		<div class="toggle">
			<div class="contenfooter w24">
				<div class="pont"></div>
				<div class="plus left">+</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="footernav">
			<div class="con-footernav w24"></div>
		</div>
	</div>
</body>
</html>