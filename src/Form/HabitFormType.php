<?php
/**
 * Hbait type.
 */

namespace App\Form;

use App\Entity\Habit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class HabitType.
 */
class HabitFormType extends AbstractType
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the form.
     *
     * @param FormBuilderInterface $builder The form builder
     * @param array<string, mixed> $options Form options
     *
     * @see FormTypeExtensionInterface::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
            'name',
            TextType::class,
            [
                'label' => 'label.title',
                'required' => true,
                'attr' => ['max_length' => 255],
            ]
        );
        $builder->add(
            'time',
            TimeType::class,
            [
                'input' => 'string',
                'widget' => 'choice',
                'required' => true,
            ]
        );
        $builder->add(
            'place',
            TextType::class,
            [
                'label' => 'label.title',
                'required' => true,
                'attr' => ['max_length' => 255],
            ]
        );
        $builder->add(
            'monday',
            CheckboxType::class,
            [
            'label' => 'monday',
            'required' => false,
             ]
        );
        $builder->add(
            'tusday',
            CheckboxType::class,
            [
                'label' => 'tusday',
                'required' => false,
            ]
        );
        $builder->add(
            'wednesday',
            CheckboxType::class,
            [
                'label' => 'wednesday',
                'required' => false,
            ]
        );
        $builder->add(
            'thursday',
            CheckboxType::class,
            [
                'label' => 'thursday',
                'required' => false,
            ]
        );
        $builder->add(
            'friday',
            CheckboxType::class,
            [
                'label' => 'friday',
                'required' => false,
            ]
        );
        $builder->add(
            'sathurday',
            CheckboxType::class,
            [
                'label' => 'sathurday',
                'required' => false,
            ]
        );
        $builder->add(
            'sunday',
            CheckboxType::class,
            [
                'label' => 'sunday',
                'required' => false,
            ]
        );
        $builder->add(
            'requisites',
            TextType::class,
            [
                'label' => 'label.title',
                'required' => true,
                'attr' => ['max_length' => 255],
            ]
        );
        $builder->add(
            'notes',
            TextType::class,
            [
                'label' => 'label.title',
                'required' => true,
                'attr' => ['max_length' => 255],
            ]
        );
    }

    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => Habit::class]);
    }

    /**
     * Returns the prefix of the template block name for this type.
     *
     * The block prefix defaults to the underscored short class name with
     * the "Type" suffix removed (e.g. "UserProfileType" => "user_profile").
     *
     * @return string The prefix of the template block name
     */
    public function getBlockPrefix(): string
    {
        return 'habit';
    }
}
