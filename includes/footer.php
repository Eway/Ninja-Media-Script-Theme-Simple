
<script type="text/javascript" src="<?= URL::to('/') ?>/content/themes/simple/assets/js/jquery.fitvid.js"></script>
<script>
$(document).ready(function(){
	$('.item').find('.video_container').fitVids();

	$('.vine-thumbnail, .vine-thumbnail-play').click(function(){
		console.log('test');
		var embed = $(this).data('embed');
		$(this).parent('.video_container').html('<iframe class="vine-embed" src="' + embed + '" width="100%" height="600" frameborder="0"></iframe>');
	});
});
</script>

<script>
$(document).ready(function(){
	$('img.animation, .gif-play').click(function(){
		$(this).parent().find('.animation-play').show();
		$(this).parent().find('.gif-play').hide();
		$(this).parent().find('.animation').hide();
	});

	$('img.animation-play').click(function(){
		$(this).parent().find('.animation-play').hide();
		$(this).parent().find('.gif-play').show();
		$(this).parent().find('.animation').show();
	});
});
</script>

<script>

// Media Like Click Functionality
$(document).ready(function(){

	$('.media-like').click(function(){
		console.log('hit');
		// If user is not logged in redirect them to the signup page
		if($(this).data('authenticated') == false){
			window.location = '<?= URL::to("signup") ?>';
		}

		// Toggle the Active Class
		$(this).toggleClass('active');
		
		// Increment or Decrement the Like Count
		like_count = $(this).parent().find('.like-count');
		if($(this).hasClass('active')){
			like_count.text( parseInt(like_count.text()) + 1 );
		} else {
			like_count.text( parseInt(like_count.text()) - 1 );
		}

		// POST THE LIKE
		$.post("<?= URL::to('media') . '/add_like' ?>", { media_id: $(this).data('id') });
	});
});

</script>

<?php if(isset($settings->custom_js)): ?>
  <script>
    <?= $settings->custom_js ?>
  </script>
<?php endif; ?>

<?php if(isset($settings->analytics)): ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?= $settings->analytics ?>', 'auto');
    ga('send', 'pageview');

  </script>
<?php endif; ?>

</body>
</html>