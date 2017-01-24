<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<table class="ui celled  inverted table">

		<tr>
			<th>Identifiant</th>
			<th>Nom</th>
			<th>Email</th>
		</tr>

		<?php foreach($users as $user): ?>

			<tr>
				<td><?= $user['user']->getId();?></td>
				<td><?= $user['user']->getName();?></td>
				<td><?= $user['user']->getMail();?></td>
			</tr>

		<?php endforeach ?>
	</table>

</body>
</html> 