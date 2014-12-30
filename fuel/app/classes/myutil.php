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
}
