<?php
class nhanvien{
    private $name;
    private $gioi_tinh;
    private $tuoi;
    private $sdt;
    private $cmnd;
    private $bien_so_xe;
    private $dia_chi;
    private $chuc_vu;
    private $gmail;
    
    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_gioi_tinh($gioi_tinh) {
        $this->gioi_tinh = $gioi_tinh;
    }

    public function get_gioi_tinh() {
        return $this->gioi_tinh;
    }

    public function set_tuoi($tuoi) {
        $this->tuoi = $tuoi;
    }

    public function get_tuoi() {
        return $this->tuoi;
    }

    public function set_sdt($sdt) {
        $this->sdt = $sdt;
    }

    public function get_sdt() {
        return $this->sdt;
    }

    public function set_cmnd($cmnd) {
        $this->cmnd = $cmnd;
    }

    public function get_cmnd() {
        return $this->cmnd;
    }

    public function set_bien_so_xe($bien_so_xe) {
        $this->bien_so_xe = $bien_so_xe;
    }

    public function get_bien_so_xe() {
        return $this->bien_so_xe;
    }

    public function set_dia_chi($dia_chi) {
        $this->dia_chi = $dia_chi;
    }
    
    public function get_dia_chi() {
        return $this->dia_chi;
    }
    
    public function set_chuc_vu($chuc_vu) {
        $this->chuc_vu = $chuc_vu;
    }
    
    public function get_chuc_vu() {
        return $this->chuc_vu;
    }

    public function set_gmail($gmail) {
        $this->gmail = $gmail;
    }
    
    public function get_gmail() {
        return $this->gmail;
    }
}
?>