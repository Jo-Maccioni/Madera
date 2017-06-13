<?php
namespace AppBundle\Form;

use AppBundle\Entity\Module;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use AppBundle\Manager\ModuleManager;
use AppBundle\Form\ModuleType;

class ModuleType extends AbstractType
{
    private $moduleManager;

    /**
     * __construct
     * 
     * @param ModeleManager $modeleManager
     */
    public function __construct(ModuleManager $moduleManager)
    {
        $this->moduleManager = $moduleManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $module = $this->moduleManager->getNameModule();
        $builder->add('nameModule', ChoiceType::class, array(
                'choices' => $module
            ));
        $builder->add('section', EntityType::class, array(
            'class'=> 'AppBundle:Section',
            ));
        $builder->add('longueur', EntityType::class, array(
            'class'=> 'AppBundle:Longueur',
            ));
        $builder->add('angleEntrant', EntityType::class, array(
            'class'=> 'AppBundle:Angle',
            ));
        $builder->add('angleSortant', EntityType::class, array(
            'class'=> 'AppBundle:Angle',
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Module::class,
        ));
    }
}