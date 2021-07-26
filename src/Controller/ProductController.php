<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(): Response
    {
        return new Response('heyho!');
    }

    /**
     * @Route("/product/create", name="create_product")
     */
    /*    public function createProduct(): Response
        {
            $entityManager = $this->getDoctrine()->getManager();

            $product = new Product();
            $product->setTitle('Dankeskarte');
            $product->setDescription('here be description');

            $entityManager->persist($product);
            $entityManager->flush();

            return new Response('Saved new product with id '.$product->getId());
        }*/
}
