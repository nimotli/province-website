<?php
class Slider extends CI_Controller {

  
    public function index()
    {
        $this->load->model('slider_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Sliders'
        );
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $data['sliders']=$this->slider_model->all();
        $this->load->view('sliders/sliders',$data);
        $this->load->view('theme/admin_footer');
    }

    public function show($id)
    {
        $this->load->model('slider_model');
        $this->load->model('slider_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Sliders'
        );
        $data['slider']=$this->slider_model->find($id);
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('sliders/sliders-show',$data);
        $this->load->view('theme/admin_footer');
    }

    public function create()
    {
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Sliders'
        );
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('sliders/sliders-create');
        $this->load->view('theme/admin_footer');
    }

    public function store()
    {
        $this->load->model('slider_model');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('/slider/create', 'refresh');
        }
        else
        {
            $dataToAdd=['title'=>set_value('title'),'description'=>set_value('description')];
            $this->slider_model->insert($dataToAdd);
            $this->index();
        }
    }
    
    public function edit($id)
    {
        $this->load->model('slider_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Sliders'
        );

        $data['slider']=$this->slider_model->find($id);
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('sliders/sliders-edit',$data);
        $this->load->view('theme/admin_footer');
    }

    public function update()
    {
        $this->load->model('slider_model');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('/slider/edit', 'refresh');
        }
        else
        {
            
            $id=set_value('id');
            $dataToAdd=['title'=>set_value('title'),'description'=>set_value('description')];
            $this->slider_model->update($id,$dataToAdd);
            $this->index();
        }
    }

    public function destroy($id)
    {
        $this->load->model('slider_model');
        $this->slider_model->delete($id);
        $this->index();
    }

    public function editImg($id)
    {
        $this->load->model('slider_model');
        $data=array(
            'description'=>'art',
            'keywords'=>'art',
            'title'=>'Sliders'
        );

        $data['slider']=$this->slider_model->find($id);
        $this->load->view('theme/admin_header',$data);
        $this->load->view('theme/admin_sidebar');
        $this->load->view('sliders/sliders-edit-image',$data);
        $this->load->view('theme/admin_footer');
    }

    public function updateImg()
    {
        $id=set_value('id');
        $this->load->model('slider_model');
        $this->form_validation->set_rules('userfile', 'Image', 'required');
        $name = $this->do_upload();
        if ( $name[0]==false)
        {
            redirect('/slider/editimg', 'refresh');
        }
        else
        { 
            $dataToAdd=['image'=>$name[1]];
            $this->slider_model->update($id,$dataToAdd);
            $this->index();
        }
    }

    public function do_upload()
    {
        
        $uploadFolder='./uploads/slider/';
        if (!file_exists($uploadFolder)) {
            mkdir($uploadFolder, 0777, true);
        }
        $file_ext = pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);
        $name=md5(time()).'.'.$file_ext;
        $config['upload_path']          = $uploadFolder;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 7680;
        $config['max_height']           = 4320;
        $config['file_name']            = $name;

        $this->load->library('upload');
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                return [false,$error];
                //$this->load->view('upload_form', $error);
                
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                //echo json_encode($data);exit();
                return [true,$name];
                //$this->load->view('upload_success', $data);
        }
    }
}