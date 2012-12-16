<?php
namespace Auth\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Auth\Model\Auth;          // <-- Add this import
use Auth\Form\AuthForm;

class AuthController extends AbstractActionController
{
    protected $authTable;

    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
}