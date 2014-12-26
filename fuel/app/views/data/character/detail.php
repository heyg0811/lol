<div class="row">
  <h1 class="char-name"><?php echo $character['name']; ?></h1>
  <div class="char-card">
    <?php echo Asset::img('character/card/'.$character['path'].'.png', array('class'=>'img-responsive')); ?>
  </div>
	
	<h2 class="bs-callout bs-callout-info">スキル</h2>
	<?php foreach ($character['skill'] as $skill): ?>
  	  <h3>- <?php echo $skill['name']; ?></h3>
      <div class="row char-skill">
        <div class="col-xs-12">
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
      </div>
      <div class="iframe-content text-center">
        <iframe src="<?php echo $skill['url']; ?>" frameborder="0"></iframe>
      </div>
	<?php endforeach; ?>
</div>