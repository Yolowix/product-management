<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Product::class);
        $this->entityManager = $entityManager;
    }

    public function findAllProducts(): array
    {
        return $this->createQueryBuilder('p')
            ->getQuery()
            ->getResult();
    }

    public function findProductById(int $id): ?Product
    {
        return $this->find($id);
    }

    public function createProduct(Product $product): void
    {
        $this->entityManager ->persist($product);
        $this->entityManager ->flush();
    }

    public function updateProduct(Product $product): void
    {
        $this->entityManager ->flush();
    }

    public function deleteProduct(Product $product): void
    {
        $this->entityManager ->remove($product);
        $this->entityManager ->flush();
    }
}
