<?php

class Model_Counter extends MyModel
{
	protected static $_properties = array(
		'id',
		'ip',
		'device',
		'created_at',
		'updated_at',
		);
		
	protected static $_table_name = 'counter';

	public static function checkIp(){
		$options = array(
			'where' => array(array("ip",$_SERVER["REMOTE_ADDR"])),
			'order_by' => array(array("created_at","desc")),
		);
		$result = static::find('first',$options);
		if(!empty($result["created_at"])
		&& date("ymd",$result["created_at"]) == date("ymd",time())){
			return $result['id'];
		}
		return false;
	}

	public static function counts(){
		if($id = Model_Counter::checkIp()){
			static::updateById($id, array('updated_at'=>time()));
		}else{
			$values = array(
				"ip" => $_SERVER["REMOTE_ADDR"],
				"device" => MyUtil::getDevice(),
				"created_at" => time(),
				"updated_at" => time(),
			);
			static::insert($values);
		}
	}
}
