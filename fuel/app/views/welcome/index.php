<h2 class="text-center">ソウルスラッシュサガ</h2>
<div class="row">
	<h2 class="bs-callout bs-callout-info">最新情報</h2>
	<ul class="list">
		<li class="hidden-xs text-muted">
			<div class="col-sm-2 col-lg-2">
				作成日
			</div>
			<div class="col-sm-2 col-lg-2">
				更新日
			</div>
			<div class="col-sm-8 col-lg-8">
				タイトル
			</div>
		</li>
		<?php foreach ($notices as $notice): ?>
			<li>
				<div class="hidden-xs">
					<div class="col-sm-2 col-lg-2">
						<?php echo date('Y-m-d',$notice['created_at']); ?>
					</div>
					<div class="col-sm-2 col-lg-2">
						<?php echo date('Y-m-d',$notice['updated_at']); ?>
					</div>
				</div>
				<div class="visible-xs">
					<div class="col-sm-2 col-lg-2">
						<span class="text-muted">作成日</span>　<?php echo date('Y-m-d',$notice['created_at']); ?>
					</div>
					<div class="col-sm-2 col-lg-2">
						<span class="text-muted">更新日</span>　<?php echo date('Y-m-d',$notice['updated_at']); ?>
					</div>
				</div>
				<div class="col-sm-8 col-lg-8">
					<a target="_blank" href="<?php echo $notice['url']; ?>">
						<?php echo $notice['title']; ?>
					</a>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="text-center">
		<?php echo Pagination::instance('mypagination')->render(); ?>
	</div>
</div>
<div class="row">
	<h2 class="bs-callout bs-callout-info">最新キャラクター</h2>
	<div class="col-sm-4 col-lg-3">
		<a href="/data/character/detail?id=<?php echo $character['id']; ?>">
    	<?php echo Asset::img('character/'.$character['path'].'.png', array('class'=>'img-responsive')); ?>
    </a>
  </div>
  <div class="col-sm-8 col-lg-9 char-intro">
  	<div class="row">
			<ul class="list">
				<li>
					<div class="col-sm-3 col-lg-2 text-muted">
						実装日
					</div>
					<div class="col-sm-9 col-lg-10">
						<?php echo date('Y-m-d', $character['created_at']); ?>
					</div>
				</li>
				<li>
					<div class="col-sm-3 col-lg-2 text-muted">
						キャラ名
					</div>
					<div class="col-sm-9 col-lg-10">
						<a href="/data/character/detail?id=<?php echo $character['id']; ?>">
							クルセイダー
						</a>
					</div>
				</li>
				<li>
					<div class="col-sm-3 col-lg-2 text-muted">
						特徴
					</div>
					<div class="col-sm-9 col-lg-10">
						<p class="text-danger"><?php echo $character['caption']; ?></p>
		  	    <p><?php echo $character['description']; ?></p>
					</div>
				</li>
			</ul>
  	</div>
	</div>
</div>