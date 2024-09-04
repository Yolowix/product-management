<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAllProducts();
        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/products/{id}', name: 'product_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/products/create', name: 'product_create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($product);
            $entityManager->flush();
    
            return $this->redirectToRoute('product_index');
        }
    
        return $this->render('product/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/products/{id}/edit', name: 'product_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProductRepository $productRepository, int $id): Response
    {
        $product = $productRepository->findProductById($id);

        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productRepository->updateProduct($product);

            return $this->redirectToRoute('product_show', ['id' => $product->getId()]);
        }

        return $this->render('product/update.html.twig', [
            'form' => $form->createView(),
            'product' => $product,
        ]);
    }

    #[Route('/products/{id}/delete', name: 'product_delete', methods: ['POST'])]
    public function delete(Request $request, ProductRepository $productRepository, int $id): Response
    {
        $product = $productRepository->findProductById($id);

        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }

        if ($this->isCsrfTokenValid('delete' . $product->getId(), $request->request->get('_token'))) {
            $productRepository->deleteProduct($product);
        }

        return $this->redirectToRoute('product_index');
    }
}
