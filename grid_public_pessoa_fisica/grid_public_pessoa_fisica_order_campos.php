<?php
   include_once('grid_public_pessoa_fisica_session.php');
   session_start();
   if (!function_exists("NM_is_utf8"))
   {
       include_once("../_lib/lib/php/nm_utf8.php");
   }
    $Ord_Cmp = new grid_public_pessoa_fisica_Ord_cmp(); 
    $Ord_Cmp->Ord_cmp_init();
   
class grid_public_pessoa_fisica_Ord_cmp
{
function Ord_cmp_init()
{
  global $sc_init, $path_img, $path_btn, $tab_ger_campos, $tab_def_campos, $tab_converte, $tab_labels, $embbed, $tbar_pos, $_POST, $_GET;
   if (isset($_POST['script_case_init']))
   {
       $sc_init    = $_POST['script_case_init'];
       $path_img   = $_POST['path_img'];
       $path_btn   = $_POST['path_btn'];
       $use_alias  = (isset($_POST['use_alias']))  ? $_POST['use_alias']  : "S";
       $fsel_ok    = (isset($_POST['fsel_ok']))    ? $_POST['fsel_ok']    : "";
       $campos_sel = (isset($_POST['campos_sel'])) ? $_POST['campos_sel'] : "";
       $sel_regra  = (isset($_POST['sel_regra']))  ? $_POST['sel_regra']  : "";
       $embbed     = isset($_POST['embbed_groupby']) && 'Y' == $_POST['embbed_groupby'];
       $tbar_pos   = isset($_POST['toolbar_pos']) ? $_POST['toolbar_pos'] : '';
   }
   elseif (isset($_GET['script_case_init']))
   {
       $sc_init    = $_GET['script_case_init'];
       $path_img   = $_GET['path_img'];
       $path_btn   = $_GET['path_btn'];
       $use_alias  = (isset($_GET['use_alias']))  ? $_GET['use_alias']  : "S";
       $fsel_ok    = (isset($_GET['fsel_ok']))    ? $_GET['fsel_ok']    : "";
       $campos_sel = (isset($_GET['campos_sel'])) ? $_GET['campos_sel'] : "";
       $sel_regra  = (isset($_GET['sel_regra']))  ? $_GET['sel_regra']  : "";
       $embbed     = isset($_GET['embbed_groupby']) && 'Y' == $_GET['embbed_groupby'];
       $tbar_pos   = isset($_GET['toolbar_pos']) ? $_GET['toolbar_pos'] : '';
   }
   $STR_lang    = (isset($_SESSION['scriptcase']['str_lang']) && !empty($_SESSION['scriptcase']['str_lang'])) ? $_SESSION['scriptcase']['str_lang'] : "pt_br";
   $NM_arq_lang = "../_lib/lang/" . $STR_lang . ".lang.php";
   $this->Nm_lang = array();
   if (is_file($NM_arq_lang))
   {
       include_once($NM_arq_lang);
   }
   
   $tab_ger_campos = array();
   $tab_def_campos = array();
   $tab_labels     = array();
   $tab_ger_campos['public_pessoa_fisica_id_pessoa_fisica'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_id_pessoa_fisica'] = "cmp_maior_30_1";
       $tab_converte["cmp_maior_30_1"]   = "public_pessoa_fisica_id_pessoa_fisica";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_id_pessoa_fisica'] = "id_pessoa_fisica";
       $tab_converte["id_pessoa_fisica"]   = "public_pessoa_fisica_id_pessoa_fisica";
   }
   $tab_labels["public_pessoa_fisica_id_pessoa_fisica"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_pessoa_fisica"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_pessoa_fisica"] : "ID Pessoa Fisica";
   $tab_ger_campos['public_pessoa_fisica_cpf'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_cpf'] = "public_pessoa_fisica_cpf";
       $tab_converte["public_pessoa_fisica_cpf"]   = "public_pessoa_fisica_cpf";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_cpf'] = "cpf";
       $tab_converte["cpf"]   = "public_pessoa_fisica_cpf";
   }
   $tab_labels["public_pessoa_fisica_cpf"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cpf"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cpf"] : "CPF";
   $tab_ger_campos['public_pessoa_fisica_nome'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_nome'] = "public_pessoa_fisica_nome";
       $tab_converte["public_pessoa_fisica_nome"]   = "public_pessoa_fisica_nome";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_nome'] = "nome";
       $tab_converte["nome"]   = "public_pessoa_fisica_nome";
   }
   $tab_labels["public_pessoa_fisica_nome"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_nome"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_nome"] : "Nome";
   $tab_ger_campos['public_pessoa_fisica_endereco'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_endereco'] = "public_pessoa_fisica_endereco";
       $tab_converte["public_pessoa_fisica_endereco"]   = "public_pessoa_fisica_endereco";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_endereco'] = "endereco";
       $tab_converte["endereco"]   = "public_pessoa_fisica_endereco";
   }
   $tab_labels["public_pessoa_fisica_endereco"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_endereco"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_endereco"] : "Endereço";
   $tab_ger_campos['public_pessoa_fisica_endereco_comp'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_endereco_comp'] = "cmp_maior_30_2";
       $tab_converte["cmp_maior_30_2"]   = "public_pessoa_fisica_endereco_comp";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_endereco_comp'] = "endereco_comp";
       $tab_converte["endereco_comp"]   = "public_pessoa_fisica_endereco_comp";
   }
   $tab_labels["public_pessoa_fisica_endereco_comp"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_endereco_comp"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_endereco_comp"] : "Endereço Comp";
   $tab_ger_campos['public_pessoa_fisica_bairro'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_bairro'] = "public_pessoa_fisica_bairro";
       $tab_converte["public_pessoa_fisica_bairro"]   = "public_pessoa_fisica_bairro";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_bairro'] = "bairro";
       $tab_converte["bairro"]   = "public_pessoa_fisica_bairro";
   }
   $tab_labels["public_pessoa_fisica_bairro"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_bairro"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_bairro"] : "Endereço Bairro";
   $tab_ger_campos['id_municipio'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['id_municipio'] = "id_municipio";
       $tab_converte["id_municipio"]   = "id_municipio";
   }
   else
   {
       $tab_def_campos['id_municipio'] = "municipio.nm_municipio";
       $tab_converte["municipio.nm_municipio"]   = "id_municipio";
   }
   $tab_labels["id_municipio"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["id_municipio"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["id_municipio"] : "Endereço Município";
   $tab_ger_campos['id_uf'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['id_uf'] = "id_uf";
       $tab_converte["id_uf"]   = "id_uf";
   }
   else
   {
       $tab_def_campos['id_uf'] = "uf.uf_nome";
       $tab_converte["uf.uf_nome"]   = "id_uf";
   }
   $tab_labels["id_uf"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["id_uf"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["id_uf"] : "Endereço UF";
   $tab_ger_campos['id_pais'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['id_pais'] = "id_pais";
       $tab_converte["id_pais"]   = "id_pais";
   }
   else
   {
       $tab_def_campos['id_pais'] = "pais.pais_nm_pais_ter_ptb";
       $tab_converte["pais.pais_nm_pais_ter_ptb"]   = "id_pais";
   }
   $tab_labels["id_pais"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["id_pais"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["id_pais"] : "Endereço País";
   $tab_ger_campos['public_pessoa_fisica_cep'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_cep'] = "public_pessoa_fisica_cep";
       $tab_converte["public_pessoa_fisica_cep"]   = "public_pessoa_fisica_cep";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_cep'] = "cep";
       $tab_converte["cep"]   = "public_pessoa_fisica_cep";
   }
   $tab_labels["public_pessoa_fisica_cep"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cep"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cep"] : "Endereço CEP";
   $tab_ger_campos['public_pessoa_fisica_endereco_cob'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_endereco_cob'] = "cmp_maior_30_3";
       $tab_converte["cmp_maior_30_3"]   = "public_pessoa_fisica_endereco_cob";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_endereco_cob'] = "endereco_cob";
       $tab_converte["endereco_cob"]   = "public_pessoa_fisica_endereco_cob";
   }
   $tab_labels["public_pessoa_fisica_endereco_cob"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_endereco_cob"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_endereco_cob"] : "Endereço Cobrança";
   $tab_ger_campos['public_pessoa_fisica_endereco_comp_cob'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_endereco_comp_cob'] = "cmp_maior_30_4";
       $tab_converte["cmp_maior_30_4"]   = "public_pessoa_fisica_endereco_comp_cob";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_endereco_comp_cob'] = "endereco_comp_cob";
       $tab_converte["endereco_comp_cob"]   = "public_pessoa_fisica_endereco_comp_cob";
   }
   $tab_labels["public_pessoa_fisica_endereco_comp_cob"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_endereco_comp_cob"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_endereco_comp_cob"] : "Endereço Cobrança Comp";
   $tab_ger_campos['public_pessoa_fisica_bairro_cob'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_bairro_cob'] = "cmp_maior_30_5";
       $tab_converte["cmp_maior_30_5"]   = "public_pessoa_fisica_bairro_cob";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_bairro_cob'] = "bairro_cob";
       $tab_converte["bairro_cob"]   = "public_pessoa_fisica_bairro_cob";
   }
   $tab_labels["public_pessoa_fisica_bairro_cob"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_bairro_cob"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_bairro_cob"] : "Endereço Cobrança Bairro";
   $tab_ger_campos['public_pessoa_fisica_id_municipio_cob'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_id_municipio_cob'] = "cmp_maior_30_6";
       $tab_converte["cmp_maior_30_6"]   = "public_pessoa_fisica_id_municipio_cob";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_id_municipio_cob'] = "id_municipio_cob";
       $tab_converte["id_municipio_cob"]   = "public_pessoa_fisica_id_municipio_cob";
   }
   $tab_labels["public_pessoa_fisica_id_municipio_cob"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_municipio_cob"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_municipio_cob"] : "Endereço Cobrança Município";
   $tab_ger_campos['public_pessoa_fisica_id_uf_cob'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_id_uf_cob'] = "public_pessoa_fisica_id_uf_cob";
       $tab_converte["public_pessoa_fisica_id_uf_cob"]   = "public_pessoa_fisica_id_uf_cob";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_id_uf_cob'] = "id_uf_cob";
       $tab_converte["id_uf_cob"]   = "public_pessoa_fisica_id_uf_cob";
   }
   $tab_labels["public_pessoa_fisica_id_uf_cob"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_uf_cob"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_uf_cob"] : "Endereço Cobrança UF";
   $tab_ger_campos['public_pessoa_fisica_id_pais_cob'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_id_pais_cob'] = "cmp_maior_30_7";
       $tab_converte["cmp_maior_30_7"]   = "public_pessoa_fisica_id_pais_cob";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_id_pais_cob'] = "id_pais_cob";
       $tab_converte["id_pais_cob"]   = "public_pessoa_fisica_id_pais_cob";
   }
   $tab_labels["public_pessoa_fisica_id_pais_cob"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_pais_cob"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_pais_cob"] : "Endereço Cobrança País";
   $tab_ger_campos['public_pessoa_fisica_cep_cob'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_cep_cob'] = "public_pessoa_fisica_cep_cob";
       $tab_converte["public_pessoa_fisica_cep_cob"]   = "public_pessoa_fisica_cep_cob";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_cep_cob'] = "cep_cob";
       $tab_converte["cep_cob"]   = "public_pessoa_fisica_cep_cob";
   }
   $tab_labels["public_pessoa_fisica_cep_cob"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cep_cob"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cep_cob"] : "Endereço Cobrança CEP";
   $tab_ger_campos['public_pessoa_fisica_dt_nasc'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_dt_nasc'] = "public_pessoa_fisica_dt_nasc";
       $tab_converte["public_pessoa_fisica_dt_nasc"]   = "public_pessoa_fisica_dt_nasc";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_dt_nasc'] = "dt_nasc";
       $tab_converte["dt_nasc"]   = "public_pessoa_fisica_dt_nasc";
   }
   $tab_labels["public_pessoa_fisica_dt_nasc"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_dt_nasc"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_dt_nasc"] : "Dt. Nascimento";
   $tab_ger_campos['public_pessoa_fisica_sexo'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_sexo'] = "public_pessoa_fisica_sexo";
       $tab_converte["public_pessoa_fisica_sexo"]   = "public_pessoa_fisica_sexo";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_sexo'] = "sexo";
       $tab_converte["sexo"]   = "public_pessoa_fisica_sexo";
   }
   $tab_labels["public_pessoa_fisica_sexo"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_sexo"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_sexo"] : "Sexo";
   $tab_ger_campos['public_pessoa_fisica_id_tipo_estado_civil'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_id_tipo_estado_civil'] = "cmp_maior_30_8";
       $tab_converte["cmp_maior_30_8"]   = "public_pessoa_fisica_id_tipo_estado_civil";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_id_tipo_estado_civil'] = "id_tipo_estado_civil";
       $tab_converte["id_tipo_estado_civil"]   = "public_pessoa_fisica_id_tipo_estado_civil";
   }
   $tab_labels["public_pessoa_fisica_id_tipo_estado_civil"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_tipo_estado_civil"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_tipo_estado_civil"] : "Tipo Estado Civil";
   $tab_ger_campos['public_pessoa_fisica_id_tipo_escolaridade'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_id_tipo_escolaridade'] = "cmp_maior_30_9";
       $tab_converte["cmp_maior_30_9"]   = "public_pessoa_fisica_id_tipo_escolaridade";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_id_tipo_escolaridade'] = "id_tipo_escolaridade";
       $tab_converte["id_tipo_escolaridade"]   = "public_pessoa_fisica_id_tipo_escolaridade";
   }
   $tab_labels["public_pessoa_fisica_id_tipo_escolaridade"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_tipo_escolaridade"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_tipo_escolaridade"] : "Tipo Escolaridade";
   $tab_ger_campos['public_pessoa_fisica_id_tipo_sanguineo'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_id_tipo_sanguineo'] = "cmp_maior_30_10";
       $tab_converte["cmp_maior_30_10"]   = "public_pessoa_fisica_id_tipo_sanguineo";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_id_tipo_sanguineo'] = "id_tipo_sanguineo";
       $tab_converte["id_tipo_sanguineo"]   = "public_pessoa_fisica_id_tipo_sanguineo";
   }
   $tab_labels["public_pessoa_fisica_id_tipo_sanguineo"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_tipo_sanguineo"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_tipo_sanguineo"] : "Tipo Sanguineo";
   $tab_ger_campos['public_pessoa_fisica_profissao'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_profissao'] = "public_pessoa_fisica_profissao";
       $tab_converte["public_pessoa_fisica_profissao"]   = "public_pessoa_fisica_profissao";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_profissao'] = "profissao";
       $tab_converte["profissao"]   = "public_pessoa_fisica_profissao";
   }
   $tab_labels["public_pessoa_fisica_profissao"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_profissao"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_profissao"] : "Profissão";
   $tab_ger_campos['public_pessoa_fisica_aposentado'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_aposentado'] = "cmp_maior_30_11";
       $tab_converte["cmp_maior_30_11"]   = "public_pessoa_fisica_aposentado";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_aposentado'] = "aposentado";
       $tab_converte["aposentado"]   = "public_pessoa_fisica_aposentado";
   }
   $tab_labels["public_pessoa_fisica_aposentado"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_aposentado"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_aposentado"] : "Aposentado";
   $tab_ger_campos['public_pessoa_fisica_rg'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_rg'] = "public_pessoa_fisica_rg";
       $tab_converte["public_pessoa_fisica_rg"]   = "public_pessoa_fisica_rg";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_rg'] = "rg";
       $tab_converte["rg"]   = "public_pessoa_fisica_rg";
   }
   $tab_labels["public_pessoa_fisica_rg"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_rg"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_rg"] : "RG";
   $tab_ger_campos['public_pessoa_fisica_rg_orgao_emissor'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_rg_orgao_emissor'] = "cmp_maior_30_12";
       $tab_converte["cmp_maior_30_12"]   = "public_pessoa_fisica_rg_orgao_emissor";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_rg_orgao_emissor'] = "rg_orgao_emissor";
       $tab_converte["rg_orgao_emissor"]   = "public_pessoa_fisica_rg_orgao_emissor";
   }
   $tab_labels["public_pessoa_fisica_rg_orgao_emissor"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_rg_orgao_emissor"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_rg_orgao_emissor"] : "RG Orgão Emissor";
   $tab_ger_campos['public_pessoa_fisica_rg_uf_emissor'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_rg_uf_emissor'] = "cmp_maior_30_13";
       $tab_converte["cmp_maior_30_13"]   = "public_pessoa_fisica_rg_uf_emissor";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_rg_uf_emissor'] = "rg_uf_emissor";
       $tab_converte["rg_uf_emissor"]   = "public_pessoa_fisica_rg_uf_emissor";
   }
   $tab_labels["public_pessoa_fisica_rg_uf_emissor"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_rg_uf_emissor"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_rg_uf_emissor"] : "RG UF Emissor";
   $tab_ger_campos['public_pessoa_fisica_rg_dt_emissao'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_rg_dt_emissao'] = "cmp_maior_30_14";
       $tab_converte["cmp_maior_30_14"]   = "public_pessoa_fisica_rg_dt_emissao";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_rg_dt_emissao'] = "rg_dt_emissao";
       $tab_converte["rg_dt_emissao"]   = "public_pessoa_fisica_rg_dt_emissao";
   }
   $tab_labels["public_pessoa_fisica_rg_dt_emissao"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_rg_dt_emissao"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_rg_dt_emissao"] : "RG Dt Emissão";
   $tab_ger_campos['public_pessoa_fisica_passaporte'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_passaporte'] = "cmp_maior_30_15";
       $tab_converte["cmp_maior_30_15"]   = "public_pessoa_fisica_passaporte";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_passaporte'] = "passaporte";
       $tab_converte["passaporte"]   = "public_pessoa_fisica_passaporte";
   }
   $tab_labels["public_pessoa_fisica_passaporte"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_passaporte"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_passaporte"] : "Passaporte";
   $tab_ger_campos['public_pessoa_fisica_passaporte_dt_emissao'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_passaporte_dt_emissao'] = "cmp_maior_30_16";
       $tab_converte["cmp_maior_30_16"]   = "public_pessoa_fisica_passaporte_dt_emissao";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_passaporte_dt_emissao'] = "passaporte_dt_emissao";
       $tab_converte["passaporte_dt_emissao"]   = "public_pessoa_fisica_passaporte_dt_emissao";
   }
   $tab_labels["public_pessoa_fisica_passaporte_dt_emissao"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_passaporte_dt_emissao"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_passaporte_dt_emissao"] : "Passaporte Dt Emissão";
   $tab_ger_campos['public_pessoa_fisica_passaporte_pais_origem'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_passaporte_pais_origem'] = "cmp_maior_30_17";
       $tab_converte["cmp_maior_30_17"]   = "public_pessoa_fisica_passaporte_pais_origem";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_passaporte_pais_origem'] = "passaporte_pais_origem";
       $tab_converte["passaporte_pais_origem"]   = "public_pessoa_fisica_passaporte_pais_origem";
   }
   $tab_labels["public_pessoa_fisica_passaporte_pais_origem"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_passaporte_pais_origem"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_passaporte_pais_origem"] : "Passaporte País Origem";
   $tab_ger_campos['public_pessoa_fisica_nacionalidade'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_nacionalidade'] = "cmp_maior_30_18";
       $tab_converte["cmp_maior_30_18"]   = "public_pessoa_fisica_nacionalidade";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_nacionalidade'] = "nacionalidade";
       $tab_converte["nacionalidade"]   = "public_pessoa_fisica_nacionalidade";
   }
   $tab_labels["public_pessoa_fisica_nacionalidade"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_nacionalidade"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_nacionalidade"] : "Nacionalidade";
   $tab_ger_campos['public_pessoa_fisica_naturalidade'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_naturalidade'] = "cmp_maior_30_19";
       $tab_converte["cmp_maior_30_19"]   = "public_pessoa_fisica_naturalidade";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_naturalidade'] = "naturalidade";
       $tab_converte["naturalidade"]   = "public_pessoa_fisica_naturalidade";
   }
   $tab_labels["public_pessoa_fisica_naturalidade"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_naturalidade"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_naturalidade"] : "Naturalidade";
   $tab_ger_campos['public_pessoa_fisica_cnh'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_cnh'] = "public_pessoa_fisica_cnh";
       $tab_converte["public_pessoa_fisica_cnh"]   = "public_pessoa_fisica_cnh";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_cnh'] = "cnh";
       $tab_converte["cnh"]   = "public_pessoa_fisica_cnh";
   }
   $tab_labels["public_pessoa_fisica_cnh"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cnh"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cnh"] : "CNH";
   $tab_ger_campos['public_pessoa_fisica_cnh_dt_validade'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_cnh_dt_validade'] = "cmp_maior_30_20";
       $tab_converte["cmp_maior_30_20"]   = "public_pessoa_fisica_cnh_dt_validade";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_cnh_dt_validade'] = "cnh_dt_validade";
       $tab_converte["cnh_dt_validade"]   = "public_pessoa_fisica_cnh_dt_validade";
   }
   $tab_labels["public_pessoa_fisica_cnh_dt_validade"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cnh_dt_validade"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cnh_dt_validade"] : "CNH Dt Validade";
   $tab_ger_campos['public_pessoa_fisica_cnh_categoria'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_cnh_categoria'] = "cmp_maior_30_21";
       $tab_converte["cmp_maior_30_21"]   = "public_pessoa_fisica_cnh_categoria";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_cnh_categoria'] = "cnh_categoria";
       $tab_converte["cnh_categoria"]   = "public_pessoa_fisica_cnh_categoria";
   }
   $tab_labels["public_pessoa_fisica_cnh_categoria"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cnh_categoria"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_cnh_categoria"] : "CNH Categoria";
   $tab_ger_campos['obs'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['obs'] = "obs";
       $tab_converte["obs"]   = "obs";
   }
   else
   {
       $tab_def_campos['obs'] = "pessoa_fisica.obs";
       $tab_converte["pessoa_fisica.obs"]   = "obs";
   }
   $tab_labels["obs"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["obs"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["obs"] : "Obs";
   $tab_ger_campos['public_pessoa_fisica_id_tipo_vinculo'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['public_pessoa_fisica_id_tipo_vinculo'] = "cmp_maior_30_22";
       $tab_converte["cmp_maior_30_22"]   = "public_pessoa_fisica_id_tipo_vinculo";
   }
   else
   {
       $tab_def_campos['public_pessoa_fisica_id_tipo_vinculo'] = "id_tipo_vinculo";
       $tab_converte["id_tipo_vinculo"]   = "public_pessoa_fisica_id_tipo_vinculo";
   }
   $tab_labels["public_pessoa_fisica_id_tipo_vinculo"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_tipo_vinculo"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["public_pessoa_fisica_id_tipo_vinculo"] : "Tipo Vinculo";
   $tab_ger_campos['id_ativo'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['id_ativo'] = "id_ativo";
       $tab_converte["id_ativo"]   = "id_ativo";
   }
   else
   {
       $tab_def_campos['id_ativo'] = "pessoa_fisica.id_ativo";
       $tab_converte["pessoa_fisica.id_ativo"]   = "id_ativo";
   }
   $tab_labels["id_ativo"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["id_ativo"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["id_ativo"] : "Ativo";
   $tab_ger_campos['dt_cadastro'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['dt_cadastro'] = "dt_cadastro";
       $tab_converte["dt_cadastro"]   = "dt_cadastro";
   }
   else
   {
       $tab_def_campos['dt_cadastro'] = "pessoa_fisica.dt_cadastro";
       $tab_converte["pessoa_fisica.dt_cadastro"]   = "dt_cadastro";
   }
   $tab_labels["dt_cadastro"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["dt_cadastro"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["dt_cadastro"] : "Dt Cadastro";
   $tab_ger_campos['dt_atualiza'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['dt_atualiza'] = "dt_atualiza";
       $tab_converte["dt_atualiza"]   = "dt_atualiza";
   }
   else
   {
       $tab_def_campos['dt_atualiza'] = "pessoa_fisica.dt_atualiza";
       $tab_converte["pessoa_fisica.dt_atualiza"]   = "dt_atualiza";
   }
   $tab_labels["dt_atualiza"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["dt_atualiza"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["dt_atualiza"] : "Dt Atualização";
   $tab_ger_campos['usu_cadastro'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['usu_cadastro'] = "usu_cadastro";
       $tab_converte["usu_cadastro"]   = "usu_cadastro";
   }
   else
   {
       $tab_def_campos['usu_cadastro'] = "pessoa_fisica.usu_cadastro";
       $tab_converte["pessoa_fisica.usu_cadastro"]   = "usu_cadastro";
   }
   $tab_labels["usu_cadastro"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["usu_cadastro"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["usu_cadastro"] : "Usuário Cadastrou";
   $tab_ger_campos['usu_atualiza'] = "on";
   if ($use_alias == "S")
   {
       $tab_def_campos['usu_atualiza'] = "usu_atualiza";
       $tab_converte["usu_atualiza"]   = "usu_atualiza";
   }
   else
   {
       $tab_def_campos['usu_atualiza'] = "pessoa_fisica.usu_atualiza";
       $tab_converte["pessoa_fisica.usu_atualiza"]   = "usu_atualiza";
   }
   $tab_labels["usu_atualiza"]   = (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["usu_atualiza"])) ? $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['labels']["usu_atualiza"] : "Usuário Atualizou";
   if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_fisica']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_fisica']['field_display']))
   {
       foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_public_pessoa_fisica']['field_display'] as $NM_cada_field => $NM_cada_opc)
       {
           if ($NM_cada_opc == "off")
           {
              $tab_ger_campos[$NM_cada_field] = "none";
           }
       }
   }
   if (isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['php_cmp_sel']))
   {
       foreach ($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
       {
           if ($NM_cada_opc == "off")
           {
              $tab_ger_campos[$NM_cada_field] = "none";
           }
       }
   }
   if (!isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['ordem_select']))
   {
       $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['ordem_select'] = array();
   }
   
   if ($fsel_ok == "cmp")
   {
       $this->Sel_processa_out_sel($campos_sel);
   }
   else
   {
       if ($embbed)
       {
           ob_start();
           $this->Sel_processa_form();
           $Temp = ob_get_clean();
           echo NM_charset_to_utf8($Temp);
       }
       else
       {
           $this->Sel_processa_form();
       }
   }
   exit;
   
}
function Sel_processa_out_sel($campos_sel)
{
   global $tab_ger_campos, $sc_init, $tab_def_campos, $tab_converte, $embbed;
   $arr_temp = array();
   $campos_sel = explode("@?@", $campos_sel);
   $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['ordem_select'] = array();
   $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['ordem_grid']   = "";
   $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['ordem_cmp']    = "";
   foreach ($campos_sel as $campo_sort)
   {
       $ordem = (substr($campo_sort, 0, 1) == "+") ? "asc" : "desc";
       $campo = substr($campo_sort, 1);
       if (isset($tab_converte[$campo]))
       {
           $_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['ordem_select'][$campo] = $ordem;
       }
   }
?>
    <script language="javascript"> 
<?php
   if (!$embbed)
   {
?>
      self.parent.tb_remove(); 
      parent.nm_gp_submit_ajax('scroll_nav_inicio', ''); 
<?php
   }
   else
   {
?>
      nm_gp_submit_ajax('scroll_nav_inicio', ''); 
<?php
   }
?>
   </script>
<?php
}
   
function Sel_processa_form()
{
  global $sc_init, $path_img, $path_btn, $tab_ger_campos, $tab_def_campos, $tab_converte, $tab_labels, $embbed, $tbar_pos;
   $size = 10;
   $_SESSION['scriptcase']['charset']  = (isset($this->Nm_lang['Nm_charset']) && !empty($this->Nm_lang['Nm_charset'])) ? $this->Nm_lang['Nm_charset'] : "UTF-8";
   foreach ($this->Nm_lang as $ind => $dados)
   {
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($ind))
      {
          $ind = sc_convert_encoding($ind, $_SESSION['scriptcase']['charset'], "UTF-8");
          $this->Nm_lang[$ind] = $dados;
      }
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
      {
          $this->Nm_lang[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
   }
   $str_schema_all = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "tema_verde/tema_verde";
   include("../_lib/css/" . $str_schema_all . "_grid.php");
   $str_button = (isset($_SESSION['scriptcase']['str_button_all'])) ? $_SESSION['scriptcase']['str_button_all'] : "VERDE_MODERNO";
   $Str_btn_grid = trim($str_button) . "/" . trim($str_button) . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".php";
   include("../_lib/buttons/" . $Str_btn_grid);
   if (!function_exists("nmButtonOutput"))
   {
       include_once("../_lib/lib/php/nm_gp_config_btn.php");
   }
   if (!$embbed)
   {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Nm_lang['lang_othr_grid_titl'] ?> - Pessoa Física</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
   <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup_dir'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup_div'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup_div_dir'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $_SESSION['scriptcase']['css_btn_popup'] ?>" /> 
</HEAD>
<BODY class="scGridPage" style="margin: 0px; overflow-x: hidden">
<script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/jquery/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/jquery/js/jquery-ui.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/jquery_plugin/touch_punch/jquery.ui.touch-punch.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/tigra_color_picker/picker.js"></script>
<?php
   }
?>
<script language="javascript"> 
<?php
if ($embbed)
{
?>
  function scSubmitOrderCampos(sPos, sType) {
    $("#id_fsel_ok_sel_ord").val(sType);
    if(sType == 'cmp')
    {
       scPackSelectedOrd();
    }
   $.ajax({
    type: "POST",
    url: "grid_public_pessoa_fisica_order_campos.php",
    data: {
     script_case_init: $("#id_script_case_init_sel_ord").val(),
     script_case_session: $("#id_script_case_session_sel_ord").val(),
     path_img: $("#id_path_img_sel_ord").val(),
     path_btn: $("#id_path_btn_sel_ord").val(),
     campos_sel: $("#id_campos_sel_sel_ord").val(),
     sel_regra: $("#id_sel_regra_sel_ord").val(),
     fsel_ok: $("#id_fsel_ok_sel_ord").val(),
     embbed_groupby: 'Y'
    }
   }).success(function(data) {
    $("#sc_id_order_campos_placeholder_" + sPos).find("td").html(data);
    scBtnOrderCamposHide(sPos);
   });
  }
<?php
}
?>
 // Submeter o formularior
 //-------------------------------------
 function submit_form_Fsel_ord()
 {
     scPackSelectedOrd();
      document.Fsel_ord.submit();
 }
 function scPackSelectedOrd() {
  var fieldList, fieldName, i, selectedFields = new Array;
 fieldList = $("#sc_id_fldord_selected").sortable("toArray");
 for (i = 0; i < fieldList.length; i++) {
  fieldName  = fieldList[i].substr(14);
  selectedFields.push($("#sc_id_class_" + fieldName).val() + fieldName);
 }
 $("#id_campos_sel_sel_ord").val( selectedFields.join("@?@") );
 }
 </script>
<FORM name="Fsel_ord" method="POST">
  <INPUT type="hidden" name="script_case_init"    id="id_script_case_init_sel_ord"    value="<?php echo NM_encode_input($sc_init); ?>"> 
  <INPUT type="hidden" name="script_case_session" id="id_script_case_session_sel_ord" value="<?php echo NM_encode_input(session_id()); ?>"> 
  <INPUT type="hidden" name="path_img"            id="id_path_img_sel_ord"            value="<?php echo NM_encode_input($path_img); ?>"> 
  <INPUT type="hidden" name="path_btn"            id="id_path_btn_sel_ord"            value="<?php echo NM_encode_input($path_btn); ?>"> 
  <INPUT type="hidden" name="fsel_ok"             id="id_fsel_ok_sel_ord"             value=""> 
<?php
if ($embbed)
{
    echo "<div class='scAppDivMoldura'>";
    echo "<table id=\"main_table\" style=\"width: 100%\" cellspacing=0 cellpadding=0>";
}
elseif ($_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'")
{
    echo "<table id=\"main_table\" style=\"position: relative; top: 20px; right: 20px\">";
}
else
{
    echo "<table id=\"main_table\" style=\"position: relative; top: 20px; left: 20px\">";
}
?>
<?php
if (!$embbed)
{
?>
<tr>
<td>
<div class="scGridBorder">
<table width='100%' cellspacing=0 cellpadding=0>
<?php
}
?>
 <tr>
  <td class="<?php echo ($embbed)? 'scAppDivHeader scAppDivHeaderText':'scGridLabelVert'; ?>">
   <?php echo $this->Nm_lang['lang_btns_sort_hint']; ?>
  </td>
 </tr>
 <tr>
  <td class="<?php echo ($embbed)? 'scAppDivContent css_scAppDivContentText':'scGridTabelaTd'; ?>">
   <table class="<?php echo ($embbed)? '':'scGridTabela'; ?>" style="border-width: 0; border-collapse: collapse; width:100%;" cellspacing=0 cellpadding=0>
    <tr class="<?php echo ($embbed)? '':'scGridFieldOddVert'; ?>">
     <td style="vertical-align: top">
     <table>
   <tr><td style="vertical-align: top">
 <script language="javascript" type="text/javascript">
  $(function() {
   $(".sc_ui_litem").mouseover(function() {
    $(this).css("cursor", "all-scroll");
   });
   $("#sc_id_fldord_available").sortable({
    connectWith: ".sc_ui_fldord_selected",
    placeholder: "scAppDivSelectFieldsPlaceholder",
    remove: function(event, ui) {
     var fieldName = $(ui.item[0]).find("select").attr("id");
     $("#" + fieldName).show();
     $('#f_sel_sub').css('display', 'inline-block');
    }
   }).disableSelection();
   $("#sc_id_fldord_selected").sortable({
    connectWith: ".sc_ui_fldord_available",
    placeholder: "scAppDivSelectFieldsPlaceholder",
    remove: function(event, ui) {
     var fieldName = $(ui.item[0]).find("select").attr("id");
     $("#" + fieldName).hide();
     $('#f_sel_sub').css('display', 'inline-block');
    }
   });
   scUpdateListHeight();
  });
  function scUpdateListHeight() {
   $("#sc_id_fldord_available").css("min-height", "<?php echo sizeof($tab_ger_campos) * 35 ?>px");
   $("#sc_id_fldord_selected").css("min-height", "<?php echo sizeof($tab_ger_campos) * 35 ?>px");
  }
 </script>
 <style type="text/css">
  .sc_ui_sortable_ord {
   list-style-type: none;
   margin: 0;
   min-width: 225px;
  }
  .sc_ui_sortable_ord li {
   margin: 0 3px 3px 3px;
   padding: 1px 3px 1px 15px;
   min-height: 28px;
  }
  .sc_ui_sortable_ord li span {
   position: absolute;
   margin-left: -1.3em;
  }
 </style>
    <ul class="sc_ui_sort_groupby sc_ui_sortable_ord sc_ui_fldord_available scAppDivSelectFields" id="sc_id_fldord_available">
<?php
   foreach ($tab_ger_campos as $NM_cada_field => $NM_cada_opc)
   {
       if ($NM_cada_opc != "none")
       {
           if (!isset($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['ordem_select'][$tab_def_campos[$NM_cada_field]]))
           {
?>
     <li class="sc_ui_litem scAppDivSelectFieldsEnabled" id="sc_id_itemord_<?php echo NM_encode_input($tab_def_campos[$NM_cada_field]); ?>">
      <?php echo $tab_labels[$NM_cada_field]; ?>
      <select id="sc_id_class_<?php echo NM_encode_input($tab_def_campos[$NM_cada_field]); ?>" class="scAppDivToolbarInput" style="display: none">
       <option value="+">Asc</option>
       <option value="-">Desc</option>
      </select><br/>
     </li>
<?php
           }
       }
   }
?>
    </ul>
   </td>
   <td style="vertical-align: top">
    <ul class="sc_ui_sort_groupby sc_ui_sortable_ord sc_ui_fldord_selected scAppDivSelectFields" id="sc_id_fldord_selected">
<?php
   foreach ($_SESSION['sc_session'][$sc_init]['grid_public_pessoa_fisica']['ordem_select'] as $NM_cada_field => $NM_cada_opc)
   {
       if (isset($tab_converte[$NM_cada_field]))
       {
           $sAscSelected  = " selected";
           $sDescSelected = "";
           if ($NM_cada_opc == "desc")
           {
               $sAscSelected  = "";
               $sDescSelected = " selected";
           }
?>
     <li class="sc_ui_litem scAppDivSelectFieldsEnabled" id="sc_id_itemord_<?php echo $NM_cada_field; ?>">
      <?php echo $tab_labels[$tab_converte[$NM_cada_field]]; ?>
      <select id="sc_id_class_<?php echo NM_encode_input($tab_def_campos[ $tab_converte[$NM_cada_field] ]); ?>" class="scAppDivToolbarInput" onchange="$('#f_sel_sub').css('display', 'inline-block');">
       <option value="+"<?php echo $sAscSelected; ?>>Asc</option>
       <option value="-"<?php echo $sDescSelected; ?>>Desc</option>
      </select>
     </li>
<?php
       }
   }
?>
    </ul>
    <input type="hidden" name="campos_sel" id="id_campos_sel_sel_ord" value="">
   </td>
   </tr>
   </table>
   </td>
   </tr>
   </table>
  </td>
 </tr>
   <tr><td class="<?php echo ($embbed)? 'scAppDivToolbar':'scGridToolbar'; ?>">
<?php
   if (!$embbed)
   {
?>
   <?php echo nmButtonOutput($this->arr_buttons, "bok", "document.Fsel_ord.fsel_ok.value='cmp';submit_form_Fsel_ord()", "document.Fsel_ord.fsel_ok.value='cmp';submit_form_Fsel_ord()", "f_sel_sub", "", "", "", "absmiddle", "", "0px", $path_btn, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
?>
<?php
   }
   else
   {
?>
   <?php echo nmButtonOutput($this->arr_buttons, "bapply", "scSubmitOrderCampos('" . NM_encode_input($tbar_pos) . "', 'cmp')", "scSubmitOrderCampos('" . NM_encode_input($tbar_pos) . "', 'cmp')", "f_sel_sub", "", "", "display: none;", "absmiddle", "", "0px", $path_btn, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
?>
<?php
   }
?>
  &nbsp;&nbsp;&nbsp;
<?php
   if (!$embbed)
   {
?>
   <?php echo nmButtonOutput($this->arr_buttons, "bsair", "self.parent.tb_remove()", "self.parent.tb_remove()", "Bsair", "", "", "", "absmiddle", "", "0px", $path_btn, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
?>
<?php
   }
   else
   {
?>
   <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnOrderCamposHide('" . NM_encode_input($tbar_pos) . "')", "scBtnOrderCamposHide('" . NM_encode_input($tbar_pos) . "')", "Bsair", "", "", "", "absmiddle", "", "0px", $path_btn, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
?>
<?php
   }
?>
   </td>
   </tr>
<?php
if (!$embbed)
{
?>
</table>
</div>
</td>
</tr>
<?php
}
?>
</table>
<?php
if ($embbed)
{
?>
    </div>
<?php
}
?>
</FORM>
<script language="javascript"> 
var bFixed = false;
function ajusta_window_Fsel_ord()
{
<?php
   if ($embbed)
   {
?>
  return false;
<?php
   }
?>
  var mt = $(document.getElementById("main_table"));
  if (0 == mt.width() || 0 == mt.height())
  {
    setTimeout("ajusta_window_Fsel_ord()", 50);
    return;
  }
  else if(!bFixed)
  {
    var oOrig = $(document.Fsel_ord.sel_orig),
        oDest = $(document.Fsel_ord.sel_dest),
        mHeight = Math.max(oOrig.height(), oDest.height()),
        mWidth = Math.max(oOrig.width() + 5, oDest.width() + 5);
    oOrig.height(mHeight);
    oOrig.width(mWidth);
    oDest.height(mHeight);
    oDest.width(mWidth + 15);
    bFixed = true;
    if (navigator.userAgent.indexOf("Chrome/") > 0)
    {
      strMaxHeight = Math.min(($(window.parent).height()-80), mt.height());
      self.parent.tb_resize(strMaxHeight + 40, mt.width() + 40);
      setTimeout("ajusta_window_Fsel_ord()", 50);
      return;
    }
  }
  strMaxHeight = Math.min(($(window.parent).height()-80), mt.height());
  self.parent.tb_resize(strMaxHeight + 40, mt.width() + 40);
}
$( document ).ready(function() {
  ajusta_window_Fsel_ord();
});
</script>
<script>
    ajusta_window_Fsel_ord();
</script>
</BODY>
</HTML>
<?php
}
}
