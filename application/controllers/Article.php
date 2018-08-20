<?php
class Article extends CI_Controller {

  
    public function index()
    {
        $this->load->model('article_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Articles'
        );
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $data['articles']=$this->article_model->all();
        $this->load->view('articles/articles',$data);
        $this->load->view('theme/admin_footer');
    }

    public function show($id)
    {
        $this->load->model('article_model');
        $this->load->model('article_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Articles'
        );
        $data['article']=$this->article_model->find($id);
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('articles/articles-show',$data);
        $this->load->view('theme/admin_footer');
    }

    public function create()
    {
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Articles'
        );

        
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('articles/articles-create');
        $this->load->view('theme/admin_footer');
    }

    public function store()
    {
        $this->load->model('article_model');

        $this->form_validation->set_rules('title', 'Title', 'required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('body', 'Body', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('/article/create', 'refresh');
        }
        else
        {
            $dataToAdd=['title'=>set_value('title'),'body'=>set_value('body'),'category'=>set_value('category')];
            $this->article_model->insert($dataToAdd);
            $this->index();
        }
    }
    
    public function edit($id)
    {
        $this->load->model('article_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Articles'
        );

        $data['article']=$this->article_model->find($id);
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('articles/articles-edit',$data);
        $this->load->view('theme/admin_footer');
    }

    public function update()
    {
        $this->load->model('article_model');

        $this->form_validation->set_rules('title', 'Title', 'required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('body', 'Body', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('/article/edit', 'refresh');
        }
        else
        {
            $id=set_value('id');
            $dataToAdd=['title'=>set_value('title'),'body'=>set_value('body'),'category'=>set_value('category')];
            $this->article_model->update($id,$dataToAdd);
            $this->index();
        }
    }

    public function destroy($id)
    {
        $this->load->model('article_model');
        $this->article_model->delete($id);
        $this->index();
    }

}