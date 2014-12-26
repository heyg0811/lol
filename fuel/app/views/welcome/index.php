<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ソウスラ攻略 | トップ</title>
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
	      <a class="navbar-brand" href="#">ソウスラ攻略</a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li class="active"><a href="#">最新情報</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">データ <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">キャラクター</a></li>
	            <li><a href="#">カード</a></li>
	            <li><a href="#">アイテム</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ダンジョン <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">ダンジョン1-1</a></li>
	            <li><a href="#">ダンジョン1-2</a></li>
	            <li class="divider"></li>
	            <li><a href="#">ダンジョン2-1</a></li>
	            <li class="divider"></li>
	            <li><a href="#">ダンジョン3-1</a></li>
	            <li><a href="#">ダンジョン3-2</a></li>
	            <li><a href="#">ダンジョン3-3</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-right" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="検索">
	        </div>
	        <button type="submit" class="btn btn-default">検索</button>
	      </form>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="col-md-10 col-md-offset-1 content">
		<div class="row">
			<header>
				<?php echo Asset::img('soulslash.jpg', array('class'=>'img-responsive')); ?>
			</header>
			<div class="container-fluid">
				<div class="col-xs-12">
					<h3 class="bs-callout bs-callout-info">最新情報</h3>
					<ul class="list">
						<li>
							<div class="col-sm-3 col-lg-2">
								<?php echo date('Y年m月d日'); ?>
							</div>
							<div class="col-sm-9 col-lg-10">
								ほげほげほげほげほげほげほげ
							</div>
						</li>
						<li>
							<div class="col-sm-3 col-lg-2">
								<?php echo date('Y年m月d日'); ?>
							</div>
							<div class="col-sm-9 col-lg-10">
								ほげほげほげほげほげ
							</div>
						</li>
						<li>
							<div class="col-sm-3 col-lg-2">
								<?php echo date('Y年m月d日'); ?>
							</div>
							<div class="col-sm-9 col-lg-10">
								ほげほげほげほげほげほげほげほげほげほげほげほげほげほげ
							</div>
						</li>
					</ul>
				</div>
				<div class="col-xs-12">
					<h3 class="bs-callout bs-callout-info">最新キャラクター<p class="pull-right" style="font-size:0.5em; margin-top:9px;"><?php echo date('Y年m月d日'); ?></p></h3>
					<ul class="list">
						<li>
							<div class="col-sm-3 col-lg-2">
								新キャラクター
							</div>
							<div class="col-sm-9 col-lg-10">
								<a href="mailto:">
									クルセイダー
								</a>
							</div>
						</li>
						<li>
							<div class="col-sm-3 col-lg-2">
								特徴
							</div>
							<div class="col-sm-9 col-lg-10">
								ほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげ
							</div>
						</li>
					</ul>
				</div>
				<div class="col-xs-12">
					<h3 class="bs-callout bs-callout-info">コメント</h3>
					<ul class="list">
						<li>
							<p>名前　- <?php echo date('Y年m月d日'); ?></p>
							<p>ほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほん</p>
						</li>
						<li>
							<p>名前　- <?php echo date('Y年m月d日'); ?></p>
							<p>ほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほん</p>
						</li>
						<li>
							<p>名前　- <?php echo date('Y年m月d日'); ?></p>
							<p>ほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほん</p>
						</li>
					</ul>
					<div class="well">
						<form class="form-horizontal">
							<div class="form-group">
	              <label for="inputName" class="col-lg-2 control-label">名前</label>
	              <div class="col-lg-10">
	                <input type="text" class="form-control" id="inputName">
	              </div>
	            </div>
							<div class="form-group">
	              <label for="textArea" class="col-lg-2 control-label">本文</label>
	              <div class="col-lg-10">
	                <textarea class="form-control" rows="3" cols="3" id="textArea"></textarea>
	              </div>
	            </div>
	            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
              </div>
						</form>
					</div>
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
							52358
						</div>
					</li>
					<li>
						<div class="col-xs-6">
							コメント
						</div>
						<div class="col-xs-6">
							523
						</div>
					</li>
				</ul>
			</div>
			<div class="col-sm-7">
				<h4><span class="glyphicon glyphicon-check" aria-hidden="true"></span>　最新情報</h4>
				<ul class="list">
					<li>
						<a>ほげほげほげほげほげほげほげほげほげほげほげほげ</a>
					</li>
					<li>
						<a>ほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげほげ</a>
					</li>
					<li>
						<a>ほげほげほげほげほげほげ</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>
