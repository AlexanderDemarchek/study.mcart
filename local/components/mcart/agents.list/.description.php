<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */


$arComponentDescription = array(
	"NAME" => GetMessage("AGENTS_LIST_COMPONENT"),
	"DESCRIPTION" => GetMessage("COMPONENT_DESC"),
	"PATH" => array(
		"ID" => "MCART_COMPONENTS",
		"NAME" => GetMessage("MCART_COMPONENTS"),
		"SORT" => 1	
	),

);
