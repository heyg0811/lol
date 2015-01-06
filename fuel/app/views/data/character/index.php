<h2 class="bs-callout bs-callout-info">キャラクター一覧</h2>
<?php foreach ($characters as $character): ?>
  <a href="detail?id=<?php echo $character['id']; ?>">
	  <div class="row char-list">
  	  <div class="col-sm-4 col-lg-3">
  	    <?php echo Asset::img('character/'.$character['path'].'.png', array('class'=>'img-responsive')); ?>
  	  </div>
  	  <div class="col-sm-8 col-lg-9 char-intro">
  	  	<div class="row">
	  			<div class="col-sm-9 col-lg-10">
						<h3><?php echo $character['name']; ?></h3>
					</div>
					<div class="col-sm-3 col-lg-2" style="font-size:1.2em; margin-top:15px;">
						- ランク<?php echo Config::get('CHARACTER.RANK.'.$character['rank'])?>
					</div>
  	  	</div>
  	    <p class="text-danger"><?php echo $character['caption']; ?></p>
  	    <p><?php echo $character['description']; ?></p>
  	  </div>
  	</div>
	</a>
<?php endforeach; ?>
