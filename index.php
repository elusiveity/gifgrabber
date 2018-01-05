<?php

# 

?>
<?php

$imgdir = 'img';
$imgs = scandir($imgdir);
$banned = array(".", "..");
$imgext = array("jpeg", "jpg", "gif", "png", "bmp", "webm");

foreach ($imgs as $img)
{
	if (in_array($img, $banned))
	{
		continue;
	} else {
		$results[] = $img;
	}

}

foreach ($results as $result)
{
	echo "<img src='$result' alt='$result'/>";
}

?>
