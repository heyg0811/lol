<h2 class="text-center">ソウルスラッシュサガ</h2>
<div class="row">
	<h2 class="bs-callout bs-callout-info">ゲーム情報</h2>
	<dl class="dl-horizontal" style="font-size:1.1em">
		<dt>ソウスラとは</dt>
		<dd>ネクソンがスマートフォン向けにリリースした横スクロールアクションゲームです。</dd>
		<dt>カテゴリ</dt>
		<dd>MORPG</dd>
		<dt>概要</dt>
		<dd>
			<p>キャラクターの装備はなく、5枚装備出来るモンスターカードでステータスの大半が決まります。</p>
			<p>最大3人の協力プレイが可能で、対人戦もあります。</p>
		</dd>
		<dt>課金可否</dt>
		<dd>
			<p>課金をすれば強くはなりますが、課金をしなくてもログインボーナスや、ランキングでクリスタルが沢山もらえる為、無課金でも十分プレイが可能です。</p>
			<p>最終的に課金してもしなくても、運の要素が大きいです。</p>
		</dd>
	</dl>
</div>
<div class="row">
	<h2 class="bs-callout bs-callout-info">サイト情報</h2>
	<dl class="dl-horizontal" style="font-size:1.1em">
		<dt>概要</dt>
		<dd>
			<p>ソウスラをプレイ中に良い攻略サイトが無かったので、簡単ですが作成しました。</p>
			<p>もっと、こんな情報が欲しい！や、ここはこうだよ！等があれば、コメント機能を用意しておりますので、ご指摘お願いします。</p>
		</dd>
	</dl>
</div>
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