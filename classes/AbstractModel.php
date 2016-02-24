<?php
abstract class AbstractModel
{
    static protected $table;

    public static function getTable()
    {
        return static::$table;
    }
    public static function findAll()
    {
        $sql = 'SELECT * FROM '.static::getTable();
        $db=new DB();
        return $db->query($sql);
    }
    public static function findOne($id)
    {
        $sql = 'SELECT * FROM '.static::getTable();
        $db=new DB();
        return $db->query($sql,[':id'=>$id]);
    }
}