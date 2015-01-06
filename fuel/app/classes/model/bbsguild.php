<?php
class Model_BbsGuild extends MyModel
{
  // テーブル情報を設定
  protected static $_table_name = 'bbs_guild';
  protected static $_properties = array(
    'id',
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
    ->add_rule('max_length', 25);
    $validation->add('body', '募集文')
    ->add_rule('required')
    ->add_rule('max_length', 65535);
    
    $form_data = Input::post(static::$_table_name, null);

    $validation->run($form_data , static::$_table_name);
    return $validation;
  }

}