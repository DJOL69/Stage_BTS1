<?php

namespace QLIO\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class contenir_sachetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('refBox', EntityType::class, array(
				'class'=>'QLIO\GestionBundle\Entity\box',
				'choice_label'=>'refBox',
				'expanded'=>false,
				'multiple'=>false
			))
            ->add('refSachet', EntityType::class, array(
				'class'=>'QLIO\GestionBundle\Entity\sachet',
				'choice_label'=>'refSachet',
				'expanded'=>false,
				'multiple'=>false
			))
            ->add('qteSachet', IntegerType::class)
			->add('Valider', SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QLIO\GestionBundle\Entity\contenir_sachet'
        ));
    }
}
