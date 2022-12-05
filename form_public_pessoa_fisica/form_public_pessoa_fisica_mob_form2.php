<div id="form_public_pessoa_fisica_mob_form2" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_pessoa_fisica']))
           {
               $this->nmgp_cmp_readonly['id_pessoa_fisica'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['endereco_cob']))
    {
        $this->nm_new_label['endereco_cob'] = "Endereço Cobrança";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $endereco_cob = $this->endereco_cob;
   $sStyleHidden_endereco_cob = '';
   if (isset($this->nmgp_cmp_hidden['endereco_cob']) && $this->nmgp_cmp_hidden['endereco_cob'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['endereco_cob']);
       $sStyleHidden_endereco_cob = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_endereco_cob = 'display: none;';
   $sStyleReadInp_endereco_cob = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['endereco_cob']) && $this->nmgp_cmp_readonly['endereco_cob'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['endereco_cob']);
       $sStyleReadLab_endereco_cob = '';
       $sStyleReadInp_endereco_cob = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['endereco_cob']) && $this->nmgp_cmp_hidden['endereco_cob'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="endereco_cob" value="<?php echo $this->form_encode_input($endereco_cob) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_endereco_cob_line" id="hidden_field_data_endereco_cob" style="<?php echo $sStyleHidden_endereco_cob; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_endereco_cob_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_endereco_cob_label"><span id="id_label_endereco_cob"><?php echo $this->nm_new_label['endereco_cob']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["endereco_cob"]) &&  $this->nmgp_cmp_readonly["endereco_cob"] == "on") { 

 ?>
<input type="hidden" name="endereco_cob" value="<?php echo $this->form_encode_input($endereco_cob) . "\">" . $endereco_cob . ""; ?>
<?php } else { ?>
<span id="id_read_on_endereco_cob" class="sc-ui-readonly-endereco_cob css_endereco_cob_line" style="<?php echo $sStyleReadLab_endereco_cob; ?>"><?php echo $this->form_encode_input($this->endereco_cob); ?></span><span id="id_read_off_endereco_cob" style="white-space: nowrap;<?php echo $sStyleReadInp_endereco_cob; ?>">
 <input class="sc-js-input scFormObjectOdd css_endereco_cob_obj" style="" id="id_sc_field_endereco_cob" type=text name="endereco_cob" value="<?php echo $this->form_encode_input($endereco_cob) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_endereco_cob_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_endereco_cob_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['endereco_comp_cob']))
    {
        $this->nm_new_label['endereco_comp_cob'] = "Endereço Cobrança Comp ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $endereco_comp_cob = $this->endereco_comp_cob;
   $sStyleHidden_endereco_comp_cob = '';
   if (isset($this->nmgp_cmp_hidden['endereco_comp_cob']) && $this->nmgp_cmp_hidden['endereco_comp_cob'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['endereco_comp_cob']);
       $sStyleHidden_endereco_comp_cob = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_endereco_comp_cob = 'display: none;';
   $sStyleReadInp_endereco_comp_cob = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['endereco_comp_cob']) && $this->nmgp_cmp_readonly['endereco_comp_cob'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['endereco_comp_cob']);
       $sStyleReadLab_endereco_comp_cob = '';
       $sStyleReadInp_endereco_comp_cob = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['endereco_comp_cob']) && $this->nmgp_cmp_hidden['endereco_comp_cob'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="endereco_comp_cob" value="<?php echo $this->form_encode_input($endereco_comp_cob) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_endereco_comp_cob_line" id="hidden_field_data_endereco_comp_cob" style="<?php echo $sStyleHidden_endereco_comp_cob; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_endereco_comp_cob_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_endereco_comp_cob_label"><span id="id_label_endereco_comp_cob"><?php echo $this->nm_new_label['endereco_comp_cob']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["endereco_comp_cob"]) &&  $this->nmgp_cmp_readonly["endereco_comp_cob"] == "on") { 

 ?>
<input type="hidden" name="endereco_comp_cob" value="<?php echo $this->form_encode_input($endereco_comp_cob) . "\">" . $endereco_comp_cob . ""; ?>
<?php } else { ?>
<span id="id_read_on_endereco_comp_cob" class="sc-ui-readonly-endereco_comp_cob css_endereco_comp_cob_line" style="<?php echo $sStyleReadLab_endereco_comp_cob; ?>"><?php echo $this->form_encode_input($this->endereco_comp_cob); ?></span><span id="id_read_off_endereco_comp_cob" style="white-space: nowrap;<?php echo $sStyleReadInp_endereco_comp_cob; ?>">
 <input class="sc-js-input scFormObjectOdd css_endereco_comp_cob_obj" style="" id="id_sc_field_endereco_comp_cob" type=text name="endereco_comp_cob" value="<?php echo $this->form_encode_input($endereco_comp_cob) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_endereco_comp_cob_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_endereco_comp_cob_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bairro_cob']))
    {
        $this->nm_new_label['bairro_cob'] = "Endereço Cobrança Bairro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bairro_cob = $this->bairro_cob;
   $sStyleHidden_bairro_cob = '';
   if (isset($this->nmgp_cmp_hidden['bairro_cob']) && $this->nmgp_cmp_hidden['bairro_cob'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bairro_cob']);
       $sStyleHidden_bairro_cob = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bairro_cob = 'display: none;';
   $sStyleReadInp_bairro_cob = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bairro_cob']) && $this->nmgp_cmp_readonly['bairro_cob'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bairro_cob']);
       $sStyleReadLab_bairro_cob = '';
       $sStyleReadInp_bairro_cob = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bairro_cob']) && $this->nmgp_cmp_hidden['bairro_cob'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bairro_cob" value="<?php echo $this->form_encode_input($bairro_cob) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bairro_cob_line" id="hidden_field_data_bairro_cob" style="<?php echo $sStyleHidden_bairro_cob; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bairro_cob_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bairro_cob_label"><span id="id_label_bairro_cob"><?php echo $this->nm_new_label['bairro_cob']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bairro_cob"]) &&  $this->nmgp_cmp_readonly["bairro_cob"] == "on") { 

 ?>
<input type="hidden" name="bairro_cob" value="<?php echo $this->form_encode_input($bairro_cob) . "\">" . $bairro_cob . ""; ?>
<?php } else { ?>
<span id="id_read_on_bairro_cob" class="sc-ui-readonly-bairro_cob css_bairro_cob_line" style="<?php echo $sStyleReadLab_bairro_cob; ?>"><?php echo $this->form_encode_input($this->bairro_cob); ?></span><span id="id_read_off_bairro_cob" style="white-space: nowrap;<?php echo $sStyleReadInp_bairro_cob; ?>">
 <input class="sc-js-input scFormObjectOdd css_bairro_cob_obj" style="" id="id_sc_field_bairro_cob" type=text name="bairro_cob" value="<?php echo $this->form_encode_input($bairro_cob) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bairro_cob_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bairro_cob_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_municipio_cob']))
   {
       $this->nm_new_label['id_municipio_cob'] = "Endereço Cobrança Município";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_municipio_cob = $this->id_municipio_cob;
   $sStyleHidden_id_municipio_cob = '';
   if (isset($this->nmgp_cmp_hidden['id_municipio_cob']) && $this->nmgp_cmp_hidden['id_municipio_cob'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_municipio_cob']);
       $sStyleHidden_id_municipio_cob = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_municipio_cob = 'display: none;';
   $sStyleReadInp_id_municipio_cob = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_municipio_cob']) && $this->nmgp_cmp_readonly['id_municipio_cob'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_municipio_cob']);
       $sStyleReadLab_id_municipio_cob = '';
       $sStyleReadInp_id_municipio_cob = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_municipio_cob']) && $this->nmgp_cmp_hidden['id_municipio_cob'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_municipio_cob" value="<?php echo $this->form_encode_input($this->id_municipio_cob) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_municipio_cob_line" id="hidden_field_data_id_municipio_cob" style="<?php echo $sStyleHidden_id_municipio_cob; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_municipio_cob_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_municipio_cob_label"><span id="id_label_id_municipio_cob"><?php echo $this->nm_new_label['id_municipio_cob']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_municipio_cob"]) &&  $this->nmgp_cmp_readonly["id_municipio_cob"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array(); 
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
   $x = 0; 
   $id_municipio_cob_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_municipio_cob_1))
          {
              foreach ($this->id_municipio_cob_1 as $tmp_id_municipio_cob)
              {
                  if (trim($tmp_id_municipio_cob) === trim($cadaselect[1])) { $id_municipio_cob_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_municipio_cob) === trim($cadaselect[1])) { $id_municipio_cob_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_municipio_cob" value="<?php echo $this->form_encode_input($id_municipio_cob) . "\">" . $id_municipio_cob_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $id_municipio_cob_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_municipio_cob_1))
          {
              foreach ($this->id_municipio_cob_1 as $tmp_id_municipio_cob)
              {
                  if (trim($tmp_id_municipio_cob) === trim($cadaselect[1])) { $id_municipio_cob_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_municipio_cob) === trim($cadaselect[1])) { $id_municipio_cob_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_municipio_cob_look))
          {
              $id_municipio_cob_look = $this->id_municipio_cob;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_municipio_cob\" class=\"css_id_municipio_cob_line\" style=\"" .  $sStyleReadLab_id_municipio_cob . "\">" . $this->form_encode_input($id_municipio_cob_look) . "</span><span id=\"id_read_off_id_municipio_cob\" style=\"" . $sStyleReadInp_id_municipio_cob . "\">";
   echo " <span id=\"idAjaxSelect_id_municipio_cob\"><select class=\"sc-js-input scFormObjectOdd css_id_municipio_cob_obj\" style=\"\" id=\"id_sc_field_id_municipio_cob\" name=\"id_municipio_cob\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_municipio_cob'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_municipio_cob) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_municipio_cob)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_municipio_cob_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_municipio_cob_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_uf_cob']))
   {
       $this->nm_new_label['id_uf_cob'] = "Endereço Cobrança UF";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_uf_cob = $this->id_uf_cob;
   $sStyleHidden_id_uf_cob = '';
   if (isset($this->nmgp_cmp_hidden['id_uf_cob']) && $this->nmgp_cmp_hidden['id_uf_cob'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_uf_cob']);
       $sStyleHidden_id_uf_cob = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_uf_cob = 'display: none;';
   $sStyleReadInp_id_uf_cob = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_uf_cob']) && $this->nmgp_cmp_readonly['id_uf_cob'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_uf_cob']);
       $sStyleReadLab_id_uf_cob = '';
       $sStyleReadInp_id_uf_cob = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_uf_cob']) && $this->nmgp_cmp_hidden['id_uf_cob'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_uf_cob" value="<?php echo $this->form_encode_input($this->id_uf_cob) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_uf_cob_line" id="hidden_field_data_id_uf_cob" style="<?php echo $sStyleHidden_id_uf_cob; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_uf_cob_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_uf_cob_label"><span id="id_label_id_uf_cob"><?php echo $this->nm_new_label['id_uf_cob']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_uf_cob"]) &&  $this->nmgp_cmp_readonly["id_uf_cob"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array(); 
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
   $x = 0; 
   $id_uf_cob_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_uf_cob_1))
          {
              foreach ($this->id_uf_cob_1 as $tmp_id_uf_cob)
              {
                  if (trim($tmp_id_uf_cob) === trim($cadaselect[1])) { $id_uf_cob_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_uf_cob) === trim($cadaselect[1])) { $id_uf_cob_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_uf_cob" value="<?php echo $this->form_encode_input($id_uf_cob) . "\">" . $id_uf_cob_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $id_uf_cob_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_uf_cob_1))
          {
              foreach ($this->id_uf_cob_1 as $tmp_id_uf_cob)
              {
                  if (trim($tmp_id_uf_cob) === trim($cadaselect[1])) { $id_uf_cob_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_uf_cob) === trim($cadaselect[1])) { $id_uf_cob_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_uf_cob_look))
          {
              $id_uf_cob_look = $this->id_uf_cob;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_uf_cob\" class=\"css_id_uf_cob_line\" style=\"" .  $sStyleReadLab_id_uf_cob . "\">" . $this->form_encode_input($id_uf_cob_look) . "</span><span id=\"id_read_off_id_uf_cob\" style=\"" . $sStyleReadInp_id_uf_cob . "\">";
   echo " <span id=\"idAjaxSelect_id_uf_cob\"><select class=\"sc-js-input scFormObjectOdd css_id_uf_cob_obj\" style=\"\" id=\"id_sc_field_id_uf_cob\" name=\"id_uf_cob\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_uf_cob'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_uf_cob) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_uf_cob)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_uf_cob_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_uf_cob_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_pais_cob']))
   {
       $this->nm_new_label['id_pais_cob'] = "Endereço Cobrança País";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_pais_cob = $this->id_pais_cob;
   $sStyleHidden_id_pais_cob = '';
   if (isset($this->nmgp_cmp_hidden['id_pais_cob']) && $this->nmgp_cmp_hidden['id_pais_cob'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_pais_cob']);
       $sStyleHidden_id_pais_cob = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_pais_cob = 'display: none;';
   $sStyleReadInp_id_pais_cob = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_pais_cob']) && $this->nmgp_cmp_readonly['id_pais_cob'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_pais_cob']);
       $sStyleReadLab_id_pais_cob = '';
       $sStyleReadInp_id_pais_cob = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_pais_cob']) && $this->nmgp_cmp_hidden['id_pais_cob'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_pais_cob" value="<?php echo $this->form_encode_input($this->id_pais_cob) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_pais_cob_line" id="hidden_field_data_id_pais_cob" style="<?php echo $sStyleHidden_id_pais_cob; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_pais_cob_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_pais_cob_label"><span id="id_label_id_pais_cob"><?php echo $this->nm_new_label['id_pais_cob']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_pais_cob"]) &&  $this->nmgp_cmp_readonly["id_pais_cob"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array(); 
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
   $x = 0; 
   $id_pais_cob_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_pais_cob_1))
          {
              foreach ($this->id_pais_cob_1 as $tmp_id_pais_cob)
              {
                  if (trim($tmp_id_pais_cob) === trim($cadaselect[1])) { $id_pais_cob_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_pais_cob) === trim($cadaselect[1])) { $id_pais_cob_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_pais_cob" value="<?php echo $this->form_encode_input($id_pais_cob) . "\">" . $id_pais_cob_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $id_pais_cob_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_pais_cob_1))
          {
              foreach ($this->id_pais_cob_1 as $tmp_id_pais_cob)
              {
                  if (trim($tmp_id_pais_cob) === trim($cadaselect[1])) { $id_pais_cob_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_pais_cob) === trim($cadaselect[1])) { $id_pais_cob_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_pais_cob_look))
          {
              $id_pais_cob_look = $this->id_pais_cob;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_pais_cob\" class=\"css_id_pais_cob_line\" style=\"" .  $sStyleReadLab_id_pais_cob . "\">" . $this->form_encode_input($id_pais_cob_look) . "</span><span id=\"id_read_off_id_pais_cob\" style=\"" . $sStyleReadInp_id_pais_cob . "\">";
   echo " <span id=\"idAjaxSelect_id_pais_cob\"><select class=\"sc-js-input scFormObjectOdd css_id_pais_cob_obj\" style=\"\" id=\"id_sc_field_id_pais_cob\" name=\"id_pais_cob\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_pais_cob'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_pais_cob) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_pais_cob)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_pais_cob_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_pais_cob_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cep_cob']))
    {
        $this->nm_new_label['cep_cob'] = "Endereço Cobrança CEP";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cep_cob = $this->cep_cob;
   $sStyleHidden_cep_cob = '';
   if (isset($this->nmgp_cmp_hidden['cep_cob']) && $this->nmgp_cmp_hidden['cep_cob'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cep_cob']);
       $sStyleHidden_cep_cob = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cep_cob = 'display: none;';
   $sStyleReadInp_cep_cob = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cep_cob']) && $this->nmgp_cmp_readonly['cep_cob'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cep_cob']);
       $sStyleReadLab_cep_cob = '';
       $sStyleReadInp_cep_cob = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cep_cob']) && $this->nmgp_cmp_hidden['cep_cob'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cep_cob" value="<?php echo $this->form_encode_input($cep_cob) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cep_cob_line" id="hidden_field_data_cep_cob" style="<?php echo $sStyleHidden_cep_cob; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cep_cob_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cep_cob_label"><span id="id_label_cep_cob"><?php echo $this->nm_new_label['cep_cob']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cep_cob"]) &&  $this->nmgp_cmp_readonly["cep_cob"] == "on") { 

 ?>
<input type="hidden" name="cep_cob" value="<?php echo $this->form_encode_input($cep_cob) . "\">" . $cep_cob . ""; ?>
<?php } else { ?>
<span id="id_read_on_cep_cob" class="sc-ui-readonly-cep_cob css_cep_cob_line" style="<?php echo $sStyleReadLab_cep_cob; ?>"><?php echo $this->form_encode_input($this->cep_cob); ?></span><span id="id_read_off_cep_cob" style="white-space: nowrap;<?php echo $sStyleReadInp_cep_cob; ?>">
 <input class="sc-js-input scFormObjectOdd css_cep_cob_obj" style="" id="id_sc_field_cep_cob" type=text name="cep_cob" value="<?php echo $this->form_encode_input($cep_cob) ?>"
 size=8 alt="{datatype: 'cep', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "bzipcode", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_public_pessoa_fisica'). "/form_public_pessoa_fisica_mob_cep.php?cep=' + document.F1.cep_cob.value + '&form_origem=F1;CEP,cep_cob&TB_iframe=true&height=220&width=350&modal=true', '')", "tb_show('', '" . $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . SC_dir_app_name('form_public_pessoa_fisica'). "/form_public_pessoa_fisica_mob_cep.php?cep=' + document.F1.cep_cob.value + '&form_origem=F1;CEP,cep_cob&TB_iframe=true&height=220&width=350&modal=true', '')", "cep_cob_cep", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cep_cob_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cep_cob_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
