
function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('input:checkbox.sc-js-input').listen();
  $('input:radio.sc-js-input').listen();
  $('select.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if (false == scSetFocusOnField($oField) && $("#id_ac_" + sField).length > 0) {
    scSetFocusOnField($("#id_ac_" + sField));
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["id_pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_ibge_cod" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_nm_pais_ter_ptb" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_iso_alpha3_cod" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dt_cadastro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["usu_cadastro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dt_atualiza" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["usu_atualiza" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_merge" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_ativo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_nm_pais_ter_ptb2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_sigla" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_capital" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_moeda" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_moeda" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_idioma" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_dominio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["pais_obs" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id_pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_ibge_cod" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_ibge_cod" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_nm_pais_ter_ptb" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_nm_pais_ter_ptb" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_iso_alpha3_cod" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_iso_alpha3_cod" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dt_cadastro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dt_cadastro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["usu_cadastro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usu_cadastro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dt_atualiza" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dt_atualiza" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["usu_atualiza" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usu_atualiza" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_merge" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_merge" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_ativo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_ativo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_nm_pais_ter_ptb2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_nm_pais_ter_ptb2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_sigla" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_sigla" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_capital" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_capital" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_moeda" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_moeda" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_moeda" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_moeda" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_idioma" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_idioma" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_dominio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_dominio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais_obs" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais_obs" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onChange_call(sFieldName, iFieldSeq) {
  var oField, fieldId, fieldName;
  oField = $("#id_sc_field_" + sFieldName + iFieldSeq);
  fieldId = oField.attr("id");
  fieldName = fieldId.substr(12);
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_id_pais' + iSeqRow).bind('blur', function() { sc_form_public_pais_id_pais_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_public_pais_id_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_nm_pais_ter_ptb' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_nm_pais_ter_ptb_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_public_pais_pais_nm_pais_ter_ptb_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_nm_pais_ter_ptb2' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_nm_pais_ter_ptb2_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_public_pais_pais_nm_pais_ter_ptb2_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_sigla' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_sigla_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_public_pais_pais_sigla_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_iso_alpha3_cod' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_iso_alpha3_cod_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_public_pais_pais_iso_alpha3_cod_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_ibge_cod' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_ibge_cod_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_public_pais_pais_ibge_cod_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_capital' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_capital_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_public_pais_pais_capital_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_moeda' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_moeda_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_public_pais_pais_moeda_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_moeda' + iSeqRow).bind('blur', function() { sc_form_public_pais_id_moeda_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_public_pais_id_moeda_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_idioma' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_idioma_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_public_pais_pais_idioma_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_dominio' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_dominio_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_public_pais_pais_dominio_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais_obs' + iSeqRow).bind('blur', function() { sc_form_public_pais_pais_obs_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_public_pais_pais_obs_onfocus(this, iSeqRow) });
  $('#id_sc_field_dt_cadastro' + iSeqRow).bind('blur', function() { sc_form_public_pais_dt_cadastro_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_public_pais_dt_cadastro_onfocus(this, iSeqRow) });
  $('#id_sc_field_dt_cadastro_hora' + iSeqRow).bind('blur', function() { sc_form_public_pais_dt_cadastro_hora_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_public_pais_dt_cadastro_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_usu_cadastro' + iSeqRow).bind('blur', function() { sc_form_public_pais_usu_cadastro_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_public_pais_usu_cadastro_onfocus(this, iSeqRow) });
  $('#id_sc_field_dt_atualiza' + iSeqRow).bind('blur', function() { sc_form_public_pais_dt_atualiza_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_public_pais_dt_atualiza_onfocus(this, iSeqRow) });
  $('#id_sc_field_dt_atualiza_hora' + iSeqRow).bind('blur', function() { sc_form_public_pais_dt_atualiza_hora_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_public_pais_dt_atualiza_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_usu_atualiza' + iSeqRow).bind('blur', function() { sc_form_public_pais_usu_atualiza_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_public_pais_usu_atualiza_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_ativo' + iSeqRow).bind('blur', function() { sc_form_public_pais_id_ativo_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_public_pais_id_ativo_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_merge' + iSeqRow).bind('blur', function() { sc_form_public_pais_id_merge_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_public_pais_id_merge_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_public_pais_id_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_id_pais();
  scCssBlur(oThis);
}

function sc_form_public_pais_id_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_nm_pais_ter_ptb_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_nm_pais_ter_ptb();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_nm_pais_ter_ptb_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_nm_pais_ter_ptb2_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_nm_pais_ter_ptb2();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_nm_pais_ter_ptb2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_sigla_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_sigla();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_sigla_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_iso_alpha3_cod_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_iso_alpha3_cod();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_iso_alpha3_cod_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_ibge_cod_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_ibge_cod();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_ibge_cod_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_capital_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_capital();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_capital_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_moeda_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_moeda();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_moeda_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_id_moeda_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_id_moeda();
  scCssBlur(oThis);
}

function sc_form_public_pais_id_moeda_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_idioma_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_idioma();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_idioma_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_dominio_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_dominio();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_dominio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_pais_obs_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_pais_obs();
  scCssBlur(oThis);
}

function sc_form_public_pais_pais_obs_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_dt_cadastro_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_dt_cadastro();
  scCssBlur(oThis);
}

function sc_form_public_pais_dt_cadastro_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_dt_cadastro();
  scCssBlur(oThis);
}

function sc_form_public_pais_dt_cadastro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_dt_cadastro_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_usu_cadastro_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_usu_cadastro();
  scCssBlur(oThis);
}

function sc_form_public_pais_usu_cadastro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_dt_atualiza_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_dt_atualiza();
  scCssBlur(oThis);
}

function sc_form_public_pais_dt_atualiza_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_dt_atualiza();
  scCssBlur(oThis);
}

function sc_form_public_pais_dt_atualiza_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_dt_atualiza_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_usu_atualiza_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_usu_atualiza();
  scCssBlur(oThis);
}

function sc_form_public_pais_usu_atualiza_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_id_ativo_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_id_ativo();
  scCssBlur(oThis);
}

function sc_form_public_pais_id_ativo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pais_id_merge_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pais_validate_id_merge();
  scCssBlur(oThis);
}

function sc_form_public_pais_id_merge_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_dt_cadastro" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dt_cadastro" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['dt_cadastro']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dt_cadastro']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dt_cadastro']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_dt_atualiza" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dt_atualiza" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['dt_atualiza']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dt_atualiza']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['dt_atualiza']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

