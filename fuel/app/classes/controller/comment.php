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
	  // トークンチェック
    if (!Security::check_token()) {
      Response::redirect_back('/', 'refresh');
    }
    
    // バリデーション
    $comment_model = new Model_Comment();
    $validation = $comment_model->validate();
    $errors = $validation->error();
    if (!empty($errors)) {
      Response::redirect_back('/', 'refresh');
    }
    $comment_data = $validation->validated();
    $comment_data['created_at'] = time();
    switch (parse_url(Input::referrer(),PHP_URL_PATH)){
      case '/':
        $comment_data['type'] = Config::get('COMMENT.TYPE.TOP');
        break;
    }
    
    
    // データの追加
    if ($comment_model->insert($comment_data)) {
      // エラー設定
      Response::redirect_back('/', 'refresh');
    }
    Response::redirect_back('/', 'refresh');
	}
}
