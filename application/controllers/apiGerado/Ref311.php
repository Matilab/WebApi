<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref311 extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'ref311';
    $this->nameId = 'Id';
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
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[5]');
		$this->form_validation->set_rules('Versao', 'Versao', 'required|max_length[5]');
		$this->form_validation->set_rules('Leiaout', 'Leiaout', 'required|max_length[100]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Codigo', 'Codigo', 'required|max_length[5]');
		$this->form_validation->set_rules('Versao', 'Versao', 'required|max_length[5]');
		$this->form_validation->set_rules('Leiaout', 'Leiaout', 'required|max_length[100]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Versão do Leiaute</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('ref311/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Codigo'>Código</label>
								<input type='text' name='Codigo' id='Codigo' class='form-control' placeholder='Código' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Codigo) ? $response->error->Codigo : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Versao'>Versão</label>
								<input type='text' name='Versao' id='Versao' class='form-control' placeholder='Versão' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Versao) ? $response->error->Versao : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Leiaout'>Leiaout Instituído</label>
								<input type='text' name='Leiaout' id='Leiaout' class='form-control' placeholder='Leiaout Instituído' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Leiaout) ? $response->error->Leiaout : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DtIni'>Data Inicial</label>
								<input type='date' name='DtIni' id='DtIni' class='form-control' placeholder='Data Inicial' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DtIni) ? $response->error->DtIni : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DtFin'>Data Final</label>
								<input type='date' name='DtFin' id='DtFin' class='form-control' placeholder='Data Final' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DtFin) ? $response->error->DtFin : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-actions'>
								<button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
								<button class='btn btn-secondary ml-auto' type='submit'>Cancelar</button>
							</div>
					</fieldset>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
*/

