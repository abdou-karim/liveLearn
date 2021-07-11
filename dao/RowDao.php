<?php
class RowDao extends Manager
{
    public function __construct(){
        $this->tableName="row_trello";
        $this->className="Row";
    }
    public function add($obj)
    {
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }
}