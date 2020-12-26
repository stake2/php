<?php 

#Websites array
$i = 0;
foreach ($sitearray as $value) {
	$value = strtolower($value);

    ${"site$value"} = $value;

	$website_names_array[$i] = ${"site$value"};

	$i++;
}

#Website chapter_titles array
$i = 0;
foreach ($sitetitlesarray as $value) {
	$varresource = strtolower($website_names_array[$i]);

    ${"sitename_$varresource"} = $value;

	$sitetitlesarray[$i] = ${"sitename_$varresource"};

	$i++;
}

#Array of the paths of the website folders in the local drive
$i = 0;
foreach ($website_names_array as $value) {
    ${"sitefolder_$value"} = $php_tabs.ucwords($sitearray[$i]).'/';

	$website_folders[$i] = ${"sitefolder_$value"};

	$i++;
}

# Checks if the folder of the website exists, if it does not, it creates the folder
foreach ($website_folders as $folder) {
	if (!file_exists($folder)) {
		mkdir($folder);
	}
}

# V[Site].php Files array
$i = 0;
foreach ($sitearray as $value) {
	$varsfile = $php_tabs.ucwords($value).'/'.'V'.ucwords($value).'.php';
	if (file_exists($varsfile)) {
		$sitefilevars[$i] = $varsfile;
	}

	else {
		fopen($varsfile, 'w', 'UTF-8');
	}

	$i++;
}

# Website.php Files array
$i = 0;
foreach ($sitearray as $value) {
	$websitefile = $php_tabs.ucwords($value).'/'.'Website.php';

	if (file_exists($websitefile)) {
		$sitewebsitefiles[$i] = $websitefile;
	}

	else {
		fopen($websitefile, 'w', 'UTF-8');
	}

	$i++;
}

?>