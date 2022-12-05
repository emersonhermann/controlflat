<?php

class grid_public_pessoa_fisica_rtf
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Texto_tag;
   var $Arquivo;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function grid_public_pessoa_fisica_rtf()
   {
      $this->nm_data   = new nm_data("pt_br");
      $this->Texto_tag = "";
   }

   //---- 
   function monta_rtf()
   {
      $this->inicializa_vars();
      $this->gera_texto_tag();
      $this->grava_arquivo_rtf();
      $this->monta_html();
   }

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_grid_public_pessoa_fisica";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_public_pessoa_fisica.rtf";
   }

   //----- 
   function gera_texto_tag()
   {
     global $nm_lang;
      global
             $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_fisica']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_fisica']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_fisica']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
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
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, cpf as public_pessoa_fisica_cpf, nome as public_pessoa_fisica_nome, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, str_replace (convert(char(10),dt_nasc,102), '.', '-') + ' ' + convert(char(8),dt_nasc,20) as public_pessoa_fisica_dt_nasc, sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, str_replace (convert(char(10),rg_dt_emissao,102), '.', '-') + ' ' + convert(char(8),rg_dt_emissao,20) as cmp_maior_30_14, passaporte as cmp_maior_30_15, str_replace (convert(char(10),passaporte_dt_emissao,102), '.', '-') + ' ' + convert(char(8),passaporte_dt_emissao,20) as cmp_maior_30_16, passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, str_replace (convert(char(10),cnh_dt_validade,102), '.', '-') + ' ' + convert(char(8),cnh_dt_validade,20) as cmp_maior_30_20, cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, id_tipo_vinculo as cmp_maior_30_22, pessoa_fisica.id_ativo as id_ativo, str_replace (convert(char(10),pessoa_fisica.dt_cadastro,102), '.', '-') + ' ' + convert(char(8),pessoa_fisica.dt_cadastro,20) as dt_cadastro, str_replace (convert(char(10),pessoa_fisica.dt_atualiza,102), '.', '-') + ' ' + convert(char(8),pessoa_fisica.dt_atualiza,20) as dt_atualiza, pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, cpf as public_pessoa_fisica_cpf, nome as public_pessoa_fisica_nome, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, dt_nasc as public_pessoa_fisica_dt_nasc, sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, rg_dt_emissao as cmp_maior_30_14, passaporte as cmp_maior_30_15, passaporte_dt_emissao as cmp_maior_30_16, passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, cnh_dt_validade as cmp_maior_30_20, cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, id_tipo_vinculo as cmp_maior_30_22, pessoa_fisica.id_ativo as id_ativo, pessoa_fisica.dt_cadastro as dt_cadastro, pessoa_fisica.dt_atualiza as dt_atualiza, pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, cpf as public_pessoa_fisica_cpf, nome as public_pessoa_fisica_nome, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, convert(char(23),dt_nasc,121) as public_pessoa_fisica_dt_nasc, sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, convert(char(23),rg_dt_emissao,121) as cmp_maior_30_14, passaporte as cmp_maior_30_15, convert(char(23),passaporte_dt_emissao,121) as cmp_maior_30_16, passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, convert(char(23),cnh_dt_validade,121) as cmp_maior_30_20, cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, id_tipo_vinculo as cmp_maior_30_22, pessoa_fisica.id_ativo as id_ativo, convert(char(23),pessoa_fisica.dt_cadastro,121) as dt_cadastro, convert(char(23),pessoa_fisica.dt_atualiza,121) as dt_atualiza, pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, cpf as public_pessoa_fisica_cpf, nome as public_pessoa_fisica_nome, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, dt_nasc as public_pessoa_fisica_dt_nasc, sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, rg_dt_emissao as cmp_maior_30_14, passaporte as cmp_maior_30_15, passaporte_dt_emissao as cmp_maior_30_16, passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, cnh_dt_validade as cmp_maior_30_20, cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, id_tipo_vinculo as cmp_maior_30_22, pessoa_fisica.id_ativo as id_ativo, pessoa_fisica.dt_cadastro as dt_cadastro, pessoa_fisica.dt_atualiza as dt_atualiza, pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, cpf as public_pessoa_fisica_cpf, nome as public_pessoa_fisica_nome, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, EXTEND(dt_nasc, YEAR TO DAY) as public_pessoa_fisica_dt_nasc, sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, EXTEND(rg_dt_emissao, YEAR TO DAY) as cmp_maior_30_14, passaporte as cmp_maior_30_15, EXTEND(passaporte_dt_emissao, YEAR TO DAY) as cmp_maior_30_16, passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, EXTEND(cnh_dt_validade, YEAR TO DAY) as cmp_maior_30_20, cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, id_tipo_vinculo as cmp_maior_30_22, pessoa_fisica.id_ativo as id_ativo, EXTEND(pessoa_fisica.dt_cadastro, YEAR TO FRACTION) as dt_cadastro, EXTEND(pessoa_fisica.dt_atualiza, YEAR TO FRACTION) as dt_atualiza, pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT id_pessoa_fisica as cmp_maior_30_1, cpf as public_pessoa_fisica_cpf, nome as public_pessoa_fisica_nome, endereco as public_pessoa_fisica_endereco, endereco_comp as cmp_maior_30_2, bairro as public_pessoa_fisica_bairro, municipio.nm_municipio as id_municipio, uf.uf_nome as id_uf, pais.pais_nm_pais_ter_ptb as id_pais, cep as public_pessoa_fisica_cep, endereco_cob as cmp_maior_30_3, endereco_comp_cob as cmp_maior_30_4, bairro_cob as cmp_maior_30_5, id_municipio_cob as cmp_maior_30_6, id_uf_cob as public_pessoa_fisica_id_uf_cob, id_pais_cob as cmp_maior_30_7, cep_cob as public_pessoa_fisica_cep_cob, dt_nasc as public_pessoa_fisica_dt_nasc, sexo as public_pessoa_fisica_sexo, id_tipo_estado_civil as cmp_maior_30_8, id_tipo_escolaridade as cmp_maior_30_9, id_tipo_sanguineo as cmp_maior_30_10, profissao as public_pessoa_fisica_profissao, aposentado as cmp_maior_30_11, rg as public_pessoa_fisica_rg, rg_orgao_emissor as cmp_maior_30_12, rg_uf_emissor as cmp_maior_30_13, rg_dt_emissao as cmp_maior_30_14, passaporte as cmp_maior_30_15, passaporte_dt_emissao as cmp_maior_30_16, passaporte_pais_origem as cmp_maior_30_17, nacionalidade as cmp_maior_30_18, naturalidade as cmp_maior_30_19, cnh as public_pessoa_fisica_cnh, cnh_dt_validade as cmp_maior_30_20, cnh_categoria as cmp_maior_30_21, pessoa_fisica.obs as obs, id_tipo_vinculo as cmp_maior_30_22, pessoa_fisica.id_ativo as id_ativo, pessoa_fisica.dt_cadastro as dt_cadastro, pessoa_fisica.dt_atualiza as dt_atualiza, pessoa_fisica.usu_cadastro as usu_cadastro, pessoa_fisica.usu_atualiza as usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_pessoa_fisica'])) ? $this->New_label['public_pessoa_fisica_id_pessoa_fisica'] : "ID Pessoa Fisica"; 
          if ($Cada_col == "public_pessoa_fisica_id_pessoa_fisica" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cpf'])) ? $this->New_label['public_pessoa_fisica_cpf'] : "CPF"; 
          if ($Cada_col == "public_pessoa_fisica_cpf" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_nome'])) ? $this->New_label['public_pessoa_fisica_nome'] : "Nome"; 
          if ($Cada_col == "public_pessoa_fisica_nome" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_endereco'])) ? $this->New_label['public_pessoa_fisica_endereco'] : "Endereço"; 
          if ($Cada_col == "public_pessoa_fisica_endereco" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_endereco_comp'])) ? $this->New_label['public_pessoa_fisica_endereco_comp'] : "Endereço Comp"; 
          if ($Cada_col == "public_pessoa_fisica_endereco_comp" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_bairro'])) ? $this->New_label['public_pessoa_fisica_bairro'] : "Endereço Bairro"; 
          if ($Cada_col == "public_pessoa_fisica_bairro" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['id_municipio'])) ? $this->New_label['id_municipio'] : "Endereço Município"; 
          if ($Cada_col == "id_municipio" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['id_uf'])) ? $this->New_label['id_uf'] : "Endereço UF"; 
          if ($Cada_col == "id_uf" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['id_pais'])) ? $this->New_label['id_pais'] : "Endereço País"; 
          if ($Cada_col == "id_pais" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cep'])) ? $this->New_label['public_pessoa_fisica_cep'] : "Endereço CEP"; 
          if ($Cada_col == "public_pessoa_fisica_cep" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_endereco_cob'])) ? $this->New_label['public_pessoa_fisica_endereco_cob'] : "Endereço Cobrança"; 
          if ($Cada_col == "public_pessoa_fisica_endereco_cob" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_endereco_comp_cob'])) ? $this->New_label['public_pessoa_fisica_endereco_comp_cob'] : "Endereço Cobrança Comp"; 
          if ($Cada_col == "public_pessoa_fisica_endereco_comp_cob" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_bairro_cob'])) ? $this->New_label['public_pessoa_fisica_bairro_cob'] : "Endereço Cobrança Bairro"; 
          if ($Cada_col == "public_pessoa_fisica_bairro_cob" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_municipio_cob'])) ? $this->New_label['public_pessoa_fisica_id_municipio_cob'] : "Endereço Cobrança Município"; 
          if ($Cada_col == "public_pessoa_fisica_id_municipio_cob" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_uf_cob'])) ? $this->New_label['public_pessoa_fisica_id_uf_cob'] : "Endereço Cobrança UF"; 
          if ($Cada_col == "public_pessoa_fisica_id_uf_cob" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_pais_cob'])) ? $this->New_label['public_pessoa_fisica_id_pais_cob'] : "Endereço Cobrança País"; 
          if ($Cada_col == "public_pessoa_fisica_id_pais_cob" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cep_cob'])) ? $this->New_label['public_pessoa_fisica_cep_cob'] : "Endereço Cobrança CEP"; 
          if ($Cada_col == "public_pessoa_fisica_cep_cob" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_dt_nasc'])) ? $this->New_label['public_pessoa_fisica_dt_nasc'] : "Dt. Nascimento"; 
          if ($Cada_col == "public_pessoa_fisica_dt_nasc" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_sexo'])) ? $this->New_label['public_pessoa_fisica_sexo'] : "Sexo"; 
          if ($Cada_col == "public_pessoa_fisica_sexo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_tipo_estado_civil'])) ? $this->New_label['public_pessoa_fisica_id_tipo_estado_civil'] : "Tipo Estado Civil"; 
          if ($Cada_col == "public_pessoa_fisica_id_tipo_estado_civil" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_tipo_escolaridade'])) ? $this->New_label['public_pessoa_fisica_id_tipo_escolaridade'] : "Tipo Escolaridade"; 
          if ($Cada_col == "public_pessoa_fisica_id_tipo_escolaridade" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_tipo_sanguineo'])) ? $this->New_label['public_pessoa_fisica_id_tipo_sanguineo'] : "Tipo Sanguineo"; 
          if ($Cada_col == "public_pessoa_fisica_id_tipo_sanguineo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_profissao'])) ? $this->New_label['public_pessoa_fisica_profissao'] : "Profissão"; 
          if ($Cada_col == "public_pessoa_fisica_profissao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_aposentado'])) ? $this->New_label['public_pessoa_fisica_aposentado'] : "Aposentado"; 
          if ($Cada_col == "public_pessoa_fisica_aposentado" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_rg'])) ? $this->New_label['public_pessoa_fisica_rg'] : "RG"; 
          if ($Cada_col == "public_pessoa_fisica_rg" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_rg_orgao_emissor'])) ? $this->New_label['public_pessoa_fisica_rg_orgao_emissor'] : "RG Orgão Emissor"; 
          if ($Cada_col == "public_pessoa_fisica_rg_orgao_emissor" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_rg_uf_emissor'])) ? $this->New_label['public_pessoa_fisica_rg_uf_emissor'] : "RG UF Emissor"; 
          if ($Cada_col == "public_pessoa_fisica_rg_uf_emissor" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_rg_dt_emissao'])) ? $this->New_label['public_pessoa_fisica_rg_dt_emissao'] : "RG Dt Emissão"; 
          if ($Cada_col == "public_pessoa_fisica_rg_dt_emissao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_passaporte'])) ? $this->New_label['public_pessoa_fisica_passaporte'] : "Passaporte"; 
          if ($Cada_col == "public_pessoa_fisica_passaporte" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_passaporte_dt_emissao'])) ? $this->New_label['public_pessoa_fisica_passaporte_dt_emissao'] : "Passaporte Dt Emissão"; 
          if ($Cada_col == "public_pessoa_fisica_passaporte_dt_emissao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_passaporte_pais_origem'])) ? $this->New_label['public_pessoa_fisica_passaporte_pais_origem'] : "Passaporte País Origem"; 
          if ($Cada_col == "public_pessoa_fisica_passaporte_pais_origem" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_nacionalidade'])) ? $this->New_label['public_pessoa_fisica_nacionalidade'] : "Nacionalidade"; 
          if ($Cada_col == "public_pessoa_fisica_nacionalidade" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_naturalidade'])) ? $this->New_label['public_pessoa_fisica_naturalidade'] : "Naturalidade"; 
          if ($Cada_col == "public_pessoa_fisica_naturalidade" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cnh'])) ? $this->New_label['public_pessoa_fisica_cnh'] : "CNH"; 
          if ($Cada_col == "public_pessoa_fisica_cnh" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cnh_dt_validade'])) ? $this->New_label['public_pessoa_fisica_cnh_dt_validade'] : "CNH Dt Validade"; 
          if ($Cada_col == "public_pessoa_fisica_cnh_dt_validade" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_cnh_categoria'])) ? $this->New_label['public_pessoa_fisica_cnh_categoria'] : "CNH Categoria"; 
          if ($Cada_col == "public_pessoa_fisica_cnh_categoria" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['obs'])) ? $this->New_label['obs'] : "Obs"; 
          if ($Cada_col == "obs" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['public_pessoa_fisica_id_tipo_vinculo'])) ? $this->New_label['public_pessoa_fisica_id_tipo_vinculo'] : "Tipo Vinculo"; 
          if ($Cada_col == "public_pessoa_fisica_id_tipo_vinculo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['id_ativo'])) ? $this->New_label['id_ativo'] : "Ativo"; 
          if ($Cada_col == "id_ativo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['dt_cadastro'])) ? $this->New_label['dt_cadastro'] : "Dt Cadastro"; 
          if ($Cada_col == "dt_cadastro" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['dt_atualiza'])) ? $this->New_label['dt_atualiza'] : "Dt Atualização"; 
          if ($Cada_col == "dt_atualiza" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['usu_cadastro'])) ? $this->New_label['usu_cadastro'] : "Usuário Cadastrou"; 
          if ($Cada_col == "usu_cadastro" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['usu_atualiza'])) ? $this->New_label['usu_atualiza'] : "Usuário Atualizou"; 
          if ($Cada_col == "usu_atualiza" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
      } 
      $this->Texto_tag .= "</tr>\r\n";
      while (!$rs->EOF)
      {
         $this->Texto_tag .= "<tr>\r\n";
         $this->public_pessoa_fisica_id_pessoa_fisica = $rs->fields[0] ;  
         $this->public_pessoa_fisica_id_pessoa_fisica = (string)$this->public_pessoa_fisica_id_pessoa_fisica;
         $this->public_pessoa_fisica_cpf = $rs->fields[1] ;  
         $this->public_pessoa_fisica_cpf = (string)$this->public_pessoa_fisica_cpf;
         $this->public_pessoa_fisica_nome = $rs->fields[2] ;  
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
         $this->public_pessoa_fisica_rg = $rs->fields[24] ;  
         $this->public_pessoa_fisica_rg_orgao_emissor = $rs->fields[25] ;  
         $this->public_pessoa_fisica_rg_uf_emissor = $rs->fields[26] ;  
         $this->public_pessoa_fisica_rg_dt_emissao = $rs->fields[27] ;  
         $this->public_pessoa_fisica_passaporte = $rs->fields[28] ;  
         $this->public_pessoa_fisica_passaporte_dt_emissao = $rs->fields[29] ;  
         $this->public_pessoa_fisica_passaporte_pais_origem = $rs->fields[30] ;  
         $this->public_pessoa_fisica_passaporte_pais_origem = (string)$this->public_pessoa_fisica_passaporte_pais_origem;
         $this->public_pessoa_fisica_nacionalidade = $rs->fields[31] ;  
         $this->public_pessoa_fisica_nacionalidade = (string)$this->public_pessoa_fisica_nacionalidade;
         $this->public_pessoa_fisica_naturalidade = $rs->fields[32] ;  
         $this->public_pessoa_fisica_cnh = $rs->fields[33] ;  
         $this->public_pessoa_fisica_cnh_dt_validade = $rs->fields[34] ;  
         $this->public_pessoa_fisica_cnh_categoria = $rs->fields[35] ;  
         $this->obs = $rs->fields[36] ;  
         $this->public_pessoa_fisica_id_tipo_vinculo = $rs->fields[37] ;  
         $this->public_pessoa_fisica_id_tipo_vinculo = (string)$this->public_pessoa_fisica_id_tipo_vinculo;
         $this->id_ativo = $rs->fields[38] ;  
         $this->id_ativo = (string)$this->id_ativo;
         $this->dt_cadastro = $rs->fields[39] ;  
         $this->dt_atualiza = $rs->fields[40] ;  
         $this->usu_cadastro = $rs->fields[41] ;  
         $this->usu_atualiza = $rs->fields[42] ;  
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->Texto_tag .= "</tr>\r\n";
         $rs->MoveNext();
      }
      $this->Texto_tag .= "</table>\r\n";

      $rs->Close();
   }
   //----- public_pessoa_fisica_id_pessoa_fisica
   function NM_export_public_pessoa_fisica_id_pessoa_fisica()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_id_pessoa_fisica, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_id_pessoa_fisica))
         {
             $this->public_pessoa_fisica_id_pessoa_fisica = sc_convert_encoding($this->public_pessoa_fisica_id_pessoa_fisica, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_id_pessoa_fisica = str_replace('<', '&lt;', $this->public_pessoa_fisica_id_pessoa_fisica);
         $this->public_pessoa_fisica_id_pessoa_fisica = str_replace('>', '&gt;', $this->public_pessoa_fisica_id_pessoa_fisica);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_id_pessoa_fisica . "</td>\r\n";
   }
   //----- public_pessoa_fisica_cpf
   function NM_export_public_pessoa_fisica_cpf()
   {
         if (strlen($conteudo) < 11) 
         { 
             $conteudo = str_repeat(0, 11 - strlen($conteudo)) . $conteudo; 
         } 
         elseif (strlen($this->public_pessoa_fisica_cpf) > 11) 
         { 
             $conteudo = substr($this->public_pessoa_fisica_cpf, strlen($this->public_pessoa_fisica_cpf) - 11); 
         } 
         nmgp_Form_CicCnpj($this->public_pessoa_fisica_cpf) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_cpf))
         {
             $this->public_pessoa_fisica_cpf = sc_convert_encoding($this->public_pessoa_fisica_cpf, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_cpf = str_replace('<', '&lt;', $this->public_pessoa_fisica_cpf);
         $this->public_pessoa_fisica_cpf = str_replace('>', '&gt;', $this->public_pessoa_fisica_cpf);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_cpf . "</td>\r\n";
   }
   //----- public_pessoa_fisica_nome
   function NM_export_public_pessoa_fisica_nome()
   {
         $this->public_pessoa_fisica_nome = html_entity_decode($this->public_pessoa_fisica_nome, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_nome = strip_tags($this->public_pessoa_fisica_nome);
         if (!NM_is_utf8($this->public_pessoa_fisica_nome))
         {
             $this->public_pessoa_fisica_nome = sc_convert_encoding($this->public_pessoa_fisica_nome, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_nome = str_replace('<', '&lt;', $this->public_pessoa_fisica_nome);
         $this->public_pessoa_fisica_nome = str_replace('>', '&gt;', $this->public_pessoa_fisica_nome);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_nome . "</td>\r\n";
   }
   //----- public_pessoa_fisica_endereco
   function NM_export_public_pessoa_fisica_endereco()
   {
         $this->public_pessoa_fisica_endereco = html_entity_decode($this->public_pessoa_fisica_endereco, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_endereco = strip_tags($this->public_pessoa_fisica_endereco);
         if (!NM_is_utf8($this->public_pessoa_fisica_endereco))
         {
             $this->public_pessoa_fisica_endereco = sc_convert_encoding($this->public_pessoa_fisica_endereco, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_endereco = str_replace('<', '&lt;', $this->public_pessoa_fisica_endereco);
         $this->public_pessoa_fisica_endereco = str_replace('>', '&gt;', $this->public_pessoa_fisica_endereco);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_endereco . "</td>\r\n";
   }
   //----- public_pessoa_fisica_endereco_comp
   function NM_export_public_pessoa_fisica_endereco_comp()
   {
         $this->public_pessoa_fisica_endereco_comp = html_entity_decode($this->public_pessoa_fisica_endereco_comp, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_endereco_comp = strip_tags($this->public_pessoa_fisica_endereco_comp);
         if (!NM_is_utf8($this->public_pessoa_fisica_endereco_comp))
         {
             $this->public_pessoa_fisica_endereco_comp = sc_convert_encoding($this->public_pessoa_fisica_endereco_comp, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_endereco_comp = str_replace('<', '&lt;', $this->public_pessoa_fisica_endereco_comp);
         $this->public_pessoa_fisica_endereco_comp = str_replace('>', '&gt;', $this->public_pessoa_fisica_endereco_comp);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_endereco_comp . "</td>\r\n";
   }
   //----- public_pessoa_fisica_bairro
   function NM_export_public_pessoa_fisica_bairro()
   {
         $this->public_pessoa_fisica_bairro = html_entity_decode($this->public_pessoa_fisica_bairro, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_bairro = strip_tags($this->public_pessoa_fisica_bairro);
         if (!NM_is_utf8($this->public_pessoa_fisica_bairro))
         {
             $this->public_pessoa_fisica_bairro = sc_convert_encoding($this->public_pessoa_fisica_bairro, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_bairro = str_replace('<', '&lt;', $this->public_pessoa_fisica_bairro);
         $this->public_pessoa_fisica_bairro = str_replace('>', '&gt;', $this->public_pessoa_fisica_bairro);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_bairro . "</td>\r\n";
   }
   //----- id_municipio
   function NM_export_id_municipio()
   {
         $this->id_municipio = html_entity_decode($this->id_municipio, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->id_municipio = strip_tags($this->id_municipio);
         if (!NM_is_utf8($this->id_municipio))
         {
             $this->id_municipio = sc_convert_encoding($this->id_municipio, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->id_municipio = str_replace('<', '&lt;', $this->id_municipio);
         $this->id_municipio = str_replace('>', '&gt;', $this->id_municipio);
         $this->Texto_tag .= "<td>" . $this->id_municipio . "</td>\r\n";
   }
   //----- id_uf
   function NM_export_id_uf()
   {
         $this->id_uf = html_entity_decode($this->id_uf, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->id_uf = strip_tags($this->id_uf);
         if (!NM_is_utf8($this->id_uf))
         {
             $this->id_uf = sc_convert_encoding($this->id_uf, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->id_uf = str_replace('<', '&lt;', $this->id_uf);
         $this->id_uf = str_replace('>', '&gt;', $this->id_uf);
         $this->Texto_tag .= "<td>" . $this->id_uf . "</td>\r\n";
   }
   //----- id_pais
   function NM_export_id_pais()
   {
         $this->id_pais = html_entity_decode($this->id_pais, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->id_pais = strip_tags($this->id_pais);
         if (!NM_is_utf8($this->id_pais))
         {
             $this->id_pais = sc_convert_encoding($this->id_pais, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->id_pais = str_replace('<', '&lt;', $this->id_pais);
         $this->id_pais = str_replace('>', '&gt;', $this->id_pais);
         $this->Texto_tag .= "<td>" . $this->id_pais . "</td>\r\n";
   }
   //----- public_pessoa_fisica_cep
   function NM_export_public_pessoa_fisica_cep()
   {
         nmgp_Form_Cep($this->public_pessoa_fisica_cep) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_cep))
         {
             $this->public_pessoa_fisica_cep = sc_convert_encoding($this->public_pessoa_fisica_cep, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_cep = str_replace('<', '&lt;', $this->public_pessoa_fisica_cep);
         $this->public_pessoa_fisica_cep = str_replace('>', '&gt;', $this->public_pessoa_fisica_cep);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_cep . "</td>\r\n";
   }
   //----- public_pessoa_fisica_endereco_cob
   function NM_export_public_pessoa_fisica_endereco_cob()
   {
         $this->public_pessoa_fisica_endereco_cob = html_entity_decode($this->public_pessoa_fisica_endereco_cob, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_endereco_cob = strip_tags($this->public_pessoa_fisica_endereco_cob);
         if (!NM_is_utf8($this->public_pessoa_fisica_endereco_cob))
         {
             $this->public_pessoa_fisica_endereco_cob = sc_convert_encoding($this->public_pessoa_fisica_endereco_cob, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_endereco_cob = str_replace('<', '&lt;', $this->public_pessoa_fisica_endereco_cob);
         $this->public_pessoa_fisica_endereco_cob = str_replace('>', '&gt;', $this->public_pessoa_fisica_endereco_cob);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_endereco_cob . "</td>\r\n";
   }
   //----- public_pessoa_fisica_endereco_comp_cob
   function NM_export_public_pessoa_fisica_endereco_comp_cob()
   {
         $this->public_pessoa_fisica_endereco_comp_cob = html_entity_decode($this->public_pessoa_fisica_endereco_comp_cob, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_endereco_comp_cob = strip_tags($this->public_pessoa_fisica_endereco_comp_cob);
         if (!NM_is_utf8($this->public_pessoa_fisica_endereco_comp_cob))
         {
             $this->public_pessoa_fisica_endereco_comp_cob = sc_convert_encoding($this->public_pessoa_fisica_endereco_comp_cob, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_endereco_comp_cob = str_replace('<', '&lt;', $this->public_pessoa_fisica_endereco_comp_cob);
         $this->public_pessoa_fisica_endereco_comp_cob = str_replace('>', '&gt;', $this->public_pessoa_fisica_endereco_comp_cob);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_endereco_comp_cob . "</td>\r\n";
   }
   //----- public_pessoa_fisica_bairro_cob
   function NM_export_public_pessoa_fisica_bairro_cob()
   {
         $this->public_pessoa_fisica_bairro_cob = html_entity_decode($this->public_pessoa_fisica_bairro_cob, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_bairro_cob = strip_tags($this->public_pessoa_fisica_bairro_cob);
         if (!NM_is_utf8($this->public_pessoa_fisica_bairro_cob))
         {
             $this->public_pessoa_fisica_bairro_cob = sc_convert_encoding($this->public_pessoa_fisica_bairro_cob, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_bairro_cob = str_replace('<', '&lt;', $this->public_pessoa_fisica_bairro_cob);
         $this->public_pessoa_fisica_bairro_cob = str_replace('>', '&gt;', $this->public_pessoa_fisica_bairro_cob);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_bairro_cob . "</td>\r\n";
   }
   //----- public_pessoa_fisica_id_municipio_cob
   function NM_export_public_pessoa_fisica_id_municipio_cob()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_id_municipio_cob, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_id_municipio_cob))
         {
             $this->public_pessoa_fisica_id_municipio_cob = sc_convert_encoding($this->public_pessoa_fisica_id_municipio_cob, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_id_municipio_cob = str_replace('<', '&lt;', $this->public_pessoa_fisica_id_municipio_cob);
         $this->public_pessoa_fisica_id_municipio_cob = str_replace('>', '&gt;', $this->public_pessoa_fisica_id_municipio_cob);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_id_municipio_cob . "</td>\r\n";
   }
   //----- public_pessoa_fisica_id_uf_cob
   function NM_export_public_pessoa_fisica_id_uf_cob()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_id_uf_cob, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_id_uf_cob))
         {
             $this->public_pessoa_fisica_id_uf_cob = sc_convert_encoding($this->public_pessoa_fisica_id_uf_cob, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_id_uf_cob = str_replace('<', '&lt;', $this->public_pessoa_fisica_id_uf_cob);
         $this->public_pessoa_fisica_id_uf_cob = str_replace('>', '&gt;', $this->public_pessoa_fisica_id_uf_cob);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_id_uf_cob . "</td>\r\n";
   }
   //----- public_pessoa_fisica_id_pais_cob
   function NM_export_public_pessoa_fisica_id_pais_cob()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_id_pais_cob, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_id_pais_cob))
         {
             $this->public_pessoa_fisica_id_pais_cob = sc_convert_encoding($this->public_pessoa_fisica_id_pais_cob, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_id_pais_cob = str_replace('<', '&lt;', $this->public_pessoa_fisica_id_pais_cob);
         $this->public_pessoa_fisica_id_pais_cob = str_replace('>', '&gt;', $this->public_pessoa_fisica_id_pais_cob);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_id_pais_cob . "</td>\r\n";
   }
   //----- public_pessoa_fisica_cep_cob
   function NM_export_public_pessoa_fisica_cep_cob()
   {
         nmgp_Form_Cep($this->public_pessoa_fisica_cep_cob) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_cep_cob))
         {
             $this->public_pessoa_fisica_cep_cob = sc_convert_encoding($this->public_pessoa_fisica_cep_cob, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_cep_cob = str_replace('<', '&lt;', $this->public_pessoa_fisica_cep_cob);
         $this->public_pessoa_fisica_cep_cob = str_replace('>', '&gt;', $this->public_pessoa_fisica_cep_cob);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_cep_cob . "</td>\r\n";
   }
   //----- public_pessoa_fisica_dt_nasc
   function NM_export_public_pessoa_fisica_dt_nasc()
   {
         $conteudo_x = $this->public_pessoa_fisica_dt_nasc;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->public_pessoa_fisica_dt_nasc, "YYYY-MM-DD");
             $this->public_pessoa_fisica_dt_nasc = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->public_pessoa_fisica_dt_nasc))
         {
             $this->public_pessoa_fisica_dt_nasc = sc_convert_encoding($this->public_pessoa_fisica_dt_nasc, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_dt_nasc = str_replace('<', '&lt;', $this->public_pessoa_fisica_dt_nasc);
         $this->public_pessoa_fisica_dt_nasc = str_replace('>', '&gt;', $this->public_pessoa_fisica_dt_nasc);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_dt_nasc . "</td>\r\n";
   }
   //----- public_pessoa_fisica_sexo
   function NM_export_public_pessoa_fisica_sexo()
   {
         $this->public_pessoa_fisica_sexo = html_entity_decode($this->public_pessoa_fisica_sexo, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_sexo = strip_tags($this->public_pessoa_fisica_sexo);
         if (!NM_is_utf8($this->public_pessoa_fisica_sexo))
         {
             $this->public_pessoa_fisica_sexo = sc_convert_encoding($this->public_pessoa_fisica_sexo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_sexo = str_replace('<', '&lt;', $this->public_pessoa_fisica_sexo);
         $this->public_pessoa_fisica_sexo = str_replace('>', '&gt;', $this->public_pessoa_fisica_sexo);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_sexo . "</td>\r\n";
   }
   //----- public_pessoa_fisica_id_tipo_estado_civil
   function NM_export_public_pessoa_fisica_id_tipo_estado_civil()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_id_tipo_estado_civil, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_id_tipo_estado_civil))
         {
             $this->public_pessoa_fisica_id_tipo_estado_civil = sc_convert_encoding($this->public_pessoa_fisica_id_tipo_estado_civil, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_id_tipo_estado_civil = str_replace('<', '&lt;', $this->public_pessoa_fisica_id_tipo_estado_civil);
         $this->public_pessoa_fisica_id_tipo_estado_civil = str_replace('>', '&gt;', $this->public_pessoa_fisica_id_tipo_estado_civil);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_id_tipo_estado_civil . "</td>\r\n";
   }
   //----- public_pessoa_fisica_id_tipo_escolaridade
   function NM_export_public_pessoa_fisica_id_tipo_escolaridade()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_id_tipo_escolaridade, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_id_tipo_escolaridade))
         {
             $this->public_pessoa_fisica_id_tipo_escolaridade = sc_convert_encoding($this->public_pessoa_fisica_id_tipo_escolaridade, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_id_tipo_escolaridade = str_replace('<', '&lt;', $this->public_pessoa_fisica_id_tipo_escolaridade);
         $this->public_pessoa_fisica_id_tipo_escolaridade = str_replace('>', '&gt;', $this->public_pessoa_fisica_id_tipo_escolaridade);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_id_tipo_escolaridade . "</td>\r\n";
   }
   //----- public_pessoa_fisica_id_tipo_sanguineo
   function NM_export_public_pessoa_fisica_id_tipo_sanguineo()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_id_tipo_sanguineo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_id_tipo_sanguineo))
         {
             $this->public_pessoa_fisica_id_tipo_sanguineo = sc_convert_encoding($this->public_pessoa_fisica_id_tipo_sanguineo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_id_tipo_sanguineo = str_replace('<', '&lt;', $this->public_pessoa_fisica_id_tipo_sanguineo);
         $this->public_pessoa_fisica_id_tipo_sanguineo = str_replace('>', '&gt;', $this->public_pessoa_fisica_id_tipo_sanguineo);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_id_tipo_sanguineo . "</td>\r\n";
   }
   //----- public_pessoa_fisica_profissao
   function NM_export_public_pessoa_fisica_profissao()
   {
         $this->public_pessoa_fisica_profissao = html_entity_decode($this->public_pessoa_fisica_profissao, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_profissao = strip_tags($this->public_pessoa_fisica_profissao);
         if (!NM_is_utf8($this->public_pessoa_fisica_profissao))
         {
             $this->public_pessoa_fisica_profissao = sc_convert_encoding($this->public_pessoa_fisica_profissao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_profissao = str_replace('<', '&lt;', $this->public_pessoa_fisica_profissao);
         $this->public_pessoa_fisica_profissao = str_replace('>', '&gt;', $this->public_pessoa_fisica_profissao);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_profissao . "</td>\r\n";
   }
   //----- public_pessoa_fisica_aposentado
   function NM_export_public_pessoa_fisica_aposentado()
   {
         $this->public_pessoa_fisica_aposentado = html_entity_decode($this->public_pessoa_fisica_aposentado, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_aposentado = strip_tags($this->public_pessoa_fisica_aposentado);
         if (!NM_is_utf8($this->public_pessoa_fisica_aposentado))
         {
             $this->public_pessoa_fisica_aposentado = sc_convert_encoding($this->public_pessoa_fisica_aposentado, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_aposentado = str_replace('<', '&lt;', $this->public_pessoa_fisica_aposentado);
         $this->public_pessoa_fisica_aposentado = str_replace('>', '&gt;', $this->public_pessoa_fisica_aposentado);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_aposentado . "</td>\r\n";
   }
   //----- public_pessoa_fisica_rg
   function NM_export_public_pessoa_fisica_rg()
   {
         $this->public_pessoa_fisica_rg = html_entity_decode($this->public_pessoa_fisica_rg, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_rg = strip_tags($this->public_pessoa_fisica_rg);
         if (!NM_is_utf8($this->public_pessoa_fisica_rg))
         {
             $this->public_pessoa_fisica_rg = sc_convert_encoding($this->public_pessoa_fisica_rg, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_rg = str_replace('<', '&lt;', $this->public_pessoa_fisica_rg);
         $this->public_pessoa_fisica_rg = str_replace('>', '&gt;', $this->public_pessoa_fisica_rg);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_rg . "</td>\r\n";
   }
   //----- public_pessoa_fisica_rg_orgao_emissor
   function NM_export_public_pessoa_fisica_rg_orgao_emissor()
   {
         $this->public_pessoa_fisica_rg_orgao_emissor = html_entity_decode($this->public_pessoa_fisica_rg_orgao_emissor, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_rg_orgao_emissor = strip_tags($this->public_pessoa_fisica_rg_orgao_emissor);
         if (!NM_is_utf8($this->public_pessoa_fisica_rg_orgao_emissor))
         {
             $this->public_pessoa_fisica_rg_orgao_emissor = sc_convert_encoding($this->public_pessoa_fisica_rg_orgao_emissor, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_rg_orgao_emissor = str_replace('<', '&lt;', $this->public_pessoa_fisica_rg_orgao_emissor);
         $this->public_pessoa_fisica_rg_orgao_emissor = str_replace('>', '&gt;', $this->public_pessoa_fisica_rg_orgao_emissor);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_rg_orgao_emissor . "</td>\r\n";
   }
   //----- public_pessoa_fisica_rg_uf_emissor
   function NM_export_public_pessoa_fisica_rg_uf_emissor()
   {
         $this->public_pessoa_fisica_rg_uf_emissor = html_entity_decode($this->public_pessoa_fisica_rg_uf_emissor, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_rg_uf_emissor = strip_tags($this->public_pessoa_fisica_rg_uf_emissor);
         if (!NM_is_utf8($this->public_pessoa_fisica_rg_uf_emissor))
         {
             $this->public_pessoa_fisica_rg_uf_emissor = sc_convert_encoding($this->public_pessoa_fisica_rg_uf_emissor, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_rg_uf_emissor = str_replace('<', '&lt;', $this->public_pessoa_fisica_rg_uf_emissor);
         $this->public_pessoa_fisica_rg_uf_emissor = str_replace('>', '&gt;', $this->public_pessoa_fisica_rg_uf_emissor);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_rg_uf_emissor . "</td>\r\n";
   }
   //----- public_pessoa_fisica_rg_dt_emissao
   function NM_export_public_pessoa_fisica_rg_dt_emissao()
   {
         $conteudo_x = $this->public_pessoa_fisica_rg_dt_emissao;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->public_pessoa_fisica_rg_dt_emissao, "YYYY-MM-DD");
             $this->public_pessoa_fisica_rg_dt_emissao = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->public_pessoa_fisica_rg_dt_emissao))
         {
             $this->public_pessoa_fisica_rg_dt_emissao = sc_convert_encoding($this->public_pessoa_fisica_rg_dt_emissao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_rg_dt_emissao = str_replace('<', '&lt;', $this->public_pessoa_fisica_rg_dt_emissao);
         $this->public_pessoa_fisica_rg_dt_emissao = str_replace('>', '&gt;', $this->public_pessoa_fisica_rg_dt_emissao);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_rg_dt_emissao . "</td>\r\n";
   }
   //----- public_pessoa_fisica_passaporte
   function NM_export_public_pessoa_fisica_passaporte()
   {
         $this->public_pessoa_fisica_passaporte = html_entity_decode($this->public_pessoa_fisica_passaporte, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_passaporte = strip_tags($this->public_pessoa_fisica_passaporte);
         if (!NM_is_utf8($this->public_pessoa_fisica_passaporte))
         {
             $this->public_pessoa_fisica_passaporte = sc_convert_encoding($this->public_pessoa_fisica_passaporte, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_passaporte = str_replace('<', '&lt;', $this->public_pessoa_fisica_passaporte);
         $this->public_pessoa_fisica_passaporte = str_replace('>', '&gt;', $this->public_pessoa_fisica_passaporte);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_passaporte . "</td>\r\n";
   }
   //----- public_pessoa_fisica_passaporte_dt_emissao
   function NM_export_public_pessoa_fisica_passaporte_dt_emissao()
   {
         $conteudo_x = $this->public_pessoa_fisica_passaporte_dt_emissao;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->public_pessoa_fisica_passaporte_dt_emissao, "YYYY-MM-DD");
             $this->public_pessoa_fisica_passaporte_dt_emissao = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->public_pessoa_fisica_passaporte_dt_emissao))
         {
             $this->public_pessoa_fisica_passaporte_dt_emissao = sc_convert_encoding($this->public_pessoa_fisica_passaporte_dt_emissao, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_passaporte_dt_emissao = str_replace('<', '&lt;', $this->public_pessoa_fisica_passaporte_dt_emissao);
         $this->public_pessoa_fisica_passaporte_dt_emissao = str_replace('>', '&gt;', $this->public_pessoa_fisica_passaporte_dt_emissao);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_passaporte_dt_emissao . "</td>\r\n";
   }
   //----- public_pessoa_fisica_passaporte_pais_origem
   function NM_export_public_pessoa_fisica_passaporte_pais_origem()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_passaporte_pais_origem, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_passaporte_pais_origem))
         {
             $this->public_pessoa_fisica_passaporte_pais_origem = sc_convert_encoding($this->public_pessoa_fisica_passaporte_pais_origem, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_passaporte_pais_origem = str_replace('<', '&lt;', $this->public_pessoa_fisica_passaporte_pais_origem);
         $this->public_pessoa_fisica_passaporte_pais_origem = str_replace('>', '&gt;', $this->public_pessoa_fisica_passaporte_pais_origem);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_passaporte_pais_origem . "</td>\r\n";
   }
   //----- public_pessoa_fisica_nacionalidade
   function NM_export_public_pessoa_fisica_nacionalidade()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_nacionalidade, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_nacionalidade))
         {
             $this->public_pessoa_fisica_nacionalidade = sc_convert_encoding($this->public_pessoa_fisica_nacionalidade, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_nacionalidade = str_replace('<', '&lt;', $this->public_pessoa_fisica_nacionalidade);
         $this->public_pessoa_fisica_nacionalidade = str_replace('>', '&gt;', $this->public_pessoa_fisica_nacionalidade);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_nacionalidade . "</td>\r\n";
   }
   //----- public_pessoa_fisica_naturalidade
   function NM_export_public_pessoa_fisica_naturalidade()
   {
         $this->public_pessoa_fisica_naturalidade = html_entity_decode($this->public_pessoa_fisica_naturalidade, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_naturalidade = strip_tags($this->public_pessoa_fisica_naturalidade);
         if (!NM_is_utf8($this->public_pessoa_fisica_naturalidade))
         {
             $this->public_pessoa_fisica_naturalidade = sc_convert_encoding($this->public_pessoa_fisica_naturalidade, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_naturalidade = str_replace('<', '&lt;', $this->public_pessoa_fisica_naturalidade);
         $this->public_pessoa_fisica_naturalidade = str_replace('>', '&gt;', $this->public_pessoa_fisica_naturalidade);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_naturalidade . "</td>\r\n";
   }
   //----- public_pessoa_fisica_cnh
   function NM_export_public_pessoa_fisica_cnh()
   {
         $this->public_pessoa_fisica_cnh = html_entity_decode($this->public_pessoa_fisica_cnh, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_cnh = strip_tags($this->public_pessoa_fisica_cnh);
         if (!NM_is_utf8($this->public_pessoa_fisica_cnh))
         {
             $this->public_pessoa_fisica_cnh = sc_convert_encoding($this->public_pessoa_fisica_cnh, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_cnh = str_replace('<', '&lt;', $this->public_pessoa_fisica_cnh);
         $this->public_pessoa_fisica_cnh = str_replace('>', '&gt;', $this->public_pessoa_fisica_cnh);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_cnh . "</td>\r\n";
   }
   //----- public_pessoa_fisica_cnh_dt_validade
   function NM_export_public_pessoa_fisica_cnh_dt_validade()
   {
         $conteudo_x = $this->public_pessoa_fisica_cnh_dt_validade;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->public_pessoa_fisica_cnh_dt_validade, "YYYY-MM-DD");
             $this->public_pessoa_fisica_cnh_dt_validade = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->public_pessoa_fisica_cnh_dt_validade))
         {
             $this->public_pessoa_fisica_cnh_dt_validade = sc_convert_encoding($this->public_pessoa_fisica_cnh_dt_validade, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_cnh_dt_validade = str_replace('<', '&lt;', $this->public_pessoa_fisica_cnh_dt_validade);
         $this->public_pessoa_fisica_cnh_dt_validade = str_replace('>', '&gt;', $this->public_pessoa_fisica_cnh_dt_validade);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_cnh_dt_validade . "</td>\r\n";
   }
   //----- public_pessoa_fisica_cnh_categoria
   function NM_export_public_pessoa_fisica_cnh_categoria()
   {
         $this->public_pessoa_fisica_cnh_categoria = html_entity_decode($this->public_pessoa_fisica_cnh_categoria, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->public_pessoa_fisica_cnh_categoria = strip_tags($this->public_pessoa_fisica_cnh_categoria);
         if (!NM_is_utf8($this->public_pessoa_fisica_cnh_categoria))
         {
             $this->public_pessoa_fisica_cnh_categoria = sc_convert_encoding($this->public_pessoa_fisica_cnh_categoria, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_cnh_categoria = str_replace('<', '&lt;', $this->public_pessoa_fisica_cnh_categoria);
         $this->public_pessoa_fisica_cnh_categoria = str_replace('>', '&gt;', $this->public_pessoa_fisica_cnh_categoria);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_cnh_categoria . "</td>\r\n";
   }
   //----- obs
   function NM_export_obs()
   {
         $this->obs = html_entity_decode($this->obs, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->obs = strip_tags($this->obs);
         if (!NM_is_utf8($this->obs))
         {
             $this->obs = sc_convert_encoding($this->obs, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->obs = str_replace('<', '&lt;', $this->obs);
         $this->obs = str_replace('>', '&gt;', $this->obs);
         $this->Texto_tag .= "<td>" . $this->obs . "</td>\r\n";
   }
   //----- public_pessoa_fisica_id_tipo_vinculo
   function NM_export_public_pessoa_fisica_id_tipo_vinculo()
   {
         nmgp_Form_Num_Val($this->public_pessoa_fisica_id_tipo_vinculo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->public_pessoa_fisica_id_tipo_vinculo))
         {
             $this->public_pessoa_fisica_id_tipo_vinculo = sc_convert_encoding($this->public_pessoa_fisica_id_tipo_vinculo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->public_pessoa_fisica_id_tipo_vinculo = str_replace('<', '&lt;', $this->public_pessoa_fisica_id_tipo_vinculo);
         $this->public_pessoa_fisica_id_tipo_vinculo = str_replace('>', '&gt;', $this->public_pessoa_fisica_id_tipo_vinculo);
         $this->Texto_tag .= "<td>" . $this->public_pessoa_fisica_id_tipo_vinculo . "</td>\r\n";
   }
   //----- id_ativo
   function NM_export_id_ativo()
   {
         nmgp_Form_Num_Val($this->id_ativo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->id_ativo))
         {
             $this->id_ativo = sc_convert_encoding($this->id_ativo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->id_ativo = str_replace('<', '&lt;', $this->id_ativo);
         $this->id_ativo = str_replace('>', '&gt;', $this->id_ativo);
         $this->Texto_tag .= "<td>" . $this->id_ativo . "</td>\r\n";
   }
   //----- dt_cadastro
   function NM_export_dt_cadastro()
   {
         if (substr($this->dt_cadastro, 10, 1) == "-") 
         { 
             $this->dt_cadastro = substr($this->dt_cadastro, 0, 10) . " " . substr($this->dt_cadastro, 11);
         } 
         if (substr($this->dt_cadastro, 13, 1) == ".") 
         { 
            $this->dt_cadastro = substr($this->dt_cadastro, 0, 13) . ":" . substr($this->dt_cadastro, 14, 2) . ":" . substr($this->dt_cadastro, 17);
         } 
         $conteudo_x = $this->dt_cadastro;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->dt_cadastro, "YYYY-MM-DD HH:II:SS");
             $this->dt_cadastro = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->dt_cadastro))
         {
             $this->dt_cadastro = sc_convert_encoding($this->dt_cadastro, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->dt_cadastro = str_replace('<', '&lt;', $this->dt_cadastro);
         $this->dt_cadastro = str_replace('>', '&gt;', $this->dt_cadastro);
         $this->Texto_tag .= "<td>" . $this->dt_cadastro . "</td>\r\n";
   }
   //----- dt_atualiza
   function NM_export_dt_atualiza()
   {
         if (substr($this->dt_atualiza, 10, 1) == "-") 
         { 
             $this->dt_atualiza = substr($this->dt_atualiza, 0, 10) . " " . substr($this->dt_atualiza, 11);
         } 
         if (substr($this->dt_atualiza, 13, 1) == ".") 
         { 
            $this->dt_atualiza = substr($this->dt_atualiza, 0, 13) . ":" . substr($this->dt_atualiza, 14, 2) . ":" . substr($this->dt_atualiza, 17);
         } 
         $conteudo_x = $this->dt_atualiza;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->dt_atualiza, "YYYY-MM-DD HH:II:SS");
             $this->dt_atualiza = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
         if (!NM_is_utf8($this->dt_atualiza))
         {
             $this->dt_atualiza = sc_convert_encoding($this->dt_atualiza, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->dt_atualiza = str_replace('<', '&lt;', $this->dt_atualiza);
         $this->dt_atualiza = str_replace('>', '&gt;', $this->dt_atualiza);
         $this->Texto_tag .= "<td>" . $this->dt_atualiza . "</td>\r\n";
   }
   //----- usu_cadastro
   function NM_export_usu_cadastro()
   {
         $this->usu_cadastro = html_entity_decode($this->usu_cadastro, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->usu_cadastro = strip_tags($this->usu_cadastro);
         if (!NM_is_utf8($this->usu_cadastro))
         {
             $this->usu_cadastro = sc_convert_encoding($this->usu_cadastro, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->usu_cadastro = str_replace('<', '&lt;', $this->usu_cadastro);
         $this->usu_cadastro = str_replace('>', '&gt;', $this->usu_cadastro);
         $this->Texto_tag .= "<td>" . $this->usu_cadastro . "</td>\r\n";
   }
   //----- usu_atualiza
   function NM_export_usu_atualiza()
   {
         $this->usu_atualiza = html_entity_decode($this->usu_atualiza, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->usu_atualiza = strip_tags($this->usu_atualiza);
         if (!NM_is_utf8($this->usu_atualiza))
         {
             $this->usu_atualiza = sc_convert_encoding($this->usu_atualiza, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->usu_atualiza = str_replace('<', '&lt;', $this->usu_atualiza);
         $this->usu_atualiza = str_replace('>', '&gt;', $this->usu_atualiza);
         $this->Texto_tag .= "<td>" . $this->usu_atualiza . "</td>\r\n";
   }

   //----- 
   function grava_arquivo_rtf()
   {
      global $nm_lang, $doc_wrap;
      $rtf_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      require_once($this->Ini->path_third      . "/rtf_new/document_generator/cl_xml2driver.php"); 
      $text_ok  =  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n"; 
      $text_ok .=  "<DOC config_file=\"" . $this->Ini->path_third . "/rtf_new/doc_config.inc\" >\r\n"; 
      $text_ok .=  $this->Texto_tag; 
      $text_ok .=  "</DOC>\r\n"; 
      $xml = new nDOCGEN($text_ok,"RTF"); 
      fwrite($rtf_f, $xml->get_result_file());
      fclose($rtf_f);
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
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_fisica'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - Pessoa Física :: RTF</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
  <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
  <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
  <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
  <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
  <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">RTF</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_public_pessoa_fisica_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_public_pessoa_fisica"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="volta_grid"> 
</FORM> 
</BODY>
</HTML>
<?php
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
}

?>
