<div class="row">
	<h3 class="bs-callout bs-callout-info">最新情報</h3>
	<ul class="list">
		<?php foreach ($notices as $notice): ?>
			<li>
				<div class="col-sm-3 col-lg-2">
					<?php echo date('Y-m-d',$notice['created_at']); ?>
				</div>
				<div class="col-sm-9 col-lg-10">
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
	<h3 class="bs-callout bs-callout-info">最新キャラクター</h3>
	<div class="col-sm-4 col-lg-3">
		<a href="/data/character/detail?id=<?php echo $character['id']; ?>">
    	<?php echo Asset::img('character/'.$character['path'].'.png', array('class'=>'img-responsive')); ?>
    </a>
  </div>
  <div class="col-sm-8 col-lg-9 char-intro">
  	<div class="row">
			<ul class="list">
				<li>
					<div class="col-sm-3 col-lg-2">
						- 実装日
					</div>
					<div class="col-sm-9 col-lg-10">
						<?php echo date('Y-m-d', $character['created_at']); ?>
					</div>
				</li>
				<li>
					<div class="col-sm-3 col-lg-2">
						- キャラ名
					</div>
					<div class="col-sm-9 col-lg-10">
						<a href="/data/character/detail?id=<?php echo $character['id']; ?>">
							クルセイダー
						</a>
					</div>
				</li>
				<li>
					<div class="col-sm-3 col-lg-2">
						- 特徴
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
<div class="row">
	<h3 class="bs-callout bs-callout-info">コメント</h3>
	<div class="comment-list">
		<ul class="list">
			<?php foreach ($comments as $comment): ?>
				<li>
					<div class="row">
						<div class="col-sm-4">
							<?php echo $comment['name']; ?>
						</div>
						<div class="col-sm-4 pull-right">
							- <?php echo date('Y年m月d日', $comment['created_at']); ?>
						</div>
					</div>
					<p><?php echo $comment['body']; ?></p>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="well">
		<form class="form-horizontal" action="/comment/add" method="post">
			<div class="form-group">
	      <label for="inputName" class="col-lg-2 control-label">名前</label>
	      <div class="col-lg-10">
	        <input name="name" type="text" class="form-control" id="inputName">
	      </div>
	    </div>
			<div class="form-group">
	      <label for="textArea" class="col-lg-2 control-label">本文</label>
	      <div class="col-lg-10">
	        <textarea name="body" class="form-control" rows="3" cols="3" id="textArea"></textarea>
	      </div>
	    </div>
	    <?php echo \Form::csrf(); ?>
	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="submit" class="btn btn-primary pull-right">Submit</button>
	      </div>
	    </div>
		</form>
	</div>
</div>