<?php
class The{
    //private $ho_va_ten;
    private $id_hv;
    private $id_nv;
    private $goi_tap;
    private $so_luong;
    private $lop;
    private $ngay_bat_dau;
    private $ngay_ket_thuc;
    private $thanh_tien;

    public function set_id_hv($id_hv){
        $this->id_hv = $id_hv;
    }

    public function get_id_hv(){
        return $this->id_hv;
    }

    public function set_id_nv($id_nv){
        $this->id_nv = $id_nv;
    }

    public function get_id_nv(){
        return $this->id_nv;
    }

    public function set_goi_tap($goi_tap){
        $this->goi_tap = $goi_tap;
    }

    public function get_goi_tap(){
        return $this->goi_tap;
    }

    public function set_so_luong($so_luong){
        $this->so_luong = $so_luong;
    }

    public function get_so_luong(){
        return $this->so_luong;
    }

    public function set_lop($lop){
        $this->lop = $lop;
    }

    public function get_lop(){
        return $this->lop;
    }
    public function set_ngay_bat_dau($ngay_bat_dau){
        $this->ngay_bat_dau = $ngay_bat_dau;
    }

    public function get_ngay_bat_dau(){
        return $this->ngay_bat_dau;
    }

    public function set_ngay_ket_thuc($ngay_ket_thuc){
        $this->ngay_ket_thuc = $ngay_ket_thuc;
    }

    public function get_ngay_ket_thuc(){
        return $this->ngay_ket_thuc;
    }

    public function set_thanh_tien($thanh_tien){
        $this->thanh_tien = $thanh_tien;
    }

    public function get_thanh_tien(){
        return $this->thanh_tien;
    }

}
?>