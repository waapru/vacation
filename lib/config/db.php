<?php
return array(
	'shop_vacation_date' => array(
		'id' => array('int', 11, 'unsigned' => 1, 'null' => 0, 'autoincrement' => 1),
		'order_id' => array('int', 11, 'unsigned' => 1, 'null' => 0, 'default' => '0'),
		'start' => array('varchar', 255, 'default' => ''),
		'finish' => array('varchar', 255, 'default' => ''),
		':keys' => array(
			'PRIMARY' => 'id',
		),
	),
);