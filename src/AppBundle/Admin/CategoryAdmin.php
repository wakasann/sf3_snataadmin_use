<?php
/**
 * Created by PhpStorm.
 * User: wakasann
 * Date: 11/9/18
 * Time: 10:53 PM
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CategoryAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
        $datagridMapper->add('id');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->addIdentifier('name');
    }

//    public function getTemplate($name)
//    {
//        switch ($name) {
//            case 'edit':
//                return 'AppBundle::my-custom-edit.html.twig';
//                break;
//            default:
//                return parent::getTemplate($name);
//                break;
//        }
//    }
}