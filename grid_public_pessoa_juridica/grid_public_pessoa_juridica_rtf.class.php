<?php

class grid_public_pessoa_juridica_rtf
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
   function grid_public_pessoa_juridica_rtf()
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
      $this->Arquivo   .= "_grid_public_pessoa_juridica";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_public_pessoa_juridica.rtf";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_juridica']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_juridica']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_juridica']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->id_tipo_vinculo = $Busca_temp['id_tipo_vinculo']; 
          $tmp_pos = strpos($this->id_tipo_vinculo, "##@@");
          if ($tmp_pos !== false)
          {
              $this->id_tipo_vinculo = substr($this->id_tipo_vinculo, 0, $tmp_pos);
          }
          $this->id_tipo_vinculo_2 = $Busca_temp['id_tipo_vinculo_input_2']; 
          $this->id_pessoa_juridica = $Busca_temp['id_pessoa_juridica']; 
          $tmp_pos = strpos($this->id_pessoa_juridica, "##@@");
          if ($tmp_pos !== false)
          {
              $this->id_pessoa_juridica = substr($this->id_pessoa_juridica, 0, $tmp_pos);
          }
          $this->id_pessoa_juridica_2 = $Busca_temp['id_pessoa_juridica_input_2']; 
          $this->razao_social = $Busca_temp['razao_social']; 
          $tmp_pos = strpos($this->razao_social, "##@@");
          if ($tmp_pos !== false)
          {
              $this->razao_social = substr($this->razao_social, 0, $tmp_pos);
          }
          $this->fantasia = $Busca_temp['fantasia']; 
          $tmp_pos = strpos($this->fantasia, "##@@");
          if ($tmp_pos !== false)
          {
              $this->fantasia = substr($this->fantasia, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT id_pessoa_juridica, razao_social, fantasia, id_tipo_vinculo, endereco, cnpj, ie, im, ds_contato_responsavel, email, fone_fax, id_ativo, str_replace (convert(char(10),dt_cadastro,102), '.', '-') + ' ' + convert(char(8),dt_cadastro,20), str_replace (convert(char(10),dt_atualiza,102), '.', '-') + ' ' + convert(char(8),dt_atualiza,20), usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT id_pessoa_juridica, razao_social, fantasia, id_tipo_vinculo, endereco, cnpj, ie, im, ds_contato_responsavel, email, fone_fax, id_ativo, dt_cadastro, dt_atualiza, usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT id_pessoa_juridica, razao_social, fantasia, id_tipo_vinculo, endereco, cnpj, ie, im, ds_contato_responsavel, email, fone_fax, id_ativo, convert(char(23),dt_cadastro,121), convert(char(23),dt_atualiza,121), usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT id_pessoa_juridica, razao_social, fantasia, id_tipo_vinculo, endereco, cnpj, ie, im, ds_contato_responsavel, email, fone_fax, id_ativo, dt_cadastro, dt_atualiza, usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT id_pessoa_juridica, razao_social, fantasia, id_tipo_vinculo, endereco, cnpj, ie, im, ds_contato_responsavel, email, fone_fax, id_ativo, EXTEND(dt_cadastro, YEAR TO FRACTION), EXTEND(dt_atualiza, YEAR TO FRACTION), usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT id_pessoa_juridica, razao_social, fantasia, id_tipo_vinculo, endereco, cnpj, ie, im, ds_contato_responsavel, email, fone_fax, id_ativo, dt_cadastro, dt_atualiza, usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['order_grid'];
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
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['id_pessoa_juridica'])) ? $this->New_label['id_pessoa_juridica'] : "ID Pessoa Juridica"; 
          if ($Cada_col == "id_pessoa_juridica" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['razao_social'])) ? $this->New_label['razao_social'] : "Razao Social"; 
          if ($Cada_col == "razao_social" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['fantasia'])) ? $this->New_label['fantasia'] : "Fantasia"; 
          if ($Cada_col == "fantasia" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['id_tipo_vinculo'])) ? $this->New_label['id_tipo_vinculo'] : "ID Tipo Vinculo"; 
          if ($Cada_col == "id_tipo_vinculo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['endereco'])) ? $this->New_label['endereco'] : "Endereço"; 
          if ($Cada_col == "endereco" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['cnpj'])) ? $this->New_label['cnpj'] : "CNPJ"; 
          if ($Cada_col == "cnpj" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['ie'])) ? $this->New_label['ie'] : "IE"; 
          if ($Cada_col == "ie" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['im'])) ? $this->New_label['im'] : "IM"; 
          if ($Cada_col == "im" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['ds_contato_responsavel'])) ? $this->New_label['ds_contato_responsavel'] : "Contato Responsavel"; 
          if ($Cada_col == "ds_contato_responsavel" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['email'])) ? $this->New_label['email'] : "Email"; 
          if ($Cada_col == "email" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['fone_fax'])) ? $this->New_label['fone_fax'] : "Fone / Fax"; 
          if ($Cada_col == "fone_fax" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['id_ativo'])) ? $this->New_label['id_ativo'] : "Id Ativo"; 
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
         $this->id_pessoa_juridica = $rs->fields[0] ;  
         $this->id_pessoa_juridica = (string)$this->id_pessoa_juridica;
         $this->razao_social = $rs->fields[1] ;  
         $this->fantasia = $rs->fields[2] ;  
         $this->id_tipo_vinculo = $rs->fields[3] ;  
         $this->id_tipo_vinculo = (string)$this->id_tipo_vinculo;
         $this->endereco = $rs->fields[4] ;  
         $this->cnpj = $rs->fields[5] ;  
         $this->ie = $rs->fields[6] ;  
         $this->im = $rs->fields[7] ;  
         $this->ds_contato_responsavel = $rs->fields[8] ;  
         $this->email = $rs->fields[9] ;  
         $this->fone_fax = $rs->fields[10] ;  
         $this->id_ativo = $rs->fields[11] ;  
         $this->id_ativo = (string)$this->id_ativo;
         $this->dt_cadastro = $rs->fields[12] ;  
         $this->dt_atualiza = $rs->fields[13] ;  
         $this->usu_cadastro = $rs->fields[14] ;  
         $this->usu_atualiza = $rs->fields[15] ;  
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['field_order'] as $Cada_col)
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
   //----- id_pessoa_juridica
   function NM_export_id_pessoa_juridica()
   {
         nmgp_Form_Num_Val($this->id_pessoa_juridica, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->id_pessoa_juridica))
         {
             $this->id_pessoa_juridica = sc_convert_encoding($this->id_pessoa_juridica, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->id_pessoa_juridica = str_replace('<', '&lt;', $this->id_pessoa_juridica);
         $this->id_pessoa_juridica = str_replace('>', '&gt;', $this->id_pessoa_juridica);
         $this->Texto_tag .= "<td>" . $this->id_pessoa_juridica . "</td>\r\n";
   }
   //----- razao_social
   function NM_export_razao_social()
   {
         $this->razao_social = html_entity_decode($this->razao_social, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->razao_social = strip_tags($this->razao_social);
         if (!NM_is_utf8($this->razao_social))
         {
             $this->razao_social = sc_convert_encoding($this->razao_social, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->razao_social = str_replace('<', '&lt;', $this->razao_social);
         $this->razao_social = str_replace('>', '&gt;', $this->razao_social);
         $this->Texto_tag .= "<td>" . $this->razao_social . "</td>\r\n";
   }
   //----- fantasia
   function NM_export_fantasia()
   {
         $this->fantasia = html_entity_decode($this->fantasia, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->fantasia = strip_tags($this->fantasia);
         if (!NM_is_utf8($this->fantasia))
         {
             $this->fantasia = sc_convert_encoding($this->fantasia, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->fantasia = str_replace('<', '&lt;', $this->fantasia);
         $this->fantasia = str_replace('>', '&gt;', $this->fantasia);
         $this->Texto_tag .= "<td>" . $this->fantasia . "</td>\r\n";
   }
   //----- id_tipo_vinculo
   function NM_export_id_tipo_vinculo()
   {
         nmgp_Form_Num_Val($this->id_tipo_vinculo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->id_tipo_vinculo))
         {
             $this->id_tipo_vinculo = sc_convert_encoding($this->id_tipo_vinculo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->id_tipo_vinculo = str_replace('<', '&lt;', $this->id_tipo_vinculo);
         $this->id_tipo_vinculo = str_replace('>', '&gt;', $this->id_tipo_vinculo);
         $this->Texto_tag .= "<td>" . $this->id_tipo_vinculo . "</td>\r\n";
   }
   //----- endereco
   function NM_export_endereco()
   {
         $this->endereco = html_entity_decode($this->endereco, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->endereco = strip_tags($this->endereco);
         if (!NM_is_utf8($this->endereco))
         {
             $this->endereco = sc_convert_encoding($this->endereco, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->endereco = str_replace('<', '&lt;', $this->endereco);
         $this->endereco = str_replace('>', '&gt;', $this->endereco);
         $this->Texto_tag .= "<td>" . $this->endereco . "</td>\r\n";
   }
   //----- cnpj
   function NM_export_cnpj()
   {
         $this->cnpj = html_entity_decode($this->cnpj, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cnpj = strip_tags($this->cnpj);
         if (!NM_is_utf8($this->cnpj))
         {
             $this->cnpj = sc_convert_encoding($this->cnpj, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->cnpj = str_replace('<', '&lt;', $this->cnpj);
         $this->cnpj = str_replace('>', '&gt;', $this->cnpj);
         $this->Texto_tag .= "<td>" . $this->cnpj . "</td>\r\n";
   }
   //----- ie
   function NM_export_ie()
   {
         $this->ie = html_entity_decode($this->ie, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->ie = strip_tags($this->ie);
         if (!NM_is_utf8($this->ie))
         {
             $this->ie = sc_convert_encoding($this->ie, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->ie = str_replace('<', '&lt;', $this->ie);
         $this->ie = str_replace('>', '&gt;', $this->ie);
         $this->Texto_tag .= "<td>" . $this->ie . "</td>\r\n";
   }
   //----- im
   function NM_export_im()
   {
         $this->im = html_entity_decode($this->im, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->im = strip_tags($this->im);
         if (!NM_is_utf8($this->im))
         {
             $this->im = sc_convert_encoding($this->im, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->im = str_replace('<', '&lt;', $this->im);
         $this->im = str_replace('>', '&gt;', $this->im);
         $this->Texto_tag .= "<td>" . $this->im . "</td>\r\n";
   }
   //----- ds_contato_responsavel
   function NM_export_ds_contato_responsavel()
   {
         $this->ds_contato_responsavel = html_entity_decode($this->ds_contato_responsavel, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->ds_contato_responsavel = strip_tags($this->ds_contato_responsavel);
         if (!NM_is_utf8($this->ds_contato_responsavel))
         {
             $this->ds_contato_responsavel = sc_convert_encoding($this->ds_contato_responsavel, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->ds_contato_responsavel = str_replace('<', '&lt;', $this->ds_contato_responsavel);
         $this->ds_contato_responsavel = str_replace('>', '&gt;', $this->ds_contato_responsavel);
         $this->Texto_tag .= "<td>" . $this->ds_contato_responsavel . "</td>\r\n";
   }
   //----- email
   function NM_export_email()
   {
         $this->email = html_entity_decode($this->email, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->email = strip_tags($this->email);
         if (!NM_is_utf8($this->email))
         {
             $this->email = sc_convert_encoding($this->email, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->email = str_replace('<', '&lt;', $this->email);
         $this->email = str_replace('>', '&gt;', $this->email);
         $this->Texto_tag .= "<td>" . $this->email . "</td>\r\n";
   }
   //----- fone_fax
   function NM_export_fone_fax()
   {
         $this->fone_fax = html_entity_decode($this->fone_fax, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->fone_fax = strip_tags($this->fone_fax);
         if (!NM_is_utf8($this->fone_fax))
         {
             $this->fone_fax = sc_convert_encoding($this->fone_fax, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->fone_fax = str_replace('<', '&lt;', $this->fone_fax);
         $this->fone_fax = str_replace('>', '&gt;', $this->fone_fax);
         $this->Texto_tag .= "<td>" . $this->fone_fax . "</td>\r\n";
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pessoa_juridica'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - Pessoa Juridica :: RTF</TITLE>
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
<form name="Fdown" method="get" action="grid_public_pessoa_juridica_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_public_pessoa_juridica"> 
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
