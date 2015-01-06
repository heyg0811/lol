<div class="row">
	<h2 class="bs-callout bs-callout-info">カード一覧</h2>
	<div class="col-sm-10 col-sm-offset-1">
		<?php foreach($cards as $key => $card): ?>
			<a href="/data/card/detail?id=<?php echo $card['id']; ?>">
				<div class="card-list text-center">
					<div class="col-sm-2">
				    <div class="card-img" style="<?php echo MyUtil::get_card_style($card['id']); ?> margin-left:auto;margin-right:auto;"></div>
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
			</a>
			<?php if ($key == 5): ?>
				<div class="row" style="margin-bottom:50px;">
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
			<?php endif; ?>
		<?php endforeach; ?>
		<div class="text-center">
			<?php echo Pagination::instance('mypagination')->render(); ?>
		</div>
	</div>
</div>


