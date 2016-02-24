<?php
class NewsModel
    extends AbstractModel
{
    public function ActionAll()
    {
        echo NewsModel::GetTable();
        die;

    }
}