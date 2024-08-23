<?php
class Personal{
    private $name_hv;
    private $id_hv;
    private $thoi_luong;
    private $so_buoi;
    private $name_nv;
    private $id_nv;
    private $doanh_thu;

    public function set_name_hv($name_hv){
        $this->name_hv = $name_hv;
    }

    public function get_name_hv(){
        return $this->name_hv;
    }

    public function set_id_hv($id_hv){
        $this->id_hv = $id_hv;
    }

    public function get_id_hv(){
        return $this->id_hv;
    }
    
    public function set_thoi_luong($thoi_luong){
        $this->thoi_luong = $thoi_luongn;
    }

    public function get_thoi_luong(){
        return $this->thoi_luong;
    }

    public function set_so_buoi($so_buoi){
        $this->so_buoi = $so_buoi;
    }

    public function get_so_buoi(){
        return $this->so_buoi;
    }

    public function set_name_nv($name_nv){
        $this->name_nv = $name_nv;
    }

    public function get_name_nv(){
        return $this->name_nv;
    }
    
    public function set_id_nv($id_nv){
        $this->id_nv = $id_nv;
    }

    public function get_id_nv(){
        return $this->id_nv;
    }

    public function set_doanh_thu($doanh_thu){
        $this->doanh_thu = $doanh_thu;
    }

    public function get_doanh_thu(){
        return $this->doanh_thu;
    }

}
?>