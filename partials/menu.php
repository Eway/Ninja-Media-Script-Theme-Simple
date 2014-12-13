<ul id="menu">
	<li <?php if(Request::is('/') || Request::is('/*')): ?>class="active"<?php endif; ?>><a href="<?= URL::to('/'); ?>"><?= strtolower(Lang::get('lang.new')) ?></a></li>
	<li <?php if(Request::is('popular') || Request::is('popular/*')): ?>class="active"<?php endif; ?>><a><?= strtolower(Lang::get('lang.popular')) ?> <b class="caret"></b></a>
		<ul>
			<li <?php if(Request::is('popular/week')): ?>class="active"<?php endif; ?>><a href="<?= URL::to('popular/week'); ?>"><?= strtolower(Lang::get('lang.for_the_week')) ?></a></li>
			<li <?php if(Request::is('popular/month')): ?>class="active"<?php endif; ?>><a href="<?= URL::to('popular/month'); ?>"><?= strtolower(Lang::get('lang.for_the_month')) ?></a></li>
			<li <?php if(Request::is('popular/year')): ?>class="active"<?php endif; ?>><a href="<?= URL::to('popular/year'); ?>"><?= strtolower(Lang::get('lang.for_the_year')) ?></a></li>
			<li <?php if(Request::is('popular')): ?>class="active"<?php endif; ?>><a href="<?= URL::to('popular'); ?>"><?= strtolower(Lang::get('lang.all_time')) ?></a></li>
		</ul>
	</li>
	<li <?php if(Request::is('category') || Request::is('category/*')): ?>class="active"<?php endif; ?>><a><?= strtolower(Lang::get('lang.categories')) ?> <b class="caret"></b></a>
		<ul>
        	<?php foreach ($categories as $category): ?>
    			<li <?php if(Request::is('category/' . strtolower($category->name))): ?>class="active"<?php endif; ?>><a href="<?= URL::to('category') . '/' . strtolower($category->name) ?>"><?= $category->name ?></a></li>
        	<?php endforeach; ?>
    	</ul>
	</li>
	<?php if($settings->pages_in_menu): ?>
		<li <?php if(Request::is('pages') || Request::is('pages/*')): ?>class="active"<?php endif; ?>><a>more <b class="caret"></b></a>
			<ul>
			<?php foreach($pages as $page): ?>
              <li <?php if(Request::is('pages/' . strtolower($page->url))): ?>class="active"<?php endif; ?>><a href="<?= URL::to('pages') . '/' . $page->url ?>"><?= $page->title ?></a></li>
            <?php endforeach; ?>
            </ul>
		</li>
	<?php endif; ?>
</ul>

<form class="navbar-form search-form col-xs-12" role="search" style="margin:0px; padding-top:4px;" action="<?= URL::to('/') ?>" method="GET">
	<div class="form-group">
    	<input type="text" id="search" class="form-control" name="search" placeholder="<?= strtolower(Lang::get('lang.search')) ?>">
	</div>
</form>

<div class="clear"></div>