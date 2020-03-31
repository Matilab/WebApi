<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0035efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0035efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'pessoasjuridica', 'condition' => 'pessoasjuridica.Id = regs0035efdc.PessoaJuridicaId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodSCP', 'CodSCP', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodSCP', 'CodSCP', 'required|integer');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Identificação de Sociedade em Conta de Participação – SCP</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regs0035efdc/')) ?>
						<fieldset>
							<input type='hidden' name='Id' id='Id'>
							<div class='form-group'>
								<label for='Reg'>Registro</label>
								<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Reg) ? $response->error->Reg : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='CodSCP'>Identificação da SCP</label>
								<input type='number' name='CodSCP' id='CodSCP' class='form-control' placeholder='Identificação da SCP' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->CodSCP) ? $response->error->CodSCP : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DescSCP'>Descrição da SCP</label>
								<input type='text' name='DescSCP' id='DescSCP' class='form-control' placeholder='Descrição da SCP' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DescSCP) ? $response->error->DescSCP : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='InfoCompl'>Informação Complementar</label>
								<input type='text' name='InfoCompl' id='InfoCompl' class='form-control' placeholder='Informação Complementar' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->InfoCompl) ? $response->error->InfoCompl : ''; ?></div>
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
							<div class='form-group'>
								<label for='PessoaJuridicaId'>Pessoa Juridica</label>
								<input type='number' name='PessoaJuridicaId' id='PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->PessoaJuridicaId) ? $response->error->PessoaJuridicaId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='UsersId'>Usuário</label>
								<input type='number' name='UsersId' id='UsersId' class='form-control' placeholder='Usuário' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->UsersId) ? $response->error->UsersId : ''; ?></div>
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

