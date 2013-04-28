<?php

	$title = !isset($title) ? __('meta.title'):$title;
	$description = !isset($description) ? __('meta.description'):$description;
	$thumbnail = !isset($thumbnail) ? ('http://'.$_SERVER['HTTP_HOST'].'/img/facebook.png'):$thumbnail;


?><!doctype html>
<html lang="<?=$language?>">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="content-language" content="<?=$language?>-ca">

	<title><?=$title?></title>
	<meta name="description" content="<?=$description?>">

	<meta name="viewport" content="width=device-width">

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-ico">
	<link rel="icon" href="/favicon.png" type="image/png">

	<!-- Open Graph meta -->
	<meta property="og:locale" content="<?=$language?>_CA"> 
	<meta property="og:image" content="<?=$thumbnail?>">
	<meta property="og:title" content="<?=$title?>">
	<meta property="og:type" content="website">
	<meta property="og:description" content="<?=$description?>">
	<meta property="og:url" content="<?=URI::full()?>">

	<!-- CSS -->
	<?=Asset::container('head')->styles()?>

	<!-- Head Javascript -->
	<script type="text/javascript">
		var LANGUAGE = "<?=$language?>";
	</script>
	<?=Asset::container('head')->scripts()?>

</head>
<body>

	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-XXXXXXXX-X');
	  ga('send', 'pageview');

	</script>

	<!-- Content -->
	<?=$content?>

	<!-- Footer javascript -->
	<?=Asset::container('footer')->scripts()?>

</body>
</html>