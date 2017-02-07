<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 30.01.2017
 * Time: 22:18
 */

namespace Model;


class Book2
{
    private $id;
    private $title;
    private $description;
    private $price;
    private $is_active;
    private $style_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getIsActive()
    {
        return $this->is_active;
    }

    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
    }

    public function getStyleId()
    {
        return $this->style_id;
    }

    public function setStyleId($style_id)
    {
        $this->style_id = $style_id;
    }
}