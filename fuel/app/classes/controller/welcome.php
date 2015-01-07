<?php

/**
 * @brif    トップページ関連ファイル
 * @author  Sakamoto
 * @date    2014/09/13
 */

/**
 * @brif    トップページ用
 * @package app
 * @extends Controller_Template
 */
class Controller_Welcome extends Controller_Template {

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
   * @brif     後処理
   * @detail   $response をパラメータとして追加し、after() を Controller_Template 互換にする
   * @access  public
   * @return   Response
   */
  public function after($response) {
    // 決まり文句
    $response = parent::after($response);
    return $response;
  }

  /**
   * @brif    トップページ表示
   * @access  public
   * @return
   */
	public function action_index()
	{
		$this->template->title = 'プレガイド';
    $this->template->content  = View::forge('welcome/index');
    
    $config = array(
      'pagination_url' => '/',
      'total_items' => Model_Notice::query()->count(),
      'per_page' => 5,
      'uri_segment' => 'page',
    );
    $pagination = Pagination::forge('mypagination',$config);
    
    $options = array(
      'limit' => $pagination->per_page,
      'offset' => $pagination->offset,
      'order_by' => array('updated_at'=>'desc'),
    );
    $this->template->content->notices = Model_Notice::find('all',$options);
    $this->template->content->pagination = $pagination;
    
    $options = array(
      'where' => array(array('path'=>Model_Comment::getPath())),
      'order_by' => array('created_at'=>'desc'),
    );
    $this->template->content->comments = Model_Comment::find('all',$options);
    
    $options = array(
      'order_by' => array('created_at'=>'desc'),
    );
    $this->template->content->character = Model_Character::find('first',$options);
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
