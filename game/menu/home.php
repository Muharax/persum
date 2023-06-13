<?php

require ('database/db.php');
$limit = 3;
$query = "SELECT count(*) FROM `nowosci_home`";

$s = $db_PDO->query($query);
$total_results = $s->fetchColumn();
$total_pages = ceil($total_results/$limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else{
    $page = $_GET['page'];
}



$starting_limit = ($page-1)*$limit;
$show  = "SELECT * FROM nowosci_home ORDER BY `n_id` DESC LIMIT ?,?";

$r = $db_PDO->prepare($show);
$r->execute([$starting_limit, $limit]);

while($res = $r->fetch(PDO::FETCH_ASSOC)):
?>
<div class="sg-info">
	<h3><?php echo $res['n_temat'];?></h3>
	<hr>
	<?php echo $res['n_tresc'];?>
</div>
<?php endwhile;?>


<?php
for ($page=1; $page <= $total_pages ; $page++):?>

<a class="pagina" href='<?php echo "?page=$page"; ?>' class="links"><?php echo $page; ?>
 </a>

<?php endfor; ?>
