<?php

/**
 * @brif    コメント関連ファイル
 * @author  Sakamoto
 * @date    2014/12/29
 */

/**
 * @brif    コメント用
 * @package app
 * @extends Controller
 */
class Controller_Comment extends Controller {

  /**
   * @brif    コメント投稿
   * @access  public
   * @return
   */
	public function action_add()
	{
	  $path = Model_Comment::getPath(Input::referrer());
	  $url  = $path . '#comment';
	  
	  // トークンチェック
    if (!Security::check_token()) {
      Response::redirect($url);
    }
    
    // バリデーション
    $comment_model = new Model_Comment();
    $validation = $comment_model->validate();
    $errors = $validation->error();
    if (!empty($errors)) {
      MyUtil::alert_set('入力エラーがあります','danger',$validation->show_errors());
      Response::redirect($url);
    }
    $comment_data = $validation->validated();
    $comment_data['created_at'] = time();
    $comment_data['path'] = $path;
    
    // データの追加
    if (!$comment_model->insert($comment_data)) {
      // エラー設定
      MyUtil::alert_set('投稿時にエラーが発生しました','danger');
      Response::redirect($url);
    }
    MyUtil::alert_set('投稿しました','info');
    Response::redirect($url);
	}
}
