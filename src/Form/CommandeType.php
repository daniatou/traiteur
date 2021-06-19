<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('telephone')
            ->add('date_reception')
            ->add('nombre_convives')
            ->add('salle_reception', ChoiceType::class, [
                'choices'  => [

                    'Domicile' => true,
                    'Petit_déjeuner' => false,

                ],
            ])

            ->add('type_ceremonie', ChoiceType::class, [
                'choices'  => [

                    'Buffet' => true,
                    'Petit_déjeuner' => false,
                    'Cocktail' => false,
                    'Pause_sucrée' => false,
                    'Mariage' => false,
                    'Anniversaire' => false,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
