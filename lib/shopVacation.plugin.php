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
		{
			foreach ( $settings as $k=>$v )
			{
				$a = explode('.',$data[$k]);
				$b = array_pop($a);
				$a[] = '20'.$b;
				$data[$k] = date('Y-m-d H:i:s',implode('.',$a));
			}
			$m = new shopVacationPluginDateModel;
			$m->insert($data);
		}
	}
	
	
	/* event: backend_order */
	public function backendOrder($order)
	{
		$html = '';
		$m = new shopVacationPluginDateModel;
		$data = $m->getByField('order_id',$order['id']);
		print_r($data);
		return array(
			'info_section' => $html
		);
	}
}