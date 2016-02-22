<?php
require_once __DIR__.'/autoload.php';

$db = new DB;
$items = News::getAll();
include __DIR__.'/views/index.php';