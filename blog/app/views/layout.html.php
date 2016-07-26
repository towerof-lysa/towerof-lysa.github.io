<!DOCTYPE html>
<html>
<head>
	<title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
	<meta name="description" content="<?php echo config('blog.description')?>" />
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />

	<link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&subset=latin,cyrillic-ext" rel="stylesheet" />

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
<body>
	<img class="title-box" src="https://s31.postimg.org/if11k1sor/title7.png">


	

	<aside>
		

		<h1><a href="<?php echo site_url() ?>"><?php echo config('blog.title') ?></a></h1>

		<p class="description"><?php echo config('blog.description')?></p>

		<ul>
			<li><a href="http://localhost:8888/towerof-lysa/">Home</a></li>
			<li><a href="http://localhost:8888/towerof-lysa/contact/">Contact Me</a></li>
			<li></li>
			<br>
			<a href="https://www.instagram.com/tower_of_lysa/" target="_blank"><img style="height: auto;
	width: 15%;" class="sm-icon" src="https://s26.postimg.org/bxgll6imh/insta.png"></a>
			<a href="https://twitter.com/tower_of_lysa" target="_blank"><img style="height: auto;
	width: 15%;" class="sm-icon" src="https://s26.postimg.org/fbys1be15/twitter.png"></a>
			<a href="https://www.linkedin.com/in/alysamccall" target="_blank"><img style="height: auto;
	width: 15%;" class="sm-icon" src="https://s26.postimg.org/n5zdmplu1/linkedin.png"></a>
		    <a href="https://www.pinterest.com/aakj24/" target="_blank"><img style="height: auto;
	width: 15%;" class="sm-icon" src="https://s26.postimg.org/54g8owrt5/pinterest.png"></a>

		</ul>

		<br>


		<p class="author"><?php echo config('blog.authorbio') ?></p>



	</aside>


	<section id="content">


		<?php echo content()?>

	</section>


<script>
	
var main = function() {
	
	$(".sm-icon").hover(function(){
  
	  	$(this).animate({opacity: '1.0'}); 
	  	}, 
	  	function(){ 
	    $(this).animate({opacity: '0.4'});
  
  });

}
$(document).ready(main);

</script>


</body>
</html>
