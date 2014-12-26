<?php
/**
 *
 * @brif      環境定数用ファイル
 * @author    Sakamoto
 * @date      2014/12/26
 *
 */

return array(
  /**
  * データベース関連
  */
  'DB' => array(
    'TYPE'      => 'mysqli',
    'HOST'      => 'localhost',
    'NAME'      => 'soulslash_db',
    'USERNAME'  => 'root',
    'PASSWORD'  => 'nono0811',
  ),

  /**
  * プロジェクト環境タイプ
  */
  'FUEL' => array(
    // 'ENV' => Fuel::DEVELOPMENT,       // 開発環境
    // 'ENV' => Fuel::TEST,              // テスト環境
    // 'ENV' => Fuel::STAGING,           // ステージング環境
    'ENV' => Fuel::PRODUCTION,        // 製品環境
  ),
);
