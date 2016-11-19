<?php
return array(
	'shop_vacation_day' => array(
		'id' => array('int', 11, 'unsigned' => 1, 'null' => 0, 'autoincrement' => 1),
		'order_id' => array('int', 11, 'unsigned' => 1, 'null' => 0, 'default' => '0'),
		'start' => array('varchar', 32, 'default' => ''),
		'finish' => array('varchar', 32, 'default' => ''),
		':keys' => array(
			'PRIMARY' => 'id',
		),
	),
);