<?php
//--- 
class grid_public_pessoa_fisica_det
{
   var $Ini;
   var $Erro;
   var $Db;
   var $nm_data;
   var $NM_raiz_img; 
   var $nmgp_botoes; 
   var $nm_location;
   var $public_pessoa_fisica_id_pessoa_fisica;
   var $public_pessoa_fisica_cpf;
   var $public_pessoa_fisica_nome;
   var $public_pessoa_fisica_endereco;
   var $public_pessoa_fisica_endereco_comp;
   var $public_pessoa_fisica_bairro;
   var $id_municipio;
   var $id_uf;
   var $id_pais;
   var $public_pessoa_fisica_cep;
   var $public_pessoa_fisica_endereco_cob;
   var $public_pessoa_fisica_endereco_comp_cob;
   var $public_pessoa_fisica_bairro_cob;
   var $public_pessoa_fisica_id_municipio_cob;
   var $public_pessoa_fisica_id_uf_cob;
   var $public_pessoa_fisica_id_pais_cob;
   var $public_pessoa_fisica_cep_cob;
   var $public_pessoa_fisica_dt_nasc;
   var $public_pessoa_fisica_sexo;
   var $public_pessoa_fisica_id_tipo_estado_civil;
   var $public_pessoa_fisica_id_tipo_escolaridade;
   var $public_pessoa_fisica_id_tipo_sanguineo;
   var $public_pessoa_fisica_profissao;
   var $public_pessoa_fisica_aposentado;
   var $public_pessoa_fisica_rg;
   var $public_pessoa_fisica_rg_orgao_emissor;
   var $public_pessoa_fisica_rg_uf_emissor;
   var $public_pessoa_fisica_rg_dt_emissao;
   var $public_pessoa_fisica_passaporte;
   var $public_pessoa_fisica_passaporte_dt_emissao;
   var $public_pessoa_fisica_passaporte_pais_origem;
   var $public_pessoa_fisica_nacionalidade;
   var $public_pessoa_fisica_naturalidade;
   var $public_pessoa_fisica_cnh;
   var $public_pessoa_fisica_cnh_dt_validade;
   var $public_pessoa_fisica_cnh_categoria;
   var $obs;
   var $public_pessoa_fisica_id_tipo_vinculo;
   var $id_ativo;
   var $dt_cadastro;
   var $dt_atualiza;
   var $usu_cadastro;
   var $usu_atualiza;
 function monta_det()
 {
    global 
           $nm_saida, $nm_lang, $nmgp_cor_print, $nmgp_tipo_pdf;
    $this->nmgp_botoes['det_pdf'] = "on";
    $this->nmgp_botoes['det_print'] = "on";
    $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
    if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_fisica']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_fisica']['btn_display']))
    {
        foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_fisica']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
        {
            $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
        }
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['campos_busca']))
    { 
        $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['campos_busca'];
        if ($_SESSION['scriptcase']['charset'] != "UTF-8")
        {
            $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
        }
        $this->public_pessoa_fisica_nome = $Busca_temp['public_pessoa_fisica_nome']; 
        $tmp_pos = strpos($this->public_pessoa_fisica_nome, "##@@");
        if ($tmp_pos !== false)
        {
            $this->public_pessoa_fisica_nome = substr($this->public_pessoa_fisica_nome, 0, $tmp_pos);
        }
        $this->public_pessoa_fisica_id_pessoa_fisica = $Busca_temp['public_pessoa_fisica_id_pessoa_fisica']; 
        $tmp_pos = strpos($this->public_pessoa_fisica_id_pessoa_fisica, "##@@");
        if ($tmp_pos !== false)
        {
            $this->public_pessoa_fisica_id_pessoa_fisica = substr($this->public_pessoa_fisica_id_pessoa_fisica, 0, $tmp_pos);
        }
        $this->public_pessoa_fisica_id_pessoa_fisica_2 = $Busca_temp['public_pessoa_fisica_id_pessoa_fisica_input_2']; 
    } 
    $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['where_orig'];
    $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['where_pesq'];
    $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['where_pesq_filtro'];
    $this->nm_field_dinamico = array();
    $this->nm_order_dinamico = array();
    $this->nm_data = new nm_data("pt_br");
    $this->NM_raiz_img  = ""; 
    $this->sc_proc_grid = false; 
    include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
   $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_conv_dados.php", "F", "nm_conv_limpa_dado") ; 
   $Str_date = strtolower($_SESSION['scriptcase']['reg_conf']['date_format']);
   $Lim   = strlen($Str_date);
   $Ult   = "";
   $Arr_D = array();
   for ($I = 0; $I < $Lim; $I++)
   {
       $Char = substr($Str_date, $I, 1);
       if ($Char != $Ult)
       {
           $Arr_D[] = $Char;
       }
       $Ult = $Char;
   }
   $Prim = true;
   $Str  = "";
   foreach ($Arr_D as $Cada_d)
   {
       $Str .= (!$Prim) ? $_SESSION['scriptcase']['reg_conf']['date_sep'] : "";
       $Str .= $Cada_d;
       $Prim = false;
   }
   $Str = str_replace("a", "Y", $Str);
   $Str = str_replace("y", "Y", $Str);
   $nm_data_fixa = date($Str); 
   $this->nm_data->SetaData(date("Y/m/d H:i:s"), "YYYY/MM/DD HH:II:SS"); 
   $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_edit.php", "F", "nmgp_Form_Num_Val") ; 
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
   { 
       $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, nome as public_pessoa_fisica_nome, id_tipo_vinculo as cmp_maior_30_22, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, str_replace (convert(char(10),dt_nasc,102), '.', '-') + ' ' + convert(char(8),dt_nasc,20), sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, cpf as public_pessoa_fisica_cpf, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, str_replace (convert(char(10),rg_dt_emissao,102), '.', '-') + ' ' + convert(char(8),rg_dt_emissao,20), passaporte as cmp_maior_30_15, str_replace (convert(char(10),passaporte_dt_emissao,102), '.', '-') + ' ' + convert(char(8),passaporte_dt_emissao,20), passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, str_replace (convert(char(10),cnh_dt_validade,102), '.', '-') + ' ' + convert(char(8),cnh_dt_validade,20), cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, pessoa_fisica.id_ativo as id_ativo, str_replace (convert(char(10),pessoa_fisica.dt_cadastro,102), '.', '-') + ' ' + convert(char(8),pessoa_fisica.dt_cadastro,20), str_replace (convert(char(10),pessoa_fisica.dt_atualiza,102), '.', '-') + ' ' + convert(char(8),pessoa_fisica.dt_atualiza,20), pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
   } 
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
   { 
       $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, nome as public_pessoa_fisica_nome, id_tipo_vinculo as cmp_maior_30_22, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, convert(char(23),dt_nasc,121), sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, cpf as public_pessoa_fisica_cpf, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, convert(char(23),rg_dt_emissao,121), passaporte as cmp_maior_30_15, convert(char(23),passaporte_dt_emissao,121), passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, convert(char(23),cnh_dt_validade,121), cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, pessoa_fisica.id_ativo as id_ativo, convert(char(23),pessoa_fisica.dt_cadastro,121), convert(char(23),pessoa_fisica.dt_atualiza,121), pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
   } 
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle)) 
   { 
       $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, nome as public_pessoa_fisica_nome, id_tipo_vinculo as cmp_maior_30_22, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, dt_nasc as public_pessoa_fisica_dt_nasc, sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, cpf as public_pessoa_fisica_cpf, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, rg_dt_emissao as cmp_maior_30_14, passaporte as cmp_maior_30_15, passaporte_dt_emissao as cmp_maior_30_16, passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, cnh_dt_validade as cmp_maior_30_20, cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, pessoa_fisica.id_ativo as id_ativo, pessoa_fisica.dt_cadastro as dt_cadastro, pessoa_fisica.dt_atualiza as dt_atualiza, pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
   } 
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
   { 
       $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, nome as public_pessoa_fisica_nome, id_tipo_vinculo as cmp_maior_30_22, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, EXTEND(dt_nasc, YEAR TO DAY), sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, cpf as public_pessoa_fisica_cpf, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, EXTEND(rg_dt_emissao, YEAR TO DAY), passaporte as cmp_maior_30_15, EXTEND(passaporte_dt_emissao, YEAR TO DAY), passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, EXTEND(cnh_dt_validade, YEAR TO DAY), cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, pessoa_fisica.id_ativo as id_ativo, EXTEND(pessoa_fisica.dt_cadastro, YEAR TO FRACTION), EXTEND(pessoa_fisica.dt_atualiza, YEAR TO FRACTION), pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
   } 
   else 
   { 
       $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, nome as public_pessoa_fisica_nome, id_tipo_vinculo as cmp_maior_30_22, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, dt_nasc as public_pessoa_fisica_dt_nasc, sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, cpf as public_pessoa_fisica_cpf, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, rg_dt_emissao as cmp_maior_30_14, passaporte as cmp_maior_30_15, passaporte_dt_emissao as cmp_maior_30_16, passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, cnh_dt_validade as cmp_maior_30_20, cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, pessoa_fisica.id_ativo as id_ativo, pessoa_fisica.dt_cadastro as dt_cadastro, pessoa_fisica.dt_atualiza as dt_atualiza, pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
   } 
   $parms_det = explode("*PDet*", $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['chave_det']) ; 
   foreach ($parms_det as $key => $cada_par)
   {
       $parms_det[$key] = $this->Db->qstr($parms_det[$key]);
       $parms_det[$key] = substr($parms_det[$key], 1, strlen($parms_det[$key]) - 2);
   } 
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
   {
       $nmgp_select .= " where  id_pessoa_fisica = $parms_det[0]" ;  
   } 
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
   {
       $nmgp_select .= " where  id_pessoa_fisica = $parms_det[0]" ;  
   } 
   else 
   { 
       $nmgp_select .= " where  id_pessoa_fisica = $parms_det[0]" ;  
   } 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
   $rs = $this->Db->Execute($nmgp_select) ; 
   if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
   { 
       $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit ; 
   }  
   $this->public_pessoa_fisica_id_pessoa_fisica = $rs->fields[0] ;  
   $this->public_pessoa_fisica_id_pessoa_fisica = (string)$this->public_pessoa_fisica_id_pessoa_fisica;
   $this->public_pessoa_fisica_nome = $rs->fields[1] ;  
   $this->public_pessoa_fisica_id_tipo_vinculo = $rs->fields[2] ;  
   $this->public_pessoa_fisica_id_tipo_vinculo = (string)$this->public_pessoa_fisica_id_tipo_vinculo;
   $this->public_pessoa_fisica_endereco = $rs->fields[3] ;  
   $this->public_pessoa_fisica_endereco_comp = $rs->fields[4] ;  
   $this->public_pessoa_fisica_bairro = $rs->fields[5] ;  
   $this->id_municipio = $rs->fields[6] ;  
   $this->id_uf = $rs->fields[7] ;  
   $this->id_pais = $rs->fields[8] ;  
   $this->public_pessoa_fisica_cep = $rs->fields[9] ;  
   $this->public_pessoa_fisica_cep = (string)$this->public_pessoa_fisica_cep;
   $this->public_pessoa_fisica_endereco_cob = $rs->fields[10] ;  
   $this->public_pessoa_fisica_endereco_comp_cob = $rs->fields[11] ;  
   $this->public_pessoa_fisica_bairro_cob = $rs->fields[12] ;  
   $this->public_pessoa_fisica_id_municipio_cob = $rs->fields[13] ;  
   $this->public_pessoa_fisica_id_municipio_cob = (string)$this->public_pessoa_fisica_id_municipio_cob;
   $this->public_pessoa_fisica_id_uf_cob = $rs->fields[14] ;  
   $this->public_pessoa_fisica_id_uf_cob = (string)$this->public_pessoa_fisica_id_uf_cob;
   $this->public_pessoa_fisica_id_pais_cob = $rs->fields[15] ;  
   $this->public_pessoa_fisica_id_pais_cob = (string)$this->public_pessoa_fisica_id_pais_cob;
   $this->public_pessoa_fisica_cep_cob = $rs->fields[16] ;  
   $this->public_pessoa_fisica_cep_cob = (string)$this->public_pessoa_fisica_cep_cob;
   $this->public_pessoa_fisica_dt_nasc = $rs->fields[17] ;  
   $this->public_pessoa_fisica_sexo = $rs->fields[18] ;  
   $this->public_pessoa_fisica_id_tipo_estado_civil = $rs->fields[19] ;  
   $this->public_pessoa_fisica_id_tipo_estado_civil = (string)$this->public_pessoa_fisica_id_tipo_estado_civil;
   $this->public_pessoa_fisica_id_tipo_escolaridade = $rs->fields[20] ;  
   $this->public_pessoa_fisica_id_tipo_escolaridade = (string)$this->public_pessoa_fisica_id_tipo_escolaridade;
   $this->public_pessoa_fisica_id_tipo_sanguineo = $rs->fields[21] ;  
   $this->public_pessoa_fisica_id_tipo_sanguineo = (string)$this->public_pessoa_fisica_id_tipo_sanguineo;
   $this->public_pessoa_fisica_profissao = $rs->fields[22] ;  
   $this->public_pessoa_fisica_aposentado = $rs->fields[23] ;  
   $this->public_pessoa_fisica_cpf = $rs->fields[24] ;  
   $this->public_pessoa_fisica_cpf = (string)$this->public_pessoa_fisica_cpf;
   $this->public_pessoa_fisica_rg = $rs->fields[25] ;  
   $this->public_pessoa_fisica_rg_orgao_emissor = $rs->fields[26] ;  
   $this->public_pessoa_fisica_rg_uf_emissor = $rs->fields[27] ;  
   $this->public_pessoa_fisica_rg_dt_emissao = $rs->fields[28] ;  
   $this->public_pessoa_fisica_passaporte = $rs->fields[29] ;  
   $this->public_pessoa_fisica_passaporte_dt_emissao = $rs->fields[30] ;  
   $this->public_pessoa_fisica_passaporte_pais_origem = $rs->fields[31] ;  
   $this->public_pessoa_fisica_passaporte_pais_origem = (string)$this->public_pessoa_fisica_passaporte_pais_origem;
   $this->public_pessoa_fisica_nacionalidade = $rs->fields[32] ;  
   $this->public_pessoa_fisica_nacionalidade = (string)$this->public_pessoa_fisica_nacionalidade;
   $this->public_pessoa_fisica_naturalidade = $rs->fields[33] ;  
   $this->public_pessoa_fisica_cnh = $rs->fields[34] ;  
   $this->public_pessoa_fisica_cnh_dt_validade = $rs->fields[35] ;  
   $this->public_pessoa_fisica_cnh_categoria = $rs->fields[36] ;  
   $this->obs = $rs->fields[37] ;  
   $this->id_ativo = $rs->fields[38] ;  
   $this->id_ativo = (string)$this->id_ativo;
   $this->dt_cadastro = $rs->fields[39] ;  
   $this->dt_atualiza = $rs->fields[40] ;  
   $this->usu_cadastro = $rs->fields[41] ;  
   $this->usu_atualiza = $rs->fields[42] ;  
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['cmp_acum']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['cmp_acum']))
   {
       $parms_acum = explode(";", $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['cmp_acum']);
       foreach ($parms_acum as $cada_par)
       {
          $cada_val = explode("=", $cada_par);
          $this->$cada_val[0] = $cada_val[1];
       }
   }
