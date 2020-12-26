<?php 

if ($thingsidofake == true) {
	$spanstyle = $blackspan;
	$hover_text_color = $text_hover_white_css_class;
	$number_text_color = $first_text_color;
	$number_text_color_span = '<span class="'.$number_text_color.'">';

	if ($mobileversion == true) {
		$margindivstyle = '<div>';
		$mobileaname = 'm';
	}

	if ($mobileversion == false) {
		$margindivstyle = '<div style="margin-left:30px;">';
		$mobileaname = '';
	}
}

if ($thingsidofake == null) {
	$spanstyle = $whitespan;
	$hover_text_color = $text_hover_white_css_class;
	$number_text_color = $first_text_color;
	$number_text_color_span = '<span class="'.$number_text_color.'">';

	if ($mobileversion == true) {
		$margindivstyle = '<div>';
		$mobileaname = 'm';
	}

	if ($mobileversion == null) {
		$margindivstyle = '<div style="margin-left:30px;">';
		$mobileaname = '';
	}
}

echo $div_zoom_animation."\n";
echo '<div style="text-align:left;">'."\n";

#Media loader for 2018 using "Watched VideoTypes 2018"
#Used in the ArchivedMedias Tab on Watch History.php

#Number resetter for Watch History website
if ($website_name == $sitewatch) {
	$watchednumb = $watched_episodes_2018_line_number;

	#Medias numbers for 2018 Medias
	$watched_movies_number = 4; 
	$watched_cartoons_number = 5;
	$watched_series_number = 5; 
	$watched_animes_number = 18;
	$watched_videos_number = 20;

	#Line number for the 2018 Watched VideoTypes.txt
	$original1 = 12;
	$original2 = 18;
	$original3 = 25;
	$original4 = 32;
	$original5 = 52;

	#Definer for the original numbers of medias
	$media_type_movies_line = $original1;
	$media_type_cartoons_line = $original2;
	$media_type_series_line = $original3;
	$media_type_animes_line = $original4;
	$media_type_videos_line = $original5;
}

if ($website_name == $sitewatch and $thingsidofake == true and $site == $sitethingsido or $website_name == $sitethingsido) {
	echo '<b>'.$blackspan.$txts[3].': '.$spanc.'</b>'.$number_text_color_span.'<b>'.$watchednumb.'</b>'.$spanc.'<br />'."\n";
}

if ($website_name == $sitewatch and $thingsidofake == null or $thingsidofake == false and $watchmedias2018 == true) {
	echo '<b>'.$whitespan.$txts[3].': '.$spanc.'</b>'.$number_text_color_span.'<b>'.$watchednumb.'</b>'.$spanc.'<br />'."\n";
}

if ($website_name != $sitewatch) {
	echo '<'.$n.' class="" style="text-align:left;">'."\n";

	echo '<b>'.'<a href="'.$main_website_url.'/watch/" class="w3-text-white">'.$txts[4].'</a>'.': </b>'.$number_text_color_span.'<b>'.$watchednumb.'</b>'.$spanc.'<br />'."\n";
}

if ($website_name == $sitewatch and $thingsidofake == true and $site == $sitethingsido or $website_name == $sitethingsido) {
	$a2019 = false;
}

if ($website_name == $sitewatch and $thingsidofake == null or $thingsidofake == false and $watchmedias2018 == true) {
	$a2019 = true;
}

if ($website_name == $site2018) {
	$regeneratemedias2019 = false;
	$a2019 = true;
}

#YearMaker2.php reader
include $yearmakerfilephp2test;

print_r($medias);

echo '<br />'."\n";
echo '<b>'.$medias[0].'</b>'."\n".
'<b>'.$medias[1].'</b>'."\n".
'<b>'.$medias[2].'</b>'."\n".
'<b>'.$medias[3].'</b>'."\n".
'<b>'.$medias[4].'</b>'."\n";
echo '<br />'."\n";
$v = 0;
#Movies part
echo '<a name="'.$mediastexts[$v].'"></a>'."\n";
echo '<b>'.$medias[$v].'</b>'."\n";
$v++;
$v++;
$a = 0;
$a2 = $watched_movies_number;
$e = 0;
$e2 = 1;
$line = $media_type_movies_line;
$i = array();

if ($a == 0) {
	$i[$a] = $line;
}

while ($a < $a2) {
	$i[$a] = $media_type_movies_line++;
	$a++;
}

