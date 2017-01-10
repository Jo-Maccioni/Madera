<?php
namespace AppBundle\Form;

use AppBundle\Entity\Modele;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use AppBundle\Form\RemplissageType;
use AppBundle\Form\FinitionType;
use AppBundle\Manager\ModeleManager;

class ModeleType extends AbstractType
{
    private $modeleManager;
    /**
     * __construct
     * 
     * @param ModeleManager $modeleManager
     */
    public function __construct(ModeleManager $modeleManager)
    {
        $this->modeleManager = $modeleManager;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $modele = $this->modeleManager->getModeleName(); 
var_dump($modele);die();
        $builder->add('nameModele');
        // $builder->add('nameModele', EntityType::class, array(
        //     'class' => 'AppBundle:Modele',
        //     'choices' => $modele->getNameModele(),
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