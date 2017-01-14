<?php
namespace AppBundle\Form;

use AppBundle\Entity\Devis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Form\ModuleType;
use AppBundle\Form\ModeleType;
use AppBundle\Manager\ModeleManager;
use AppBundle\Manager\ModuleManager;

class DevisType extends AbstractType
{
    private $modeleManager;
    private $moduleManager;

    /**
     * __construct
     * 
     * @param ModeleManager $modeleManager
     */
    public function __construct(ModeleManager $modeleManager, ModuleManager $moduleManager)
    {
        $this->modeleManager = $modeleManager;
        $this->moduleManager = $moduleManager;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $modele = $this->modeleManager->getNameModele();
        $module = $this->moduleManager->getNameModule();
        // var_dump($module);die();
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
        $builder->add('moduleName', ModuleType::class, array(
            'mapped' => false,
            'required' => false
            ));
        $builder->add('module', ChoiceType::class, array(
                'choices' => $module
            ));
        $builder->add('modeleName', ModeleType::class, array(
            'mapped' => false,
            'required' => false
            ));
        $builder->add('modele', ChoiceType::class, array(
                'choices' => $modele
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
