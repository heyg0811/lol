<?php
class Model_Comment extends MyModel
{
  // テーブル情報を設定
  protected static $_table_name = 'comment';
  protected static $_properties = array(
    'id',
    'path',
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
    
    $form_data = Input::post(static::$_table_name, null);

    $validation->run($form_data , static::$_table_name);
    return $validation;
  }
  
  /**
   * @brif    パス生成
   * @access  public
   * @return
   */
  public static function getPath($url=null)
  {
    $path = null;
    if (empty($url)) {
      $path = $_SERVER["REQUEST_URI"];
    } else {
      $path = parse_url($url, PHP_URL_PATH);
      if ($query = parse_url($url, PHP_URL_QUERY)) {
        $path .= '?'. $query;
      }
    }
    return $path;
  }
  
  /**
   * @brif    urlに合ったコメントリストを取得
   * @access  public
   * @return
   */
  public static function getComments() {
    $options = array(
      'where'=>array(
        'path'=>static::getPath()
      ),
      'order_by'=>array(
        'created_at'=>'desc'
      ),
    );
    return static::find('all',$options);
  }
}