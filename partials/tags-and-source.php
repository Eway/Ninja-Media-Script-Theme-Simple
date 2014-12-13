<?php $tags = array_filter(explode(',', $item->tags)); ?>
	
<?php if(count($tags) >= 1 && !empty($tags)): ?>

	<div class="media_tags">
		
		<h4><i class="fa fa-tags"></i> <?= strtolower(Lang::get('lang.tags')) ?>:</h4>

		<ul class="tags">
			<?php $count = 0; ?>
			<?php foreach($tags as $tag): ?>
				
				<?php $count += 1; ?>
				
				<li><a href="<?= URL::to('tags') . '/' . $tag ?>"><?= $tag ?></a><?php if(count($tags) != $count): ?>,<?php endif; ?></li>

			<?php endforeach; ?>
		</ul>

	</div>

<?php endif; ?>

<?php if(isset($item->link_url) && $item->link_url != ''): ?>
	<div class="media_source">
		<i class="fa fa-globe"></i> <?= strtolower(Lang::get('lang.source')) ?>: <a href="<?= $item->link_url ?>" target="_blank" class="label label-success" style="margin-top:6px;"><?= $item->link_url; ?></a>
	</div>
<?php endif; ?>

<br />