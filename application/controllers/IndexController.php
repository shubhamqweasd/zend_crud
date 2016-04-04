<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $all = new Application_Model_DbTable_Artist();
        // print_r($all);
        // exit;
        $this->view->all = $all->fetchAll();
    }

    public function editAction()
    {
        $this->_helper->redirector('index','Index');
    }


}

