<h2 class="text-center">招待コード置き場</h2>
<div class="bbs-list">
	<ul class="list">
		<?php if(empty($invites)): ?>
			<h3 class="text-center">投稿されていません</h3>
		<?php endif;?>
		<?php foreach ($invites as $invite): ?>
			<li>
				<div class="row">
					<div class="col-sm-8 hidden-xs">
						<?php echo $invite['name']; ?>
					</div>
					<div class="col-sm-4 text-muted">
						- <?php echo date('Y年m月d日 H:i:s', $invite['created_at']); ?>
					</div>
					<div class="col-xs-12 visible-xs">
						<?php echo $invite['name']; ?>
					</div>
				</div>
				<p><?php echo $invite['body']; ?></p>
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
	<form class="form-horizontal" action="/bbs/invite/index" method="post">
		<div class="form-group">
      <?php echo Form::label('名前', 'name'); ?>
			<?php echo Form::input('bbs_invite[name]','',array('class'=>'form-control')); ?>
    </div>
		<div class="form-group">
      <?php echo Form::label('本文', 'body'); ?>
			<?php echo Form::textarea('bbs_invite[body]','',array('class'=>'form-control','rows'=>'4')); ?>
    </div>
    <?php echo \Form::csrf(); ?>
    <div class="form-group">
    	<?php echo Form::submit('','投稿',array('class'=>'btn btn-primary pull-right')); ?>
    </div>
	</form>
</div>