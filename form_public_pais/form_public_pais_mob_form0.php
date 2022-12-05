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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - Pais"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - Pais"); } ?></TITLE>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_public_pais/form_public_pais_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_public_pais_mob_sajax_js.php");
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

include_once('form_public_pais_mob_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['recarga'];
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
 include_once("form_public_pais_mob_js0.php");
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
               action="form_public_pais_mob.php" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_public_pais_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_public_pais_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['mostra_cab'] != "N"))
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
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - Pais"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - Pais"; } ?></span></td>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['fast_search'][2] : "";
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
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['empty_filter'] = true;
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
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_pais']))
           {
               $this->nmgp_cmp_readonly['id_pais'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_pais']))
    {
        $this->nm_new_label['id_pais'] = "ID Pais";
    }
?>
<?php
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
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_pais"]) &&  $this->nmgp_cmp_readonly["id_pais"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_pais']);
       $sStyleReadLab_id_pais = '';
       $sStyleReadInp_id_pais = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_pais']) && $this->nmgp_cmp_hidden['id_pais'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_pais" value="<?php echo $this->form_encode_input($id_pais) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_pais_line" id="hidden_field_data_id_pais" style="<?php echo $sStyleHidden_id_pais; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_pais_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_pais_label"><span id="id_label_id_pais"><?php echo $this->nm_new_label['id_pais']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['php_cmp_required']['id_pais']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['php_cmp_required']['id_pais'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["id_pais"]) &&  $this->nmgp_cmp_readonly["id_pais"] == "on")) { 

 ?>
<input type="hidden" name="id_pais" value="<?php echo $this->form_encode_input($id_pais) . "\"><span id=\"id_ajax_label_id_pais\">" . $id_pais . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_id_pais" class="sc-ui-readonly-id_pais css_id_pais_line" style="<?php echo $sStyleReadLab_id_pais; ?>"><?php echo $this->form_encode_input($this->id_pais); ?></span><span id="id_read_off_id_pais" style="white-space: nowrap;<?php echo $sStyleReadInp_id_pais; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_pais_obj" style="" id="id_sc_field_id_pais" type=text name="id_pais" value="<?php echo $this->form_encode_input($id_pais) ?>"
 size=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['id_pais']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['id_pais']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_pais_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_pais_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais_ibge_cod']))
    {
        $this->nm_new_label['pais_ibge_cod'] = "Pais IBGE Cod.";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_ibge_cod = $this->pais_ibge_cod;
   $sStyleHidden_pais_ibge_cod = '';
   if (isset($this->nmgp_cmp_hidden['pais_ibge_cod']) && $this->nmgp_cmp_hidden['pais_ibge_cod'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_ibge_cod']);
       $sStyleHidden_pais_ibge_cod = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_ibge_cod = 'display: none;';
   $sStyleReadInp_pais_ibge_cod = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_ibge_cod']) && $this->nmgp_cmp_readonly['pais_ibge_cod'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_ibge_cod']);
       $sStyleReadLab_pais_ibge_cod = '';
       $sStyleReadInp_pais_ibge_cod = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_ibge_cod']) && $this->nmgp_cmp_hidden['pais_ibge_cod'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_ibge_cod" value="<?php echo $this->form_encode_input($pais_ibge_cod) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_ibge_cod_line" id="hidden_field_data_pais_ibge_cod" style="<?php echo $sStyleHidden_pais_ibge_cod; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_ibge_cod_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_ibge_cod_label"><span id="id_label_pais_ibge_cod"><?php echo $this->nm_new_label['pais_ibge_cod']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_ibge_cod"]) &&  $this->nmgp_cmp_readonly["pais_ibge_cod"] == "on") { 

 ?>
<input type="hidden" name="pais_ibge_cod" value="<?php echo $this->form_encode_input($pais_ibge_cod) . "\">" . $pais_ibge_cod . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_ibge_cod" class="sc-ui-readonly-pais_ibge_cod css_pais_ibge_cod_line" style="<?php echo $sStyleReadLab_pais_ibge_cod; ?>"><?php echo $this->form_encode_input($this->pais_ibge_cod); ?></span><span id="id_read_off_pais_ibge_cod" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_ibge_cod; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_ibge_cod_obj" style="" id="id_sc_field_pais_ibge_cod" type=text name="pais_ibge_cod" value="<?php echo $this->form_encode_input($pais_ibge_cod) ?>"
 size=3 maxlength=3 alt="{datatype: 'text', maxLength: 3, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_ibge_cod_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_ibge_cod_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais_nm_pais_ter_ptb']))
    {
        $this->nm_new_label['pais_nm_pais_ter_ptb'] = "Pais Nm Pais Ter Ptb";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_nm_pais_ter_ptb = $this->pais_nm_pais_ter_ptb;
   $sStyleHidden_pais_nm_pais_ter_ptb = '';
   if (isset($this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb']) && $this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb']);
       $sStyleHidden_pais_nm_pais_ter_ptb = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_nm_pais_ter_ptb = 'display: none;';
   $sStyleReadInp_pais_nm_pais_ter_ptb = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_nm_pais_ter_ptb']) && $this->nmgp_cmp_readonly['pais_nm_pais_ter_ptb'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_nm_pais_ter_ptb']);
       $sStyleReadLab_pais_nm_pais_ter_ptb = '';
       $sStyleReadInp_pais_nm_pais_ter_ptb = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb']) && $this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_nm_pais_ter_ptb" value="<?php echo $this->form_encode_input($pais_nm_pais_ter_ptb) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_nm_pais_ter_ptb_line" id="hidden_field_data_pais_nm_pais_ter_ptb" style="<?php echo $sStyleHidden_pais_nm_pais_ter_ptb; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_nm_pais_ter_ptb_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_nm_pais_ter_ptb_label"><span id="id_label_pais_nm_pais_ter_ptb"><?php echo $this->nm_new_label['pais_nm_pais_ter_ptb']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_nm_pais_ter_ptb"]) &&  $this->nmgp_cmp_readonly["pais_nm_pais_ter_ptb"] == "on") { 

 ?>
<input type="hidden" name="pais_nm_pais_ter_ptb" value="<?php echo $this->form_encode_input($pais_nm_pais_ter_ptb) . "\">" . $pais_nm_pais_ter_ptb . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_nm_pais_ter_ptb" class="sc-ui-readonly-pais_nm_pais_ter_ptb css_pais_nm_pais_ter_ptb_line" style="<?php echo $sStyleReadLab_pais_nm_pais_ter_ptb; ?>"><?php echo $this->form_encode_input($this->pais_nm_pais_ter_ptb); ?></span><span id="id_read_off_pais_nm_pais_ter_ptb" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_nm_pais_ter_ptb; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_nm_pais_ter_ptb_obj" style="" id="id_sc_field_pais_nm_pais_ter_ptb" type=text name="pais_nm_pais_ter_ptb" value="<?php echo $this->form_encode_input($pais_nm_pais_ter_ptb) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_nm_pais_ter_ptb_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_nm_pais_ter_ptb_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais_iso_alpha3_cod']))
    {
        $this->nm_new_label['pais_iso_alpha3_cod'] = "Pais ISO Alpha 3 Cod";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_iso_alpha3_cod = $this->pais_iso_alpha3_cod;
   $sStyleHidden_pais_iso_alpha3_cod = '';
   if (isset($this->nmgp_cmp_hidden['pais_iso_alpha3_cod']) && $this->nmgp_cmp_hidden['pais_iso_alpha3_cod'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_iso_alpha3_cod']);
       $sStyleHidden_pais_iso_alpha3_cod = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_iso_alpha3_cod = 'display: none;';
   $sStyleReadInp_pais_iso_alpha3_cod = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_iso_alpha3_cod']) && $this->nmgp_cmp_readonly['pais_iso_alpha3_cod'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_iso_alpha3_cod']);
       $sStyleReadLab_pais_iso_alpha3_cod = '';
       $sStyleReadInp_pais_iso_alpha3_cod = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_iso_alpha3_cod']) && $this->nmgp_cmp_hidden['pais_iso_alpha3_cod'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_iso_alpha3_cod" value="<?php echo $this->form_encode_input($pais_iso_alpha3_cod) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_iso_alpha3_cod_line" id="hidden_field_data_pais_iso_alpha3_cod" style="<?php echo $sStyleHidden_pais_iso_alpha3_cod; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_iso_alpha3_cod_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_iso_alpha3_cod_label"><span id="id_label_pais_iso_alpha3_cod"><?php echo $this->nm_new_label['pais_iso_alpha3_cod']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_iso_alpha3_cod"]) &&  $this->nmgp_cmp_readonly["pais_iso_alpha3_cod"] == "on") { 

 ?>
<input type="hidden" name="pais_iso_alpha3_cod" value="<?php echo $this->form_encode_input($pais_iso_alpha3_cod) . "\">" . $pais_iso_alpha3_cod . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_iso_alpha3_cod" class="sc-ui-readonly-pais_iso_alpha3_cod css_pais_iso_alpha3_cod_line" style="<?php echo $sStyleReadLab_pais_iso_alpha3_cod; ?>"><?php echo $this->form_encode_input($this->pais_iso_alpha3_cod); ?></span><span id="id_read_off_pais_iso_alpha3_cod" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_iso_alpha3_cod; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_iso_alpha3_cod_obj" style="" id="id_sc_field_pais_iso_alpha3_cod" type=text name="pais_iso_alpha3_cod" value="<?php echo $this->form_encode_input($pais_iso_alpha3_cod) ?>"
 size=3 maxlength=3 alt="{datatype: 'text', maxLength: 3, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_iso_alpha3_cod_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_iso_alpha3_cod_text"></span></td></tr></table></td></tr></table> </TD>
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





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_merge']))
    {
        $this->nm_new_label['id_merge'] = "ID Merge";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_merge = $this->id_merge;
   $sStyleHidden_id_merge = '';
   if (isset($this->nmgp_cmp_hidden['id_merge']) && $this->nmgp_cmp_hidden['id_merge'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_merge']);
       $sStyleHidden_id_merge = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_merge = 'display: none;';
   $sStyleReadInp_id_merge = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_merge']) && $this->nmgp_cmp_readonly['id_merge'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_merge']);
       $sStyleReadLab_id_merge = '';
       $sStyleReadInp_id_merge = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_merge']) && $this->nmgp_cmp_hidden['id_merge'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_merge" value="<?php echo $this->form_encode_input($id_merge) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_merge_line" id="hidden_field_data_id_merge" style="<?php echo $sStyleHidden_id_merge; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_merge_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_merge_label"><span id="id_label_id_merge"><?php echo $this->nm_new_label['id_merge']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_merge"]) &&  $this->nmgp_cmp_readonly["id_merge"] == "on") { 

 ?>
<input type="hidden" name="id_merge" value="<?php echo $this->form_encode_input($id_merge) . "\">" . $id_merge . ""; ?>
<?php } else { ?>
<span id="id_read_on_id_merge" class="sc-ui-readonly-id_merge css_id_merge_line" style="<?php echo $sStyleReadLab_id_merge; ?>"><?php echo $this->form_encode_input($this->id_merge); ?></span><span id="id_read_off_id_merge" style="white-space: nowrap;<?php echo $sStyleReadInp_id_merge; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_merge_obj" style="" id="id_sc_field_id_merge" type=text name="id_merge" value="<?php echo $this->form_encode_input($id_merge) ?>"
 size=50 maxlength=64 alt="{datatype: 'text', maxLength: 64, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_merge_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_merge_text"></span></td></tr></table></td></tr></table> </TD>
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
        $this->nm_new_label['id_ativo'] = "ID Ativo";
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
    if (!isset($this->nm_new_label['pais_nm_pais_ter_ptb2']))
    {
        $this->nm_new_label['pais_nm_pais_ter_ptb2'] = "Pais Nm Pais Ter Ptb 2";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_nm_pais_ter_ptb2 = $this->pais_nm_pais_ter_ptb2;
   $sStyleHidden_pais_nm_pais_ter_ptb2 = '';
   if (isset($this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb2']) && $this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb2']);
       $sStyleHidden_pais_nm_pais_ter_ptb2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_nm_pais_ter_ptb2 = 'display: none;';
   $sStyleReadInp_pais_nm_pais_ter_ptb2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_nm_pais_ter_ptb2']) && $this->nmgp_cmp_readonly['pais_nm_pais_ter_ptb2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_nm_pais_ter_ptb2']);
       $sStyleReadLab_pais_nm_pais_ter_ptb2 = '';
       $sStyleReadInp_pais_nm_pais_ter_ptb2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb2']) && $this->nmgp_cmp_hidden['pais_nm_pais_ter_ptb2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_nm_pais_ter_ptb2" value="<?php echo $this->form_encode_input($pais_nm_pais_ter_ptb2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_nm_pais_ter_ptb2_line" id="hidden_field_data_pais_nm_pais_ter_ptb2" style="<?php echo $sStyleHidden_pais_nm_pais_ter_ptb2; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_nm_pais_ter_ptb2_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_nm_pais_ter_ptb2_label"><span id="id_label_pais_nm_pais_ter_ptb2"><?php echo $this->nm_new_label['pais_nm_pais_ter_ptb2']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_nm_pais_ter_ptb2"]) &&  $this->nmgp_cmp_readonly["pais_nm_pais_ter_ptb2"] == "on") { 

 ?>
<input type="hidden" name="pais_nm_pais_ter_ptb2" value="<?php echo $this->form_encode_input($pais_nm_pais_ter_ptb2) . "\">" . $pais_nm_pais_ter_ptb2 . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_nm_pais_ter_ptb2" class="sc-ui-readonly-pais_nm_pais_ter_ptb2 css_pais_nm_pais_ter_ptb2_line" style="<?php echo $sStyleReadLab_pais_nm_pais_ter_ptb2; ?>"><?php echo $this->form_encode_input($this->pais_nm_pais_ter_ptb2); ?></span><span id="id_read_off_pais_nm_pais_ter_ptb2" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_nm_pais_ter_ptb2; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_nm_pais_ter_ptb2_obj" style="" id="id_sc_field_pais_nm_pais_ter_ptb2" type=text name="pais_nm_pais_ter_ptb2" value="<?php echo $this->form_encode_input($pais_nm_pais_ter_ptb2) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_nm_pais_ter_ptb2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_nm_pais_ter_ptb2_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais_sigla']))
    {
        $this->nm_new_label['pais_sigla'] = "Pais Sigla";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_sigla = $this->pais_sigla;
   $sStyleHidden_pais_sigla = '';
   if (isset($this->nmgp_cmp_hidden['pais_sigla']) && $this->nmgp_cmp_hidden['pais_sigla'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_sigla']);
       $sStyleHidden_pais_sigla = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_sigla = 'display: none;';
   $sStyleReadInp_pais_sigla = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_sigla']) && $this->nmgp_cmp_readonly['pais_sigla'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_sigla']);
       $sStyleReadLab_pais_sigla = '';
       $sStyleReadInp_pais_sigla = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_sigla']) && $this->nmgp_cmp_hidden['pais_sigla'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_sigla" value="<?php echo $this->form_encode_input($pais_sigla) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_sigla_line" id="hidden_field_data_pais_sigla" style="<?php echo $sStyleHidden_pais_sigla; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_sigla_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_sigla_label"><span id="id_label_pais_sigla"><?php echo $this->nm_new_label['pais_sigla']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_sigla"]) &&  $this->nmgp_cmp_readonly["pais_sigla"] == "on") { 

 ?>
<input type="hidden" name="pais_sigla" value="<?php echo $this->form_encode_input($pais_sigla) . "\">" . $pais_sigla . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_sigla" class="sc-ui-readonly-pais_sigla css_pais_sigla_line" style="<?php echo $sStyleReadLab_pais_sigla; ?>"><?php echo $this->form_encode_input($this->pais_sigla); ?></span><span id="id_read_off_pais_sigla" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_sigla; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_sigla_obj" style="" id="id_sc_field_pais_sigla" type=text name="pais_sigla" value="<?php echo $this->form_encode_input($pais_sigla) ?>"
 size=25 maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_sigla_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_sigla_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais_capital']))
    {
        $this->nm_new_label['pais_capital'] = "Pais Capital";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_capital = $this->pais_capital;
   $sStyleHidden_pais_capital = '';
   if (isset($this->nmgp_cmp_hidden['pais_capital']) && $this->nmgp_cmp_hidden['pais_capital'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_capital']);
       $sStyleHidden_pais_capital = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_capital = 'display: none;';
   $sStyleReadInp_pais_capital = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_capital']) && $this->nmgp_cmp_readonly['pais_capital'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_capital']);
       $sStyleReadLab_pais_capital = '';
       $sStyleReadInp_pais_capital = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_capital']) && $this->nmgp_cmp_hidden['pais_capital'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_capital" value="<?php echo $this->form_encode_input($pais_capital) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_capital_line" id="hidden_field_data_pais_capital" style="<?php echo $sStyleHidden_pais_capital; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_capital_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_capital_label"><span id="id_label_pais_capital"><?php echo $this->nm_new_label['pais_capital']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_capital"]) &&  $this->nmgp_cmp_readonly["pais_capital"] == "on") { 

 ?>
<input type="hidden" name="pais_capital" value="<?php echo $this->form_encode_input($pais_capital) . "\">" . $pais_capital . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_capital" class="sc-ui-readonly-pais_capital css_pais_capital_line" style="<?php echo $sStyleReadLab_pais_capital; ?>"><?php echo $this->form_encode_input($this->pais_capital); ?></span><span id="id_read_off_pais_capital" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_capital; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_capital_obj" style="" id="id_sc_field_pais_capital" type=text name="pais_capital" value="<?php echo $this->form_encode_input($pais_capital) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_capital_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_capital_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais_moeda']))
    {
        $this->nm_new_label['pais_moeda'] = "Pais Moeda";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_moeda = $this->pais_moeda;
   $sStyleHidden_pais_moeda = '';
   if (isset($this->nmgp_cmp_hidden['pais_moeda']) && $this->nmgp_cmp_hidden['pais_moeda'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_moeda']);
       $sStyleHidden_pais_moeda = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_moeda = 'display: none;';
   $sStyleReadInp_pais_moeda = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_moeda']) && $this->nmgp_cmp_readonly['pais_moeda'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_moeda']);
       $sStyleReadLab_pais_moeda = '';
       $sStyleReadInp_pais_moeda = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_moeda']) && $this->nmgp_cmp_hidden['pais_moeda'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_moeda" value="<?php echo $this->form_encode_input($pais_moeda) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_moeda_line" id="hidden_field_data_pais_moeda" style="<?php echo $sStyleHidden_pais_moeda; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_moeda_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_moeda_label"><span id="id_label_pais_moeda"><?php echo $this->nm_new_label['pais_moeda']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_moeda"]) &&  $this->nmgp_cmp_readonly["pais_moeda"] == "on") { 

 ?>
<input type="hidden" name="pais_moeda" value="<?php echo $this->form_encode_input($pais_moeda) . "\">" . $pais_moeda . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_moeda" class="sc-ui-readonly-pais_moeda css_pais_moeda_line" style="<?php echo $sStyleReadLab_pais_moeda; ?>"><?php echo $this->form_encode_input($this->pais_moeda); ?></span><span id="id_read_off_pais_moeda" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_moeda; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_moeda_obj" style="" id="id_sc_field_pais_moeda" type=text name="pais_moeda" value="<?php echo $this->form_encode_input($pais_moeda) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_moeda_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_moeda_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_moeda']))
    {
        $this->nm_new_label['id_moeda'] = "Id Moeda";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_moeda = $this->id_moeda;
   $sStyleHidden_id_moeda = '';
   if (isset($this->nmgp_cmp_hidden['id_moeda']) && $this->nmgp_cmp_hidden['id_moeda'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_moeda']);
       $sStyleHidden_id_moeda = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_moeda = 'display: none;';
   $sStyleReadInp_id_moeda = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_moeda']) && $this->nmgp_cmp_readonly['id_moeda'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_moeda']);
       $sStyleReadLab_id_moeda = '';
       $sStyleReadInp_id_moeda = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_moeda']) && $this->nmgp_cmp_hidden['id_moeda'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_moeda" value="<?php echo $this->form_encode_input($id_moeda) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_moeda_line" id="hidden_field_data_id_moeda" style="<?php echo $sStyleHidden_id_moeda; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_moeda_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_moeda_label"><span id="id_label_id_moeda"><?php echo $this->nm_new_label['id_moeda']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_moeda"]) &&  $this->nmgp_cmp_readonly["id_moeda"] == "on") { 

 ?>
<input type="hidden" name="id_moeda" value="<?php echo $this->form_encode_input($id_moeda) . "\">" . $id_moeda . ""; ?>
<?php } else { ?>
<span id="id_read_on_id_moeda" class="sc-ui-readonly-id_moeda css_id_moeda_line" style="<?php echo $sStyleReadLab_id_moeda; ?>"><?php echo $this->form_encode_input($this->id_moeda); ?></span><span id="id_read_off_id_moeda" style="white-space: nowrap;<?php echo $sStyleReadInp_id_moeda; ?>">
 <input class="sc-js-input scFormObjectOdd css_id_moeda_obj" style="" id="id_sc_field_id_moeda" type=text name="id_moeda" value="<?php echo $this->form_encode_input($id_moeda) ?>"
 size=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['id_moeda']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['id_moeda']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_moeda_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_moeda_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais_idioma']))
    {
        $this->nm_new_label['pais_idioma'] = "Pais Idioma";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_idioma = $this->pais_idioma;
   $sStyleHidden_pais_idioma = '';
   if (isset($this->nmgp_cmp_hidden['pais_idioma']) && $this->nmgp_cmp_hidden['pais_idioma'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_idioma']);
       $sStyleHidden_pais_idioma = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_idioma = 'display: none;';
   $sStyleReadInp_pais_idioma = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_idioma']) && $this->nmgp_cmp_readonly['pais_idioma'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_idioma']);
       $sStyleReadLab_pais_idioma = '';
       $sStyleReadInp_pais_idioma = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_idioma']) && $this->nmgp_cmp_hidden['pais_idioma'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_idioma" value="<?php echo $this->form_encode_input($pais_idioma) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_idioma_line" id="hidden_field_data_pais_idioma" style="<?php echo $sStyleHidden_pais_idioma; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_idioma_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_idioma_label"><span id="id_label_pais_idioma"><?php echo $this->nm_new_label['pais_idioma']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_idioma"]) &&  $this->nmgp_cmp_readonly["pais_idioma"] == "on") { 

 ?>
<input type="hidden" name="pais_idioma" value="<?php echo $this->form_encode_input($pais_idioma) . "\">" . $pais_idioma . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_idioma" class="sc-ui-readonly-pais_idioma css_pais_idioma_line" style="<?php echo $sStyleReadLab_pais_idioma; ?>"><?php echo $this->form_encode_input($this->pais_idioma); ?></span><span id="id_read_off_pais_idioma" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_idioma; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_idioma_obj" style="" id="id_sc_field_pais_idioma" type=text name="pais_idioma" value="<?php echo $this->form_encode_input($pais_idioma) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_idioma_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_idioma_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais_dominio']))
    {
        $this->nm_new_label['pais_dominio'] = "Pais Dominio";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_dominio = $this->pais_dominio;
   $sStyleHidden_pais_dominio = '';
   if (isset($this->nmgp_cmp_hidden['pais_dominio']) && $this->nmgp_cmp_hidden['pais_dominio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_dominio']);
       $sStyleHidden_pais_dominio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_dominio = 'display: none;';
   $sStyleReadInp_pais_dominio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_dominio']) && $this->nmgp_cmp_readonly['pais_dominio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_dominio']);
       $sStyleReadLab_pais_dominio = '';
       $sStyleReadInp_pais_dominio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_dominio']) && $this->nmgp_cmp_hidden['pais_dominio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_dominio" value="<?php echo $this->form_encode_input($pais_dominio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_dominio_line" id="hidden_field_data_pais_dominio" style="<?php echo $sStyleHidden_pais_dominio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_dominio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_dominio_label"><span id="id_label_pais_dominio"><?php echo $this->nm_new_label['pais_dominio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_dominio"]) &&  $this->nmgp_cmp_readonly["pais_dominio"] == "on") { 

 ?>
<input type="hidden" name="pais_dominio" value="<?php echo $this->form_encode_input($pais_dominio) . "\">" . $pais_dominio . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_dominio" class="sc-ui-readonly-pais_dominio css_pais_dominio_line" style="<?php echo $sStyleReadLab_pais_dominio; ?>"><?php echo $this->form_encode_input($this->pais_dominio); ?></span><span id="id_read_off_pais_dominio" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_dominio; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_dominio_obj" style="" id="id_sc_field_pais_dominio" type=text name="pais_dominio" value="<?php echo $this->form_encode_input($pais_dominio) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_dominio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_dominio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais_obs']))
    {
        $this->nm_new_label['pais_obs'] = "Pais Obs";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais_obs = $this->pais_obs;
   $sStyleHidden_pais_obs = '';
   if (isset($this->nmgp_cmp_hidden['pais_obs']) && $this->nmgp_cmp_hidden['pais_obs'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais_obs']);
       $sStyleHidden_pais_obs = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais_obs = 'display: none;';
   $sStyleReadInp_pais_obs = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais_obs']) && $this->nmgp_cmp_readonly['pais_obs'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais_obs']);
       $sStyleReadLab_pais_obs = '';
       $sStyleReadInp_pais_obs = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais_obs']) && $this->nmgp_cmp_hidden['pais_obs'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais_obs" value="<?php echo $this->form_encode_input($pais_obs) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pais_obs_line" id="hidden_field_data_pais_obs" style="<?php echo $sStyleHidden_pais_obs; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_obs_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pais_obs_label"><span id="id_label_pais_obs"><?php echo $this->nm_new_label['pais_obs']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais_obs"]) &&  $this->nmgp_cmp_readonly["pais_obs"] == "on") { 

 ?>
<input type="hidden" name="pais_obs" value="<?php echo $this->form_encode_input($pais_obs) . "\">" . $pais_obs . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais_obs" class="sc-ui-readonly-pais_obs css_pais_obs_line" style="<?php echo $sStyleReadLab_pais_obs; ?>"><?php echo $this->form_encode_input($this->pais_obs); ?></span><span id="id_read_off_pais_obs" style="white-space: nowrap;<?php echo $sStyleReadInp_pais_obs; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_obs_obj" style="" id="id_sc_field_pais_obs" type=text name="pais_obs" value="<?php echo $this->form_encode_input($pais_obs) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_obs_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_obs_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R")
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['mostra_cab'] != "N"))
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['masterValue']);
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
 parent.scAjaxDetailStatus("form_public_pais_mob");
 parent.scAjaxDetailHeight("form_public_pais_mob", <?php echo $sTamanhoIframe; ?>);
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
   parent.scAjaxDetailHeight("form_public_pais_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_public_pais_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pais_mob']['sc_modal'])
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
