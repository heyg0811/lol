<h2 class="bs-callout bs-callout-info">キャラクター一覧</h2>
<?php foreach ($characters as $key => $character): ?>
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
	<?php if ($key == 3 || $key == 6): ?>
		<div class="row" style="margin-bottom:50px">
			<div class="hidden-xs">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- side -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:100%;height:100px"
					     data-ad-client="ca-pub-8972128233832989"
					     data-ad-slot="8815518551"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<div class="visible-xs">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- side -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:100%;height:250px"
					     data-ad-client="ca-pub-8972128233832989"
					     data-ad-slot="8815518551"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
	<?php endif;?>
<?php endforeach; ?>
