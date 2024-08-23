<?php
class Notice{

 private $id;
 private $noctie;
 private $status;
 private $addAt;
    
 
 public function set_id($id) {
    $this->id = $id;
}

public function get_id() {
    return $this->id;
}

public function set_notice($notice) {
    $this->notice = $notice;
}

public function get_notice() {
    return $this->notice;
}
public function set_status($status) {
    $this->status = $status;
}

public function get_status() {
    return $this->status;
}
public function set_addAt($addAt) {
    $this->notice = $addAt;
}

public function get_addAt() {
    return $this->addAt;
}
}
?>