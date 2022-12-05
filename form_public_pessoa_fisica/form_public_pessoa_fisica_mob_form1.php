<div id="form_public_pessoa_fisica_mob_form1" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_pessoa_fisica']))
           {
               $this->nmgp_cmp_readonly['id_pessoa_fisica'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['endereco']))
    {
        $this->nm_new_label['endereco'] = "Endereço";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $endereco = $this->endereco;
   $sStyleHidden_endereco = '';
   if (isset($this->nmgp_cmp_hidden['endereco']) && $this->nmgp_cmp_hidden['endereco'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['endereco']);
       $sStyleHidden_endereco = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_endereco = 'display: none;';
   $sStyleReadInp_endereco = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['endereco']) && $this->nmgp_cmp_readonly['endereco'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['endereco']);
       $sStyleReadLab_endereco = '';
       $sStyleReadInp_endereco = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['endereco']) && $this->nmgp_cmp_hidden['endereco'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="endereco" value="<?php echo $this->form_encode_input($endereco) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_endereco_line" id="hidden_field_data_endereco" style="<?php echo $sStyleHidden_endereco; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_endereco_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_endereco_label"><span id="id_label_endereco"><?php echo $this->nm_new_label['endereco']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["endereco"]) &&  $this->nmgp_cmp_readonly["endereco"] == "on") { 

 ?>
<input type="hidden" name="endereco" value="<?php echo $this->form_encode_input($endereco) . "\">" . $endereco . ""; ?>
<?php } else { ?>
<span id="id_read_on_endereco" class="sc-ui-readonly-endereco css_endereco_line" style="<?php echo $sStyleReadLab_endereco; ?>"><?php echo $this->form_encode_input($this->endereco); ?></span><span id="id_read_off_endereco" style="white-space: nowrap;<?php echo $sStyleReadInp_endereco; ?>">
 <input class="sc-js-input scFormObjectOdd css_endereco_obj" style="" id="id_sc_field_endereco" type=text name="endereco" value="<?php echo $this->form_encode_input($endereco) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_endereco_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_endereco_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['endereco_comp']))
    {
        $this->nm_new_label['endereco_comp'] = "Endereco Comp";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $endereco_comp = $this->endereco_comp;
   $sStyleHidden_endereco_comp = '';
   if (isset($this->nmgp_cmp_hidden['endereco_comp']) && $this->nmgp_cmp_hidden['endereco_comp'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['endereco_comp']);
       $sStyleHidden_endereco_comp = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_endereco_comp = 'display: none;';
   $sStyleReadInp_endereco_comp = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['endereco_comp']) && $this->nmgp_cmp_readonly['endereco_comp'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['endereco_comp']);
       $sStyleReadLab_endereco_comp = '';
       $sStyleReadInp_endereco_comp = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['endereco_comp']) && $this->nmgp_cmp_hidden['endereco_comp'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="endereco_comp" value="<?php echo $this->form_encode_input($endereco_comp) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_endereco_comp_line" id="hidden_field_data_endereco_comp" style="<?php echo $sStyleHidden_endereco_comp; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_endereco_comp_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_endereco_comp_label"><span id="id_label_endereco_comp"><?php echo $this->nm_new_label['endereco_comp']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["endereco_comp"]) &&  $this->nmgp_cmp_readonly["endereco_comp"] == "on") { 

 ?>
<input type="hidden" name="endereco_comp" value="<?php echo $this->form_encode_input($endereco_comp) . "\">" . $endereco_comp . ""; ?>
<?php } else { ?>
<span id="id_read_on_endereco_comp" class="sc-ui-readonly-endereco_comp css_endereco_comp_line" style="<?php echo $sStyleReadLab_endereco_comp; ?>"><?php echo $this->form_encode_input($this->endereco_comp); ?></span><span id="id_read_off_endereco_comp" style="white-space: nowrap;<?php echo $sStyleReadInp_endereco_comp; ?>">
 <input class="sc-js-input scFormObjectOdd css_endereco_comp_obj" style="" id="id_sc_field_endereco_comp" type=text name="endereco_comp" value="<?php echo $this->form_encode_input($endereco_comp) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_endereco_comp_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_endereco_comp_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bairro']))
    {
        $this->nm_new_label['bairro'] = "Endereço Bairro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bairro = $this->bairro;
   $sStyleHidden_bairro = '';
   if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bairro']);
       $sStyleHidden_bairro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bairro = 'display: none;';
   $sStyleReadInp_bairro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bairro']) && $this->nmgp_cmp_readonly['bairro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bairro']);
       $sStyleReadLab_bairro = '';
       $sStyleReadInp_bairro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bairro" value="<?php echo $this->form_encode_input($bairro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bairro_line" id="hidden_field_data_bairro" style="<?php echo $sStyleHidden_bairro; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bairro_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bairro_label"><span id="id_label_bairro"><?php echo $this->nm_new_label['bairro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bairro"]) &&  $this->nmgp_cmp_readonly["bairro"] == "on") { 

 ?>
<input type="hidden" name="bairro" value="<?php echo $this->form_encode_input($bairro) . "\">" . $bairro . ""; ?>
<?php } else { ?>
<span id="id_read_on_bairro" class="sc-ui-readonly-bairro css_bairro_line" style="<?php echo $sStyleReadLab_bairro; ?>"><?php echo $this->form_encode_input($this->bairro); ?></span><span id="id_read_off_bairro" style="white-space: nowrap;<?php echo $sStyleReadInp_bairro; ?>">
 <input class="sc-js-input scFormObjectOdd css_bairro_obj" style="" id="id_sc_field_bairro" type=text name="bairro" value="<?php echo $this->form_encode_input($bairro) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bairro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bairro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_municipio']))
   {
       $this->nm_new_label['id_municipio'] = "Endereço Município";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_municipio = $this->id_municipio;
   $sStyleHidden_id_municipio = '';
   if (isset($this->nmgp_cmp_hidden['id_municipio']) && $this->nmgp_cmp_hidden['id_municipio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_municipio']);
       $sStyleHidden_id_municipio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_municipio = 'display: none;';
   $sStyleReadInp_id_municipio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_municipio']) && $this->nmgp_cmp_readonly['id_municipio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_municipio']);
       $sStyleReadLab_id_municipio = '';
       $sStyleReadInp_id_municipio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_municipio']) && $this->nmgp_cmp_hidden['id_municipio'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_municipio" value="<?php echo $this->form_encode_input($this->id_municipio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_municipio_line" id="hidden_field_data_id_municipio" style="<?php echo $sStyleHidden_id_municipio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_municipio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_municipio_label"><span id="id_label_id_municipio"><?php echo $this->nm_new_label['id_municipio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_municipio"]) &&  $this->nmgp_cmp_readonly["id_municipio"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array(); 
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
   $x = 0; 
   $id_municipio_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_municipio_1))
          {
              foreach ($this->id_municipio_1 as $tmp_id_municipio)
              {
                  if (trim($tmp_id_municipio) === trim($cadaselect[1])) { $id_municipio_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_municipio) === trim($cadaselect[1])) { $id_municipio_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_municipio" value="<?php echo $this->form_encode_input($id_municipio) . "\">" . $id_municipio_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $id_municipio_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_municipio_1))
          {
              foreach ($this->id_municipio_1 as $tmp_id_municipio)
              {
                  if (trim($tmp_id_municipio) === trim($cadaselect[1])) { $id_municipio_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_municipio) === trim($cadaselect[1])) { $id_municipio_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_municipio_look))
          {
              $id_municipio_look = $this->id_municipio;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_municipio\" class=\"css_id_municipio_line\" style=\"" .  $sStyleReadLab_id_municipio . "\">" . $this->form_encode_input($id_municipio_look) . "</span><span id=\"id_read_off_id_municipio\" style=\"" . $sStyleReadInp_id_municipio . "\">";
   echo " <span id=\"idAjaxSelect_id_municipio\"><select class=\"sc-js-input scFormObjectOdd css_id_municipio_obj\" style=\"\" id=\"id_sc_field_id_municipio\" name=\"id_municipio\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_municipio) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_municipio)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_municipio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_municipio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_uf']))
   {
       $this->nm_new_label['id_uf'] = "Endereço UF";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_uf = $this->id_uf;
   $sStyleHidden_id_uf = '';
   if (isset($this->nmgp_cmp_hidden['id_uf']) && $this->nmgp_cmp_hidden['id_uf'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_uf']);
       $sStyleHidden_id_uf = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_uf = 'display: none;';
   $sStyleReadInp_id_uf = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_uf']) && $this->nmgp_cmp_readonly['id_uf'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_uf']);
       $sStyleReadLab_id_uf = '';
       $sStyleReadInp_id_uf = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_uf']) && $this->nmgp_cmp_hidden['id_uf'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_uf" value="<?php echo $this->form_encode_input($this->id_uf) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_uf_line" id="hidden_field_data_id_uf" style="<?php echo $sStyleHidden_id_uf; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_uf_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_uf_label"><span id="id_label_id_uf"><?php echo $this->nm_new_label['id_uf']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_uf"]) &&  $this->nmgp_cmp_readonly["id_uf"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array(); 
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
   $x = 0; 
   $id_uf_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_uf_1))
          {
              foreach ($this->id_uf_1 as $tmp_id_uf)
              {
                  if (trim($tmp_id_uf) === trim($cadaselect[1])) { $id_uf_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_uf) === trim($cadaselect[1])) { $id_uf_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_uf" value="<?php echo $this->form_encode_input($id_uf) . "\">" . $id_uf_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $id_uf_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_uf_1))
          {
              foreach ($this->id_uf_1 as $tmp_id_uf)
              {
                  if (trim($tmp_id_uf) === trim($cadaselect[1])) { $id_uf_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_uf) === trim($cadaselect[1])) { $id_uf_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_uf_look))
          {
              $id_uf_look = $this->id_uf;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_uf\" class=\"css_id_uf_line\" style=\"" .  $sStyleReadLab_id_uf . "\">" . $this->form_encode_input($id_uf_look) . "</span><span id=\"id_read_off_id_uf\" style=\"" . $sStyleReadInp_id_uf . "\">";
   echo " <span id=\"idAjaxSelect_id_uf\"><select class=\"sc-js-input scFormObjectOdd css_id_uf_obj\" style=\"\" id=\"id_sc_field_id_uf\" name=\"id_uf\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_uf) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_uf)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_uf_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_uf_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_pais']))
   {
       $this->nm_new_label['id_pais'] = "Endereço Pais";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_pais = $this->id_pais;
   $sStyleHidden_id_pais = '';
   if (isset($this->nmgp_cmp_hidden['id_pais']) && $this->nmgp_cmp_hidden['id_pais'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_pais']);
       $sStyleHidden_id_pais = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_pais = 'display: none;';
   $sStyleReadInp_id_pais = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_pais']) && $this->nmgp_cmp_readonly['id_pais'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_pais']);
       $sStyleReadLab_id_pais = '';
       $sStyleReadInp_id_pais = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_pais']) && $this->nmgp_cmp_hidden['id_pais'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_pais" value="<?php echo $this->form_encode_input($this->id_pais) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_pais_line" id="hidden_field_data_id_pais" style="<?php echo $sStyleHidden_id_pais; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_pais_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_pais_label"><span id="id_label_id_pais"><?php echo $this->nm_new_label['id_pais']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_pais"]) &&  $this->nmgp_cmp_readonly["id_pais"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array(); 
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
   $x = 0; 
   $id_pais_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_pais_1))
          {
              foreach ($this->id_pais_1 as $tmp_id_pais)
              {
                  if (trim($tmp_id_pais) === trim($cadaselect[1])) { $id_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_pais) === trim($cadaselect[1])) { $id_pais_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_pais" value="<?php echo $this->form_encode_input($id_pais) . "\">" . $id_pais_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $id_pais_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_pais_1))
          {
              foreach ($this->id_pais_1 as $tmp_id_pais)
              {
                  if (trim($tmp_id_pais) === trim($cadaselect[1])) { $id_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_pais) === trim($cadaselect[1])) { $id_pais_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_pais_look))
          {
              $id_pais_look = $this->id_pais;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_pais\" class=\"css_id_pais_line\" style=\"" .  $sStyleReadLab_id_pais . "\">" . $this->form_encode_input($id_pais_look) . "</span><span id=\"id_read_off_id_pais\" style=\"" . $sStyleReadInp_id_pais . "\">";
   echo " <span id=\"idAjaxSelect_id_pais\"><select class=\"sc-js-input scFormObjectOdd css_id_pais_obj\" style=\"\" id=\"id_sc_field_id_pais\" name=\"id_pais\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_pais) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_pais)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_pais_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_pais_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cep']))
    {
        $this->nm_new_label['cep'] = "Endereço CEP";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cep = $this->cep;
   $sStyleHidden_cep = '';
   if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cep']);
       $sStyleHidden_cep = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cep = 'display: none;';
   $sStyleReadInp_cep = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cep']) && $this->nmgp_cmp_readonly['cep'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cep']);
       $sStyleReadLab_cep = '';
       $sStyleReadInp_cep = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cep" value="<?php echo $this->form_encode_input($cep) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cep_line" id="hidden_field_data_cep" style="<?php echo $sStyleHidden_cep; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cep_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cep_label"><span id="id_label_cep"><?php echo $this->nm_new_label['cep']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cep"]) &&  $this->nmgp_cmp_readonly["cep"] == "on") { 

 ?>
<input type="hidden" name="cep" value="<?php echo $this->form_encode_input($cep) . "\">" . $cep . ""; ?>
<?php } else { ?>
<span id="id_read_on_cep" class="sc-ui-readonly-cep css_cep_line" style="<?php echo $sStyleReadLab_cep; ?>"><?php echo $this->form_encode_input($this->cep); ?></span><span id="id_read_off_cep" style="white-space: nowrap;<?php echo $sStyleReadInp_cep; ?>">
 <input class="sc-js-input scFormObjectOdd css_cep_obj" style="" id="id_sc_field_cep" type=text name="cep" value="<?php echo $this->form_encode_input($cep) ?>"
 size=17 alt="{datatype: 'cep', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "bzipcode", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_public_pessoa_fisica'). "/form_public_pessoa_fisica_mob_cep.php?cep=' + document.F1.cep.value + '&form_origem=F1;CEP,cep&TB_iframe=true&height=220&width=350&modal=true', '')", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_public_pessoa_fisica'). "/form_public_pessoa_fisica_mob_cep.php?cep=' + document.F1.cep.value + '&form_origem=F1;CEP,cep&TB_iframe=true&height=220&width=350&modal=true', '')", "cep_cep", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cep_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cep_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
