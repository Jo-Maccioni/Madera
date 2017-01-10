<?php
namespace AppBundle\Form;

use AppBundle\Entity\Devis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Form\ModuleType;
use AppBundle\Form\ModeleType;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // $builder->add('refDevis');
        $builder->add('nameDevis');
        $builder->add('dateDevis', DateType::class, array(
            'widget'=> 'single_text',
            'format'=> 'yyyy-MM-dd'
            )
        );
        $builder->add('amount');
        $builder->add('client');
        $builder->add('coupe');
        $builder->add('module', ModuleType::class);
        $builder->add('modele', ModeleType::class);
        $builder->add('gamme');
        $builder->add('save', SubmitType::class, array(
            'label' => 'Envoyer pour validation'
            )
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Devis::class,
        ));
    }
}

