<div id="form_public_pessoa_fisica_form3" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_pessoa_fisica']))
           {
               $this->nmgp_cmp_readonly['id_pessoa_fisica'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['rg']))
    {
        $this->nm_new_label['rg'] = "RG";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rg = $this->rg;
   $sStyleHidden_rg = '';
   if (isset($this->nmgp_cmp_hidden['rg']) && $this->nmgp_cmp_hidden['rg'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rg']);
       $sStyleHidden_rg = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rg = 'display: none;';
   $sStyleReadInp_rg = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rg']) && $this->nmgp_cmp_readonly['rg'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rg']);
       $sStyleReadLab_rg = '';
       $sStyleReadInp_rg = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rg']) && $this->nmgp_cmp_hidden['rg'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="rg" value="<?php echo $this->form_encode_input($rg) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_rg_label" id="hidden_field_label_rg" style="<?php echo $sStyleHidden_rg; ?>"><span id="id_label_rg"><?php echo $this->nm_new_label['rg']; ?></span></TD>
    <TD class="scFormDataOdd css_rg_line" id="hidden_field_data_rg" style="<?php echo $sStyleHidden_rg; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_rg_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rg"]) &&  $this->nmgp_cmp_readonly["rg"] == "on") { 

 ?>
<input type="hidden" name="rg" value="<?php echo $this->form_encode_input($rg) . "\">" . $rg . ""; ?>
<?php } else { ?>
<span id="id_read_on_rg" class="sc-ui-readonly-rg css_rg_line" style="<?php echo $sStyleReadLab_rg; ?>"><?php echo $this->form_encode_input($this->rg); ?></span><span id="id_read_off_rg" style="white-space: nowrap;<?php echo $sStyleReadInp_rg; ?>">
 <input class="sc-js-input scFormObjectOdd css_rg_obj" style="" id="id_sc_field_rg" type=text name="rg" value="<?php echo $this->form_encode_input($rg) ?>"
 size=25 maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rg_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rg_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['rg_uf_emissor']))
   {
       $this->nm_new_label['rg_uf_emissor'] = "RG UF Emissor";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rg_uf_emissor = $this->rg_uf_emissor;
   $sStyleHidden_rg_uf_emissor = '';
   if (isset($this->nmgp_cmp_hidden['rg_uf_emissor']) && $this->nmgp_cmp_hidden['rg_uf_emissor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rg_uf_emissor']);
       $sStyleHidden_rg_uf_emissor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rg_uf_emissor = 'display: none;';
   $sStyleReadInp_rg_uf_emissor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rg_uf_emissor']) && $this->nmgp_cmp_readonly['rg_uf_emissor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rg_uf_emissor']);
       $sStyleReadLab_rg_uf_emissor = '';
       $sStyleReadInp_rg_uf_emissor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rg_uf_emissor']) && $this->nmgp_cmp_hidden['rg_uf_emissor'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="rg_uf_emissor" value="<?php echo $this->form_encode_input($this->rg_uf_emissor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_rg_uf_emissor_label" id="hidden_field_label_rg_uf_emissor" style="<?php echo $sStyleHidden_rg_uf_emissor; ?>"><span id="id_label_rg_uf_emissor"><?php echo $this->nm_new_label['rg_uf_emissor']; ?></span></TD>
    <TD class="scFormDataOdd css_rg_uf_emissor_line" id="hidden_field_data_rg_uf_emissor" style="<?php echo $sStyleHidden_rg_uf_emissor; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_rg_uf_emissor_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rg_uf_emissor"]) &&  $this->nmgp_cmp_readonly["rg_uf_emissor"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'] = array(); 
    }

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
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'][] = $rs->fields[0];
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
   $x = 0; 
   $rg_uf_emissor_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->rg_uf_emissor_1))
          {
              foreach ($this->rg_uf_emissor_1 as $tmp_rg_uf_emissor)
              {
                  if (trim($tmp_rg_uf_emissor) === trim($cadaselect[1])) { $rg_uf_emissor_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->rg_uf_emissor) === trim($cadaselect[1])) { $rg_uf_emissor_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="rg_uf_emissor" value="<?php echo $this->form_encode_input($rg_uf_emissor) . "\">" . $rg_uf_emissor_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'] = array(); 
    }

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
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'][] = $rs->fields[0];
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $rg_uf_emissor_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->rg_uf_emissor_1))
          {
              foreach ($this->rg_uf_emissor_1 as $tmp_rg_uf_emissor)
              {
                  if (trim($tmp_rg_uf_emissor) === trim($cadaselect[1])) { $rg_uf_emissor_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->rg_uf_emissor) === trim($cadaselect[1])) { $rg_uf_emissor_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($rg_uf_emissor_look))
          {
              $rg_uf_emissor_look = $this->rg_uf_emissor;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_rg_uf_emissor\" class=\"css_rg_uf_emissor_line\" style=\"" .  $sStyleReadLab_rg_uf_emissor . "\">" . $this->form_encode_input($rg_uf_emissor_look) . "</span><span id=\"id_read_off_rg_uf_emissor\" style=\"" . $sStyleReadInp_rg_uf_emissor . "\">";
   echo " <span id=\"idAjaxSelect_rg_uf_emissor\"><select class=\"sc-js-input scFormObjectOdd css_rg_uf_emissor_obj\" style=\"\" id=\"id_sc_field_rg_uf_emissor\" name=\"rg_uf_emissor\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_rg_uf_emissor'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->rg_uf_emissor) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->rg_uf_emissor)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rg_uf_emissor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rg_uf_emissor_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['rg_orgao_emissor']))
    {
        $this->nm_new_label['rg_orgao_emissor'] = "RG Orgão Emissor";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rg_orgao_emissor = $this->rg_orgao_emissor;
   $sStyleHidden_rg_orgao_emissor = '';
   if (isset($this->nmgp_cmp_hidden['rg_orgao_emissor']) && $this->nmgp_cmp_hidden['rg_orgao_emissor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rg_orgao_emissor']);
       $sStyleHidden_rg_orgao_emissor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rg_orgao_emissor = 'display: none;';
   $sStyleReadInp_rg_orgao_emissor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rg_orgao_emissor']) && $this->nmgp_cmp_readonly['rg_orgao_emissor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rg_orgao_emissor']);
       $sStyleReadLab_rg_orgao_emissor = '';
       $sStyleReadInp_rg_orgao_emissor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rg_orgao_emissor']) && $this->nmgp_cmp_hidden['rg_orgao_emissor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="rg_orgao_emissor" value="<?php echo $this->form_encode_input($rg_orgao_emissor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_rg_orgao_emissor_label" id="hidden_field_label_rg_orgao_emissor" style="<?php echo $sStyleHidden_rg_orgao_emissor; ?>"><span id="id_label_rg_orgao_emissor"><?php echo $this->nm_new_label['rg_orgao_emissor']; ?></span></TD>
    <TD class="scFormDataOdd css_rg_orgao_emissor_line" id="hidden_field_data_rg_orgao_emissor" style="<?php echo $sStyleHidden_rg_orgao_emissor; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_rg_orgao_emissor_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rg_orgao_emissor"]) &&  $this->nmgp_cmp_readonly["rg_orgao_emissor"] == "on") { 

 ?>
<input type="hidden" name="rg_orgao_emissor" value="<?php echo $this->form_encode_input($rg_orgao_emissor) . "\">" . $rg_orgao_emissor . ""; ?>
<?php } else { ?>
<span id="id_read_on_rg_orgao_emissor" class="sc-ui-readonly-rg_orgao_emissor css_rg_orgao_emissor_line" style="<?php echo $sStyleReadLab_rg_orgao_emissor; ?>"><?php echo $this->form_encode_input($this->rg_orgao_emissor); ?></span><span id="id_read_off_rg_orgao_emissor" style="white-space: nowrap;<?php echo $sStyleReadInp_rg_orgao_emissor; ?>">
 <input class="sc-js-input scFormObjectOdd css_rg_orgao_emissor_obj" style="" id="id_sc_field_rg_orgao_emissor" type=text name="rg_orgao_emissor" value="<?php echo $this->form_encode_input($rg_orgao_emissor) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rg_orgao_emissor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rg_orgao_emissor_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['rg_dt_emissao']))
    {
        $this->nm_new_label['rg_dt_emissao'] = "RG Dt Emissão";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rg_dt_emissao = $this->rg_dt_emissao;
   $sStyleHidden_rg_dt_emissao = '';
   if (isset($this->nmgp_cmp_hidden['rg_dt_emissao']) && $this->nmgp_cmp_hidden['rg_dt_emissao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rg_dt_emissao']);
       $sStyleHidden_rg_dt_emissao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rg_dt_emissao = 'display: none;';
   $sStyleReadInp_rg_dt_emissao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rg_dt_emissao']) && $this->nmgp_cmp_readonly['rg_dt_emissao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rg_dt_emissao']);
       $sStyleReadLab_rg_dt_emissao = '';
       $sStyleReadInp_rg_dt_emissao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rg_dt_emissao']) && $this->nmgp_cmp_hidden['rg_dt_emissao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="rg_dt_emissao" value="<?php echo $this->form_encode_input($rg_dt_emissao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_rg_dt_emissao_label" id="hidden_field_label_rg_dt_emissao" style="<?php echo $sStyleHidden_rg_dt_emissao; ?>"><span id="id_label_rg_dt_emissao"><?php echo $this->nm_new_label['rg_dt_emissao']; ?></span></TD>
    <TD class="scFormDataOdd css_rg_dt_emissao_line" id="hidden_field_data_rg_dt_emissao" style="<?php echo $sStyleHidden_rg_dt_emissao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_rg_dt_emissao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rg_dt_emissao"]) &&  $this->nmgp_cmp_readonly["rg_dt_emissao"] == "on") { 

 ?>
<input type="hidden" name="rg_dt_emissao" value="<?php echo $this->form_encode_input($rg_dt_emissao) . "\">" . $rg_dt_emissao . ""; ?>
<?php } else { ?>
<span id="id_read_on_rg_dt_emissao" class="sc-ui-readonly-rg_dt_emissao css_rg_dt_emissao_line" style="<?php echo $sStyleReadLab_rg_dt_emissao; ?>"><?php echo $this->form_encode_input($rg_dt_emissao); ?></span><span id="id_read_off_rg_dt_emissao" style="white-space: nowrap;<?php echo $sStyleReadInp_rg_dt_emissao; ?>">
 <input class="sc-js-input scFormObjectOdd css_rg_dt_emissao_obj" style="" id="id_sc_field_rg_dt_emissao" type=text name="rg_dt_emissao" value="<?php echo $this->form_encode_input($rg_dt_emissao) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['rg_dt_emissao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['rg_dt_emissao']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['rg_dt_emissao']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rg_dt_emissao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rg_dt_emissao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['passaporte']))
    {
        $this->nm_new_label['passaporte'] = "Passaporte";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $passaporte = $this->passaporte;
   $sStyleHidden_passaporte = '';
   if (isset($this->nmgp_cmp_hidden['passaporte']) && $this->nmgp_cmp_hidden['passaporte'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['passaporte']);
       $sStyleHidden_passaporte = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_passaporte = 'display: none;';
   $sStyleReadInp_passaporte = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['passaporte']) && $this->nmgp_cmp_readonly['passaporte'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['passaporte']);
       $sStyleReadLab_passaporte = '';
       $sStyleReadInp_passaporte = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['passaporte']) && $this->nmgp_cmp_hidden['passaporte'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="passaporte" value="<?php echo $this->form_encode_input($passaporte) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_passaporte_label" id="hidden_field_label_passaporte" style="<?php echo $sStyleHidden_passaporte; ?>"><span id="id_label_passaporte"><?php echo $this->nm_new_label['passaporte']; ?></span></TD>
    <TD class="scFormDataOdd css_passaporte_line" id="hidden_field_data_passaporte" style="<?php echo $sStyleHidden_passaporte; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_passaporte_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["passaporte"]) &&  $this->nmgp_cmp_readonly["passaporte"] == "on") { 

 ?>
<input type="hidden" name="passaporte" value="<?php echo $this->form_encode_input($passaporte) . "\">" . $passaporte . ""; ?>
<?php } else { ?>
<span id="id_read_on_passaporte" class="sc-ui-readonly-passaporte css_passaporte_line" style="<?php echo $sStyleReadLab_passaporte; ?>"><?php echo $this->form_encode_input($this->passaporte); ?></span><span id="id_read_off_passaporte" style="white-space: nowrap;<?php echo $sStyleReadInp_passaporte; ?>">
 <input class="sc-js-input scFormObjectOdd css_passaporte_obj" style="" id="id_sc_field_passaporte" type=text name="passaporte" value="<?php echo $this->form_encode_input($passaporte) ?>"
 size=25 maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_passaporte_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_passaporte_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['passaporte_pais_origem']))
   {
       $this->nm_new_label['passaporte_pais_origem'] = "Passaporte País Origem";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $passaporte_pais_origem = $this->passaporte_pais_origem;
   $sStyleHidden_passaporte_pais_origem = '';
   if (isset($this->nmgp_cmp_hidden['passaporte_pais_origem']) && $this->nmgp_cmp_hidden['passaporte_pais_origem'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['passaporte_pais_origem']);
       $sStyleHidden_passaporte_pais_origem = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_passaporte_pais_origem = 'display: none;';
   $sStyleReadInp_passaporte_pais_origem = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['passaporte_pais_origem']) && $this->nmgp_cmp_readonly['passaporte_pais_origem'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['passaporte_pais_origem']);
       $sStyleReadLab_passaporte_pais_origem = '';
       $sStyleReadInp_passaporte_pais_origem = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['passaporte_pais_origem']) && $this->nmgp_cmp_hidden['passaporte_pais_origem'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="passaporte_pais_origem" value="<?php echo $this->form_encode_input($this->passaporte_pais_origem) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_passaporte_pais_origem_label" id="hidden_field_label_passaporte_pais_origem" style="<?php echo $sStyleHidden_passaporte_pais_origem; ?>"><span id="id_label_passaporte_pais_origem"><?php echo $this->nm_new_label['passaporte_pais_origem']; ?></span></TD>
    <TD class="scFormDataOdd css_passaporte_pais_origem_line" id="hidden_field_data_passaporte_pais_origem" style="<?php echo $sStyleHidden_passaporte_pais_origem; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_passaporte_pais_origem_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["passaporte_pais_origem"]) &&  $this->nmgp_cmp_readonly["passaporte_pais_origem"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'] = array(); 
    }

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
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'][] = $rs->fields[0];
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
   $x = 0; 
   $passaporte_pais_origem_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->passaporte_pais_origem_1))
          {
              foreach ($this->passaporte_pais_origem_1 as $tmp_passaporte_pais_origem)
              {
                  if (trim($tmp_passaporte_pais_origem) === trim($cadaselect[1])) { $passaporte_pais_origem_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->passaporte_pais_origem) === trim($cadaselect[1])) { $passaporte_pais_origem_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="passaporte_pais_origem" value="<?php echo $this->form_encode_input($passaporte_pais_origem) . "\">" . $passaporte_pais_origem_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'] = array(); 
    }

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
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'][] = $rs->fields[0];
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $passaporte_pais_origem_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->passaporte_pais_origem_1))
          {
              foreach ($this->passaporte_pais_origem_1 as $tmp_passaporte_pais_origem)
              {
                  if (trim($tmp_passaporte_pais_origem) === trim($cadaselect[1])) { $passaporte_pais_origem_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->passaporte_pais_origem) === trim($cadaselect[1])) { $passaporte_pais_origem_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($passaporte_pais_origem_look))
          {
              $passaporte_pais_origem_look = $this->passaporte_pais_origem;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_passaporte_pais_origem\" class=\"css_passaporte_pais_origem_line\" style=\"" .  $sStyleReadLab_passaporte_pais_origem . "\">" . $this->form_encode_input($passaporte_pais_origem_look) . "</span><span id=\"id_read_off_passaporte_pais_origem\" style=\"" . $sStyleReadInp_passaporte_pais_origem . "\">";
   echo " <span id=\"idAjaxSelect_passaporte_pais_origem\"><select class=\"sc-js-input scFormObjectOdd css_passaporte_pais_origem_obj\" style=\"\" id=\"id_sc_field_passaporte_pais_origem\" name=\"passaporte_pais_origem\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['Lookup_passaporte_pais_origem'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->passaporte_pais_origem) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->passaporte_pais_origem)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_passaporte_pais_origem_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_passaporte_pais_origem_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['passaporte_dt_emissao']))
    {
        $this->nm_new_label['passaporte_dt_emissao'] = "Passaporte Dt Emissão";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $passaporte_dt_emissao = $this->passaporte_dt_emissao;
   $sStyleHidden_passaporte_dt_emissao = '';
   if (isset($this->nmgp_cmp_hidden['passaporte_dt_emissao']) && $this->nmgp_cmp_hidden['passaporte_dt_emissao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['passaporte_dt_emissao']);
       $sStyleHidden_passaporte_dt_emissao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_passaporte_dt_emissao = 'display: none;';
   $sStyleReadInp_passaporte_dt_emissao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['passaporte_dt_emissao']) && $this->nmgp_cmp_readonly['passaporte_dt_emissao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['passaporte_dt_emissao']);
       $sStyleReadLab_passaporte_dt_emissao = '';
       $sStyleReadInp_passaporte_dt_emissao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['passaporte_dt_emissao']) && $this->nmgp_cmp_hidden['passaporte_dt_emissao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="passaporte_dt_emissao" value="<?php echo $this->form_encode_input($passaporte_dt_emissao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_passaporte_dt_emissao_label" id="hidden_field_label_passaporte_dt_emissao" style="<?php echo $sStyleHidden_passaporte_dt_emissao; ?>"><span id="id_label_passaporte_dt_emissao"><?php echo $this->nm_new_label['passaporte_dt_emissao']; ?></span></TD>
    <TD class="scFormDataOdd css_passaporte_dt_emissao_line" id="hidden_field_data_passaporte_dt_emissao" style="<?php echo $sStyleHidden_passaporte_dt_emissao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_passaporte_dt_emissao_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["passaporte_dt_emissao"]) &&  $this->nmgp_cmp_readonly["passaporte_dt_emissao"] == "on") { 

 ?>
<input type="hidden" name="passaporte_dt_emissao" value="<?php echo $this->form_encode_input($passaporte_dt_emissao) . "\">" . $passaporte_dt_emissao . ""; ?>
<?php } else { ?>
<span id="id_read_on_passaporte_dt_emissao" class="sc-ui-readonly-passaporte_dt_emissao css_passaporte_dt_emissao_line" style="<?php echo $sStyleReadLab_passaporte_dt_emissao; ?>"><?php echo $this->form_encode_input($passaporte_dt_emissao); ?></span><span id="id_read_off_passaporte_dt_emissao" style="white-space: nowrap;<?php echo $sStyleReadInp_passaporte_dt_emissao; ?>">
 <input class="sc-js-input scFormObjectOdd css_passaporte_dt_emissao_obj" style="" id="id_sc_field_passaporte_dt_emissao" type=text name="passaporte_dt_emissao" value="<?php echo $this->form_encode_input($passaporte_dt_emissao) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['passaporte_dt_emissao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['passaporte_dt_emissao']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['passaporte_dt_emissao']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_passaporte_dt_emissao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_passaporte_dt_emissao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cnh']))
    {
        $this->nm_new_label['cnh'] = "CNH";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cnh = $this->cnh;
   $sStyleHidden_cnh = '';
   if (isset($this->nmgp_cmp_hidden['cnh']) && $this->nmgp_cmp_hidden['cnh'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cnh']);
       $sStyleHidden_cnh = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cnh = 'display: none;';
   $sStyleReadInp_cnh = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cnh']) && $this->nmgp_cmp_readonly['cnh'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cnh']);
       $sStyleReadLab_cnh = '';
       $sStyleReadInp_cnh = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cnh']) && $this->nmgp_cmp_hidden['cnh'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cnh" value="<?php echo $this->form_encode_input($cnh) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cnh_label" id="hidden_field_label_cnh" style="<?php echo $sStyleHidden_cnh; ?>"><span id="id_label_cnh"><?php echo $this->nm_new_label['cnh']; ?></span></TD>
    <TD class="scFormDataOdd css_cnh_line" id="hidden_field_data_cnh" style="<?php echo $sStyleHidden_cnh; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cnh_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cnh"]) &&  $this->nmgp_cmp_readonly["cnh"] == "on") { 

 ?>
<input type="hidden" name="cnh" value="<?php echo $this->form_encode_input($cnh) . "\">" . $cnh . ""; ?>
<?php } else { ?>
<span id="id_read_on_cnh" class="sc-ui-readonly-cnh css_cnh_line" style="<?php echo $sStyleReadLab_cnh; ?>"><?php echo $this->form_encode_input($this->cnh); ?></span><span id="id_read_off_cnh" style="white-space: nowrap;<?php echo $sStyleReadInp_cnh; ?>">
 <input class="sc-js-input scFormObjectOdd css_cnh_obj" style="" id="id_sc_field_cnh" type=text name="cnh" value="<?php echo $this->form_encode_input($cnh) ?>"
 size=11 maxlength=11 alt="{datatype: 'text', maxLength: 11, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cnh_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cnh_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cnh_categoria']))
    {
        $this->nm_new_label['cnh_categoria'] = "CNH Categoria";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cnh_categoria = $this->cnh_categoria;
   $sStyleHidden_cnh_categoria = '';
   if (isset($this->nmgp_cmp_hidden['cnh_categoria']) && $this->nmgp_cmp_hidden['cnh_categoria'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cnh_categoria']);
       $sStyleHidden_cnh_categoria = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cnh_categoria = 'display: none;';
   $sStyleReadInp_cnh_categoria = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cnh_categoria']) && $this->nmgp_cmp_readonly['cnh_categoria'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cnh_categoria']);
       $sStyleReadLab_cnh_categoria = '';
       $sStyleReadInp_cnh_categoria = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cnh_categoria']) && $this->nmgp_cmp_hidden['cnh_categoria'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cnh_categoria" value="<?php echo $this->form_encode_input($cnh_categoria) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cnh_categoria_label" id="hidden_field_label_cnh_categoria" style="<?php echo $sStyleHidden_cnh_categoria; ?>"><span id="id_label_cnh_categoria"><?php echo $this->nm_new_label['cnh_categoria']; ?></span></TD>
    <TD class="scFormDataOdd css_cnh_categoria_line" id="hidden_field_data_cnh_categoria" style="<?php echo $sStyleHidden_cnh_categoria; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cnh_categoria_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cnh_categoria"]) &&  $this->nmgp_cmp_readonly["cnh_categoria"] == "on") { 

 ?>
<input type="hidden" name="cnh_categoria" value="<?php echo $this->form_encode_input($cnh_categoria) . "\">" . $cnh_categoria . ""; ?>
<?php } else { ?>
<span id="id_read_on_cnh_categoria" class="sc-ui-readonly-cnh_categoria css_cnh_categoria_line" style="<?php echo $sStyleReadLab_cnh_categoria; ?>"><?php echo $this->form_encode_input($this->cnh_categoria); ?></span><span id="id_read_off_cnh_categoria" style="white-space: nowrap;<?php echo $sStyleReadInp_cnh_categoria; ?>">
 <input class="sc-js-input scFormObjectOdd css_cnh_categoria_obj" style="" id="id_sc_field_cnh_categoria" type=text name="cnh_categoria" value="<?php echo $this->form_encode_input($cnh_categoria) ?>"
 size=8 maxlength=8 alt="{datatype: 'text', maxLength: 8, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cnh_categoria_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cnh_categoria_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cnh_dt_validade']))
    {
        $this->nm_new_label['cnh_dt_validade'] = "CNH Dt Validade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cnh_dt_validade = $this->cnh_dt_validade;
   $sStyleHidden_cnh_dt_validade = '';
   if (isset($this->nmgp_cmp_hidden['cnh_dt_validade']) && $this->nmgp_cmp_hidden['cnh_dt_validade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cnh_dt_validade']);
       $sStyleHidden_cnh_dt_validade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cnh_dt_validade = 'display: none;';
   $sStyleReadInp_cnh_dt_validade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cnh_dt_validade']) && $this->nmgp_cmp_readonly['cnh_dt_validade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cnh_dt_validade']);
       $sStyleReadLab_cnh_dt_validade = '';
       $sStyleReadInp_cnh_dt_validade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cnh_dt_validade']) && $this->nmgp_cmp_hidden['cnh_dt_validade'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cnh_dt_validade" value="<?php echo $this->form_encode_input($cnh_dt_validade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cnh_dt_validade_label" id="hidden_field_label_cnh_dt_validade" style="<?php echo $sStyleHidden_cnh_dt_validade; ?>"><span id="id_label_cnh_dt_validade"><?php echo $this->nm_new_label['cnh_dt_validade']; ?></span></TD>
    <TD class="scFormDataOdd css_cnh_dt_validade_line" id="hidden_field_data_cnh_dt_validade" style="<?php echo $sStyleHidden_cnh_dt_validade; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cnh_dt_validade_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cnh_dt_validade"]) &&  $this->nmgp_cmp_readonly["cnh_dt_validade"] == "on") { 

 ?>
<input type="hidden" name="cnh_dt_validade" value="<?php echo $this->form_encode_input($cnh_dt_validade) . "\">" . $cnh_dt_validade . ""; ?>
<?php } else { ?>
<span id="id_read_on_cnh_dt_validade" class="sc-ui-readonly-cnh_dt_validade css_cnh_dt_validade_line" style="<?php echo $sStyleReadLab_cnh_dt_validade; ?>"><?php echo $this->form_encode_input($cnh_dt_validade); ?></span><span id="id_read_off_cnh_dt_validade" style="white-space: nowrap;<?php echo $sStyleReadInp_cnh_dt_validade; ?>">
 <input class="sc-js-input scFormObjectOdd css_cnh_dt_validade_obj" style="" id="id_sc_field_cnh_dt_validade" type=text name="cnh_dt_validade" value="<?php echo $this->form_encode_input($cnh_dt_validade) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['cnh_dt_validade']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['cnh_dt_validade']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['cnh_dt_validade']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cnh_dt_validade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cnh_dt_validade_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
</td></tr>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['mostra_cab'] != "N"))
  {
?>
</td></tr> 
<tr><td><table width="100%"> 
<style>
#rod_col1 { margin:0px; padding: 3px 0 0 5px; float:left; overflow:hidden;}
#rod_col2 { margin:0px; padding: 3px 5px 0 0; float:right; overflow:hidden; text-align:right;}

</style>

<table style="width: 100%; height:20px;" cellpadding="0px" cellspacing="0px" class="scFormFooter">
    <tr>
        <td>
            <span class="scFormFooterFont" id="rod_col1"></span>
        </td>
        <td>
            <span class="scFormFooterFont" id="rod_col2"></span>
        </td>
    </tr>
</table><?php
  }
?>
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
 $NM_pag_atual = "form_public_pessoa_fisica_form0";
 if (isset($this->nmgp_ancora) && $this->nmgp_ancora != "")
 {
     $NM_pag_atual = "form_public_pessoa_fisica_form" . $this->nmgp_ancora;
 }
?>
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.width='';
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.height='';
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.display='';
  document.getElementById('<?php echo $NM_pag_atual; ?>').style.overflow='visible';
</script> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['masterValue']);
?>
}
<?php
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_public_pessoa_fisica");
 parent.scAjaxDetailHeight("form_public_pessoa_fisica", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_public_pessoa_fisica", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_public_pessoa_fisica", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['sc_modal'])
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
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
</body> 
</html> 
