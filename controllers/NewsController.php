<?php
class NewsController
{
    public function ActionAll
    {
        $db=new DB();
        $res=$db->query('SELECT * FROM news WHERE id=:id',[':id'=>1]);
        var_dump($res);
        die;
    }
}