<?php
namespace AppBundle\Form;

use AppBundle\Entity\Modele;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use AppBundle\Form\RemplissageType;
use AppBundle\Form\FinitionInterieurType;

class ModeleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('remplissage', EntityType::class, array(
            'class'=> 'AppBundle:Remplissage',
            ));
        $builder->add('finitionInterieur', EntityType::class, array(
            'class'=> 'AppBundle:FinitionInterieur',
            ));
        $builder->add('finitionExterieur', EntityType::class, array(
            'class'=> 'AppBundle:FinitionExterieur',
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Modele::class,
        ));
    }
}