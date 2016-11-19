<?php

return array(
	'start' => array(
		'title' => 'Идентификатор поля начала отпуска',
		'value' => '',
		'control_type' => waHtmlControl::SELECT,
		'options_callback' => array('shopVacationPlugin', 'getParamsValue'),
		'subject' => 'standart',
	),
	'finish' => array(
		'finish' => 'Идентификатор поля конца отпуска',
		'value' => '',
		'control_type' => waHtmlControl::SELECT,
		'options_callback' => array('shopVacationPlugin', 'getParamsValue'),
		'subject' => 'standart',
	),
);