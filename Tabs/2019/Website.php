<?php 

#2019 Website setter
if (strpos ($host_text, $website_selector_parameters[0].'='.$site2019) == true) {
	$selected_website = $site2019;

	$site = $selected_website;
	$current_year = $site;
	$website_name = $selected_website;
	$choosed_website_css_file = $css_file_pocb;

	$website_uses_tab_body_generator = true;

	#Site settings setter file includer
	include $setting_parameters_file;

	$tabs = array($current_year, 'Media', 'Friends', 'Screenshots', 'Tasks', 'Years');

	if (in_array($website_language, $en_languages_array)) {
		$tabnames = array($current_year, 'Media', 'Friends', 'Screenshots', 'Tasks', 'Years');
	}

	if (in_array($website_language, $pt_languages_array)) {
		$tabnames = array($current_year, 'Mídia', 'Amigos', 'Prints', 'Tarefas', 'Anos');
	}

	$tabnumb = count($tabnames) - 1;

	#Includer of the array of the GenericTabs files
	include $generic_tabs_generator_file;
}

?>