<?php
class Model_Notice extends MyModel
{
  // テーブル情報を設定
  protected static $_table_name = 'notice';
  protected static $_properties = array(
    'id',
    'title',
    'url',
    'created_at',
    'updated_at',
  );
  protected static $_json_list = array(
  );
  protected static $primary_key = array('id');
}