<?php


class Database extends CI_Model 
{
    function kayit_ol($data=array())
    {
        $result = $this->db->insert('uyeler',$data);
        return $result;

    }

    function giris_yap($mail,$sifre)
    {
        $result = $this->db->select('*')
        ->from('uyeler')
        ->where('mail', $mail)
        ->where('sifre', $sifre)
        ->get()
        ->row();

        if(!$result)
        {
            return false;
        }
        else {
            $loginTrue = array('giris' => true); 
            $this->db->where('mail', $mail);
            $this->db->update('uyeler', $loginTrue);

            $updated = $this->db->select('*')
            ->from('uyeler')
            ->where('mail', $mail)
            ->where('sifre', $sifre)
            ->get()
            ->row(); 

            return $updated;
        }
    }


    function fikir_ekle($data=array())
    {
        $result = $this->db->insert('etkinlikler',$data);
        return $result;

    }

    function fikir_getir()
    {
        $result = $this->db->select('*')
        ->from('etkinlikler')
        ->join('uyeler', 'etkinlikler.uye_id = uyeler.uye_id')
        ->get()
        ->result();

        return $result;
    }
}

?>