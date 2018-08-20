<?php
class Category extends CI_Controller {

  
    public function index()
    {
        $this->load->model('category_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Categories'
        );
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $data['categories']=$this->category_model->all();
        $this->load->view('categories/categories',$data);
        $this->load->view('theme/admin_footer');
    }

    public function show($id)
    {
        $this->load->model('category_model');
        $this->load->model('category_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Categories'
        );
        $data['category']=$this->category_model->find($id);
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('categories/categories-show',$data);
        $this->load->view('theme/admin_footer');
    }

    public function create()
    {
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Categories'
        );

        
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('categories/categories-create');
        $this->load->view('theme/admin_footer');
    }

    public function store()
    {
        $this->load->model('category_model');

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('/category/create', 'refresh');
        }
        else
        {
            $dataToAdd=['name'=>set_value('name')];
            $this->category_model->insert($dataToAdd);
            $this->index();
        }
    }
    
    public function edit($id)
    {
        $this->load->model('category_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Categories'
        );

        $data['category']=$this->category_model->find($id);
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('categories/categories-edit',$data);
        $this->load->view('theme/admin_footer');
    }

    public function update()
    {
        $this->load->model('category_model');

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('/category/edit', 'refresh');
        }
        else
        {
            
            $id=set_value('id');
            $dataToAdd=['name'=>set_value('name')];
            $this->category_model->update($id,$dataToAdd);
            $this->index();
        }
    }

    public function destroy($id)
    {
        $this->load->model('category_model');
        $this->category_model->delete($id);
        $this->index();
    }

}