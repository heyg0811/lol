<?php

/**
 * @brif    フレンド募集掲示板関連ファイル
 * @author  Sakamoto
 * @date    2014/09/13
 */

/**
 * @brif    フレンド募集掲示板用
 * @package app
 * @extends Controller_Template
 */
class Controller_Bbs_Friend extends Controller_Template {

  /**
   * @brif   前処理
   * @access public
   * @return
   */
  public function before() {
    // 決まり文句
    parent::before();
  }

  /**
   * @brif   後処理
   * @detail $response をパラメータとして追加し、after() を Controller_Template 互換にする
   * @access public
   * @return Response
   */
  public function after($response) {
    // 決まり文句
    $response = parent::after($response);
    return $response;
  }

  /**
   * @brif   フレンド一覧
   * @access public
   * @return
   */
	public function action_index()
	{
		$this->template->title = 'アイテム';
    $this->template->content  = View::forge('bbs/friend/index');
    
    $friend_model = new Model_BbsFriend();
    $config = array(
      'pagination_url' => '/bbs/friend/index',
      'total_items' => $friend_model->query()->count(),
      'per_page' => 10,
      'uri_segment' => 'page',
    );
    $pagination = Pagination::forge('mypagination',$config);
    
    $options = array(
      'limit' => $pagination->per_page,
      'offset' => $pagination->offset,
      'order_by' => array('created_at'=>'desc'),
    );
    
    $this->template->content->friends = $friend_model->find('all', $options);
    $this->template->content->pagination = $pagination;
    
    // 初期表示
    if (!Security::check_token()) {
      return ;
    }
    
    // バリデーション
    $validation = $friend_model->validate();
    $errors = $validation->error();
    if (!empty($errors)) {
      MyUtil::alert_set('入力エラーがあります','danger',$validation->show_errors());
      return ;
    }
    $friend_data = $validation->validated();
    $friend_data['created_at'] = time();
    
    // データの追加
    if (!$friend_model->insert($friend_data)) {
      // エラー設定
      MyUtil::alert_set('投稿時にエラーが発生しました','danger');
      return ;
    }
    MyUtil::alert_set('投稿しました','info');
    Response::redirect('bbs/friend/index');
	}
}
