<?php
//
class form_public_pessoa_fisica_mob_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'         => '',
                                'param'          => array(),
                                'autoComp'       => '',
                                'rsSize'         => '',
                                'msgDisplay'     => '',
                                'errList'        => array(),
                                'fldList'        => array(),
                                'focus'          => '',
                                'navStatus'      => array(),
                                'navSummary'     => array(),
                                'redir'          => array(),
                                'blockDisplay'   => array(),
                                'fieldDisplay'   => array(),
                                'fieldLabel'     => array(),
                                'readOnly'       => array(),
                                'btnVars'        => array(),
                                'ajaxAlert'      => '',
                                'ajaxMessage'    => '',
                                'ajaxJavascript' => array(),
                                'buttonDisplay'  => array(),
                                'calendarReload' => false,
                                'quickSearchRes' => false,
                                'displayMsg'     => false,
                                'displayMsgTxt'  => '',
                                'dyn_search'     => array(),
                                'empty_filter'   => '',
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $id_pessoa_fisica;
   var $nome;
   var $id_tipo_vinculo;
   var $endereco;
   var $endereco_comp;
   var $bairro;
   var $id_municipio;
   var $id_municipio_1;
   var $id_uf;
   var $id_uf_1;
   var $id_pais;
   var $id_pais_1;
   var $cep;
   var $endereco_cob;
   var $endereco_comp_cob;
   var $bairro_cob;
   var $id_municipio_cob;
   var $id_municipio_cob_1;
   var $id_uf_cob;
   var $id_uf_cob_1;
   var $id_pais_cob;
   var $id_pais_cob_1;
   var $cep_cob;
   var $dt_nasc;
   var $sexo;
   var $sexo_1;
   var $id_tipo_estado_civil;
   var $id_tipo_estado_civil_1;
   var $id_tipo_escolaridade;
   var $id_tipo_escolaridade_1;
   var $id_tipo_sanguineo;
   var $id_tipo_sanguineo_1;
   var $profissao;
   var $aposentado;
   var $aposentado_1;
   var $cpf;
   var $rg;
   var $rg_orgao_emissor;
   var $rg_uf_emissor;
   var $rg_uf_emissor_1;
   var $rg_dt_emissao;
   var $passaporte;
   var $passaporte_dt_emissao;
   var $passaporte_pais_origem;
   var $passaporte_pais_origem_1;
   var $nacionalidade;
   var $nacionalidade_1;
   var $naturalidade;
   var $cnh;
   var $cnh_dt_validade;
   var $cnh_categoria;
   var $obs;
   var $id_ativo;
   var $dt_cadastro;
   var $dt_cadastro_hora;
   var $dt_atualiza;
   var $dt_atualiza_hora;
   var $usu_cadastro;
   var $usu_atualiza;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['aposentado']))
          {
              $this->aposentado = $this->NM_ajax_info['param']['aposentado'];
          }
          if (isset($this->NM_ajax_info['param']['bairro']))
          {
              $this->bairro = $this->NM_ajax_info['param']['bairro'];
          }
          if (isset($this->NM_ajax_info['param']['bairro_cob']))
          {
              $this->bairro_cob = $this->NM_ajax_info['param']['bairro_cob'];
          }
          if (isset($this->NM_ajax_info['param']['cep']))
          {
              $this->cep = $this->NM_ajax_info['param']['cep'];
          }
          if (isset($this->NM_ajax_info['param']['cep_cob']))
          {
              $this->cep_cob = $this->NM_ajax_info['param']['cep_cob'];
          }
          if (isset($this->NM_ajax_info['param']['cnh']))
          {
              $this->cnh = $this->NM_ajax_info['param']['cnh'];
          }
          if (isset($this->NM_ajax_info['param']['cnh_categoria']))
          {
              $this->cnh_categoria = $this->NM_ajax_info['param']['cnh_categoria'];
          }
          if (isset($this->NM_ajax_info['param']['cnh_dt_validade']))
          {
              $this->cnh_dt_validade = $this->NM_ajax_info['param']['cnh_dt_validade'];
          }
          if (isset($this->NM_ajax_info['param']['cpf']))
          {
              $this->cpf = $this->NM_ajax_info['param']['cpf'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['dt_nasc']))
          {
              $this->dt_nasc = $this->NM_ajax_info['param']['dt_nasc'];
          }
          if (isset($this->NM_ajax_info['param']['endereco']))
          {
              $this->endereco = $this->NM_ajax_info['param']['endereco'];
          }
          if (isset($this->NM_ajax_info['param']['endereco_cob']))
          {
              $this->endereco_cob = $this->NM_ajax_info['param']['endereco_cob'];
          }
          if (isset($this->NM_ajax_info['param']['endereco_comp']))
          {
              $this->endereco_comp = $this->NM_ajax_info['param']['endereco_comp'];
          }
          if (isset($this->NM_ajax_info['param']['endereco_comp_cob']))
          {
              $this->endereco_comp_cob = $this->NM_ajax_info['param']['endereco_comp_cob'];
          }
          if (isset($this->NM_ajax_info['param']['id_ativo']))
          {
              $this->id_ativo = $this->NM_ajax_info['param']['id_ativo'];
          }
          if (isset($this->NM_ajax_info['param']['id_municipio']))
          {
              $this->id_municipio = $this->NM_ajax_info['param']['id_municipio'];
          }
          if (isset($this->NM_ajax_info['param']['id_municipio_cob']))
          {
              $this->id_municipio_cob = $this->NM_ajax_info['param']['id_municipio_cob'];
          }
          if (isset($this->NM_ajax_info['param']['id_pais']))
          {
              $this->id_pais = $this->NM_ajax_info['param']['id_pais'];
          }
          if (isset($this->NM_ajax_info['param']['id_pais_cob']))
          {
              $this->id_pais_cob = $this->NM_ajax_info['param']['id_pais_cob'];
          }
          if (isset($this->NM_ajax_info['param']['id_pessoa_fisica']))
          {
              $this->id_pessoa_fisica = $this->NM_ajax_info['param']['id_pessoa_fisica'];
          }
          if (isset($this->NM_ajax_info['param']['id_tipo_escolaridade']))
          {
              $this->id_tipo_escolaridade = $this->NM_ajax_info['param']['id_tipo_escolaridade'];
          }
          if (isset($this->NM_ajax_info['param']['id_tipo_estado_civil']))
          {
              $this->id_tipo_estado_civil = $this->NM_ajax_info['param']['id_tipo_estado_civil'];
          }
          if (isset($this->NM_ajax_info['param']['id_tipo_sanguineo']))
          {
              $this->id_tipo_sanguineo = $this->NM_ajax_info['param']['id_tipo_sanguineo'];
          }
          if (isset($this->NM_ajax_info['param']['id_tipo_vinculo']))
          {
              $this->id_tipo_vinculo = $this->NM_ajax_info['param']['id_tipo_vinculo'];
          }
          if (isset($this->NM_ajax_info['param']['id_uf']))
          {
              $this->id_uf = $this->NM_ajax_info['param']['id_uf'];
          }
          if (isset($this->NM_ajax_info['param']['id_uf_cob']))
          {
              $this->id_uf_cob = $this->NM_ajax_info['param']['id_uf_cob'];
          }
          if (isset($this->NM_ajax_info['param']['nacionalidade']))
          {
              $this->nacionalidade = $this->NM_ajax_info['param']['nacionalidade'];
          }
          if (isset($this->NM_ajax_info['param']['naturalidade']))
          {
              $this->naturalidade = $this->NM_ajax_info['param']['naturalidade'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nome']))
          {
              $this->nome = $this->NM_ajax_info['param']['nome'];
          }
          if (isset($this->NM_ajax_info['param']['obs']))
          {
              $this->obs = $this->NM_ajax_info['param']['obs'];
          }
          if (isset($this->NM_ajax_info['param']['passaporte']))
          {
              $this->passaporte = $this->NM_ajax_info['param']['passaporte'];
          }
          if (isset($this->NM_ajax_info['param']['passaporte_dt_emissao']))
          {
              $this->passaporte_dt_emissao = $this->NM_ajax_info['param']['passaporte_dt_emissao'];
          }
          if (isset($this->NM_ajax_info['param']['passaporte_pais_origem']))
          {
              $this->passaporte_pais_origem = $this->NM_ajax_info['param']['passaporte_pais_origem'];
          }
          if (isset($this->NM_ajax_info['param']['profissao']))
          {
              $this->profissao = $this->NM_ajax_info['param']['profissao'];
          }
          if (isset($this->NM_ajax_info['param']['rg']))
          {
              $this->rg = $this->NM_ajax_info['param']['rg'];
          }
          if (isset($this->NM_ajax_info['param']['rg_dt_emissao']))
          {
              $this->rg_dt_emissao = $this->NM_ajax_info['param']['rg_dt_emissao'];
          }
          if (isset($this->NM_ajax_info['param']['rg_orgao_emissor']))
          {
              $this->rg_orgao_emissor = $this->NM_ajax_info['param']['rg_orgao_emissor'];
          }
          if (isset($this->NM_ajax_info['param']['rg_uf_emissor']))
          {
              $this->rg_uf_emissor = $this->NM_ajax_info['param']['rg_uf_emissor'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['sexo']))
          {
              $this->sexo = $this->NM_ajax_info['param']['sexo'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      if (isset($_POST['nmgp_opcao']) && ($_POST['nmgp_opcao'] == "ajax_add_dyn_search" || $_POST['nmgp_opcao'] == "ajax_ch_bi_dyn_search"))
      {
          ob_start();
      }
      if (isset($_GET['nmgp_opcao']) && $_GET['nmgp_opcao'] == "ajax_aut_comp_dyn_search")
      {
          ob_start();
      }
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['nm_run_menu'] = 1;
      } 
      if (isset($_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_public_pessoa_fisica_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $this->$cadapar[0] = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $this->$cadapar[0] = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_public_pessoa_fisica_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_public_pessoa_fisica_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_public_pessoa_fisica_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_public_pessoa_fisica_mob'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_public_pessoa_fisica_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_public_pessoa_fisica_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_public_pessoa_fisica_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_public_pessoa_fisica_mob']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - Pessoa Física";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_public_pessoa_fisica_mob")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form = (isset($_SESSION['scriptcase']['str_button_all'])) ? $_SESSION['scriptcase']['str_button_all'] : "VERDE_MODERNO";
      $_SESSION['scriptcase']['str_button_all'] = $this->Ini->Str_btn_form;
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);

      if (isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "ajax_add_dyn_search")
      {
          $Temp = ob_get_clean();
          ob_start();
          $NM_func_dyn_add = "dynamic_search_" . $_POST['parm'];
          $Lin_dyn_add = $this->$NM_func_dyn_add($_POST['seq'], 'S');
          $this->Arr_result = array();
          $Temp = ob_get_clean();
          if ($Temp !== false && trim($Temp) != "")
          {
              $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
          }
          $this->Arr_result['dyn_add'][] = NM_charset_to_utf8($Lin_dyn_add);
          $oJson = new Services_JSON();
          echo $oJson->encode($this->Arr_result);
          exit;
      }
      if (isset($_GET['nmgp_opcao']) && $_GET['nmgp_opcao'] == "ajax_aut_comp_dyn_search")
      {
          $Temp = ob_get_clean();
          ob_start();
          $NM_func_aut_comp = "lookup_ajax_" . $_GET['field'];
          $parm = ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($_GET['q'])) ? sc_convert_encoding($_GET['q'], $_SESSION['scriptcase']['charset'], "UTF-8") : $_GET['q'];
          $nmgp_def_dados = $this->$NM_func_aut_comp($parm);
          ob_end_clean();
          $count_aut_comp = 0;
          $resp_aut_comp  = array();
          foreach ($nmgp_def_dados as $Ind => $Lista)
          {
             if (is_array($Lista))
             {
                 foreach ($Lista as $Cod => $Valor)
                 {
                     if ($_GET['cod_desc'] == "S")
                     {
                         $Valor = $Cod . " - " . $Valor;
                     }
                     $resp_aut_comp[] = array('label' => $Valor , 'value' => $Cod);
                     $count_aut_comp++;
                 }
             }
             if ($count_aut_comp == $_GET['max_itens'])
             {
                 break;
             }
          }
          $oJson = new Services_JSON();
          echo $oJson->encode($resp_aut_comp);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dyn_search_aut_comp']);
          exit;
      }

      $this->arr_buttons['group_group_2']= array(
          'value'            => "" . $this->Ini->Nm_lang['lang_btns_options'] . "",
          'hint'             => "" . $this->Ini->Nm_lang['lang_btns_options'] . "",
          'type'             => "button",
          'display'          => "text_img",
          'display_position' => "text_right",
          'image'            => "scriptcase__NM__gear.png",
          'style'            => "default",
      );


      $_SESSION['scriptcase']['error_icon']['form_public_pessoa_fisica_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_public_pessoa_fisica_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['dynsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "on";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_public_pessoa_fisica_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['insert'];
          $this->nmgp_botoes['copy']   = $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_form'];
          if (!isset($this->dt_cadastro)){$this->dt_cadastro = $this->nmgp_dados_form['dt_cadastro'];} 
          if (!isset($this->dt_atualiza)){$this->dt_atualiza = $this->nmgp_dados_form['dt_atualiza'];} 
          if (!isset($this->usu_cadastro)){$this->usu_cadastro = $this->nmgp_dados_form['usu_cadastro'];} 
          if (!isset($this->usu_atualiza)){$this->usu_atualiza = $this->nmgp_dados_form['usu_atualiza'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_public_pessoa_fisica_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_public_pessoa_fisica/form_public_pessoa_fisica_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_public_pessoa_fisica_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_public_pessoa_fisica_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_public_pessoa_fisica_mob_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_public_pessoa_fisica/form_public_pessoa_fisica_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_public_pessoa_fisica_mob_erro.class.php"); 
      }
      $this->Erro      = new form_public_pessoa_fisica_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($this->nmgp_opcao == "dyn_search" || $this->nmgp_opcao == "dyn_search_clear")  
      {
          $this->proc_fast_search = true;
          if ($this->nmgp_opcao == "dyn_search_clear")  
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter']);
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total']);
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['cond_pesq']);
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dyn_search']);
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal'])) 
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal'];
              }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter'])
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter']);
                  $this->NM_ajax_info['empty_filter'] = 'ok';
                  form_public_pessoa_fisica_mob_pack_ajax_response();
                  exit;
              }
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dyn_search_clear'] = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dyn_refresh'] = array();
              $this->html_dynamic_search();
          } 
          else
          {
              $this->SC_proc_dyn_search($this->nmgp_arg_dyn_search);
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao']))
         { 
             if ($this->id_pessoa_fisica != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_public_pessoa_fisica_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
      if (isset($this->id_pessoa_fisica)) { $this->nm_limpa_alfa($this->id_pessoa_fisica); }
      if (isset($this->nome)) { $this->nm_limpa_alfa($this->nome); }
      if (isset($this->id_tipo_vinculo)) { $this->nm_limpa_alfa($this->id_tipo_vinculo); }
      if (isset($this->endereco)) { $this->nm_limpa_alfa($this->endereco); }
      if (isset($this->endereco_comp)) { $this->nm_limpa_alfa($this->endereco_comp); }
      if (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
      if (isset($this->id_municipio)) { $this->nm_limpa_alfa($this->id_municipio); }
      if (isset($this->id_uf)) { $this->nm_limpa_alfa($this->id_uf); }
      if (isset($this->id_pais)) { $this->nm_limpa_alfa($this->id_pais); }
      if (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
      if (isset($this->endereco_cob)) { $this->nm_limpa_alfa($this->endereco_cob); }
      if (isset($this->endereco_comp_cob)) { $this->nm_limpa_alfa($this->endereco_comp_cob); }
      if (isset($this->bairro_cob)) { $this->nm_limpa_alfa($this->bairro_cob); }
      if (isset($this->id_municipio_cob)) { $this->nm_limpa_alfa($this->id_municipio_cob); }
      if (isset($this->id_uf_cob)) { $this->nm_limpa_alfa($this->id_uf_cob); }
      if (isset($this->id_pais_cob)) { $this->nm_limpa_alfa($this->id_pais_cob); }
      if (isset($this->cep_cob)) { $this->nm_limpa_alfa($this->cep_cob); }
      if (isset($this->sexo)) { $this->nm_limpa_alfa($this->sexo); }
      if (isset($this->id_tipo_estado_civil)) { $this->nm_limpa_alfa($this->id_tipo_estado_civil); }
      if (isset($this->id_tipo_escolaridade)) { $this->nm_limpa_alfa($this->id_tipo_escolaridade); }
      if (isset($this->id_tipo_sanguineo)) { $this->nm_limpa_alfa($this->id_tipo_sanguineo); }
      if (isset($this->profissao)) { $this->nm_limpa_alfa($this->profissao); }
      if (isset($this->aposentado)) { $this->nm_limpa_alfa($this->aposentado); }
      if (isset($this->cpf)) { $this->nm_limpa_alfa($this->cpf); }
      if (isset($this->rg)) { $this->nm_limpa_alfa($this->rg); }
      if (isset($this->rg_orgao_emissor)) { $this->nm_limpa_alfa($this->rg_orgao_emissor); }
      if (isset($this->rg_uf_emissor)) { $this->nm_limpa_alfa($this->rg_uf_emissor); }
      if (isset($this->passaporte)) { $this->nm_limpa_alfa($this->passaporte); }
      if (isset($this->passaporte_pais_origem)) { $this->nm_limpa_alfa($this->passaporte_pais_origem); }
      if (isset($this->nacionalidade)) { $this->nm_limpa_alfa($this->nacionalidade); }
      if (isset($this->naturalidade)) { $this->nm_limpa_alfa($this->naturalidade); }
      if (isset($this->cnh)) { $this->nm_limpa_alfa($this->cnh); }
      if (isset($this->cnh_categoria)) { $this->nm_limpa_alfa($this->cnh_categoria); }
      if (isset($this->obs)) { $this->nm_limpa_alfa($this->obs); }
      if (isset($this->id_ativo)) { $this->nm_limpa_alfa($this->id_ativo); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- id_pessoa_fisica
      $this->field_config['id_pessoa_fisica']               = array();
      $this->field_config['id_pessoa_fisica']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id_pessoa_fisica']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id_pessoa_fisica']['symbol_dec'] = '';
      $this->field_config['id_pessoa_fisica']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id_pessoa_fisica']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- dt_nasc
      $this->field_config['dt_nasc']                 = array();
      $this->field_config['dt_nasc']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['dt_nasc']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['dt_nasc']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'dt_nasc');
      //-- id_tipo_vinculo
      $this->field_config['id_tipo_vinculo']               = array();
      $this->field_config['id_tipo_vinculo']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id_tipo_vinculo']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id_tipo_vinculo']['symbol_dec'] = '';
      $this->field_config['id_tipo_vinculo']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id_tipo_vinculo']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- rg_dt_emissao
      $this->field_config['rg_dt_emissao']                 = array();
      $this->field_config['rg_dt_emissao']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['rg_dt_emissao']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['rg_dt_emissao']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'rg_dt_emissao');
      //-- passaporte_dt_emissao
      $this->field_config['passaporte_dt_emissao']                 = array();
      $this->field_config['passaporte_dt_emissao']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['passaporte_dt_emissao']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['passaporte_dt_emissao']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'passaporte_dt_emissao');
      //-- cnh_dt_validade
      $this->field_config['cnh_dt_validade']                 = array();
      $this->field_config['cnh_dt_validade']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['cnh_dt_validade']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['cnh_dt_validade']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'cnh_dt_validade');
      //-- dt_cadastro
      $this->field_config['dt_cadastro']                 = array();
      $this->field_config['dt_cadastro']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['dt_cadastro']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['dt_cadastro']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['dt_cadastro']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'dt_cadastro');
      //-- dt_atualiza
      $this->field_config['dt_atualiza']                 = array();
      $this->field_config['dt_atualiza']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['dt_atualiza']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['dt_atualiza']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['dt_atualiza']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'dt_atualiza');
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_id_pessoa_fisica' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_pessoa_fisica');
          }
          if ('validate_cpf' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cpf');
          }
          if ('validate_nome' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nome');
          }
          if ('validate_sexo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sexo');
          }
          if ('validate_dt_nasc' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dt_nasc');
          }
          if ('validate_nacionalidade' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nacionalidade');
          }
          if ('validate_naturalidade' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'naturalidade');
          }
          if ('validate_id_tipo_estado_civil' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_tipo_estado_civil');
          }
          if ('validate_id_tipo_escolaridade' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_tipo_escolaridade');
          }
          if ('validate_id_tipo_sanguineo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_tipo_sanguineo');
          }
          if ('validate_profissao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'profissao');
          }
          if ('validate_aposentado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'aposentado');
          }
          if ('validate_id_tipo_vinculo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_tipo_vinculo');
          }
          if ('validate_obs' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'obs');
          }
          if ('validate_id_ativo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_ativo');
          }
          if ('validate_endereco' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'endereco');
          }
          if ('validate_endereco_comp' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'endereco_comp');
          }
          if ('validate_bairro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bairro');
          }
          if ('validate_id_municipio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_municipio');
          }
          if ('validate_id_uf' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_uf');
          }
          if ('validate_id_pais' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_pais');
          }
          if ('validate_cep' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cep');
          }
          if ('validate_endereco_cob' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'endereco_cob');
          }
          if ('validate_endereco_comp_cob' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'endereco_comp_cob');
          }
          if ('validate_bairro_cob' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'bairro_cob');
          }
          if ('validate_id_municipio_cob' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_municipio_cob');
          }
          if ('validate_id_uf_cob' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_uf_cob');
          }
          if ('validate_id_pais_cob' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'id_pais_cob');
          }
          if ('validate_cep_cob' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cep_cob');
          }
          if ('validate_rg' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rg');
          }
          if ('validate_rg_uf_emissor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rg_uf_emissor');
          }
          if ('validate_rg_orgao_emissor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rg_orgao_emissor');
          }
          if ('validate_rg_dt_emissao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rg_dt_emissao');
          }
          if ('validate_passaporte' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'passaporte');
          }
          if ('validate_passaporte_pais_origem' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'passaporte_pais_origem');
          }
          if ('validate_passaporte_dt_emissao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'passaporte_dt_emissao');
          }
          if ('validate_cnh' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cnh');
          }
          if ('validate_cnh_categoria' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cnh_categoria');
          }
          if ('validate_cnh_dt_validade' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cnh_dt_validade');
          }
          form_public_pessoa_fisica_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_public_pessoa_fisica_mob_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_public_pessoa_fisica_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_public_pessoa_fisica_mob_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_public_pessoa_fisica_mob_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_public_pessoa_fisica_mob_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'id_pessoa_fisica':
               return "ID Pessoa Fisica";
               break;
           case 'cpf':
               return "CPF";
               break;
           case 'nome':
               return "Nome";
               break;
           case 'sexo':
               return "Sexo";
               break;
           case 'dt_nasc':
               return "Dt Nasc";
               break;
           case 'nacionalidade':
               return "Nacionalidade";
               break;
           case 'naturalidade':
               return "Naturalidade";
               break;
           case 'id_tipo_estado_civil':
               return "Tipo Estado Civil";
               break;
           case 'id_tipo_escolaridade':
               return "Tipo Escolaridade";
               break;
           case 'id_tipo_sanguineo':
               return "Tipo Sanguineo";
               break;
           case 'profissao':
               return "Profissão";
               break;
           case 'aposentado':
               return "Aposentado?";
               break;
           case 'id_tipo_vinculo':
               return "Tipo Vinculo";
               break;
           case 'obs':
               return "Obs";
               break;
           case 'id_ativo':
               return "Ativo";
               break;
           case 'endereco':
               return "Endereço";
               break;
           case 'endereco_comp':
               return "Endereco Comp";
               break;
           case 'bairro':
               return "Endereço Bairro";
               break;
           case 'id_municipio':
               return "Endereço Município";
               break;
           case 'id_uf':
               return "Endereço UF";
               break;
           case 'id_pais':
               return "Endereço Pais";
               break;
           case 'cep':
               return "Endereço CEP";
               break;
           case 'endereco_cob':
               return "Endereço Cobrança";
               break;
           case 'endereco_comp_cob':
               return "Endereço Cobrança Comp ";
               break;
           case 'bairro_cob':
               return "Endereço Cobrança Bairro";
               break;
           case 'id_municipio_cob':
               return "Endereço Cobrança Município";
               break;
           case 'id_uf_cob':
               return "Endereço Cobrança UF";
               break;
           case 'id_pais_cob':
               return "Endereço Cobrança País";
               break;
           case 'cep_cob':
               return "Endereço Cobrança CEP";
               break;
           case 'rg':
               return "RG";
               break;
           case 'rg_uf_emissor':
               return "RG UF Emissor";
               break;
           case 'rg_orgao_emissor':
               return "RG Orgão Emissor";
               break;
           case 'rg_dt_emissao':
               return "RG Dt Emissão";
               break;
           case 'passaporte':
               return "Passaporte";
               break;
           case 'passaporte_pais_origem':
               return "Passaporte País Origem";
               break;
           case 'passaporte_dt_emissao':
               return "Passaporte Dt Emissão";
               break;
           case 'cnh':
               return "CNH";
               break;
           case 'cnh_categoria':
               return "CNH Categoria";
               break;
           case 'cnh_dt_validade':
               return "CNH Dt Validade";
               break;
           case 'dt_cadastro':
               return "Dt Cadastrou";
               break;
           case 'dt_atualiza':
               return "Dt Atualizou";
               break;
           case 'usu_cadastro':
               return "Usuário Cadastrou";
               break;
           case 'usu_atualiza':
               return "Usuário Atualizou";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_public_pessoa_fisica_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_public_pessoa_fisica_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_public_pessoa_fisica_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_public_pessoa_fisica_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'id_pessoa_fisica' == $filtro)
        $this->ValidateField_id_pessoa_fisica($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cpf' == $filtro)
        $this->ValidateField_cpf($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nome' == $filtro)
        $this->ValidateField_nome($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sexo' == $filtro)
        $this->ValidateField_sexo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'dt_nasc' == $filtro)
        $this->ValidateField_dt_nasc($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nacionalidade' == $filtro)
        $this->ValidateField_nacionalidade($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'naturalidade' == $filtro)
        $this->ValidateField_naturalidade($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_tipo_estado_civil' == $filtro)
        $this->ValidateField_id_tipo_estado_civil($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_tipo_escolaridade' == $filtro)
        $this->ValidateField_id_tipo_escolaridade($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_tipo_sanguineo' == $filtro)
        $this->ValidateField_id_tipo_sanguineo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'profissao' == $filtro)
        $this->ValidateField_profissao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'aposentado' == $filtro)
        $this->ValidateField_aposentado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_tipo_vinculo' == $filtro)
        $this->ValidateField_id_tipo_vinculo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'obs' == $filtro)
        $this->ValidateField_obs($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_ativo' == $filtro)
        $this->ValidateField_id_ativo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'endereco' == $filtro)
        $this->ValidateField_endereco($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'endereco_comp' == $filtro)
        $this->ValidateField_endereco_comp($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bairro' == $filtro)
        $this->ValidateField_bairro($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_municipio' == $filtro)
        $this->ValidateField_id_municipio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_uf' == $filtro)
        $this->ValidateField_id_uf($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_pais' == $filtro)
        $this->ValidateField_id_pais($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cep' == $filtro)
        $this->ValidateField_cep($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'endereco_cob' == $filtro)
        $this->ValidateField_endereco_cob($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'endereco_comp_cob' == $filtro)
        $this->ValidateField_endereco_comp_cob($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'bairro_cob' == $filtro)
        $this->ValidateField_bairro_cob($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_municipio_cob' == $filtro)
        $this->ValidateField_id_municipio_cob($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_uf_cob' == $filtro)
        $this->ValidateField_id_uf_cob($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'id_pais_cob' == $filtro)
        $this->ValidateField_id_pais_cob($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cep_cob' == $filtro)
        $this->ValidateField_cep_cob($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rg' == $filtro)
        $this->ValidateField_rg($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rg_uf_emissor' == $filtro)
        $this->ValidateField_rg_uf_emissor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rg_orgao_emissor' == $filtro)
        $this->ValidateField_rg_orgao_emissor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rg_dt_emissao' == $filtro)
        $this->ValidateField_rg_dt_emissao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'passaporte' == $filtro)
        $this->ValidateField_passaporte($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'passaporte_pais_origem' == $filtro)
        $this->ValidateField_passaporte_pais_origem($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'passaporte_dt_emissao' == $filtro)
        $this->ValidateField_passaporte_dt_emissao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cnh' == $filtro)
        $this->ValidateField_cnh($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cnh_categoria' == $filtro)
        $this->ValidateField_cnh_categoria($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cnh_dt_validade' == $filtro)
        $this->ValidateField_cnh_dt_validade($Campos_Crit, $Campos_Falta, $Campos_Erros);
//-- converter datas   
      $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_id_pessoa_fisica(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->id_pessoa_fisica == "")  
      { 
          $this->id_pessoa_fisica = 0;
      } 
      nm_limpa_numero($this->id_pessoa_fisica, $this->field_config['id_pessoa_fisica']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->id_pessoa_fisica != '')  
          { 
              $iTestSize = 17;
              if (strlen($this->id_pessoa_fisica) > $iTestSize)  
              { 
                  $Campos_Crit .= "ID Pessoa Fisica: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['id_pessoa_fisica']))
                  {
                      $Campos_Erros['id_pessoa_fisica'] = array();
                  }
                  $Campos_Erros['id_pessoa_fisica'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['id_pessoa_fisica']) || !is_array($this->NM_ajax_info['errList']['id_pessoa_fisica']))
                  {
                      $this->NM_ajax_info['errList']['id_pessoa_fisica'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_pessoa_fisica'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->id_pessoa_fisica, 17, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "ID Pessoa Fisica; " ; 
                  if (!isset($Campos_Erros['id_pessoa_fisica']))
                  {
                      $Campos_Erros['id_pessoa_fisica'] = array();
                  }
                  $Campos_Erros['id_pessoa_fisica'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['id_pessoa_fisica']) || !is_array($this->NM_ajax_info['errList']['id_pessoa_fisica']))
                  {
                      $this->NM_ajax_info['errList']['id_pessoa_fisica'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_pessoa_fisica'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_id_pessoa_fisica

    function ValidateField_cpf(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_ciccnpj($this->cpf) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->cpf) != "")  
          { 
              if ($teste_validade->CIC($this->cpf) == false)  
              { 
                  $Campos_Crit .= "CPF; " ; 
                  if (!isset($Campos_Erros['cpf']))
                  {
                      $Campos_Erros['cpf'] = array();
                  }
                  $Campos_Erros['cpf'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cpf']) || !is_array($this->NM_ajax_info['errList']['cpf']))
                  {
                      $this->NM_ajax_info['errList']['cpf'] = array();
                  }
                  $this->NM_ajax_info['errList']['cpf'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if ($this->cpf == "")  
      { 
          $this->cpf = 0;
          $this->sc_force_zero[] = 'cpf';
      } 
    } // ValidateField_cpf

    function ValidateField_nome(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nome) > 255) 
          { 
              $Campos_Crit .= "Nome " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nome']))
              {
                  $Campos_Erros['nome'] = array();
              }
              $Campos_Erros['nome'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nome']) || !is_array($this->NM_ajax_info['errList']['nome']))
              {
                  $this->NM_ajax_info['errList']['nome'] = array();
              }
              $this->NM_ajax_info['errList']['nome'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nome

    function ValidateField_sexo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->sexo == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->sexo = ""; 
      } 
    } // ValidateField_sexo

    function ValidateField_dt_nasc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->dt_nasc, $this->field_config['dt_nasc']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['dt_nasc']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['dt_nasc']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['dt_nasc']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['dt_nasc']['date_sep']) ; 
          if (trim($this->dt_nasc) != "")  
          { 
              if ($teste_validade->Data($this->dt_nasc, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Dt Nasc; " ; 
                  if (!isset($Campos_Erros['dt_nasc']))
                  {
                      $Campos_Erros['dt_nasc'] = array();
                  }
                  $Campos_Erros['dt_nasc'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dt_nasc']) || !is_array($this->NM_ajax_info['errList']['dt_nasc']))
                  {
                      $this->NM_ajax_info['errList']['dt_nasc'] = array();
                  }
                  $this->NM_ajax_info['errList']['dt_nasc'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['dt_nasc']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_dt_nasc

    function ValidateField_nacionalidade(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->nacionalidade) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']) && !in_array($this->nacionalidade, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['nacionalidade']))
                   {
                       $Campos_Erros['nacionalidade'] = array();
                   }
                   $Campos_Erros['nacionalidade'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['nacionalidade']) || !is_array($this->NM_ajax_info['errList']['nacionalidade']))
                   {
                       $this->NM_ajax_info['errList']['nacionalidade'] = array();
                   }
                   $this->NM_ajax_info['errList']['nacionalidade'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_nacionalidade

    function ValidateField_naturalidade(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->naturalidade) > 50) 
          { 
              $Campos_Crit .= "Naturalidade " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['naturalidade']))
              {
                  $Campos_Erros['naturalidade'] = array();
              }
              $Campos_Erros['naturalidade'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['naturalidade']) || !is_array($this->NM_ajax_info['errList']['naturalidade']))
              {
                  $this->NM_ajax_info['errList']['naturalidade'] = array();
              }
              $this->NM_ajax_info['errList']['naturalidade'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_naturalidade

    function ValidateField_id_tipo_estado_civil(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->id_tipo_estado_civil) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']) && !in_array($this->id_tipo_estado_civil, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_tipo_estado_civil']))
                   {
                       $Campos_Erros['id_tipo_estado_civil'] = array();
                   }
                   $Campos_Erros['id_tipo_estado_civil'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_tipo_estado_civil']) || !is_array($this->NM_ajax_info['errList']['id_tipo_estado_civil']))
                   {
                       $this->NM_ajax_info['errList']['id_tipo_estado_civil'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_tipo_estado_civil'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_id_tipo_estado_civil

    function ValidateField_id_tipo_escolaridade(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->id_tipo_escolaridade) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']) && !in_array($this->id_tipo_escolaridade, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_tipo_escolaridade']))
                   {
                       $Campos_Erros['id_tipo_escolaridade'] = array();
                   }
                   $Campos_Erros['id_tipo_escolaridade'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_tipo_escolaridade']) || !is_array($this->NM_ajax_info['errList']['id_tipo_escolaridade']))
                   {
                       $this->NM_ajax_info['errList']['id_tipo_escolaridade'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_tipo_escolaridade'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_id_tipo_escolaridade

    function ValidateField_id_tipo_sanguineo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->id_tipo_sanguineo) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']) && !in_array($this->id_tipo_sanguineo, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_tipo_sanguineo']))
                   {
                       $Campos_Erros['id_tipo_sanguineo'] = array();
                   }
                   $Campos_Erros['id_tipo_sanguineo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_tipo_sanguineo']) || !is_array($this->NM_ajax_info['errList']['id_tipo_sanguineo']))
                   {
                       $this->NM_ajax_info['errList']['id_tipo_sanguineo'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_tipo_sanguineo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_id_tipo_sanguineo

    function ValidateField_profissao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->profissao) > 100) 
          { 
              $Campos_Crit .= "Profissão " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['profissao']))
              {
                  $Campos_Erros['profissao'] = array();
              }
              $Campos_Erros['profissao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['profissao']) || !is_array($this->NM_ajax_info['errList']['profissao']))
              {
                  $this->NM_ajax_info['errList']['profissao'] = array();
              }
              $this->NM_ajax_info['errList']['profissao'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_profissao

    function ValidateField_aposentado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->aposentado == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->aposentado = ""; 
      } 
    } // ValidateField_aposentado

    function ValidateField_id_tipo_vinculo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->id_tipo_vinculo == "")  
      { 
          $this->id_tipo_vinculo = 0;
          $this->sc_force_zero[] = 'id_tipo_vinculo';
      } 
      nm_limpa_numero($this->id_tipo_vinculo, $this->field_config['id_tipo_vinculo']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->id_tipo_vinculo != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->id_tipo_vinculo) > $iTestSize)  
              { 
                  $Campos_Crit .= "Tipo Vinculo: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['id_tipo_vinculo']))
                  {
                      $Campos_Erros['id_tipo_vinculo'] = array();
                  }
                  $Campos_Erros['id_tipo_vinculo'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['id_tipo_vinculo']) || !is_array($this->NM_ajax_info['errList']['id_tipo_vinculo']))
                  {
                      $this->NM_ajax_info['errList']['id_tipo_vinculo'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_tipo_vinculo'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->id_tipo_vinculo, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $Campos_Crit .= "Tipo Vinculo; " ; 
                  if (!isset($Campos_Erros['id_tipo_vinculo']))
                  {
                      $Campos_Erros['id_tipo_vinculo'] = array();
                  }
                  $Campos_Erros['id_tipo_vinculo'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['id_tipo_vinculo']) || !is_array($this->NM_ajax_info['errList']['id_tipo_vinculo']))
                  {
                      $this->NM_ajax_info['errList']['id_tipo_vinculo'] = array();
                  }
                  $this->NM_ajax_info['errList']['id_tipo_vinculo'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_id_tipo_vinculo

    function ValidateField_obs(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->obs) > 255) 
          { 
              $Campos_Crit .= "Obs " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['obs']))
              {
                  $Campos_Erros['obs'] = array();
              }
              $Campos_Erros['obs'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['obs']) || !is_array($this->NM_ajax_info['errList']['obs']))
              {
                  $this->NM_ajax_info['errList']['obs'] = array();
              }
              $this->NM_ajax_info['errList']['obs'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_obs

    function ValidateField_id_ativo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->id_ativo == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->id_ativo == "")  
      { 
          $this->id_ativo = 0;
          $this->sc_force_zero[] = 'id_ativo';
      } 
      if ($this->id_ativo != "")
      { 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_ativo']) && !in_array($this->id_ativo, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_ativo']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['id_ativo']))
              {
                  $Campos_Erros['id_ativo'] = array();
              }
              $Campos_Erros['id_ativo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['id_ativo']) || !is_array($this->NM_ajax_info['errList']['id_ativo']))
              {
                  $this->NM_ajax_info['errList']['id_ativo'] = array();
              }
              $this->NM_ajax_info['errList']['id_ativo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
      }
    } // ValidateField_id_ativo

    function ValidateField_endereco(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->endereco) > 255) 
          { 
              $Campos_Crit .= "Endereço " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['endereco']))
              {
                  $Campos_Erros['endereco'] = array();
              }
              $Campos_Erros['endereco'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['endereco']) || !is_array($this->NM_ajax_info['errList']['endereco']))
              {
                  $this->NM_ajax_info['errList']['endereco'] = array();
              }
              $this->NM_ajax_info['errList']['endereco'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_endereco

    function ValidateField_endereco_comp(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->endereco_comp) > 255) 
          { 
              $Campos_Crit .= "Endereco Comp " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['endereco_comp']))
              {
                  $Campos_Erros['endereco_comp'] = array();
              }
              $Campos_Erros['endereco_comp'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['endereco_comp']) || !is_array($this->NM_ajax_info['errList']['endereco_comp']))
              {
                  $this->NM_ajax_info['errList']['endereco_comp'] = array();
              }
              $this->NM_ajax_info['errList']['endereco_comp'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_endereco_comp

    function ValidateField_bairro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->bairro) > 255) 
          { 
              $Campos_Crit .= "Endereço Bairro " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['bairro']))
              {
                  $Campos_Erros['bairro'] = array();
              }
              $Campos_Erros['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['bairro']) || !is_array($this->NM_ajax_info['errList']['bairro']))
              {
                  $this->NM_ajax_info['errList']['bairro'] = array();
              }
              $this->NM_ajax_info['errList']['bairro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_bairro

    function ValidateField_id_municipio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->id_municipio) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']) && !in_array($this->id_municipio, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_municipio']))
                   {
                       $Campos_Erros['id_municipio'] = array();
                   }
                   $Campos_Erros['id_municipio'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_municipio']) || !is_array($this->NM_ajax_info['errList']['id_municipio']))
                   {
                       $this->NM_ajax_info['errList']['id_municipio'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_municipio'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_id_municipio

    function ValidateField_id_uf(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->id_uf) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']) && !in_array($this->id_uf, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_uf']))
                   {
                       $Campos_Erros['id_uf'] = array();
                   }
                   $Campos_Erros['id_uf'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_uf']) || !is_array($this->NM_ajax_info['errList']['id_uf']))
                   {
                       $this->NM_ajax_info['errList']['id_uf'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_uf'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_id_uf

    function ValidateField_id_pais(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->id_pais) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']) && !in_array($this->id_pais, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_pais']))
                   {
                       $Campos_Erros['id_pais'] = array();
                   }
                   $Campos_Erros['id_pais'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_pais']) || !is_array($this->NM_ajax_info['errList']['id_pais']))
                   {
                       $this->NM_ajax_info['errList']['id_pais'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_pais'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_id_pais

    function ValidateField_cep(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_cep($this->cep) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->cep) != "")  
          { 
              if (strlen($this->cep) != 8  || (int)$this->cep == 0)
              { 
                  $Campos_Crit .= "Endereço CEP; " ; 
                  if (!isset($Campos_Erros['cep']))
                  {
                      $Campos_Erros['cep'] = array();
                  }
                  $Campos_Erros['cep'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cep']) || !is_array($this->NM_ajax_info['errList']['cep']))
                  {
                      $this->NM_ajax_info['errList']['cep'] = array();
                  }
                  $this->NM_ajax_info['errList']['cep'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if ($this->cep == "")  
      { 
          $this->cep = 0;
          $this->sc_force_zero[] = 'cep';
      } 
    } // ValidateField_cep

    function ValidateField_endereco_cob(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->endereco_cob) > 255) 
          { 
              $Campos_Crit .= "Endereço Cobrança " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['endereco_cob']))
              {
                  $Campos_Erros['endereco_cob'] = array();
              }
              $Campos_Erros['endereco_cob'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['endereco_cob']) || !is_array($this->NM_ajax_info['errList']['endereco_cob']))
              {
                  $this->NM_ajax_info['errList']['endereco_cob'] = array();
              }
              $this->NM_ajax_info['errList']['endereco_cob'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_endereco_cob

    function ValidateField_endereco_comp_cob(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->endereco_comp_cob) > 255) 
          { 
              $Campos_Crit .= "Endereço Cobrança Comp  " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['endereco_comp_cob']))
              {
                  $Campos_Erros['endereco_comp_cob'] = array();
              }
              $Campos_Erros['endereco_comp_cob'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['endereco_comp_cob']) || !is_array($this->NM_ajax_info['errList']['endereco_comp_cob']))
              {
                  $this->NM_ajax_info['errList']['endereco_comp_cob'] = array();
              }
              $this->NM_ajax_info['errList']['endereco_comp_cob'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_endereco_comp_cob

    function ValidateField_bairro_cob(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->bairro_cob) > 255) 
          { 
              $Campos_Crit .= "Endereço Cobrança Bairro " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['bairro_cob']))
              {
                  $Campos_Erros['bairro_cob'] = array();
              }
              $Campos_Erros['bairro_cob'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['bairro_cob']) || !is_array($this->NM_ajax_info['errList']['bairro_cob']))
              {
                  $this->NM_ajax_info['errList']['bairro_cob'] = array();
              }
              $this->NM_ajax_info['errList']['bairro_cob'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_bairro_cob

    function ValidateField_id_municipio_cob(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->id_municipio_cob) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']) && !in_array($this->id_municipio_cob, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_municipio_cob']))
                   {
                       $Campos_Erros['id_municipio_cob'] = array();
                   }
                   $Campos_Erros['id_municipio_cob'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_municipio_cob']) || !is_array($this->NM_ajax_info['errList']['id_municipio_cob']))
                   {
                       $this->NM_ajax_info['errList']['id_municipio_cob'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_municipio_cob'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_id_municipio_cob

    function ValidateField_id_uf_cob(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->id_uf_cob) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']) && !in_array($this->id_uf_cob, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_uf_cob']))
                   {
                       $Campos_Erros['id_uf_cob'] = array();
                   }
                   $Campos_Erros['id_uf_cob'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_uf_cob']) || !is_array($this->NM_ajax_info['errList']['id_uf_cob']))
                   {
                       $this->NM_ajax_info['errList']['id_uf_cob'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_uf_cob'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_id_uf_cob

    function ValidateField_id_pais_cob(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->id_pais_cob) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']) && !in_array($this->id_pais_cob, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['id_pais_cob']))
                   {
                       $Campos_Erros['id_pais_cob'] = array();
                   }
                   $Campos_Erros['id_pais_cob'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['id_pais_cob']) || !is_array($this->NM_ajax_info['errList']['id_pais_cob']))
                   {
                       $this->NM_ajax_info['errList']['id_pais_cob'] = array();
                   }
                   $this->NM_ajax_info['errList']['id_pais_cob'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_id_pais_cob

    function ValidateField_cep_cob(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_cep($this->cep_cob) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->cep_cob) != "")  
          { 
              if (strlen($this->cep_cob) != 8  || (int)$this->cep_cob == 0)
              { 
                  $Campos_Crit .= "Endereço Cobrança CEP; " ; 
                  if (!isset($Campos_Erros['cep_cob']))
                  {
                      $Campos_Erros['cep_cob'] = array();
                  }
                  $Campos_Erros['cep_cob'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cep_cob']) || !is_array($this->NM_ajax_info['errList']['cep_cob']))
                  {
                      $this->NM_ajax_info['errList']['cep_cob'] = array();
                  }
                  $this->NM_ajax_info['errList']['cep_cob'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if ($this->cep_cob == "")  
      { 
          $this->cep_cob = 0;
          $this->sc_force_zero[] = 'cep_cob';
      } 
    } // ValidateField_cep_cob

    function ValidateField_rg(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->rg) > 25) 
          { 
              $Campos_Crit .= "RG " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['rg']))
              {
                  $Campos_Erros['rg'] = array();
              }
              $Campos_Erros['rg'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['rg']) || !is_array($this->NM_ajax_info['errList']['rg']))
              {
                  $this->NM_ajax_info['errList']['rg'] = array();
              }
              $this->NM_ajax_info['errList']['rg'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_rg

    function ValidateField_rg_uf_emissor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->rg_uf_emissor) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_rg_uf_emissor']) && !in_array($this->rg_uf_emissor, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_rg_uf_emissor']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['rg_uf_emissor']))
                   {
                       $Campos_Erros['rg_uf_emissor'] = array();
                   }
                   $Campos_Erros['rg_uf_emissor'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['rg_uf_emissor']) || !is_array($this->NM_ajax_info['errList']['rg_uf_emissor']))
                   {
                       $this->NM_ajax_info['errList']['rg_uf_emissor'] = array();
                   }
                   $this->NM_ajax_info['errList']['rg_uf_emissor'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_rg_uf_emissor

    function ValidateField_rg_orgao_emissor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->rg_orgao_emissor) > 10) 
          { 
              $Campos_Crit .= "RG Orgão Emissor " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['rg_orgao_emissor']))
              {
                  $Campos_Erros['rg_orgao_emissor'] = array();
              }
              $Campos_Erros['rg_orgao_emissor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['rg_orgao_emissor']) || !is_array($this->NM_ajax_info['errList']['rg_orgao_emissor']))
              {
                  $this->NM_ajax_info['errList']['rg_orgao_emissor'] = array();
              }
              $this->NM_ajax_info['errList']['rg_orgao_emissor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_rg_orgao_emissor

    function ValidateField_rg_dt_emissao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->rg_dt_emissao, $this->field_config['rg_dt_emissao']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['rg_dt_emissao']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['rg_dt_emissao']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['rg_dt_emissao']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['rg_dt_emissao']['date_sep']) ; 
          if (trim($this->rg_dt_emissao) != "")  
          { 
              if ($teste_validade->Data($this->rg_dt_emissao, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "RG Dt Emissão; " ; 
                  if (!isset($Campos_Erros['rg_dt_emissao']))
                  {
                      $Campos_Erros['rg_dt_emissao'] = array();
                  }
                  $Campos_Erros['rg_dt_emissao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['rg_dt_emissao']) || !is_array($this->NM_ajax_info['errList']['rg_dt_emissao']))
                  {
                      $this->NM_ajax_info['errList']['rg_dt_emissao'] = array();
                  }
                  $this->NM_ajax_info['errList']['rg_dt_emissao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['rg_dt_emissao']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_rg_dt_emissao

    function ValidateField_passaporte(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->passaporte) > 25) 
          { 
              $Campos_Crit .= "Passaporte " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['passaporte']))
              {
                  $Campos_Erros['passaporte'] = array();
              }
              $Campos_Erros['passaporte'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['passaporte']) || !is_array($this->NM_ajax_info['errList']['passaporte']))
              {
                  $this->NM_ajax_info['errList']['passaporte'] = array();
              }
              $this->NM_ajax_info['errList']['passaporte'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_passaporte

    function ValidateField_passaporte_pais_origem(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->passaporte_pais_origem) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_passaporte_pais_origem']) && !in_array($this->passaporte_pais_origem, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_passaporte_pais_origem']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['passaporte_pais_origem']))
                   {
                       $Campos_Erros['passaporte_pais_origem'] = array();
                   }
                   $Campos_Erros['passaporte_pais_origem'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['passaporte_pais_origem']) || !is_array($this->NM_ajax_info['errList']['passaporte_pais_origem']))
                   {
                       $this->NM_ajax_info['errList']['passaporte_pais_origem'] = array();
                   }
                   $this->NM_ajax_info['errList']['passaporte_pais_origem'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_passaporte_pais_origem

    function ValidateField_passaporte_dt_emissao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->passaporte_dt_emissao, $this->field_config['passaporte_dt_emissao']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['passaporte_dt_emissao']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['passaporte_dt_emissao']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['passaporte_dt_emissao']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['passaporte_dt_emissao']['date_sep']) ; 
          if (trim($this->passaporte_dt_emissao) != "")  
          { 
              if ($teste_validade->Data($this->passaporte_dt_emissao, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Passaporte Dt Emissão; " ; 
                  if (!isset($Campos_Erros['passaporte_dt_emissao']))
                  {
                      $Campos_Erros['passaporte_dt_emissao'] = array();
                  }
                  $Campos_Erros['passaporte_dt_emissao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['passaporte_dt_emissao']) || !is_array($this->NM_ajax_info['errList']['passaporte_dt_emissao']))
                  {
                      $this->NM_ajax_info['errList']['passaporte_dt_emissao'] = array();
                  }
                  $this->NM_ajax_info['errList']['passaporte_dt_emissao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['passaporte_dt_emissao']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_passaporte_dt_emissao

    function ValidateField_cnh(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cnh) > 11) 
          { 
              $Campos_Crit .= "CNH " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cnh']))
              {
                  $Campos_Erros['cnh'] = array();
              }
              $Campos_Erros['cnh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cnh']) || !is_array($this->NM_ajax_info['errList']['cnh']))
              {
                  $this->NM_ajax_info['errList']['cnh'] = array();
              }
              $this->NM_ajax_info['errList']['cnh'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cnh

    function ValidateField_cnh_categoria(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cnh_categoria) > 8) 
          { 
              $Campos_Crit .= "CNH Categoria " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 8 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cnh_categoria']))
              {
                  $Campos_Erros['cnh_categoria'] = array();
              }
              $Campos_Erros['cnh_categoria'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 8 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cnh_categoria']) || !is_array($this->NM_ajax_info['errList']['cnh_categoria']))
              {
                  $this->NM_ajax_info['errList']['cnh_categoria'] = array();
              }
              $this->NM_ajax_info['errList']['cnh_categoria'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 8 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cnh_categoria

    function ValidateField_cnh_dt_validade(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->cnh_dt_validade, $this->field_config['cnh_dt_validade']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['cnh_dt_validade']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['cnh_dt_validade']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['cnh_dt_validade']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['cnh_dt_validade']['date_sep']) ; 
          if (trim($this->cnh_dt_validade) != "")  
          { 
              if ($teste_validade->Data($this->cnh_dt_validade, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "CNH Dt Validade; " ; 
                  if (!isset($Campos_Erros['cnh_dt_validade']))
                  {
                      $Campos_Erros['cnh_dt_validade'] = array();
                  }
                  $Campos_Erros['cnh_dt_validade'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['cnh_dt_validade']) || !is_array($this->NM_ajax_info['errList']['cnh_dt_validade']))
                  {
                      $this->NM_ajax_info['errList']['cnh_dt_validade'] = array();
                  }
                  $this->NM_ajax_info['errList']['cnh_dt_validade'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['cnh_dt_validade']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_cnh_dt_validade

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['id_pessoa_fisica'] = $this->id_pessoa_fisica;
    $this->nmgp_dados_form['cpf'] = $this->cpf;
    $this->nmgp_dados_form['nome'] = $this->nome;
    $this->nmgp_dados_form['sexo'] = $this->sexo;
    $this->nmgp_dados_form['dt_nasc'] = $this->dt_nasc;
    $this->nmgp_dados_form['nacionalidade'] = $this->nacionalidade;
    $this->nmgp_dados_form['naturalidade'] = $this->naturalidade;
    $this->nmgp_dados_form['id_tipo_estado_civil'] = $this->id_tipo_estado_civil;
    $this->nmgp_dados_form['id_tipo_escolaridade'] = $this->id_tipo_escolaridade;
    $this->nmgp_dados_form['id_tipo_sanguineo'] = $this->id_tipo_sanguineo;
    $this->nmgp_dados_form['profissao'] = $this->profissao;
    $this->nmgp_dados_form['aposentado'] = $this->aposentado;
    $this->nmgp_dados_form['id_tipo_vinculo'] = $this->id_tipo_vinculo;
    $this->nmgp_dados_form['obs'] = $this->obs;
    $this->nmgp_dados_form['id_ativo'] = $this->id_ativo;
    $this->nmgp_dados_form['endereco'] = $this->endereco;
    $this->nmgp_dados_form['endereco_comp'] = $this->endereco_comp;
    $this->nmgp_dados_form['bairro'] = $this->bairro;
    $this->nmgp_dados_form['id_municipio'] = $this->id_municipio;
    $this->nmgp_dados_form['id_uf'] = $this->id_uf;
    $this->nmgp_dados_form['id_pais'] = $this->id_pais;
    $this->nmgp_dados_form['cep'] = $this->cep;
    $this->nmgp_dados_form['endereco_cob'] = $this->endereco_cob;
    $this->nmgp_dados_form['endereco_comp_cob'] = $this->endereco_comp_cob;
    $this->nmgp_dados_form['bairro_cob'] = $this->bairro_cob;
    $this->nmgp_dados_form['id_municipio_cob'] = $this->id_municipio_cob;
    $this->nmgp_dados_form['id_uf_cob'] = $this->id_uf_cob;
    $this->nmgp_dados_form['id_pais_cob'] = $this->id_pais_cob;
    $this->nmgp_dados_form['cep_cob'] = $this->cep_cob;
    $this->nmgp_dados_form['rg'] = $this->rg;
    $this->nmgp_dados_form['rg_uf_emissor'] = $this->rg_uf_emissor;
    $this->nmgp_dados_form['rg_orgao_emissor'] = $this->rg_orgao_emissor;
    $this->nmgp_dados_form['rg_dt_emissao'] = $this->rg_dt_emissao;
    $this->nmgp_dados_form['passaporte'] = $this->passaporte;
    $this->nmgp_dados_form['passaporte_pais_origem'] = $this->passaporte_pais_origem;
    $this->nmgp_dados_form['passaporte_dt_emissao'] = $this->passaporte_dt_emissao;
    $this->nmgp_dados_form['cnh'] = $this->cnh;
    $this->nmgp_dados_form['cnh_categoria'] = $this->cnh_categoria;
    $this->nmgp_dados_form['cnh_dt_validade'] = $this->cnh_dt_validade;
    $this->nmgp_dados_form['dt_cadastro'] = $this->dt_cadastro;
    $this->nmgp_dados_form['dt_atualiza'] = $this->dt_atualiza;
    $this->nmgp_dados_form['usu_cadastro'] = $this->usu_cadastro;
    $this->nmgp_dados_form['usu_atualiza'] = $this->usu_atualiza;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_numero($this->id_pessoa_fisica, $this->field_config['id_pessoa_fisica']['symbol_grp']) ; 
      nm_limpa_ciccnpj($this->cpf) ; 
      nm_limpa_data($this->dt_nasc, $this->field_config['dt_nasc']['date_sep']) ; 
      nm_limpa_numero($this->id_tipo_vinculo, $this->field_config['id_tipo_vinculo']['symbol_grp']) ; 
      nm_limpa_cep($this->cep) ; 
      nm_limpa_cep($this->cep_cob) ; 
      nm_limpa_data($this->rg_dt_emissao, $this->field_config['rg_dt_emissao']['date_sep']) ; 
      nm_limpa_data($this->passaporte_dt_emissao, $this->field_config['passaporte_dt_emissao']['date_sep']) ; 
      nm_limpa_data($this->cnh_dt_validade, $this->field_config['cnh_dt_validade']['date_sep']) ; 
      nm_limpa_data($this->dt_cadastro, $this->field_config['dt_cadastro']['date_sep']) ; 
      nm_limpa_hora($this->dt_cadastro_hora, $this->field_config['dt_cadastro']['time_sep']) ; 
      nm_limpa_data($this->dt_atualiza, $this->field_config['dt_atualiza']['date_sep']) ; 
      nm_limpa_hora($this->dt_atualiza_hora, $this->field_config['dt_atualiza']['time_sep']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~ei', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "id_pessoa_fisica")
      {
          nm_limpa_numero($this->id_pessoa_fisica, $this->field_config['id_pessoa_fisica']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "cpf")
      {
          nm_limpa_ciccnpj($this->cpf) ; 
      }
      if ($Nome_Campo == "id_tipo_vinculo")
      {
          nm_limpa_numero($this->id_tipo_vinculo, $this->field_config['id_tipo_vinculo']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "cep")
      {
          nm_limpa_cep($this->cep) ; 
      }
      if ($Nome_Campo == "cep_cob")
      {
          nm_limpa_cep($this->cep_cob) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if (!empty($this->id_pessoa_fisica) || (!empty($format_fields) && isset($format_fields['id_pessoa_fisica'])))
      {
          nmgp_Form_Num_Val($this->id_pessoa_fisica, $this->field_config['id_pessoa_fisica']['symbol_grp'], $this->field_config['id_pessoa_fisica']['symbol_dec'], "0", "S", "", "", "", "-", $this->field_config['id_pessoa_fisica']['symbol_fmt']) ; 
      }
      if (!empty($this->cpf) || (!empty($format_fields) && isset($format_fields['cpf'])))
      {
          nmgp_Form_CicCnpj($this->cpf) ; 
      }
      if ((!empty($this->dt_nasc) && 'null' != $this->dt_nasc) || (!empty($format_fields) && isset($format_fields['dt_nasc'])))
      {
          nm_volta_data($this->dt_nasc, $this->field_config['dt_nasc']['date_format']) ; 
          nmgp_Form_Datas($this->dt_nasc, $this->field_config['dt_nasc']['date_format'], $this->field_config['dt_nasc']['date_sep']) ;  
      }
      elseif ('null' == $this->dt_nasc || '' == $this->dt_nasc)
      {
          $this->dt_nasc = '';
      }
      if (!empty($this->id_tipo_vinculo) || (!empty($format_fields) && isset($format_fields['id_tipo_vinculo'])))
      {
          nmgp_Form_Num_Val($this->id_tipo_vinculo, $this->field_config['id_tipo_vinculo']['symbol_grp'], $this->field_config['id_tipo_vinculo']['symbol_dec'], "0", "S", "", "", "", "-", $this->field_config['id_tipo_vinculo']['symbol_fmt']) ; 
      }
      if (!empty($this->cep) || (!empty($format_fields) && isset($format_fields['cep'])))
      {
          nmgp_Form_Cep($this->cep) ; 
      }
      if (!empty($this->cep_cob) || (!empty($format_fields) && isset($format_fields['cep_cob'])))
      {
          nmgp_Form_Cep($this->cep_cob) ; 
      }
      if ((!empty($this->rg_dt_emissao) && 'null' != $this->rg_dt_emissao) || (!empty($format_fields) && isset($format_fields['rg_dt_emissao'])))
      {
          nm_volta_data($this->rg_dt_emissao, $this->field_config['rg_dt_emissao']['date_format']) ; 
          nmgp_Form_Datas($this->rg_dt_emissao, $this->field_config['rg_dt_emissao']['date_format'], $this->field_config['rg_dt_emissao']['date_sep']) ;  
      }
      elseif ('null' == $this->rg_dt_emissao || '' == $this->rg_dt_emissao)
      {
          $this->rg_dt_emissao = '';
      }
      if ((!empty($this->passaporte_dt_emissao) && 'null' != $this->passaporte_dt_emissao) || (!empty($format_fields) && isset($format_fields['passaporte_dt_emissao'])))
      {
          nm_volta_data($this->passaporte_dt_emissao, $this->field_config['passaporte_dt_emissao']['date_format']) ; 
          nmgp_Form_Datas($this->passaporte_dt_emissao, $this->field_config['passaporte_dt_emissao']['date_format'], $this->field_config['passaporte_dt_emissao']['date_sep']) ;  
      }
      elseif ('null' == $this->passaporte_dt_emissao || '' == $this->passaporte_dt_emissao)
      {
          $this->passaporte_dt_emissao = '';
      }
      if ((!empty($this->cnh_dt_validade) && 'null' != $this->cnh_dt_validade) || (!empty($format_fields) && isset($format_fields['cnh_dt_validade'])))
      {
          nm_volta_data($this->cnh_dt_validade, $this->field_config['cnh_dt_validade']['date_format']) ; 
          nmgp_Form_Datas($this->cnh_dt_validade, $this->field_config['cnh_dt_validade']['date_format'], $this->field_config['cnh_dt_validade']['date_sep']) ;  
      }
      elseif ('null' == $this->cnh_dt_validade || '' == $this->cnh_dt_validade)
      {
          $this->cnh_dt_validade = '';
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

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
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
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
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

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
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['dt_nasc']['date_format'];
      if ($this->dt_nasc != "")  
      { 
          nm_conv_data($this->dt_nasc, $this->field_config['dt_nasc']['date_format']) ; 
          $this->dt_nasc_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->dt_nasc_hora = substr($this->dt_nasc_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dt_nasc_hora = substr($this->dt_nasc_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->dt_nasc_hora = substr($this->dt_nasc_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->dt_nasc_hora = substr($this->dt_nasc_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->dt_nasc_hora = substr($this->dt_nasc_hora, 0, -4);
          }
      } 
      if ($this->dt_nasc == "" && $use_null)  
      { 
          $this->dt_nasc = "null" ; 
      } 
      $this->field_config['dt_nasc']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['rg_dt_emissao']['date_format'];
      if ($this->rg_dt_emissao != "")  
      { 
          nm_conv_data($this->rg_dt_emissao, $this->field_config['rg_dt_emissao']['date_format']) ; 
          $this->rg_dt_emissao_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->rg_dt_emissao_hora = substr($this->rg_dt_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->rg_dt_emissao_hora = substr($this->rg_dt_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->rg_dt_emissao_hora = substr($this->rg_dt_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->rg_dt_emissao_hora = substr($this->rg_dt_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->rg_dt_emissao_hora = substr($this->rg_dt_emissao_hora, 0, -4);
          }
      } 
      if ($this->rg_dt_emissao == "" && $use_null)  
      { 
          $this->rg_dt_emissao = "null" ; 
      } 
      $this->field_config['rg_dt_emissao']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['passaporte_dt_emissao']['date_format'];
      if ($this->passaporte_dt_emissao != "")  
      { 
          nm_conv_data($this->passaporte_dt_emissao, $this->field_config['passaporte_dt_emissao']['date_format']) ; 
          $this->passaporte_dt_emissao_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->passaporte_dt_emissao_hora = substr($this->passaporte_dt_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->passaporte_dt_emissao_hora = substr($this->passaporte_dt_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->passaporte_dt_emissao_hora = substr($this->passaporte_dt_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->passaporte_dt_emissao_hora = substr($this->passaporte_dt_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->passaporte_dt_emissao_hora = substr($this->passaporte_dt_emissao_hora, 0, -4);
          }
      } 
      if ($this->passaporte_dt_emissao == "" && $use_null)  
      { 
          $this->passaporte_dt_emissao = "null" ; 
      } 
      $this->field_config['passaporte_dt_emissao']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['cnh_dt_validade']['date_format'];
      if ($this->cnh_dt_validade != "")  
      { 
          nm_conv_data($this->cnh_dt_validade, $this->field_config['cnh_dt_validade']['date_format']) ; 
          $this->cnh_dt_validade_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->cnh_dt_validade_hora = substr($this->cnh_dt_validade_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cnh_dt_validade_hora = substr($this->cnh_dt_validade_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->cnh_dt_validade_hora = substr($this->cnh_dt_validade_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->cnh_dt_validade_hora = substr($this->cnh_dt_validade_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->cnh_dt_validade_hora = substr($this->cnh_dt_validade_hora, 0, -4);
          }
      } 
      if ($this->cnh_dt_validade == "" && $use_null)  
      { 
          $this->cnh_dt_validade = "null" ; 
      } 
      $this->field_config['cnh_dt_validade']['date_format'] = $guarda_format_hora;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
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
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_id_pessoa_fisica();
          $this->ajax_return_values_cpf();
          $this->ajax_return_values_nome();
          $this->ajax_return_values_sexo();
          $this->ajax_return_values_dt_nasc();
          $this->ajax_return_values_nacionalidade();
          $this->ajax_return_values_naturalidade();
          $this->ajax_return_values_id_tipo_estado_civil();
          $this->ajax_return_values_id_tipo_escolaridade();
          $this->ajax_return_values_id_tipo_sanguineo();
          $this->ajax_return_values_profissao();
          $this->ajax_return_values_aposentado();
          $this->ajax_return_values_id_tipo_vinculo();
          $this->ajax_return_values_obs();
          $this->ajax_return_values_id_ativo();
          $this->ajax_return_values_endereco();
          $this->ajax_return_values_endereco_comp();
          $this->ajax_return_values_bairro();
          $this->ajax_return_values_id_municipio();
          $this->ajax_return_values_id_uf();
          $this->ajax_return_values_id_pais();
          $this->ajax_return_values_cep();
          $this->ajax_return_values_endereco_cob();
          $this->ajax_return_values_endereco_comp_cob();
          $this->ajax_return_values_bairro_cob();
          $this->ajax_return_values_id_municipio_cob();
          $this->ajax_return_values_id_uf_cob();
          $this->ajax_return_values_id_pais_cob();
          $this->ajax_return_values_cep_cob();
          $this->ajax_return_values_rg();
          $this->ajax_return_values_rg_uf_emissor();
          $this->ajax_return_values_rg_orgao_emissor();
          $this->ajax_return_values_rg_dt_emissao();
          $this->ajax_return_values_passaporte();
          $this->ajax_return_values_passaporte_pais_origem();
          $this->ajax_return_values_passaporte_dt_emissao();
          $this->ajax_return_values_cnh();
          $this->ajax_return_values_cnh_categoria();
          $this->ajax_return_values_cnh_dt_validade();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['id_pessoa_fisica']['keyVal'] = form_public_pessoa_fisica_mob_pack_protect_string($this->nmgp_dados_form['id_pessoa_fisica']);
          }
   } // ajax_return_values

          //----- id_pessoa_fisica
   function ajax_return_values_id_pessoa_fisica($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_pessoa_fisica", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_pessoa_fisica);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['id_pessoa_fisica'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cpf
   function ajax_return_values_cpf($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cpf", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cpf);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cpf'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nome
   function ajax_return_values_nome($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nome", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nome);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nome'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- sexo
   function ajax_return_values_sexo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sexo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sexo);
              $aLookup = array();
              $this->_tmp_lookup_sexo = $this->sexo;

$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('M') => form_public_pessoa_fisica_mob_pack_protect_string("Masculino"));
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('F') => form_public_pessoa_fisica_mob_pack_protect_string("Feminino"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_sexo'][] = 'M';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_sexo'][] = 'F';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"sexo\"";
          if (isset($this->NM_ajax_info['select_html']['sexo']) && !empty($this->NM_ajax_info['select_html']['sexo']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['sexo'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->sexo == $sValue)
                  {
                      $this->_tmp_lookup_sexo = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['sexo'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['sexo']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['sexo']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['sexo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['sexo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['sexo']['labList'] = $aLabel;
          }
   }

          //----- dt_nasc
   function ajax_return_values_dt_nasc($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dt_nasc", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dt_nasc);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dt_nasc'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nacionalidade
   function ajax_return_values_nacionalidade($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nacionalidade", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nacionalidade);
              $aLookup = array();
              $this->_tmp_lookup_nacionalidade = $this->nacionalidade;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_pais, pais_nm_pais_ter_ptb from pais order by 2";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"nacionalidade\"";
          if (isset($this->NM_ajax_info['select_html']['nacionalidade']) && !empty($this->NM_ajax_info['select_html']['nacionalidade']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['nacionalidade'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->nacionalidade == $sValue)
                  {
                      $this->_tmp_lookup_nacionalidade = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['nacionalidade'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['nacionalidade']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['nacionalidade']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['nacionalidade']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['nacionalidade']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['nacionalidade']['labList'] = $aLabel;
          }
   }

          //----- naturalidade
   function ajax_return_values_naturalidade($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("naturalidade", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->naturalidade);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['naturalidade'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- id_tipo_estado_civil
   function ajax_return_values_id_tipo_estado_civil($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_tipo_estado_civil", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_tipo_estado_civil);
              $aLookup = array();
              $this->_tmp_lookup_id_tipo_estado_civil = $this->id_tipo_estado_civil;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_tipo_estado_civil, descricao  from tipo_estado_civil order by 1";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_tipo_estado_civil\"";
          if (isset($this->NM_ajax_info['select_html']['id_tipo_estado_civil']) && !empty($this->NM_ajax_info['select_html']['id_tipo_estado_civil']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_tipo_estado_civil'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_tipo_estado_civil == $sValue)
                  {
                      $this->_tmp_lookup_id_tipo_estado_civil = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_tipo_estado_civil'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_tipo_estado_civil']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_tipo_estado_civil']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_tipo_estado_civil']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_tipo_estado_civil']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_tipo_estado_civil']['labList'] = $aLabel;
          }
   }

          //----- id_tipo_escolaridade
   function ajax_return_values_id_tipo_escolaridade($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_tipo_escolaridade", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_tipo_escolaridade);
              $aLookup = array();
              $this->_tmp_lookup_id_tipo_escolaridade = $this->id_tipo_escolaridade;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_tipo_escolaridade, descricao  from tipo_escolaridade order by 1";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_tipo_escolaridade\"";
          if (isset($this->NM_ajax_info['select_html']['id_tipo_escolaridade']) && !empty($this->NM_ajax_info['select_html']['id_tipo_escolaridade']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_tipo_escolaridade'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_tipo_escolaridade == $sValue)
                  {
                      $this->_tmp_lookup_id_tipo_escolaridade = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_tipo_escolaridade'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_tipo_escolaridade']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_tipo_escolaridade']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_tipo_escolaridade']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_tipo_escolaridade']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_tipo_escolaridade']['labList'] = $aLabel;
          }
   }

          //----- id_tipo_sanguineo
   function ajax_return_values_id_tipo_sanguineo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_tipo_sanguineo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_tipo_sanguineo);
              $aLookup = array();
              $this->_tmp_lookup_id_tipo_sanguineo = $this->id_tipo_sanguineo;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_tipo_sangue, descricao from tipo_sangue order by 1 asc";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_tipo_sanguineo\"";
          if (isset($this->NM_ajax_info['select_html']['id_tipo_sanguineo']) && !empty($this->NM_ajax_info['select_html']['id_tipo_sanguineo']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_tipo_sanguineo'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_tipo_sanguineo == $sValue)
                  {
                      $this->_tmp_lookup_id_tipo_sanguineo = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_tipo_sanguineo'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_tipo_sanguineo']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_tipo_sanguineo']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_tipo_sanguineo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_tipo_sanguineo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_tipo_sanguineo']['labList'] = $aLabel;
          }
   }

          //----- profissao
   function ajax_return_values_profissao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("profissao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->profissao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['profissao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- aposentado
   function ajax_return_values_aposentado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("aposentado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->aposentado);
              $aLookup = array();
              $this->_tmp_lookup_aposentado = $this->aposentado;

$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('S') => form_public_pessoa_fisica_mob_pack_protect_string("Sim"));
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('N') => form_public_pessoa_fisica_mob_pack_protect_string("Não"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_aposentado'][] = 'S';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_aposentado'][] = 'N';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"aposentado\"";
          if (isset($this->NM_ajax_info['select_html']['aposentado']) && !empty($this->NM_ajax_info['select_html']['aposentado']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['aposentado'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->aposentado == $sValue)
                  {
                      $this->_tmp_lookup_aposentado = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['aposentado'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['aposentado']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['aposentado']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['aposentado']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['aposentado']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['aposentado']['labList'] = $aLabel;
          }
   }

          //----- id_tipo_vinculo
   function ajax_return_values_id_tipo_vinculo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_tipo_vinculo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_tipo_vinculo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['id_tipo_vinculo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- obs
   function ajax_return_values_obs($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("obs", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->obs);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['obs'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- id_ativo
   function ajax_return_values_id_ativo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_ativo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_ativo);
              $aLookup = array();
              $this->_tmp_lookup_id_ativo = $this->id_ativo;

$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('1') => form_public_pessoa_fisica_mob_pack_protect_string("Ativo"));
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('0') => form_public_pessoa_fisica_mob_pack_protect_string("Inativo"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_ativo'][] = '1';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_ativo'][] = '0';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['id_ativo']) && !empty($this->NM_ajax_info['select_html']['id_ativo']))
          {
              $sOptComp = $this->NM_ajax_info['select_html']['id_ativo'];
          }
          $this->NM_ajax_info['fldList']['id_ativo'] = array(
                       'row'    => '',
               'type'    => 'radio',
               'valList' => array($sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_ativo']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_ativo']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_ativo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_ativo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_ativo']['labList'] = $aLabel;
          }
   }

          //----- endereco
   function ajax_return_values_endereco($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("endereco", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->endereco);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['endereco'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- endereco_comp
   function ajax_return_values_endereco_comp($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("endereco_comp", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->endereco_comp);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['endereco_comp'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- bairro
   function ajax_return_values_bairro($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bairro", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bairro);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bairro'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- id_municipio
   function ajax_return_values_id_municipio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_municipio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_municipio);
              $aLookup = array();
              $this->_tmp_lookup_id_municipio = $this->id_municipio;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_municipio, nm_municipio from municipio order by 2";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_municipio\"";
          if (isset($this->NM_ajax_info['select_html']['id_municipio']) && !empty($this->NM_ajax_info['select_html']['id_municipio']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_municipio'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_municipio == $sValue)
                  {
                      $this->_tmp_lookup_id_municipio = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_municipio'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_municipio']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_municipio']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_municipio']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_municipio']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_municipio']['labList'] = $aLabel;
          }
   }

          //----- id_uf
   function ajax_return_values_id_uf($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_uf", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_uf);
              $aLookup = array();
              $this->_tmp_lookup_id_uf = $this->id_uf;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_uf, uf_nome from uf order by 2";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_uf\"";
          if (isset($this->NM_ajax_info['select_html']['id_uf']) && !empty($this->NM_ajax_info['select_html']['id_uf']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_uf'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_uf == $sValue)
                  {
                      $this->_tmp_lookup_id_uf = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_uf'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_uf']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_uf']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_uf']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_uf']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_uf']['labList'] = $aLabel;
          }
   }

          //----- id_pais
   function ajax_return_values_id_pais($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_pais", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_pais);
              $aLookup = array();
              $this->_tmp_lookup_id_pais = $this->id_pais;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_pais, pais_nm_pais_ter_ptb from pais order by 2";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_pais\"";
          if (isset($this->NM_ajax_info['select_html']['id_pais']) && !empty($this->NM_ajax_info['select_html']['id_pais']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_pais'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_pais == $sValue)
                  {
                      $this->_tmp_lookup_id_pais = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_pais'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_pais']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_pais']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_pais']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_pais']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_pais']['labList'] = $aLabel;
          }
   }

          //----- cep
   function ajax_return_values_cep($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cep", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cep);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cep'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- endereco_cob
   function ajax_return_values_endereco_cob($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("endereco_cob", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->endereco_cob);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['endereco_cob'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- endereco_comp_cob
   function ajax_return_values_endereco_comp_cob($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("endereco_comp_cob", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->endereco_comp_cob);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['endereco_comp_cob'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- bairro_cob
   function ajax_return_values_bairro_cob($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("bairro_cob", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->bairro_cob);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['bairro_cob'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- id_municipio_cob
   function ajax_return_values_id_municipio_cob($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_municipio_cob", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_municipio_cob);
              $aLookup = array();
              $this->_tmp_lookup_id_municipio_cob = $this->id_municipio_cob;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_municipio, nm_municipio from municipio order by 2";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_municipio_cob\"";
          if (isset($this->NM_ajax_info['select_html']['id_municipio_cob']) && !empty($this->NM_ajax_info['select_html']['id_municipio_cob']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_municipio_cob'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_municipio_cob == $sValue)
                  {
                      $this->_tmp_lookup_id_municipio_cob = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_municipio_cob'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_municipio_cob']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_municipio_cob']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_municipio_cob']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_municipio_cob']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_municipio_cob']['labList'] = $aLabel;
          }
   }

          //----- id_uf_cob
   function ajax_return_values_id_uf_cob($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_uf_cob", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_uf_cob);
              $aLookup = array();
              $this->_tmp_lookup_id_uf_cob = $this->id_uf_cob;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_uf, uf_nome from uf order by 2";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_uf_cob\"";
          if (isset($this->NM_ajax_info['select_html']['id_uf_cob']) && !empty($this->NM_ajax_info['select_html']['id_uf_cob']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_uf_cob'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_uf_cob == $sValue)
                  {
                      $this->_tmp_lookup_id_uf_cob = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_uf_cob'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_uf_cob']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_uf_cob']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_uf_cob']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_uf_cob']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_uf_cob']['labList'] = $aLabel;
          }
   }

          //----- id_pais_cob
   function ajax_return_values_id_pais_cob($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("id_pais_cob", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->id_pais_cob);
              $aLookup = array();
              $this->_tmp_lookup_id_pais_cob = $this->id_pais_cob;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_pais, pais_nm_pais_ter_ptb from pais order by 2";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"id_pais_cob\"";
          if (isset($this->NM_ajax_info['select_html']['id_pais_cob']) && !empty($this->NM_ajax_info['select_html']['id_pais_cob']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['id_pais_cob'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->id_pais_cob == $sValue)
                  {
                      $this->_tmp_lookup_id_pais_cob = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['id_pais_cob'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['id_pais_cob']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['id_pais_cob']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['id_pais_cob']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['id_pais_cob']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['id_pais_cob']['labList'] = $aLabel;
          }
   }

          //----- cep_cob
   function ajax_return_values_cep_cob($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cep_cob", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cep_cob);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cep_cob'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- rg
   function ajax_return_values_rg($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rg", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rg);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['rg'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- rg_uf_emissor
   function ajax_return_values_rg_uf_emissor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rg_uf_emissor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rg_uf_emissor);
              $aLookup = array();
              $this->_tmp_lookup_rg_uf_emissor = $this->rg_uf_emissor;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_rg_uf_emissor']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_rg_uf_emissor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_rg_uf_emissor']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_rg_uf_emissor'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_rg_uf_emissor'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_uf, uf_nome from uf order by 2";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_rg_uf_emissor'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"rg_uf_emissor\"";
          if (isset($this->NM_ajax_info['select_html']['rg_uf_emissor']) && !empty($this->NM_ajax_info['select_html']['rg_uf_emissor']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['rg_uf_emissor'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->rg_uf_emissor == $sValue)
                  {
                      $this->_tmp_lookup_rg_uf_emissor = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['rg_uf_emissor'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['rg_uf_emissor']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['rg_uf_emissor']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['rg_uf_emissor']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['rg_uf_emissor']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['rg_uf_emissor']['labList'] = $aLabel;
          }
   }

          //----- rg_orgao_emissor
   function ajax_return_values_rg_orgao_emissor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rg_orgao_emissor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rg_orgao_emissor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['rg_orgao_emissor'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- rg_dt_emissao
   function ajax_return_values_rg_dt_emissao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rg_dt_emissao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rg_dt_emissao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['rg_dt_emissao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- passaporte
   function ajax_return_values_passaporte($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("passaporte", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->passaporte);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['passaporte'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- passaporte_pais_origem
   function ajax_return_values_passaporte_pais_origem($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("passaporte_pais_origem", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->passaporte_pais_origem);
              $aLookup = array();
              $this->_tmp_lookup_passaporte_pais_origem = $this->passaporte_pais_origem;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_passaporte_pais_origem']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_passaporte_pais_origem'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_passaporte_pais_origem']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_passaporte_pais_origem'] = array(); 
}
$aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string('') => form_public_pessoa_fisica_mob_pack_protect_string(''));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_passaporte_pais_origem'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_cpf = $this->cpf;
   $old_value_dt_nasc = $this->dt_nasc;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_cep = $this->cep;
   $old_value_cep_cob = $this->cep_cob;
   $old_value_rg_dt_emissao = $this->rg_dt_emissao;
   $old_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $old_value_cnh_dt_validade = $this->cnh_dt_validade;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_cpf = $this->cpf;
   $unformatted_value_dt_nasc = $this->dt_nasc;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_cep = $this->cep;
   $unformatted_value_cep_cob = $this->cep_cob;
   $unformatted_value_rg_dt_emissao = $this->rg_dt_emissao;
   $unformatted_value_passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $unformatted_value_cnh_dt_validade = $this->cnh_dt_validade;

   $nm_comando = "select id_pais, pais_nm_pais_ter_ptb from pais order by 2";

   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->cpf = $old_value_cpf;
   $this->dt_nasc = $old_value_dt_nasc;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->cep = $old_value_cep;
   $this->cep_cob = $old_value_cep_cob;
   $this->rg_dt_emissao = $old_value_rg_dt_emissao;
   $this->passaporte_dt_emissao = $old_value_passaporte_dt_emissao;
   $this->cnh_dt_validade = $old_value_cnh_dt_validade;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_public_pessoa_fisica_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_passaporte_pais_origem'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"passaporte_pais_origem\"";
          if (isset($this->NM_ajax_info['select_html']['passaporte_pais_origem']) && !empty($this->NM_ajax_info['select_html']['passaporte_pais_origem']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['passaporte_pais_origem'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->passaporte_pais_origem == $sValue)
                  {
                      $this->_tmp_lookup_passaporte_pais_origem = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['passaporte_pais_origem'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['passaporte_pais_origem']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['passaporte_pais_origem']['valList'][$i] = form_public_pessoa_fisica_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['passaporte_pais_origem']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['passaporte_pais_origem']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['passaporte_pais_origem']['labList'] = $aLabel;
          }
   }

          //----- passaporte_dt_emissao
   function ajax_return_values_passaporte_dt_emissao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("passaporte_dt_emissao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->passaporte_dt_emissao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['passaporte_dt_emissao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cnh
   function ajax_return_values_cnh($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cnh", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cnh);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cnh'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cnh_categoria
   function ajax_return_values_cnh_categoria($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cnh_categoria", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cnh_categoria);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cnh_categoria'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cnh_dt_validade
   function ajax_return_values_cnh_dt_validade($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cnh_dt_validade", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cnh_dt_validade);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cnh_dt_validade'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros

   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $SC_tem_cmp_update = true; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Db->BeginTrans(); 
          $this->Ini->sc_tem_trans_banco = true; 
      } 
      $NM_val_form['id_pessoa_fisica'] = $this->id_pessoa_fisica;
      $NM_val_form['cpf'] = $this->cpf;
      $NM_val_form['nome'] = $this->nome;
      $NM_val_form['sexo'] = $this->sexo;
      $NM_val_form['dt_nasc'] = $this->dt_nasc;
      $NM_val_form['nacionalidade'] = $this->nacionalidade;
      $NM_val_form['naturalidade'] = $this->naturalidade;
      $NM_val_form['id_tipo_estado_civil'] = $this->id_tipo_estado_civil;
      $NM_val_form['id_tipo_escolaridade'] = $this->id_tipo_escolaridade;
      $NM_val_form['id_tipo_sanguineo'] = $this->id_tipo_sanguineo;
      $NM_val_form['profissao'] = $this->profissao;
      $NM_val_form['aposentado'] = $this->aposentado;
      $NM_val_form['id_tipo_vinculo'] = $this->id_tipo_vinculo;
      $NM_val_form['obs'] = $this->obs;
      $NM_val_form['id_ativo'] = $this->id_ativo;
      $NM_val_form['endereco'] = $this->endereco;
      $NM_val_form['endereco_comp'] = $this->endereco_comp;
      $NM_val_form['bairro'] = $this->bairro;
      $NM_val_form['id_municipio'] = $this->id_municipio;
      $NM_val_form['id_uf'] = $this->id_uf;
      $NM_val_form['id_pais'] = $this->id_pais;
      $NM_val_form['cep'] = $this->cep;
      $NM_val_form['endereco_cob'] = $this->endereco_cob;
      $NM_val_form['endereco_comp_cob'] = $this->endereco_comp_cob;
      $NM_val_form['bairro_cob'] = $this->bairro_cob;
      $NM_val_form['id_municipio_cob'] = $this->id_municipio_cob;
      $NM_val_form['id_uf_cob'] = $this->id_uf_cob;
      $NM_val_form['id_pais_cob'] = $this->id_pais_cob;
      $NM_val_form['cep_cob'] = $this->cep_cob;
      $NM_val_form['rg'] = $this->rg;
      $NM_val_form['rg_uf_emissor'] = $this->rg_uf_emissor;
      $NM_val_form['rg_orgao_emissor'] = $this->rg_orgao_emissor;
      $NM_val_form['rg_dt_emissao'] = $this->rg_dt_emissao;
      $NM_val_form['passaporte'] = $this->passaporte;
      $NM_val_form['passaporte_pais_origem'] = $this->passaporte_pais_origem;
      $NM_val_form['passaporte_dt_emissao'] = $this->passaporte_dt_emissao;
      $NM_val_form['cnh'] = $this->cnh;
      $NM_val_form['cnh_categoria'] = $this->cnh_categoria;
      $NM_val_form['cnh_dt_validade'] = $this->cnh_dt_validade;
      $NM_val_form['dt_cadastro'] = $this->dt_cadastro;
      $NM_val_form['dt_atualiza'] = $this->dt_atualiza;
      $NM_val_form['usu_cadastro'] = $this->usu_cadastro;
      $NM_val_form['usu_atualiza'] = $this->usu_atualiza;
      if ($this->id_pessoa_fisica == "")  
      { 
          $this->id_pessoa_fisica = 0;
      } 
      if ($this->id_tipo_vinculo == "")  
      { 
          $this->id_tipo_vinculo = 0;
          $this->sc_force_zero[] = 'id_tipo_vinculo';
      } 
      if ($this->id_municipio == "")  
      { 
          $this->id_municipio = 0;
          $this->sc_force_zero[] = 'id_municipio';
      } 
      if ($this->id_uf == "")  
      { 
          $this->id_uf = 0;
          $this->sc_force_zero[] = 'id_uf';
      } 
      if ($this->id_pais == "")  
      { 
          $this->id_pais = 0;
          $this->sc_force_zero[] = 'id_pais';
      } 
      if ($this->cep == "")  
      { 
          $this->cep = 0;
          $this->sc_force_zero[] = 'cep';
      } 
      if ($this->id_municipio_cob == "")  
      { 
          $this->id_municipio_cob = 0;
          $this->sc_force_zero[] = 'id_municipio_cob';
      } 
      if ($this->id_uf_cob == "")  
      { 
          $this->id_uf_cob = 0;
          $this->sc_force_zero[] = 'id_uf_cob';
      } 
      if ($this->id_pais_cob == "")  
      { 
          $this->id_pais_cob = 0;
          $this->sc_force_zero[] = 'id_pais_cob';
      } 
      if ($this->cep_cob == "")  
      { 
          $this->cep_cob = 0;
          $this->sc_force_zero[] = 'cep_cob';
      } 
      if ($this->id_tipo_estado_civil == "")  
      { 
          $this->id_tipo_estado_civil = 0;
          $this->sc_force_zero[] = 'id_tipo_estado_civil';
      } 
      if ($this->id_tipo_escolaridade == "")  
      { 
          $this->id_tipo_escolaridade = 0;
          $this->sc_force_zero[] = 'id_tipo_escolaridade';
      } 
      if ($this->id_tipo_sanguineo == "")  
      { 
          $this->id_tipo_sanguineo = 0;
          $this->sc_force_zero[] = 'id_tipo_sanguineo';
      } 
      if ($this->cpf == "")  
      { 
          $this->cpf = 0;
          $this->sc_force_zero[] = 'cpf';
      } 
      if ($this->passaporte_pais_origem == "")  
      { 
          $this->passaporte_pais_origem = 0;
          $this->sc_force_zero[] = 'passaporte_pais_origem';
      } 
      if ($this->nacionalidade == "")  
      { 
          $this->nacionalidade = 0;
          $this->sc_force_zero[] = 'nacionalidade';
      } 
      if ($this->nmgp_opcao == "alterar") 
      {
      if ($this->id_ativo == "")  
      { 
          $this->id_ativo = 0;
          $this->sc_force_zero[] = 'id_ativo';
      } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
      }
      if ($this->nmgp_opcao == "alterar") 
      {
      }
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->nome_before_qstr = $this->nome;
          $this->nome = substr($this->Db->qstr($this->nome), 1, -1); 
          if ($this->nome == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nome = "null"; 
              $NM_val_null[] = "nome";
          } 
          $this->endereco_before_qstr = $this->endereco;
          $this->endereco = substr($this->Db->qstr($this->endereco), 1, -1); 
          if ($this->endereco == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->endereco = "null"; 
              $NM_val_null[] = "endereco";
          } 
          $this->endereco_comp_before_qstr = $this->endereco_comp;
          $this->endereco_comp = substr($this->Db->qstr($this->endereco_comp), 1, -1); 
          if ($this->endereco_comp == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->endereco_comp = "null"; 
              $NM_val_null[] = "endereco_comp";
          } 
          $this->bairro_before_qstr = $this->bairro;
          $this->bairro = substr($this->Db->qstr($this->bairro), 1, -1); 
          if ($this->bairro == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->bairro = "null"; 
              $NM_val_null[] = "bairro";
          } 
          $this->endereco_cob_before_qstr = $this->endereco_cob;
          $this->endereco_cob = substr($this->Db->qstr($this->endereco_cob), 1, -1); 
          if ($this->endereco_cob == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->endereco_cob = "null"; 
              $NM_val_null[] = "endereco_cob";
          } 
          $this->endereco_comp_cob_before_qstr = $this->endereco_comp_cob;
          $this->endereco_comp_cob = substr($this->Db->qstr($this->endereco_comp_cob), 1, -1); 
          if ($this->endereco_comp_cob == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->endereco_comp_cob = "null"; 
              $NM_val_null[] = "endereco_comp_cob";
          } 
          $this->bairro_cob_before_qstr = $this->bairro_cob;
          $this->bairro_cob = substr($this->Db->qstr($this->bairro_cob), 1, -1); 
          if ($this->bairro_cob == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->bairro_cob = "null"; 
              $NM_val_null[] = "bairro_cob";
          } 
          if ($this->dt_nasc == "")  
          { 
              $this->dt_nasc = "null"; 
              $NM_val_null[] = "dt_nasc";
          } 
          $this->sexo_before_qstr = $this->sexo;
          $this->sexo = substr($this->Db->qstr($this->sexo), 1, -1); 
          if ($this->sexo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->sexo = "null"; 
              $NM_val_null[] = "sexo";
          } 
          $this->profissao_before_qstr = $this->profissao;
          $this->profissao = substr($this->Db->qstr($this->profissao), 1, -1); 
          if ($this->profissao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->profissao = "null"; 
              $NM_val_null[] = "profissao";
          } 
          $this->aposentado_before_qstr = $this->aposentado;
          $this->aposentado = substr($this->Db->qstr($this->aposentado), 1, -1); 
          if ($this->aposentado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->aposentado = "null"; 
              $NM_val_null[] = "aposentado";
          } 
          $this->rg_before_qstr = $this->rg;
          $this->rg = substr($this->Db->qstr($this->rg), 1, -1); 
          if ($this->rg == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rg = "null"; 
              $NM_val_null[] = "rg";
          } 
          $this->rg_orgao_emissor_before_qstr = $this->rg_orgao_emissor;
          $this->rg_orgao_emissor = substr($this->Db->qstr($this->rg_orgao_emissor), 1, -1); 
          if ($this->rg_orgao_emissor == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rg_orgao_emissor = "null"; 
              $NM_val_null[] = "rg_orgao_emissor";
          } 
          $this->rg_uf_emissor_before_qstr = $this->rg_uf_emissor;
          $this->rg_uf_emissor = substr($this->Db->qstr($this->rg_uf_emissor), 1, -1); 
          if ($this->rg_uf_emissor == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rg_uf_emissor = "null"; 
              $NM_val_null[] = "rg_uf_emissor";
          } 
          if ($this->rg_dt_emissao == "")  
          { 
              $this->rg_dt_emissao = "null"; 
              $NM_val_null[] = "rg_dt_emissao";
          } 
          $this->passaporte_before_qstr = $this->passaporte;
          $this->passaporte = substr($this->Db->qstr($this->passaporte), 1, -1); 
          if ($this->passaporte == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->passaporte = "null"; 
              $NM_val_null[] = "passaporte";
          } 
          if ($this->passaporte_dt_emissao == "")  
          { 
              $this->passaporte_dt_emissao = "null"; 
              $NM_val_null[] = "passaporte_dt_emissao";
          } 
          $this->naturalidade_before_qstr = $this->naturalidade;
          $this->naturalidade = substr($this->Db->qstr($this->naturalidade), 1, -1); 
          if ($this->naturalidade == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->naturalidade = "null"; 
              $NM_val_null[] = "naturalidade";
          } 
          $this->cnh_before_qstr = $this->cnh;
          $this->cnh = substr($this->Db->qstr($this->cnh), 1, -1); 
          if ($this->cnh == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cnh = "null"; 
              $NM_val_null[] = "cnh";
          } 
          if ($this->cnh_dt_validade == "")  
          { 
              $this->cnh_dt_validade = "null"; 
              $NM_val_null[] = "cnh_dt_validade";
          } 
          $this->cnh_categoria_before_qstr = $this->cnh_categoria;
          $this->cnh_categoria = substr($this->Db->qstr($this->cnh_categoria), 1, -1); 
          if ($this->cnh_categoria == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cnh_categoria = "null"; 
              $NM_val_null[] = "cnh_categoria";
          } 
          $this->obs_before_qstr = $this->obs;
          $this->obs = substr($this->Db->qstr($this->obs), 1, -1); 
          if ($this->obs == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->obs = "null"; 
              $NM_val_null[] = "obs";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
              if ($this->dt_cadastro == "")  
              { 
                  $this->dt_cadastro = "null"; 
                  $NM_val_null[] = "dt_cadastro";
              } 
          }
          if ($this->dt_atualiza == "")  
          { 
              $this->dt_atualiza = "null"; 
              $NM_val_null[] = "dt_atualiza";
          } 
          $this->usu_cadastro_before_qstr = $this->usu_cadastro;
          $this->usu_cadastro = substr($this->Db->qstr($this->usu_cadastro), 1, -1); 
          if ($this->nmgp_opcao == "alterar") 
          {
              if ($this->usu_cadastro == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
              { 
                  $this->usu_cadastro = "null"; 
                  $NM_val_null[] = "usu_cadastro";
              } 
          }
          $this->usu_atualiza_before_qstr = $this->usu_atualiza;
          $this->usu_atualiza = substr($this->Db->qstr($this->usu_atualiza), 1, -1); 
          if ($this->usu_atualiza == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->usu_atualiza = "null"; 
              $NM_val_null[] = "usu_atualiza";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_public_pessoa_fisica_mob_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET nome = '$this->nome', id_tipo_vinculo = $this->id_tipo_vinculo, endereco = '$this->endereco', endereco_comp = '$this->endereco_comp', bairro = '$this->bairro', id_municipio = $this->id_municipio, id_uf = $this->id_uf, id_pais = $this->id_pais, cep = $this->cep, endereco_cob = '$this->endereco_cob', endereco_comp_cob = '$this->endereco_comp_cob', bairro_cob = '$this->bairro_cob', id_municipio_cob = $this->id_municipio_cob, id_uf_cob = $this->id_uf_cob, id_pais_cob = $this->id_pais_cob, cep_cob = $this->cep_cob, dt_nasc = #$this->dt_nasc#, sexo = '$this->sexo', id_tipo_estado_civil = $this->id_tipo_estado_civil, id_tipo_escolaridade = $this->id_tipo_escolaridade, id_tipo_sanguineo = $this->id_tipo_sanguineo, profissao = '$this->profissao', aposentado = '$this->aposentado', cpf = $this->cpf, rg = '$this->rg', rg_orgao_emissor = '$this->rg_orgao_emissor', rg_uf_emissor = '$this->rg_uf_emissor', rg_dt_emissao = #$this->rg_dt_emissao#, passaporte = '$this->passaporte', passaporte_dt_emissao = #$this->passaporte_dt_emissao#, passaporte_pais_origem = $this->passaporte_pais_origem, nacionalidade = $this->nacionalidade, naturalidade = '$this->naturalidade', cnh = '$this->cnh', cnh_dt_validade = #$this->cnh_dt_validade#, cnh_categoria = '$this->cnh_categoria', obs = '$this->obs', id_ativo = $this->id_ativo";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET nome = '$this->nome', id_tipo_vinculo = $this->id_tipo_vinculo, endereco = '$this->endereco', endereco_comp = '$this->endereco_comp', bairro = '$this->bairro', id_municipio = $this->id_municipio, id_uf = $this->id_uf, id_pais = $this->id_pais, cep = $this->cep, endereco_cob = '$this->endereco_cob', endereco_comp_cob = '$this->endereco_comp_cob', bairro_cob = '$this->bairro_cob', id_municipio_cob = $this->id_municipio_cob, id_uf_cob = $this->id_uf_cob, id_pais_cob = $this->id_pais_cob, cep_cob = $this->cep_cob, dt_nasc = " . $this->Ini->date_delim . $this->dt_nasc . $this->Ini->date_delim1 . ", sexo = '$this->sexo', id_tipo_estado_civil = $this->id_tipo_estado_civil, id_tipo_escolaridade = $this->id_tipo_escolaridade, id_tipo_sanguineo = $this->id_tipo_sanguineo, profissao = '$this->profissao', aposentado = '$this->aposentado', cpf = $this->cpf, rg = '$this->rg', rg_orgao_emissor = '$this->rg_orgao_emissor', rg_uf_emissor = '$this->rg_uf_emissor', rg_dt_emissao = " . $this->Ini->date_delim . $this->rg_dt_emissao . $this->Ini->date_delim1 . ", passaporte = '$this->passaporte', passaporte_dt_emissao = " . $this->Ini->date_delim . $this->passaporte_dt_emissao . $this->Ini->date_delim1 . ", passaporte_pais_origem = $this->passaporte_pais_origem, nacionalidade = $this->nacionalidade, naturalidade = '$this->naturalidade', cnh = '$this->cnh', cnh_dt_validade = " . $this->Ini->date_delim . $this->cnh_dt_validade . $this->Ini->date_delim1 . ", cnh_categoria = '$this->cnh_categoria', obs = '$this->obs', id_ativo = $this->id_ativo";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET nome = '$this->nome', id_tipo_vinculo = $this->id_tipo_vinculo, endereco = '$this->endereco', endereco_comp = '$this->endereco_comp', bairro = '$this->bairro', id_municipio = $this->id_municipio, id_uf = $this->id_uf, id_pais = $this->id_pais, cep = $this->cep, endereco_cob = '$this->endereco_cob', endereco_comp_cob = '$this->endereco_comp_cob', bairro_cob = '$this->bairro_cob', id_municipio_cob = $this->id_municipio_cob, id_uf_cob = $this->id_uf_cob, id_pais_cob = $this->id_pais_cob, cep_cob = $this->cep_cob, dt_nasc = " . $this->Ini->date_delim . $this->dt_nasc . $this->Ini->date_delim1 . ", sexo = '$this->sexo', id_tipo_estado_civil = $this->id_tipo_estado_civil, id_tipo_escolaridade = $this->id_tipo_escolaridade, id_tipo_sanguineo = $this->id_tipo_sanguineo, profissao = '$this->profissao', aposentado = '$this->aposentado', cpf = $this->cpf, rg = '$this->rg', rg_orgao_emissor = '$this->rg_orgao_emissor', rg_uf_emissor = '$this->rg_uf_emissor', rg_dt_emissao = " . $this->Ini->date_delim . $this->rg_dt_emissao . $this->Ini->date_delim1 . ", passaporte = '$this->passaporte', passaporte_dt_emissao = " . $this->Ini->date_delim . $this->passaporte_dt_emissao . $this->Ini->date_delim1 . ", passaporte_pais_origem = $this->passaporte_pais_origem, nacionalidade = $this->nacionalidade, naturalidade = '$this->naturalidade', cnh = '$this->cnh', cnh_dt_validade = " . $this->Ini->date_delim . $this->cnh_dt_validade . $this->Ini->date_delim1 . ", cnh_categoria = '$this->cnh_categoria', obs = '$this->obs', id_ativo = $this->id_ativo";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET nome = '$this->nome', id_tipo_vinculo = $this->id_tipo_vinculo, endereco = '$this->endereco', endereco_comp = '$this->endereco_comp', bairro = '$this->bairro', id_municipio = $this->id_municipio, id_uf = $this->id_uf, id_pais = $this->id_pais, cep = $this->cep, endereco_cob = '$this->endereco_cob', endereco_comp_cob = '$this->endereco_comp_cob', bairro_cob = '$this->bairro_cob', id_municipio_cob = $this->id_municipio_cob, id_uf_cob = $this->id_uf_cob, id_pais_cob = $this->id_pais_cob, cep_cob = $this->cep_cob, dt_nasc = EXTEND('$this->dt_nasc', YEAR TO DAY), sexo = '$this->sexo', id_tipo_estado_civil = $this->id_tipo_estado_civil, id_tipo_escolaridade = $this->id_tipo_escolaridade, id_tipo_sanguineo = $this->id_tipo_sanguineo, profissao = '$this->profissao', aposentado = '$this->aposentado', cpf = $this->cpf, rg = '$this->rg', rg_orgao_emissor = '$this->rg_orgao_emissor', rg_uf_emissor = '$this->rg_uf_emissor', rg_dt_emissao = EXTEND('$this->rg_dt_emissao', YEAR TO DAY), passaporte = '$this->passaporte', passaporte_dt_emissao = EXTEND('$this->passaporte_dt_emissao', YEAR TO DAY), passaporte_pais_origem = $this->passaporte_pais_origem, nacionalidade = $this->nacionalidade, naturalidade = '$this->naturalidade', cnh = '$this->cnh', cnh_dt_validade = EXTEND('$this->cnh_dt_validade', YEAR TO DAY), cnh_categoria = '$this->cnh_categoria', obs = '$this->obs', id_ativo = $this->id_ativo";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET nome = '$this->nome', id_tipo_vinculo = $this->id_tipo_vinculo, endereco = '$this->endereco', endereco_comp = '$this->endereco_comp', bairro = '$this->bairro', id_municipio = $this->id_municipio, id_uf = $this->id_uf, id_pais = $this->id_pais, cep = $this->cep, endereco_cob = '$this->endereco_cob', endereco_comp_cob = '$this->endereco_comp_cob', bairro_cob = '$this->bairro_cob', id_municipio_cob = $this->id_municipio_cob, id_uf_cob = $this->id_uf_cob, id_pais_cob = $this->id_pais_cob, cep_cob = $this->cep_cob, dt_nasc = " . $this->Ini->date_delim . $this->dt_nasc . $this->Ini->date_delim1 . ", sexo = '$this->sexo', id_tipo_estado_civil = $this->id_tipo_estado_civil, id_tipo_escolaridade = $this->id_tipo_escolaridade, id_tipo_sanguineo = $this->id_tipo_sanguineo, profissao = '$this->profissao', aposentado = '$this->aposentado', cpf = $this->cpf, rg = '$this->rg', rg_orgao_emissor = '$this->rg_orgao_emissor', rg_uf_emissor = '$this->rg_uf_emissor', rg_dt_emissao = " . $this->Ini->date_delim . $this->rg_dt_emissao . $this->Ini->date_delim1 . ", passaporte = '$this->passaporte', passaporte_dt_emissao = " . $this->Ini->date_delim . $this->passaporte_dt_emissao . $this->Ini->date_delim1 . ", passaporte_pais_origem = $this->passaporte_pais_origem, nacionalidade = $this->nacionalidade, naturalidade = '$this->naturalidade', cnh = '$this->cnh', cnh_dt_validade = " . $this->Ini->date_delim . $this->cnh_dt_validade . $this->Ini->date_delim1 . ", cnh_categoria = '$this->cnh_categoria', obs = '$this->obs', id_ativo = $this->id_ativo";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET nome = '$this->nome', id_tipo_vinculo = $this->id_tipo_vinculo, endereco = '$this->endereco', endereco_comp = '$this->endereco_comp', bairro = '$this->bairro', id_municipio = $this->id_municipio, id_uf = $this->id_uf, id_pais = $this->id_pais, cep = $this->cep, endereco_cob = '$this->endereco_cob', endereco_comp_cob = '$this->endereco_comp_cob', bairro_cob = '$this->bairro_cob', id_municipio_cob = $this->id_municipio_cob, id_uf_cob = $this->id_uf_cob, id_pais_cob = $this->id_pais_cob, cep_cob = $this->cep_cob, dt_nasc = " . $this->Ini->date_delim . $this->dt_nasc . $this->Ini->date_delim1 . ", sexo = '$this->sexo', id_tipo_estado_civil = $this->id_tipo_estado_civil, id_tipo_escolaridade = $this->id_tipo_escolaridade, id_tipo_sanguineo = $this->id_tipo_sanguineo, profissao = '$this->profissao', aposentado = '$this->aposentado', cpf = $this->cpf, rg = '$this->rg', rg_orgao_emissor = '$this->rg_orgao_emissor', rg_uf_emissor = '$this->rg_uf_emissor', rg_dt_emissao = " . $this->Ini->date_delim . $this->rg_dt_emissao . $this->Ini->date_delim1 . ", passaporte = '$this->passaporte', passaporte_dt_emissao = " . $this->Ini->date_delim . $this->passaporte_dt_emissao . $this->Ini->date_delim1 . ", passaporte_pais_origem = $this->passaporte_pais_origem, nacionalidade = $this->nacionalidade, naturalidade = '$this->naturalidade', cnh = '$this->cnh', cnh_dt_validade = " . $this->Ini->date_delim . $this->cnh_dt_validade . $this->Ini->date_delim1 . ", cnh_categoria = '$this->cnh_categoria', obs = '$this->obs', id_ativo = $this->id_ativo";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET nome = '$this->nome', id_tipo_vinculo = $this->id_tipo_vinculo, endereco = '$this->endereco', endereco_comp = '$this->endereco_comp', bairro = '$this->bairro', id_municipio = $this->id_municipio, id_uf = $this->id_uf, id_pais = $this->id_pais, cep = $this->cep, endereco_cob = '$this->endereco_cob', endereco_comp_cob = '$this->endereco_comp_cob', bairro_cob = '$this->bairro_cob', id_municipio_cob = $this->id_municipio_cob, id_uf_cob = $this->id_uf_cob, id_pais_cob = $this->id_pais_cob, cep_cob = $this->cep_cob, dt_nasc = " . $this->Ini->date_delim . $this->dt_nasc . $this->Ini->date_delim1 . ", sexo = '$this->sexo', id_tipo_estado_civil = $this->id_tipo_estado_civil, id_tipo_escolaridade = $this->id_tipo_escolaridade, id_tipo_sanguineo = $this->id_tipo_sanguineo, profissao = '$this->profissao', aposentado = '$this->aposentado', cpf = $this->cpf, rg = '$this->rg', rg_orgao_emissor = '$this->rg_orgao_emissor', rg_uf_emissor = '$this->rg_uf_emissor', rg_dt_emissao = " . $this->Ini->date_delim . $this->rg_dt_emissao . $this->Ini->date_delim1 . ", passaporte = '$this->passaporte', passaporte_dt_emissao = " . $this->Ini->date_delim . $this->passaporte_dt_emissao . $this->Ini->date_delim1 . ", passaporte_pais_origem = $this->passaporte_pais_origem, nacionalidade = $this->nacionalidade, naturalidade = '$this->naturalidade', cnh = '$this->cnh', cnh_dt_validade = " . $this->Ini->date_delim . $this->cnh_dt_validade . $this->Ini->date_delim1 . ", cnh_categoria = '$this->cnh_categoria', obs = '$this->obs', id_ativo = $this->id_ativo";  
              } 
              if (isset($NM_val_form['dt_cadastro']) && $NM_val_form['dt_cadastro'] != $this->nmgp_dados_select['dt_cadastro']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $comando        .= " dt_cadastro = #$this->dt_cadastro#"; 
                  } 
                  else 
                  { 
                      $comando        .= " dt_cadastro = " . $this->Ini->date_delim . $this->dt_cadastro . $this->Ini->date_delim1 . ""; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $comando_oracle        .= " dt_cadastro = EXTEND('" . $this->dt_cadastro . "', YEAR TO FRACTION)"; 
                  } 
                  else
                  { 
                      $comando_oracle        .= " dt_cadastro = " . $this->Ini->date_delim . $this->dt_cadastro . $this->Ini->date_delim1 . ""; 
                  } 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['dt_atualiza']) && $NM_val_form['dt_atualiza'] != $this->nmgp_dados_select['dt_atualiza']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $comando        .= " dt_atualiza = #$this->dt_atualiza#"; 
                  } 
                  else 
                  { 
                      $comando        .= " dt_atualiza = " . $this->Ini->date_delim . $this->dt_atualiza . $this->Ini->date_delim1 . ""; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $comando_oracle        .= " dt_atualiza = EXTEND('" . $this->dt_atualiza . "', YEAR TO FRACTION)"; 
                  } 
                  else
                  { 
                      $comando_oracle        .= " dt_atualiza = " . $this->Ini->date_delim . $this->dt_atualiza . $this->Ini->date_delim1 . ""; 
                  } 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['usu_cadastro']) && $NM_val_form['usu_cadastro'] != $this->nmgp_dados_select['usu_cadastro']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " usu_cadastro = '$this->usu_cadastro'"; 
                  $comando_oracle        .= " usu_cadastro = '$this->usu_cadastro'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['usu_atualiza']) && $NM_val_form['usu_atualiza'] != $this->nmgp_dados_select['usu_atualiza']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " usu_atualiza = '$this->usu_atualiza'"; 
                  $comando_oracle        .= " usu_atualiza = '$this->usu_atualiza'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE id_pessoa_fisica = $this->id_pessoa_fisica ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE id_pessoa_fisica = $this->id_pessoa_fisica ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE id_pessoa_fisica = $this->id_pessoa_fisica ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE id_pessoa_fisica = $this->id_pessoa_fisica ";  
              }  
              else  
              {
                  $comando .= " WHERE id_pessoa_fisica = $this->id_pessoa_fisica ";  
              }  
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              if ($SC_ex_update || $SC_tem_cmp_update)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg(), true); 
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $this->Db->ErrorMsg();  
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_public_pessoa_fisica_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
          $this->nome = $this->nome_before_qstr;
          $this->endereco = $this->endereco_before_qstr;
          $this->endereco_comp = $this->endereco_comp_before_qstr;
          $this->bairro = $this->bairro_before_qstr;
          $this->endereco_cob = $this->endereco_cob_before_qstr;
          $this->endereco_comp_cob = $this->endereco_comp_cob_before_qstr;
          $this->bairro_cob = $this->bairro_cob_before_qstr;
          $this->sexo = $this->sexo_before_qstr;
          $this->profissao = $this->profissao_before_qstr;
          $this->aposentado = $this->aposentado_before_qstr;
          $this->rg = $this->rg_before_qstr;
          $this->rg_orgao_emissor = $this->rg_orgao_emissor_before_qstr;
          $this->rg_uf_emissor = $this->rg_uf_emissor_before_qstr;
          $this->passaporte = $this->passaporte_before_qstr;
          $this->naturalidade = $this->naturalidade_before_qstr;
          $this->cnh = $this->cnh_before_qstr;
          $this->cnh_categoria = $this->cnh_categoria_before_qstr;
          $this->obs = $this->obs_before_qstr;
          $this->usu_cadastro = $this->usu_cadastro_before_qstr;
          $this->usu_atualiza = $this->usu_atualiza_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['id_pessoa_fisica'])) { $this->id_pessoa_fisica = $NM_val_form['id_pessoa_fisica']; }
              elseif (isset($this->id_pessoa_fisica)) { $this->nm_limpa_alfa($this->id_pessoa_fisica); }
              if     (isset($NM_val_form) && isset($NM_val_form['nome'])) { $this->nome = $NM_val_form['nome']; }
              elseif (isset($this->nome)) { $this->nm_limpa_alfa($this->nome); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_tipo_vinculo'])) { $this->id_tipo_vinculo = $NM_val_form['id_tipo_vinculo']; }
              elseif (isset($this->id_tipo_vinculo)) { $this->nm_limpa_alfa($this->id_tipo_vinculo); }
              if     (isset($NM_val_form) && isset($NM_val_form['endereco'])) { $this->endereco = $NM_val_form['endereco']; }
              elseif (isset($this->endereco)) { $this->nm_limpa_alfa($this->endereco); }
              if     (isset($NM_val_form) && isset($NM_val_form['endereco_comp'])) { $this->endereco_comp = $NM_val_form['endereco_comp']; }
              elseif (isset($this->endereco_comp)) { $this->nm_limpa_alfa($this->endereco_comp); }
              if     (isset($NM_val_form) && isset($NM_val_form['bairro'])) { $this->bairro = $NM_val_form['bairro']; }
              elseif (isset($this->bairro)) { $this->nm_limpa_alfa($this->bairro); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_municipio'])) { $this->id_municipio = $NM_val_form['id_municipio']; }
              elseif (isset($this->id_municipio)) { $this->nm_limpa_alfa($this->id_municipio); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_uf'])) { $this->id_uf = $NM_val_form['id_uf']; }
              elseif (isset($this->id_uf)) { $this->nm_limpa_alfa($this->id_uf); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_pais'])) { $this->id_pais = $NM_val_form['id_pais']; }
              elseif (isset($this->id_pais)) { $this->nm_limpa_alfa($this->id_pais); }
              if     (isset($NM_val_form) && isset($NM_val_form['cep'])) { $this->cep = $NM_val_form['cep']; }
              elseif (isset($this->cep)) { $this->nm_limpa_alfa($this->cep); }
              if     (isset($NM_val_form) && isset($NM_val_form['endereco_cob'])) { $this->endereco_cob = $NM_val_form['endereco_cob']; }
              elseif (isset($this->endereco_cob)) { $this->nm_limpa_alfa($this->endereco_cob); }
              if     (isset($NM_val_form) && isset($NM_val_form['endereco_comp_cob'])) { $this->endereco_comp_cob = $NM_val_form['endereco_comp_cob']; }
              elseif (isset($this->endereco_comp_cob)) { $this->nm_limpa_alfa($this->endereco_comp_cob); }
              if     (isset($NM_val_form) && isset($NM_val_form['bairro_cob'])) { $this->bairro_cob = $NM_val_form['bairro_cob']; }
              elseif (isset($this->bairro_cob)) { $this->nm_limpa_alfa($this->bairro_cob); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_municipio_cob'])) { $this->id_municipio_cob = $NM_val_form['id_municipio_cob']; }
              elseif (isset($this->id_municipio_cob)) { $this->nm_limpa_alfa($this->id_municipio_cob); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_uf_cob'])) { $this->id_uf_cob = $NM_val_form['id_uf_cob']; }
              elseif (isset($this->id_uf_cob)) { $this->nm_limpa_alfa($this->id_uf_cob); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_pais_cob'])) { $this->id_pais_cob = $NM_val_form['id_pais_cob']; }
              elseif (isset($this->id_pais_cob)) { $this->nm_limpa_alfa($this->id_pais_cob); }
              if     (isset($NM_val_form) && isset($NM_val_form['cep_cob'])) { $this->cep_cob = $NM_val_form['cep_cob']; }
              elseif (isset($this->cep_cob)) { $this->nm_limpa_alfa($this->cep_cob); }
              if     (isset($NM_val_form) && isset($NM_val_form['sexo'])) { $this->sexo = $NM_val_form['sexo']; }
              elseif (isset($this->sexo)) { $this->nm_limpa_alfa($this->sexo); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_tipo_estado_civil'])) { $this->id_tipo_estado_civil = $NM_val_form['id_tipo_estado_civil']; }
              elseif (isset($this->id_tipo_estado_civil)) { $this->nm_limpa_alfa($this->id_tipo_estado_civil); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_tipo_escolaridade'])) { $this->id_tipo_escolaridade = $NM_val_form['id_tipo_escolaridade']; }
              elseif (isset($this->id_tipo_escolaridade)) { $this->nm_limpa_alfa($this->id_tipo_escolaridade); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_tipo_sanguineo'])) { $this->id_tipo_sanguineo = $NM_val_form['id_tipo_sanguineo']; }
              elseif (isset($this->id_tipo_sanguineo)) { $this->nm_limpa_alfa($this->id_tipo_sanguineo); }
              if     (isset($NM_val_form) && isset($NM_val_form['profissao'])) { $this->profissao = $NM_val_form['profissao']; }
              elseif (isset($this->profissao)) { $this->nm_limpa_alfa($this->profissao); }
              if     (isset($NM_val_form) && isset($NM_val_form['aposentado'])) { $this->aposentado = $NM_val_form['aposentado']; }
              elseif (isset($this->aposentado)) { $this->nm_limpa_alfa($this->aposentado); }
              if     (isset($NM_val_form) && isset($NM_val_form['cpf'])) { $this->cpf = $NM_val_form['cpf']; }
              elseif (isset($this->cpf)) { $this->nm_limpa_alfa($this->cpf); }
              if     (isset($NM_val_form) && isset($NM_val_form['rg'])) { $this->rg = $NM_val_form['rg']; }
              elseif (isset($this->rg)) { $this->nm_limpa_alfa($this->rg); }
              if     (isset($NM_val_form) && isset($NM_val_form['rg_orgao_emissor'])) { $this->rg_orgao_emissor = $NM_val_form['rg_orgao_emissor']; }
              elseif (isset($this->rg_orgao_emissor)) { $this->nm_limpa_alfa($this->rg_orgao_emissor); }
              if     (isset($NM_val_form) && isset($NM_val_form['rg_uf_emissor'])) { $this->rg_uf_emissor = $NM_val_form['rg_uf_emissor']; }
              elseif (isset($this->rg_uf_emissor)) { $this->nm_limpa_alfa($this->rg_uf_emissor); }
              if     (isset($NM_val_form) && isset($NM_val_form['passaporte'])) { $this->passaporte = $NM_val_form['passaporte']; }
              elseif (isset($this->passaporte)) { $this->nm_limpa_alfa($this->passaporte); }
              if     (isset($NM_val_form) && isset($NM_val_form['passaporte_pais_origem'])) { $this->passaporte_pais_origem = $NM_val_form['passaporte_pais_origem']; }
              elseif (isset($this->passaporte_pais_origem)) { $this->nm_limpa_alfa($this->passaporte_pais_origem); }
              if     (isset($NM_val_form) && isset($NM_val_form['nacionalidade'])) { $this->nacionalidade = $NM_val_form['nacionalidade']; }
              elseif (isset($this->nacionalidade)) { $this->nm_limpa_alfa($this->nacionalidade); }
              if     (isset($NM_val_form) && isset($NM_val_form['naturalidade'])) { $this->naturalidade = $NM_val_form['naturalidade']; }
              elseif (isset($this->naturalidade)) { $this->nm_limpa_alfa($this->naturalidade); }
              if     (isset($NM_val_form) && isset($NM_val_form['cnh'])) { $this->cnh = $NM_val_form['cnh']; }
              elseif (isset($this->cnh)) { $this->nm_limpa_alfa($this->cnh); }
              if     (isset($NM_val_form) && isset($NM_val_form['cnh_categoria'])) { $this->cnh_categoria = $NM_val_form['cnh_categoria']; }
              elseif (isset($this->cnh_categoria)) { $this->nm_limpa_alfa($this->cnh_categoria); }
              if     (isset($NM_val_form) && isset($NM_val_form['obs'])) { $this->obs = $NM_val_form['obs']; }
              elseif (isset($this->obs)) { $this->nm_limpa_alfa($this->obs); }
              if     (isset($NM_val_form) && isset($NM_val_form['id_ativo'])) { $this->id_ativo = $NM_val_form['id_ativo']; }
              elseif (isset($this->id_ativo)) { $this->nm_limpa_alfa($this->id_ativo); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('id_pessoa_fisica', 'cpf', 'nome', 'sexo', 'dt_nasc', 'nacionalidade', 'naturalidade', 'id_tipo_estado_civil', 'id_tipo_escolaridade', 'id_tipo_sanguineo', 'profissao', 'aposentado', 'id_tipo_vinculo', 'obs', 'id_ativo', 'endereco', 'endereco_comp', 'bairro', 'id_municipio', 'id_uf', 'id_pais', 'cep', 'endereco_cob', 'endereco_comp_cob', 'bairro_cob', 'id_municipio_cob', 'id_uf_cob', 'id_pais_cob', 'cep_cob', 'rg', 'rg_uf_emissor', 'rg_orgao_emissor', 'rg_dt_emissao', 'passaporte', 'passaporte_pais_origem', 'passaporte_dt_emissao', 'cnh', 'cnh_categoria', 'cnh_dt_validade'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela; 
          $comando = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela; 
          $rs = $this->Db->Execute($comando); 
          if ($rs === false && !$rs->EOF)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
              $this->NM_rollback_db(); 
              if ($this->NM_ajax_flag)
              {
                  form_public_pessoa_fisica_mob_pack_ajax_response();
              }
              exit; 
          }  
          $this->id_pessoa_fisica = $rs->fields[0] + 1;
          $rs->Close(); 
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_pkey']); 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_public_pessoa_fisica_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->id_ativo != "")
                  { 
                       $compl_insert     .= ", id_ativo";
                       $compl_insert_val .= ", $this->id_ativo";
                  } 
                  if ($this->dt_cadastro != "")
                  { 
                       $compl_insert     .= ", dt_cadastro";
                       $compl_insert_val .= ", #$this->dt_cadastro#";
                  } 
                  if ($this->usu_cadastro != "")
                  { 
                       $compl_insert     .= ", usu_cadastro";
                       $compl_insert_val .= ", '$this->usu_cadastro'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, dt_nasc, sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, rg_dt_emissao, passaporte, passaporte_dt_emissao, passaporte_pais_origem, nacionalidade, naturalidade, cnh, cnh_dt_validade, cnh_categoria, obs, dt_atualiza, usu_atualiza $compl_insert) VALUES ($this->id_pessoa_fisica, '$this->nome', $this->id_tipo_vinculo, '$this->endereco', '$this->endereco_comp', '$this->bairro', $this->id_municipio, $this->id_uf, $this->id_pais, $this->cep, '$this->endereco_cob', '$this->endereco_comp_cob', '$this->bairro_cob', $this->id_municipio_cob, $this->id_uf_cob, $this->id_pais_cob, $this->cep_cob, #$this->dt_nasc#, '$this->sexo', $this->id_tipo_estado_civil, $this->id_tipo_escolaridade, $this->id_tipo_sanguineo, '$this->profissao', '$this->aposentado', $this->cpf, '$this->rg', '$this->rg_orgao_emissor', '$this->rg_uf_emissor', #$this->rg_dt_emissao#, '$this->passaporte', #$this->passaporte_dt_emissao#, $this->passaporte_pais_origem, $this->nacionalidade, '$this->naturalidade', '$this->cnh', #$this->cnh_dt_validade#, '$this->cnh_categoria', '$this->obs', #$this->dt_atualiza#, '$this->usu_atualiza' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->id_ativo != "")
                  { 
                       $compl_insert     .= ", id_ativo";
                       $compl_insert_val .= ", $this->id_ativo";
                  } 
                  if ($this->dt_cadastro != "")
                  { 
                       $compl_insert     .= ", dt_cadastro";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->dt_cadastro . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->usu_cadastro != "")
                  { 
                       $compl_insert     .= ", usu_cadastro";
                       $compl_insert_val .= ", '$this->usu_cadastro'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, dt_nasc, sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, rg_dt_emissao, passaporte, passaporte_dt_emissao, passaporte_pais_origem, nacionalidade, naturalidade, cnh, cnh_dt_validade, cnh_categoria, obs, dt_atualiza, usu_atualiza $compl_insert) VALUES (" . $NM_seq_auto . "$this->id_pessoa_fisica, '$this->nome', $this->id_tipo_vinculo, '$this->endereco', '$this->endereco_comp', '$this->bairro', $this->id_municipio, $this->id_uf, $this->id_pais, $this->cep, '$this->endereco_cob', '$this->endereco_comp_cob', '$this->bairro_cob', $this->id_municipio_cob, $this->id_uf_cob, $this->id_pais_cob, $this->cep_cob, " . $this->Ini->date_delim . $this->dt_nasc . $this->Ini->date_delim1 . ", '$this->sexo', $this->id_tipo_estado_civil, $this->id_tipo_escolaridade, $this->id_tipo_sanguineo, '$this->profissao', '$this->aposentado', $this->cpf, '$this->rg', '$this->rg_orgao_emissor', '$this->rg_uf_emissor', " . $this->Ini->date_delim . $this->rg_dt_emissao . $this->Ini->date_delim1 . ", '$this->passaporte', " . $this->Ini->date_delim . $this->passaporte_dt_emissao . $this->Ini->date_delim1 . ", $this->passaporte_pais_origem, $this->nacionalidade, '$this->naturalidade', '$this->cnh', " . $this->Ini->date_delim . $this->cnh_dt_validade . $this->Ini->date_delim1 . ", '$this->cnh_categoria', '$this->obs', " . $this->Ini->date_delim . $this->dt_atualiza . $this->Ini->date_delim1 . ", '$this->usu_atualiza' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->id_ativo != "")
                  { 
                       $compl_insert     .= ", id_ativo";
                       $compl_insert_val .= ", $this->id_ativo";
                  } 
                  if ($this->dt_cadastro != "")
                  { 
                       $compl_insert     .= ", dt_cadastro";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->dt_cadastro . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->usu_cadastro != "")
                  { 
                       $compl_insert     .= ", usu_cadastro";
                       $compl_insert_val .= ", '$this->usu_cadastro'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, dt_nasc, sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, rg_dt_emissao, passaporte, passaporte_dt_emissao, passaporte_pais_origem, nacionalidade, naturalidade, cnh, cnh_dt_validade, cnh_categoria, obs, dt_atualiza, usu_atualiza $compl_insert) VALUES (" . $NM_seq_auto . "$this->id_pessoa_fisica, '$this->nome', $this->id_tipo_vinculo, '$this->endereco', '$this->endereco_comp', '$this->bairro', $this->id_municipio, $this->id_uf, $this->id_pais, $this->cep, '$this->endereco_cob', '$this->endereco_comp_cob', '$this->bairro_cob', $this->id_municipio_cob, $this->id_uf_cob, $this->id_pais_cob, $this->cep_cob, " . $this->Ini->date_delim . $this->dt_nasc . $this->Ini->date_delim1 . ", '$this->sexo', $this->id_tipo_estado_civil, $this->id_tipo_escolaridade, $this->id_tipo_sanguineo, '$this->profissao', '$this->aposentado', $this->cpf, '$this->rg', '$this->rg_orgao_emissor', '$this->rg_uf_emissor', " . $this->Ini->date_delim . $this->rg_dt_emissao . $this->Ini->date_delim1 . ", '$this->passaporte', " . $this->Ini->date_delim . $this->passaporte_dt_emissao . $this->Ini->date_delim1 . ", $this->passaporte_pais_origem, $this->nacionalidade, '$this->naturalidade', '$this->cnh', " . $this->Ini->date_delim . $this->cnh_dt_validade . $this->Ini->date_delim1 . ", '$this->cnh_categoria', '$this->obs', " . $this->Ini->date_delim . $this->dt_atualiza . $this->Ini->date_delim1 . ", '$this->usu_atualiza' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->id_ativo != "")
                  { 
                       $compl_insert     .= ", id_ativo";
                       $compl_insert_val .= ", $this->id_ativo";
                  } 
                  if ($this->dt_cadastro != "")
                  { 
                       $compl_insert     .= ", dt_cadastro";
                       $compl_insert_val .= ", EXTEND('$this->dt_cadastro', YEAR TO FRACTION)";
                  } 
                  if ($this->usu_cadastro != "")
                  { 
                       $compl_insert     .= ", usu_cadastro";
                       $compl_insert_val .= ", '$this->usu_cadastro'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, dt_nasc, sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, rg_dt_emissao, passaporte, passaporte_dt_emissao, passaporte_pais_origem, nacionalidade, naturalidade, cnh, cnh_dt_validade, cnh_categoria, obs, dt_atualiza, usu_atualiza $compl_insert) VALUES (" . $NM_seq_auto . "$this->id_pessoa_fisica, '$this->nome', $this->id_tipo_vinculo, '$this->endereco', '$this->endereco_comp', '$this->bairro', $this->id_municipio, $this->id_uf, $this->id_pais, $this->cep, '$this->endereco_cob', '$this->endereco_comp_cob', '$this->bairro_cob', $this->id_municipio_cob, $this->id_uf_cob, $this->id_pais_cob, $this->cep_cob, EXTEND('$this->dt_nasc', YEAR TO DAY), '$this->sexo', $this->id_tipo_estado_civil, $this->id_tipo_escolaridade, $this->id_tipo_sanguineo, '$this->profissao', '$this->aposentado', $this->cpf, '$this->rg', '$this->rg_orgao_emissor', '$this->rg_uf_emissor', EXTEND('$this->rg_dt_emissao', YEAR TO DAY), '$this->passaporte', EXTEND('$this->passaporte_dt_emissao', YEAR TO DAY), $this->passaporte_pais_origem, $this->nacionalidade, '$this->naturalidade', '$this->cnh', EXTEND('$this->cnh_dt_validade', YEAR TO DAY), '$this->cnh_categoria', '$this->obs', EXTEND('$this->dt_atualiza', YEAR TO FRACTION), '$this->usu_atualiza' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->id_ativo != "")
                  { 
                       $compl_insert     .= ", id_ativo";
                       $compl_insert_val .= ", $this->id_ativo";
                  } 
                  if ($this->dt_cadastro != "")
                  { 
                       $compl_insert     .= ", dt_cadastro";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->dt_cadastro . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->usu_cadastro != "")
                  { 
                       $compl_insert     .= ", usu_cadastro";
                       $compl_insert_val .= ", '$this->usu_cadastro'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, dt_nasc, sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, rg_dt_emissao, passaporte, passaporte_dt_emissao, passaporte_pais_origem, nacionalidade, naturalidade, cnh, cnh_dt_validade, cnh_categoria, obs, dt_atualiza, usu_atualiza $compl_insert) VALUES (" . $NM_seq_auto . "$this->id_pessoa_fisica, '$this->nome', $this->id_tipo_vinculo, '$this->endereco', '$this->endereco_comp', '$this->bairro', $this->id_municipio, $this->id_uf, $this->id_pais, $this->cep, '$this->endereco_cob', '$this->endereco_comp_cob', '$this->bairro_cob', $this->id_municipio_cob, $this->id_uf_cob, $this->id_pais_cob, $this->cep_cob, " . $this->Ini->date_delim . $this->dt_nasc . $this->Ini->date_delim1 . ", '$this->sexo', $this->id_tipo_estado_civil, $this->id_tipo_escolaridade, $this->id_tipo_sanguineo, '$this->profissao', '$this->aposentado', $this->cpf, '$this->rg', '$this->rg_orgao_emissor', '$this->rg_uf_emissor', " . $this->Ini->date_delim . $this->rg_dt_emissao . $this->Ini->date_delim1 . ", '$this->passaporte', " . $this->Ini->date_delim . $this->passaporte_dt_emissao . $this->Ini->date_delim1 . ", $this->passaporte_pais_origem, $this->nacionalidade, '$this->naturalidade', '$this->cnh', " . $this->Ini->date_delim . $this->cnh_dt_validade . $this->Ini->date_delim1 . ", '$this->cnh_categoria', '$this->obs', " . $this->Ini->date_delim . $this->dt_atualiza . $this->Ini->date_delim1 . ", '$this->usu_atualiza' $compl_insert_val)"; 
              }
              else
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->id_ativo != "")
                  { 
                       $compl_insert     .= ", id_ativo";
                       $compl_insert_val .= ", $this->id_ativo";
                  } 
                  if ($this->dt_cadastro != "")
                  { 
                       $compl_insert     .= ", dt_cadastro";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->dt_cadastro . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->usu_cadastro != "")
                  { 
                       $compl_insert     .= ", usu_cadastro";
                       $compl_insert_val .= ", '$this->usu_cadastro'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, dt_nasc, sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, rg_dt_emissao, passaporte, passaporte_dt_emissao, passaporte_pais_origem, nacionalidade, naturalidade, cnh, cnh_dt_validade, cnh_categoria, obs, dt_atualiza, usu_atualiza $compl_insert) VALUES (" . $NM_seq_auto . "$this->id_pessoa_fisica, '$this->nome', $this->id_tipo_vinculo, '$this->endereco', '$this->endereco_comp', '$this->bairro', $this->id_municipio, $this->id_uf, $this->id_pais, $this->cep, '$this->endereco_cob', '$this->endereco_comp_cob', '$this->bairro_cob', $this->id_municipio_cob, $this->id_uf_cob, $this->id_pais_cob, $this->cep_cob, " . $this->Ini->date_delim . $this->dt_nasc . $this->Ini->date_delim1 . ", '$this->sexo', $this->id_tipo_estado_civil, $this->id_tipo_escolaridade, $this->id_tipo_sanguineo, '$this->profissao', '$this->aposentado', $this->cpf, '$this->rg', '$this->rg_orgao_emissor', '$this->rg_uf_emissor', " . $this->Ini->date_delim . $this->rg_dt_emissao . $this->Ini->date_delim1 . ", '$this->passaporte', " . $this->Ini->date_delim . $this->passaporte_dt_emissao . $this->Ini->date_delim1 . ", $this->passaporte_pais_origem, $this->nacionalidade, '$this->naturalidade', '$this->cnh', " . $this->Ini->date_delim . $this->cnh_dt_validade . $this->Ini->date_delim1 . ", '$this->cnh_categoria', '$this->obs', " . $this->Ini->date_delim . $this->dt_atualiza . $this->Ini->date_delim1 . ", '$this->usu_atualiza' $compl_insert_val)"; 
              }
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg(), true); 
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                      { 
                          $this->sc_erro_insert = $this->Db->ErrorMsg();  
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_public_pessoa_fisica_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->sc_insert_on = true; 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->id_pessoa_fisica = substr($this->Db->qstr($this->id_pessoa_fisica), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $this->id_pessoa_fisica "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_public_pessoa_fisica_mob_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['parms'] = "id_pessoa_fisica?#?$this->id_pessoa_fisica?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->id_pessoa_fisica = substr($this->Db->qstr($this->id_pessoa_fisica), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "R")
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->id_pessoa_fisica)) 
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
          else 
          { 
              $this->nmgp_opcao = "igual"; 
          } 
      } 
      if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->nmgp_opcao != "nada" && (trim($this->id_pessoa_fisica) === "")) 
      { 
          if ($this->nmgp_opcao == "avanca")  
          { 
              $this->nmgp_opcao = "final"; 
          } 
          elseif ($this->nmgp_opcao != "novo")
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("");
      if (substr(strtolower($sc_where), 0, 5) == "where")
      {
          $sc_where  = substr($sc_where , 5);
      }
      if (!empty($sc_where))
      {
          $sc_where = " where " . $sc_where . " ";
      }
      if ('' != $sc_where_filter)
      {
          $sc_where = ('' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total']))
      { 
          $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_public_pessoa_fisica_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total'] = $qt_geral_reg_form_public_pessoa_fisica_mob;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->id_pessoa_fisica))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "id_pessoa_fisica < $this->id_pessoa_fisica "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "id_pessoa_fisica < $this->id_pessoa_fisica "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "id_pessoa_fisica < $this->id_pessoa_fisica "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "id_pessoa_fisica < $this->id_pessoa_fisica "; 
              }
              else  
              {
                  $Key_Where = "id_pessoa_fisica < $this->id_pessoa_fisica "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_public_pessoa_fisica_mob = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] > $qt_geral_reg_form_public_pessoa_fisica_mob)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] = $qt_geral_reg_form_public_pessoa_fisica_mob; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] = $qt_geral_reg_form_public_pessoa_fisica_mob; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total'] + 1; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, str_replace (convert(char(10),dt_nasc,102), '.', '-') + ' ' + convert(char(8),dt_nasc,20), sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, str_replace (convert(char(10),rg_dt_emissao,102), '.', '-') + ' ' + convert(char(8),rg_dt_emissao,20), passaporte, str_replace (convert(char(10),passaporte_dt_emissao,102), '.', '-') + ' ' + convert(char(8),passaporte_dt_emissao,20), passaporte_pais_origem, nacionalidade, naturalidade, cnh, str_replace (convert(char(10),cnh_dt_validade,102), '.', '-') + ' ' + convert(char(8),cnh_dt_validade,20), cnh_categoria, obs, id_ativo, str_replace (convert(char(10),dt_cadastro,102), '.', '-') + ' ' + convert(char(8),dt_cadastro,20), str_replace (convert(char(10),dt_atualiza,102), '.', '-') + ' ' + convert(char(8),dt_atualiza,20), usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, convert(char(23),dt_nasc,121), sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, convert(char(23),rg_dt_emissao,121), passaporte, convert(char(23),passaporte_dt_emissao,121), passaporte_pais_origem, nacionalidade, naturalidade, cnh, convert(char(23),cnh_dt_validade,121), cnh_categoria, obs, id_ativo, convert(char(23),dt_cadastro,121), convert(char(23),dt_atualiza,121), usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, dt_nasc, sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, rg_dt_emissao, passaporte, passaporte_dt_emissao, passaporte_pais_origem, nacionalidade, naturalidade, cnh, cnh_dt_validade, cnh_categoria, obs, id_ativo, dt_cadastro, dt_atualiza, usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, EXTEND(dt_nasc, YEAR TO DAY), sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, EXTEND(rg_dt_emissao, YEAR TO DAY), passaporte, EXTEND(passaporte_dt_emissao, YEAR TO DAY), passaporte_pais_origem, nacionalidade, naturalidade, cnh, EXTEND(cnh_dt_validade, YEAR TO DAY), cnh_categoria, obs, id_ativo, EXTEND(dt_cadastro, YEAR TO FRACTION), EXTEND(dt_atualiza, YEAR TO FRACTION), usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT id_pessoa_fisica, nome, id_tipo_vinculo, endereco, endereco_comp, bairro, id_municipio, id_uf, id_pais, cep, endereco_cob, endereco_comp_cob, bairro_cob, id_municipio_cob, id_uf_cob, id_pais_cob, cep_cob, dt_nasc, sexo, id_tipo_estado_civil, id_tipo_escolaridade, id_tipo_sanguineo, profissao, aposentado, cpf, rg, rg_orgao_emissor, rg_uf_emissor, rg_dt_emissao, passaporte, passaporte_dt_emissao, passaporte_pais_origem, nacionalidade, naturalidade, cnh, cnh_dt_validade, cnh_categoria, obs, id_ativo, dt_cadastro, dt_atualiza, usu_cadastro, usu_atualiza from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "id_pessoa_fisica = $this->id_pessoa_fisica"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "id_pessoa_fisica = $this->id_pessoa_fisica"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "id_pessoa_fisica = $this->id_pessoa_fisica"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "id_pessoa_fisica = $this->id_pessoa_fisica"; 
              }  
              else  
              {
                  $aWhere[] = "id_pessoa_fisica = $this->id_pessoa_fisica"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "id_pessoa_fisica";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start']) ;  
              } 
          } 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->id_pessoa_fisica = $rs->fields[0] ; 
              $this->nmgp_dados_select['id_pessoa_fisica'] = $this->id_pessoa_fisica;
              $this->nome = $rs->fields[1] ; 
              $this->nmgp_dados_select['nome'] = $this->nome;
              $this->id_tipo_vinculo = $rs->fields[2] ; 
              $this->nmgp_dados_select['id_tipo_vinculo'] = $this->id_tipo_vinculo;
              $this->endereco = $rs->fields[3] ; 
              $this->nmgp_dados_select['endereco'] = $this->endereco;
              $this->endereco_comp = $rs->fields[4] ; 
              $this->nmgp_dados_select['endereco_comp'] = $this->endereco_comp;
              $this->bairro = $rs->fields[5] ; 
              $this->nmgp_dados_select['bairro'] = $this->bairro;
              $this->id_municipio = $rs->fields[6] ; 
              $this->nmgp_dados_select['id_municipio'] = $this->id_municipio;
              $this->id_uf = $rs->fields[7] ; 
              $this->nmgp_dados_select['id_uf'] = $this->id_uf;
              $this->id_pais = $rs->fields[8] ; 
              $this->nmgp_dados_select['id_pais'] = $this->id_pais;
              $this->cep = $rs->fields[9] ; 
              $this->nmgp_dados_select['cep'] = $this->cep;
              $this->endereco_cob = $rs->fields[10] ; 
              $this->nmgp_dados_select['endereco_cob'] = $this->endereco_cob;
              $this->endereco_comp_cob = $rs->fields[11] ; 
              $this->nmgp_dados_select['endereco_comp_cob'] = $this->endereco_comp_cob;
              $this->bairro_cob = $rs->fields[12] ; 
              $this->nmgp_dados_select['bairro_cob'] = $this->bairro_cob;
              $this->id_municipio_cob = $rs->fields[13] ; 
              $this->nmgp_dados_select['id_municipio_cob'] = $this->id_municipio_cob;
              $this->id_uf_cob = $rs->fields[14] ; 
              $this->nmgp_dados_select['id_uf_cob'] = $this->id_uf_cob;
              $this->id_pais_cob = $rs->fields[15] ; 
              $this->nmgp_dados_select['id_pais_cob'] = $this->id_pais_cob;
              $this->cep_cob = $rs->fields[16] ; 
              $this->nmgp_dados_select['cep_cob'] = $this->cep_cob;
              $this->dt_nasc = $rs->fields[17] ; 
              $this->nmgp_dados_select['dt_nasc'] = $this->dt_nasc;
              $this->sexo = $rs->fields[18] ; 
              $this->nmgp_dados_select['sexo'] = $this->sexo;
              $this->id_tipo_estado_civil = $rs->fields[19] ; 
              $this->nmgp_dados_select['id_tipo_estado_civil'] = $this->id_tipo_estado_civil;
              $this->id_tipo_escolaridade = $rs->fields[20] ; 
              $this->nmgp_dados_select['id_tipo_escolaridade'] = $this->id_tipo_escolaridade;
              $this->id_tipo_sanguineo = $rs->fields[21] ; 
              $this->nmgp_dados_select['id_tipo_sanguineo'] = $this->id_tipo_sanguineo;
              $this->profissao = $rs->fields[22] ; 
              $this->nmgp_dados_select['profissao'] = $this->profissao;
              $this->aposentado = $rs->fields[23] ; 
              $this->nmgp_dados_select['aposentado'] = $this->aposentado;
              $this->cpf = $rs->fields[24] ; 
              $this->nmgp_dados_select['cpf'] = $this->cpf;
              $this->rg = $rs->fields[25] ; 
              $this->nmgp_dados_select['rg'] = $this->rg;
              $this->rg_orgao_emissor = $rs->fields[26] ; 
              $this->nmgp_dados_select['rg_orgao_emissor'] = $this->rg_orgao_emissor;
              $this->rg_uf_emissor = $rs->fields[27] ; 
              $this->nmgp_dados_select['rg_uf_emissor'] = $this->rg_uf_emissor;
              $this->rg_dt_emissao = $rs->fields[28] ; 
              $this->nmgp_dados_select['rg_dt_emissao'] = $this->rg_dt_emissao;
              $this->passaporte = $rs->fields[29] ; 
              $this->nmgp_dados_select['passaporte'] = $this->passaporte;
              $this->passaporte_dt_emissao = $rs->fields[30] ; 
              $this->nmgp_dados_select['passaporte_dt_emissao'] = $this->passaporte_dt_emissao;
              $this->passaporte_pais_origem = $rs->fields[31] ; 
              $this->nmgp_dados_select['passaporte_pais_origem'] = $this->passaporte_pais_origem;
              $this->nacionalidade = $rs->fields[32] ; 
              $this->nmgp_dados_select['nacionalidade'] = $this->nacionalidade;
              $this->naturalidade = $rs->fields[33] ; 
              $this->nmgp_dados_select['naturalidade'] = $this->naturalidade;
              $this->cnh = $rs->fields[34] ; 
              $this->nmgp_dados_select['cnh'] = $this->cnh;
              $this->cnh_dt_validade = $rs->fields[35] ; 
              $this->nmgp_dados_select['cnh_dt_validade'] = $this->cnh_dt_validade;
              $this->cnh_categoria = $rs->fields[36] ; 
              $this->nmgp_dados_select['cnh_categoria'] = $this->cnh_categoria;
              $this->obs = $rs->fields[37] ; 
              $this->nmgp_dados_select['obs'] = $this->obs;
              $this->id_ativo = $rs->fields[38] ; 
              $this->nmgp_dados_select['id_ativo'] = $this->id_ativo;
              $this->dt_cadastro = $rs->fields[39] ; 
              if (substr($this->dt_cadastro, 10, 1) == "-") 
              { 
                 $this->dt_cadastro = substr($this->dt_cadastro, 0, 10) . " " . substr($this->dt_cadastro, 11);
              } 
              if (substr($this->dt_cadastro, 13, 1) == ".") 
              { 
                 $this->dt_cadastro = substr($this->dt_cadastro, 0, 13) . ":" . substr($this->dt_cadastro, 14, 2) . ":" . substr($this->dt_cadastro, 17);
              } 
              $this->nmgp_dados_select['dt_cadastro'] = $this->dt_cadastro;
              $this->dt_atualiza = $rs->fields[40] ; 
              if (substr($this->dt_atualiza, 10, 1) == "-") 
              { 
                 $this->dt_atualiza = substr($this->dt_atualiza, 0, 10) . " " . substr($this->dt_atualiza, 11);
              } 
              if (substr($this->dt_atualiza, 13, 1) == ".") 
              { 
                 $this->dt_atualiza = substr($this->dt_atualiza, 0, 13) . ":" . substr($this->dt_atualiza, 14, 2) . ":" . substr($this->dt_atualiza, 17);
              } 
              $this->nmgp_dados_select['dt_atualiza'] = $this->dt_atualiza;
              $this->usu_cadastro = $rs->fields[41] ; 
              $this->nmgp_dados_select['usu_cadastro'] = $this->usu_cadastro;
              $this->usu_atualiza = $rs->fields[42] ; 
              $this->nmgp_dados_select['usu_atualiza'] = $this->usu_atualiza;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->id_pessoa_fisica = (string)$this->id_pessoa_fisica; 
              $this->id_tipo_vinculo = (string)$this->id_tipo_vinculo; 
              $this->id_municipio = (string)$this->id_municipio; 
              $this->id_uf = (string)$this->id_uf; 
              $this->id_pais = (string)$this->id_pais; 
              $this->cep = (string)$this->cep; 
              $this->id_municipio_cob = (string)$this->id_municipio_cob; 
              $this->id_uf_cob = (string)$this->id_uf_cob; 
              $this->id_pais_cob = (string)$this->id_pais_cob; 
              $this->cep_cob = (string)$this->cep_cob; 
              $this->id_tipo_estado_civil = (string)$this->id_tipo_estado_civil; 
              $this->id_tipo_escolaridade = (string)$this->id_tipo_escolaridade; 
              $this->id_tipo_sanguineo = (string)$this->id_tipo_sanguineo; 
              $this->cpf = (string)$this->cpf; 
              $this->passaporte_pais_origem = (string)$this->passaporte_pais_origem; 
              $this->nacionalidade = (string)$this->nacionalidade; 
              $this->id_ativo = (string)$this->id_ativo; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['parms'] = "id_pessoa_fisica?#?$this->id_pessoa_fisica?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['reg_start'] < $qt_geral_reg_form_public_pessoa_fisica_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opcao']   = '';
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->id_pessoa_fisica = "";  
              $this->nome = "";  
              $this->id_tipo_vinculo = "";  
              $this->endereco = "";  
              $this->endereco_comp = "";  
              $this->bairro = "";  
              $this->id_municipio = "";  
              $this->id_uf = "";  
              $this->id_pais = "";  
              $this->cep = "";  
              $this->endereco_cob = "";  
              $this->endereco_comp_cob = "";  
              $this->bairro_cob = "";  
              $this->id_municipio_cob = "";  
              $this->id_uf_cob = "";  
              $this->id_pais_cob = "";  
              $this->cep_cob = "";  
              $this->dt_nasc = "";  
              $this->dt_nasc_hora = "" ;  
              $this->sexo = "";  
              $this->id_tipo_estado_civil = "";  
              $this->id_tipo_escolaridade = "";  
              $this->id_tipo_sanguineo = "";  
              $this->profissao = "";  
              $this->aposentado = "";  
              $this->cpf = "";  
              $this->rg = "";  
              $this->rg_orgao_emissor = "";  
              $this->rg_uf_emissor = "";  
              $this->rg_dt_emissao = "";  
              $this->rg_dt_emissao_hora = "" ;  
              $this->passaporte = "";  
              $this->passaporte_dt_emissao = "";  
              $this->passaporte_dt_emissao_hora = "" ;  
              $this->passaporte_pais_origem = "";  
              $this->nacionalidade = "";  
              $this->naturalidade = "";  
              $this->cnh = "";  
              $this->cnh_dt_validade = "";  
              $this->cnh_dt_validade_hora = "" ;  
              $this->cnh_categoria = "";  
              $this->obs = "";  
              $this->id_ativo = "";  
              $this->dt_cadastro = "";  
              $this->dt_cadastro_hora = "" ;  
              $this->dt_atualiza = "";  
              $this->dt_atualiza_hora = "" ;  
              $this->usu_cadastro = "";  
              $this->usu_atualiza = "";  
              $this->formatado = false;
              if ($this->nmgp_clone != "S")
              {
              }
              if ($this->nmgp_clone == "S" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_select']))
              {
                  $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dados_select'];
                  $this->nome = $this->nmgp_dados_select['nome'];  
                  $this->id_tipo_vinculo = $this->nmgp_dados_select['id_tipo_vinculo'];  
                  $this->endereco = $this->nmgp_dados_select['endereco'];  
                  $this->endereco_comp = $this->nmgp_dados_select['endereco_comp'];  
                  $this->bairro = $this->nmgp_dados_select['bairro'];  
                  $this->id_municipio = $this->nmgp_dados_select['id_municipio'];  
                  $this->id_uf = $this->nmgp_dados_select['id_uf'];  
                  $this->id_pais = $this->nmgp_dados_select['id_pais'];  
                  $this->cep = $this->nmgp_dados_select['cep'];  
                  $this->endereco_cob = $this->nmgp_dados_select['endereco_cob'];  
                  $this->endereco_comp_cob = $this->nmgp_dados_select['endereco_comp_cob'];  
                  $this->bairro_cob = $this->nmgp_dados_select['bairro_cob'];  
                  $this->id_municipio_cob = $this->nmgp_dados_select['id_municipio_cob'];  
                  $this->id_uf_cob = $this->nmgp_dados_select['id_uf_cob'];  
                  $this->id_pais_cob = $this->nmgp_dados_select['id_pais_cob'];  
                  $this->cep_cob = $this->nmgp_dados_select['cep_cob'];  
                  $this->dt_nasc = $this->nmgp_dados_select['dt_nasc'];  
                  $this->sexo = $this->nmgp_dados_select['sexo'];  
                  $this->id_tipo_estado_civil = $this->nmgp_dados_select['id_tipo_estado_civil'];  
                  $this->id_tipo_escolaridade = $this->nmgp_dados_select['id_tipo_escolaridade'];  
                  $this->id_tipo_sanguineo = $this->nmgp_dados_select['id_tipo_sanguineo'];  
                  $this->profissao = $this->nmgp_dados_select['profissao'];  
                  $this->aposentado = $this->nmgp_dados_select['aposentado'];  
                  $this->cpf = $this->nmgp_dados_select['cpf'];  
                  $this->rg = $this->nmgp_dados_select['rg'];  
                  $this->rg_orgao_emissor = $this->nmgp_dados_select['rg_orgao_emissor'];  
                  $this->rg_uf_emissor = $this->nmgp_dados_select['rg_uf_emissor'];  
                  $this->rg_dt_emissao = $this->nmgp_dados_select['rg_dt_emissao'];  
                  $this->passaporte = $this->nmgp_dados_select['passaporte'];  
                  $this->passaporte_dt_emissao = $this->nmgp_dados_select['passaporte_dt_emissao'];  
                  $this->passaporte_pais_origem = $this->nmgp_dados_select['passaporte_pais_origem'];  
                  $this->nacionalidade = $this->nmgp_dados_select['nacionalidade'];  
                  $this->naturalidade = $this->nmgp_dados_select['naturalidade'];  
                  $this->cnh = $this->nmgp_dados_select['cnh'];  
                  $this->cnh_dt_validade = $this->nmgp_dados_select['cnh_dt_validade'];  
                  $this->cnh_categoria = $this->nmgp_dados_select['cnh_categoria'];  
                  $this->obs = $this->nmgp_dados_select['obs'];  
                  $this->id_ativo = $this->nmgp_dados_select['id_ativo'];  
                  $this->dt_cadastro = $this->nmgp_dados_select['dt_cadastro'];  
                  $this->dt_atualiza = $this->nmgp_dados_select['dt_atualiza'];  
                  $this->usu_cadastro = $this->nmgp_dados_select['usu_cadastro'];  
                  $this->usu_atualiza = $this->nmgp_dados_select['usu_atualiza'];  
              }
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      $this->nm_proc_onload();
  }
// 
//-- 
   function nm_db_retorna($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica < $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->id_pessoa_fisica = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "inicio";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_avanca($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " where id_pessoa_fisica > $this->id_pessoa_fisica" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->id_pessoa_fisica = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "final";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_inicio($str_where_param = '') 
   {   
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela; 
     $rs = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela);
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if ($rs->fields[0] == 0) 
     { 
         $this->nmgp_opcao = "novo"; 
         $this->nm_flag_saida_novo = "S"; 
         $rs->Close(); 
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return;
     }
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->id_pessoa_fisica = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_final($str_where_param = '') 
   { 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(id_pessoa_fisica) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->id_pessoa_fisica = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_public_pessoa_fisica_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        include_once("form_public_pessoa_fisica_mob_form0.php");
        include_once("form_public_pessoa_fisica_mob_form1.php");
        include_once("form_public_pessoa_fisica_mob_form2.php");
        include_once("form_public_pessoa_fisica_mob_form3.php");
 }

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format .= $time_sep;
         }
         else
         {
             $new_date_format .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format;
     if ('DH' == $type)
     {
         $new_date_format                                      = explode(';', $new_date_format);
         $this->field_config[$field]['date_format_js']        = $new_date_format[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_public_pessoa_fisica_mob_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "id_pessoa_fisica", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nome", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "id_tipo_vinculo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "endereco", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cpf", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rg", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rg_orgao_emissor", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_rg_uf_emissor($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "rg_uf_emissor", $arg_search, $data_lookup);
          }
      }
      {
          $this->SC_monta_condicao($comando, "rg_dt_emissao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "passaporte", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "passaporte_dt_emissao", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_passaporte_pais_origem($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "passaporte_pais_origem", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_nacionalidade($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "nacionalidade", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "naturalidade", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cnh", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "cnh_dt_validade", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cnh_categoria", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_id_ativo($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "id_ativo", $arg_search, $data_lookup);
          }
      }
      {
          $this->SC_monta_condicao($comando, "dt_cadastro", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "dt_atualiza", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "usu_cadastro", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "usu_atualiza", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_public_pessoa_fisica_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total'] = $qt_geral_reg_form_public_pessoa_fisica_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_public_pessoa_fisica_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_public_pessoa_fisica_mob_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "id_pessoa_fisica";$nm_numeric[] = "id_tipo_vinculo";$nm_numeric[] = "id_municipio";$nm_numeric[] = "id_uf";$nm_numeric[] = "id_pais";$nm_numeric[] = "cep";$nm_numeric[] = "id_municipio_cob";$nm_numeric[] = "id_uf_cob";$nm_numeric[] = "id_pais_cob";$nm_numeric[] = "cep_cob";$nm_numeric[] = "id_tipo_estado_civil";$nm_numeric[] = "id_tipo_escolaridade";$nm_numeric[] = "id_tipo_sanguineo";$nm_numeric[] = "cpf";$nm_numeric[] = "passaporte_pais_origem";$nm_numeric[] = "nacionalidade";$nm_numeric[] = "id_ativo";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas['dt_nasc'] = "date";$Nm_datas['rg_dt_emissao'] = "date";$Nm_datas['passaporte_dt_emissao'] = "date";$Nm_datas['cnh_dt_validade'] = "date";$Nm_datas['dt_cadastro'] = "datetime";$Nm_datas['dt_atualiza'] = "datetime";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif (substr($Nm_datas[$campo_join], 0, 4) == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          {
              $nome = "str_replace (convert(char(10)," . $nome . ",102), '.', '-') + ' ' + convert(char(8)," . $nome . ",20)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_aspas . $Cmp . $nm_aspas1;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         switch (strtoupper($condicao))
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " like '" . $campo . "%'";
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." like '%" . $campo . "%'";
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." not like '%" . $campo . "%'";
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GT":     // 
               $comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GE":     // 
               $comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LT":     // 
               $comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LE":     // 
               $comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas1;
            break;
         }
   }
   function SC_lookup_rg_uf_emissor($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT uf_nome, id_uf FROM uf WHERE (uf_nome LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_passaporte_pais_origem($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT pais_nm_pais_ter_ptb, id_pais FROM pais WHERE (pais_nm_pais_ter_ptb LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_nacionalidade($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT pais_nm_pais_ter_ptb, id_pais FROM pais WHERE (pais_nm_pais_ter_ptb LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_id_ativo($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['1'] = "Ativo";
       $data_look['0'] = "Inativo";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
   function html_dynamic_search()
   {
       $this->Dyn_search_seq = 0;
       $this->Dyn_search_str = "";
       $this->Dyn_search_dat = array();
      $this->Dyn_search_str = "";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['cond_pesq']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['cond_pesq']))
       {
           $tmp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['cond_pesq'];
           $pos = strrpos($tmp, "##*@@");
           if ($pos !== false)
           {
               $and_or = (substr($tmp, ($pos + 5)) == "and") ? $this->Ini->Nm_lang['lang_srch_and_cond'] : $this->Ini->Nm_lang['lang_srch_orr_cond'];
               $tmp    = substr($tmp, 0, $pos);
               $this->Dyn_search_str = str_replace("##*@@", ", " . $and_or . " ", $tmp);
           }
       }
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'] = NM_charset_to_utf8(trim($this->Dyn_search_str));
           if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_clear']))
           {
               return;
           }
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label'] = array();
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['id_pessoa_fisica'] = (isset($this->New_label['id_pessoa_fisica'])) ? $this->New_label['id_pessoa_fisica'] : "ID Pessoa Fisica";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['nome'] = (isset($this->New_label['nome'])) ? $this->New_label['nome'] : "Nome";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['cpf'] = (isset($this->New_label['cpf'])) ? $this->New_label['cpf'] : "CPF";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['passaporte'] = (isset($this->New_label['passaporte'])) ? $this->New_label['passaporte'] : "Passaporte";
       if ($this->NM_ajax_flag)
       { 
          ob_start();
       } 
       else 
       { 
?>
   <tr id="NM_Dynamic_Search">
<?php
       } 
?>
   <td  valign="top"> 
   <div id='id_dyn_search_cmd_string' class="scAppDivMoldura" style="display:<?php echo (empty($this->Dyn_search_str)?'none':'') ?>"> 
     <span class="css_scAppDivHeaderText">
<?php
             if (is_file($this->Ini->root . $this->Ini->path_img_global . '/' . $this->Ini->App_div_tree_img_exp))
             {
?>
                             <a href="#" onclick="$('#id_dyn_search_cmd_string').hide();$('#div_dyn_search').show();" style="text-decoration:none">
                                     <img id='id_app_div_tree_img_exp' src="<?php echo $this->Ini->path_img_global ?>/<?php echo $this->Ini->App_div_tree_img_exp ?>" border=0 align='absmiddle' style='vertical-align: middle; margin-right:4px;'>
                             </a>
<?php
             }
             echo $this->Ini->Nm_lang['lang_othr_dynamicsearch_title_outside'];
?>
     </span>
     <span id='id_dyn_search_cmd_str' class="scAppDivContentText"><?php echo trim($this->Dyn_search_str) ?></span>
   </div> 
   <div id="div_dyn_search" style="display: none" class="scAppDivMoldura"> 
     <input type="hidden" name="parm_dyn_search" value=""/> 
    <table style="padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top; width: 100%;" valign="top" cellspacing=0 cellpadding=0>
      <tr>
        <td  class="css_scAppDivHeader scAppDivHeaderText">
<?php
             if (is_file($this->Ini->root . $this->Ini->path_img_global . '/' . $this->Ini->App_div_tree_img_col))
             {
?>
                             <a href="#" onclick="$('#div_dyn_search').hide(); if($('#id_dyn_search_cmd_str').html() != ''){ $('#id_dyn_search_cmd_string').show(); }" style="text-decoration:none">
                                     <img id='id_app_div_tree_img_col' src="<?php echo $this->Ini->path_img_global ?>/<?php echo $this->Ini->App_div_tree_img_col ?>" border=0 align='absmiddle' style='vertical-align: middle; margin-right:4px;'>
                             </a>
<?php
             }
?>
            <?php echo $this->Ini->Nm_lang['lang_othr_dynamicsearch_title'] ?>
        </td>
      </tr>
      <tr>
        <td class="scAppDivContent scAppDivContentText">
            <table id="table_dyn_search" cellspacing=2 cellpadding=4>
<?php
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search']))
       {
           foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search'] as $IX => $def)
           {
               $cmp = $def['cmp'];
               if ($cmp == "id_pessoa_fisica")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "id_pessoa_fisica";
                   $lin_obj = $this->dynamic_search_id_pessoa_fisica($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "nome")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "nome";
                   $lin_obj = $this->dynamic_search_nome($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "cpf")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "cpf";
                   $lin_obj = $this->dynamic_search_cpf($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "passaporte")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "passaporte";
                   $lin_obj = $this->dynamic_search_passaporte($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
           }
       }
?>
                </table>
<?php
?>
            </td>
        </tr>
    <tr>
        <td nowrap  class="scAppDivToolbar">
       <?php echo nmButtonOutput($this->arr_buttons, "bapply", "nm_show_dynamicsearch_fields(); return false;", "nm_show_dynamicsearch_fields(); return false;", "id_dyn_search_fields", "", "" . $this->Ini->Nm_lang['lang_othr_dynamicsearch_fields'] . "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
      <table id='id_dynamic_search_fields' style='display:none; position: absolute; border-collapse: collapse; z-index: 1000;'> 
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('id_pessoa_fisica', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['id_pessoa_fisica'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('nome', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['nome'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('cpf', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['cpf'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('passaporte', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['passaporte'] ?>
                </div>
            </td>
        </tr>
      </table> 
      &nbsp;&nbsp;&nbsp;
       <?php echo nmButtonOutput($this->arr_buttons, "blimpar", "nm_clear_dyn_search(); return false;", "nm_clear_dyn_search(); return false;", "dyn_search_clear", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
       &nbsp;&nbsp;&nbsp;
       <?php echo nmButtonOutput($this->arr_buttons, "bapply", "setTimeout(function() {nm_proc_dyn_search('id_Fdyn_search', 'dyn_search')}, 200);", "setTimeout(function() {nm_proc_dyn_search('id_Fdyn_search', 'dyn_search')}, 200);", "dyn_search", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
        </td>
    </tr>
    </table>
   </form>
   </div>
   </td>
<?php
       if ($this->NM_ajax_flag)
       { 
           $Temp = ob_get_clean();
           $this->NM_ajax_info['dyn_search']['NM_Dynamic_Search'] = NM_charset_to_utf8(trim($Temp));
           $this->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'] = NM_charset_to_utf8(trim($this->Dyn_search_str));
           if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_clear']))
           { 
               unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_clear']);
           } 
           return;
       } 
?>
   </tr>
<?php
       $this->JS_dynamic_search();
   }
   function dynamic_search_id_pessoa_fisica($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_id_pessoa_fisica_" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['id_pessoa_fisica'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_id_pessoa_fisica_cond_" . $ind . "' name='cond_dyn_search_id_pessoa_fisica_" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle; display: none' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_id_pessoa_fisica_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $id_pessoa_fisica = $val_cmp;
       $nmgp_def_dados = array(); 
    if (is_numeric($id_pessoa_fisica))
    { 
       $nm_comando = "select distinct id_pessoa_fisica from " . $this->Ini->nm_tabela . " where id_pessoa_fisica = $id_pessoa_fisica"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
              nmgp_Form_Num_Val($rs->fields[0], $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
    } 
       if (isset($nmgp_def_dados[0][$id_pessoa_fisica]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$id_pessoa_fisica];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_id_pessoa_fisica_val_" . $ind . "' name='val_dyn_search_id_pessoa_fisica_" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=17 alt=\"{datatype: 'text', maxLength: 17, allowedChars: '0123456789" . $_SESSION['scriptcase']['reg_conf']['dec_num']  . $_SESSION['scriptcase']['reg_conf']['grup_num'] . "', lettersCase: '', enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_id_pessoa_fisica" . $ind . "' name='id_pessoa_fisica_autocomp" . $ind . "' size='17' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 17, allowedChars: '0123456789" . $_SESSION['scriptcase']['reg_conf']['dec_num']  . $_SESSION['scriptcase']['reg_conf']['grup_num'] . "', lettersCase: '', enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_id_pessoa_fisica_close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_id_pessoa_fisica_" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_nome($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_nome_" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['nome'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "qp";
       }
       $lin_obj .= "       <select id='dyn_search_nome_cond_" . $ind . "' name='cond_dyn_search_nome_" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle;' onChange='dyn_search_hide_input(\"nome\", $ind)' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "qp") ? " selected" : "";
       $lin_obj .= "        <option value='qp'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_like'] . "</option>";
       $selected = ($opc == "np") ? " selected" : "";
       $lin_obj .= "        <option value='np'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_not_like'] . "</option>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $selected = ($opc == "df") ? " selected" : "";
       $lin_obj .= "        <option value='df'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_dife'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_nome_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $nome = $val_cmp;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct nome from " . $this->Ini->nm_tabela . " where nome = '$nome'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       if (isset($nmgp_def_dados[0][$nome]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$nome];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_nome_val_" . $ind . "' name='val_dyn_search_nome_" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=50 alt=\"{datatype: 'text', maxLength: 255, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_nome" . $ind . "' name='nome_autocomp" . $ind . "' size='50' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 255, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_nome_close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_nome_" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_cpf($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_cpf_" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['cpf'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_cpf_cond_" . $ind . "' name='cond_dyn_search_cpf_" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle; display: none' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_cpf_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $cpf = $val_cmp;
       $nmgp_def_dados = array(); 
    if (is_numeric($cpf))
    { 
       $nm_comando = "select distinct cpf from " . $this->Ini->nm_tabela . " where cpf = $cpf"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
              nmgp_Form_Num_Val($rs->fields[0], $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
    } 
       if (isset($nmgp_def_dados[0][$cpf]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$cpf];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_cpf_val_" . $ind . "' name='val_dyn_search_cpf_" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=17 alt=\"{datatype: 'text', maxLength: 17, allowedChars: '0123456789" . $_SESSION['scriptcase']['reg_conf']['dec_num']  . $_SESSION['scriptcase']['reg_conf']['grup_num'] . "', lettersCase: '', enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_cpf" . $ind . "' name='cpf_autocomp" . $ind . "' size='17' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 17, allowedChars: '0123456789" . $_SESSION['scriptcase']['reg_conf']['dec_num']  . $_SESSION['scriptcase']['reg_conf']['grup_num'] . "', lettersCase: '', enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_cpf_close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_cpf_" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_passaporte($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_passaporte_" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['passaporte'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_passaporte_cond_" . $ind . "' name='cond_dyn_search_passaporte_" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle; display: none' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_passaporte_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $passaporte = $val_cmp;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct passaporte from " . $this->Ini->nm_tabela . " where passaporte = '$passaporte'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       if (isset($nmgp_def_dados[0][$passaporte]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$passaporte];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_passaporte_val_" . $ind . "' name='val_dyn_search_passaporte_" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=25 alt=\"{datatype: 'text', maxLength: 25, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_passaporte" . $ind . "' name='passaporte_autocomp" . $ind . "' size='25' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 25, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_passaporte_close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_passaporte_" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function lookup_ajax_id_pessoa_fisica($id_pessoa_fisica)
   {
       $id_pessoa_fisica = substr($this->Db->qstr($id_pessoa_fisica), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct id_pessoa_fisica from " . $this->Ini->nm_tabela . " where  id_pessoa_fisica like '%" . $id_pessoa_fisica . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
              nmgp_Form_Num_Val($rs->fields[0], $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_public_pessoa_fisica_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_nome($nome)
   {
       $nome = substr($this->Db->qstr($nome), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct nome from " . $this->Ini->nm_tabela . " where  nome like '%" . $nome . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_public_pessoa_fisica_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_cpf($cpf)
   {
       $cpf = substr($this->Db->qstr($cpf), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct cpf from " . $this->Ini->nm_tabela . " where  cpf like '%" . $cpf . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
              nmgp_Form_Num_Val($rs->fields[0], $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_public_pessoa_fisica_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_passaporte($passaporte)
   {
       $passaporte = substr($this->Db->qstr($passaporte), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct passaporte from " . $this->Ini->nm_tabela . " where  passaporte like '%" . $passaporte . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_public_pessoa_fisica_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function form_public_pessoa_fisica_pack_protect_string($sString)
   {
      $sString = (string) $sString;
      if (!empty($sString))
      {
         if (function_exists('NM_is_utf8') && NM_is_utf8($sString))
         {
             return $sString;
         }
         else
         {
             return sc_htmlentities($sString);
         }
      }
      elseif ('0' === $sString || 0 === $sString)
      {
         return '0';
      }
      else
      {
         return '';
      }
   }
   function JS_dynamic_search()
   {
       global $nm_saida;
?>
   <script type="text/javascript">
     var Tot_obj_dyn_search = <?php echo $this->Dyn_search_seq ?>;
     Tab_obj_dyn_search = new Array();
     Tab_evt_dyn_search = new Array();
<?php
       foreach ($this->Dyn_search_dat as $seq => $cmp)
       {
?>
     Tab_obj_dyn_search[<?php echo $seq ?>] = '<?php echo $cmp ?>';
<?php
       }
?>
<?php
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['ajax_nav'])
   { 
       $this->Ini->Arr_result['setArr'][] = array('var' => 'Tab_obj_dyn_search', 'value' => '');
       $this->Ini->Arr_result['setArr'][] = array('var' => 'Tab_evt_dyn_search', 'value' => '');
       $this->Ini->Arr_result['setVar'][] = array('var' => 'Tot_obj_dyn_search', 'value' => $this->Dyn_search_seq);
       foreach ($this->Dyn_search_dat as $seq => $cmp)
       {
           $this->Ini->Arr_result['setVar'][] = array('var' => 'Tab_obj_dyn_search[' . $seq . ']', 'value' => $cmp);
       }
   } 
?>
     function SC_carga_evt_jquery(tp_carga)
     {
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null' && (tp_carga == 'all' || tp_carga == i))
             {
                 x   = 0;
                 tmp = Tab_obj_dyn_search[i];
                 cps = new Array();
                 cps[x] = tmp;
                 for (x = 0; x < cps.length ; x++)
                 {
                     cmp = cps[x];
                     if (Tab_evt_dyn_search[cmp])
                     {
                         eval ("$('#dyn_search_" + cmp + "_val_" + i + "').bind('change', function() {" + Tab_evt_dyn_search[cmp] + "})");
                     }
                 }
             }
         }
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null' && (tp_carga == 'all' || tp_carga == i))
             {
                 tmp = Tab_obj_dyn_search[i];
                 if (tmp == 'id_pessoa_fisica')
                 {
                      var x = i;
                      $("#id_ac_id_pessoa_fisica" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_public_pessoa_fisica_mob.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "id_pessoa_fisica",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_id_pessoa_fisica_val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_id_pessoa_fisica_val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
                 if (tmp == 'nome')
                 {
                      var x = i;
                      $("#id_ac_nome" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_public_pessoa_fisica_mob.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "nome",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_nome_val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_nome_val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
                 if (tmp == 'cpf')
                 {
                      var x = i;
                      $("#id_ac_cpf" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_public_pessoa_fisica_mob.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "cpf",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_cpf_val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_cpf_val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
                 if (tmp == 'passaporte')
                 {
                      var x = i;
                      $("#id_ac_passaporte" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_public_pessoa_fisica_mob.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "passaporte",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_passaporte_val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_passaporte_val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
             }
         }
     }
     function del_dyn_search(field, ind)
     {
         Tab_obj_dyn_search[ind] = 'NMSC_Dyn_Null';
         $('#' + field).remove();
     }
     function dyn_search_hide_input(field, ind)
     {
        var index = document.getElementById('dyn_search_' + field + '_cond_' + ind).selectedIndex;
        var parm  = document.getElementById('dyn_search_' + field + '_cond_' + ind).options[index].value;
        if (parm == "nu" || parm == "nn" || parm == "ep" || parm == "ne")
        {
            $('#dyn_' + field + '_' + ind).css('display','none');
        }
        else
        {
            $('#dyn_' + field + '_' + ind).css('display','');
        }
     }
     var dynamicsearch_status = 'out';
     function nm_show_dynamicsearch_fields()
     {
       var btn_id = 'id_dyn_search_fields';
       var obj_id = 'id_dynamic_search_fields';
       dynamicsearch_status = 'open';
       $('#' + btn_id).mouseout(function() {
         setTimeout(function() {
           nm_hide_dynamicsearch_fields(obj_id);
         }, 1000);
       });
       $('#' + obj_id + ' li').click(function() {
         dynamicsearch_status = 'out';
         nm_hide_dynamicsearch_fields(obj_id);
       });
       $('#' + obj_id).css({
         'left': $('#' + btn_id).left
       })
       .mouseover(function() {
         dynamicsearch_status = 'over';
       })
       .mouseleave(function() {
         dynamicsearch_status = 'out';
         setTimeout(function() {
           nm_hide_dynamicsearch_fields(obj_id);
         }, 1000);
       })
       .show('fast');
     }
   function nm_hide_dynamicsearch_fields(obj_id) {
     if ('over' != dynamicsearch_status) {
       $('#' + obj_id).hide('fast');
     }
   }
     function nm_clear_dyn_search()
     {
         Tot_obj_dyn_search = 0;
         Tab_obj_dyn_search = new Array();
         nm_proc_dyn_search('id_Fdyn_search', 'dyn_search_clear');
     }
     function nm_proc_dyn_search(formId, Tp_Proc)
     {
         var out_dyn = "";
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null')
             {
                 out_dyn += (out_dyn != "") ? "_FDYN_" : "";
                 out_dyn += Tab_obj_dyn_search[i];
                 obj_dyn = 'dyn_search_' + Tab_obj_dyn_search[i] + '_cond_' + i;
                 out_dyn += "_DYN_" + dyn_search_get_sel_cond(obj_dyn);
                 obj_dyn = 'dyn_search_' + Tab_obj_dyn_search[i] + '_val_';

                 if (Tab_obj_dyn_search[i] == 'id_pessoa_fisica')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'nome')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'cpf')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'passaporte')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 out_dyn += "_DYN_" + result;
             }
         }
         if (out_dyn == "" && Tp_Proc != "dyn_search_clear")
         {
             return;
         }
         nm_move(Tp_Proc, out_dyn);
     }
     function dyn_search_get_sel_cond(obj_id)
     {
        var index = document.getElementById(obj_id).selectedIndex;
        return document.getElementById(obj_id).options[index].value;
     }
     function dyn_search_get_select(obj_id, str_type)
     {
        if(str_type == '')
        {
            var obj = document.getElementById(obj_id);
        }
        else
        {
            var obj = $('#' + obj_id).multipleSelect('getSelects');
        }
        var val = "";
        for (iSelect = 0; iSelect < obj.length; iSelect++)
        {
            if ((str_type == '' && obj[iSelect].selected) || (str_type=='RADIO' || str_type=='CHECKBOX'))
            {
                if(str_type == '' && obj[iSelect].selected)
                {
                    new_val = obj[iSelect].value;
                }
                else
                {
                    new_val = obj[iSelect];
                }
                val += (val != "") ? "_VLS_" : "";
                val += new_val;
            }
        }
        return val;
     }
     function dyn_search_get_Dselelect(obj_id)
     {
        var obj = document.getElementById(obj_id);
        var val = "";
        for (iSelect = 0; iSelect < obj.length; iSelect++)
        {
            val += (val != "") ? "_VLS_" : "";
            val += obj[iSelect].value;
        }
        return val;
     }
     function dyn_search_get_radio(obj_id)
     {
        var Nobj = document.getElementById(obj_id).name;
        var obj  = document.getElementsByName(Nobj);
        var val  = "";
        for (iRadio = 0; iRadio < obj.length; iRadio++)
        {
            if (obj[iRadio].checked)
            {
                val += (val != "") ? "_VLS_" : "";
                val += obj[iRadio].value;
            }
        }
        return val;
     }
     function dyn_search_get_checkbox(obj_id)
     {
        var Nobj = document.getElementById(obj_id).name;
        var obj  = document.getElementsByName(Nobj);
        var val  = "";
        if (!obj.length)
        {
            if (obj.checked)
            {
                val = obj.value;
            }
            return val;
        }
        else
        {
            for (iCheck = 0; iCheck < obj.length; iCheck++)
            {
                if (obj[iCheck].checked)
                {
                    val += (val != "") ? "_VLS_" : "";
                    val += obj[iCheck].value;
                }
            }
        }
        return val;
     }
     function dyn_search_get_text(obj_id, obj_ac)
     {
        var obj = document.getElementById(obj_id);
        var val = "";
        if (obj)
        {
            val = obj.value;
        }
        if (obj_ac != '' && val == '')
        {
            obj = document.getElementById(obj_ac);
            if (obj)
            {
                val = obj.value;
            }
        }
        return val;
     }
     function dyn_search_get_dt_h(obj_id, ind, TP)
     {
        var val = new Array();
        if (TP == 'DT' || TP == 'DH')
        {
            obj_part  = document.getElementById(obj_id + '_ano_val_' + ind);
            val      += "Y:";
            if (obj_part && obj_part.type.substr(0, 6) == 'select')
            {
                Tval = dyn_search_get_sel_cond(obj_id + '_ano_val_' + ind);
                val += (Tval != -1) ? Tval : '';
            }
            else
            {
                val += (obj_part) ? obj_part.value : '';
            }
            obj_part  = document.getElementById(obj_id + '_mes_val_' + ind);
            val      += "_VLS_M:";
            if (obj_part && obj_part.type.substr(0, 6) == 'select')
            {
                Tval = dyn_search_get_sel_cond(obj_id + '_mes_val_' + ind);
                val += (Tval != -1) ? Tval : '';
            }
            else
            {
                val += (obj_part) ? obj_part.value : '';
            }
            obj_part  = document.getElementById(obj_id + '_dia_val_' + ind);
            val      += "_VLS_D:";
            if (obj_part && obj_part.type.substr(0, 6) == 'select')
            {
                Tval = dyn_search_get_sel_cond(obj_id + '_dia_val_' + ind);
                val += (Tval != -1) ? Tval : '';
            }
            else
            {
                val += (obj_part) ? obj_part.value : '';
            }
        }
        if (TP == 'HH' || TP == 'DH')
        {
            val            += (val != "") ? "_VLS_" : "";
            obj_part        = document.getElementById(obj_id + '_hor_val_' + ind);
            val            += "H:";
            val            += (obj_part) ? obj_part.value : '';
            obj_part        = document.getElementById(obj_id + '_min_val_' + ind);
            val            += "_VLS_I:";
            val            += (obj_part) ? obj_part.value : '';
            obj_part        = document.getElementById(obj_id + '_seg_val_' + ind);
            val            += "_VLS_S:";
            val            += (obj_part) ? obj_part.value : '';
        }
        return val;
     }
function ajax_add_dyn_search(str_field, str_origem)
{
    var parm = str_field;
    if (parm == "")
    {
        return;
    }
    $('#table_dyn_search_criteria').show();
    scAjaxProcOn();
    Tot_obj_dyn_search++;
    Tab_obj_dyn_search[Tot_obj_dyn_search] = parm;
    $.ajax({
      type: "POST",
      url: "form_public_pessoa_fisica_mob.php",
      data: "nmgp_opcao=ajax_add_dyn_search&script_case_init=" + document.F1.script_case_init.value + "&script_case_session=" + document.F1.script_case_session.value + "&parm=" + parm + "&seq=" + Tot_obj_dyn_search + "&origem=" + str_origem,
      success: function(jsonDyn_add) {
        var i, oResp;
        Tst_integrid = jsonDyn_add.trim();
        if ("{" != Tst_integrid.substr(0, 1)) {
            scAjaxProcOff();
            alert (jsonDyn_add);
            return;
        }
        eval("oResp = " + jsonDyn_add);
        if (oResp["dyn_add"]) {
          for (i = 0; i < oResp["dyn_add"].length; i++) {
               $('#table_dyn_search').append(oResp["dyn_add"][i]);
          }
        }
        if (oResp["htmOutput"]) {
           scAjaxShowDebug(oResp);
        }
        SC_carga_evt_jquery(Tot_obj_dyn_search);
        $('#dyn_search_' + parm + '_' + Tot_obj_dyn_search + ' input:text.sc-js-input').listen();
        $('#dyn_search_' + parm + '_' + Tot_obj_dyn_search + ' select.sc-js-input').listen();
        scAjaxProcOff();
      }
    });
}
   </script>
<?php
   }
   function SC_proc_dyn_search($Parms)
   {
       $ix     = 0;
       $fields = array();
       if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($Parms))
       {
           $Parms = NM_conv_charset($Parms, $_SESSION['scriptcase']['charset'], "UTF-8");
       }
       $tmp    = explode("_FDYN_", $Parms);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search'] = array();
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_refresh'] = array();
       foreach ($tmp as $cada_f)
       {
           $dats = explode("_DYN_", $cada_f);
           $fields[$ix]['field']  = $dats[0];
           $fields[$ix]['cond']   = $dats[1];
           $sep_bw                 = explode("_VLS2_", $dats[2]);
           $fields[$ix]['vls'][0] = explode("_VLS_",  $sep_bw[0]);
           $fields[$ix]['vls'][1] = isset($sep_bw[1]) ? explode("_VLS_",  $sep_bw[1]) : "";
           $val_sv = array();
           foreach ($fields[$ix]['vls'] as $i => $dados)
           {
               if (is_array($dados))
               {
                   foreach ($dados as $ind => $str)
                   {
                       $str = NM_charset_decode($str);
                       $tmp_pos = strpos($str, "##@@");
                       if ($tmp_pos === false)
                       {
                          $val_sv[$i][] = $str;
                       }
                       else
                       {
                         $val_sv[$i][] = substr($str, 0, $tmp_pos);
                       }
                   }
               }
               else
               {
                   $dados = NM_charset_decode($dados);
                   $tmp_pos = strpos($dados, "##@@");
                   if ($tmp_pos === false)
                   {
                      $val_sv[$i] = $dados;
                   }
                   else
                   {
                      $val_sv[$i] = substr($dados, 0, $tmp_pos);
                   }
               }
           }
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search'][] = array('cmp' => $dats[0], 'opc' => $dats[1], 'val' => $val_sv);
           $ix++;
       }
       $this->Dyn_Serarch_and_or = "and";
       $this->Cmd_Dyn_Search    = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['cond_dyn_search'] = "";
       foreach ($fields as $ind => $dados)
       {
           $this->Date_part          = false;
           $this->Operador_date_part = "";
           $this->Lang_date_part     = "";
           $dados['cond'] = strtoupper($dados['cond']);
           if (empty($dados['vls']) && ($dados['cond'] == "NU" || $dados['cond'] == "NN" || $dados['cond'] == "EP" || $dados['cond'] == "NE"))
           {
               $dados['vls'][0][0] = "";
           }
           if ($dados['field'] == "id_pessoa_fisica" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['id_pessoa_fisica'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] != "IN")
               {
                   $dados['vls'][0] = str_replace(".", "", $dados['vls'][0]);
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['decimal_db'] == ".")
                   {
                       $dados['vls'][0] = str_replace(",", ".", $dados['vls'][0]);
                   }
               }
               if ($dados['vls'][0] == "" || (!is_numeric($dados['vls'][0]) && $dados['cond'] != "IN"))
               {
                   $dados['vls'] = array();
               }
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "id_pessoa_fisica", 'N', 'INT8', $Label_cmp);
           }
           if ($dados['field'] == "nome" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['nome'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "nome", 'A', 'VARCHAR', $Label_cmp);
           }
           if ($dados['field'] == "cpf" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['cpf'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] != "IN")
               {
                   $dados['vls'][0] = str_replace(".", "", $dados['vls'][0]);
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['decimal_db'] == ".")
                   {
                       $dados['vls'][0] = str_replace(",", ".", $dados['vls'][0]);
                   }
               }
               if ($dados['vls'][0] == "" || (!is_numeric($dados['vls'][0]) && $dados['cond'] != "IN"))
               {
                   $dados['vls'] = array();
               }
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "cpf", 'N', 'INT8', $Label_cmp);
           }
           if ($dados['field'] == "passaporte" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['dyn_search_label']['passaporte'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "passaporte", 'A', 'VARCHAR', $Label_cmp);
           }
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_pesq_filtro'] = "( " . $this->Cmd_Dyn_Search . " )";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal']) && !empty($this->Cmd_Dyn_Search)) 
       {
           $this->Cmd_Dyn_Search = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_detal'] . " and (" .  $this->Cmd_Dyn_Search . ")";
       }
       if (empty($this->Cmd_Dyn_Search)) 
       {
           $this->Cmd_Dyn_Search = " 1 <> 1 "; 
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_pesq_filtro'] = "( " . $this->Cmd_Dyn_Search . " )";
       }
       $sc_where = " where " . $this->Cmd_Dyn_Search;
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_pesq'] = $sc_where;
       $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
       $rt = $this->Db->Execute($nmgp_select) ; 
       if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit ; 
       }  
       $qt_geral_reg_form_public_pessoa_fisica_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['total'] = $qt_geral_reg_form_public_pessoa_fisica_mob;
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter'] = $this->Cmd_Dyn_Search;
       $rt->Close(); 
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['cond_pesq'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['cond_dyn_search'] . $this->Dyn_Serarch_and_or;
       if (NM_is_utf8($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['cond_pesq']) && $_SESSION['scriptcase']['charset'] != "UTF-8")
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['cond_pesq'] = sc_convert_encoding($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['cond_pesq'], $_SESSION['scriptcase']['charset'], "UTF-8");
       }
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_public_pessoa_fisica_mob_pack_ajax_response();
          exit;
      }
       $tmp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['cond_pesq'];
       $pos = strrpos($tmp, "##*@@");
       if ($pos !== false)
       {
           $and_or = (substr($tmp, ($pos + 5)) == "and") ? $this->Ini->Nm_lang['lang_srch_and_cond'] : $this->Ini->Nm_lang['lang_srch_orr_cond'];
           $tmp    = substr($tmp, 0, $pos);
           $this->Dyn_search_str = str_replace("##*@@", ", " . $and_or . " ", $tmp);
       }
       $this->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'] = NM_charset_to_utf8(trim($this->Dyn_search_str));
   }
   function SC_proc_dyn_search_lookup($cond, $vls, $sql, $tp, $tsql, $lab)
   {
       $nm_aspas = ($tp == 'A') ? "'" : "";
       $nm_cond = "";
       $nm_cmd  = "";
       foreach ($vls as $i => $dados)
       {
           $dados = NM_charset_decode($dados);
           if (!empty($nm_cond))
           {
               $nm_cmd .= ",";
               $nm_cond .= " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
           }
           $tmp_pos = strpos($dados, "##@@");
           if ($tmp_pos === false)
           {
              $res_lookup = $dados;
           }
           else
           {
               $res_lookup = substr($dados, $tmp_pos + 4);
               $dados = substr($dados, 0, $tmp_pos);
           }
           if (trim($dados) != "")
           {
               $nm_cmd .= $nm_aspas . $dados . $nm_aspas;
               $nm_cond .= $res_lookup;
           }
       }
       if (!empty($nm_cmd))
       {
           if (!empty($this->Cmd_Dyn_Search))
           {
               $this->Cmd_Dyn_Search .= " " . $this->Dyn_Serarch_and_or . " ";
           }
           if ($cond == "DF" || $cond == "NP")
           {
               $this->Cmd_Dyn_Search .= "(" . $sql . " not in (" . $nm_cmd . "))";
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['cond_dyn_search'] .= $lab . " " . $this->Ini->Nm_lang['lang_srch_not_like'] . " " . $nm_cond . "##*@@";
           }
           else
           {
               $this->Cmd_Dyn_Search .= "(" . $sql . " in (" . $nm_cmd . "))";
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['cond_dyn_search'] .= $lab . " " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $nm_cond . "##*@@";
           }
       }
   }
   function SC_proc_dyn_search_all($cond, $vls, $sql, $tp, $tsql, $lab)
   {
       $nm_aspas  = "'";
       $nm_aspas1 = "'";
       if ($tp == "N" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['decimal_db'] == ".")
       {
           $nm_aspas  = "";
           $nm_aspas1 = "";
       }
       if ($tp == "DT" || $tp == "DH" || $tp == "HH")
       {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['SC_sep_date']))
          {
              $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['SC_sep_date'];
              $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['SC_sep_date1'];
          }
      }
       $ini_lower = "";
       $end_lower = "";
       $nm_cond = "";
       $nm_cmd  = "";
       $dados   = $vls[0];
           if ($dados == "" && $cond != "NU" && $cond != "NN" && $cond != "EP" && $cond != "NE")
           {
               return;
           }
           if ($tp == 'N' && ($cond == "EP" || $cond == "NE"))
           {
               return;
           }
           $dados  = substr($this->Db->qstr($dados), 1, -1);
           if (($tsql == 'CIDR' || $tsql == 'INET' || $tsql == 'MACADDR') && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
           {
              $sql = "CAST (" . $sql . " AS TEXT)";
           }
           if ($cond != "NU" && $cond != "NN" && $cond != "EP" && $cond != "NE")
           {
               if ($tsql == "TIMESTAMP")
               {
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                   {
                       $tsql = "TIMES";
                   }
                   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $tsql = "DATETIME";
                   }
                   else
                   {
                       $tsql = "DATETIME";
                   }
               }
               if ($tp == 'N' && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($cond == "II" || $cond == "QP" || $cond == "NP"))
               {
                  $sql = "CAST (" . $sql . " AS TEXT)";
               }
               if (substr($tsql, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'YYYY-MM-DD hh24:mi:ss')";
               }
               elseif (substr($tsql, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'YYYY-MM-DD')";
               }
               elseif (substr($tsql, 0, 4) == "TIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'hh24:mi:ss')";
               }
               if (substr($tsql, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && !$this->Date_part)
               {
                   $sql = "str_replace (convert(char(10)," . $sql . ",102), '.', '-') + ' ' + convert(char(8)," . $sql . ",20)";
               }
               if ($tsql == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) && !$this->Date_part)
               {
                   $sql = "convert(char(10)," . $sql . ",121)";
               }
               if ($tsql == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) && !$this->Date_part)
               {
                   $sql = "convert(char(19)," . $sql . ",121)";
               }
               if (substr($tsql, 0, 5) == "TIMES" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !$this->Date_part)
               {
                   $sql  = "TO_DATE(TO_CHAR(" . $sql . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
                   $tsql = "DATETIME";
               }
               if (substr($tsql, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix) && !$this->Date_part)
               {
                   $sql = "EXTEND(" . $sql . ", YEAR TO FRACTION)";
               }
               elseif (substr($tsql, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix) && !$this->Date_part)
               {
                   $sql = "EXTEND(" . $sql . ", YEAR TO DAY)";
               }
           }
           switch ($cond)
           {
              case "EQ":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " = " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "II":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " like '" . $dados . "%'";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_strt'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "QP";
              case "NP";
                 $concat = " " . $this->Dyn_Serarch_and_or . " ";
                 if ($cond == "QP")
                 {
                     $op_all    = " like ";
                     $lang_like = $this->Ini->Nm_lang['lang_srch_like'];
                 }
                 else
                 {
                     $op_all    = " not like ";
                     $lang_like = $this->Ini->Nm_lang['lang_srch_not_like'];
                 }
                 $tmp_cond = "";
                 if (substr($tsql, 0, 4) == "DATE" && $this->Date_part)
                 {
                     if ($this->NM_data_qp['ano'] != "____")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_year'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['ano'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%Y', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(year from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('year' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(year from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'YYYY')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(year, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "year(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['mes'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_mnth'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['mes'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['mes'] = (substr($this->NM_data_qp['mes'], 0, 1) == '0') ? substr($this->NM_data_qp['mes'], 1) : $this->NM_data_qp['mes'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%m', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(month from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('month' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(month from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'MM')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(month, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "month(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['dia'] != "__")
                     {
                         $tmp_cond .= (empty($nm_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_days'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['dia'];
                         $nm_cmd  .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['dia'] = (substr($this->NM_data_qp['dia'], 0, 1) == '0') ? substr($this->NM_data_qp['dia'], 1) : $this->NM_data_qp['dia'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%d', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(day from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('day' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(day from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'DD')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(day, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "day(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                     }
                 }
                 if (strpos($tsql, "TIME") !== false && $this->Date_part)
                 {
                     if ($this->NM_data_qp['hor'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_time'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['hor'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['hor'] = (substr($this->NM_data_qp['hor'], 0, 1) == '0') ? substr($this->NM_data_qp['hor'], 1) : $this->NM_data_qp['hor'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%H', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(hour from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('hour' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(hour from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'HH24')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(hour, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "hour(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['min'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_mint'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['min'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['min'] = (substr($this->NM_data_qp['min'], 0, 1) == '0') ? substr($this->NM_data_qp['min'], 1) : $this->NM_data_qp['min'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%M', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(minute from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('minute' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(minute from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'MI')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(minute, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "minute(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['seg'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_scnd'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['seg'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['seg'] = (substr($this->NM_data_qp['seg'], 0, 1) == '0') ? substr($this->NM_data_qp['seg'], 1) : $this->NM_data_qp['seg'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%S', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(second from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             $nm_cmd .= $this->Ini_date_char . "extract('second' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(second from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'SS')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(second, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "second(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                     }
                 }
                 if (!$this->Date_part)
                 {
                     $nm_cmd  .= $nm_ini_lower . $sql . $nm_fim_lower . $op_all . "'%" . $dados . "%'";
                     $nm_cond  = $lab . " " . $lang_like . " " . $this->Val_format_1 . "##*@@";
                 }
                 else
                 {
                     if (!empty($tmp_cond))
                     {
                         $nm_cond = $lab . ": " . $tmp_cond . "##*@@";
                     }
                 }
              break;
              case "DF":
                 if ($tp == "DT" || $tp == "DH" || $tp == "HH")
                 {
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " not like '%" . $dados . "%'";
                 }
                 else
                 {
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " <> " . $nm_aspas . $dados . $nm_aspas1;
                 }
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_diff'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "GT":
                 $nm_cmd  = $sql . " > " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_grtr'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "GE":
                 $nm_cmd  = $sql . " >= " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_grtr_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "LT":
                 $nm_cmd  = $sql . " < " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_less'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "LE":
                 $nm_cmd  = $sql . " <= " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_less_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "BW":
                 $this->Val_BW_2  = substr($this->Db->qstr($this->Val_BW_2), 1, -1);
                 $nm_cmd = $sql . " between " . $nm_aspas . $dados . $nm_aspas1 . " and " . $nm_aspas . $this->Val_BW_2 . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_betw'] . " " . $this->Val_format_1 . " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " " . $this->Val_format_2 . "##*@@";
              break;
              case "IN":
                 $nm_sc_valores = explode(",", $dados);
                 $cond_str = "";
                 $nm_condX  = "";
                 $ini_mult  = "";
                 $end_mult  = "";
                 if (!empty($nm_sc_valores))
                 {
                     foreach ($nm_sc_valores as $nm_sc_valor)
                     {
                        if ($tp == "N" && substr_count($nm_sc_valor, ".") > 1)
                        {
                           $nm_sc_valor = str_replace(".", "", $nm_sc_valor);
                        }
                        if ("" != $cond_str)
                        {
                           $ini_mult  = "(";
                           $end_mult  = ")";
                           $cond_str .= ",";
                           $nm_condX  .= " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
                        }
                        $cond_str .= $nm_aspas . $nm_sc_valor . $nm_aspas1;
                        $nm_condX .= $nm_aspas . $nm_sc_valor . $nm_aspas1;
                     }
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " IN (" . $cond_str . ")";
                     $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $ini_mult . $nm_condX . $end_mult . "##*@@";
                 }
            break;
              case "NU":
                 $nm_cmd  = $sql . " IS NULL ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_null'] ."##*@@";
              break;
              case "NN":
                 $nm_cmd = $sql . " IS NOT NULL ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_nnul'] . "##*@@";
              break;
              case "EP":
                 $nm_cmd  = $sql . " = '' ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_empty'] ."##*@@";
              break;
              case "NE":
                 $nm_cmd = $sql . " <> '' ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_nempty'] . "##*@@";
              break;
           }
           if (!empty($nm_cmd))
           {
               if (!empty($this->Cmd_Dyn_Search))
               {
                   $this->Cmd_Dyn_Search .= " " . $this->Dyn_Serarch_and_or . " ";
               }
               $this->Cmd_Dyn_Search .= "(" . $nm_cmd . ")";
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['cond_dyn_search'] .= $nm_cond;
           }
   }

   function nm_prep_date(&$val, $tp, $tsql, &$cond, $format_nd)
   {
       if ($tsql == "TIMESTAMP")
       {
           $tsql = "DATETIME";
       }
       $cond = strtoupper($cond);
       if ($cond == "NU" || $cond == "NN" || $cond == "EP" || $cond == "NE")
       {
           $val    = array();
           $val[0] = "";
           return;
       }
       if ($cond == "BW")
       {
           $this->NM_data_1 = array();
           $this->NM_data_1['ano'] = (isset($val[0]['ano']) && !empty($val[0]['ano'])) ? $val[0]['ano'] : "____";
           $this->NM_data_1['mes'] = (isset($val[0]['mes']) && !empty($val[0]['mes'])) ? $val[0]['mes'] : "__";
           $this->NM_data_1['dia'] = (isset($val[0]['dia']) && !empty($val[0]['dia'])) ? $val[0]['dia'] : "__";
           $this->NM_data_1['hor'] = (isset($val[0]['hor']) && !empty($val[0]['hor'])) ? $val[0]['hor'] : "__";
           $this->NM_data_1['min'] = (isset($val[0]['min']) && !empty($val[0]['min'])) ? $val[0]['min'] : "__";
           $this->NM_data_1['seg'] = (isset($val[0]['seg']) && !empty($val[0]['seg'])) ? $val[0]['seg'] : "__";
           $this->data_menor($this->NM_data_1);
           $this->NM_data_2 = array();
           $this->NM_data_2['ano'] = (isset($val[1]['ano']) && !empty($val[1]['ano'])) ? $val[1]['ano'] : "____";
           $this->NM_data_2['mes'] = (isset($val[1]['mes']) && !empty($val[1]['mes'])) ? $val[1]['mes'] : "__";
           $this->NM_data_2['dia'] = (isset($val[1]['dia']) && !empty($val[1]['dia'])) ? $val[1]['dia'] : "__";
           $this->NM_data_2['hor'] = (isset($val[1]['hor']) && !empty($val[1]['hor'])) ? $val[1]['hor'] : "__";
           $this->NM_data_2['min'] = (isset($val[1]['min']) && !empty($val[1]['min'])) ? $val[1]['min'] : "__";
           $this->NM_data_2['seg'] = (isset($val[1]['seg']) && !empty($val[1]['seg'])) ? $val[1]['seg'] : "__";
           $this->data_maior($this->NM_data_2);
           $val = array();
           if ($tsql == "TIME")
           {
               $val[0] = $this->NM_data_1['hor'] . ":" . $this->NM_data_1['min'] . ":" . $this->NM_data_1['seg'];
               $val[1] = $this->NM_data_2['hor'] . ":" . $this->NM_data_2['min'] . ":" . $this->NM_data_2['seg'];
           }
           elseif (substr($tsql, 0, 4) == "DATE")
           {
               $val[0] = $this->NM_data_1['ano'] . "-" . $this->NM_data_1['mes'] . "-" . $this->NM_data_1['dia'];
               $val[1] = $this->NM_data_2['ano'] . "-" . $this->NM_data_2['mes'] . "-" . $this->NM_data_2['dia'];
               if (strpos($tsql, "TIME") !== false)
               {
                   $val[0] .= " " . $this->NM_data_1['hor'] . ":" . $this->NM_data_1['min'] . ":" . $this->NM_data_1['seg'];
                   $val[1] .= " " . $this->NM_data_2['hor'] . ":" . $this->NM_data_2['min'] . ":" . $this->NM_data_2['seg'];
               }
           }
           return;
       }
       $this->NM_data_qp = array();
       $this->NM_data_qp['ano'] = (isset($val[0]['ano']) && !empty($val[0]['ano'])) ? $val[0]['ano'] : "____";
       $this->NM_data_qp['mes'] = (isset($val[0]['mes']) && !empty($val[0]['mes'])) ? $val[0]['mes'] : "__";
       $this->NM_data_qp['dia'] = (isset($val[0]['dia']) && !empty($val[0]['dia'])) ? $val[0]['dia'] : "__";
       $this->NM_data_qp['hor'] = (isset($val[0]['hor']) && !empty($val[0]['hor'])) ? $val[0]['hor'] : "__";
       $this->NM_data_qp['min'] = (isset($val[0]['min']) && !empty($val[0]['min'])) ? $val[0]['min'] : "__";
       $this->NM_data_qp['seg'] = (isset($val[0]['seg']) && !empty($val[0]['seg'])) ? $val[0]['seg'] : "__";
       if ($tp != "ND" && ($cond == "LE" || $cond == "LT" || $cond == "GE" || $cond == "GT"))
       {
           $count_fill = 0;
           foreach ($this->NM_data_qp as $x => $tx)
           {
               if (substr($tx, 0, 2) != "__")
               {
                   $count_fill++;
               }
           }
           if ($count_fill > 1)
           {
               if ($cond == "LE" || $cond == "GT")
               {
                   $this->data_maior($this->NM_data_qp);
               }
               else
               {
                   $this->data_menor($this->NM_data_qp);
               }
               if ($tsql == "TIME")
               {
                   $val[0] = $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
               }
               elseif (substr($tsql, 0, 4) == "DATE")
               {
                   $val[0] = $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
                   if (strpos($tsql, "TIME") !== false)
                   {
                       $val[0] .= " " . $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
                   }
               }
               return;
           }
       }
       foreach ($this->NM_data_qp as $x => $tx)
       {
           if (substr($tx, 0, 2) == "__" && ($x == "dia" || $x == "mes" || $x == "ano"))
           {
               if (substr($tsql, 0, 4) == "DATE")
               {
                   $this->Date_part = true;
                   break;
               }
           }
           if (strpos($tsql, "TIME") !== false && ($tp == "DH" || ($tp == "DT" && $cond != "LE" && $cond != "LT" && $cond != "GE" && $cond != "GT")))
           {
               if (strpos($tsql, "TIME") !== false)
               {
                   $this->Date_part = true;
                   break;
               }
           }
       }
       if ($this->Date_part)
       {
           $this->Ini_date_part = "";
           $this->End_date_part = "";
           $this->Ini_date_char = "";
           $this->End_date_char = "";
           if ($tp != "ND")
           {
               if ($cond == "EQ")
               {
                   $this->Operador_date_part = " = ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_equl'];
               }
               elseif ($cond == "II")
               {
                   $this->Operador_date_part = " like ";
                   $this->Ini_date_part = "'";
                   $this->End_date_part = "%'";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_strt'];
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $this->Ini_date_char = "CAST (";
                       $this->End_date_char = " AS TEXT)";
                   }
               }
               elseif ($cond == "DF")
               {
                   $this->Operador_date_part = " <> ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_diff'];
               }
               elseif ($cond == "GT")
               {
                   $this->Operador_date_part = " > ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['pesq_cond_maior'];
               }
               elseif ($cond == "GE")
               {
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_grtr_equl'];
                   $this->Operador_date_part = " >= ";
               }
               elseif ($cond == "LT")
               {
                   $this->Operador_date_part = " < ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_less'];
               }
               elseif ($cond == "LE")
               {
                   $this->Operador_date_part = " <= ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_less_equl'];
               }
               elseif ($cond == "NP")
               {
                   $this->Operador_date_part = " not like ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_diff'];
                   $this->Ini_date_part = "'%";
                   $this->End_date_part = "%'";
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $this->Ini_date_char = "CAST (";
                       $this->End_date_char = " AS TEXT)";
                   }
               }
               else
               {
                   $this->Operador_date_part = " like ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_equl'];
                   $this->Ini_date_part = "'%";
                   $this->End_date_part = "%'";
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $this->Ini_date_char = "CAST (";
                       $this->End_date_char = " AS TEXT)";
                   }
               }
           }
           if ($cond == "DF")
           {
               $cond = "NP";
           }
           if ($cond != "NP")
           {
               $cond = "QP";
           }
       }
       $val = array();
       if ($tp != "ND" && ($cond == "QP" || $cond == "NP"))
       {
           $val[0] = "";
           if (substr($tsql, 0, 4) == "DATE")
           {
               $val[0] .= $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
               if (strpos($tsql, "TIME") !== false)
               {
                   $val[0] .= " ";
               }
           }
           if (strpos($tsql, "TIME") !== false)
           {
               $val[0] .= $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
           }
           return;
       }
       if ($cond == "II" || $cond == "DF" || $cond == "EQ" || $cond == "LT" || $cond == "GE")
       {
           $this->data_menor($this->NM_data_qp);
       }
       else
       {
           $this->data_maior($this->NM_data_qp);
       }
       if ($tsql == "TIME")
       {
           $val[0] = $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
           return;
       }
       $format_sql = "";
       if (substr($tsql, 0, 4) == "DATE")
       {
           $format_sql .= $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
           if (strpos($tsql, "TIME") !== false)
           {
               $format_sql .= " ";
           }
       }
       if (strpos($tsql, "TIME") !== false)
       {
           $format_sql .=  $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
       }
       if ($tp != "ND")
       {
           $val[0] = $format_sql;
           return;
       }
       if ($tp == "ND")
       {
           $format_nd = str_replace("yyyy", $this->NM_data_qp['ano'], $format_nd);
           $format_nd = str_replace("mm",   $this->NM_data_qp['mes'], $format_nd);
           $format_nd = str_replace("dd",   $this->NM_data_qp['dia'], $format_nd);
           $format_nd = str_replace("hh",   $this->NM_data_qp['hor'], $format_nd);
           $format_nd = str_replace("ii",   $this->NM_data_qp['min'], $format_nd);
           $format_nd = str_replace("ss",   $this->NM_data_qp['seg'], $format_nd);
           $val[0] = $format_nd;
           return;
       }
   }
   function data_menor(&$data_arr)
   {
       $data_arr["ano"] = ("____" == $data_arr["ano"]) ? "0001" : $data_arr["ano"];
       $data_arr["mes"] = ("__" == $data_arr["mes"])   ? "01" : $data_arr["mes"];
       $data_arr["dia"] = ("__" == $data_arr["dia"])   ? "01" : $data_arr["dia"];
       $data_arr["hor"] = ("__" == $data_arr["hor"])   ? "00" : $data_arr["hor"];
       $data_arr["min"] = ("__" == $data_arr["min"])   ? "00" : $data_arr["min"];
       $data_arr["seg"] = ("__" == $data_arr["seg"])   ? "00" : $data_arr["seg"];
   }

   function data_maior(&$data_arr)
   {
       $data_arr["ano"] = ("____" == $data_arr["ano"]) ? "9999" : $data_arr["ano"];
       $data_arr["mes"] = ("__" == $data_arr["mes"])   ? "12" : $data_arr["mes"];
       $data_arr["hor"] = ("__" == $data_arr["hor"])   ? "23" : $data_arr["hor"];
       $data_arr["min"] = ("__" == $data_arr["min"])   ? "59" : $data_arr["min"];
       $data_arr["seg"] = ("__" == $data_arr["seg"])   ? "59" : $data_arr["seg"];
       if ("__" == $data_arr["dia"])
       {
           $data_arr["dia"] = "31";
           if ($data_arr["mes"] == "04" || $data_arr["mes"] == "06" || $data_arr["mes"] == "09" || $data_arr["mes"] == "11")
           {
               $data_arr["dia"] = 30;
           }
           elseif ($data_arr["mes"] == "02")
           { 
                if  ($data_arr["ano"] % 4 == 0)
                {
                     $data_arr["dia"] = 29;
                }
                else 
                {
                     $data_arr["dia"] = 28;
                }
           }
       }
   }
   function dyn_convert_date($val)
   {
       $val_ok = array();
       foreach ($val as $Part_date)
       {
           if (substr($Part_date, 0, 1) == "Y")
           {
               $val_ok['ano'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "M")
           {
               $val_ok['mes'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "D")
           {
               $val_ok['dia'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "H")
           {
               $val_ok['hor'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "I")
           {
               $val_ok['min'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "S")
           {
               $val_ok['seg'] = substr($Part_date, 2);
           }
       }
       return $val_ok;
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_public_pessoa_fisica_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_public_pessoa_fisica_mob_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = '_self';
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_public_pessoa_fisica_mob_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['sc_modal'])
   {
?>
        parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
   elseif ($this->lig_edit_lookup)
   {
?>
        opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
?>
      }
      if (bLigEditLookupCall)
      {
        scLigEditLookupCall();
      }
<?php
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['masterValue']);
?>
}
<?php
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>
