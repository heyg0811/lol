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
    'created_at',
  );
  protected static $_json_list = array(
    'skill',
    'property',
  );
  protected static $primary_key = array('id');
}