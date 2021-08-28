<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('upload');
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = "./uploads";
                $config['allowed_types']        = 'gif|jpg|png|csv|pdf';
                $config['max_size']             = 1000;
                $config['max_width']            = 10024;
                $config['max_height']           = 7968;
                
                  $this->upload->initialize($config);
               $this->load->library('upload', $config);
               

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}
?>
