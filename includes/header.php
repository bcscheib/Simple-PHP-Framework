<?php
	$SITE_ROOT = "http://site_path.com/"; // make this "/" for the default site route
?>
<html>
<head>
	<title><?php echo $PAGE_TITLE; ?> | SITE NAME</title>
	<meta content="<?php echo $PAGE_DESC; ?>" name="Description">
	<meta content="<?php echo $PAGE_KEYWORDS; ?>" name="Keywords">
	<meta content="English" name="Language">
	<meta content="never" name="Expires">
	<meta content="© 2011 SITE NAME" name="Copyright">
	<meta content="Deployy - Integrated Marketing Agency" name="Designer">
	<meta content="21 Days" name="Revisit-After">
	<meta content="Hawaii" name="State">
	<meta content="USA, United States, United States Of America, America, U.S.A., U.S.A" name="country">
	<meta content="index, follow" http-equiv="Robots">
	<meta name="google-site-verification" content="_lO-HVFO-vLWJxQZxOv5lb-BI8dgZ22PWhETsAe-Fog" />
	<link rel="icon" href="favicon.ico" mce_href="favicon.ico" type="image/x-icon"/>
	<link rel="Stylesheet" type="text/css" href="<?php echo $SITE_ROOT; ?>css/styles.css">
	
	<script type="text/javascript" language="javascript">
		// on document ready
		jQuery(document).ready = function(){
			<?php echo $DOCUMENT_READY_JS; ?>
		}
	</script>
	<?php include('ga.php'); ?>
</head>
<body class="<?php echo $PAGE_CLASS; ?>">
<div id="wrapper">
	<div id="header">
		<a id="logo" title="SITE NAME" href="<?php
			if($PAGE_CLASS!='home')
				echo $SITE_ROOT.'home';
			else
				echo '#';
		?>"><img border="0" src="<?php echo $SITE_ROOT; ?>images/logo.jpg" alt="SITE NAME" href="/"/></a>
	</div>
	<div id="content">