<?php

class Controller
{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new Model();
        $this->view = new View(TEMPLATE);
        
        $this->model->createSelect('my_name', 3, array('one'=>'some_1','two'=>'some_2','three'=>'some_3','four'=>'some_4'));
        $this->model->createTable('50%', 2, 'Some information', array('US','UK','UA'), array( 
                                                                                            array('some_1','some_2','some_3'),
                                                                                            array('some_1','some_2','some_3'), 
                                                                                            array('some_1','some_2','some_3')));
        $this->model->createList('ol', 'A', array('US','UK','UA'));
        $this->model->createListOfDefinitions(array('one'=>'some_1','two'=>'some_2','three'=>'some_3'));
        $this->model->createCheckbox('someName', array('one'=>'some_1','two'=>'some_2','three'=>'some_3'));

        $data = $this->model->getArray();
        $this->view->createTemplate($data);

    }

}
