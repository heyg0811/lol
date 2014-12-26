<div class="row">
  <h2 class="text-center"><?php echo $character['name']; ?></h2>
	<?php echo Asset::img('character/card/'.$character['path'].'.png', array('class'=>'img-responsive','style'=>'margin-top:15px;')); ?>
	<h3 class="bs-callout bs-callout-info">スキル</h3>
	<?php foreach ($character['skill'] as $skill): ?>
  	  <h4>- <?php echo $skill['name']; ?></h4>
      <div class="row">
        <div class="col-sm-7">
          <p><?php echo $skill['description']; ?></p>
        </div>
        <div class="col-sm-5">
          <dl class="dl-horizontal">
            <dt>攻撃力</dt>
            <dd><?php echo $skill['atack']; ?></dd>
            <dt>クールダウン</dt>
            <dd><?php echo $skill['cool']; ?>秒</dd>
          </dl>
        </div>
      </div>
      
      <div class="iframe-content text-center">
        <iframe src="<?php echo $skill['url']; ?>" frameborder="0"></iframe>
      </div>
	<?php endforeach; ?>
</div>