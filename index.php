<?php

require_once "bootstrap.php";

/**
 * @var $product \MyBundle\Entity\Product
 */
$product = new \MyBundle\Entity\Product();
$product->setName( 'name_' . rand( 1, 1000 ) );
$entityManager->persist( $product );
$entityManager->flush( $product );

/**
 * @var $products \MyBundle\Entity\Product[]
 */
var_dump( $entityManager->getRepository( 'MyBundle\Entity\Product' )->findAll() );