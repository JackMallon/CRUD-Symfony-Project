<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieRepository")
 */

class Movie
{

   /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(type="integer")
   */
    private $id;
    /**
    * @ORM\Column(type="string")
    */
    private $title;
    /**
    * @ORM\Column(type="string")
    */
    private $imageUrl;
    /**
    * @ORM\Column(type="decimal", precision=7, scale=2)
    */
    private $price;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $title
     */
    public function setId($title): void
    {
        $this->title = $id;
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
     * Movie constructor.
     * @param $id
     * @param $title
     * @param $imageUrl
     * @param $price
     */
    public function __construct($id, $title, $imageUrl, $price)
    {
        $this->title = $title;
        $this->imageUrl = $imageUrl;
        $this->price = $price;
        $this->id = $id;
    }
}
