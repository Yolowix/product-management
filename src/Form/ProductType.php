<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', TextType::class, [
                'label' => 'Product Code',
                'attr' => ['placeholder' => 'Enter product code'],
            ])
            ->add('name', TextType::class, [
                'label' => 'Product Name',
                'attr' => ['placeholder' => 'Enter product name'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['placeholder' => 'Enter product description'],
            ])
            ->add('image', TextType::class, [
                'label' => 'Image URL',
                'required' => false,
                'attr' => ['placeholder' => 'Enter image URL'],
            ])
            ->add('category', TextType::class, [
                'label' => 'Category',
                'attr' => ['placeholder' => 'Enter product category'],
            ])
            ->add('price', NumberType::class, [
                'label' => 'Price',
                'attr' => ['placeholder' => 'Enter product price'],
            ])
            ->add('quantity', NumberType::class, [
                'label' => 'Quantity',
                'attr' => ['placeholder' => 'Enter product quantity'],
            ])
            ->add('internalReference', TextType::class, [
                'label' => 'Internal Reference',
                'attr' => ['placeholder' => 'Enter internal reference'],
            ])
            ->add('shellId', NumberType::class, [
                'label' => 'Shell ID',
                'attr' => ['placeholder' => 'Enter shell ID'],
            ])
            ->add('inventoryStatus', ChoiceType::class, [
                'label' => 'Inventory Status',
                'choices' => [
                    'In Stock' => 'INSTOCK',
                    'Low Stock' => 'LOWSTOCK',
                    'Out of Stock' => 'OUTOFSTOCK',
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('rating', NumberType::class, [
                'label' => 'Rating',
                'attr' => ['placeholder' => 'Enter product rating'],
                'scale' => 1, // Allows for decimal places
            ])
            ->add('createdAt', DateTimeType::class, [
                'label' => 'Created At',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('updatedAt', DateTimeType::class, [
                'label' => 'Updated At',
                'widget' => 'single_text',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