while ($e < $watched_movies_number) {
	include $mediastyler;

	$echostyle = '<span class="'.$text_hover_white_css_class.'">'.$namespan.' - '.$watchedfile2018[$i[$e]].$spanc."<br />"."\n";
	echo $echostyle;
	$i++;
	$e++;
	$e2++;
}

$media_type_movies_line = $original1;
$media_type_cartoons_line = $original2;
$media_type_series_line = $original3;
$media_type_animes_line = $original4;
$media_type_videos_line = $original5;

echo '<br />'."\n";
echo '<a name="'.$mediastexts[$v].'"></a>'."\n";
echo '<b>'.$medias[$v].'</b>'."\n";
$v--;

$a = 0;
$a2 = $watched_cartoons_number;
$e = 0;
$e2 = 1;
$line = $media_type_cartoons_line;
$i = array();

if ($a == 0) {
	$i[$a] = $line;
}

while ($a < $a2) {
	$i[$a] = $media_type_cartoons_line++;
	$a++;
}

while ($e < $watched_cartoons_number) {
	include $mediastyler;

	$echostyle = '<span class="'.$text_hover_white_css_class.'">'.$namespan.' - '.$watchedfile2018[$i[$e]].$spanc."<br />"."\n";
	echo $echostyle;
	$e++;
	$e2++;
}

$media_type_movies_line = $original1;
$media_type_cartoons_line = $original2;
$media_type_series_line = $original3;
$media_type_animes_line = $original4;
$media_type_videos_line = $original5;

echo '<br />'."\n";
echo '<a name="'.$mediastexts[$v].'"></a>'."\n";
echo '<b>'.$medias[$v].'</b>'."\n";
$v++;
$v++;

$a = 0;
$a2 = $watched_series_number;
$e = 0;
$e2 = 1;
$line = $media_type_series_line;
$i = array();

if ($a == 0) {
	$i[$a] = $line;
}

while ($a < $a2) {
	$i[$a] = $media_type_series_line++;
	$a++;
}

while ($e < $watched_series_number) {
	include $mediastyler;

	$echostyle = '<span class="'.$text_hover_white_css_class.'">'.$namespan.' - '.$watchedfile2018[$i[$e]].$spanc."<br />"."\n";
	echo $echostyle;
	$e++;
	$e2++;
}

$media_type_movies_line = $original1;
$media_type_series_line = $original2;
$media_type_cartoons_line = $original3;
$media_type_animes_line = $original4;
$media_type_videos_line = $original5;

echo '<br />'."\n";
echo '<a name="'.$mediastexts[$v].'"></a>'."\n";
echo '<b>'.$medias[$v].'</b>'."\n";
$v++;

$a = 0;
$a2 = $watched_animes_number;
$e = 0;
$e2 = 1;
$line = $media_type_animes_line;
$i = array();

if ($a == 0) {
	$i[$a] = $line;
}

while ($a < $a2) {
	$i[$a] = $media_type_animes_line++;
	$a++;
}

while ($e < $watched_animes_number) {
	include $mediastyler;

	$echostyle = '<span class="'.$text_hover_white_css_class.'">'.$namespan.' - '.$watchedfile2018[$i[$e]].$spanc."<br />"."\n";
	echo $echostyle;
	$e++;
	$e2++;
}

$media_type_movies_line = $original1;
$media_type_series_line = $original2;
$media_type_cartoons_line = $original3;
$media_type_animes_line = $original4;
$media_type_videos_line = $original5;

echo '<br />'."\n";
echo '<a name="'.$mediastexts[$v].'"></a>'."\n";
echo '<b>'.$medias[$v].'</b>'."\n";
$v++;

$a = 0;
$a2 = $watched_videos_number;
$e = 0;
$e2 = 1;
$line = $media_type_videos_line;
$i = array();

if ($a == 0) {
	$i[$a] = $line;
}

while ($a < $a2) {
	$i[$a] = $media_type_videos_line++;
	$a++;
}

while ($e < $watched_videos_number) {
	include $mediastyler;

	$echostyle = '<span class="'.$text_hover_white_css_class.'">'.$namespan.' - '.$watchedfile2018[$i[$e]].$spanc."<br />"."\n";
	echo $echostyle;
	$e++;
	$e2++;
}

$media_type_movies_line = $original1;
$media_type_series_line = $original2;
$media_type_cartoons_line = $original3;
$media_type_animes_line = $original4;
$media_type_videos_line = $original5;

echo '<br /><br /><br />';

if ($website_name == $sitewatch) {
	echo '';
}

else {
	echo '</'.$n.'>'."\n";
}

echo $div_close."\n";
echo $div_close."\n";

?>