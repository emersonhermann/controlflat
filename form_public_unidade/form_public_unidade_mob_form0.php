<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - Unidade"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - Unidade"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_public_unidade/form_public_unidade_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_public_unidade_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
<?php

include_once('form_public_unidade_mob_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
  $(".scBtnGrpClick").find("a").click(function(e){
     e.preventDefault();
  });
  $(".scBtnGrpClick").click(function(){
     var aObj = $(this).find("a"), aHref = aObj.attr("href");
     if ("javascript:" == aHref.substr(0, 11)) {
        eval(aHref.substr(11));
     }
     else {
        aObj.trigger("click");
     }
   }).mouseover(function(){
     $(this).css("cursor", "pointer");
  });
  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).load(function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         $('#SC_fast_search_t').listen();
     }
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_public_unidade_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form name="F1" method="post" 
               action="form_public_unidade_mob.php" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>"> 
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" /> 
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_public_unidade_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_public_unidade_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['mostra_cab'] != "N"))
  {
?>
<tr><td>
<style>
#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 
#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:37px; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    	<tr>
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - Unidade"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - Unidade"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span><?php echo date($this->dateDefaultFormat()); ?></span></td>
        </tr>
    </table>		 
 </div>
</div>
</td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{watermark:'<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>', watermarkClass: 'scFormToolbarInputWm', maxLength: 255}">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = ''; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
        $sCondStyle = ($this->nmgp_botoes['new'] != 'off' || $this->nmgp_botoes['insert'] != 'off' || $this->nmgp_botoes['exit'] != 'off' || $this->nmgp_botoes['update'] != 'off' || $this->nmgp_botoes['delete'] != 'off' || $this->nmgp_botoes['copy'] != 'off') ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "", "", "__sc_grp__");?>
 
<?php
        $NM_btn = true;
?>
<table style="border-collapse: collapse; border-width: 0; display: none; position: absolute; z-index: 1000" id="sc_btgp_div_group_2_t">
 <tr><td class="scBtnGrpBackground">
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_new_t">
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_sai_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sys_separator">
 </td></tr><tr><td class="scBtnGrpBackground">
  </div>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_clone_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "nm_move ('clone');", "nm_move ('clone');", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
?>
 </td></tr>
