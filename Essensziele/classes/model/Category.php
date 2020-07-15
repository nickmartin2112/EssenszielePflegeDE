<?php
namespace classes\model;

class Category{
    private $id;
    private $description;

    /**
     * Category constructor.
     * @param $id
     * @param $description
     */
    public function __construct($id, $description) {
        $this->id = $id;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }



}