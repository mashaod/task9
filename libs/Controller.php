<?php
class Controller
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new Model();
        $this->view = new View(TEMPLATE);

        $select = HtmlHelper::createSelect('my_name', array('one'=>'some_1','two'=>'some_2','three'=>'some_3','four'=>'some_4'));
        $selectMulti = HtmlHelper::createSelect('my_name', array('one'=>'some_1','two'=>'some_2','three'=>'some_3','four'=>'some_4'), 3, 1);
        $table = HtmlHelper::createTable('50%', 2, 'Some information', array('US','UK','UA'),
            array( 
                array('some_1','some_2','some_3'),
                array('some_1','some_2','some_3'), 
                array('some_1','some_2','some_3')));

        $list = HtmlHelper::createList('ul', 'A', array('US','UK','UA'));
        $listOfDef = HtmlHelper::createListOfDefinitions(array('one'=>'some_1','two'=>'some_2','three'=>'some_3'));
        $checkbox = HtmlHelper::createCheckbox('someName', array('one'=>'some_1','two'=>'some_2','three'=>'some_3'), array('two', 'one'));
        $radioBut = HtmlHelper::createRadioButtons('someName', array('one'=>'some_1','two'=>'some_2','three'=>'some_3'), 'two');

        $this->model->addHolder('%SELECT%', $select);
        $this->model->addHolder('%SELECT-MULTI%', $selectMulti);
        $this->model->addHolder('%TABLE%', $table);
        $this->model->addHolder('%LIST%', $list);
        $this->model->addHolder('%LIST-DEF%', $listOfDef);
        $this->model->addHolder('%CHECKBOX%', $checkbox);
        $this->model->addHolder('%RADIO%', $radioBut);

        $data = $this->model->getArray();
        $this->view->createTemplate($data);
    }
}
