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
	 // $skill = array(
	 //   0=>array(
	 //     'name'  => 'クリティカルストライク',
	 //     'atack' => '37% × 4撃',
	 //     'cool'  => '5.0',
	 //     'description' => '魔力が宿ったいくつかの剣が、巨大な剣の形を作り',
	 //     'url' => '//www.youtube.com/embed/eDxCeAP3fzk',
	 //   ),
	 //   1=>array(
	 //     'name'=>'ウィンドスライサー',
	 //     'atack' => '160% × 1撃',
	 //     'cool'  => '8.0',
	 //     'description' => '内に秘めたパワーを野獣として現象化し、敵に送り飛ばし遠距離の敵にスプラッシュダメージを与える。',
	 //     'url' => '//www.youtube.com/embed/guuRCVFF5uw',
	 //   ),
	 //   3=>array(
	 //     'name'=>'スプリントスラッシュ',
	 //     'atack' => '165% × 1撃',
	 //     'cool'  => '15.0',
	 //     'description' => '自分の体に剛気をまとったまま遠距離の敵に突撃し、範囲内にいる敵にダメージ与えながらノックバックさせる。',
	 //     'url' => '//www.youtube.com/embed/V0RS50zZlC4',
	 //   ),
	 //   4=>array(
	 //     'name'=>'螺旋風雷斧',
	 //     'atack' => '20% × 15撃',
	 //     'cool'  => '36.0',
	 //     'description' => '巨大な斧をブーメランのように前方に飛ばして遠距離の敵にダメージを与える。',
	 //     'url' => '//www.youtube.com/embed/w3RonKbNP60',
	 //   ),
	 // );
	 // var_dump(json_encode($skill));exit;
		$this->template->title = 'キャラ詳細';
    $this->template->content  = View::forge('data/character/detail');
    $character = Model_Character::find(Input::get('id',null));
    
    if (empty($character['skill'])) {
      Response::redirect('character/index');
    }
    
    Model_Character::encode($character);
    $this->template->content->character = $character;
	}
}
