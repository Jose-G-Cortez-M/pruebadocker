<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DescriptionTaskType extends AbstractType
{
    public function buildForm(
        FormBuilderInterface $builder,
        array $options
    )
    {
        $builder
            ->add('description', TextareaType::class, [
                'label' => "Ingrese la observación de la tarea",
                'required' => true
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }

}