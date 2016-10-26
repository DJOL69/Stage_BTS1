<?php

namespace QLIO\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class visserieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numVis', IntegerType::class)
            ->add('typeVis', EntityType::class, array(
				'class'=>'QLIO\GestionBundle\Entity\typevis',
				'choice_label'=>'typeVis',
				'expanded'=>false,
				'multiple'=>false
			))
            ->add('libVis', TextType::class)
            ->add('poidsVis', IntegerType::class)
            ->add('nEmpPick', EntityType::class, array(
				'class'=>'QLIO\GestionBundle\Entity\air_picking',
				'choice_label'=>'nEmpPick',
				'expanded'=>false,
				'multiple'=>false
			))
			->add('Valider', SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QLIO\GestionBundle\Entity\visserie'
        ));
    }
}
