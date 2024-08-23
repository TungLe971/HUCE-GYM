<?php
class hoivien{
    private $name_hv;
    private $ngay_sinh;
    private $gioi_tinh;
    private $tuoi;
    private $sdt;
    private $email;
    private $cmnd;
    private $bien_xe;
    private $diem_tich_luy;
    private $chieu_cao;
    private $can_nang;
    private $phan_tram_mo;
    
    public function set_name_hv($name_hv) {
        $this->name_hv = $name_hv;
    }

    public function get_name_hv() {
        return $this->name_hv;
    }

    public function set_ngay_sinh($ngay_sinh) {
        $this->ngay_sinh = $ngay_sinh;
    }

    public function get_ngay_sinh() {
        return $this->ngay_sinh;
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

    public function set_email($email) {
        $this->email = $email;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_cmnd($cmnd) {
        $this->cmnd = $cmnd;
    }

    public function get_cmnd() {
        return $this->cmnd;
    }

    public function set_bien_xe($bien_xe) {
        $this->bien_xe = $bien_xe;
    }

    public function get_bien_xe() {
        return $this->bien_xe;
    }

    public function set_diem_tich_luy($diem_tich_luy) {
        $this->diem_tich_luy = $diem_tich_luy;
    }
    
    public function get_diem_tich_luy() {
        return $this->diem_tich_luy;
    }

    public function set_chieu_cao($chieu_cao){
        $this->chieu_cao = $chieu_cao;
    }

    public function get_chieu_cao() {
        return $this->chieu_cao;
    }

    public function set_can_nang($can_nang){
        $this->can_nang = $can_nang;
    }

    public function get_can_nang() {
        return $this->can_nang;
    }

    public function set_phan_tram_mo($phan_tram_mo){
        $this->phan_tram_mo = $phan_tram_mo;
    }
    
    public function get_phan_tram_mo() {
        return $this->phan_tram_mo;
    }
}
?>