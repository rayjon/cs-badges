<?php
$data = file_get_contents('https://www.codeschool.com/users/raycjon.json');
$json_data = json_decode($data, true);
$courses = $json_data['courses']['completed'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Raymond Johnson - Code School Badges</title>
		<link rel="stylesheet" href="/main.css" media="screen" title="no title" charset="utf-8">
	</head>
<body>
	<header>
		<h1>Badges Raymond Johnson</h1>
	</header>
	<section class="badges">
		<?php
		foreach ($courses as $course) {
			echo '<article class="badge">';
			echo '<img src="' . $course['badge'] . '">';
			echo '<a href="' . $course["url"] . '">' . $course["title"] . '</a>';
			echo '</article>';
		}
		?>
	</section>
</body>
</html>
