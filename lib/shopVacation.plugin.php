<?php

class shopVacationPlugin extends shopPlugin
{
	static function getParamsValue()
	{
		static $fields;
		if ( empty($fields) )
			foreach ( waContactFields::getAll() as $f )
				$fields[$f->getId()] = $f->getName();
		return $fields;
	}
	
	
	static function set($order_id)
	{
		$customer = waRequest::post('customer');
		$data = compact('order_id');
		$settings = wa()->getPlugin('vacation')->getSettings();
		foreach ( $settings as $k=>$v )
			$data[$k] = isset($customer[$v]) ? $customer[$v] : false;
		if ( count(array_filter($data)) == 3 )
			self::m()->insert($data);
	}
	
	
	/* event: backend_order */
	public function backendOrder($order)
	{
		return array(
			'info_section' => 'Vacation: '.self::dates($order['id'])
		);
	}
	
	
	static function dates($order_id)
	{
		$html = '';
		if ( $data = self::m()->getByField('order_id',$order_id) )
		{
			extract($data);
			$html = "$start - $finish";
		}
		return $html;
	}
	
	
	static protected function m()
	{
		static $m;
		if ( !$m )
			$m = new shopVacationPluginDateModel;
		return $m;
	}
}
