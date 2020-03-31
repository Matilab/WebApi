<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regsa170efdc extends MY_Controller {

  public function  __construct() {
    parent::__construct();
    $this->table = 'regsa170efdc';
    $this->nameId = 'Id';
    $this->usersId = 'UsersId';
    $this->joins = [
			['table' => 'regs0200efdc', 'condition' => 'regs0200efdc.Id = regsa170efdc.Reg0200EFDCId', 'type' => 'left'],
			['table' => 'ref431', 'condition' => 'ref431.Id = regsa170efdc.Ref431Id', 'type' => 'left'],
			['table' => 'ref433', 'condition' => 'ref433.Id = regsa170efdc.Ref433Id', 'type' => 'left'],
			['table' => 'ref434', 'condition' => 'ref434.Id = regsa170efdc.Ref434Id', 'type' => 'left'],
			['table' => 'regs0500efdc', 'condition' => 'regs0500efdc.Id = regsa170efdc.Reg0500EFDCId', 'type' => 'left'],
			['table' => 'regs0600efdc', 'condition' => 'regs0600efdc.Id = regsa170efdc.Reg0600EFDCId', 'type' => 'left'],
			['table' => 'regsa100efdc', 'condition' => 'regsa100efdc.Id = regsa170efdc.RegA100EFDCId', 'type' => 'left'],
    ];
  }

  public function get($Id = '', $date = ''){
    parent::get($Id, $date);
  }
  
  public function setDefaultValue(){
    
  }

  public function create(){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumItem', 'NumItem', 'required|integer');
		$this->form_validation->set_rules('Reg0200EFDCId', 'Reg0200EFDCId', 'integer');
		$this->form_validation->set_rules('DescricaoComplementar', 'DescricaoComplementar', 'max_length[255]');
		$this->form_validation->set_rules('VlItem', 'VlItem', 'required|decimal');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('Ref431Id', 'Ref431Id', 'integer');
		$this->form_validation->set_rules('IndicadorOrigemCredito', 'IndicadorOrigemCredito', 'required|in_list[0 – Operação no Mercado Interno,1 – Operação de Importação]');
		$this->form_validation->set_rules('Ref433Id', 'Ref433Id', 'integer');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlAliqPis', 'VlAliqPis', 'required|decimal');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required|decimal');
		$this->form_validation->set_rules('Ref434Id', 'Ref434Id', 'integer');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlAliqCofins', 'VlAliqCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required|decimal');
		$this->form_validation->set_rules('Reg0500EFDCId', 'Reg0500EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0600EFDCId', 'Reg0600EFDCId', 'integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
    parent::create();
  }
  
  public function update($Id){
    $this->form_validation->set_rules('Reg', 'Reg', 'required|max_length[4]');
		$this->form_validation->set_rules('NumItem', 'NumItem', 'required|integer');
		$this->form_validation->set_rules('Reg0200EFDCId', 'Reg0200EFDCId', 'integer');
		$this->form_validation->set_rules('DescricaoComplementar', 'DescricaoComplementar', 'max_length[255]');
		$this->form_validation->set_rules('VlItem', 'VlItem', 'required|decimal');
		$this->form_validation->set_rules('VlDesconto', 'VlDesconto', 'required|decimal');
		$this->form_validation->set_rules('Ref431Id', 'Ref431Id', 'integer');
		$this->form_validation->set_rules('IndicadorOrigemCredito', 'IndicadorOrigemCredito', 'required|in_list[0 – Operação no Mercado Interno,1 – Operação de Importação]');
		$this->form_validation->set_rules('Ref433Id', 'Ref433Id', 'integer');
		$this->form_validation->set_rules('VlBcPis', 'VlBcPis', 'required|decimal');
		$this->form_validation->set_rules('VlAliqPis', 'VlAliqPis', 'required|decimal');
		$this->form_validation->set_rules('VlPis', 'VlPis', 'required|decimal');
		$this->form_validation->set_rules('Ref434Id', 'Ref434Id', 'integer');
		$this->form_validation->set_rules('VlBcCofins', 'VlBcCofins', 'required|decimal');
		$this->form_validation->set_rules('VlAliqCofins', 'VlAliqCofins', 'required|decimal');
		$this->form_validation->set_rules('VlCofins', 'VlCofins', 'required|decimal');
		$this->form_validation->set_rules('Reg0500EFDCId', 'Reg0500EFDCId', 'integer');
		$this->form_validation->set_rules('Reg0600EFDCId', 'Reg0600EFDCId', 'integer');
		$this->form_validation->set_rules('RegA100EFDCId', 'RegA100EFDCId', 'integer');
		$this->form_validation->set_rules('UsersId', 'UsersId', 'required|integer');
		
    parent::update($Id);
  }

  public function delete($Id){
    parent::delete($Id);
  }
}

