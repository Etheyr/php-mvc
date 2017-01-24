
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<table class="ui celled inverted table">

		<tr>
			<th>Identifiant</th>
			<th>Nom</th>
			<th>Prix</th>
		</tr>

		<?php foreach($products as $product): ?>

			<tr>
				<td><?= $product['products']->getId();?></td>
				<td><?= $product['products']->getName();?></td>
				<td><?= $product['products']->getPrice();?></td>
			</tr>

		<?php endforeach ?>
	</table>

</body>
</html>