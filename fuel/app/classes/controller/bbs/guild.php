<?php

/**
 * @brif    ギルド募集掲示板関連ファイル
 * @author  Sakamoto
 * @date    2014/09/13
 */

/**
 * @brif    ギルド募集掲示板用
 * @package app
 * @extends Controller_Template
 */
class Controller_Bbs_Guild extends Controller_Template {

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
   * @brif   ギルド掲示板一覧
   * @access public
   * @return
   */
	public function action_index()
	{
		$this->template->title = 'アイテム';
    $this->template->content  = View::forge('bbs/guild/index');
    
    $guild_model = new Model_BbsGuild();
    $config = array(
      'pagination_url' => '/bbs/guild/index',
      'total_items' => $guild_model->query()->count(),
      'per_page' => 10,
      'uri_segment' => 'page',
    );
    $pagination = Pagination::forge('mypagination',$config);
    
    $options = array(
      'limit' => $pagination->per_page,
      'offset' => $pagination->offset,
      'order_by' => array('created_at'=>'desc'),
    );
    
    $this->template->content->guilds = $guild_model->find('all', $options);
    $this->template->content->pagination = $pagination;
    
    // 初期表示
    if (!Security::check_token()) {
      return ;
    }
    
    // バリデーション
    $validation = $guild_model->validate();
    $errors = $validation->error();
    if (!empty($errors)) {
      MyUtil::alert_set('入力エラーがあります','danger',$validation->show_errors());
      return ;
    }
    $guild_data = $validation->validated();
    $guild_data['created_at'] = time();
    
    // データの追加
    if (!$guild_model->insert($guild_data)) {
      // エラー設定
      MyUtil::alert_set('投稿時にエラーが発生しました','danger');
      return ;
    }
    MyUtil::alert_set('投稿しました','info');
    Response::redirect('bbs/guild/index');
	}
}
