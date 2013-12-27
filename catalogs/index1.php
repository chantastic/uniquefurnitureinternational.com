<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Shadowbox.js Media Viewer</title>

<style type="text/css" media="screen">
	.hidden {
	  display: none;
	}
</style>

<script type="text/javascript" src="../src/adapter/shadowbox-base.js"></script>
<script type="text/javascript" src="../src/shadowbox.js"></script>
<script type="text/javascript">

Shadowbox.loadSkin('classic', '../src/skin');
Shadowbox.loadLanguage('en', '../src/lang');
Shadowbox.loadPlayer(['flv', 'html', 'iframe', 'img', 'qt', 'swf', 'wmp'], '../src/player');

window.onload = function(){

    Shadowbox.init();

};

</script>
</head>

<body>



<?php

function drawGalleryElement ( $event_name ) {
	
	// create array of images
	
	$dir = "./_img/" . $event_name . "/";
	$images = array();
	$i = 0;
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false ) {
				if ( $file !== '.' && $file !== '..' ) {
					$images[$i] = $file;
					$i++;
				}
			}
			closedir($dh);
		}
	}
	
	// draw gallery code
	
	for ($i=0; $i<sizeof($images); $i++) {
		echo (0 == $i) ? '<a href="' . $dir . $images[$i] . '" rel="shadowbox[' . ucwords($event_name) . '];options={slideshowDelay:2}" class="option">' . $images[$i] . '</a>' : '<a href="' . $dir . $images[$i] . '" rel="shadowbox[' . ucwords($event_name) . ']" class="hidden">' . $images[$i] . '</a>';
		echo "\n";
	}
	
	echo '
		</div><!-- //imageElement -->';	
	
}

?>


<?php drawGalleryElement(strtolower("1")); ?>
<?php drawGalleryElement(strtolower("2")); ?>


</body>

</html>
