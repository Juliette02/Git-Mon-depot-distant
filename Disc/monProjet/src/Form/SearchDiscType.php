<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchDiscType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mots', SearchType::class, [
                'label' => false,
                'row_attr' => [
                    'class' => 'form-controle mb-1',
                    'placeholder' => 'Search',
                    'title' => 'Press Enter to search...'
                ],
                'required' => false
            ])
            // ->add('Search', SubmitType::class, [
            //     'attr' => [
            //         'class' => 'btn-secondary'
            //     ]
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
