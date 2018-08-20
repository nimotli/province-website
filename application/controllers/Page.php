<?php
class Page extends CI_Controller {

  
    public function index()
    {
        $this->load->model('article_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Articles'
        );
        $data['articles']=$this->article_model->all();
        $this->load->view('index',$data);
    }
}