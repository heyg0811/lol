<?php
class Model_Comment extends MyModel
{
  // テーブル情報を設定
  protected static $_table_name = 'comment';
  protected static $_properties = array(
    'id',
    'type',
    'name',
    'body',
    'created_at',
  );
  protected static $_json_list = array(
  );
  protected static $primary_key = array('id');
  
  /**
   * @brif    入力チェック
   * @access  public
   * @return
   */
  public static function validate()
  {
    $validation = Validation::forge();
    $validation->add('name', '名前')
    ->add_rule('max_length', 50);
    $validation->add('body', 'コメント')
    ->add_rule('required')
    ->add_rule('max_length', 65535);
    
    $validation->run();
    return $validation;
  }
}