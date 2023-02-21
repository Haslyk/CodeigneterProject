<?php
class Signin extends CI_Controller
{
    public function index()
    {
        $this->load->view('signin');
    }

    public function kayit_ol()
    {
        $this->load->library('form_validation');

        $form =  $this->form_validation;

        $form->set_rules('fullName', 'Tam ad', 'required');
        $form->set_rules('bolum', 'Bölüm', 'required');
        $form->set_rules('sinif', 'Sınıf', 'required');
        $form->set_rules('mail', 'Mail', 'required');
        $form->set_rules('sifre', 'Şifre', 'required');

        $form->set_message('required', '%s boş bırakılamaz..');

        if($form->run())
        {
            $fullName = $this->input->post('fullName');
            $bolum    = $this->input->post('bolum');
            $sinif    = $this->input->post('sinif');
            $mail     = $this->input->post('mail');
            $sifre    = $this->input->post('sifre');

            $data = array('TamAd' =>$fullName, 'Bolum' =>$bolum, 'Sinif' =>$sinif, 'Mail'=>$mail, 'Sifre'=>md5($sifre));

            $this->load->model('database');
            $result = $this->database->kayit_ol($data);

            if($result)
            {
                redirect(base_url('homepage'));
            }
            else {
                echo "Bir hata oluştu";
            }
        }
        else {                
            redirect(base_url('homepage'));
        }
    }

    public function giris_yap()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('mail', 'Mail', 'required|valid_email');
        $this->form_validation->set_rules('sifre', 'Şifre', 'required');

        $this->form_validation->set_message('required', '%s boş bırakılmaz...');

        if($this->form_validation->run())
        {
            $mail = $this->input->post('mail');
            $sifre = md5($this->input->post('sifre'));

            $this->load->model('database');
            $sonuc = $this->database->giris_yap($mail, $sifre);
            if($sonuc)
            {
                $array = (array)$sonuc;
                $this->session->set_userdata('data',$array);
                redirect(base_url('homepage'));
            }
            else {
                $this->session->set_flashdata('error', 'Girilen bilgiler hatalı...');
                redirect(base_url('signin'));
            }
        }
        else {
            redirect(base_url('homepage'));
        }
    }

    public function cikis_yap()
    {
        $this->load->library('session');

        $id = $this->session->userdata('data')['uye_id'];
        $this->session->unset_userdata('data');
        $data = array('giris' => false);
        $this->db->where('uye_id', $id);
        $this->db->update('uyeler', $data);
        redirect(base_url('homepage'));
    }
}