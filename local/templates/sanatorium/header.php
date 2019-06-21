<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}


?><!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID;?>" lang="<?= LANGUAGE_ID;?>" class="<?$APPLICATION->ShowProperty('HtmlClass');?>">
<head>
	<?$APPLICATION->ShowProperty('AfterHeadOpen');?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><? $APPLICATION->ShowTitle(); ?></title>


	<?
	$APPLICATION->ShowHead();
	$APPLICATION->ShowProperty('MetaOG');
	IncludeTemplateLangFile(__FILE__);
	$APPLICATION->ShowProperty('BeforeHeadClose');

    ?>
</head>

<body class="<?$APPLICATION->ShowProperty('BodyClass');?>" <?$APPLICATION->ShowProperty('BodyTag');?>  >
<?
$APPLICATION->ShowPanel();
?>
<main class="<?$APPLICATION->ShowProperty('MainClass');?>">