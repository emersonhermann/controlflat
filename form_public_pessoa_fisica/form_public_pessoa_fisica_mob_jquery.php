
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

  if ($oField.length > 0) {
    switch ($oField[0].name) {
      case 'id_pessoa_fisica':
      case 'cpf':
      case 'nome':
      case 'sexo':
      case 'dt_nasc':
      case 'nacionalidade':
      case 'naturalidade':
      case 'id_tipo_estado_civil':
      case 'id_tipo_escolaridade':
      case 'id_tipo_sanguineo':
      case 'profissao':
      case 'aposentado':
      case 'id_tipo_vinculo':
      case 'obs':
      case 'id_ativo':
        sc_exib_ocult_pag('form_public_pessoa_fisica_mob_form0');
        break;
      case 'endereco':
      case 'endereco_comp':
      case 'bairro':
      case 'id_municipio':
      case 'id_uf':
      case 'id_pais':
      case 'cep':
        sc_exib_ocult_pag('form_public_pessoa_fisica_mob_form1');
        break;
      case 'endereco_cob':
      case 'endereco_comp_cob':
      case 'bairro_cob':
      case 'id_municipio_cob':
      case 'id_uf_cob':
      case 'id_pais_cob':
      case 'cep_cob':
        sc_exib_ocult_pag('form_public_pessoa_fisica_mob_form2');
        break;
      case 'rg':
      case 'rg_uf_emissor':
      case 'rg_orgao_emissor':
      case 'rg_dt_emissao':
      case 'passaporte':
      case 'passaporte_pais_origem':
      case 'passaporte_dt_emissao':
      case 'cnh':
      case 'cnh_categoria':
      case 'cnh_dt_validade':
        sc_exib_ocult_pag('form_public_pessoa_fisica_mob_form3');
        break;
    }
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
  scEventControl_data["id_pessoa_fisica" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cpf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nome" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["sexo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["dt_nasc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nacionalidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["naturalidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_tipo_estado_civil" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_tipo_escolaridade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_tipo_sanguineo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["profissao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["aposentado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_tipo_vinculo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["obs" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_ativo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["endereco" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["endereco_comp" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bairro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_municipio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_uf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["endereco_cob" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["endereco_comp_cob" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["bairro_cob" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_municipio_cob" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_uf_cob" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["id_pais_cob" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cep_cob" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rg" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rg_uf_emissor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rg_orgao_emissor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rg_dt_emissao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["passaporte" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["passaporte_pais_origem" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["passaporte_dt_emissao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cnh" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cnh_categoria" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cnh_dt_validade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id_pessoa_fisica" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_pessoa_fisica" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cpf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cpf" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dt_nasc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dt_nasc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nacionalidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nacionalidade" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["naturalidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["naturalidade" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_tipo_estado_civil" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_tipo_estado_civil" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_tipo_escolaridade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_tipo_escolaridade" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_tipo_sanguineo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_tipo_sanguineo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["profissao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["profissao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["aposentado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["aposentado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_tipo_vinculo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_tipo_vinculo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["obs" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["obs" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_ativo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_ativo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["endereco" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["endereco" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["endereco_comp" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["endereco_comp" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_municipio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_municipio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_uf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_uf" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["endereco_cob" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["endereco_cob" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["endereco_comp_cob" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["endereco_comp_cob" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bairro_cob" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bairro_cob" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_municipio_cob" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_municipio_cob" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_uf_cob" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_uf_cob" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_pais_cob" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_pais_cob" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cep_cob" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cep_cob" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rg" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rg" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rg_uf_emissor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rg_uf_emissor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rg_orgao_emissor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rg_orgao_emissor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rg_dt_emissao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rg_dt_emissao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["passaporte" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["passaporte" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["passaporte_pais_origem" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["passaporte_pais_origem" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["passaporte_dt_emissao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["passaporte_dt_emissao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cnh" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cnh" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cnh_categoria" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cnh_categoria" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cnh_dt_validade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cnh_dt_validade" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("sexo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("nacionalidade" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_tipo_estado_civil" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_tipo_escolaridade" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_tipo_sanguineo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("aposentado" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_municipio" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_uf" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_pais" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_municipio_cob" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_uf_cob" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_pais_cob" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("rg_uf_emissor" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("passaporte_pais_origem" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
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
  $('#id_sc_field_id_pessoa_fisica' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_pessoa_fisica_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_public_pessoa_fisica_id_pessoa_fisica_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_nome_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_public_pessoa_fisica_nome_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_tipo_vinculo' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_tipo_vinculo_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_public_pessoa_fisica_id_tipo_vinculo_onfocus(this, iSeqRow) });
  $('#id_sc_field_endereco' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_endereco_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_public_pessoa_fisica_endereco_onfocus(this, iSeqRow) });
  $('#id_sc_field_endereco_comp' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_endereco_comp_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_public_pessoa_fisica_endereco_comp_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_bairro_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_public_pessoa_fisica_bairro_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_municipio' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_municipio_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_public_pessoa_fisica_id_municipio_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_uf' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_uf_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_public_pessoa_fisica_id_uf_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_pais' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_pais_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_public_pessoa_fisica_id_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_cep_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_public_pessoa_fisica_cep_onfocus(this, iSeqRow) });
  $('#id_sc_field_endereco_cob' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_endereco_cob_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_public_pessoa_fisica_endereco_cob_onfocus(this, iSeqRow) });
  $('#id_sc_field_endereco_comp_cob' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_endereco_comp_cob_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_public_pessoa_fisica_endereco_comp_cob_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro_cob' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_bairro_cob_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_public_pessoa_fisica_bairro_cob_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_municipio_cob' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_municipio_cob_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_public_pessoa_fisica_id_municipio_cob_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_uf_cob' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_uf_cob_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_public_pessoa_fisica_id_uf_cob_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_pais_cob' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_pais_cob_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_public_pessoa_fisica_id_pais_cob_onfocus(this, iSeqRow) });
  $('#id_sc_field_cep_cob' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_cep_cob_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_public_pessoa_fisica_cep_cob_onfocus(this, iSeqRow) });
  $('#id_sc_field_dt_nasc' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_dt_nasc_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_public_pessoa_fisica_dt_nasc_onfocus(this, iSeqRow) });
  $('#id_sc_field_sexo' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_sexo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_public_pessoa_fisica_sexo_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_tipo_estado_civil' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_tipo_estado_civil_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_public_pessoa_fisica_id_tipo_estado_civil_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_tipo_escolaridade' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_tipo_escolaridade_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_public_pessoa_fisica_id_tipo_escolaridade_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_tipo_sanguineo' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_tipo_sanguineo_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_public_pessoa_fisica_id_tipo_sanguineo_onfocus(this, iSeqRow) });
  $('#id_sc_field_profissao' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_profissao_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_public_pessoa_fisica_profissao_onfocus(this, iSeqRow) });
  $('#id_sc_field_aposentado' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_aposentado_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_public_pessoa_fisica_aposentado_onfocus(this, iSeqRow) });
  $('#id_sc_field_cpf' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_cpf_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_public_pessoa_fisica_cpf_onfocus(this, iSeqRow) });
  $('#id_sc_field_rg' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_rg_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_public_pessoa_fisica_rg_onfocus(this, iSeqRow) });
  $('#id_sc_field_rg_orgao_emissor' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_rg_orgao_emissor_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_public_pessoa_fisica_rg_orgao_emissor_onfocus(this, iSeqRow) });
  $('#id_sc_field_rg_uf_emissor' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_rg_uf_emissor_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_public_pessoa_fisica_rg_uf_emissor_onfocus(this, iSeqRow) });
  $('#id_sc_field_rg_dt_emissao' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_rg_dt_emissao_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_public_pessoa_fisica_rg_dt_emissao_onfocus(this, iSeqRow) });
  $('#id_sc_field_passaporte' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_passaporte_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_public_pessoa_fisica_passaporte_onfocus(this, iSeqRow) });
  $('#id_sc_field_passaporte_dt_emissao' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_passaporte_dt_emissao_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_public_pessoa_fisica_passaporte_dt_emissao_onfocus(this, iSeqRow) });
  $('#id_sc_field_passaporte_pais_origem' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_passaporte_pais_origem_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_public_pessoa_fisica_passaporte_pais_origem_onfocus(this, iSeqRow) });
  $('#id_sc_field_nacionalidade' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_nacionalidade_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_public_pessoa_fisica_nacionalidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_naturalidade' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_naturalidade_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_public_pessoa_fisica_naturalidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_cnh' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_cnh_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_public_pessoa_fisica_cnh_onfocus(this, iSeqRow) });
  $('#id_sc_field_cnh_dt_validade' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_cnh_dt_validade_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_public_pessoa_fisica_cnh_dt_validade_onfocus(this, iSeqRow) });
  $('#id_sc_field_cnh_categoria' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_cnh_categoria_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_public_pessoa_fisica_cnh_categoria_onfocus(this, iSeqRow) });
  $('#id_sc_field_obs' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_obs_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_public_pessoa_fisica_obs_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_ativo' + iSeqRow).bind('blur', function() { sc_form_public_pessoa_fisica_id_ativo_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_public_pessoa_fisica_id_ativo_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_public_pessoa_fisica_id_pessoa_fisica_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_pessoa_fisica();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_pessoa_fisica_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_nome_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_nome();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_nome_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_tipo_vinculo_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_vinculo();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_tipo_vinculo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_endereco_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_endereco();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_endereco_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_endereco_comp_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_endereco_comp_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_bairro_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_bairro();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_bairro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_municipio_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_municipio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_uf_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_uf();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_uf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_pais();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_cep_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_cep();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_cep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_endereco_cob_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_endereco_cob();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_endereco_cob_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_endereco_comp_cob_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cob();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_endereco_comp_cob_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_bairro_cob_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_bairro_cob();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_bairro_cob_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_municipio_cob_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cob();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_municipio_cob_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_uf_cob_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cob();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_uf_cob_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_pais_cob_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cob();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_pais_cob_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_cep_cob_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_cep_cob();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_cep_cob_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_dt_nasc_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_dt_nasc();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_dt_nasc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_sexo_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_sexo();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_sexo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_tipo_estado_civil_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_estado_civil();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_tipo_estado_civil_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_tipo_escolaridade_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_escolaridade();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_tipo_escolaridade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_tipo_sanguineo_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_sanguineo();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_tipo_sanguineo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_profissao_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_profissao();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_profissao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_aposentado_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_aposentado();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_aposentado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_cpf_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_cpf();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_cpf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_rg_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_rg();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_rg_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_rg_orgao_emissor_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_rg_orgao_emissor();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_rg_orgao_emissor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_rg_uf_emissor_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_rg_uf_emissor();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_rg_uf_emissor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_rg_dt_emissao_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_rg_dt_emissao();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_rg_dt_emissao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_passaporte_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_passaporte();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_passaporte_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_passaporte_dt_emissao_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_dt_emissao();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_passaporte_dt_emissao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_passaporte_pais_origem_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_pais_origem();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_passaporte_pais_origem_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_nacionalidade_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_nacionalidade();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_nacionalidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_naturalidade_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_naturalidade();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_naturalidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_cnh_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_cnh();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_cnh_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_cnh_dt_validade_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_cnh_dt_validade();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_cnh_dt_validade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_cnh_categoria_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_cnh_categoria();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_cnh_categoria_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_obs_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_obs();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_obs_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_public_pessoa_fisica_id_ativo_onblur(oThis, iSeqRow) {
  do_ajax_form_public_pessoa_fisica_mob_validate_id_ativo();
  scCssBlur(oThis);
}

function sc_form_public_pessoa_fisica_id_ativo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_dt_nasc" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dt_nasc" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['dt_nasc']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_rg_dt_emissao" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_rg_dt_emissao" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['rg_dt_emissao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_passaporte_dt_emissao" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_passaporte_dt_emissao" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['passaporte_dt_emissao']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_cnh_dt_validade" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_cnh_dt_validade" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['cnh_dt_validade']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

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

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup) {
  if ('over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
  }
}
