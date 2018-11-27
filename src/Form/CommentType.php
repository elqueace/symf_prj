<?php

namespace App\Form;

use App\Entity\Comment;
use App\Entity\Proposal;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content')
            ->add(
                'author',
                EntityType::class,
                array(
                    'label' => 'Author',
                    'class' =>  User::class,
                    'choice_label' => 'email',
                    'multiple' => false,
                    'required' => false,
                )
            )
            ->add(
                'proposal',
                EntityType::class,
                array(
                    'label' => 'proposal',
                    'class' =>  Proposal::class,
                    'choice_label' => 'content',
                    'multiple' => false,
                    'required' => false,
                )
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
