<?php
namespace App\Entity;

class Movie
{
    private $title;
    private $imageUrl;
    private $price;

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
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * Student constructor.
     * @param $title
     * @param $imageUrl
     * @param $price
     */
    public function __construct($title, $imageUrl, $price)
    {
        $this->title = $title;
        $this->imageUrl = $imageUrl;
        $this->price = $price;
    }
}
