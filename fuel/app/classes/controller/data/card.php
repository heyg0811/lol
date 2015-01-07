<?php

/**
 * @brif    カード関連ファイル
 * @author  Sakamoto
 * @date    2014/09/13
 */

/**
 * @brif    カード用
 * @package app
 * @extends Controller_Template
 */
class Controller_Data_Card extends Controller_Template {

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
   * @brif   カード一覧
   * @access public
   * @return
   */
	public function action_index()
	{
	  $this->template->title = 'カード一覧';
    $this->template->content  = View::forge('data/card/index');
    $card_model = new Model_Card();
    $config = array(
      'pagination_url' => '/data/card/index',
      'total_items' => $card_model->query()->where('name','!=','')->count(),
      'per_page' => 10,
      'uri_segment' => 'page',
    );
    $pagination = Pagination::forge('mypagination',$config);
    
    $options = array(
      'where' => array(array('name','!=','')),
      'limit' => $pagination->per_page,
      'offset' => $pagination->offset,
    );
    $cards = $card_model->find('all', $options);
    $this->template->content->cards = $card_model->decode($cards);
    $this->template->content->pagination = $pagination;
	}
	
  /**
   * @brif   カード詳細
   * @access public
   * @return
   */
	public function action_detail()
	{
    $this->template->content  = View::forge('data/card/detail');
    $card_model = new Model_Card();
    $card = $card_model->find(Input::get('id',null));
    $card = $card_model->decode($card);
    $this->template->title = $card['name'];
    $this->template->content->card = $card_model->formatAttr($card);
	}
}
