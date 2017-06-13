<?php
namespace AppBundle\Form;

use AppBundle\Entity\Devis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nameDevis');
        $builder->add('dateDevis', DateType::class, array(
            'widget'=> 'single_text',
            'format'=> 'yyyy-MM-dd'
            )
        );
        $builder->add('amount');
        $builder->add('client', EntityType::class, array(
            'class'=> 'AppBundle:Client',
            ));
        $builder->add('coupe', EntityType::class, array(
            'class'=> 'AppBundle:Coupe'
            ));
        $builder->add('module', ModuleType::class, array(
            'required' => false
            ));
        $builder->add('modele', ModeleType::class, array(
            'required' => false
            ));
        $builder->add('gamme', EntityType::class, array(
            'class'=> 'AppBundle:Gamme'
            ));
        $builder->add('save', SubmitType::class, array(
            'label' => 'Envoyer pour validation'
            )
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Devis::class,
            'translation_domain' => 'MaderaTrans'
        ));
    }
}
