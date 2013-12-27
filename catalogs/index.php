<?php  # home

//include ('./_inc/url.inc');
$title = 'about';
include ('../_inc/head.inc');
?>

<!-- content:primary -->
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
		echo (0 == $i) ? '<a href="' . $dir . $images[$i] . '" rel="shadowbox[' . ucwords($event_name) . '];options={slideshowDelay:2}" class="option"><img style="width:150px"src="./_img/buttons/' . $event_name . '_btn.jpg" alt="" /></a>' : '<a href="' . $dir . $images[$i] . '" rel="shadowbox[' . ucwords($event_name) . ']" class="hidden">' . $images[$i] . '</a>';
		echo "\n";
	}

	
}

?>


<h1 style="font-family:arial">catalogs</h1>

<div id="2010 Catalog One" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>2010 Catalog One</p>
	<?php drawGalleryElement(strtolower("2010_catalog_one")); ?>
</div>

<div id="2010 Catalog Two" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>2010 Catalog Two</p>
	<?php drawGalleryElement(strtolower("2010_catalog_two")); ?>
</div>

<div id="weaves" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>Weaves</p>
	<?php drawGalleryElement(strtolower("weaves")); ?>
</div>

<div id="single chairs" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>Single Chairs</p>
	<?php drawGalleryElement(strtolower("single_chairs")); ?>
</div>

<div id="bedroom" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>Bedroom</p>
	<?php drawGalleryElement(strtolower("bedroom")); ?>
</div>

<div id="dining" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>Dining</p>
	<?php drawGalleryElement(strtolower("dining")); ?>
</div>

<div id="living" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>Living</p>
	<?php drawGalleryElement(strtolower("living")); ?>
</div>

<div id="outdoor" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>Outdoor</p>
	<?php drawGalleryElement(strtolower("outdoor")); ?>
</div>

<div id="outdoor one" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>Outdoor 1</p>
	<?php drawGalleryElement(strtolower("outdoor_1")); ?>
</div>

<div id="outdoor two" style="border:1px solid #dcdcdc; width:150px; float:left;padding:2px; margin:10px">
	<p>Outdoor 2</p>
	<?php drawGalleryElement(strtolower("outdoor_2")); ?>
</div>

<?php include ('../_inc/foot.inc');?>