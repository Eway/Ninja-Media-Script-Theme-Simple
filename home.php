<?php include('includes/header.php'); ?>

<div id="wrap">

	<?php include('partials/menu.php'); ?>


	<content id="media">
	
		<?php foreach($media as $item): ?>

			<?php include('partials/media-item.php'); ?>

		<?php endforeach; ?>

	</content>

	<?php echo $media->links(); ?>

</div>

<?php include('includes/footer.php'); ?>