<?php
require_once __DIR__.'/autoload.php';

$db = new DB;
$items = NewsModel::findAll();
include __DIR__.'/views/index.php';