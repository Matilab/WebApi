<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfismenu extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'perfismenu';
    $this->nameId = 'pm_Id';
    $this->usersId = '';
    $this->joins = [
			['table' => 'menus', 'condition' => 'menus.mns_Id = perfismenu.pm_MenusId', 'type' => 'inner'],
			['table' => 'perfis', 'condition' => 'perfis.ps_Id = perfismenu.pm_PerfisId', 'type' => 'inner'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }

  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('pm_MenusId', 'pm_MenusId', 'required|integer');
		$this->form_validation->set_rules('pm_PerfisId', 'pm_PerfisId', 'required|integer');
		
    parent::create();
  }

  public function update($Id){
    $this->form_validation->set_rules('pm_MenusId', 'pm_MenusId', 'required|integer');
		$this->form_validation->set_rules('pm_PerfisId', 'pm_PerfisId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}