/*
	<header class='page-title-bar'>
		<legend>Complemento do Documento - Itens do Documento</legend>
	</header>
	<div class='page-section'>
		<div class='section-block'>
			<div class='card' id='floating-label'>
				<div class='card-body'>
					<?= form_open(base_url('regsa170efdc/')) ?>
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
								<label for='NumItem'>Sequencia</label>
								<input type='number' name='NumItem' id='NumItem' class='form-control' placeholder='Sequencia' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->NumItem) ? $response->error->NumItem : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Reg0200EFDCId'>Código do Item</label>
								<input type='number' name='Reg0200EFDCId' id='Reg0200EFDCId' class='form-control' placeholder='Código do Item' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Reg0200EFDCId) ? $response->error->Reg0200EFDCId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='DescricaoComplementar'>Descrição complementar</label>
								<input type='text' name='DescricaoComplementar' id='DescricaoComplementar' class='form-control' placeholder='Descrição complementar' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->DescricaoComplementar) ? $response->error->DescricaoComplementar : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlItem'>Valor Total do Item</label>
								<input type='' name='VlItem' id='VlItem' class='form-control' placeholder='Valor Total do Item' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlItem) ? $response->error->VlItem : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlDesconto'>Valor do Desconto</label>
								<input type='' name='VlDesconto' id='VlDesconto' class='form-control' placeholder='Valor do Desconto' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlDesconto) ? $response->error->VlDesconto : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Ref431Id'>Código da Situação Tributária</label>
								<input type='number' name='Ref431Id' id='Ref431Id' class='form-control' placeholder='Código da Situação Tributária' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Ref431Id) ? $response->error->Ref431Id : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='IndicadorOrigemCredito'>Origem do Crédito</label>
								<select name='IndicadorOrigemCredito' id='IndicadorOrigemCredito' class='custom-select' placeholder='Origem do Crédito' required>
									<option value=''> Selecione </option>
									<option value='0 – Operação no Mercado Interno'> 0 – Operação no Mercado Interno </option>
									<option value='1 – Operação de Importação'> 1 – Operação de Importação </option>
								</select>
							</div>
							<div class='form-group'>
								<label for='Ref433Id'>Código da Situação Tributária Referente ao PIS/Pasep</label>
								<input type='number' name='Ref433Id' id='Ref433Id' class='form-control' placeholder='Código da Situação Tributária Referente ao PIS/Pasep' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Ref433Id) ? $response->error->Ref433Id : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlBcPis'>Valor BC PIS</label>
								<input type='' name='VlBcPis' id='VlBcPis' class='form-control' placeholder='Valor BC PIS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlBcPis) ? $response->error->VlBcPis : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlAliqPis'>Valor Alíquota do PIS</label>
								<input type='' name='VlAliqPis' id='VlAliqPis' class='form-control' placeholder='Valor Alíquota do PIS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlAliqPis) ? $response->error->VlAliqPis : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlPis'>Valor PIS</label>
								<input type='' name='VlPis' id='VlPis' class='form-control' placeholder='Valor PIS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlPis) ? $response->error->VlPis : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Ref434Id'>Código da Situação Tributária Referente à Cofins</label>
								<input type='number' name='Ref434Id' id='Ref434Id' class='form-control' placeholder='Código da Situação Tributária Referente à Cofins' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Ref434Id) ? $response->error->Ref434Id : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlBcCofins'>Valor BC COFINS</label>
								<input type='' name='VlBcCofins' id='VlBcCofins' class='form-control' placeholder='Valor BC COFINS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlBcCofins) ? $response->error->VlBcCofins : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlAliqCofins'>Valor Alíquota do COFINS</label>
								<input type='' name='VlAliqCofins' id='VlAliqCofins' class='form-control' placeholder='Valor Alíquota do COFINS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlAliqCofins) ? $response->error->VlAliqCofins : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='VlCofins'>Valor da COFINS</label>
								<input type='' name='VlCofins' id='VlCofins' class='form-control' placeholder='Valor da COFINS' required>
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->VlCofins) ? $response->error->VlCofins : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Reg0500EFDCId'>Plano de Conta</label>
								<input type='number' name='Reg0500EFDCId' id='Reg0500EFDCId' class='form-control' placeholder='Plano de Conta' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Reg0500EFDCId) ? $response->error->Reg0500EFDCId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='Reg0600EFDCId'>Centro de Custo</label>
								<input type='number' name='Reg0600EFDCId' id='Reg0600EFDCId' class='form-control' placeholder='Centro de Custo' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->Reg0600EFDCId) ? $response->error->Reg0600EFDCId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='RegA100EFDCId'>Documento - Nota Fiscal de Serviço</label>
								<input type='number' name='RegA100EFDCId' id='RegA100EFDCId' class='form-control' placeholder='Documento - Nota Fiscal de Serviço' >
								<?php if(isset($response)): ?>
									<div class='invalid-feedback' style='display:block'><?= isset($response->error->RegA100EFDCId) ? $response->error->RegA100EFDCId : ''; ?></div>
								<?php endif; ?>
							</div>
							<div class='form-group'>
								<label for='UsersId'>Usuários</label>
								<input type='number' name='UsersId' id='UsersId' class='form-control' placeholder='Usuários' required>
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

