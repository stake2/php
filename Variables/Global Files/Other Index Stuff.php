<?php 

if ($website_has_notifications == True and $website_deactivate_notification_setting != True) {
	echo '<script>
Change_Title();
</script>';
}

# Website notification file includer if setting is True
if ($website_has_notifications == True and $website_deactivate_notification_setting == False) {
	echo $notification_script."\n"."\n";
}

if ($site_haves_additional_website_content == True) {
	if (isset($additional_website_content)) {
		echo $additional_website_content;
	}
}

if ($site_is_prototype == false) {
	echo $animationstylecss."\n"."\n";
}

if ($website_name == $website_things_i_do) {
	echo '
<style>
a:link {color: blue!important;}
a:visited {color: blue!important;}
a:hover {color: blue!important;}
a:active {color: blue!important;} 
</style>';
}

if ($website_new_design_setting == True) {
	#SuperAnimes test loader
	require $newdesignsitephp;
	echo $new_design_script;
}

#Chapter Opener Script includer if the setting is True
if ($story_website_uses_chapter_opener == True) {
	echo "\n";
	echo '<script>'."\n";
	require $open_chapter_script_php;
	echo '</script>'."\n";
	echo "\n";
}

#echo $website_style_file;

/*
echo '<div class="'.$alternative_full_tab_style.'" style="'.$margin_style_10percent.' '.$rounded_border_style_2.'">';

echo '<h2><b><textarea type="text" id="websites_list" class="'.$alternative_full_tab_style.'" style="'.$roundedborderstyle7.'height: 1200px;width: 1200px;" placeholder="';

$array = "";

foreach ($websites_names_array_2 as $website) {
	$array .= $website.'
';
}

echo '"></textarea></b></h2>'."\n";

echo $div_close;

echo '<script>
document.getElementById("websites_list").value = `'.$array.'`; 

function Copy_Text_To_Clipboard() {

  var text_element = document.getElementById("websites_list");

	var text_content = text_element.textContent;

  console.log(text_content);
}

async function Test() {
	await navigator.clipboard.write("Hello");
}
</script>';

echo '<script>
Copy_Text_To_Clipboard();
Test();
</script>';

#print_r($websites_names_array_2);
*/

echo '<script>
function getElementByXpath(path) {
  return document.evaluate(path, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
}
</script>'."\n\n";

echo '<div style="display:none;" id="click_website_button_color">'.$click_button_color.$div_close."\n";
echo '<div style="display:none;" id="old_website_button_color">'.$first_button_color.$div_close."\n";
echo '<div style="display:none;" id="button_number">'.$tabnumb.$div_close."\n";

#echo "\n".'<div class="w3-text-white" style="text-weight: bold;">'."\n";

$i = 0;
foreach ($website_titles_array as $title) {
	#echo $i." - ".$title.": ".$website_types_array[$i]."<br />\n";

	$i++;
}

#echo $div_close."\n\n";

if ($website_type == $story_website_type) {
	echo '<script>
Chapter_Number = 1;
var Last_Chapter = '.$chapters.';
</script>';
}

echo '<style>
:root {
	--one-dot-six-line-height: 1.6;
}

@media screen and (max-width: 2000px) {
	h2 {
		font-size: 30px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}

	div.chapter-text-class {
		font-size: 18px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}
}

@media screen and (max-width: 1500px) {
	h2 {
		font-size: 25px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}

	div.chapter-text-class {
		font-size: 16px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}
}

@media screen and (max-width: 1000px) {
	h2 {
		font-size: 18px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}

	div.chapter-text-class {
		font-size: 14px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}
}

@media screen and (max-width: 700px) {
	h2 {
		font-size: 17px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}

	div.chapter-text-class {
		font-size: 13px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}
}

@media screen and (min-width: 400px) and (max-width: 500px) {
	h2 {
		font-size: 16px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}

	div.chapter-text-class {
		font-size: 13px!important;
		line-height: var(--one-dot-six-line-height)!important;
	}
}
</style>'."\n\n";

?>