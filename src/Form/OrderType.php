<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('funeralHome')
            ->add('contact')
            ->add('funeralHomeDate')
            ->add('funeralHomeStreet')
            ->add('funeralHomeCity')
            ->add('funeralHomeState')
            ->add('funeralHomeZip')
            ->add('funeralHomeTelephone')
            ->add('funeralHomeEmail')
            ->add('funeralHomeShipMerchandiseTo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
