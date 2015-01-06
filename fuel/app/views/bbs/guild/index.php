<h2 class="text-center">ギルド募集</h2>
<div class="row" style="margin-bottom:50px; margin-top:30px">
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
<div class="bbs-list">
	<ul class="list">
		<?php if(empty($guilds)): ?>
			<h3 class="text-center">投稿されていません</h3>
		<?php endif;?>
		<?php foreach ($guilds as $guild): ?>
			<li>
				<div class="row">
					<div class="col-sm-8 hidden-xs">
						<?php echo $guild['name']; ?>
					</div>
					<div class="col-sm-4 text-muted">
						- <?php echo date('Y年m月d日 H:i:s', $guild['created_at']); ?>
					</div>
					<div class="col-xs-12 visible-xs">
						<?php echo $guild['name']; ?>
					</div>
				</div>
				<p><?php echo $guild['body']; ?></p>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="text-center">
		<?php echo Pagination::instance('mypagination')->render(); ?>
	</div>
</div>
<div class="well">
  <?php if($alert = Session::get_flash('alert')): ?>
		<div class="bs-component">
      <div class="alert alert-dismissable alert-<?php echo $alert['type']; ?>">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h4><?php if(!empty($alert['title'])){echo $alert['title'];} ?></h4>
        <p><?php if(!empty($alert['body'])){echo $alert['body'];} ?></p>
      </div>
    </div>
  <?php endif; ?>
	<form class="form-horizontal" action="/bbs/guild/index" method="post">
		<div class="form-group">
      <?php echo Form::label('名前', 'name'); ?>
			<?php echo Form::input('bbs_guild[name]','',array('class'=>'form-control')); ?>
    </div>
		<div class="form-group">
      <?php echo Form::label('募集文', 'body'); ?>
			<?php echo Form::textarea('bbs_guild[body]','',array('class'=>'form-control','rows'=>'4')); ?>
    </div>
    <?php echo \Form::csrf(); ?>
    <div class="form-group">
    	<?php echo Form::submit('','投稿',array('class'=>'btn btn-primary pull-right')); ?>
    </div>
	</form>
</div>