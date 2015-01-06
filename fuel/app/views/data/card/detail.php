<div class="row text-center" style="margin-top:15px;">
  <div class="col-sm-2">
    <div class="card-img" style="<?php echo MyUtil::get_card_style($card['id']); ?>  margin-left:auto;margin-right:auto;"></div>
  </div>
  <div class="col-sm-10 char-intro">
  	<div class="row">
  		<div class="col-sm-6">
  			<h2><?php echo $card['name']; ?> </h2>
  		</div>
  		<div class="col-sm-6">
  			<h3>- <?php echo $card['skill']; ?></h3>
  		</div>
  	</div>
  </div>
</div>
<div class="row" style="margin-top:50px; margin-bottom:30px">
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
<div class="row">
  <h3 class="bs-callout bs-callout-info">進化前</h3>
  <div class="col-xs-12">
    <div class="col-sm-3" style="font-weight:bold;">
      <p>- シリーズ</p>
    </div>
    <div class="col-sm-9">
      <p><?php echo Config::get('CARD.SERIES.'.$card['series']); ?></p>
    </div>
    <div class="col-sm-3" style="font-weight:bold;">
      <p>- 属性</p>
    </div>
    <div class="col-sm-9">
      <?php foreach($card['attribute'] as $attribute): ?>
        <p><?php echo $attribute; ?></p>
      <?php endforeach; ?>
    </div>
    <div class="col-sm-3" style="font-weight:bold;">
      <p>- 特性</p>
    </div>
    <div class="col-sm-9">
      <?php foreach($card['property'] as $property): ?>
        <p><?php echo $property; ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php if (!empty($card['evolution'])): ?>
  <div class="row">
    <h3 class="bs-callout bs-callout-info">進化後</h3>
    <div class="col-xs-12">
      <div class="col-sm-3" style="font-weight:bold;">
        <p>- 特性</p>
      </div>
      <div class="col-sm-9">
        <?php foreach($card['evolution'] as $evolution): ?>
          <p><?php echo $evolution; ?></p>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
