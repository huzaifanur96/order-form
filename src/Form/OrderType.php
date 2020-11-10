<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('funeralHomeName', TextType::class)
            ->add('funeralHomeContact', TextType::class)
            ->add('funeralHomeDate', DateType::class, [
                'widget' => 'single_text',
            ])
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
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('fullNameOfDeceased', TextType::class)
            ->add('deceasedDateOfBirth', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('deceasedDateOfDeath', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('deceasedIntermentInformation', TextareaType::class)
            ->add('familyContactName', TextType::class)
            ->add('familyContactStreet', TextType::class)
            ->add('familyContactCity', TextType::class)
            ->add('familyContactState', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                    'State 2' => 'State 2',
                    'State 3' => 'State 3',
                ],
            ])
            ->add('familyContactZip', TextType::class)
            ->add('familyContactTelephone', TextType::class)
            ->add('familyContactEmail', TextType::class)
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