</table>
<?php
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R")
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
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['empty_filter'] = true;
       }
  }
  else
  {
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_unidade']))
           {
               $this->nmgp_cmp_readonly['id_unidade'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_unidade']))
    {
        $this->nm_new_label['id_unidade'] = "Id Unidade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_unidade = $this->id_unidade;
   $sStyleHidden_id_unidade = '';
   if (isset($this->nmgp_cmp_hidden['id_unidade']) && $this->nmgp_cmp_hidden['id_unidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_unidade']);
       $sStyleHidden_id_unidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_unidade = 'display: none;';
   $sStyleReadInp_id_unidade = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_unidade"]) &&  $this->nmgp_cmp_readonly["id_unidade"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_unidade']);
       $sStyleReadLab_id_unidade = '';
       $sStyleReadInp_id_unidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_unidade']) && $this->nmgp_cmp_hidden['id_unidade'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_unidade" value="<?php echo $this->form_encode_input($id_unidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_unidade_line" id="hidden_field_data_id_unidade" style="<?php echo $sStyleHidden_id_unidade; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_unidade_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_unidade_label"><span id="id_label_id_unidade"><?php echo $this->nm_new_label['id_unidade']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['php_cmp_required']['id_unidade']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['php_cmp_required']['id_unidade'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["id_unidade"]) &&  $this->nmgp_cmp_readonly["id_unidade"] == "on")) { 

 ?>
<input type="hidden" name="id_unidade" value="<?php echo $this->form_encode_input($id_unidade) . "\"><span id=\"id_ajax_label_id_unidade\">" . $id_unidade . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_id_unidade" class="sc-ui-readonly-id_unidade css_id_unidade_line" style="<?php echo $sStyleReadLab_id_unidade; ?>"><?php echo $this->form_encode_input($this->id_unidade); ?></span><span id="id_read_off_id_unidade" style="white-space: nowrap;<?php echo $sStyleReadInp_id_unidade; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_unidade_obj" style="" id="id_sc_field_id_unidade" type=text name="id_unidade" value="<?php echo $this->form_encode_input($id_unidade) ?>"
 size=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['id_unidade']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['id_unidade']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_unidade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_unidade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ds_unidade']))
    {
        $this->nm_new_label['ds_unidade'] = "Ds Unidade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ds_unidade = $this->ds_unidade;
   $sStyleHidden_ds_unidade = '';
   if (isset($this->nmgp_cmp_hidden['ds_unidade']) && $this->nmgp_cmp_hidden['ds_unidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ds_unidade']);
       $sStyleHidden_ds_unidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ds_unidade = 'display: none;';
   $sStyleReadInp_ds_unidade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ds_unidade']) && $this->nmgp_cmp_readonly['ds_unidade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ds_unidade']);
       $sStyleReadLab_ds_unidade = '';
       $sStyleReadInp_ds_unidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ds_unidade']) && $this->nmgp_cmp_hidden['ds_unidade'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ds_unidade" value="<?php echo $this->form_encode_input($ds_unidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ds_unidade_line" id="hidden_field_data_ds_unidade" style="<?php echo $sStyleHidden_ds_unidade; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ds_unidade_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ds_unidade_label"><span id="id_label_ds_unidade"><?php echo $this->nm_new_label['ds_unidade']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ds_unidade"]) &&  $this->nmgp_cmp_readonly["ds_unidade"] == "on") { 

 ?>
<input type="hidden" name="ds_unidade" value="<?php echo $this->form_encode_input($ds_unidade) . "\">" . $ds_unidade . ""; ?>
<?php } else { ?>
<span id="id_read_on_ds_unidade" class="sc-ui-readonly-ds_unidade css_ds_unidade_line" style="<?php echo $sStyleReadLab_ds_unidade; ?>"><?php echo $this->form_encode_input($this->ds_unidade); ?></span><span id="id_read_off_ds_unidade" style="white-space: nowrap;<?php echo $sStyleReadInp_ds_unidade; ?>">
 <input class="sc-js-input scFormObjectOdd css_ds_unidade_obj" style="" id="id_sc_field_ds_unidade" type=text name="ds_unidade" value="<?php echo $this->form_encode_input($ds_unidade) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ds_unidade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ds_unidade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ds_unidade_antiga']))
    {
        $this->nm_new_label['ds_unidade_antiga'] = "Ds Unidade Antiga";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ds_unidade_antiga = $this->ds_unidade_antiga;
   $sStyleHidden_ds_unidade_antiga = '';
   if (isset($this->nmgp_cmp_hidden['ds_unidade_antiga']) && $this->nmgp_cmp_hidden['ds_unidade_antiga'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ds_unidade_antiga']);
       $sStyleHidden_ds_unidade_antiga = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ds_unidade_antiga = 'display: none;';
   $sStyleReadInp_ds_unidade_antiga = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ds_unidade_antiga']) && $this->nmgp_cmp_readonly['ds_unidade_antiga'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ds_unidade_antiga']);
       $sStyleReadLab_ds_unidade_antiga = '';
       $sStyleReadInp_ds_unidade_antiga = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ds_unidade_antiga']) && $this->nmgp_cmp_hidden['ds_unidade_antiga'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ds_unidade_antiga" value="<?php echo $this->form_encode_input($ds_unidade_antiga) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ds_unidade_antiga_line" id="hidden_field_data_ds_unidade_antiga" style="<?php echo $sStyleHidden_ds_unidade_antiga; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ds_unidade_antiga_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ds_unidade_antiga_label"><span id="id_label_ds_unidade_antiga"><?php echo $this->nm_new_label['ds_unidade_antiga']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ds_unidade_antiga"]) &&  $this->nmgp_cmp_readonly["ds_unidade_antiga"] == "on") { 

 ?>
<input type="hidden" name="ds_unidade_antiga" value="<?php echo $this->form_encode_input($ds_unidade_antiga) . "\">" . $ds_unidade_antiga . ""; ?>
<?php } else { ?>
<span id="id_read_on_ds_unidade_antiga" class="sc-ui-readonly-ds_unidade_antiga css_ds_unidade_antiga_line" style="<?php echo $sStyleReadLab_ds_unidade_antiga; ?>"><?php echo $this->form_encode_input($this->ds_unidade_antiga); ?></span><span id="id_read_off_ds_unidade_antiga" style="white-space: nowrap;<?php echo $sStyleReadInp_ds_unidade_antiga; ?>">
 <input class="sc-js-input scFormObjectOdd css_ds_unidade_antiga_obj" style="" id="id_sc_field_ds_unidade_antiga" type=text name="ds_unidade_antiga" value="<?php echo $this->form_encode_input($ds_unidade_antiga) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ds_unidade_antiga_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ds_unidade_antiga_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cd_unidade']))
    {
        $this->nm_new_label['cd_unidade'] = "Cd Unidade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cd_unidade = $this->cd_unidade;
   $sStyleHidden_cd_unidade = '';
   if (isset($this->nmgp_cmp_hidden['cd_unidade']) && $this->nmgp_cmp_hidden['cd_unidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cd_unidade']);
       $sStyleHidden_cd_unidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cd_unidade = 'display: none;';
   $sStyleReadInp_cd_unidade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cd_unidade']) && $this->nmgp_cmp_readonly['cd_unidade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cd_unidade']);
       $sStyleReadLab_cd_unidade = '';
       $sStyleReadInp_cd_unidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cd_unidade']) && $this->nmgp_cmp_hidden['cd_unidade'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cd_unidade" value="<?php echo $this->form_encode_input($cd_unidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cd_unidade_line" id="hidden_field_data_cd_unidade" style="<?php echo $sStyleHidden_cd_unidade; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cd_unidade_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cd_unidade_label"><span id="id_label_cd_unidade"><?php echo $this->nm_new_label['cd_unidade']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cd_unidade"]) &&  $this->nmgp_cmp_readonly["cd_unidade"] == "on") { 

 ?>
<input type="hidden" name="cd_unidade" value="<?php echo $this->form_encode_input($cd_unidade) . "\">" . $cd_unidade . ""; ?>
<?php } else { ?>
<span id="id_read_on_cd_unidade" class="sc-ui-readonly-cd_unidade css_cd_unidade_line" style="<?php echo $sStyleReadLab_cd_unidade; ?>"><?php echo $this->form_encode_input($this->cd_unidade); ?></span><span id="id_read_off_cd_unidade" style="white-space: nowrap;<?php echo $sStyleReadInp_cd_unidade; ?>">
 <input class="sc-js-input scFormObjectOdd css_cd_unidade_obj" style="" id="id_sc_field_cd_unidade" type=text name="cd_unidade" value="<?php echo $this->form_encode_input($cd_unidade) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cd_unidade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cd_unidade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ds_unidade_compl']))
    {
        $this->nm_new_label['ds_unidade_compl'] = "Ds Unidade Compl";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ds_unidade_compl = $this->ds_unidade_compl;
   $sStyleHidden_ds_unidade_compl = '';
   if (isset($this->nmgp_cmp_hidden['ds_unidade_compl']) && $this->nmgp_cmp_hidden['ds_unidade_compl'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ds_unidade_compl']);
       $sStyleHidden_ds_unidade_compl = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ds_unidade_compl = 'display: none;';
   $sStyleReadInp_ds_unidade_compl = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ds_unidade_compl']) && $this->nmgp_cmp_readonly['ds_unidade_compl'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ds_unidade_compl']);
       $sStyleReadLab_ds_unidade_compl = '';
       $sStyleReadInp_ds_unidade_compl = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ds_unidade_compl']) && $this->nmgp_cmp_hidden['ds_unidade_compl'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ds_unidade_compl" value="<?php echo $this->form_encode_input($ds_unidade_compl) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ds_unidade_compl_line" id="hidden_field_data_ds_unidade_compl" style="<?php echo $sStyleHidden_ds_unidade_compl; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ds_unidade_compl_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ds_unidade_compl_label"><span id="id_label_ds_unidade_compl"><?php echo $this->nm_new_label['ds_unidade_compl']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ds_unidade_compl"]) &&  $this->nmgp_cmp_readonly["ds_unidade_compl"] == "on") { 

 ?>
<input type="hidden" name="ds_unidade_compl" value="<?php echo $this->form_encode_input($ds_unidade_compl) . "\">" . $ds_unidade_compl . ""; ?>
<?php } else { ?>
<span id="id_read_on_ds_unidade_compl" class="sc-ui-readonly-ds_unidade_compl css_ds_unidade_compl_line" style="<?php echo $sStyleReadLab_ds_unidade_compl; ?>"><?php echo $this->form_encode_input($this->ds_unidade_compl); ?></span><span id="id_read_off_ds_unidade_compl" style="white-space: nowrap;<?php echo $sStyleReadInp_ds_unidade_compl; ?>">
 <input class="sc-js-input scFormObjectOdd css_ds_unidade_compl_obj" style="" id="id_sc_field_ds_unidade_compl" type=text name="ds_unidade_compl" value="<?php echo $this->form_encode_input($ds_unidade_compl) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ds_unidade_compl_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ds_unidade_compl_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_bloco']))
   {
       $this->nm_new_label['id_bloco'] = "Id Bloco";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_bloco = $this->id_bloco;
   $sStyleHidden_id_bloco = '';
   if (isset($this->nmgp_cmp_hidden['id_bloco']) && $this->nmgp_cmp_hidden['id_bloco'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_bloco']);
       $sStyleHidden_id_bloco = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_bloco = 'display: none;';
   $sStyleReadInp_id_bloco = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_bloco']) && $this->nmgp_cmp_readonly['id_bloco'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_bloco']);
       $sStyleReadLab_id_bloco = '';
       $sStyleReadInp_id_bloco = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_bloco']) && $this->nmgp_cmp_hidden['id_bloco'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_bloco" value="<?php echo $this->form_encode_input($this->id_bloco) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_bloco_line" id="hidden_field_data_id_bloco" style="<?php echo $sStyleHidden_id_bloco; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_bloco_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_bloco_label"><span id="id_label_id_bloco"><?php echo $this->nm_new_label['id_bloco']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_bloco"]) &&  $this->nmgp_cmp_readonly["id_bloco"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'] = array(); 
    }

   $old_value_id_unidade = $this->id_unidade;
   $old_value_andar = $this->andar;
   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_id_pessoa_juridica = $this->id_pessoa_juridica;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_fracao = $this->fracao;
   $old_value_id_ativo = $this->id_ativo;
   $old_value_dt_cadastro = $this->dt_cadastro;
   $old_value_dt_cadastro_hora = $this->dt_cadastro_hora;
   $old_value_dt_atualiza = $this->dt_atualiza;
   $old_value_dt_atualiza_hora = $this->dt_atualiza_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_unidade = $this->id_unidade;
   $unformatted_value_andar = $this->andar;
   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_id_pessoa_juridica = $this->id_pessoa_juridica;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_fracao = $this->fracao;
   $unformatted_value_id_ativo = $this->id_ativo;
   $unformatted_value_dt_cadastro = $this->dt_cadastro;
   $unformatted_value_dt_cadastro_hora = $this->dt_cadastro_hora;
   $unformatted_value_dt_atualiza = $this->dt_atualiza;
   $unformatted_value_dt_atualiza_hora = $this->dt_atualiza_hora;

   $nm_comando = "SELECT id_bloco, id_bloco FROM \"public\".bloco ORDER BY id_bloco";

   $this->id_unidade = $old_value_id_unidade;
   $this->andar = $old_value_andar;
   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->id_pessoa_juridica = $old_value_id_pessoa_juridica;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->fracao = $old_value_fracao;
   $this->id_ativo = $old_value_id_ativo;
   $this->dt_cadastro = $old_value_dt_cadastro;
   $this->dt_cadastro_hora = $old_value_dt_cadastro_hora;
   $this->dt_atualiza = $old_value_dt_atualiza;
   $this->dt_atualiza_hora = $old_value_dt_atualiza_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'][] = $rs->fields[0];
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
   $id_bloco_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_bloco_1))
          {
              foreach ($this->id_bloco_1 as $tmp_id_bloco)
              {
                  if (trim($tmp_id_bloco) === trim($cadaselect[1])) { $id_bloco_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_bloco) === trim($cadaselect[1])) { $id_bloco_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_bloco" value="<?php echo $this->form_encode_input($id_bloco) . "\">" . $id_bloco_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'] = array(); 
    }

   $old_value_id_unidade = $this->id_unidade;
   $old_value_andar = $this->andar;
   $old_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $old_value_id_pessoa_juridica = $this->id_pessoa_juridica;
   $old_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $old_value_fracao = $this->fracao;
   $old_value_id_ativo = $this->id_ativo;
   $old_value_dt_cadastro = $this->dt_cadastro;
   $old_value_dt_cadastro_hora = $this->dt_cadastro_hora;
   $old_value_dt_atualiza = $this->dt_atualiza;
   $old_value_dt_atualiza_hora = $this->dt_atualiza_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_unidade = $this->id_unidade;
   $unformatted_value_andar = $this->andar;
   $unformatted_value_id_pessoa_fisica = $this->id_pessoa_fisica;
   $unformatted_value_id_pessoa_juridica = $this->id_pessoa_juridica;
   $unformatted_value_id_tipo_vinculo = $this->id_tipo_vinculo;
   $unformatted_value_fracao = $this->fracao;
   $unformatted_value_id_ativo = $this->id_ativo;
   $unformatted_value_dt_cadastro = $this->dt_cadastro;
   $unformatted_value_dt_cadastro_hora = $this->dt_cadastro_hora;
   $unformatted_value_dt_atualiza = $this->dt_atualiza;
   $unformatted_value_dt_atualiza_hora = $this->dt_atualiza_hora;

   $nm_comando = "SELECT id_bloco, id_bloco FROM \"public\".bloco ORDER BY id_bloco";

   $this->id_unidade = $old_value_id_unidade;
   $this->andar = $old_value_andar;
   $this->id_pessoa_fisica = $old_value_id_pessoa_fisica;
   $this->id_pessoa_juridica = $old_value_id_pessoa_juridica;
   $this->id_tipo_vinculo = $old_value_id_tipo_vinculo;
   $this->fracao = $old_value_fracao;
   $this->id_ativo = $old_value_id_ativo;
   $this->dt_cadastro = $old_value_dt_cadastro;
   $this->dt_cadastro_hora = $old_value_dt_cadastro_hora;
   $this->dt_atualiza = $old_value_dt_atualiza;
   $this->dt_atualiza_hora = $old_value_dt_atualiza_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['Lookup_id_bloco'][] = $rs->fields[0];
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
   $id_bloco_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_bloco_1))
          {
              foreach ($this->id_bloco_1 as $tmp_id_bloco)
              {
                  if (trim($tmp_id_bloco) === trim($cadaselect[1])) { $id_bloco_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_bloco) === trim($cadaselect[1])) { $id_bloco_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_bloco_look))
          {
              $id_bloco_look = $this->id_bloco;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_bloco\" class=\"css_id_bloco_line\" style=\"" .  $sStyleReadLab_id_bloco . "\">" . $this->form_encode_input($id_bloco_look) . "</span><span id=\"id_read_off_id_bloco\" style=\"" . $sStyleReadInp_id_bloco . "\">";
   echo " <span id=\"idAjaxSelect_id_bloco\"><select class=\"sc-js-input scFormObjectOdd css_id_bloco_obj\" style=\"\" id=\"id_sc_field_id_bloco\" name=\"id_bloco\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_bloco) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_bloco)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_bloco_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_bloco_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['andar']))
    {
        $this->nm_new_label['andar'] = "Andar";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $andar = $this->andar;
   $sStyleHidden_andar = '';
   if (isset($this->nmgp_cmp_hidden['andar']) && $this->nmgp_cmp_hidden['andar'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['andar']);
       $sStyleHidden_andar = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_andar = 'display: none;';
   $sStyleReadInp_andar = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['andar']) && $this->nmgp_cmp_readonly['andar'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['andar']);
       $sStyleReadLab_andar = '';
       $sStyleReadInp_andar = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['andar']) && $this->nmgp_cmp_hidden['andar'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="andar" value="<?php echo $this->form_encode_input($andar) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_andar_line" id="hidden_field_data_andar" style="<?php echo $sStyleHidden_andar; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_andar_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_andar_label"><span id="id_label_andar"><?php echo $this->nm_new_label['andar']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["andar"]) &&  $this->nmgp_cmp_readonly["andar"] == "on") { 

 ?>
<input type="hidden" name="andar" value="<?php echo $this->form_encode_input($andar) . "\">" . $andar . ""; ?>
<?php } else { ?>
<span id="id_read_on_andar" class="sc-ui-readonly-andar css_andar_line" style="<?php echo $sStyleReadLab_andar; ?>"><?php echo $this->form_encode_input($this->andar); ?></span><span id="id_read_off_andar" style="white-space: nowrap;<?php echo $sStyleReadInp_andar; ?>">
 <input class="sc-js-input scFormObjectOdd css_andar_obj" style="" id="id_sc_field_andar" type=text name="andar" value="<?php echo $this->form_encode_input($andar) ?>"
 size=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['andar']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['andar']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_andar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_andar_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_pessoa_fisica']))
    {
        $this->nm_new_label['id_pessoa_fisica'] = "Id Pessoa Fisica";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_pessoa_fisica = $this->id_pessoa_fisica;
   $sStyleHidden_id_pessoa_fisica = '';
   if (isset($this->nmgp_cmp_hidden['id_pessoa_fisica']) && $this->nmgp_cmp_hidden['id_pessoa_fisica'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_pessoa_fisica']);
       $sStyleHidden_id_pessoa_fisica = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_pessoa_fisica = 'display: none;';
   $sStyleReadInp_id_pessoa_fisica = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_pessoa_fisica']) && $this->nmgp_cmp_readonly['id_pessoa_fisica'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_pessoa_fisica']);
       $sStyleReadLab_id_pessoa_fisica = '';
       $sStyleReadInp_id_pessoa_fisica = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_pessoa_fisica']) && $this->nmgp_cmp_hidden['id_pessoa_fisica'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_pessoa_fisica" value="<?php echo $this->form_encode_input($id_pessoa_fisica) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_pessoa_fisica_line" id="hidden_field_data_id_pessoa_fisica" style="<?php echo $sStyleHidden_id_pessoa_fisica; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_pessoa_fisica_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_pessoa_fisica_label"><span id="id_label_id_pessoa_fisica"><?php echo $this->nm_new_label['id_pessoa_fisica']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_pessoa_fisica"]) &&  $this->nmgp_cmp_readonly["id_pessoa_fisica"] == "on") { 

 ?>
<input type="hidden" name="id_pessoa_fisica" value="<?php echo $this->form_encode_input($id_pessoa_fisica) . "\">" . $id_pessoa_fisica . ""; ?>
<?php } else { ?>
<span id="id_read_on_id_pessoa_fisica" class="sc-ui-readonly-id_pessoa_fisica css_id_pessoa_fisica_line" style="<?php echo $sStyleReadLab_id_pessoa_fisica; ?>"><?php echo $this->form_encode_input($this->id_pessoa_fisica); ?></span><span id="id_read_off_id_pessoa_fisica" style="white-space: nowrap;<?php echo $sStyleReadInp_id_pessoa_fisica; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_pessoa_fisica_obj" style="" id="id_sc_field_id_pessoa_fisica" type=text name="id_pessoa_fisica" value="<?php echo $this->form_encode_input($id_pessoa_fisica) ?>"
 size=17 alt="{datatype: 'integer', maxLength: 17, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['id_pessoa_fisica']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['id_pessoa_fisica']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_pessoa_fisica_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_pessoa_fisica_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_pessoa_juridica']))
    {
        $this->nm_new_label['id_pessoa_juridica'] = "Id Pessoa Juridica";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_pessoa_juridica = $this->id_pessoa_juridica;
   $sStyleHidden_id_pessoa_juridica = '';
   if (isset($this->nmgp_cmp_hidden['id_pessoa_juridica']) && $this->nmgp_cmp_hidden['id_pessoa_juridica'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_pessoa_juridica']);
       $sStyleHidden_id_pessoa_juridica = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_pessoa_juridica = 'display: none;';
   $sStyleReadInp_id_pessoa_juridica = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_pessoa_juridica']) && $this->nmgp_cmp_readonly['id_pessoa_juridica'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_pessoa_juridica']);
       $sStyleReadLab_id_pessoa_juridica = '';
       $sStyleReadInp_id_pessoa_juridica = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_pessoa_juridica']) && $this->nmgp_cmp_hidden['id_pessoa_juridica'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_pessoa_juridica" value="<?php echo $this->form_encode_input($id_pessoa_juridica) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_pessoa_juridica_line" id="hidden_field_data_id_pessoa_juridica" style="<?php echo $sStyleHidden_id_pessoa_juridica; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_pessoa_juridica_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_pessoa_juridica_label"><span id="id_label_id_pessoa_juridica"><?php echo $this->nm_new_label['id_pessoa_juridica']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_pessoa_juridica"]) &&  $this->nmgp_cmp_readonly["id_pessoa_juridica"] == "on") { 

 ?>
<input type="hidden" name="id_pessoa_juridica" value="<?php echo $this->form_encode_input($id_pessoa_juridica) . "\">" . $id_pessoa_juridica . ""; ?>
<?php } else { ?>
<span id="id_read_on_id_pessoa_juridica" class="sc-ui-readonly-id_pessoa_juridica css_id_pessoa_juridica_line" style="<?php echo $sStyleReadLab_id_pessoa_juridica; ?>"><?php echo $this->form_encode_input($this->id_pessoa_juridica); ?></span><span id="id_read_off_id_pessoa_juridica" style="white-space: nowrap;<?php echo $sStyleReadInp_id_pessoa_juridica; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_pessoa_juridica_obj" style="" id="id_sc_field_id_pessoa_juridica" type=text name="id_pessoa_juridica" value="<?php echo $this->form_encode_input($id_pessoa_juridica) ?>"
 size=17 alt="{datatype: 'integer', maxLength: 17, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['id_pessoa_juridica']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['id_pessoa_juridica']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_pessoa_juridica_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_pessoa_juridica_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_tipo_vinculo']))
    {
        $this->nm_new_label['id_tipo_vinculo'] = "Id Tipo Vinculo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_tipo_vinculo = $this->id_tipo_vinculo;
   $sStyleHidden_id_tipo_vinculo = '';
   if (isset($this->nmgp_cmp_hidden['id_tipo_vinculo']) && $this->nmgp_cmp_hidden['id_tipo_vinculo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_tipo_vinculo']);
       $sStyleHidden_id_tipo_vinculo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_tipo_vinculo = 'display: none;';
   $sStyleReadInp_id_tipo_vinculo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_tipo_vinculo']) && $this->nmgp_cmp_readonly['id_tipo_vinculo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_tipo_vinculo']);
       $sStyleReadLab_id_tipo_vinculo = '';
       $sStyleReadInp_id_tipo_vinculo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_tipo_vinculo']) && $this->nmgp_cmp_hidden['id_tipo_vinculo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_tipo_vinculo" value="<?php echo $this->form_encode_input($id_tipo_vinculo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_tipo_vinculo_line" id="hidden_field_data_id_tipo_vinculo" style="<?php echo $sStyleHidden_id_tipo_vinculo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_tipo_vinculo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_tipo_vinculo_label"><span id="id_label_id_tipo_vinculo"><?php echo $this->nm_new_label['id_tipo_vinculo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_tipo_vinculo"]) &&  $this->nmgp_cmp_readonly["id_tipo_vinculo"] == "on") { 

 ?>
<input type="hidden" name="id_tipo_vinculo" value="<?php echo $this->form_encode_input($id_tipo_vinculo) . "\">" . $id_tipo_vinculo . ""; ?>
<?php } else { ?>
<span id="id_read_on_id_tipo_vinculo" class="sc-ui-readonly-id_tipo_vinculo css_id_tipo_vinculo_line" style="<?php echo $sStyleReadLab_id_tipo_vinculo; ?>"><?php echo $this->form_encode_input($this->id_tipo_vinculo); ?></span><span id="id_read_off_id_tipo_vinculo" style="white-space: nowrap;<?php echo $sStyleReadInp_id_tipo_vinculo; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_tipo_vinculo_obj" style="" id="id_sc_field_id_tipo_vinculo" type=text name="id_tipo_vinculo" value="<?php echo $this->form_encode_input($id_tipo_vinculo) ?>"
 size=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['id_tipo_vinculo']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['id_tipo_vinculo']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_tipo_vinculo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_tipo_vinculo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fracao']))
    {
        $this->nm_new_label['fracao'] = "Fracao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fracao = $this->fracao;
   $sStyleHidden_fracao = '';
   if (isset($this->nmgp_cmp_hidden['fracao']) && $this->nmgp_cmp_hidden['fracao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fracao']);
       $sStyleHidden_fracao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fracao = 'display: none;';
   $sStyleReadInp_fracao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fracao']) && $this->nmgp_cmp_readonly['fracao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fracao']);
       $sStyleReadLab_fracao = '';
       $sStyleReadInp_fracao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fracao']) && $this->nmgp_cmp_hidden['fracao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fracao" value="<?php echo $this->form_encode_input($fracao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fracao_line" id="hidden_field_data_fracao" style="<?php echo $sStyleHidden_fracao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fracao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fracao_label"><span id="id_label_fracao"><?php echo $this->nm_new_label['fracao']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fracao"]) &&  $this->nmgp_cmp_readonly["fracao"] == "on") { 

 ?>
<input type="hidden" name="fracao" value="<?php echo $this->form_encode_input($fracao) . "\">" . $fracao . ""; ?>
<?php } else { ?>
<span id="id_read_on_fracao" class="sc-ui-readonly-fracao css_fracao_line" style="<?php echo $sStyleReadLab_fracao; ?>"><?php echo $this->form_encode_input($this->fracao); ?></span><span id="id_read_off_fracao" style="white-space: nowrap;<?php echo $sStyleReadInp_fracao; ?>">
 <input class="sc-js-input scFormObjectOdd css_fracao_obj" style="" id="id_sc_field_fracao" type=text name="fracao" value="<?php echo $this->form_encode_input($fracao) ?>"
 size=10 alt="{datatype: 'decimal', maxLength: 10, precision: 5, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fracao']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['fracao']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['fracao']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fracao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fracao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['obs']))
    {
        $this->nm_new_label['obs'] = "Obs";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $obs = $this->obs;
   $sStyleHidden_obs = '';
   if (isset($this->nmgp_cmp_hidden['obs']) && $this->nmgp_cmp_hidden['obs'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['obs']);
       $sStyleHidden_obs = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_obs = 'display: none;';
   $sStyleReadInp_obs = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['obs']) && $this->nmgp_cmp_readonly['obs'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['obs']);
       $sStyleReadLab_obs = '';
       $sStyleReadInp_obs = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['obs']) && $this->nmgp_cmp_hidden['obs'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="obs" value="<?php echo $this->form_encode_input($obs) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_obs_line" id="hidden_field_data_obs" style="<?php echo $sStyleHidden_obs; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_obs_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_obs_label"><span id="id_label_obs"><?php echo $this->nm_new_label['obs']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["obs"]) &&  $this->nmgp_cmp_readonly["obs"] == "on") { 

 ?>
<input type="hidden" name="obs" value="<?php echo $this->form_encode_input($obs) . "\">" . $obs . ""; ?>
<?php } else { ?>
<span id="id_read_on_obs" class="sc-ui-readonly-obs css_obs_line" style="<?php echo $sStyleReadLab_obs; ?>"><?php echo $this->form_encode_input($this->obs); ?></span><span id="id_read_off_obs" style="white-space: nowrap;<?php echo $sStyleReadInp_obs; ?>">
 <input class="sc-js-input scFormObjectOdd css_obs_obj" style="" id="id_sc_field_obs" type=text name="obs" value="<?php echo $this->form_encode_input($obs) ?>"
 size=50 maxlength=500 alt="{datatype: 'text', maxLength: 500, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_obs_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_obs_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_ativo']))
    {
        $this->nm_new_label['id_ativo'] = "Id Ativo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_ativo = $this->id_ativo;
   $sStyleHidden_id_ativo = '';
   if (isset($this->nmgp_cmp_hidden['id_ativo']) && $this->nmgp_cmp_hidden['id_ativo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_ativo']);
       $sStyleHidden_id_ativo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_ativo = 'display: none;';
   $sStyleReadInp_id_ativo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_ativo']) && $this->nmgp_cmp_readonly['id_ativo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_ativo']);
       $sStyleReadLab_id_ativo = '';
       $sStyleReadInp_id_ativo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_ativo']) && $this->nmgp_cmp_hidden['id_ativo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_ativo" value="<?php echo $this->form_encode_input($id_ativo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_ativo_line" id="hidden_field_data_id_ativo" style="<?php echo $sStyleHidden_id_ativo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_ativo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_ativo_label"><span id="id_label_id_ativo"><?php echo $this->nm_new_label['id_ativo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_ativo"]) &&  $this->nmgp_cmp_readonly["id_ativo"] == "on") { 

 ?>
<input type="hidden" name="id_ativo" value="<?php echo $this->form_encode_input($id_ativo) . "\">" . $id_ativo . ""; ?>
<?php } else { ?>
<span id="id_read_on_id_ativo" class="sc-ui-readonly-id_ativo css_id_ativo_line" style="<?php echo $sStyleReadLab_id_ativo; ?>"><?php echo $this->form_encode_input($this->id_ativo); ?></span><span id="id_read_off_id_ativo" style="white-space: nowrap;<?php echo $sStyleReadInp_id_ativo; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_ativo_obj" style="" id="id_sc_field_id_ativo" type=text name="id_ativo" value="<?php echo $this->form_encode_input($id_ativo) ?>"
 size=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['id_ativo']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['id_ativo']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_ativo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_ativo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dt_cadastro']))
    {
        $this->nm_new_label['dt_cadastro'] = "Dt Cadastro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_dt_cadastro = $this->dt_cadastro;
   $this->dt_cadastro .= ' ' . $this->dt_cadastro_hora;
   $dt_cadastro = $this->dt_cadastro;
   $sStyleHidden_dt_cadastro = '';
   if (isset($this->nmgp_cmp_hidden['dt_cadastro']) && $this->nmgp_cmp_hidden['dt_cadastro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dt_cadastro']);
       $sStyleHidden_dt_cadastro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dt_cadastro = 'display: none;';
   $sStyleReadInp_dt_cadastro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dt_cadastro']) && $this->nmgp_cmp_readonly['dt_cadastro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dt_cadastro']);
       $sStyleReadLab_dt_cadastro = '';
       $sStyleReadInp_dt_cadastro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dt_cadastro']) && $this->nmgp_cmp_hidden['dt_cadastro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dt_cadastro" value="<?php echo $this->form_encode_input($dt_cadastro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dt_cadastro_line" id="hidden_field_data_dt_cadastro" style="<?php echo $sStyleHidden_dt_cadastro; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dt_cadastro_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dt_cadastro_label"><span id="id_label_dt_cadastro"><?php echo $this->nm_new_label['dt_cadastro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dt_cadastro"]) &&  $this->nmgp_cmp_readonly["dt_cadastro"] == "on") { 

 ?>
<input type="hidden" name="dt_cadastro" value="<?php echo $this->form_encode_input($dt_cadastro) . "\">" . $dt_cadastro . ""; ?>
<?php } else { ?>
<span id="id_read_on_dt_cadastro" class="sc-ui-readonly-dt_cadastro css_dt_cadastro_line" style="<?php echo $sStyleReadLab_dt_cadastro; ?>"><?php echo $this->form_encode_input($dt_cadastro); ?></span><span id="id_read_off_dt_cadastro" style="white-space: nowrap;<?php echo $sStyleReadInp_dt_cadastro; ?>">
 <input class="sc-js-input scFormObjectOdd css_dt_cadastro_obj" style="" id="id_sc_field_dt_cadastro" type=text name="dt_cadastro" value="<?php echo $this->form_encode_input($dt_cadastro) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['dt_cadastro']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dt_cadastro']['date_format']; ?>', timeSep: '<?php echo $this->field_config['dt_cadastro']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['dt_cadastro']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dt_cadastro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dt_cadastro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->dt_cadastro = $old_dt_dt_cadastro;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dt_atualiza']))
    {
        $this->nm_new_label['dt_atualiza'] = "Dt Atualiza";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_dt_atualiza = $this->dt_atualiza;
   $this->dt_atualiza .= ' ' . $this->dt_atualiza_hora;
   $dt_atualiza = $this->dt_atualiza;
   $sStyleHidden_dt_atualiza = '';
   if (isset($this->nmgp_cmp_hidden['dt_atualiza']) && $this->nmgp_cmp_hidden['dt_atualiza'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dt_atualiza']);
       $sStyleHidden_dt_atualiza = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dt_atualiza = 'display: none;';
   $sStyleReadInp_dt_atualiza = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dt_atualiza']) && $this->nmgp_cmp_readonly['dt_atualiza'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dt_atualiza']);
       $sStyleReadLab_dt_atualiza = '';
       $sStyleReadInp_dt_atualiza = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dt_atualiza']) && $this->nmgp_cmp_hidden['dt_atualiza'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dt_atualiza" value="<?php echo $this->form_encode_input($dt_atualiza) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dt_atualiza_line" id="hidden_field_data_dt_atualiza" style="<?php echo $sStyleHidden_dt_atualiza; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dt_atualiza_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dt_atualiza_label"><span id="id_label_dt_atualiza"><?php echo $this->nm_new_label['dt_atualiza']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dt_atualiza"]) &&  $this->nmgp_cmp_readonly["dt_atualiza"] == "on") { 

 ?>
<input type="hidden" name="dt_atualiza" value="<?php echo $this->form_encode_input($dt_atualiza) . "\">" . $dt_atualiza . ""; ?>
<?php } else { ?>
<span id="id_read_on_dt_atualiza" class="sc-ui-readonly-dt_atualiza css_dt_atualiza_line" style="<?php echo $sStyleReadLab_dt_atualiza; ?>"><?php echo $this->form_encode_input($dt_atualiza); ?></span><span id="id_read_off_dt_atualiza" style="white-space: nowrap;<?php echo $sStyleReadInp_dt_atualiza; ?>">
 <input class="sc-js-input scFormObjectOdd css_dt_atualiza_obj" style="" id="id_sc_field_dt_atualiza" type=text name="dt_atualiza" value="<?php echo $this->form_encode_input($dt_atualiza) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['dt_atualiza']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dt_atualiza']['date_format']; ?>', timeSep: '<?php echo $this->field_config['dt_atualiza']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['dt_atualiza']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dt_atualiza_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dt_atualiza_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->dt_atualiza = $old_dt_dt_atualiza;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['usu_cadastro']))
    {
        $this->nm_new_label['usu_cadastro'] = "Usu Cadastro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $usu_cadastro = $this->usu_cadastro;
   $sStyleHidden_usu_cadastro = '';
   if (isset($this->nmgp_cmp_hidden['usu_cadastro']) && $this->nmgp_cmp_hidden['usu_cadastro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['usu_cadastro']);
       $sStyleHidden_usu_cadastro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_usu_cadastro = 'display: none;';
   $sStyleReadInp_usu_cadastro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['usu_cadastro']) && $this->nmgp_cmp_readonly['usu_cadastro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['usu_cadastro']);
       $sStyleReadLab_usu_cadastro = '';
       $sStyleReadInp_usu_cadastro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['usu_cadastro']) && $this->nmgp_cmp_hidden['usu_cadastro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="usu_cadastro" value="<?php echo $this->form_encode_input($usu_cadastro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_usu_cadastro_line" id="hidden_field_data_usu_cadastro" style="<?php echo $sStyleHidden_usu_cadastro; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_usu_cadastro_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_usu_cadastro_label"><span id="id_label_usu_cadastro"><?php echo $this->nm_new_label['usu_cadastro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["usu_cadastro"]) &&  $this->nmgp_cmp_readonly["usu_cadastro"] == "on") { 

 ?>
<input type="hidden" name="usu_cadastro" value="<?php echo $this->form_encode_input($usu_cadastro) . "\">" . $usu_cadastro . ""; ?>
<?php } else { ?>
<span id="id_read_on_usu_cadastro" class="sc-ui-readonly-usu_cadastro css_usu_cadastro_line" style="<?php echo $sStyleReadLab_usu_cadastro; ?>"><?php echo $this->form_encode_input($this->usu_cadastro); ?></span><span id="id_read_off_usu_cadastro" style="white-space: nowrap;<?php echo $sStyleReadInp_usu_cadastro; ?>">
 <input class="sc-js-input scFormObjectOdd css_usu_cadastro_obj" style="" id="id_sc_field_usu_cadastro" type=text name="usu_cadastro" value="<?php echo $this->form_encode_input($usu_cadastro) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_usu_cadastro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_usu_cadastro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['usu_atualiza']))
    {
        $this->nm_new_label['usu_atualiza'] = "Usu Atualiza";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $usu_atualiza = $this->usu_atualiza;
   $sStyleHidden_usu_atualiza = '';
   if (isset($this->nmgp_cmp_hidden['usu_atualiza']) && $this->nmgp_cmp_hidden['usu_atualiza'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['usu_atualiza']);
       $sStyleHidden_usu_atualiza = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_usu_atualiza = 'display: none;';
   $sStyleReadInp_usu_atualiza = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['usu_atualiza']) && $this->nmgp_cmp_readonly['usu_atualiza'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['usu_atualiza']);
       $sStyleReadLab_usu_atualiza = '';
       $sStyleReadInp_usu_atualiza = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['usu_atualiza']) && $this->nmgp_cmp_hidden['usu_atualiza'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="usu_atualiza" value="<?php echo $this->form_encode_input($usu_atualiza) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_usu_atualiza_line" id="hidden_field_data_usu_atualiza" style="<?php echo $sStyleHidden_usu_atualiza; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_usu_atualiza_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_usu_atualiza_label"><span id="id_label_usu_atualiza"><?php echo $this->nm_new_label['usu_atualiza']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["usu_atualiza"]) &&  $this->nmgp_cmp_readonly["usu_atualiza"] == "on") { 

 ?>
<input type="hidden" name="usu_atualiza" value="<?php echo $this->form_encode_input($usu_atualiza) . "\">" . $usu_atualiza . ""; ?>
<?php } else { ?>
<span id="id_read_on_usu_atualiza" class="sc-ui-readonly-usu_atualiza css_usu_atualiza_line" style="<?php echo $sStyleReadLab_usu_atualiza; ?>"><?php echo $this->form_encode_input($this->usu_atualiza); ?></span><span id="id_read_off_usu_atualiza" style="white-space: nowrap;<?php echo $sStyleReadInp_usu_atualiza; ?>">
 <input class="sc-js-input scFormObjectOdd css_usu_atualiza_obj" style="" id="id_sc_field_usu_atualiza" type=text name="usu_atualiza" value="<?php echo $this->form_encode_input($usu_atualiza) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_usu_atualiza_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_usu_atualiza_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
<?php
  }
?>
</td></tr>
<tr><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
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
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
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
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['mostra_cab'] != "N"))
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
  $nm_sc_blocos_da_pag = array(0);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['masterValue']);
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
 parent.scAjaxDetailStatus("form_public_unidade_mob");
 parent.scAjaxDetailHeight("form_public_unidade_mob", <?php echo $sTamanhoIframe; ?>);
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
   parent.scAjaxDetailHeight("form_public_unidade_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_public_unidade_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_unidade_mob']['sc_modal'])
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
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
</body> 
</html> 
