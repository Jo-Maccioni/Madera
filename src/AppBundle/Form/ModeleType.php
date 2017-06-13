<?php
namespace AppBundle\Form;

use AppBundle\Entity\Modele;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use AppBundle\Manager\ModeleManager;
use AppBundle\Form\ModeleType;

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
        $modele = $this->modeleManager->getNameModele();

        $builder->add('nameModele', ChoiceType::class, array(
                'choices' => $modele
            ));
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