<h1 class="char-name"><?php echo $character['name']; ?></h1>
<div class="head-img">
  <?php echo Asset::img('character/card/'.$character['path'].'.png', array('class'=>'img-responsive')); ?>
</div>
<div class="row" style="margin-top:50px; margin-bottom:30px">
	<?php if (MyUtil::getDevice() === 'PC'): ?>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- side -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:100%;height:100px"
			     data-ad-client="ca-pub-8972128233832989"
			     data-ad-slot="8815518551"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	<?php else: ?>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- side -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:100%;height:250px"
			     data-ad-client="ca-pub-8972128233832989"
			     data-ad-slot="8815518551"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	<?php endif; ?>
</div>
<h2 class="bs-callout bs-callout-info">スキル</h2>
<?php foreach ($character['skill'] as $key => $skill): ?>
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
  <?php if (!empty($skill['url'])): ?>
    <div class="iframe-content text-center">
      <iframe src="<?php echo $skill['url']; ?>" frameborder="0"></iframe>
    </div>
  <?php endif; ?>
  <?php if($key == 1):?>
    <div class="row" style="margin-bottom:50px;">
    	<?php if (MyUtil::getDevice() === 'PC'): ?>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- side -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:100%;height:100px"
					     data-ad-client="ca-pub-8972128233832989"
					     data-ad-slot="8815518551"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			<?php else: ?>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- side -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:100%;height:250px"
					     data-ad-client="ca-pub-8972128233832989"
					     data-ad-slot="8815518551"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			<?php endif; ?>
		</div>
  <?php endif;?>
<?php endforeach; ?>
