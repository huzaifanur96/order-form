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
            ->add('fullNameOfDeceased', TextType::class, [
                'required' => false,
            ])
            ->add('deceasedDateOfBirth', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('deceasedDateOfDeath', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('deceasedIntermentInformation', TextareaType::class, [
                'required' => false,
            ])
            ->add('familyContactName', TextType::class, [
                'required' => false,
            ])
            ->add('familyContactStreet', TextType::class, [
                'required' => false,
            ])
            ->add('familyContactCity', TextType::class, [
                'required' => false,
            ])
            ->add('familyContactState', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                    'State 2' => 'State 2',
                    'State 3' => 'State 3',
                ],
                'required' => false,
            ])
            ->add('familyContactZip', TextType::class, [
                'required' => false,
            ])
            ->add('familyContactTelephone', TextType::class, [
                'required' => false,
            ])
            ->add('familyContactEmail', TextType::class, [
                'required' => false,
            ])
            ->add('symAckQuantity', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '25' => '25',
                ],
                'required' => false,
            ])
            ->add('symAckSentiment', ChoiceType::class, [
                'choices' => [
                    'S-1' => 'S-1',
                ],
                'required' => false,
            ])
            ->add('symAckFont', ChoiceType::class, [
                'choices' => [
                    'F-1' => 'F-1',
                ],
                'required' => false,
            ])
            ->add('symAckFontInk', ChoiceType::class, [
                'choices' => [
                    'I-1' => 'I-1',
                ],
                'required' => false,
            ])
            ->add('symAckMotif', ChoiceType::class, [
                'choices' => [
                    'M-1' => 'M-1',
                ],
                'required' => false,
            ])
            ->add('symAckMotifInk', ChoiceType::class, [
                'choices' => [
                    'I-1' => 'I-1',
                ],
                'required' => false,
            ])
            ->add('symAckPaper', ChoiceType::class, [
                'choices' => [
                    'P-W White' => 'P-W White',
                ],
                'required' => false,
            ])
            ->add('retAddImpStreet', TextType::class, [
                'required' => false,
            ])
            ->add('retAddImpCity', TextType::class, [
                'required' => false,
            ])
            ->add('retAddImpState', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('retAddImpZip', TextType::class, [
                'required' => false,
            ])
            ->add('remPorStyle', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('remPorSize', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('remPorPhoto', FileType::class, [
                'required' => false,
            ])
            ->add('remPorSpecialInstructions', TextareaType::class, [
                'required' => false,
            ])
            ->add('memPraCarQuantity', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('memPraCarStyle', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
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
                'required' => false,
            ])
            ->add('memPraCarPaper', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('memPraCarCustomVerse', FileType::class, [
                'required' => false,
            ])
            ->add('memBookObiQuantity', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('memBookObiPaper', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('memBookObiTasselColor', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('memBookObiObituaryFile', FileType::class, [
                'required' => false,
            ])
            ->add('donCarEnvQuantity', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('donCarEnvDonationInformation', TextAreaType::class, [
                'required' => false,
            ])
            ->add('donCarEnvStreet', TextType::class, [
                'required' => false,
            ])
            ->add('donCarEnvCity', TextType::class, [
                'required' => false,
            ])
            ->add('donCarEnvState', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('donCarEnvZip', TextType::class, [
                'required' => false,
            ])
            ->add('funProQuantity', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('funProPaper', ChoiceType::class, [
                'choices' => [
                    'State 1' => 'State 1',
                ],
                'required' => false,
            ])
            ->add('funProPhoto', FileType::class, [
                'required' => false,
            ])
            ->add('funProSpecialInstructions', TextareaType::class, [
                'required' => false,
            ])
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
