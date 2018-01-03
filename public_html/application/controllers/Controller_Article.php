<?php
/**
 * Created by PhpStorm.
 * User: Да
 * Date: 20.12.2017
 * Time: 18:38
 */

class Controller_Article extends Controller
{
    public $model;
    public function __construct()
    {
        parent::__construct();
        require 'application/models/Model_Article.php';
        $this->model = new Model_Article();
    }
    public function action_index()
    {
        $data = $this->model->getData();
        $this->view->generate('articles',$data);
    }
    public function action_id($id)
    {
        $data = $this->model->getId($id);
        $this->view->generate('single_article',$data);
    }
}