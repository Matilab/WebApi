<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref437 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref437';
    $this->nameId = '437_Id';
    $this->usersId = '';
    $this->joins = [
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('437_Codigo', '437_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('437_Descricao', '437_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('437_DtIni', '437_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('437_DtFin', '437_DtFin', 'valid_date');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('437_Codigo', '437_Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('437_Descricao', '437_Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('437_DtIni', '437_DtIni', 'required|valid_date');
		$this->form_validation->set_rules('437_DtFin', '437_DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
