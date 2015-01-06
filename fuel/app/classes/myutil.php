<?php

/**
 * @brif    自作関数ファイル
 * @author  Sakamoto
 * @date    2014/12/29
 */

/**
 * @brif    自作関数用
 * @package app
 * @extends Controller
 */
class MyUtil {

  /**
   * @brif    アラートをセット
   * @access  public
   * @return
   */
	public static function alert_set($title,$type,$body=null)
	{
    $alert = array(
      'title' => $title,
      'type'  => $type,
    );
    if (!empty($body)) {
      $alert['body'] = $body;
    }
    if ($type == 'info') {
      Session::delete_flash();
    }
	  Session::set_flash('alert',$alert);
	}
	
	/**
   * @brif    アラートをセット
   * @access  public
   * @return
   */
	public static function get_card_style($id) {
	  $img_num = (int)($id/156);
	  $id=$id%156;
	  if ($id === 0) {
	  	$img_num -= 1;
      $id = 156;
	  }
	  $path = Config::get('CARD_IMG_URL'). Config::get('CARD.IMG.NAME.'.$img_num); 

	  $x_pos = (int) ($id%12);
	  $y_pos = (int) ($id/12);
	  if ($x_pos === 0) {
	    $y_pos -= 1;
	    $x_pos = 11;
	  } else {
	    $x_pos -= 1;
	  }
	  $x_pos = $x_pos * Config::get('CARD.IMG.WIDTH');
	  $y_pos = $y_pos * Config::get('CARD.IMG.HEIGHT');
	  
	  return sprintf(Config::get('CARD.IMG.STYLE'), $path, $x_pos, $y_pos);
	}
}
