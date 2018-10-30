<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

class RegistrationFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('label' => 'registration.form.name', 'translation_domain' => 'FOSUserBundle'))
            ->remove('username');

    }

    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }

}