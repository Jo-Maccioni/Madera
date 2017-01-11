<?php
namespace AppBundle\Form;

use AppBundle\Entity\Modele;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use AppBundle\Form\RemplissageType;
use AppBundle\Form\FinitionType;

class ModeleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // $modele = $options['data'];
        // $builder->add('nameModele');
        // $builder->add('nameModele', ChoiceType::class, array(
        //     'choices' => array('yes', 'no'),
        // ));
        $builder->add('remplissage', RemplissageType::class);
        $builder->add('finition', FinitionType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Modele::class,
        ));
    }
}