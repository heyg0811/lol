<?php
class Model_Character extends MyModel
{
  // テーブル情報を設定
  protected static $_table_name = 'character';
  protected static $_properties = array(
    'id',
    'name',
    'path',
    'rank',
    'skill',
    'property',
    'caption',
    'description',
  );
  protected static $_json_list = array(
    'skill',
    'property',
  );
  protected static $primary_key = array('id');
  
  public static function encode(&$character) {
    foreach (static::$_json_list as $val) {
      $character[$val] = json_decode($character[$val],true);
    }
  }
  
  // public static function find($id = null, $options = array())
  // {
  //   $characters = parent::find('all');
  //   foreach ($characters as $character) {
  //     $character['property'] = json_decode($character['property']);
  //   }
  //   return $characters;
  // }
}