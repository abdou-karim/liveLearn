<?php


class Row implements Hydra
{
    private $title;
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    //oneTomany
    private $collectionCard=[];
    private $status;

    public function  __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }
    public function hydrate($row)
    {
        $this->id=$row['id'];
        $this->title=$row['title'];
        $this->status=$row['status'];
    }
    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}