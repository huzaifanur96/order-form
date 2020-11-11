<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
            ->add('symAckQuantity', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '25' => '25',
                ],
            ])
            ->add('symAckSentiment', ChoiceType::class, [
                'choices' => [
                    'S-1' => 'S-1',
                ],
            ])
            ->add('symAckFont', ChoiceType::class, [
                'choices' => [
                    'F-1' => 'F-1',
                ],
            ])
            ->add('symAckFontInk', ChoiceType::class, [
                'choices' => [
                    'I-1' => 'I-1',
                ],
            ])
            ->add('symAckMotif', ChoiceType::class, [
                'choices' => [
                    'M-1' => 'M-1',
                ],
            ])
            ->add('symAckMotifInk', ChoiceType::class, [
                'choices' => [
                    'I-1' => 'I-1',
                ],
            ])
            ->add('symAckPaper', ChoiceType::class, [
                'choices' => [
                    'P-W White' => 'P-W White',
                ],
            ])
            ->add('retAddImpStreet', TextType::class)
            ->add('retAddImpCity', TextType::class)
            ->add('retAddImpState', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('retAddImpZip', TextType::class)
            ->add('remPorStyle', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('remPorSize', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('remPorPhoto', FileType::class)
            ->add('remPorSpecialInstructions', TextareaType::class)
            ->add('memPraCarQuantity', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('memPraCarStyle', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('memPraCarVerse', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('memPraCarInk', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('memPraCarPaper', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('memPraCarCustomVerse', FileType::class)
            ->add('memBookObiQuantity', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('memBookObiPaper', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('memBookObiTasselColor', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('memBookObiObituaryFile', FileType::class)
            ->add('donCarEnvQuantity', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('donCarEnvDonationInformation', TextAreaType::class)
            ->add('donCarEnvStreet', TextType::class)
            ->add('donCarEnvCity', TextType::class)
            ->add('donCarEnvState', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
            ])
            ->add('donCarEnvZip', TextType::class)
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
