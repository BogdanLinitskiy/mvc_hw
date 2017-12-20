<?php
/**
 * Created by PhpStorm.
 * User: Да
 * Date: 19.12.2017
 * Time: 19:32
 */

class Controller_Portfolio extends Controller
{
    public $model;
    public function __construct()
    {
        parent::__construct();
        require 'application/models/Model_Portfolio.php';
        $this->model = new Model_Portfolio();
    }
    public function action_index(){
        $data = $this->model->getPortfolio();
        $this->view->generate('portfolio',$data);
    }
}