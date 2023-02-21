<?php

class Ideas extends CI_Controller 
{
    public function index()
    {
        $this->load->model('database');
        $result = $this->database->fikir_getir();

        $data = array('fikirler' => $result);
        $this->load->view('ideas', $data);
    }

    public function fikir_ekle()
    {
        $this->load->library('form_validation');

        $form =  $this->form_validation;

        $form->set_rules('baslik', 'Başlık', 'required');
        $form->set_rules('kategori', 'Kategori', 'required');

        $form->set_message('required', '%s boş bırakılamaz..');

        if($form->run())
        {
            $baslik      = $this->input->post('baslik');
            $kategori    = $this->input->post('kategori');
            $uye_id      = $this->input->post('uye_id');

            $data = array('e_baslik' =>$baslik, 'e_kategori' =>$kategori, 'uye_id'=> $uye_id );

            $this->load->model('database');
            $result = $this->database->fikir_ekle($data);

            if($result)
            {
                redirect(base_url('ideas'));
            }
            else {
                echo "Bir hata oluştu";
            }
        }
        else {                
            redirect(base_url('ideas'));
        }
    }
}


?>