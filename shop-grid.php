<?php
// Written by Auke Scheepstra
// Basic webshop
include 'opendb.php';
if(empty($_GET['query'])){
	$query='%';
} else {
	$query = '%'.$_GET['query'].'%';
}
$stmt = $db->prepare('SELECT * FROM polygons where name like ?');
$stmt->bindValue(1, $query, PDO::PARAM_STR);
$stmt->execute();
$results = $stmt->fetchAll();
function displayShop($db, $results){?>
<?php foreach($results as $item) {?>
	<a class="shop-item" href="shape.php?shape=<?=$item['id']?>">
		<img src="img/<?=$item['image']?>"></img>
		<div class="item-info">
			<div class="item-name"><?=$item['name']?></div>
			<div class="item-price">€<?=$item['vertices']?></div>
		</div>
	</a>
<?php }
}
displayShop($db, $results);?>