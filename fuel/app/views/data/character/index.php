<div class="row">
	<h3 class="bs-callout bs-callout-info">キャラクター一覧</h3>
	<?php foreach ($characters as $character): ?>
	  <a href="detail?id=<?php echo $character['id']; ?>">
  	  <div class="row" id="char-list">
    	  <div class="col-sm-4">
    	    <?php echo Asset::img('character/'.$character['path'].'.png', array('class'=>'img-responsive')); ?>
    	  </div>
    	  <div class="col-sm-8 char-intro">
    	    <h3><?php echo $character['name']; ?><p class="char-rank">ランク<?php echo Config::get('CHARACTER.RANK.'.$character['rank'])?></p></h3>
    	    
    	    <p class="text-danger"><?php echo $character['caption']; ?></p>
    	    <p><?php echo $character['description']; ?></p>
    	  </div>
    	</div>
  	</a>
	<?php endforeach; ?>
</div>