<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('funeralHome', TextType::class)
            ->add('contact', TextType::class)
            ->add('funeralHomeDate', DateType::class)
            ->add('funeralHomeStreet', TextType::class)
            ->add('funeralHomeCity', TextType::class)
            ->add('funeralHomeState', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                    'State 2' => 'State 2',
                    'State 3' => 'State 3',
                ],
            ])
            ->add('funeralHomeZip', TextType::class)
            ->add('funeralHomeTelephone', TextType::class)
            ->add('funeralHomeEmail', EmailType::class)
            ->add('funeralHomeShipMerchandiseTo', ChoiceType::class, [
                'choices' => [
                    'Funeral Director' => 'Funeral Director',
                    'Family of Deceased' => 'Family of Deceased',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
