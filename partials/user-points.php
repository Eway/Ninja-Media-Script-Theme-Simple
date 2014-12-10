<h2><i class="icon-star"></i> <?= Lang::get('lang.user_points', array('username' => $user->username)) ?></h2>
<p><?= Lang::get('lang.view_info_about_points') ?></p>

<br />
<h3 style="background:#ccc; float:left; padding:11px; margin-top:0px;"><?= Lang::get('lang.user_points', array('username' => $user->username)) ?></h3>
<p style="padding:10px; line-height:auto; font-size:20px; background:#e3e3e3; float:left; margin-top:0px; height:25px;"><?= $user_points ?></p>
<div data-toggle="modal" data-target="#leaderboards" class="pull-left view-leaderboard" style="padding:10px; text-decoration:underline; background:#f5f5f5; font-size:14px; cursor:pointer; height:25px; line-height:30px; font-weight:bold; margin-top:0px;"><i class="fa fa-trophy" style="color:gold; margin-right:5px;"></i><?= Lang::get('lang.view_leaderboards') ?></div>
<div style="clear:both"></div>

<table class="table table-condensed" cellspacing="0">
	<tr>
		<th><?= Lang::get('lang.points') ?></th>
		<th><?= Lang::get('lang.description') ?></th>
		<th><?= Lang::get('lang.time') ?></th>
	</tr>
		<?php foreach($points as $point): ?>
		<tr>
			<td><?= $point->points ?></td>
			<td><?= $point->description ?></td>
			<td><?= $point->created_at ?></td>
		</tr>
		<?php endforeach; ?>
</table>

<script type="text/javascript">
$(document).ready(function(){
	$('.view-leaderboard').click(function(){
		$('.table').hide();
		$('.leaderboard').show();
	});
});
</script>