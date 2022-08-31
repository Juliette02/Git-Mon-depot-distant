<?php

namespace App\Form;

use App\Entity\Disc;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Disc1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('label')
            ->add('artist')
            ->add('picture_file', FileType::class, [
                'label' => 'Picture',
                'required' => false,
                // On le rend facultatif afin que l'on est pas à télécharger à nouveau l'image
                // chaque fois qu'on modifie les détails d'un disque
                "mapped" => false,
                // On sépare le champs image de l'entité
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Disc::class,
        ]);
    }
}
