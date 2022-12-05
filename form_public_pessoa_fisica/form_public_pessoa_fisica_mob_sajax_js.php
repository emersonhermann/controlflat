
 <form name="form_ajax_redir_1" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_outra_jan">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>
 <form name="form_ajax_redir_2" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_url_saida">
  <input type="hidden" name="script_case_init">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>

 <SCRIPT>
<?php
sajax_show_javascript();
?>

  function scCenterElement(oElem)
  {
    var $oElem    = $(oElem),
        $oWindow  = $(this),
        iElemTop  = Math.round(($oWindow.height() - $oElem.height()) / 2),
        iElemLeft = Math.round(($oWindow.width()  - $oElem.width())  / 2);

    $oElem.offset({top: iElemTop, left: iElemLeft});
  } // scCenterElement

  function scAjaxHideAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "none";
    }
  } // scAjaxHideAutocomp

  function scAjaxShowAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "";
      document.getElementById("id_ac_" + sFrameId).focus();
    }
  } // scAjaxShowAutocomp

  function scAjaxHideDebug()
  {
    if (document.getElementById("id_debug_window"))
    {
      document.getElementById("id_debug_window").style.display = "none";
      document.getElementById("id_debug_text").innerHTML = "";
    }
  } // scAjaxHideDebug

  function scAjaxShowDebug(oTemp)
  {
    if (!document.getElementById("id_debug_window"))
    {
      return;
    }
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["htmOutput"] && "" != oResp["htmOutput"])
    {
      document.getElementById("id_debug_window").style.display = "";
      document.getElementById("id_debug_text").innerHTML = scAjaxFormatDebug(oResp["htmOutput"]) + document.getElementById("id_debug_text").innerHTML;
      scCenterElement(document.getElementById("id_debug_window"));
    }
  } // scAjaxShowDebug

  function scAjaxFormatDebug(sDebugMsg)
  {
    return "<table class=\"scFormMessageTable\" style=\"margin: 1px; width: 100%\"><tr><td class=\"scFormMessageMessage\">" + scAjaxSpecCharParser(sDebugMsg) + "</td></tr></table>";
  } // scAjaxFormatDebug

  function scAjaxHideErrorDisplay(sErrorId, bForce)
  {
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "none";
      document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = "";
      if (null == bForce)
      {
          bForce = true;
      }
      if (bForce)
      {
          var $oField = $('#id_sc_field_' + sErrorId);
          if (0 < $oField.length)
          {
              $oField.removeClass(sc_css_status);
          }
      }
    }
    if (document.getElementById("id_error_display_fixed"))
    {
      document.getElementById("id_error_display_fixed").style.display = "none";
    }
  } // scAjaxHideErrorDisplay

  function scAjaxShowErrorDisplay(sErrorId, sErrorMsg)
  {
    if (oResp && oResp['redirExitInfo'])
    {
      sErrorMsg += "<br /><input type=\"button\" onClick=\"window.location='" + oResp['redirExitInfo']['action'] + "'\" value=\"Ok\">";
    }
    sErrorMsg = scAjaxErrorSql(sErrorMsg);
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "";
      document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = sErrorMsg;
      if ("table" == sErrorId)
      {
        scCenterElement(document.getElementById("id_error_display_" + sErrorId + "_frame"));
      }
      var $oField = $('#id_sc_field_' + sErrorId);
      if (0 < $oField.length)
      {
        $oField.addClass(sc_css_status);
      }
    }
    if (ajax_error_list && ajax_error_list[sErrorId] && ajax_error_list[sErrorId]["timeout"] && 0 < ajax_error_list[sErrorId]["timeout"])
    {
      setTimeout("scAjaxHideErrorDisplay('" + sErrorId + "', false)", ajax_error_list[sErrorId]["timeout"] * 1000);
    }
    /*else if ("table" == sErrorId)
    {
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.left = posDispLeft + "px";
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.top = posDispTop + "px";
    }*/
  } // scAjaxShowErrorDisplay

  var iErrorSqlId = 1;

  function scAjaxErrorSql(sErrorMsg)
  {
    var iTmpPos = sErrorMsg.indexOf("{SC_DB_ERROR_INI}"),
        sTmpId;
    while (-1 < iTmpPos)
    {
      sTmpId    = "sc_id_error_sql_" + iErrorSqlId;
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><span style=\"text-decoration: underline\" onClick=\"$('#" + sTmpId + "').show(); scCenterElement(document.getElementById('" + sTmpId + "'))\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_MID}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span><table class=\"scFormErrorTable\" id=\"" + sTmpId + "\" style=\"display: none; position: absolute\"><tr><td>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_CLS}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><br /><span onClick=\"$('#" + sTmpId + "').hide()\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_END}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span></td></tr></table>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_INI}");
      iErrorSqlId++;
    }
    return sErrorMsg;
  } // scAjaxErrorSql

  function scAjaxHideMessage()
  {
    if (document.getElementById("id_message_display_frame"))
    {
      document.getElementById("id_message_display_frame").style.display = "none";
      document.getElementById("id_message_display_text").innerHTML = "";
    }
  } // scAjaxHideMessage

  function scAjaxShowMessage()
  {
    if (!oResp["msgDisplay"] || !oResp["msgDisplay"]["msgText"])
    {
      return;
    }
    _scAjaxShowMessage(scMsgDefTitle, oResp["msgDisplay"]["msgText"], false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
  } // scAjaxShowMessage

  var scMsgDefClose = "";

  function _scAjaxShowMessage(sTitle, sMessage, bModal, iTimeout, bButton, sButton, iTop, iLeft, iWidth, iHeight, sRedir, sTarget, sParam, bClose, bBodyIcon) {
    if ("" == sMessage) {
      if (bModal) {
        scMsgDefClick = "close_modal";
      }
      else {
        scMsgDefClick = "close";
      }
      _scAjaxMessageBtnClick();
      document.getElementById("id_message_display_title").innerHTML = scMsgDefTitle;
      document.getElementById("id_message_display_text").innerHTML = "";
      document.getElementById("id_message_display_buttone").value = scMsgDefButton;
      document.getElementById("id_message_display_buttond").style.display = "none";
    }
    else {
      document.getElementById("id_message_display_title").innerHTML = scAjaxSpecCharParser(sTitle);
      document.getElementById("id_message_display_text").innerHTML = scAjaxSpecCharParser(sMessage);
      document.getElementById("id_message_display_buttone").value = sButton;
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_title_line").style.display = (bClose || "" != sTitle) ? "" : "none";
      document.getElementById("id_message_display_close_icon").style.display = bClose ? "" : "none";
      if (document.getElementById("id_message_display_body_icon")) {
        document.getElementById("id_message_display_body_icon").style.display = bBodyIcon ? "" : "none";
      }
      $("#id_message_display_content").css('width', (0 < iWidth ? iWidth + 'px' : ''));
      $("#id_message_display_content").css('height', (0 < iHeight ? iHeight + 'px' : ''));
      if (bModal) {
        iWidth = iWidth || 250;
        iHeight = iHeight || 200;
        scMsgDefClose = "close_modal";
        tb_show('', '#TB_inline?height=' + (iHeight + 6) + '&width=' + (iWidth + 4) + '&inlineId=id_message_display_frame&modal=true', '');
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2_modal";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close_modal";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close_modal";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
      else
      {
        scMsgDefClose = "close";
        $("#id_message_display_frame").css('top', (0 < iTop ? iTop + 'px' : ''));
        $("#id_message_display_frame").css('left', (0 < iLeft ? iLeft + 'px' : ''));
        document.getElementById("id_message_display_frame").style.display = "";
        if (0 == iTop && 0 == iLeft) {
          scCenterElement(document.getElementById("id_message_display_frame"));
        }
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
    }
  } // _scAjaxShowMessage

  function _scAjaxMessageBtnClose() {
    switch (scMsgDefClose) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function _scAjaxMessageBtnClick() {
    switch (scMsgDefClick) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
      case "redir1":
        document.form_ajax_redir_1.submit();
        break;
      case "redir2":
        document.form_ajax_redir_2.submit();
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "redir2_modal":
        document.form_ajax_redir_2.submit();
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function scAjaxHasError()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "ERROR" == oResp["result"];
  } // scAjaxHasError

  function scAjaxIsOk()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "OK" == oResp["result"] || "SET" == oResp["result"];
  } // scAjaxIsOk

  function scAjaxIsSet()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "SET" == oResp["result"];
  } // scAjaxIsSet

  function scAjaxCalendarReload()
  {
    if (oResp["calendarReload"] && "OK" == oResp["calendarReload"])
    {
      self.parent.calendar_reload();
      self.parent.tb_remove();
    }
  } // scCalendarReload

  function scAjaxUpdateErrors(sType)
  {
    ajax_error_geral = "";
    oFieldErrors     = {};
    if (oResp["errList"])
    {
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if ("geral_form_public_pessoa_fisica_mob" == sTestField)
        {
          if (ajax_error_geral != '') { ajax_error_geral += '<br>';}
          ajax_error_geral += scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
        else
        {
          if (scFocusFirstErrorField && '' == scFocusFirstErrorName)
          {
            scFocusFirstErrorName = sTestField;
          }
          if (oResp["errList"][iFieldErrors]["numLinha"])
          {
            sTestField += oResp["errList"][iFieldErrors]["numLinha"];
          }
          if (!oFieldErrors[sTestField])
          {
            oFieldErrors[sTestField] = new Array();
          }
          oFieldErrors[sTestField][oFieldErrors[sTestField].length] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
      }
    }
    for (iUpdateErrors = 0; iUpdateErrors < ajax_field_list.length; iUpdateErrors++)
    {
      sTestField = ajax_field_list[iUpdateErrors];
      if (oFieldErrors[sTestField])
      {
        ajax_error_list[sTestField][sType] = oFieldErrors[sTestField];
      }
    }
  } // scAjaxUpdateErrors

  function scAjaxUpdateFieldErrors(sField, sType)
  {
    aFieldErrors = new Array();
    if (oResp["errList"])
    {
      iErrorPos  = 0;
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if (oResp["errList"][iFieldErrors]["numLinha"])
        {
          sTestField += oResp["errList"][iFieldErrors]["numLinha"];
        }
        if (sField == sTestField)
        {
          aFieldErrors[iErrorPos] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
          iErrorPos++;
        }
      }
    }
        if (ajax_error_list[sField])
        {
        ajax_error_list[sField][sType] = aFieldErrors;
        }
  } // scAjaxUpdateFieldErrors

  function scAjaxListErrors(bLabel)
  {
    bFirst        = false;
    sAppErrorText = "";
    if ("" != ajax_error_geral)
    {
      bFirst         = true;
      sAppErrorText += ajax_error_geral;
    }
    for (iFieldList = 0; iFieldList < ajax_field_list.length; iFieldList++)
    {
      sFieldError = scAjaxListFieldErrors(ajax_field_list[iFieldList], bLabel);
      if ("" != sFieldError)
      {
        if (bFirst)
        {
          bFirst         = false
          sAppErrorText += "<hr size=\"1\" width=\"80%\" />";
        }
        sAppErrorText += sFieldError;
      }
    }
    return sAppErrorText;
  } // scAjaxListErrors

  function scAjaxListFieldErrors(sField, bLabel)
  {
    sErrorText = "";
    for (iErrorType = 0; iErrorType < ajax_error_type.length; iErrorType++)
    {
      if (ajax_error_list[sField])
      {
        for (iListErrors = 0; iListErrors < ajax_error_list[sField][ajax_error_type[iErrorType]].length; iListErrors++)
        {
          if (bLabel)
          {
            sErrorText += ajax_error_list[sField]["label"] + ": ";
          }
          sErrorText += ajax_error_list[sField][ajax_error_type[iErrorType]][iListErrors] + "<br />";
        }
      }
    }
    return sErrorText;
  } // scAjaxListFieldErrors

  function scAjaxSetFields()
  {
    if (!oResp["fldList"])
    {
      return true;
    }
    for (iSetFields = 0; iSetFields < oResp["fldList"].length; iSetFields++)
    {
      var sFieldName = oResp["fldList"][iSetFields]["fldName"];
      var sFieldType = oResp["fldList"][iSetFields]["fldType"];
      if ("selectdd" == sFieldType)
      {
        var bSelectDD = true;
        sFieldType = "select";
      }
      else
      {
        var bSelectDD = false;
      }
      if (oResp["fldList"][iSetFields]["valList"])
      {
        var oFieldValues = oResp["fldList"][iSetFields]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (oResp["fldList"][iSetFields]["optList"])
      {
        var oFieldOptions = oResp["fldList"][iSetFields]["optList"];
      }
      else
      {
        var oFieldOptions = null;
      }
/*
      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)) &&
          oFieldValues[0]['value'])
      {
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = oFieldValues[0]['value'];
      }
*/
      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)))
      {
          sLabel_auto_Comp = (oFieldValues[0]['value']) ? oFieldValues[0]['value'] : "";
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = sLabel_auto_Comp;
      }


      if (oResp["fldList"][iSetFields]["colNum"])
      {
        var iColNum = oResp["fldList"][iSetFields]["colNum"];
      }
      else
      {
        var iColNum = 1;
      }
      if (oResp["fldList"][iSetFields]["row"])
      {
        var iRow = oResp["fldList"][iSetFields]["row"];
      }
      else
      {
        var iRow = 1;
      }
      if (oResp["fldList"][iSetFields]["htmComp"])
      {
        var sHtmComp = oResp["fldList"][iSetFields]["htmComp"];
        sHtmComp     = sHtmComp.replace(/__AD__/gi, '"');
        sHtmComp     = sHtmComp.replace(/__AS__/gi, "'");
      }
      else
      {
        var sHtmComp = null;
      }
      if (oResp["fldList"][iSetFields]["imgFile"])
      {
        var sImgFile = oResp["fldList"][iSetFields]["imgFile"];
      }
      else
      {
        var sImgFile = "";
      }
      if (oResp["fldList"][iSetFields]["imgOrig"])
      {
        var sImgOrig = oResp["fldList"][iSetFields]["imgOrig"];
      }
      else
      {
        var sImgOrig = "";
      }
      if (oResp["fldList"][iSetFields]["keepImg"])
      {
        var sKeepImg = oResp["fldList"][iSetFields]["keepImg"];
      }
      else
      {
        var sKeepImg = "N";
      }
      if (oResp["fldList"][iSetFields]["hideName"])
      {
        var sHideName = oResp["fldList"][iSetFields]["hideName"];
      }
      else
      {
        var sHideName = "N";
      }
      if (oResp["fldList"][iSetFields]["imgLink"])
      {
        var sImgLink = oResp["fldList"][iSetFields]["imgLink"];
      }
      else
      {
        var sImgLink = null;
      }
      if (oResp["fldList"][iSetFields]["docLink"])
      {
        var sDocLink = oResp["fldList"][iSetFields]["docLink"];
      }
      else
      {
        var sDocLink = "";
      }
      if (oResp["fldList"][iSetFields]["docIcon"])
      {
        var sDocIcon = oResp["fldList"][iSetFields]["docIcon"];
      }
      else
      {
        var sDocIcon = "";
      }
      if (oResp["fldList"][iSetFields]["optComp"])
      {
        var sOptComp = oResp["fldList"][iSetFields]["optComp"];
      }
      else
      {
        var sOptComp = "";
      }
      if (oResp["fldList"][iSetFields]["optClass"])
      {
        var sOptClass = oResp["fldList"][iSetFields]["optClass"];
      }
      else
      {
        var sOptClass = "";
      }
      if (oResp["fldList"][iSetFields]["optMulti"])
      {
        var sOptMulti = oResp["fldList"][iSetFields]["optMulti"];
      }
      else
      {
        var sOptMulti = "";
      }
      if (oResp["fldList"][iSetFields]["imgHtml"])
      {
        var sImgHtml = oResp["fldList"][iSetFields]["imgHtml"];
      }
      else
      {
        var sImgHtml = "";
      }
      if (oResp["fldList"][iSetFields]["mulHtml"])
      {
        var sMULHtml = oResp["fldList"][iSetFields]["mulHtml"];
      }
      else
      {
        var sMULHtml = "";
      }
      if (oResp["fldList"][iSetFields]["updInnerHtml"])
      {
        var sInnerHtml = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["updInnerHtml"]);
      }
      else
      {
        var sInnerHtml = null;
      }
      if (oResp["fldList"][iSetFields]["lookupCons"])
      {
        var sLookupCons = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["lookupCons"]);
      }
      else
      {
        var sLookupCons = "";
      }
      if (oResp["clearUpload"])
      {
        var sClearUpload = scAjaxSpecCharParser(oResp["clearUpload"]);
      }
      else
      {
        var sClearUpload = "N";
      }
      if ("checkbox" == sFieldType)
      {
        scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti);
      }
      else if ("duplosel" == sFieldType)
      {
        scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions);
      }
      else if ("imagem" == sFieldType)
      {
        scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName);
      }
      else if ("documento" == sFieldType)
      {
        scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload);
      }
      else if ("label" == sFieldType)
      {
        scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons);
      }
      else if ("radio" == sFieldType)
      {
        scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp);
      }
      else if ("select" == sFieldType)
      {
        scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, iRow);
      }
      else if ("text" == sFieldType)
      {
        scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons);
      }
      else if ("editor_html" == sFieldType)
      {
        scAjaxSetFieldEditorHtml(sFieldName, oFieldValues);
      }
      else if ("imagehtml" == sFieldType)
      {
        scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml);
      }
      else if ("innerhtml" == sFieldType)
      {
        scAjaxSetFieldInnerHtml(sFieldName, oFieldValues);
      }
      else if ("multi_upload" == sFieldType)
      {
        scAjaxSetFieldMultiUpload(sFieldName, sMULHtml);
      }
      scAjaxUpdateHeaderFooter(sFieldName, oFieldValues);
    }
  } // scAjaxSetFields

  function scAjaxUpdateHeaderFooter(sFieldName, oFieldValues)
  {
    if (self.updateHeaderFooter)
    {
      if (null == oFieldValues)
      {
        sNewValue = '';
      }
      else if (oFieldValues[0]["label"])
      {
        sNewValue = oFieldValues[0]["label"];
      }
      else
      {
        sNewValue = oFieldValues[0]["value"];
      }
      updateHeaderFooter(sFieldName, scAjaxSpecCharParser(sNewValue));
    }
  } // scAjaxUpdateHeaderFooter

  function scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons)
  {
    if (document.F1.elements[sFieldName])
    {
        var Temp_text = scAjaxReturnBreakLine(scAjaxSpecCharParser(scAjaxProtectBreakLine(oFieldValues[0]['value'])));
        eval ("document.F1." + sFieldName + ".value = Temp_text");
    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    if (oFieldValues[0]['label'])
    {
      scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues);
    }
    else
    {
      oFieldValues[0]['value'] = scAjaxBreakLine(oFieldValues[0]['value']);
      scAjaxSetReadonlyValue(sFieldName, oFieldValues[0]['value']);
    }
  } // scAjaxSetFieldText

  function scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, iRow)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if (bSelectDD)
    {
        $("#id_sc_field_" + sFieldName).dropdownchecklist("destroy");
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      scAjaxSetFieldText(sFieldNameHtml, oFieldValues);
      return;
    }

    if (null != oFieldOptions)
    {
      $("#id_sc_field_" + sFieldName).children().remove()
      if ("<select" != oFieldOptions.substr(0, 7))
      {
        var $oField = $("#id_sc_field_" + sFieldName);
        if (0 < $oField.length)
        {
          $oField.html(oFieldOptions);
        }
        else
        {
          document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
        }
      }
      else
      {
        document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
      }
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    var oFormField = $("#id_sc_field_" + sFieldName);
    for (iFieldSelect = 0; iFieldSelect < oFormField[0].length; iFieldSelect++)
    {
      if (scAjaxInArray(oFormField[0].options[iFieldSelect].value, aValues))
      {
        oFormField[0].options[iFieldSelect].selected = true;
      }
      else
      {
        oFormField[0].options[iFieldSelect].selected = false;
      }
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
    if (bSelectDD)
    {
        scJQDDCheckBoxAdd(iRow);
    }
  } // scAjaxSetFieldSelect

  function scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions)
  {
    var sFieldNameOrig = sFieldName + "_orig";
    var sFieldNameDest = sFieldName + "_dest";
    var oFormFieldOrig = document.F1.elements[sFieldNameOrig];
    var oFormFieldDest = document.F1.elements[sFieldNameDest];

    if (null != oFieldOptions)
    {
      scAjaxClearSelect(sFieldNameOrig);
      for (iFieldSelect = 0; iFieldSelect < oFieldOptions.length; iFieldSelect++)
      {
        oFormFieldOrig.options[iFieldSelect] = new Option(scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["label"]), scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["value"]));
      }
    }
    while (oFormFieldDest.length > 0)
    {
      oFormFieldDest.options[0] = null;
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        sNewOptionLabel = oFieldValues[iFieldSelect]["label"] ? scAjaxSpecCharParser(oFieldValues[iFieldSelect]["label"]) : scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        sNewOptionValue = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        if (sNewOptionValue.substr(0, 8) == "@NMorder")
        {
           sNewOptionValue                      = sNewOptionValue.substr(8);
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
           sNewOptionValue                      = sNewOptionValue.substr(1);
           aValues[iFieldSelect]                = sNewOptionValue;
        }
        else
        {
           aValues[iFieldSelect]                = sNewOptionValue;
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
        }
      }
    }
    for (iFieldSelect = 0; iFieldSelect < oFormFieldOrig.length; iFieldSelect++)
    {
      oFormFieldOrig.options[iFieldSelect].selected = false;
      if (scAjaxInArray(oFormFieldOrig.options[iFieldSelect].value, aValues))
      {
        oFormFieldOrig.options[iFieldSelect].disabled    = true;
        oFormFieldOrig.options[iFieldSelect].style.color = "#A0A0A0";
      }
      else
      {
        oFormFieldOrig.options[iFieldSelect].disabled = false;
      }
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldDuplosel

  function scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti)
  {
    if (document.getElementById("idAjaxCheckbox_" + sFieldName) && null != sInnerHtml)
    {
      document.getElementById("idAjaxCheckbox_" + sFieldName).innerHTML = sInnerHtml;
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearCheckbox(sFieldName);
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues);
      return;
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearCheckbox(sFieldName); */
      scAjaxRecreateOptions("Checkbox", "checkbox", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti);
    }
    else
    {
      scAjaxSetCheckboxOptions(sFieldName, oFieldValues);
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldCheckbox

  function scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp)
  {
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues);
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearRadio(sFieldName);
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearRadio(sFieldName); */
      scAjaxRecreateOptions("Radio", "radio", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, "", "");
    }
    else
    {
      scAjaxSetRadioOptions(sFieldName, oFieldValues);
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldRadio

  function scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons)
  {
    sFieldValue = oFieldValues[0]["value"];
    sFieldLabel = oFieldValues[0]["value"];
    sFieldLabel = scAjaxBreakLine(sFieldLabel);
    if (null != oFieldOptions)
    {
      for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
      {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        if (sFieldValue == sOptText)
        {
          sFieldLabel = sOptValue;
        }
      }
    }
    if (document.getElementById("id_ajax_label_" + sFieldName))
    {
      document.getElementById("id_ajax_label_" + sFieldName).innerHTML = scAjaxSpecCharParser(sFieldLabel);
    }
    if (document.F1.elements[sFieldName])
    {
//      document.F1.elements[sFieldName].value = scAjaxSpecCharParser(sFieldValue);
        Temp_text = scAjaxProtectBreakLine(sFieldValue);
        Temp_text = scAjaxSpecCharParser(Temp_text);
        document.F1.elements[sFieldName].value = scAjaxReturnBreakLine(Temp_text);

    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(sFieldLabel));
  } // scAjaxSetFieldLabel

  function scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if ("N" == sKeepImg && document.getElementById("id_ajax_img_"  + sFieldName))
    {
      document.getElementById("id_ajax_img_"  + sFieldName).src           = scAjaxSpecCharParser(sImgFile);
      document.getElementById("id_ajax_img_"  + sFieldName).style.display = ("" == sImgFile) ? "none" : "";
    }
    if (document.getElementById("id_ajax_link_" + sFieldName) && null != sImgLink)
    {
      document.getElementById("id_ajax_link_" + sFieldName).innerHTML = oFieldValues[0]["value"];
      document.getElementById("id_ajax_link_" + sFieldName).href      = scAjaxSpecCharParser(sImgLink);
    }
    if (document.getElementById("chk_ajax_img_" + sFieldName))
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"]) ? "none" : "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("N" == sKeepImg && document.getElementById("txt_ajax_img_" + sFieldName))
    {
      document.getElementById("txt_ajax_img_" + sFieldName).innerHTML     = oFieldValues[0]["value"];
      document.getElementById("txt_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"] || "S" == sHideName) ? "none" : "";
    }
    if ("" != sImgOrig)
    {
      eval("if (var_ajax_img_" + sFieldName + ") var_ajax_img_" + sFieldName + " = '" + sImgOrig + "';");
      if (document.F1.elements["temp_out1_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgFile;
        document.F1.elements["temp_out1_" + sFieldName].value = sImgOrig;
      }
      else if (document.F1.elements["temp_out_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgOrig;
      }
    }
    if ("" != oFieldValues[0]["value"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = oFieldValues[0]["value"];
    }
    else if (oResp && oResp["ajaxRequest"] && "navigate_form" == oResp["ajaxRequest"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = "";
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldImage

  function scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    document.getElementById("id_ajax_doc_"  + sFieldName).innerHTML = scAjaxSpecCharParser(sDocLink);
    if (document.getElementById("id_ajax_doc_icon_"  + sFieldName))
    {
      document.getElementById("id_ajax_doc_icon_"  + sFieldName).src = scAjaxSpecCharParser(sDocIcon);
    }
    if ("" == oFieldValues[0]["value"])
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "none";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "none";
    }
    else
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("S" == sClearUpload && document.F1.elements[sFieldName + "_ul_name"])
    {
      document.F1.elements[sFieldName + "_ul_name"].value = "";
    }
    if ("" != sDocLink)
    {
      scAjaxSetReadonlyValue(sFieldName, sDocLink);
    }
    else
    {
      scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
    }
  } // scAjaxSetFieldDocument

  function scAjaxSetFieldInnerHtml(sFieldName, oFieldValues)
  {
    if (document.getElementById(sFieldName))
    {
      document.getElementById(sFieldName).innerHTML = scAjaxSpecCharParser(oFieldValues[0]["value"]);
    }
  } // scAjaxSetFieldInnerHtml

  function scAjaxSetFieldMultiUpload(sFieldName, sMULHtml)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    $("#id_sc_loaded_" + sFieldName).html(scAjaxSpecCharParser(sMULHtml));
  } // scAjaxSetFieldMultiUpload

  function scAjaxExecFieldEditorHtml(strOption, bolUI, oField)
  {
	  	if(tinymce.majorVersion > 3)
		{
			if(strOption == 'mceAddControl')
			{
				tinymce.execCommand('mceAddEditor', bolUI, oField);
			}else
			if(strOption == 'mceRemoveControl')
			{
				tinymce.execCommand('mceRemoveEditor', bolUI, oField);
			}
		}
		else
		{
			tinyMCE.execCommand(strOption, bolUI, oField);
		}
  }

  function scAjaxSetFieldEditorHtml(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
	if(tinymce.majorVersion > 3)
	{
		var oFormField = tinyMCE.get(sFieldName);
	}
	else
	{
		var oFormField = tinyMCE.getInstanceById(sFieldName);
	}
    oFormField.setContent(scAjaxSpecCharParser(oFieldValues[0]["value"]));
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml)
  {
    if (document.getElementById("id_imghtml_" + sFieldName))
    {
      document.getElementById("id_imghtml_" + sFieldName).innerHTML = scAjaxSpecCharParser(sImgHtml);
    }
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetCheckboxOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return;
    }
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheckbox = 0; iFieldCheckbox < oFormField.length; iFieldCheckbox++)
        {
          if (scAjaxInArray(oFormField[iFieldCheckbox].value, aValues))
          {
            oFormField[iFieldCheckbox].checked = true;
          }
          else
          {
            oFormField[iFieldCheckbox].checked = false;
          }
        }
      }
      else
      {
        if (scAjaxInArray(oFormField.value, aValues))
        {
          oFormField.checked = true;
        }
        else
        {
          oFormField.checked = false;
        }
      }
    }
    else if (document.F1.elements[sFieldName + "[0]"])
    {
      for (iFieldCheckbox = 0; iFieldCheckbox < document.F1.elements.length; iFieldCheckbox++)
      {
        oFormElement = document.F1.elements[iFieldCheckbox];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && scAjaxInArray(oFormElement.value, aValues))
        {
          oFormElement.checked = true;
        }
        else if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1))
        {
          oFormElement.checked = false;
        }
      }
    }
    else
    {
      oFormElement = document.F1.elements[sFieldName];
      if (scAjaxInArray(oFormElement.value, aValues))
      {
        oFormElement.checked = true;
      }
      else
      {
        oFormElement.checked = false;
      }
    }
  } // scAjaxSetCheckboxOptions

  function scAjaxSetRadioOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
    var oFormField = document.F1.elements[sFieldName];
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
    {
      if (scAjaxInArray(oFormField[iFieldRadio].value, aValues))
      {
        oFormField[iFieldRadio].checked = true;
      }
    }
  } // scAjaxSetRadioOptions

  function scAjaxSetReadonlyValue(sFieldName, sFieldValue)
  {
    if (document.getElementById("id_read_on_" + sFieldName))
    {
      document.getElementById("id_read_on_" + sFieldName).innerHTML = sFieldValue;
    }
  } // scAjaxSetReadonlyValue

  function scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, sDelim)
  {
    if (null == oFieldValues)
    {
      return;
    }
    if (null == sDelim)
    {
      sDelim = " ";
    }
    sReadLabel = "";
    for (iReadArray = 0; iReadArray < oFieldValues.length; iReadArray++)
    {
      if (oFieldValues[iReadArray]["label"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["label"];
      }
      else if (oFieldValues[iReadArray]["value"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["value"];
      }
    }
    scAjaxSetReadonlyValue(sFieldName, sReadLabel);
  } // scAjaxSetReadonlyArrayValue

  function scAjaxGetFieldValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        if (1 == oFieldValues.length)
        {
          sValue = scAjaxSpecCharParser(oFieldValues[0]["value"]);
        }
        else
        {
          sValue = new Array();
          for (jFieldValue = 0; jFieldValue < oFieldValues.length; jFieldValue++)
          {
            sValue[jFieldValue] = scAjaxSpecCharParser(oFieldValues[jFieldValue]["value"]);
          }
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldValue

  function scAjaxGetKeyValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iKeyValue = 0; iKeyValue < oResp["fldList"].length; iKeyValue++)
    {
      var sFieldName = oResp["fldList"][iKeyValue]["fldName"];
      if (sFieldGet == sFieldName)
      {
        if (oResp["fldList"][iKeyValue]["keyVal"])
        {
          return scAjaxSpecCharParser(oResp["fldList"][iKeyValue]["keyVal"]);
        }
        else
        {
          return scAjaxGetFieldValue(sFieldGet);
        }
      }
    }
    return sValue;
  } // scAjaxGetKeyValue

  function scAjaxGetLineNumber()
  {
    sLineNumber = "";
    if (oResp["errList"])
    {
      for (iLineNumber = 0; iLineNumber < oResp["errList"].length; iLineNumber++)
      {
        if (oResp["errList"][iLineNumber]["numLinha"])
        {
          sLineNumber = oResp["errList"][iLineNumber]["numLinha"];
        }
      }
      return sLineNumber;
    }
    if (oResp["fldList"])
    {
      return oResp["fldList"][0]["numLinha"];
    }
    if (oResp["msgDisplay"])
    {
      return oResp["msgDisplay"]["numLinha"];
    }
    return sLineNumber;
  } // scAjaxGetLineNumber

  function scAjaxFieldExists(sFieldGet)
  {
    bExists = false;
    if (!oResp["fldList"])
    {
      return bExists;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        bExists = true;
      }
    }
    return bExists;
  } // scAjaxFieldExists

  function scAjaxGetFieldText(sFieldName)
  {
    $oHidden = $("input[name=" + sFieldName + "]");
    if ($oHidden.length)
    {
      for (var i = 0; i < $oHidden.length; i++)
      {
        if ("hidden" == $oHidden[i].type && $oHidden[i].form && $oHidden[i].form.name && "F1" == $oHidden[i].form.name)
        {
          return scAjaxSpecCharProtect($oHidden[i].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    $oField = $("#id_sc_field_" + sFieldName);
    if ($oField.length && "select" != $oField[0].type.substr(0, 6))
    {
      return scAjaxSpecCharProtect($oField.val());//.replace(/[+]/g, "__NM_PLUS__");
    }
    else if (document.F1.elements[sFieldName])
    {
      return scAjaxSpecCharProtect(document.F1.elements[sFieldName].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return '';
    }
  } // scAjaxGetFieldText

  function scAjaxGetFieldHidden(sFieldName)
  {
    for( i= 0; i < document.F1.elements.length; i++)
    {
       if (document.F1.elements[i].name == sFieldName)
       {
          return scAjaxSpecCharProtect(document.F1.elements[i].value);//.replace(/[+]/g, "__NM_PLUS__");
       }
    }
//    return document.F1.elements[sFieldName].value.replace(/[+]/g, "__NM_PLUS__");
  } // scAjaxGetFieldHidden

  function scAjaxGetFieldSelect(sFieldName)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return "";
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var iSelected  = oFormField.selectedIndex;
    if (-1 < iSelected)
    {
      return scAjaxSpecCharProtect(oFormField.options[iSelected].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return "";
    }
  } // scAjaxGetFieldSelect

  function scAjaxGetFieldSelectMult(sFieldName, sFieldDelim)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var sFieldVals = "";
    for (iFieldSelect = 0; iFieldSelect < oFormField.length; iFieldSelect++)
    {
      if (oFormField[iFieldSelect].selected)
      {
        if ("" != sFieldVals)
        {
          sFieldVals += sFieldDelim;
        }
        sFieldVals += scAjaxSpecCharProtect(oFormField[iFieldSelect].value);//.replace(/[+]/g, "__NM_PLUS__");
      }
    }
    return sFieldVals;
  } // scAjaxGetFieldSelectMult

  function scAjaxGetFieldCheckbox(sFieldName, sDelim)
  {
    var aValues = new Array();
    var sValue  = "";
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return sValue;
    }
    if (document.F1.elements[sFieldName + "[]"] && "hidden" == document.F1.elements[sFieldName + "[]"].type)
    {
      return scAjaxGetFieldHidden(sFieldName + "[]");
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheck = 0; iFieldCheck < oFormField.length; iFieldCheck++)
        {
          if (oFormField[iFieldCheck].checked)
          {
            aValues[aValues.length] = oFormField[iFieldCheck].value;
          }
        }
      }
      else
      {
        if (oFormField.checked)
        {
          aValues[aValues.length] = oFormField.value;
        }
      }
    }
    else
    {
      for (iFieldCheck = 0; iFieldCheck < document.F1.elements.length; iFieldCheck++)
      {
        oFormElement = document.F1.elements[iFieldCheck];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
        else if (sFieldName == oFormElement.name && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
      }
    }
    for (iFieldCheck = 0; iFieldCheck < aValues.length; iFieldCheck++)
    {
      sValue += scAjaxSpecCharProtect(aValues[iFieldCheck]);//.replace(/[+]/g, "__NM_PLUS__");
      if (iFieldCheck + 1 != aValues.length)
      {
        sValue += sDelim;
      }
    }
    return sValue;
  } // scAjaxGetFieldCheckbox

  function scAjaxGetFieldRadio(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }
    var oFormField = document.F1.elements[sFieldName];
    if (!oFormField.length)
    {
        var sc_cmp_radio = eval("document.F1." + sFieldName);
        if (sc_cmp_radio.checked)
        {
           sValue = scAjaxSpecCharProtect(sc_cmp_radio.value);//.replace(/[+]/g, "__NM_PLUS__");
        }
    }
    else
    {
      for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
      {
        if (oFormField[iFieldRadio].checked)
        {
          sValue = scAjaxSpecCharProtect(oFormField[iFieldRadio].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldRadio

  function scAjaxGetFieldEditorHtml(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }

        if(tinymce.majorVersion > 3)
        {
			var oFormField = tinyMCE.get(sFieldName);
        }
        else
        {
			var oFormField = tinyMCE.getInstanceById(sFieldName);
        }
    return scAjaxSpecCharParser(scAjaxSpecCharProtect(oFormField.getContent()));//.replace(/[+]/g, "__NM_PLUS__"));
  } // scAjaxGetFieldEditorHtml

  function scAjaxDoNothing(e)
  {
  } // scAjaxDoNothing

  function scAjaxInArray(mVal, aList)
  {
    for (iInArray = 0; iInArray < aList.length; iInArray++)
    {
      if (aList[iInArray] == mVal)
      {
        return true;
      }
    }
    return false;
  } // scAjaxInArray

  function scAjaxSpecCharParser(sParseString)
  {
    var ta = document.createElement("textarea");
    ta.innerHTML = sParseString.replace(/</g, "&lt;").replace(/>/g, "&gt;");
    return ta.value;
  } // scAjaxSpecCharParser

  function scAjaxSpecCharProtect(sOriginal)
  {
        var sProtected;
        sProtected = sOriginal.replace(/[+]/g, "__NM_PLUS__");
        sProtected = sProtected.replace(/[%]/g, "__NM_PERC__");
        return sProtected;
  } // scAjaxSpecCharProtect

  function scAjaxRecreateOptions(sFieldType, sHtmlType, sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti)
  {
    var sSuffix  = ("checkbox" == sHtmlType) ? "[]" : "";
    var sDivName = "idAjax" + sFieldType + "_" + sFieldName;
    var sDivText = "";
    var iCntLine = 0;
    var aValues  = new Array();
    var sClass;
    if (null != oFieldValues)
    {
      for (iRecreate = 0; iRecreate < oFieldValues.length; iRecreate++)
      {
        aValues[iRecreate] = scAjaxSpecCharParser(oFieldValues[iRecreate]["value"]);
      }
    }
    sDivText += "<table border=0>";
    for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
    {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        if (0 == iCntLine)
        {
            sDivText += "<tr>";
        }
        iCntLine++;
        if ("" != sOptClass)
        {
            sClass = " class=\"" + sOptClass;
            if ("" != sOptMulti)
            {
                sClass += " " + sOptClass + sOptMulti;
            }
            sClass += "\"";
        }
        if (sHtmComp == null)
        {
            sHtmComp = "";
        }
        sChecked  = (scAjaxInArray(sOptValue, aValues)) ? " checked" : "";
        sDivText += "<td class=\"scFormDataFontOdd\">";
        sDivText += "<input type=\"" + sHtmlType + "\" name=\"" + sFieldName + sSuffix + "\" value=\"" + sOptValue + "\"" + sChecked + " " + sHtmComp + " " + sOptComp + sClass + ">";
        sDivText += sOptText;
        sDivText += "</td>";
        if (iColNum == iCntLine)
        {
            sDivText += "</tr>";
            iCntLine  = 0;
        }
    }
    sDivText += "</table>";
    document.getElementById(sDivName).innerHTML = sDivText;
  } // scAjaxRecreateOptions

  function scAjaxProcOn(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.blockUI && !bForce)
      {
        $.blockUI({
          message: $("#id_div_process_block"),
          overlayCSS: { backgroundColor: sc_ajaxBg },
          css: {
            borderColor: sc_ajaxBordC,
            borderStyle: sc_ajaxBordS,
            borderWidth: sc_ajaxBordW
          }
        });
      }
      else
      {
        document.getElementById("id_div_process").style.display = "";
        document.getElementById("id_fatal_error").style.display = "none";
        if (null != scCenterElement)
        {
          scCenterElement(document.getElementById("id_div_process"));
        }
      }
    }
  } // scAjaxProcOn

  function scAjaxProcOff(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.unblockUI && !bForce)
      {
        $.unblockUI();
      }
      else
      {
        document.getElementById("id_div_process").style.display = "none";
      }
    }
  } // scAjaxProcOff

  function scAjaxSetMaster()
  {
    if (!oResp["masterValue"])
    {
      return;
    }
    if (!parent || !parent.scAjaxDetailValue)
    {
      return;
    }
    for (iMaster = 0; iMaster < oResp["masterValue"].length; iMaster++)
    {
      parent.scAjaxDetailValue(oResp["masterValue"][iMaster]["index"], oResp["masterValue"][iMaster]["value"]);
    }
  } // scAjaxSetMaster

  function scAjaxSetFocus()
  {
    if (!oResp["setFocus"] && '' == scFocusFirstErrorName)
    {
      return;
    }
    sFieldName = oResp["setFocus"];
    if (document.F1.elements[sFieldName])
    {
        scFocusField(sFieldName);
    }
    scAjaxFocusError();
  } // scAjaxSetFocus

  function scAjaxFocusError()
  {
    if ('' != scFocusFirstErrorName)
    {
      scFocusField(scFocusFirstErrorName);
      scFocusFirstErrorName = '';
    }
  } // scAjaxFocusError

  function scAjaxSetNavStatus(sBarPos)
  {
    if (!oResp["navStatus"])
    {
      return;
    }
    sNavRet = "S";
    sNavAva = "S";
    if (oResp["navStatus"]["ret"])
    {
      sNavRet = oResp["navStatus"]["ret"];
    }
    if (oResp["navStatus"]["ava"])
    {
      sNavAva = oResp["navStatus"]["ava"];
    }
    if ("S" != sNavRet && "N" != sNavRet)
    {
      sNavRet = "S";
    }
    if ("S" != sNavAva && "N" != sNavAva)
    {
      sNavAva = "S";
    }
    Nav_permite_ret = sNavRet;
    Nav_permite_ava = sNavAva;
    nav_atualiza(Nav_permite_ret, Nav_permite_ava, sBarPos);
  } // scAjaxSetNavStatus

  function scAjaxSetSummary()
  {
    if (!oResp["navSummary"])
    {
      return;
    }
    sreg_ini = oResp["navSummary"].reg_ini;
    sreg_qtd = oResp["navSummary"].reg_qtd;
    sreg_tot = oResp["navSummary"].reg_tot;
    summary_atualiza(sreg_ini, sreg_qtd, sreg_tot);
  } // scAjaxSetSummary

  function scAjaxSetNavpage()
  {
    navpage_atualiza(oResp["navPage"]);
  } // scAjaxSetNavpage


  function scAjaxRedir(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (!oResp["redirInfo"])
    {
      return;
    }
    sMetodo = oResp["redirInfo"]["metodo"];
    sAction = oResp["redirInfo"]["action"];
    if ("location" == sMetodo)
    {
      if ("parent.parent" == oResp["redirInfo"]["target"])
      {
        parent.parent.location = sAction;
      }
      else if ("parent" == oResp["redirInfo"]["target"])
      {
        parent.location = sAction;
      }
      else if ("_blank" == oResp["redirInfo"]["target"])
      {
        window.open(sAction, "_blank");
      }
      else
      {
        document.location = sAction;
      }
    }
    else if ("html" == sMetodo)
    {
        document.write(scAjaxSpecCharParser(oResp["redirInfo"]["action"]));
    }
    else
    {
      if (oResp["redirInfo"]["target"] == "modal")
      {
          tb_show('', sAction + '?script_case_init=' +  oResp["redirInfo"]["script_case_init"] + '&script_case_session=<?php echo session_id() ?>&nmgp_parms=' + oResp["redirInfo"]["nmgp_parms"] + '&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&TB_iframe=true&modal=true&height=' +  oResp["redirInfo"]["h_modal"] + '&width=' + oResp["redirInfo"]["w_modal"], '');
          return;
      }
      sFormRedir = (oResp["redirInfo"]["nmgp_outra_jan"]) ? "form_ajax_redir_1" : "form_ajax_redir_2";
      document.forms[sFormRedir].action           = sAction;
      document.forms[sFormRedir].target           = oResp["redirInfo"]["target"];
      document.forms[sFormRedir].nmgp_parms.value = oResp["redirInfo"]["nmgp_parms"];
      if ("form_ajax_redir_1" == sFormRedir)
      {
        document.forms[sFormRedir].nmgp_outra_jan.value = oResp["redirInfo"]["nmgp_outra_jan"];
      }
      else
      {
        document.forms[sFormRedir].nmgp_url_saida.value   = oResp["redirInfo"]["nmgp_url_saida"];
        document.forms[sFormRedir].script_case_init.value = oResp["redirInfo"]["script_case_init"];
      }
      document.forms[sFormRedir].submit();
    }
  } // scAjaxRedir

  function scAjaxSetDisplay(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    var aDispData = new Array();
    var aDispCont = {};
    if (bReset)
    {
      for (iDisplay = 0; iDisplay < ajax_block_list.length; iDisplay++)
      {
        aDispCont[ajax_block_list[iDisplay]] = aDispData.length;
        aDispData[aDispData.length] = new Array(ajax_block_id[ajax_block_list[iDisplay]], "on");
      }
      for (iDisplay = 0; iDisplay < ajax_field_list.length; iDisplay++)
      {
        if (ajax_field_id[ajax_field_list[iDisplay]])
        {
          aFieldIds = ajax_field_id[ajax_field_list[iDisplay]];
          for (iDisplay2 = 0; iDisplay2 < aFieldIds.length; iDisplay2++)
          {
            aDispCont[aFieldIds[iDisplay2]] = aDispData.length;
            aDispData[aDispData.length] = new Array(aFieldIds[iDisplay2], "on");
          }
        }
      }
    }
    if (oResp["blockDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["blockDisplay"].length; iDisplay++)
      {
        if (bReset)
        {
          aDispData[ aDispCont[ oResp["blockDisplay"][iDisplay][0] ] ][1] = oResp["blockDisplay"][iDisplay][1];
        }
        else
        {
          aDispData[aDispData.length] = new Array(ajax_block_id[ oResp["blockDisplay"][iDisplay][0] ], oResp["blockDisplay"][iDisplay][1]);
        }
      }
    }
    if (oResp["fieldDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["fieldDisplay"].length; iDisplay++)
      {
        for (iDisplay2 = 1; iDisplay2 < ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ].length; iDisplay2++)
        {
          aFieldIds = ajax_field_id[ ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ][iDisplay2] ];
          for (iDisplay3 = 0; iDisplay3 < aFieldIds.length; iDisplay3++)
          {
            if (bReset)
            {
              aDispData[ aDispCont[ aFieldIds[iDisplay3] ] ][1] = oResp["fieldDisplay"][iDisplay][1];
            }
            else
            {
              aDispData[aDispData.length] = new Array(aFieldIds[iDisplay3], oResp["fieldDisplay"][iDisplay][1]);
            }
          }
        }
      }
    }
    if (oResp["buttonDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["buttonDisplay"].length; iDisplay++)
      {
        var sBtnName2 = "";
        switch (oResp["buttonDisplay"][iDisplay][0])
        {
          case "first": var sBtnName = "sc_b_ini"; break;
          case "back": var sBtnName = "sc_b_ret"; break;
          case "forward": var sBtnName = "sc_b_avc"; break;
          case "last": var sBtnName = "sc_b_fim"; break;
          case "insert": var sBtnName = "sc_b_ins"; break;
          case "update": var sBtnName = "sc_b_upd"; break;
          case "delete": var sBtnName = "sc_b_del"; break;
          default: var sBtnName = "sc_b_" + oResp["buttonDisplay"][iDisplay][0]; sBtnName2 = "sc_" + oResp["buttonDisplay"][iDisplay][0]; break;
        }
        if ("sc_b_ini" == sBtnName || "sc_b_ret" == sBtnName || "sc_b_avc" == sBtnName || "sc_b_fim" == sBtnName)
        {
          scAjaxNavigateButtonDisplay(sBtnName, oResp["buttonDisplay"][iDisplay][1]);
        }
        else
        {
          aDispData[aDispData.length] = new Array(sBtnName, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName + "_t", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName + "_b", oResp["buttonDisplay"][iDisplay][1]);
        }
        if ("" != sBtnName2)
        {
          aDispData[aDispData.length] = new Array(sBtnName2, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_top", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_bot", oResp["buttonDisplay"][iDisplay][1]);
        }
      }
    }
    for (iDisplay = 0; iDisplay < aDispData.length; iDisplay++)
    {
      scAjaxElementDisplay(aDispData[iDisplay][0], aDispData[iDisplay][1]);
    }
  } // scAjaxSetDisplay

  function scAjaxNavigateButtonDisplay(sButton, sStatus)
  {
    sButton2 = sButton + "_off";

    if ("off" == sStatus)
    {
      sStatus2 = "off";
    }
    else
    {
      if ("sc_b_ini" == sButton || "sc_b_ret" == sButton)
      {
        if ("S" == Nav_permite_ret)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
      else
      {
        if ("S" == Nav_permite_ava)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
    }

    scAjaxElementDisplay(sButton        , sStatus);
    scAjaxElementDisplay(sButton + "_t" , sStatus);
    scAjaxElementDisplay(sButton + "_b" , sStatus);
    scAjaxElementDisplay(sButton2       , sStatus2);
    scAjaxElementDisplay(sButton2 + "_t", sStatus2);
    scAjaxElementDisplay(sButton2 + "_b", sStatus2);
  } // scAjaxNavigateButtonDisplay

  function scAjaxElementDisplay(sElement, sAction)
  {
    sStyle = ("off" == sAction) ? "none" : "";
    if (ajax_block_tab && ajax_block_tab[sElement] && "" != ajax_block_tab[sElement])
    {
      scAjaxElementDisplay(ajax_block_tab[sElement], sAction);
    }
    if (document.getElementById(sElement))
    {
      document.getElementById(sElement).style.display = sStyle;
      if (document.getElementById(sElement + "_dumb"))
      {
        document.getElementById(sElement + "_dumb").style.display = ("off" == sAction) ? "" : "none";
      }
    }
  } // scAjaxElementDisplay

  function scAjaxSetLabel(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iLabel = 0; iLabel < ajax_field_list.length; iLabel++)
      {
        if (ajax_field_list[iLabel] && ajax_error_list[ajax_field_list[iLabel]])
        {
          scAjaxFieldLabel(ajax_field_list[iLabel], ajax_error_list[ajax_field_list[iLabel]]["label"]);
        }
      }
    }
    if (oResp["fieldLabel"])
    {
      for (iLabel = 0; iLabel < oResp["fieldLabel"].length; iLabel++)
      {
        scAjaxFieldLabel(oResp["fieldLabel"][iLabel][0], scAjaxSpecCharParser(oResp["fieldLabel"][iLabel][1]));
      }
    }
  } // scAjaxSetLabel

  function scAjaxFieldLabel(sField, sLabel)
  {
    if (document.getElementById("id_label_" + sField) && document.getElementById("id_label_" + sField).innerHTML != sLabel)
    {
      document.getElementById("id_label_" + sField).innerHTML = sLabel;
    }
  } // scAjaxFieldLabel

  function scAjaxSetReadonly(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iRead = 0; iRead < ajax_field_list.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_list[iRead], ajax_read_only[ajax_field_list[iRead]]);
      }
      for (iRead = 0; iRead < ajax_field_Dt_Hr.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_Dt_Hr[iRead], ajax_read_only[ajax_field_Dt_Hr[iRead]]);
      }
    }
    if (oResp["readOnly"])
    {
      for (iRead = 0; iRead < oResp["readOnly"].length; iRead++)
      {
        if (ajax_read_only[ oResp["readOnly"][iRead][0] ])
        {
          scAjaxFieldRead(oResp["readOnly"][iRead][0], oResp["readOnly"][iRead][1]);
        }
        else if (oResp["rsSize"])
        {
          for (var i = 0; i <= oResp["rsSize"]; i++)
          {
            if (ajax_read_only[ oResp["readOnly"][iRead][0] + i ])
            {
              scAjaxFieldRead(oResp["readOnly"][iRead][0] + i, oResp["readOnly"][iRead][1]);
            }
          }
        }
      }
    }
  } // scAjaxSetReadonly

  function scAjaxFieldRead(sField, sStatus)
  {
    if ("on" == sStatus)
    {
      var sDisplayOff = "none";
      var sDisplayOn  = "";
    }
    else
    {
      var sDisplayOff = "";
      var sDisplayOn  = "none";
    }
    if (document.getElementById("id_read_off_" + sField))
    {
      document.getElementById("id_read_off_" + sField).style.display = sDisplayOff;
    }
    if (document.getElementById("id_read_on_" + sField))
    {
      document.getElementById("id_read_on_" + sField).style.display = sDisplayOn;
    }
  } // scAjaxFieldRead

  function scAjaxSetBtnVars()
  {
    if (oResp["btnVars"])
    {
      for (iBtn = 0; iBtn < oResp["btnVars"].length; iBtn++)
      {
        eval(oResp["btnVars"][iBtn][0] + " = '" + oResp["btnVars"][iBtn][1] + "';");
      }
    }
  } // scAjaxSetBtnVars

  function scAjaxClearText(sFormField)
  {
    document.F1.elements[sFormField].value = "";
  } // scAjaxClearText

  function scAjaxClearLabel(sFormField)
  {
    document.getElementById("id_ajax_label_" + sFormField).innerHTML = "";
  } // scAjaxClearLabel

  function scAjaxClearSelect(sFormField)
  {
    document.F1.elements[sFormField].length = 0;
  } // scAjaxClearSelect

  function scAjaxClearCheckbox(sFormField)
  {
    document.getElementById("idAjaxCheckbox_" + sFormField).innerHTML = "";
  } // scAjaxClearCheckbox

  function scAjaxClearRadio(sFormField)
  {
    document.getElementById("idAjaxRadio_" + sFormField).innerHTML = "";
  } // scAjaxClearRadio

  function scAjaxClearEditorHtml(sFormField)
  {
    if(tinymce.majorVersion > 3)
        {
                var oFormField = tinyMCE.get(sFieldName);
        }
        else
        {
                var oFormField = tinyMCE.getInstanceById(sFieldName);
        }
    oFormField.setContent("");
  } // scAjaxClearEditorHtml

  function scAjaxJavascript()
  {
    if (oResp["ajaxJavascript"])
    {
      var sJsFunc = "";
      for (var i = 0; i < oResp["ajaxJavascript"].length; i++)
      {
        sJsFunc = scAjaxSpecCharParser(oResp["ajaxJavascript"][i][0]);
        if ("" != sJsFunc)
        {
          var aParam = new Array();
          if (oResp["ajaxJavascript"][i][1] && 0 < oResp["ajaxJavascript"][i][1].length)
          {
            for (var j = 0; j < oResp["ajaxJavascript"][i][1].length; j++)
            {
              aParam.push("'" + oResp["ajaxJavascript"][i][1][j] + "'");
            }
          }
          eval("if (" + sJsFunc + ") { " + sJsFunc + "(" + aParam.join(", ") + ") }");
        }
      }
    }
  } // scAjaxJavascript

  function scAjaxAlert()
  {
    if (oResp["ajaxAlert"] && oResp["ajaxAlert"]["message"] && "" != oResp["ajaxAlert"]["message"])
    {
      alert(oResp["ajaxAlert"]["message"]);
    }
  } // scAjaxAlert

  function scAjaxMessage(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["ajaxMessage"] && oResp["ajaxMessage"]["message"] && "" != oResp["ajaxMessage"]["message"])
    {
      var sTitle    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["title"])        ? oResp["ajaxMessage"]["title"]               : scMsgDefTitle,
          bModal    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["modal"])        ? ("Y" == oResp["ajaxMessage"]["modal"])      : false,
          iTimeout  = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["timeout"])      ? parseInt(oResp["ajaxMessage"]["timeout"])   : 0,
          bButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button"])       ? ("Y" == oResp["ajaxMessage"]["button"])     : false,
          sButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button_label"]) ? oResp["ajaxMessage"]["button_label"]        : "Ok",
          iTop      = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["top"])          ? parseInt(oResp["ajaxMessage"]["top"])       : 0,
          iLeft     = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["left"])         ? parseInt(oResp["ajaxMessage"]["left"])      : 0,
          iWidth    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["width"])        ? parseInt(oResp["ajaxMessage"]["width"])     : 0,
          iHeight   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["height"])       ? parseInt(oResp["ajaxMessage"]["height"])    : 0,
          bClose    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["show_close"])   ? ("Y" == oResp["ajaxMessage"]["show_close"]) : true,
          bBodyIcon = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["body_icon"])    ? ("Y" == oResp["ajaxMessage"]["body_icon"])  : true,
          sRedir    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir"])        ? oResp["ajaxMessage"]["redir"]               : "",
          sTarget   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_target"]) ? oResp["ajaxMessage"]["redir_target"]        : "",
          sParam    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_par"])    ? oResp["ajaxMessage"]["redir_par"]           : "";
      _scAjaxShowMessage(sTitle, oResp["ajaxMessage"]["message"], bModal, iTimeout, bButton, sButton, iTop, iLeft, iWidth, iHeight, sRedir, sTarget, sParam, bClose, bBodyIcon);
    }
  } // scAjaxAlert

  function scAjaxResponse(sResp)
  {
    eval("var oResp = " + sResp);
    return oResp;
  } // scAjaxResponse

  function scAjaxBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      input += "";
      while (input.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input = input.replace(String.fromCharCode(10), '<br>');
      }
      return input;
  } // scAjaxBreakLine

  function scAjaxProtectBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      var input1 = input + "";
      while (input1.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input1 = input1.replace(String.fromCharCode(10), '#@NM#@');
      }
      return input1;
  } // scAjaxProtectBreakLine

  function scAjaxReturnBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      while (input.lastIndexOf('#@NM#@') > -1)
      {
         input = input.replace('#@NM#@', String.fromCharCode(10));
      }
      return input;
  } // scAjaxReturnBreakLine


  // ---------- Validate id_pessoa_fisica
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_pessoa_fisica()
  {
    var nomeCampo_id_pessoa_fisica = "id_pessoa_fisica";
    var var_id_pessoa_fisica = scAjaxGetFieldHidden(nomeCampo_id_pessoa_fisica);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_pessoa_fisica(var_id_pessoa_fisica, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_pessoa_fisica_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_pessoa_fisica

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_pessoa_fisica_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_pessoa_fisica";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_pessoa_fisica_cb

  // ---------- Validate cpf
  function do_ajax_form_public_pessoa_fisica_mob_validate_cpf()
  {
    var nomeCampo_cpf = "cpf";
    var var_cpf = scAjaxGetFieldText(nomeCampo_cpf);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_cpf(var_cpf, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_cpf_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cpf

  function do_ajax_form_public_pessoa_fisica_mob_validate_cpf_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cpf";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cpf_cb

  // ---------- Validate nome
  function do_ajax_form_public_pessoa_fisica_mob_validate_nome()
  {
    var nomeCampo_nome = "nome";
    var var_nome = scAjaxGetFieldText(nomeCampo_nome);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_nome(var_nome, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_nome_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_nome

  function do_ajax_form_public_pessoa_fisica_mob_validate_nome_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "nome";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_nome_cb

  // ---------- Validate sexo
  function do_ajax_form_public_pessoa_fisica_mob_validate_sexo()
  {
    var nomeCampo_sexo = "sexo";
    var var_sexo = scAjaxGetFieldSelect(nomeCampo_sexo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_sexo(var_sexo, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_sexo_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_sexo

  function do_ajax_form_public_pessoa_fisica_mob_validate_sexo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "sexo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_sexo_cb

  // ---------- Validate dt_nasc
  function do_ajax_form_public_pessoa_fisica_mob_validate_dt_nasc()
  {
    var nomeCampo_dt_nasc = "dt_nasc";
    var var_dt_nasc = scAjaxGetFieldText(nomeCampo_dt_nasc);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_dt_nasc(var_dt_nasc, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_dt_nasc_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_dt_nasc

  function do_ajax_form_public_pessoa_fisica_mob_validate_dt_nasc_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "dt_nasc";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_dt_nasc_cb

  // ---------- Validate nacionalidade
  function do_ajax_form_public_pessoa_fisica_mob_validate_nacionalidade()
  {
    var nomeCampo_nacionalidade = "nacionalidade";
    var var_nacionalidade = scAjaxGetFieldSelect(nomeCampo_nacionalidade);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_nacionalidade(var_nacionalidade, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_nacionalidade_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_nacionalidade

  function do_ajax_form_public_pessoa_fisica_mob_validate_nacionalidade_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "nacionalidade";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_nacionalidade_cb

  // ---------- Validate naturalidade
  function do_ajax_form_public_pessoa_fisica_mob_validate_naturalidade()
  {
    var nomeCampo_naturalidade = "naturalidade";
    var var_naturalidade = scAjaxGetFieldText(nomeCampo_naturalidade);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_naturalidade(var_naturalidade, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_naturalidade_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_naturalidade

  function do_ajax_form_public_pessoa_fisica_mob_validate_naturalidade_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "naturalidade";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_naturalidade_cb

  // ---------- Validate id_tipo_estado_civil
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_estado_civil()
  {
    var nomeCampo_id_tipo_estado_civil = "id_tipo_estado_civil";
    var var_id_tipo_estado_civil = scAjaxGetFieldSelect(nomeCampo_id_tipo_estado_civil);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_estado_civil(var_id_tipo_estado_civil, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_estado_civil_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_estado_civil

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_estado_civil_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_tipo_estado_civil";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_estado_civil_cb

  // ---------- Validate id_tipo_escolaridade
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_escolaridade()
  {
    var nomeCampo_id_tipo_escolaridade = "id_tipo_escolaridade";
    var var_id_tipo_escolaridade = scAjaxGetFieldSelect(nomeCampo_id_tipo_escolaridade);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_escolaridade(var_id_tipo_escolaridade, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_escolaridade_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_escolaridade

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_escolaridade_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_tipo_escolaridade";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_escolaridade_cb

  // ---------- Validate id_tipo_sanguineo
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_sanguineo()
  {
    var nomeCampo_id_tipo_sanguineo = "id_tipo_sanguineo";
    var var_id_tipo_sanguineo = scAjaxGetFieldSelect(nomeCampo_id_tipo_sanguineo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_sanguineo(var_id_tipo_sanguineo, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_sanguineo_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_sanguineo

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_sanguineo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_tipo_sanguineo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_sanguineo_cb

  // ---------- Validate profissao
  function do_ajax_form_public_pessoa_fisica_mob_validate_profissao()
  {
    var nomeCampo_profissao = "profissao";
    var var_profissao = scAjaxGetFieldText(nomeCampo_profissao);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_profissao(var_profissao, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_profissao_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_profissao

  function do_ajax_form_public_pessoa_fisica_mob_validate_profissao_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "profissao";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_profissao_cb

  // ---------- Validate aposentado
  function do_ajax_form_public_pessoa_fisica_mob_validate_aposentado()
  {
    var nomeCampo_aposentado = "aposentado";
    var var_aposentado = scAjaxGetFieldSelect(nomeCampo_aposentado);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_aposentado(var_aposentado, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_aposentado_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_aposentado

  function do_ajax_form_public_pessoa_fisica_mob_validate_aposentado_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "aposentado";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_aposentado_cb

  // ---------- Validate id_tipo_vinculo
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_vinculo()
  {
    var nomeCampo_id_tipo_vinculo = "id_tipo_vinculo";
    var var_id_tipo_vinculo = scAjaxGetFieldText(nomeCampo_id_tipo_vinculo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_vinculo(var_id_tipo_vinculo, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_vinculo_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_vinculo

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_vinculo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_tipo_vinculo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_tipo_vinculo_cb

  // ---------- Validate obs
  function do_ajax_form_public_pessoa_fisica_mob_validate_obs()
  {
    var nomeCampo_obs = "obs";
    var var_obs = scAjaxGetFieldText(nomeCampo_obs);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_obs(var_obs, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_obs_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_obs

  function do_ajax_form_public_pessoa_fisica_mob_validate_obs_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "obs";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_obs_cb

  // ---------- Validate id_ativo
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_ativo()
  {
    var nomeCampo_id_ativo = "id_ativo";
    var var_id_ativo = scAjaxGetFieldRadio(nomeCampo_id_ativo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_ativo(var_id_ativo, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_ativo_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_ativo

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_ativo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_ativo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_ativo_cb

  // ---------- Validate endereco
  function do_ajax_form_public_pessoa_fisica_mob_validate_endereco()
  {
    var nomeCampo_endereco = "endereco";
    var var_endereco = scAjaxGetFieldText(nomeCampo_endereco);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_endereco(var_endereco, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_endereco_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_endereco

  function do_ajax_form_public_pessoa_fisica_mob_validate_endereco_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "endereco";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_endereco_cb

  // ---------- Validate endereco_comp
  function do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp()
  {
    var nomeCampo_endereco_comp = "endereco_comp";
    var var_endereco_comp = scAjaxGetFieldText(nomeCampo_endereco_comp);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp(var_endereco_comp, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp

  function do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "endereco_comp";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cb

  // ---------- Validate bairro
  function do_ajax_form_public_pessoa_fisica_mob_validate_bairro()
  {
    var nomeCampo_bairro = "bairro";
    var var_bairro = scAjaxGetFieldText(nomeCampo_bairro);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_bairro(var_bairro, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_bairro_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_bairro

  function do_ajax_form_public_pessoa_fisica_mob_validate_bairro_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "bairro";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_bairro_cb

  // ---------- Validate id_municipio
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio()
  {
    var nomeCampo_id_municipio = "id_municipio";
    var var_id_municipio = scAjaxGetFieldSelect(nomeCampo_id_municipio);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_municipio(var_id_municipio, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_municipio";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cb

  // ---------- Validate id_uf
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_uf()
  {
    var nomeCampo_id_uf = "id_uf";
    var var_id_uf = scAjaxGetFieldSelect(nomeCampo_id_uf);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_uf(var_id_uf, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_uf

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_uf";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cb

  // ---------- Validate id_pais
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_pais()
  {
    var nomeCampo_id_pais = "id_pais";
    var var_id_pais = scAjaxGetFieldSelect(nomeCampo_id_pais);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_pais(var_id_pais, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_pais

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_pais";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cb

  // ---------- Validate cep
  function do_ajax_form_public_pessoa_fisica_mob_validate_cep()
  {
    var nomeCampo_cep = "cep";
    var var_cep = scAjaxGetFieldText(nomeCampo_cep);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_cep(var_cep, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_cep_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cep

  function do_ajax_form_public_pessoa_fisica_mob_validate_cep_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cep";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cep_cb

  // ---------- Validate endereco_cob
  function do_ajax_form_public_pessoa_fisica_mob_validate_endereco_cob()
  {
    var nomeCampo_endereco_cob = "endereco_cob";
    var var_endereco_cob = scAjaxGetFieldText(nomeCampo_endereco_cob);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_endereco_cob(var_endereco_cob, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_endereco_cob_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_endereco_cob

  function do_ajax_form_public_pessoa_fisica_mob_validate_endereco_cob_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "endereco_cob";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_endereco_cob_cb

  // ---------- Validate endereco_comp_cob
  function do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cob()
  {
    var nomeCampo_endereco_comp_cob = "endereco_comp_cob";
    var var_endereco_comp_cob = scAjaxGetFieldText(nomeCampo_endereco_comp_cob);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cob(var_endereco_comp_cob, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cob_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cob

  function do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cob_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "endereco_comp_cob";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_endereco_comp_cob_cb

  // ---------- Validate bairro_cob
  function do_ajax_form_public_pessoa_fisica_mob_validate_bairro_cob()
  {
    var nomeCampo_bairro_cob = "bairro_cob";
    var var_bairro_cob = scAjaxGetFieldText(nomeCampo_bairro_cob);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_bairro_cob(var_bairro_cob, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_bairro_cob_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_bairro_cob

  function do_ajax_form_public_pessoa_fisica_mob_validate_bairro_cob_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "bairro_cob";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_bairro_cob_cb

  // ---------- Validate id_municipio_cob
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cob()
  {
    var nomeCampo_id_municipio_cob = "id_municipio_cob";
    var var_id_municipio_cob = scAjaxGetFieldSelect(nomeCampo_id_municipio_cob);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cob(var_id_municipio_cob, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cob_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cob

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cob_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_municipio_cob";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_municipio_cob_cb

  // ---------- Validate id_uf_cob
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cob()
  {
    var nomeCampo_id_uf_cob = "id_uf_cob";
    var var_id_uf_cob = scAjaxGetFieldSelect(nomeCampo_id_uf_cob);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cob(var_id_uf_cob, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cob_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cob

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cob_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_uf_cob";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_uf_cob_cb

  // ---------- Validate id_pais_cob
  function do_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cob()
  {
    var nomeCampo_id_pais_cob = "id_pais_cob";
    var var_id_pais_cob = scAjaxGetFieldSelect(nomeCampo_id_pais_cob);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cob(var_id_pais_cob, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cob_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cob

  function do_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cob_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "id_pais_cob";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_id_pais_cob_cb

  // ---------- Validate cep_cob
  function do_ajax_form_public_pessoa_fisica_mob_validate_cep_cob()
  {
    var nomeCampo_cep_cob = "cep_cob";
    var var_cep_cob = scAjaxGetFieldText(nomeCampo_cep_cob);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_cep_cob(var_cep_cob, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_cep_cob_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cep_cob

  function do_ajax_form_public_pessoa_fisica_mob_validate_cep_cob_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cep_cob";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cep_cob_cb

  // ---------- Validate rg
  function do_ajax_form_public_pessoa_fisica_mob_validate_rg()
  {
    var nomeCampo_rg = "rg";
    var var_rg = scAjaxGetFieldText(nomeCampo_rg);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_rg(var_rg, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_rg_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_rg

  function do_ajax_form_public_pessoa_fisica_mob_validate_rg_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "rg";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_rg_cb

  // ---------- Validate rg_uf_emissor
  function do_ajax_form_public_pessoa_fisica_mob_validate_rg_uf_emissor()
  {
    var nomeCampo_rg_uf_emissor = "rg_uf_emissor";
    var var_rg_uf_emissor = scAjaxGetFieldSelect(nomeCampo_rg_uf_emissor);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_rg_uf_emissor(var_rg_uf_emissor, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_rg_uf_emissor_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_rg_uf_emissor

  function do_ajax_form_public_pessoa_fisica_mob_validate_rg_uf_emissor_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "rg_uf_emissor";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_rg_uf_emissor_cb

  // ---------- Validate rg_orgao_emissor
  function do_ajax_form_public_pessoa_fisica_mob_validate_rg_orgao_emissor()
  {
    var nomeCampo_rg_orgao_emissor = "rg_orgao_emissor";
    var var_rg_orgao_emissor = scAjaxGetFieldText(nomeCampo_rg_orgao_emissor);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_rg_orgao_emissor(var_rg_orgao_emissor, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_rg_orgao_emissor_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_rg_orgao_emissor

  function do_ajax_form_public_pessoa_fisica_mob_validate_rg_orgao_emissor_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "rg_orgao_emissor";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_rg_orgao_emissor_cb

  // ---------- Validate rg_dt_emissao
  function do_ajax_form_public_pessoa_fisica_mob_validate_rg_dt_emissao()
  {
    var nomeCampo_rg_dt_emissao = "rg_dt_emissao";
    var var_rg_dt_emissao = scAjaxGetFieldText(nomeCampo_rg_dt_emissao);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_rg_dt_emissao(var_rg_dt_emissao, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_rg_dt_emissao_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_rg_dt_emissao

  function do_ajax_form_public_pessoa_fisica_mob_validate_rg_dt_emissao_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "rg_dt_emissao";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_rg_dt_emissao_cb

  // ---------- Validate passaporte
  function do_ajax_form_public_pessoa_fisica_mob_validate_passaporte()
  {
    var nomeCampo_passaporte = "passaporte";
    var var_passaporte = scAjaxGetFieldText(nomeCampo_passaporte);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_passaporte(var_passaporte, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_passaporte

  function do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "passaporte";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_cb

  // ---------- Validate passaporte_pais_origem
  function do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_pais_origem()
  {
    var nomeCampo_passaporte_pais_origem = "passaporte_pais_origem";
    var var_passaporte_pais_origem = scAjaxGetFieldSelect(nomeCampo_passaporte_pais_origem);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_passaporte_pais_origem(var_passaporte_pais_origem, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_pais_origem_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_pais_origem

  function do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_pais_origem_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "passaporte_pais_origem";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_pais_origem_cb

  // ---------- Validate passaporte_dt_emissao
  function do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_dt_emissao()
  {
    var nomeCampo_passaporte_dt_emissao = "passaporte_dt_emissao";
    var var_passaporte_dt_emissao = scAjaxGetFieldText(nomeCampo_passaporte_dt_emissao);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_passaporte_dt_emissao(var_passaporte_dt_emissao, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_dt_emissao_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_dt_emissao

  function do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_dt_emissao_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "passaporte_dt_emissao";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_passaporte_dt_emissao_cb

  // ---------- Validate cnh
  function do_ajax_form_public_pessoa_fisica_mob_validate_cnh()
  {
    var nomeCampo_cnh = "cnh";
    var var_cnh = scAjaxGetFieldText(nomeCampo_cnh);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_cnh(var_cnh, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_cnh_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cnh

  function do_ajax_form_public_pessoa_fisica_mob_validate_cnh_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cnh";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cnh_cb

  // ---------- Validate cnh_categoria
  function do_ajax_form_public_pessoa_fisica_mob_validate_cnh_categoria()
  {
    var nomeCampo_cnh_categoria = "cnh_categoria";
    var var_cnh_categoria = scAjaxGetFieldText(nomeCampo_cnh_categoria);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_cnh_categoria(var_cnh_categoria, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_cnh_categoria_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cnh_categoria

  function do_ajax_form_public_pessoa_fisica_mob_validate_cnh_categoria_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cnh_categoria";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cnh_categoria_cb

  // ---------- Validate cnh_dt_validade
  function do_ajax_form_public_pessoa_fisica_mob_validate_cnh_dt_validade()
  {
    var nomeCampo_cnh_dt_validade = "cnh_dt_validade";
    var var_cnh_dt_validade = scAjaxGetFieldText(nomeCampo_cnh_dt_validade);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_public_pessoa_fisica_mob_validate_cnh_dt_validade(var_cnh_dt_validade, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_validate_cnh_dt_validade_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cnh_dt_validade

  function do_ajax_form_public_pessoa_fisica_mob_validate_cnh_dt_validade_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    sFieldValid = "cnh_dt_validade";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_public_pessoa_fisica_mob_validate_cnh_dt_validade_cb

  var cepReturnFieldData;

  function cepReturnValues(fieldConf)
  {
    cepReturnFieldData = fieldConf;
  } // cepReturnValues

  function cepForceValue(fieldName, fieldValue)
  {
    var i, fieldOptions, fieldOption;
    fieldOptions = $("#id_sc_field_" + fieldName).find("option");
    for (i = 0; i < fieldOptions.length; i++) {
      fieldOption = $(fieldOptions[i]);
      if (fieldValue == fieldOption.val() || fieldValue == fieldOption.text()) {
        $("#id_sc_field_" + fieldName).prop("selectedIndex", fieldOption.index());
        cepReturnFieldData[fieldName] = null;
        return;
      }
    }
  } // cepForceValue

  // ---------- Form
  function do_ajax_form_public_pessoa_fisica_mob_submit_form()
  {
    if (scEventControl_active("")) {
      setTimeout(function() { do_ajax_form_public_pessoa_fisica_mob_submit_form(); }, 500);
      return;
    }
    scAjaxHideMessage();
    var var_id_pessoa_fisica = scAjaxGetFieldHidden("id_pessoa_fisica");
    var var_cpf = scAjaxGetFieldText("cpf");
    var var_nome = scAjaxGetFieldText("nome");
    var var_sexo = scAjaxGetFieldSelect("sexo");
    var var_dt_nasc = scAjaxGetFieldText("dt_nasc");
    var var_nacionalidade = scAjaxGetFieldSelect("nacionalidade");
    var var_naturalidade = scAjaxGetFieldText("naturalidade");
    var var_id_tipo_estado_civil = scAjaxGetFieldSelect("id_tipo_estado_civil");
    var var_id_tipo_escolaridade = scAjaxGetFieldSelect("id_tipo_escolaridade");
    var var_id_tipo_sanguineo = scAjaxGetFieldSelect("id_tipo_sanguineo");
    var var_profissao = scAjaxGetFieldText("profissao");
    var var_aposentado = scAjaxGetFieldSelect("aposentado");
    var var_id_tipo_vinculo = scAjaxGetFieldText("id_tipo_vinculo");
    var var_obs = scAjaxGetFieldText("obs");
    var var_id_ativo = scAjaxGetFieldRadio("id_ativo");
    var var_endereco = scAjaxGetFieldText("endereco");
    var var_endereco_comp = scAjaxGetFieldText("endereco_comp");
    var var_bairro = scAjaxGetFieldText("bairro");
    var var_id_municipio = scAjaxGetFieldSelect("id_municipio");
    var var_id_uf = scAjaxGetFieldSelect("id_uf");
    var var_id_pais = scAjaxGetFieldSelect("id_pais");
    var var_cep = scAjaxGetFieldText("cep");
    var var_endereco_cob = scAjaxGetFieldText("endereco_cob");
    var var_endereco_comp_cob = scAjaxGetFieldText("endereco_comp_cob");
    var var_bairro_cob = scAjaxGetFieldText("bairro_cob");
    var var_id_municipio_cob = scAjaxGetFieldSelect("id_municipio_cob");
    var var_id_uf_cob = scAjaxGetFieldSelect("id_uf_cob");
    var var_id_pais_cob = scAjaxGetFieldSelect("id_pais_cob");
    var var_cep_cob = scAjaxGetFieldText("cep_cob");
    var var_rg = scAjaxGetFieldText("rg");
    var var_rg_uf_emissor = scAjaxGetFieldSelect("rg_uf_emissor");
    var var_rg_orgao_emissor = scAjaxGetFieldText("rg_orgao_emissor");
    var var_rg_dt_emissao = scAjaxGetFieldText("rg_dt_emissao");
    var var_passaporte = scAjaxGetFieldText("passaporte");
    var var_passaporte_pais_origem = scAjaxGetFieldSelect("passaporte_pais_origem");
    var var_passaporte_dt_emissao = scAjaxGetFieldText("passaporte_dt_emissao");
    var var_cnh = scAjaxGetFieldText("cnh");
    var var_cnh_categoria = scAjaxGetFieldText("cnh_categoria");
    var var_cnh_dt_validade = scAjaxGetFieldText("cnh_dt_validade");
    var var_nm_form_submit = document.F1.nm_form_submit.value;
    var var_nmgp_url_saida = document.F1.nmgp_url_saida.value;
    var var_nmgp_opcao = document.F1.nmgp_opcao.value;
    var var_nmgp_ancora = document.F1.nmgp_ancora.value;
    var var_nmgp_num_form = document.F1.nmgp_num_form.value;
    var var_nmgp_parms = document.F1.nmgp_parms.value;
    var var_script_case_init = document.F1.script_case_init.value;
    var var_csrf_token = scAjaxGetFieldText("csrf_token");
    scAjaxProcOn();
    x_ajax_form_public_pessoa_fisica_mob_submit_form(var_id_pessoa_fisica, var_cpf, var_nome, var_sexo, var_dt_nasc, var_nacionalidade, var_naturalidade, var_id_tipo_estado_civil, var_id_tipo_escolaridade, var_id_tipo_sanguineo, var_profissao, var_aposentado, var_id_tipo_vinculo, var_obs, var_id_ativo, var_endereco, var_endereco_comp, var_bairro, var_id_municipio, var_id_uf, var_id_pais, var_cep, var_endereco_cob, var_endereco_comp_cob, var_bairro_cob, var_id_municipio_cob, var_id_uf_cob, var_id_pais_cob, var_cep_cob, var_rg, var_rg_uf_emissor, var_rg_orgao_emissor, var_rg_dt_emissao, var_passaporte, var_passaporte_pais_origem, var_passaporte_dt_emissao, var_cnh, var_cnh_categoria, var_cnh_dt_validade, var_nm_form_submit, var_nmgp_url_saida, var_nmgp_opcao, var_nmgp_ancora, var_nmgp_num_form, var_nmgp_parms, var_script_case_init, var_csrf_token, do_ajax_form_public_pessoa_fisica_mob_submit_form_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_submit_form

  function do_ajax_form_public_pessoa_fisica_mob_submit_form_cb(sResp)
  {
    scAjaxProcOff();
    oResp = scAjaxResponse(sResp);
    scAjaxCalendarReload();
    scAjaxUpdateErrors("valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors)
    {
      $('.sc-js-ui-statusimg').css('display', 'none');
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    if (scAjaxIsOk())
    {
      scAjaxShowMessage();
      scAjaxHideErrorDisplay("table");
      scAjaxHideErrorDisplay("id_pessoa_fisica");
      scAjaxHideErrorDisplay("cpf");
      scAjaxHideErrorDisplay("nome");
      scAjaxHideErrorDisplay("sexo");
      scAjaxHideErrorDisplay("dt_nasc");
      scAjaxHideErrorDisplay("nacionalidade");
      scAjaxHideErrorDisplay("naturalidade");
      scAjaxHideErrorDisplay("id_tipo_estado_civil");
      scAjaxHideErrorDisplay("id_tipo_escolaridade");
      scAjaxHideErrorDisplay("id_tipo_sanguineo");
      scAjaxHideErrorDisplay("profissao");
      scAjaxHideErrorDisplay("aposentado");
      scAjaxHideErrorDisplay("id_tipo_vinculo");
      scAjaxHideErrorDisplay("obs");
      scAjaxHideErrorDisplay("id_ativo");
      scAjaxHideErrorDisplay("endereco");
      scAjaxHideErrorDisplay("endereco_comp");
      scAjaxHideErrorDisplay("bairro");
      scAjaxHideErrorDisplay("id_municipio");
      scAjaxHideErrorDisplay("id_uf");
      scAjaxHideErrorDisplay("id_pais");
      scAjaxHideErrorDisplay("cep");
      scAjaxHideErrorDisplay("endereco_cob");
      scAjaxHideErrorDisplay("endereco_comp_cob");
      scAjaxHideErrorDisplay("bairro_cob");
      scAjaxHideErrorDisplay("id_municipio_cob");
      scAjaxHideErrorDisplay("id_uf_cob");
      scAjaxHideErrorDisplay("id_pais_cob");
      scAjaxHideErrorDisplay("cep_cob");
      scAjaxHideErrorDisplay("rg");
      scAjaxHideErrorDisplay("rg_uf_emissor");
      scAjaxHideErrorDisplay("rg_orgao_emissor");
      scAjaxHideErrorDisplay("rg_dt_emissao");
      scAjaxHideErrorDisplay("passaporte");
      scAjaxHideErrorDisplay("passaporte_pais_origem");
      scAjaxHideErrorDisplay("passaporte_dt_emissao");
      scAjaxHideErrorDisplay("cnh");
      scAjaxHideErrorDisplay("cnh_categoria");
      scAjaxHideErrorDisplay("cnh_dt_validade");
      scLigEditLookupCall();
    }
    Nm_Proc_Atualiz = false;
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetMaster();
      if (scInlineFormSend())
      {
        self.parent.tb_remove();
        return;
      }
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxAlert();
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
  } // do_ajax_form_public_pessoa_fisica_mob_submit_form_cb

  var scStatusDetail = {};

  function do_ajax_form_public_pessoa_fisica_mob_navigate_form()
  {
    if (scRefreshTable())
    {
      return;
    }
    scAjaxHideMessage();
    scAjaxHideErrorDisplay("table");
    scAjaxHideErrorDisplay("id_pessoa_fisica");
    scAjaxHideErrorDisplay("cpf");
    scAjaxHideErrorDisplay("nome");
    scAjaxHideErrorDisplay("sexo");
    scAjaxHideErrorDisplay("dt_nasc");
    scAjaxHideErrorDisplay("nacionalidade");
    scAjaxHideErrorDisplay("naturalidade");
    scAjaxHideErrorDisplay("id_tipo_estado_civil");
    scAjaxHideErrorDisplay("id_tipo_escolaridade");
    scAjaxHideErrorDisplay("id_tipo_sanguineo");
    scAjaxHideErrorDisplay("profissao");
    scAjaxHideErrorDisplay("aposentado");
    scAjaxHideErrorDisplay("id_tipo_vinculo");
    scAjaxHideErrorDisplay("obs");
    scAjaxHideErrorDisplay("id_ativo");
    scAjaxHideErrorDisplay("endereco");
    scAjaxHideErrorDisplay("endereco_comp");
    scAjaxHideErrorDisplay("bairro");
    scAjaxHideErrorDisplay("id_municipio");
    scAjaxHideErrorDisplay("id_uf");
    scAjaxHideErrorDisplay("id_pais");
    scAjaxHideErrorDisplay("cep");
    scAjaxHideErrorDisplay("endereco_cob");
    scAjaxHideErrorDisplay("endereco_comp_cob");
    scAjaxHideErrorDisplay("bairro_cob");
    scAjaxHideErrorDisplay("id_municipio_cob");
    scAjaxHideErrorDisplay("id_uf_cob");
    scAjaxHideErrorDisplay("id_pais_cob");
    scAjaxHideErrorDisplay("cep_cob");
    scAjaxHideErrorDisplay("rg");
    scAjaxHideErrorDisplay("rg_uf_emissor");
    scAjaxHideErrorDisplay("rg_orgao_emissor");
    scAjaxHideErrorDisplay("rg_dt_emissao");
    scAjaxHideErrorDisplay("passaporte");
    scAjaxHideErrorDisplay("passaporte_pais_origem");
    scAjaxHideErrorDisplay("passaporte_dt_emissao");
    scAjaxHideErrorDisplay("cnh");
    scAjaxHideErrorDisplay("cnh_categoria");
    scAjaxHideErrorDisplay("cnh_dt_validade");
    var var_id_pessoa_fisica = document.F2.id_pessoa_fisica.value;
    var var_nm_form_submit = document.F2.nm_form_submit.value;
    var var_nmgp_opcao = document.F2.nmgp_opcao.value;
    var var_nmgp_ordem = document.F2.nmgp_ordem.value;
    var var_nmgp_fast_search = document.F2.nmgp_fast_search.value;
    var var_nmgp_cond_fast_search = document.F2.nmgp_cond_fast_search.value;
    var var_nmgp_arg_fast_search = document.F2.nmgp_arg_fast_search.value;
    var var_nmgp_arg_dyn_search = document.F2.nmgp_arg_dyn_search.value;
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn();
    x_ajax_form_public_pessoa_fisica_mob_navigate_form(var_id_pessoa_fisica, var_nm_form_submit, var_nmgp_opcao, var_nmgp_ordem, var_nmgp_fast_search,  var_nmgp_cond_fast_search,  var_nmgp_arg_fast_search, var_nmgp_arg_dyn_search, var_script_case_init, do_ajax_form_public_pessoa_fisica_mob_navigate_form_cb);
  } // do_ajax_form_public_pessoa_fisica_mob_navigate_form

  function do_ajax_form_public_pessoa_fisica_mob_navigate_form_cb(sResp)
  {
    scAjaxProcOff();
    oResp = scAjaxResponse(sResp);
    if (oResp['empty_filter'] && oResp['empty_filter'] == "ok")
    {
        document.F5.nmgp_opcao.value = "inicio";
        document.F5.nmgp_parms.value = "";
        document.F5.submit();
    }
    if ("ERROR" == oResp.result)
    {
        scAjaxShowErrorDisplay("table", oResp.errList[0].msgText);
        scAjaxProcOff();
        return;
    }
    else if (oResp["navSummary"].reg_tot == 0)
    {
       $("#sc-ui-empty-form").show();
       sc_hide_form_public_pessoa_fisica_mob_form();
    }
    sc_mupload_ok = true;
    scAjaxSetFields();
    document.F2.id_pessoa_fisica.value = scAjaxGetKeyValue("id_pessoa_fisica");
    scAjaxSetSummary();
    if (oResp['dyn_search'] && oResp['dyn_search']['NM_Dynamic_Search']) {
        $("#NM_Dynamic_Search").html(oResp['dyn_search']['NM_Dynamic_Search']);
    }
    if (oResp['dyn_search'] && oResp['dyn_search']['id_dyn_search_cmd_str']) {
        $("#id_dyn_search_cmd_str").html(oResp['dyn_search']['id_dyn_search_cmd_str']);
    }
    scAjaxShowDebug();
    scAjaxSetLabel(true);
    scAjaxSetReadonly(true);
    scAjaxSetMaster();
    scAjaxSetNavStatus("t");
    scAjaxSetNavStatus("b");
    scAjaxSetDisplay(true);
    scAjaxSetBtnVars();
    $('.sc-js-ui-statusimg').css('display', 'none');
    scAjaxAlert();
    scAjaxMessage();
    scAjaxJavascript();
    scQSInit = true;
    scQSInitVal = $("#SC_fast_search_t").val();
    scQuickSearchKeyUp('t', null);
    $('#SC_fast_search_t').blur();
    scQuickSearchInit(true, '');
    scQSInit = false;
    scAjaxSetFocus();
<?php
if ($this->Embutida_form)
{
?>
    do_ajax_form_public_pessoa_fisica_mob_restore_buttons();
<?php
}
?>
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
    SC_btn_grp_text();
  } // do_ajax_form_public_pessoa_fisica_mob_navigate_form_cb
  function sc_hide_form_public_pessoa_fisica_mob_form()
  {
    for (var block_id in ajax_block_id) {
      $("#div_" + ajax_block_id[block_id]).hide();
    }
  } // sc_hide_form_public_pessoa_fisica_mob_form


  function scAjaxDetailProc()
  {
    return true;
  } // scAjaxDetailProc


  var ajax_error_geral = "";

  var ajax_error_type = new Array("valid", "onblur", "onchange", "onclick", "onfocus");

  var ajax_field_list = new Array();
  var ajax_field_Dt_Hr = new Array();
  ajax_field_list[0] = "id_pessoa_fisica";
  ajax_field_list[1] = "cpf";
  ajax_field_list[2] = "nome";
  ajax_field_list[3] = "sexo";
  ajax_field_list[4] = "dt_nasc";
  ajax_field_list[5] = "nacionalidade";
  ajax_field_list[6] = "naturalidade";
  ajax_field_list[7] = "id_tipo_estado_civil";
  ajax_field_list[8] = "id_tipo_escolaridade";
  ajax_field_list[9] = "id_tipo_sanguineo";
  ajax_field_list[10] = "profissao";
  ajax_field_list[11] = "aposentado";
  ajax_field_list[12] = "id_tipo_vinculo";
  ajax_field_list[13] = "obs";
  ajax_field_list[14] = "id_ativo";
  ajax_field_list[15] = "endereco";
  ajax_field_list[16] = "endereco_comp";
  ajax_field_list[17] = "bairro";
  ajax_field_list[18] = "id_municipio";
  ajax_field_list[19] = "id_uf";
  ajax_field_list[20] = "id_pais";
  ajax_field_list[21] = "cep";
  ajax_field_list[22] = "endereco_cob";
  ajax_field_list[23] = "endereco_comp_cob";
  ajax_field_list[24] = "bairro_cob";
  ajax_field_list[25] = "id_municipio_cob";
  ajax_field_list[26] = "id_uf_cob";
  ajax_field_list[27] = "id_pais_cob";
  ajax_field_list[28] = "cep_cob";
  ajax_field_list[29] = "rg";
  ajax_field_list[30] = "rg_uf_emissor";
  ajax_field_list[31] = "rg_orgao_emissor";
  ajax_field_list[32] = "rg_dt_emissao";
  ajax_field_list[33] = "passaporte";
  ajax_field_list[34] = "passaporte_pais_origem";
  ajax_field_list[35] = "passaporte_dt_emissao";
  ajax_field_list[36] = "cnh";
  ajax_field_list[37] = "cnh_categoria";
  ajax_field_list[38] = "cnh_dt_validade";

  var ajax_block_list = new Array();
  ajax_block_list[0] = "0";
  ajax_block_list[1] = "1";
  ajax_block_list[2] = "2";
  ajax_block_list[3] = "3";

  var ajax_error_list = {
    "id_pessoa_fisica": {"label": "ID Pessoa Fisica", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cpf": {"label": "CPF", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nome": {"label": "Nome", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "sexo": {"label": "Sexo", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "dt_nasc": {"label": "Dt Nasc", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "nacionalidade": {"label": "Nacionalidade", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "naturalidade": {"label": "Naturalidade", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_tipo_estado_civil": {"label": "Tipo Estado Civil", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_tipo_escolaridade": {"label": "Tipo Escolaridade", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_tipo_sanguineo": {"label": "Tipo Sanguineo", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "profissao": {"label": "Profissão", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "aposentado": {"label": "Aposentado?", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_tipo_vinculo": {"label": "Tipo Vinculo", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "obs": {"label": "Obs", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_ativo": {"label": "Ativo", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "endereco": {"label": "Endereço", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "endereco_comp": {"label": "Endereco Comp", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "bairro": {"label": "Endereço Bairro", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_municipio": {"label": "Endereço Município", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_uf": {"label": "Endereço UF", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_pais": {"label": "Endereço Pais", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cep": {"label": "Endereço CEP", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "endereco_cob": {"label": "Endereço Cobrança", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "endereco_comp_cob": {"label": "Endereço Cobrança Comp ", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "bairro_cob": {"label": "Endereço Cobrança Bairro", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_municipio_cob": {"label": "Endereço Cobrança Município", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_uf_cob": {"label": "Endereço Cobrança UF", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "id_pais_cob": {"label": "Endereço Cobrança País", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cep_cob": {"label": "Endereço Cobrança CEP", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "rg": {"label": "RG", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "rg_uf_emissor": {"label": "RG UF Emissor", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "rg_orgao_emissor": {"label": "RG Orgão Emissor", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "rg_dt_emissao": {"label": "RG Dt Emissão", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "passaporte": {"label": "Passaporte", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "passaporte_pais_origem": {"label": "Passaporte País Origem", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "passaporte_dt_emissao": {"label": "Passaporte Dt Emissão", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cnh": {"label": "CNH", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cnh_categoria": {"label": "CNH Categoria", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cnh_dt_validade": {"label": "CNH Dt Validade", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5}
  };
  var ajax_error_timeout = 5;

  var ajax_block_id = {
    "0": "hidden_bloco_0",
    "1": "hidden_bloco_1",
    "2": "hidden_bloco_2",
    "3": "hidden_bloco_3"
  };

  var ajax_block_tab = {
    "hidden_bloco_0": "",
    "hidden_bloco_1": "",
    "hidden_bloco_2": "",
    "hidden_bloco_3": ""
  };

  var ajax_field_mult = {
    "id_pessoa_fisica": new Array(),
    "cpf": new Array(),
    "nome": new Array(),
    "sexo": new Array(),
    "dt_nasc": new Array(),
    "nacionalidade": new Array(),
    "naturalidade": new Array(),
    "id_tipo_estado_civil": new Array(),
    "id_tipo_escolaridade": new Array(),
    "id_tipo_sanguineo": new Array(),
    "profissao": new Array(),
    "aposentado": new Array(),
    "id_tipo_vinculo": new Array(),
    "obs": new Array(),
    "id_ativo": new Array(),
    "endereco": new Array(),
    "endereco_comp": new Array(),
    "bairro": new Array(),
    "id_municipio": new Array(),
    "id_uf": new Array(),
    "id_pais": new Array(),
    "cep": new Array(),
    "endereco_cob": new Array(),
    "endereco_comp_cob": new Array(),
    "bairro_cob": new Array(),
    "id_municipio_cob": new Array(),
    "id_uf_cob": new Array(),
    "id_pais_cob": new Array(),
    "cep_cob": new Array(),
    "rg": new Array(),
    "rg_uf_emissor": new Array(),
    "rg_orgao_emissor": new Array(),
    "rg_dt_emissao": new Array(),
    "passaporte": new Array(),
    "passaporte_pais_origem": new Array(),
    "passaporte_dt_emissao": new Array(),
    "cnh": new Array(),
    "cnh_categoria": new Array(),
    "cnh_dt_validade": new Array()
  };
  ajax_field_mult["id_pessoa_fisica"][1] = "id_pessoa_fisica";
  ajax_field_mult["cpf"][1] = "cpf";
  ajax_field_mult["nome"][1] = "nome";
  ajax_field_mult["sexo"][1] = "sexo";
  ajax_field_mult["dt_nasc"][1] = "dt_nasc";
  ajax_field_mult["nacionalidade"][1] = "nacionalidade";
  ajax_field_mult["naturalidade"][1] = "naturalidade";
  ajax_field_mult["id_tipo_estado_civil"][1] = "id_tipo_estado_civil";
  ajax_field_mult["id_tipo_escolaridade"][1] = "id_tipo_escolaridade";
  ajax_field_mult["id_tipo_sanguineo"][1] = "id_tipo_sanguineo";
  ajax_field_mult["profissao"][1] = "profissao";
  ajax_field_mult["aposentado"][1] = "aposentado";
  ajax_field_mult["id_tipo_vinculo"][1] = "id_tipo_vinculo";
  ajax_field_mult["obs"][1] = "obs";
  ajax_field_mult["id_ativo"][1] = "id_ativo";
  ajax_field_mult["endereco"][1] = "endereco";
  ajax_field_mult["endereco_comp"][1] = "endereco_comp";
  ajax_field_mult["bairro"][1] = "bairro";
  ajax_field_mult["id_municipio"][1] = "id_municipio";
  ajax_field_mult["id_uf"][1] = "id_uf";
  ajax_field_mult["id_pais"][1] = "id_pais";
  ajax_field_mult["cep"][1] = "cep";
  ajax_field_mult["endereco_cob"][1] = "endereco_cob";
  ajax_field_mult["endereco_comp_cob"][1] = "endereco_comp_cob";
  ajax_field_mult["bairro_cob"][1] = "bairro_cob";
  ajax_field_mult["id_municipio_cob"][1] = "id_municipio_cob";
  ajax_field_mult["id_uf_cob"][1] = "id_uf_cob";
  ajax_field_mult["id_pais_cob"][1] = "id_pais_cob";
  ajax_field_mult["cep_cob"][1] = "cep_cob";
  ajax_field_mult["rg"][1] = "rg";
  ajax_field_mult["rg_uf_emissor"][1] = "rg_uf_emissor";
  ajax_field_mult["rg_orgao_emissor"][1] = "rg_orgao_emissor";
  ajax_field_mult["rg_dt_emissao"][1] = "rg_dt_emissao";
  ajax_field_mult["passaporte"][1] = "passaporte";
  ajax_field_mult["passaporte_pais_origem"][1] = "passaporte_pais_origem";
  ajax_field_mult["passaporte_dt_emissao"][1] = "passaporte_dt_emissao";
  ajax_field_mult["cnh"][1] = "cnh";
  ajax_field_mult["cnh_categoria"][1] = "cnh_categoria";
  ajax_field_mult["cnh_dt_validade"][1] = "cnh_dt_validade";

  var ajax_field_id = {
    "id_pessoa_fisica": new Array("hidden_field_label_id_pessoa_fisica", "hidden_field_data_id_pessoa_fisica"),
    "cpf": new Array("hidden_field_label_cpf", "hidden_field_data_cpf"),
    "nome": new Array("hidden_field_label_nome", "hidden_field_data_nome"),
    "sexo": new Array("hidden_field_label_sexo", "hidden_field_data_sexo"),
    "dt_nasc": new Array("hidden_field_label_dt_nasc", "hidden_field_data_dt_nasc"),
    "nacionalidade": new Array("hidden_field_label_nacionalidade", "hidden_field_data_nacionalidade"),
    "naturalidade": new Array("hidden_field_label_naturalidade", "hidden_field_data_naturalidade"),
    "id_tipo_estado_civil": new Array("hidden_field_label_id_tipo_estado_civil", "hidden_field_data_id_tipo_estado_civil"),
    "id_tipo_escolaridade": new Array("hidden_field_label_id_tipo_escolaridade", "hidden_field_data_id_tipo_escolaridade"),
    "id_tipo_sanguineo": new Array("hidden_field_label_id_tipo_sanguineo", "hidden_field_data_id_tipo_sanguineo"),
    "profissao": new Array("hidden_field_label_profissao", "hidden_field_data_profissao"),
    "aposentado": new Array("hidden_field_label_aposentado", "hidden_field_data_aposentado"),
    "id_tipo_vinculo": new Array("hidden_field_label_id_tipo_vinculo", "hidden_field_data_id_tipo_vinculo"),
    "obs": new Array("hidden_field_label_obs", "hidden_field_data_obs"),
    "id_ativo": new Array("hidden_field_label_id_ativo", "hidden_field_data_id_ativo"),
    "endereco": new Array("hidden_field_label_endereco", "hidden_field_data_endereco"),
    "endereco_comp": new Array("hidden_field_label_endereco_comp", "hidden_field_data_endereco_comp"),
    "bairro": new Array("hidden_field_label_bairro", "hidden_field_data_bairro"),
    "id_municipio": new Array("hidden_field_label_id_municipio", "hidden_field_data_id_municipio"),
    "id_uf": new Array("hidden_field_label_id_uf", "hidden_field_data_id_uf"),
    "id_pais": new Array("hidden_field_label_id_pais", "hidden_field_data_id_pais"),
    "cep": new Array("hidden_field_label_cep", "hidden_field_data_cep"),
    "endereco_cob": new Array("hidden_field_label_endereco_cob", "hidden_field_data_endereco_cob"),
    "endereco_comp_cob": new Array("hidden_field_label_endereco_comp_cob", "hidden_field_data_endereco_comp_cob"),
    "bairro_cob": new Array("hidden_field_label_bairro_cob", "hidden_field_data_bairro_cob"),
    "id_municipio_cob": new Array("hidden_field_label_id_municipio_cob", "hidden_field_data_id_municipio_cob"),
    "id_uf_cob": new Array("hidden_field_label_id_uf_cob", "hidden_field_data_id_uf_cob"),
    "id_pais_cob": new Array("hidden_field_label_id_pais_cob", "hidden_field_data_id_pais_cob"),
    "cep_cob": new Array("hidden_field_label_cep_cob", "hidden_field_data_cep_cob"),
    "rg": new Array("hidden_field_label_rg", "hidden_field_data_rg"),
    "rg_uf_emissor": new Array("hidden_field_label_rg_uf_emissor", "hidden_field_data_rg_uf_emissor"),
    "rg_orgao_emissor": new Array("hidden_field_label_rg_orgao_emissor", "hidden_field_data_rg_orgao_emissor"),
    "rg_dt_emissao": new Array("hidden_field_label_rg_dt_emissao", "hidden_field_data_rg_dt_emissao"),
    "passaporte": new Array("hidden_field_label_passaporte", "hidden_field_data_passaporte"),
    "passaporte_pais_origem": new Array("hidden_field_label_passaporte_pais_origem", "hidden_field_data_passaporte_pais_origem"),
    "passaporte_dt_emissao": new Array("hidden_field_label_passaporte_dt_emissao", "hidden_field_data_passaporte_dt_emissao"),
    "cnh": new Array("hidden_field_label_cnh", "hidden_field_data_cnh"),
    "cnh_categoria": new Array("hidden_field_label_cnh_categoria", "hidden_field_data_cnh_categoria"),
    "cnh_dt_validade": new Array("hidden_field_label_cnh_dt_validade", "hidden_field_data_cnh_dt_validade")
  };

  var ajax_read_only = {
    "id_pessoa_fisica": "on",
    "cpf": "off",
    "nome": "off",
    "sexo": "off",
    "dt_nasc": "off",
    "nacionalidade": "off",
    "naturalidade": "off",
    "id_tipo_estado_civil": "off",
    "id_tipo_escolaridade": "off",
    "id_tipo_sanguineo": "off",
    "profissao": "off",
    "aposentado": "off",
    "id_tipo_vinculo": "off",
    "obs": "off",
    "id_ativo": "off",
    "endereco": "off",
    "endereco_comp": "off",
    "bairro": "off",
    "id_municipio": "off",
    "id_uf": "off",
    "id_pais": "off",
    "cep": "off",
    "endereco_cob": "off",
    "endereco_comp_cob": "off",
    "bairro_cob": "off",
    "id_municipio_cob": "off",
    "id_uf_cob": "off",
    "id_pais_cob": "off",
    "cep_cob": "off",
    "rg": "off",
    "rg_uf_emissor": "off",
    "rg_orgao_emissor": "off",
    "rg_dt_emissao": "off",
    "passaporte": "off",
    "passaporte_pais_origem": "off",
    "passaporte_dt_emissao": "off",
    "cnh": "off",
    "cnh_categoria": "off",
    "cnh_dt_validade": "off"
  };
  var bRefreshTable = false;
  function scRefreshTable()
  {
    return false;
  }

  function scAjaxDetailValue(sIndex, sValue)
  {
    var aValue = new Array();
    aValue[0] = {"value" : sValue};
    if ("id_pessoa_fisica" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cpf" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("nome" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("sexo" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("dt_nasc" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("nacionalidade" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("naturalidade" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_tipo_estado_civil" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_tipo_escolaridade" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_tipo_sanguineo" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("profissao" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("aposentado" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_tipo_vinculo" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("obs" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_ativo" == sIndex)
    {
      scAjaxSetFieldRadio(sIndex, aValue, null, 1, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("endereco" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("endereco_comp" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("bairro" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_municipio" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_uf" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_pais" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cep" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("endereco_cob" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("endereco_comp_cob" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("bairro_cob" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_municipio_cob" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_uf_cob" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("id_pais_cob" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cep_cob" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("rg" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("rg_uf_emissor" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("rg_orgao_emissor" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("rg_dt_emissao" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("passaporte" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("passaporte_pais_origem" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("passaporte_dt_emissao" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cnh" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cnh_categoria" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    if ("cnh_dt_validade" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);
      return;
    }
    scAjaxSetFieldInnerHtml(sIndex, aValue);
  }
 </SCRIPT>
