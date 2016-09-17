<?php
namespace MyBundle\Entity;

use Doctrine\Orm\Mapping as ORM;

/**
 * Class Product
 * @package MyBundle
 * @ORM\Entity(repositoryClass="MyBundle\Repository\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product {
	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer", name="_id")
	 * @var integer
	 */
	protected $id;
	/**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	protected $name;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
