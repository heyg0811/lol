<?php Model_Counter::counts(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>ソウスラ攻略 | <?php echo $title; ?></title>
	<?php echo Asset::css('bootswatch/bootstrap.css'); ?>
	<?php echo Asset::css('original.css'); ?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<?php echo Asset::js('bootstrap.min.js'); ?>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/">プレガイド</a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li class="<?php echo Uri::active();?>"><a href="/">最新情報</a></li>
	        <li class="dropdown <?php echo Uri::active('data');?>">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">データ <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li class="<?php echo Uri::active('data',array('character'));?>"><a href="/data/character/index">キャラクター</a></li>
	            <li class="<?php echo Uri::active('data',array('card'));?>"><a href="/data/card/index">カード</a></li>
	            <li class="<?php echo Uri::active('data',array('item'));?>"><a href="/data/item/index">アイテム</a></li>
	            <li class="<?php echo Uri::active('data',array('dungeon'));?>"><a href="/data/dungeon/index">ダンジョン</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">掲示板 <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	          	<li><a href="/bbs/invite/index">招待コード</a></li>
	            <li><a href="/bbs/guild/index">ギルド募集</a></li>
	            <li><a href="/bbs/friend/index">フレンド募集</a></li>
	            <li><a href="/bbs/party/index">パーティ募集</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-right" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="未実装">
	        </div>
	        <button type="button" class="btn btn-default">検索</button>
	      </form>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="col-md-10 col-md-offset-1 content" style="min-height:75%">
		<div class="row">
			<header>
				<div class="head-img">
					<?php if (Uri::segment(1) == null || Uri::segment(1) == 'welcome'): ?>
					  <?php echo Asset::img('soulslash.jpg', array('class'=>'img-responsive')); ?>
					<?php endif; ?>
				</div>
			</header>
			<div class="container-fluid">
			  <div class="col-xs-12">
			    <?php echo $content; ?>
			    <?php if (Uri::segment(1) !== 'bbs'): ?>
			    	<div id="comment" class="row">
							<h2 class="bs-callout bs-callout-info">コメント</h2>
							<?php if($alert = Session::get_flash('alert')): ?>
								<div class="bs-component">
		              <div class="alert alert-dismissable alert-<?php echo $alert['type']; ?>">
		                <button type="button" class="close" data-dismiss="alert">×</button>
		                <h4><?php if(!empty($alert['title'])){echo $alert['title'];} ?></h4>
		                <p><?php if(!empty($alert['body'])){echo $alert['body'];} ?></p>
		              </div>
		            </div>
	            <?php endif; ?>
							<div class="comment-list">
								<ul class="list">
									<?php if(!$comments = Model_Comment::getComments()): ?>
										<h3 class="text-center">投稿されていません</h3>
									<?php endif;?>
									<?php foreach (Model_Comment::getComments() as $comment): ?>
										<li>
											<div class="row">
												<div class="col-sm-8 hidden-xs">
													<?php echo $comment['name']; ?>
												</div>
												<div class="col-sm-4 text-muted">
													- <?php echo date('Y年m月d日 H:i:s', $comment['created_at']); ?>
												</div>
												<div class="col-xs-12 visible-xs">
													<?php echo $comment['name']; ?>
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
							      <?php echo Form::label('名前', 'name'); ?>
	        					<?php echo Form::input('comment[name]','',array('class'=>'form-control')); ?>
							    </div>
									<div class="form-group">
							      <?php echo Form::label('コメント', 'body'); ?>
	        					<?php echo Form::textarea('comment[body]','',array('class'=>'form-control','rows'=>'4')); ?>
							    </div>
							    <?php echo \Form::csrf(); ?>
							    <div class="form-group">
							    	<?php echo Form::submit('','投稿',array('class'=>'btn btn-primary pull-right')); ?>
							    </div>
								</form>
							</div>
						</div>
			    <?php endif; ?>
			  </div>
      </div>
		</div>
	</div>
	<footer class="footer col-xs-12">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="col-sm-5">
				<h4><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>　カウンタ</h4>
				<ul class="list">
					<li>
						<div class="col-xs-6">
							アクセス
						</div>
						<div class="col-xs-6">
							<?php echo Model_Counter::query()->count();?>
						</div>
					</li>
					<li>
						<div class="col-xs-6">
							コメント
						</div>
						<div class="col-xs-6">
							<?php echo Model_Comment::query()->count();?>
						</div>
					</li>
					<li>
						<div class="col-xs-6">
							レス
						</div>
						<div class="col-xs-6">
							<?php echo MyUtil::getBbsCount();?>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-sm-7">
				<h4><span class="glyphicon glyphicon-check" aria-hidden="true"></span>　最新情報</h4>
				<ul class="list">
					<?php $notices = Model_Notice::find('all',array('limit'=>3,'order_by'=>array('updated_at'=>'desc'))); ?>
					<?php foreach ($notices as $notice): ?>
						<li>
							<a target="_blank" href="<?php echo $notice['url']; ?>"><?php echo $notice['title']?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>
