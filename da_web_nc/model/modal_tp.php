<?php
class Tp{
    private $name;
    private $loai_tp;
    private $gia_ban;
    private $gia_nhap;
    private $so_luong_nhap;
    private $so_luong_ton;
    private $nha_cung_cap;
    private $ngay_nhap;
    private $ngay_het_han;
    private $tong_tien;

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_loai_tp($loai_tp){
        $this->loai_tp = $loai_tp;
    }

    public function get_loai_tp(){
        return $this->loai_tp;
    }
    
    public function set_gia_ban($gia_ban){
        $this->gia_ban = $gia_ban;
    }

    public function get_gia_ban(){
        return $this->gia_ban;
    }

    public function set_gia_nhap($gia_nhap){
        $this->gia_nhap = $gia_nhap;
    }

    public function get_gia_nhap(){
        return $this->gia_nhap;
    }

    public function set_so_luong_nhap($so_luong_nhap){
        $this->so_luong_nhap = $so_luong_nhap;
    }

    public function get_so_luong_nhap(){
        return $this->so_luong_nhap;
    }

    public function set_so_luong_ton($so_luong_ton){
        $this->so_luong_ton = $so_luong_ton;
    }

    public function get_so_luong_ton(){
        return $this->so_luong_ton;
    }

    public function set_nha_cung_cap($nha_cung_cap){
        $this->nha_cung_cap = $nha_cung_cap;
    }

    public function get_nha_cung_cap(){
        return $this->nha_cung_cap;
    }

    public function set_ngay_nhap($ngay_nhap){
        $this->ngay_nhap = $ngay_nhap;
    }

    public function get_ngay_nhap(){
        return $this->ngay_nhap;
    }

    public function set_ngay_het_han($ngay_het_han){
        $this->ngay_het_han = $ngay_het_han;
    }

    public function get_ngay_het_han(){
        return $this->ngay_het_han;
    }

    public function set_tong_tien($tong_tien){
        $this->tong_tien = $tong_tien;
    }

    public function get_tong_tien(){
        return $this->tong_tien;
    }
}
?>