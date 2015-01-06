<?php
class Model_Card extends MyModel
{
  // テーブル情報を設定
  protected static $_table_name = 'card';
  protected static $_properties = array(
    'id',
    'name',
    'skill',
    'series',
    'attribute',
    'property',
    'evolution',
  );
  protected static $_json_list = array(
    'property',
    'evolution',
  );
  protected static $primary_key = array('id');
  
  public static function formatAttr($card)
  {
    $attributes = explode(',',$card['attribute']);
    foreach ($attributes as &$attribute) {
      if (strlen($attribute) >= 2) {
        $temp1 = Config::get('CARD.ATTRIBUTE.'.substr($attribute,0,1));
        $temp2 = Config::get('CARD.ATTRIBUTE.'.substr($attribute,-1));
        $attribute = $temp1."・".$temp2;
      } else {
        $attribute = Config::get('CARD.ATTRIBUTE.'.$attribute);
      }
    }
    $card['attribute'] = $attributes;
    return $card;
  }
}