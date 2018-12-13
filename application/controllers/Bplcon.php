<?php
 
class Bplcon extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bpl_model');
    } 

    function index()
    {
        $data['bpl'] = $this->Bpl_model->get_all_bpl();
        $data['_view'] = 'bplview/index';
        $this->load->view('layouts/main',$data);
    }

    function load()
    {
        $data['bpl'] = $this->Bpl_model->get_all_bpl();
        $this->load->view('Bplview/page',$data);
    }


    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('club','Club','required|max_length[100]');
		$this->form_validation->set_rules('mp','Mp','required|integer');
		$this->form_validation->set_rules('w','W','required|integer');
		$this->form_validation->set_rules('d','D','required|integer');
		$this->form_validation->set_rules('l','L','required|integer');
		$this->form_validation->set_rules('pts','Pts','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'club' => $this->input->post('club'),
				'mp' => $this->input->post('mp'),
				'w' => $this->input->post('w'),
				'd' => $this->input->post('d'),
				'l' => $this->input->post('l'),
				'pts' => $this->input->post('pts'),
            );
            
            $bpl_id = $this->Bpl_model->add_bpl($params);
            redirect('bplcon/index');
        }
        else
        {            
            $data['_view'] = 'bplview/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id)
    {   
        $data['bpl'] = $this->Bpl_model->get_bpl($id);
        
        if(isset($data['bpl']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('club','Club','required|max_length[100]');
			$this->form_validation->set_rules('mp','Mp','required|integer');
			$this->form_validation->set_rules('w','W','required|integer');
			$this->form_validation->set_rules('d','D','required|integer');
			$this->form_validation->set_rules('l','L','required|integer');
			$this->form_validation->set_rules('pts','Pts','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'club' => $this->input->post('club'),
					'mp' => $this->input->post('mp'),
					'w' => $this->input->post('w'),
					'd' => $this->input->post('d'),
					'l' => $this->input->post('l'),
					'pts' => $this->input->post('pts'),
                );

                $this->Bpl_model->update_bpl($id,$params);            
                redirect('bplcon/index');
            }
            else
            {
                $data['_view'] = 'bplview/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The bpl you are trying to edit does not exist.');
    } 

    function remove($id)
    {
        $bpl = $this->Bpl_model->get_bpl($id);

        if(isset($bpl['id']))
        {
            $this->Bpl_model->delete_bpl($id);
            redirect('bplcon/index');
        }
        else
            show_error('The bpl you are trying to delete does not exist.');
    }
    
}
