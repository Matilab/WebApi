SELECT CASE WHEN is_nullable = "NO" THEN CONCAT('$this->form_validation->set_rules(\'',column_name,'\', \'',column_name,'\', \'required\');') ELSE "" END colunas FROM information_schema.COLUMNS WHERE table_schema = 'matilab872_gestao' AND table_name = 'pessoasjuridica'

--disabled
SET FOREIGN_KEY_CHECKS=0;
--enabled
SET FOREIGN_KEY_CHECKS=1;