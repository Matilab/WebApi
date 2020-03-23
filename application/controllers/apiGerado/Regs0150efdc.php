<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0150efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regs0150efdc';
    $this->nameId = 'Id';
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodPart', 'CodPart', 'required|max_length[60]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('PaisId', 'PaisId', 'integer');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required|integer');
		$this->form_validation->set_rules('CPF', 'CPF', 'required|integer');
		$this->form_validation->set_rules('IE', 'IE', 'max_length[14]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('Suframa', 'Suframa', 'max_length[9]');
		$this->form_validation->set_rules('End', 'End', 'max_length[60]');
		$this->form_validation->set_rules('Num', 'Num', 'max_length[20]');
		$this->form_validation->set_rules('Compl', 'Compl', 'max_length[60]');
		$this->form_validation->set_rules('Bairro', 'Bairro', 'max_length[60]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('CodPart', 'CodPart', 'required|max_length[60]');
		$this->form_validation->set_rules('Nome', 'Nome', 'required|max_length[100]');
		$this->form_validation->set_rules('PaisId', 'PaisId', 'integer');
		$this->form_validation->set_rules('CNPJ', 'CNPJ', 'required|integer');
		$this->form_validation->set_rules('CPF', 'CPF', 'required|integer');
		$this->form_validation->set_rules('IE', 'IE', 'max_length[14]');
		$this->form_validation->set_rules('MunicipioId', 'MunicipioId', 'required|integer');
		$this->form_validation->set_rules('Suframa', 'Suframa', 'max_length[9]');
		$this->form_validation->set_rules('End', 'End', 'max_length[60]');
		$this->form_validation->set_rules('Num', 'Num', 'max_length[20]');
		$this->form_validation->set_rules('Compl', 'Compl', 'max_length[60]');
		$this->form_validation->set_rules('Bairro', 'Bairro', 'max_length[60]');
		$this->form_validation->set_rules('DtIni', 'DtIni', 'required|valid_date');
		$this->form_validation->set_rules('DtFin', 'DtFin', 'valid_date');
		$this->form_validation->set_rules('PessoaJuridicaId', 'PessoaJuridicaId', 'integer');
		$this->form_validation->set_rules('UserId', 'UserId', 'integer');
		
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
				<legend>Cadastro do Participante</legend>
				<div class='form-group'>
					<label for='Id'>Identificador</label>
					<input type='hidden' name='Id' id='Id'>
				</div>
				<div class='form-group'>
					<label for='Reg'>Registro</label>
					<input type='text' name='Reg' id='Reg' class='form-control' placeholder='Registro' required>
				</div>
				<div class='form-group'>
					<label for='CodPart'>Código Participante</label>
					<input type='text' name='CodPart' id='CodPart' class='form-control' placeholder='Código Participante' required>
				</div>
				<div class='form-group'>
					<label for='Nome'>Nome</label>
					<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' required>
				</div>
				<div class='form-group'>
					<label for='PaisId'>País</label>
					<input type='number' name='PaisId' id='PaisId' class='form-control' placeholder='País' >
				</div>
				<div class='form-group'>
					<label for='CNPJ'>CNPJ</label>
					<input type='number' name='CNPJ' id='CNPJ' class='form-control' placeholder='CNPJ' required>
				</div>
				<div class='form-group'>
					<label for='CPF'>CPF</label>
					<input type='number' name='CPF' id='CPF' class='form-control' placeholder='CPF' required>
				</div>
				<div class='form-group'>
					<label for='IE'>Inscrição Estadual</label>
					<input type='text' name='IE' id='IE' class='form-control' placeholder='Inscrição Estadual' >
				</div>
				<div class='form-group'>
					<label for='MunicipioId'>Municipio</label>
					<input type='number' name='MunicipioId' id='MunicipioId' class='form-control' placeholder='Municipio' required>
				</div>
				<div class='form-group'>
					<label for='Suframa'>Suframa</label>
					<input type='text' name='Suframa' id='Suframa' class='form-control' placeholder='Suframa' >
				</div>
				<div class='form-group'>
					<label for='End'>Endereço</label>
					<input type='text' name='End' id='End' class='form-control' placeholder='Endereço' >
				</div>
				<div class='form-group'>
					<label for='Num'>Número</label>
					<input type='text' name='Num' id='Num' class='form-control' placeholder='Número' >
				</div>
				<div class='form-group'>
					<label for='Compl'>Complemento</label>
					<input type='text' name='Compl' id='Compl' class='form-control' placeholder='Complemento' >
				</div>
				<div class='form-group'>
					<label for='Bairro'>Bairro</label>
					<input type='text' name='Bairro' id='Bairro' class='form-control' placeholder='Bairro' >
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
					<label for='PessoaJuridicaId'>Pessoa Juridica</label>
					<input type='number' name='PessoaJuridicaId' id='PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' >
				</div>
				<div class='form-group'>
					<label for='UserId'>Usuário</label>
					<input type='number' name='UserId' id='UserId' class='form-control' placeholder='Usuário' >
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

