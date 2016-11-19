<?php

return array(
	'start' => array(
		'title' => 'Начало отпуска',
		'description' => 'Идентификатор поля начала отпуска',
		'value' => '',
		'control_type' => waHtmlControl::SELECT,
		'options_callback' => array('shopVacationPlugin', 'getParamsValue'),
		'subject' => 'standart',
	),
	'finish' => array(
		'title' => 'Конец отпуска',
		'description' => 'Идентификатор поля конца отпуска',
		'value' => '',
		'control_type' => waHtmlControl::SELECT,
		'options_callback' => array('shopVacationPlugin', 'getParamsValue'),
		'subject' => 'standart',
	),
);