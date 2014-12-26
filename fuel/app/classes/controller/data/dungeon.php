<?php

/**
 * @brif    ダンジョン関連ファイル
 * @author  Sakamoto
 * @date    2014/09/13
 */

/**
 * @brif    ダンジョン用
 * @package app
 * @extends Controller_Template
 */
class Controller_Data_Dungeon extends Controller_Template {

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
   * @brif   ダンジョン一覧
   * @access public
   * @return
   */
	public function action_index()
	{
		$this->template->title = 'ダンジョン';
    $this->template->content  = View::forge('data/dungeon/index');
	}
}
