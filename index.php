<?php
/*
This is a Open-Source-Software.
This open source software was released on 24.11.2019 by Uwe Hellmann and is subject to the MIT License.
You can download this Open-Source-Software from here: https://github.com/uweHellmann/Adult-Age-Verification-System-Altersnachweissystem
*/

if(isset($_GET['checked'])) {
	// Cookie set for a week
	setcookie('fsk', 'fsk', time()+604800);
	// Routing
	header('Location: index.php');
}

// Page Configuration
$fskPageTitle		= 'Bitte bestätigen Sie Ihr Alter!';
$fskMinimumAge	= '18';
$yourImprint		= 'impressum.php';
$yourPrivacy		= 'datenschutz.php';

// Check if cookie exists
if(!isset($_COOKIE['fsk'])) {
	echo '
	<!DOCTYPE html>
	<html>
				<head>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1" />
					<title>' . $fskPageTitle . '</title>
					<link rel="stylesheet" href="fsk-assets/css/main.css">
					<link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
				</head>
				<body>
					<div class="fskCheckBox">
						<h3>WARNUNG:<br> Diese Website enthält Materialien, die nicht für Minderjährige geeignet sind.</h3>
						<p>Minderjährige und Personen, die eine Betrachtung erotischer oder sexueller Inhalte ablehnen oder Personen, denen es vom Gesetz her verboten ist solche Inhalte zu betrachten, werden gebeten diese Seite umgehend zu verlassen.</p>
						<p>Sie dürfen auf diese Webseite nur dann zugreifen, wenn Sie mindestens ' . $fskMinimumAge . ' Jahre alt sind.</p>
						<div class="links">
							<p><a href="?checked" onclick="return window.confirm(\'Wir verwenden Cookies, um die einwandfreie Funktion unserer Website zu gewährleisten. Mit Bestätigung dieses Fensters gelangen sie zur unserer Website.\');" class="btn">Mindestalter bestätigen und Website betreten</a></p>
							<p><a href="' . $yourImprint . '">Impressum</a> &bull; <a href="' . $yourPrivacy . '">Datenschutz</a></p>
						</div>
					</div>
				</body>
				</html>';
}
else {
	echo '<p>Altersprüfung erfolgreich.<br>Age check successful.</p>';
}
?>
