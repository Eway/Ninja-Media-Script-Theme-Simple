<?php include('includes/header.php'); ?>

<div id="wrap" class="page">



	<h2><?= $page->title ?></h2>
	<?php include('partials/menu.php'); ?>
	<div class="page-content">
		<?= $page->body; ?>
	</div>

</div>

<?php include('includes/footer.php'); ?>