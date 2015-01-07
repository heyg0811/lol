<?php

/**
 * @brif    アイテム関連ファイル
 * @author  Sakamoto
 * @date    2014/09/13
 */

/**
 * @brif    アイテム用
 * @package app
 * @extends Controller_Template
 */
class Controller_Data_Character extends Controller_Template {

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
   * @brif   キャラクター一覧
   * @access public
   * @return
   */
	public function action_index()
	{
		$this->template->title = 'キャラ一覧';
    $this->template->content  = View::forge('data/character/index');
    $this->template->content->characters = Model_Character::find('all');
	}
	
	/**
   * @brif   キャラクター詳細
   * @access public
   * @return
   */
	public function action_detail()
	{
		
    $this->template->content  = View::forge('data/character/detail');
    $character = Model_Character::find(Input::get('id',null));
    
    if (empty($character['skill'])) {
      Response::redirect('character/index');
    }
    $this->template->title = $character['name'];
    $this->template->content->character = Model_Character::decode($character);;
	}
}