//--- 
   $nm_saida->saida("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"\r\n");
   $nm_saida->saida("            \"http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd\">\r\n");
   $nm_saida->saida("<html" . $_SESSION['scriptcase']['reg_conf']['html_dir'] . ">\r\n");
   $nm_saida->saida("<HEAD>\r\n");
   $nm_saida->saida("   <TITLE>" . $this->Ini->Nm_lang['lang_othr_grid_titl'] . " - Pessoa Física</TITLE>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Content-Type\" content=\"text/html; charset=" . $_SESSION['scriptcase']['charset_html'] . "\" />\r\n");
   $nm_saida->saida(" <META http-equiv=\"Expires\" content=\"Fri, Jan 01 1900 00:00:00 GMT\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Last-Modified\" content=\"" . gmdate("D, d M Y H:i:s") . " GMT\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Cache-Control\" content=\"no-store, no-cache, must-revalidate\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Cache-Control\" content=\"post-check=0, pre-check=0\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Pragma\" content=\"no-cache\"/>\r\n");
   if ($_SESSION['scriptcase']['proc_mobile'])
   {
       $nm_saida->saida(" <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\" />\r\n");
   }

   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery/js/jquery.js\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/malsup-blockui/jquery.blockUI.js\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\">var sc_pathToTB = '" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/';</script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox-compressed.js\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/jquery.scInput.js\"></script>\r\n");
   $nm_saida->saida(" <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox.css\" type=\"text/css\" media=\"screen\" />\r\n");
   if (($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['det_print'] == "print" && strtoupper($nmgp_cor_print) == "PB") || $nmgp_tipo_pdf == "pb")
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid_bw.css\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid_bw" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" /> \r\n");
   }
   else
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid.css\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" /> \r\n");
   }
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "grid_public_pessoa_fisica/grid_public_pessoa_fisica_det_" . strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) . ".css\" />\r\n");
   if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['pdf_det'] && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['det_print'] != "print")
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/buttons/" . $this->Ini->Str_btn_css . "\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" href=\"../_lib/css/" . $_SESSION['scriptcase']['erro']['str_schema'] . "\" type=\"text/css\" media=\"screen\" />\r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" href=\"../_lib/css/" . $_SESSION['scriptcase']['erro']['str_schema_dir'] . "\" type=\"text/css\" media=\"screen\" />\r\n");
   }
   $nm_saida->saida("</HEAD>\r\n");
   $nm_saida->saida("  <body class=\"scGridPage\">\r\n");
   $nm_saida->saida("  " . $this->Ini->Ajax_result_set . "\r\n");
   $nm_saida->saida("<table border=0 align=\"center\" valign=\"top\" ><tr><td style=\"padding: 0px\"><div class=\"scGridBorder\"><table width='100%' cellspacing=0 cellpadding=0><tr><td>\r\n");
   $nm_saida->saida("<tr><td class=\"scGridTabelaTd\">\r\n");
   $nm_saida->saida("   <TABLE width=\"100%\" class=\"scGridHeader\">\r\n");
   $nm_saida->saida("    <TR align=\"center\">\r\n");
   $nm_saida->saida("     <TD style=\"padding: 0px\">\r\n");
   $nm_saida->saida("      <TABLE style=\"padding: 0px; border-spacing: 0px; border-width: 0px;\" width=\"100%\">\r\n");
   $nm_saida->saida("       <TR valign=\"middle\">\r\n");
   $nm_saida->saida("        <TD align=\"left\" rowspan=\"3\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          \r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD align=\"left\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          " . $this->Ini->Nm_lang['lang_othr_grid_titl'] . " - Pessoa Física\r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
   $nm_saida->saida("          &nbsp; &nbsp;\r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD align=\"center\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          \r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
   $nm_saida->saida("          &nbsp; &nbsp;\r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD align=\"right\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          \r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("       </TR>\r\n");
   $nm_saida->saida("       <TR valign=\"middle\">\r\n");
   $nm_saida->saida("        <TD align=\"left\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          \r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
   $nm_saida->saida("          &nbsp; &nbsp;\r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD align=\"center\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          \r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
   $nm_saida->saida("          &nbsp; &nbsp;\r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD align=\"right\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          \r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("       </TR>\r\n");
   $nm_saida->saida("       <TR valign=\"middle\">\r\n");
   $nm_saida->saida("        <TD align=\"left\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          \r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
   $nm_saida->saida("          &nbsp; &nbsp;\r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD align=\"center\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          \r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
   $nm_saida->saida("          &nbsp; &nbsp;\r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("        <TD align=\"right\" class=\"scGridHeaderFont\">\r\n");
   $nm_saida->saida("          \r\n");
   $nm_saida->saida("        </TD>\r\n");
   $nm_saida->saida("       </TR>\r\n");
   $nm_saida->saida("      </TABLE>\r\n");
   $nm_saida->saida("     </TD>\r\n");
   $nm_saida->saida("    </TR>\r\n");
   $nm_saida->saida("   </TABLE>\r\n");
   $nm_saida->saida("  </TD>\r\n");
   $nm_saida->saida(" </TR>\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['det_print'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['pdf_det']) 
   { 
       $nm_saida->saida("   <tr><td class=\"scGridTabelaTd\">\r\n");
       $nm_saida->saida("    <table width=\"100%\"><tr>\r\n");
       $nm_saida->saida("     <td class=\"scGridToolbar\">\r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"center\" width=\"33%\"> \r\n");
       if ($this->nmgp_botoes['det_pdf'] == "on")
       {
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bpdf", "", "", "Dpdf_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->path_link . "grid_public_pessoa_fisica/grid_public_pessoa_fisica_config_pdf.php?nm_opc=pdf_det&nm_target=0&nm_cor=cor&papel=1&orientacao=1&largura=1200&conf_larg=S&conf_fonte=10&language=pt_br&conf_socor=S&KeepThis=false&TB_iframe=true&modal=true", "", "only_text", "text_right", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
       }
       if ($this->nmgp_botoes['det_print'] == "on")
       {
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bprint", "", "", "Dprint_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->path_link . "grid_public_pessoa_fisica/grid_public_pessoa_fisica_config_print.php?nm_opc=detalhe&nm_cor=AM&language=pt_br&KeepThis=true&TB_iframe=true&modal=true", "", "only_text", "text_right", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
       }
       $Cod_Btn = nmButtonOutput($this->arr_buttons, "bsair", "self.parent.tb_remove()", "self.parent.tb_remove()", "sc_b_sai_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
       $nm_saida->saida("           $Cod_Btn \r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"right\" width=\"33%\"> \r\n");
       $nm_saida->saida("     </td>\r\n");
       $nm_saida->saida("    </tr></table>\r\n");
       $nm_saida->saida("   </td></tr>\r\n");
   } 
   $nm_saida->saida("<tr><td class=\"scGridTabelaTd\">\r\n");
   $nm_saida->saida("<TABLE style=\"padding: 0px; spacing: 0px; border-width: 0px;\"  align=\"center\" valign=\"top\" width=\"100%\">\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_pessoa_fisica'])) ? $this->New_label['public_pessoa_fisica_id_pessoa_fisica'] : "ID Pessoa Fisica"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_id_pessoa_fisica))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_id_pessoa_fisica_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_id_pessoa_fisica_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_nome'])) ? $this->New_label['public_pessoa_fisica_nome'] : "Nome"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_nome)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_nome_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_nome_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_tipo_vinculo'])) ? $this->New_label['public_pessoa_fisica_id_tipo_vinculo'] : "Tipo Vinculo"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_id_tipo_vinculo))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_id_tipo_vinculo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_id_tipo_vinculo_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_endereco'])) ? $this->New_label['public_pessoa_fisica_endereco'] : "Endereço"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_endereco)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_endereco_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_endereco_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_endereco_comp'])) ? $this->New_label['public_pessoa_fisica_endereco_comp'] : "Endereço Comp"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_endereco_comp)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_endereco_comp_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_endereco_comp_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_bairro'])) ? $this->New_label['public_pessoa_fisica_bairro'] : "Endereço Bairro"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_bairro)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_bairro_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_bairro_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['id_municipio'])) ? $this->New_label['id_municipio'] : "Endereço Município"; 
          $conteudo = trim(sc_strip_script($this->id_municipio)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_id_municipio_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_id_municipio_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['id_uf'])) ? $this->New_label['id_uf'] : "Endereço UF"; 
          $conteudo = trim(sc_strip_script($this->id_uf)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_id_uf_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_id_uf_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['id_pais'])) ? $this->New_label['id_pais'] : "Endereço País"; 
          $conteudo = trim(sc_strip_script($this->id_pais)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_id_pais_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_id_pais_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cep'])) ? $this->New_label['public_pessoa_fisica_cep'] : "Endereço CEP"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_cep))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Cep($conteudo) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_cep_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_cep_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_endereco_cob'])) ? $this->New_label['public_pessoa_fisica_endereco_cob'] : "Endereço Cobrança"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_endereco_cob)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_endereco_cob_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_endereco_cob_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_endereco_comp_cob'])) ? $this->New_label['public_pessoa_fisica_endereco_comp_cob'] : "Endereço Cobrança Comp"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_endereco_comp_cob)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_endereco_comp_cob_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_endereco_comp_cob_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_bairro_cob'])) ? $this->New_label['public_pessoa_fisica_bairro_cob'] : "Endereço Cobrança Bairro"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_bairro_cob)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_bairro_cob_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_bairro_cob_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_municipio_cob'])) ? $this->New_label['public_pessoa_fisica_id_municipio_cob'] : "Endereço Cobrança Município"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_id_municipio_cob))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_id_municipio_cob_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_id_municipio_cob_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_uf_cob'])) ? $this->New_label['public_pessoa_fisica_id_uf_cob'] : "Endereço Cobrança UF"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_id_uf_cob))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_id_uf_cob_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_id_uf_cob_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_pais_cob'])) ? $this->New_label['public_pessoa_fisica_id_pais_cob'] : "Endereço Cobrança País"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_id_pais_cob))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_id_pais_cob_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_id_pais_cob_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cep_cob'])) ? $this->New_label['public_pessoa_fisica_cep_cob'] : "Endereço Cobrança CEP"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_cep_cob))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Cep($conteudo) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_cep_cob_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_cep_cob_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_dt_nasc'])) ? $this->New_label['public_pessoa_fisica_dt_nasc'] : "Dt. Nascimento"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_dt_nasc))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_dt_nasc_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_dt_nasc_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_sexo'])) ? $this->New_label['public_pessoa_fisica_sexo'] : "Sexo"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_sexo)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_sexo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_sexo_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_tipo_estado_civil'])) ? $this->New_label['public_pessoa_fisica_id_tipo_estado_civil'] : "Tipo Estado Civil"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_id_tipo_estado_civil))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_id_tipo_estado_civil_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_id_tipo_estado_civil_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_tipo_escolaridade'])) ? $this->New_label['public_pessoa_fisica_id_tipo_escolaridade'] : "Tipo Escolaridade"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_id_tipo_escolaridade))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_id_tipo_escolaridade_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_id_tipo_escolaridade_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_tipo_sanguineo'])) ? $this->New_label['public_pessoa_fisica_id_tipo_sanguineo'] : "Tipo Sanguineo"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_id_tipo_sanguineo))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_id_tipo_sanguineo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_id_tipo_sanguineo_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_profissao'])) ? $this->New_label['public_pessoa_fisica_profissao'] : "Profissão"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_profissao)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_profissao_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_profissao_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_aposentado'])) ? $this->New_label['public_pessoa_fisica_aposentado'] : "Aposentado"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_aposentado)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_aposentado_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_aposentado_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cpf'])) ? $this->New_label['public_pessoa_fisica_cpf'] : "CPF"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_cpf))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               if (strlen($conteudo) < 11) 
               { 
                   $conteudo = str_repeat(0, 11 - strlen($conteudo)) . $conteudo; 
               } 
               elseif (strlen($conteudo) > 11) 
               { 
                   $conteudo = substr($conteudo, strlen($conteudo) - 11); 
               } 
               nmgp_Form_CicCnpj($conteudo) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_cpf_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_cpf_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_rg'])) ? $this->New_label['public_pessoa_fisica_rg'] : "RG"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_rg)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_rg_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_rg_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_rg_orgao_emissor'])) ? $this->New_label['public_pessoa_fisica_rg_orgao_emissor'] : "RG Orgão Emissor"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_rg_orgao_emissor)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_rg_orgao_emissor_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_rg_orgao_emissor_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_rg_uf_emissor'])) ? $this->New_label['public_pessoa_fisica_rg_uf_emissor'] : "RG UF Emissor"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_rg_uf_emissor)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_rg_uf_emissor_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_rg_uf_emissor_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_rg_dt_emissao'])) ? $this->New_label['public_pessoa_fisica_rg_dt_emissao'] : "RG Dt Emissão"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_rg_dt_emissao))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_rg_dt_emissao_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_rg_dt_emissao_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_passaporte'])) ? $this->New_label['public_pessoa_fisica_passaporte'] : "Passaporte"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_passaporte)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_passaporte_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_passaporte_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_passaporte_dt_emissao'])) ? $this->New_label['public_pessoa_fisica_passaporte_dt_emissao'] : "Passaporte Dt Emissão"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_passaporte_dt_emissao))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_passaporte_dt_emissao_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_passaporte_dt_emissao_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_passaporte_pais_origem'])) ? $this->New_label['public_pessoa_fisica_passaporte_pais_origem'] : "Passaporte País Origem"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_passaporte_pais_origem))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_passaporte_pais_origem_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_passaporte_pais_origem_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_nacionalidade'])) ? $this->New_label['public_pessoa_fisica_nacionalidade'] : "Nacionalidade"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_nacionalidade))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_nacionalidade_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_nacionalidade_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_naturalidade'])) ? $this->New_label['public_pessoa_fisica_naturalidade'] : "Naturalidade"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_naturalidade)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_naturalidade_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_naturalidade_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cnh'])) ? $this->New_label['public_pessoa_fisica_cnh'] : "CNH"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_cnh)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_cnh_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_cnh_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cnh_dt_validade'])) ? $this->New_label['public_pessoa_fisica_cnh_dt_validade'] : "CNH Dt Validade"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->public_pessoa_fisica_cnh_dt_validade))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_cnh_dt_validade_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_public_pessoa_fisica_cnh_dt_validade_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cnh_categoria'])) ? $this->New_label['public_pessoa_fisica_cnh_categoria'] : "CNH Categoria"; 
          $conteudo = trim(sc_strip_script($this->public_pessoa_fisica_cnh_categoria)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_public_pessoa_fisica_cnh_categoria_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_public_pessoa_fisica_cnh_categoria_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['obs'])) ? $this->New_label['obs'] : "Obs"; 
          $conteudo = trim(sc_strip_script($this->obs)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_obs_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_obs_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['id_ativo'])) ? $this->New_label['id_ativo'] : "Ativo"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->id_ativo))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_id_ativo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_id_ativo_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['dt_cadastro'])) ? $this->New_label['dt_cadastro'] : "Dt Cadastro"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->dt_cadastro))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               if (substr($conteudo, 10, 1) == "-") 
               { 
                  $conteudo = substr($conteudo, 0, 10) . " " . substr($conteudo, 11);
               } 
               if (substr($conteudo, 13, 1) == ".") 
               { 
                  $conteudo = substr($conteudo, 0, 13) . ":" . substr($conteudo, 14, 2) . ":" . substr($conteudo, 17);
               } 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD HH:II:SS");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_dt_cadastro_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_dt_cadastro_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['dt_atualiza'])) ? $this->New_label['dt_atualiza'] : "Dt Atualização"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->dt_atualiza))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               if (substr($conteudo, 10, 1) == "-") 
               { 
                  $conteudo = substr($conteudo, 0, 10) . " " . substr($conteudo, 11);
               } 
               if (substr($conteudo, 13, 1) == ".") 
               { 
                  $conteudo = substr($conteudo, 0, 13) . ":" . substr($conteudo, 14, 2) . ":" . substr($conteudo, 17);
               } 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD HH:II:SS");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_dt_atualiza_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_dt_atualiza_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['usu_cadastro'])) ? $this->New_label['usu_cadastro'] : "Usuário Cadastrou"; 
          $conteudo = trim(sc_strip_script($this->usu_cadastro)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_usu_cadastro_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_usu_cadastro_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['usu_atualiza'])) ? $this->New_label['usu_atualiza'] : "Usuário Atualizou"; 
          $conteudo = trim(sc_strip_script($this->usu_atualiza)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_usu_atualiza_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_usu_atualiza_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("</TABLE>\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['det_print'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['pdf_det']) 
   { 
       $nm_saida->saida("   <tr><td class=\"scGridTabelaTd\">\r\n");
       $nm_saida->saida("    <table width=\"100%\"><tr>\r\n");
       $nm_saida->saida("     <td class=\"scGridToolbar\">\r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"center\" width=\"33%\"> \r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"right\" width=\"33%\"> \r\n");
       $nm_saida->saida("     </td>\r\n");
       $nm_saida->saida("    </tr></table>\r\n");
       $nm_saida->saida("   </td></tr>\r\n");
   } 
   $rs->Close(); 
   $nm_saida->saida("<script language=JavaScript>\r\n");
   $nm_saida->saida("   function nm_mostra_doc(campo1, campo2, campo3)\r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("       NovaJanela = window.open (\"grid_public_pessoa_fisica_doc.php?script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&script_case_session=" . session_id() . "&nm_cod_doc=\" + campo1 + \"&nm_nome_doc=\" + campo2 + \"&nm_cod_apl=\" + campo3, \"ScriptCase\", \"resizable\");\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("   function nm_gp_move(x, y, z, p, g) \r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("      window.location = \"" . $this->Ini->path_link . "grid_public_pessoa_fisica/index.php?nmgp_opcao=pdf_det&nmgp_tipo_pdf=\" + z + \"&nmgp_parms_pdf=\" + p +  \"&nmgp_graf_pdf=\" + g + \"&script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&script_case_session=" . session_id() . "\";\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("   function nm_gp_print_conf(tp, cor)\r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("       window.open('" . $this->Ini->path_link . "grid_public_pessoa_fisica/grid_public_pessoa_fisica_iframe_prt.php?path_botoes=" . $this->Ini->path_botoes . "&script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&script_case_session=" . session_id() . "&opcao=det_print&cor_print=' + cor,'','location=no,menubar,resizable,scrollbars,status=no,toolbar');\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("</script>\r\n");
   $nm_saida->saida("</body>\r\n");
   $nm_saida->saida("</html>\r\n");
 }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont2 >= $tam_campo)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
}
