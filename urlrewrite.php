<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/uslugi/([0-9]+)',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/uslugi/detail.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
