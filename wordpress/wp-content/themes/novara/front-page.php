<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="MSSmartTagsPreventParsing" content="true" /><!--[if lte IE 9]><meta http-equiv="X-UA-Compatible" content="IE=Edge"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Novara Restaurant | Coming Soon</title>
    <link type="text/plain" rel="author" href="authors.txt" />
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
    <?php wp_head(); ?>
</head>
<body>
    <!--[if lte IE 7]><iframe src="unsupported.html" frameborder="0" scrolling="no" id="no_ie6"></iframe><![endif]-->
<?php the_post(); ?>
	<div class="wrap">
		<div class="inner-wrap">
			<h1>Coming soon</h1>
			<small>to a theater near you</small>
			<img src="ui/images/logo.png" class="logo"/>
			<address>556 Adams St East Milton Square</address>
			<div>
				<?php the_content(); ?>
			</div>
		</div>
	</div>        
     <?php wp_footer(); ?> 
</body>
</html>