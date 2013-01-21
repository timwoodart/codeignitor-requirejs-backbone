<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?= (isset($page_title)) ? $page_title : 'Your Default Page Title'; ?></title>
	<meta name="description" content="<?= (isset($meta_description)) ? $meta_description : 'Your Default Meta Desciption' ; ?>" />
	<meta name="viewport" content="width=device-width">

	<? if (!empty($site_css)) : ?>
		<? foreach ($site_css as $css) : ?>
			<link rel="stylesheet" type="text/css" href="<?=$css;?>" />
		<? endforeach; ?>
	<? endif; ?>
 
	<? if (!empty($site_js)) : ?>
		<? foreach ($site_js as $js) : ?>
		    <script type="text/javascript" src="<?=$js;?>"></script>
		<? endforeach; ?>
	<? endif; ?>

    <? // RequireJS to handle js dependencies and client-side scripting ?>
    <script data-main="js/main" src="js/libs/require.js"></script>

</head>

<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->