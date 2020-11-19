<?php
class M_login extends CI_Model
{
    function cekppdb($u, $p)
    {
        $hasil = $this->db->query("SELECT * FROM tbl_siswa WHERE pengguna_username='$u' AND pengguna_password=md5('$p')");
        return $hasil;
    }
}
