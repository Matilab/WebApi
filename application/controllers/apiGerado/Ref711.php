<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref711 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref711';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[30]');
		$this->form_validation->set_rules('Descricao', 'Descricao', 'required|max_length[255]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<div class='card-body'>
		<form>
			<fieldset>
				<legend>Composição das Receitas</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Codigo'>Código</label>
					<input type='text' name='Codigo' id='Codigo' class='form-control' placeholder='Código' required>
				</div>
				<div class='form-group'>
					<label for='Descricao'>Descrição</label>
					<input type='text' name='Descricao' id='Descricao' class='form-control' placeholder='Descrição' required>
				</div>
				<div class='form-group'>
					<label for='DtIni'>Data Inicial</label>
					<input type='date' name='DtIni' id='DtIni' class='form-control' placeholder='Data Inicial' required>
				</div>
				<div class='form-group'>
					<label for='DtFin'>Data Final</label>
					<input type='date' name='DtFin' id='DtFin' class='form-control' placeholder='Data Final' >
				</div>
				<div class='form-group'>
					<label for='IndTipoAtividade'>Indicador Tipo Atividade</label>
					<input type='text' name='IndTipoAtividade' id='IndTipoAtividade' class='form-control' placeholder='Indicador Tipo Atividade' >
				</div>
				<div class='form-group'>
					<label for='IndAjuste'>Indicador Ajuste</label>
					<input type='text' name='IndAjuste' id='IndAjuste' class='form-control' placeholder='Indicador Ajuste' >
				</div>
				<div class='form-group'>
					<label for='Grupo'>Cód. Grupo</label>
					<input type='text' name='Grupo' id='Grupo' class='form-control' placeholder='Cód. Grupo' >
				</div>
				<div class='form-group'>
					<label for='IndOutros'>Indicador Outros</label>
					<input type='text' name='IndOutros' id='IndOutros' class='form-control' placeholder='Indicador Outros' >
				</div>
				<div class='form-actions'>
					<button class='btn btn-primary' type='submit'>Salvar</button>
				</div>
				<div class='form-actions'>
					<button class='btn btn-secondary' type='submit'>Cancelar</button>
				</div>
			</fieldset>
		</form>
	</div>
*/

