<?php

class grid_public_pais_rtf
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
   function grid_public_pais_rtf()
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
      $this->Arquivo   .= "_grid_public_pais";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_public_pais.rtf";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pais']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pais']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pais']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->pais_iso_alpha3_cod = $Busca_temp['pais_iso_alpha3_cod']; 
          $tmp_pos = strpos($this->pais_iso_alpha3_cod, "##@@");
          if ($tmp_pos !== false)
          {
              $this->pais_iso_alpha3_cod = substr($this->pais_iso_alpha3_cod, 0, $tmp_pos);
          }
          $this->id_pais = $Busca_temp['id_pais']; 
          $tmp_pos = strpos($this->id_pais, "##@@");
          if ($tmp_pos !== false)
          {
              $this->id_pais = substr($this->id_pais, 0, $tmp_pos);
          }
          $this->id_pais_2 = $Busca_temp['id_pais_input_2']; 
          $this->pais_ibge_cod = $Busca_temp['pais_ibge_cod']; 
          $tmp_pos = strpos($this->pais_ibge_cod, "##@@");
          if ($tmp_pos !== false)
          {
              $this->pais_ibge_cod = substr($this->pais_ibge_cod, 0, $tmp_pos);
          }
          $this->pais_nm_pais_ter_ptb = $Busca_temp['pais_nm_pais_ter_ptb']; 
          $tmp_pos = strpos($this->pais_nm_pais_ter_ptb, "##@@");
          if ($tmp_pos !== false)
          {
              $this->pais_nm_pais_ter_ptb = substr($this->pais_nm_pais_ter_ptb, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT id_pais, pais_ibge_cod, pais_nm_pais_ter_ptb, pais_iso_alpha3_cod, str_replace (convert(char(10),dt_cadastro,102), '.', '-') + ' ' + convert(char(8),dt_cadastro,20), usu_cadastro from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT id_pais, pais_ibge_cod, pais_nm_pais_ter_ptb, pais_iso_alpha3_cod, dt_cadastro, usu_cadastro from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT id_pais, pais_ibge_cod, pais_nm_pais_ter_ptb, pais_iso_alpha3_cod, convert(char(23),dt_cadastro,121), usu_cadastro from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT id_pais, pais_ibge_cod, pais_nm_pais_ter_ptb, pais_iso_alpha3_cod, dt_cadastro, usu_cadastro from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT id_pais, pais_ibge_cod, pais_nm_pais_ter_ptb, pais_iso_alpha3_cod, EXTEND(dt_cadastro, YEAR TO FRACTION), usu_cadastro from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT id_pais, pais_ibge_cod, pais_nm_pais_ter_ptb, pais_iso_alpha3_cod, dt_cadastro, usu_cadastro from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['order_grid'];
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
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['id_pais'])) ? $this->New_label['id_pais'] : "Id Pais"; 
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
          $SC_Label = (isset($this->New_label['pais_ibge_cod'])) ? $this->New_label['pais_ibge_cod'] : "Pais Ibge Cod"; 
          if ($Cada_col == "pais_ibge_cod" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pais_nm_pais_ter_ptb'])) ? $this->New_label['pais_nm_pais_ter_ptb'] : "Pais Nm Pais Ter Ptb"; 
          if ($Cada_col == "pais_nm_pais_ter_ptb" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pais_iso_alpha3_cod'])) ? $this->New_label['pais_iso_alpha3_cod'] : "Pais Iso Alpha 3 Cod"; 
          if ($Cada_col == "pais_iso_alpha3_cod" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
          $SC_Label = (isset($this->New_label['usu_cadastro'])) ? $this->New_label['usu_cadastro'] : "Usu Cadastro"; 
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
      } 
      $this->Texto_tag .= "</tr>\r\n";
      while (!$rs->EOF)
      {
         $this->Texto_tag .= "<tr>\r\n";
         $this->id_pais = $rs->fields[0] ;  
         $this->id_pais = (string)$this->id_pais;
         $this->pais_ibge_cod = $rs->fields[1] ;  
         $this->pais_nm_pais_ter_ptb = $rs->fields[2] ;  
         $this->pais_iso_alpha3_cod = $rs->fields[3] ;  
         $this->dt_cadastro = $rs->fields[4] ;  
         $this->usu_cadastro = $rs->fields[5] ;  
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['field_order'] as $Cada_col)
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
   //----- id_pais
   function NM_export_id_pais()
   {
         nmgp_Form_Num_Val($this->id_pais, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->id_pais))
         {
             $this->id_pais = sc_convert_encoding($this->id_pais, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->id_pais = str_replace('<', '&lt;', $this->id_pais);
         $this->id_pais = str_replace('>', '&gt;', $this->id_pais);
         $this->Texto_tag .= "<td>" . $this->id_pais . "</td>\r\n";
   }
   //----- pais_ibge_cod
   function NM_export_pais_ibge_cod()
   {
         $this->pais_ibge_cod = html_entity_decode($this->pais_ibge_cod, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->pais_ibge_cod = strip_tags($this->pais_ibge_cod);
         if (!NM_is_utf8($this->pais_ibge_cod))
         {
             $this->pais_ibge_cod = sc_convert_encoding($this->pais_ibge_cod, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->pais_ibge_cod = str_replace('<', '&lt;', $this->pais_ibge_cod);
         $this->pais_ibge_cod = str_replace('>', '&gt;', $this->pais_ibge_cod);
         $this->Texto_tag .= "<td>" . $this->pais_ibge_cod . "</td>\r\n";
   }
   //----- pais_nm_pais_ter_ptb
   function NM_export_pais_nm_pais_ter_ptb()
   {
         $this->pais_nm_pais_ter_ptb = html_entity_decode($this->pais_nm_pais_ter_ptb, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->pais_nm_pais_ter_ptb = strip_tags($this->pais_nm_pais_ter_ptb);
         if (!NM_is_utf8($this->pais_nm_pais_ter_ptb))
         {
             $this->pais_nm_pais_ter_ptb = sc_convert_encoding($this->pais_nm_pais_ter_ptb, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->pais_nm_pais_ter_ptb = str_replace('<', '&lt;', $this->pais_nm_pais_ter_ptb);
         $this->pais_nm_pais_ter_ptb = str_replace('>', '&gt;', $this->pais_nm_pais_ter_ptb);
         $this->Texto_tag .= "<td>" . $this->pais_nm_pais_ter_ptb . "</td>\r\n";
   }
   //----- pais_iso_alpha3_cod
   function NM_export_pais_iso_alpha3_cod()
   {
         $this->pais_iso_alpha3_cod = html_entity_decode($this->pais_iso_alpha3_cod, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->pais_iso_alpha3_cod = strip_tags($this->pais_iso_alpha3_cod);
         if (!NM_is_utf8($this->pais_iso_alpha3_cod))
         {
             $this->pais_iso_alpha3_cod = sc_convert_encoding($this->pais_iso_alpha3_cod, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->pais_iso_alpha3_cod = str_replace('<', '&lt;', $this->pais_iso_alpha3_cod);
         $this->pais_iso_alpha3_cod = str_replace('>', '&gt;', $this->pais_iso_alpha3_cod);
         $this->Texto_tag .= "<td>" . $this->pais_iso_alpha3_cod . "</td>\r\n";
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_public_pais'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - Pais :: RTF</TITLE>
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
<form name="Fdown" method="get" action="grid_public_pais_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_public_pais"> 
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
