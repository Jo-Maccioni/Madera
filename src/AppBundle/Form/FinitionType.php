<?php
namespace AppBundle\Form;

use AppBundle\Entity\Finition;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FinitionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nameFinition');
        $builder->add('finitionINT');
        $builder->add('finitionEXT');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Finition::class,
        ));
    }
}