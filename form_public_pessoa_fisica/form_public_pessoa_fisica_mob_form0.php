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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - Pessoa Física"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - Pessoa Física"); } ?></TITLE>
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
 <link rel='stylesheet' href='<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/multiple-select/multiple-select.css' type='text/css'/>
 <script type='text/javascript' src='<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/multiple-select/jquery.multiple.select.js'></script>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_grid.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_grid<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_filter.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_filter<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_public_pessoa_fisica/form_public_pessoa_fisica_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_public_pessoa_fisica_mob_sajax_js.php");
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

include_once('form_public_pessoa_fisica_mob_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
<?php
  if (is_file($this->Ini->root . $this->Ini->path_link . "_lib/js/tab_erro_" . $this->Ini->str_lang . ".js"))
  {
      $Tb_err_js = file($this->Ini->root . $this->Ini->path_link . "_lib/js/tab_erro_" . $this->Ini->str_lang . ".js");
      foreach ($Tb_err_js as $Lines)
      {
          if (NM_is_utf8($Lines) && $_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Lines = sc_convert_encoding($Lines, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          echo " " . $Lines;
      }
  }
  if (NM_is_utf8($Lines) && $_SESSION['scriptcase']['charset'] != "UTF-8")
  {
      $Msg_Inval = sc_convert_encoding("Inv⭩do", $_SESSION['scriptcase']['charset'], "UTF-8");
  }
  echo " var SC_crit_inv = \"" . $Msg_Inval . "\";\r\n";
?>
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/nm_rpc.js" ?>"> 
</script> 
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
 include_once("form_public_pessoa_fisica_mob_js0.php");
?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/nm_rpc.js" ?>"> 
</script> 
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
<form id= "id_Fdyn_search" name="F1" method="post" 
               action="form_public_pessoa_fisica_mob.php" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_public_pessoa_fisica_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_public_pessoa_fisica_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['mostra_cab'] != "N"))
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
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - Pessoa Física"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - Pessoa Física"; } ?></span></td>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['fast_search'][2] : "";
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
        $sCondStyle = ($opcao_botoes != "novo" &&  $this->nmgp_botoes['dynsearch'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bdynamicsearch", "if($('#id_dyn_search_cmd_str').html() != ''){ $('#id_dyn_search_cmd_string').toggle(); } $('#div_dyn_search').toggle();", "if($('#id_dyn_search_cmd_str').html() != ''){ $('#id_dyn_search_cmd_string').toggle(); } $('#div_dyn_search').toggle();", "dynamic_search_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
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
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['run_iframe'] != "R")
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
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['dyn_refresh'] = array();
$this->html_dynamic_search();
?>
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['empty_filter'] = true;
       }
  }
  else
  {
?>
<script type="text/javascript">
var pag_ativa = "form_public_pessoa_fisica_mob_form0";
</script>
<ul class="scTabLine">
<?php
    if ($nmgp_num_form == "form_public_pessoa_fisica_mob_form0")
    {
        $css_celula = "scTabActive";
    }
    else
    {
        $css_celula = "scTabInactive";
    }
?>
   <li id="id_form_public_pessoa_fisica_mob_form0" class="<?php echo $css_celula; ?>">
    <a href="javascript: sc_exib_ocult_pag ('form_public_pessoa_fisica_mob_form0')">
     Principal
    </a>
   </li>
<?php
    if ($nmgp_num_form == "form_public_pessoa_fisica_mob_form1")
    {
        $css_celula = "scTabActive";
    }
    else
    {
        $css_celula = "scTabInactive";
    }
?>
   <li id="id_form_public_pessoa_fisica_mob_form1" class="<?php echo $css_celula; ?>">
    <a href="javascript: sc_exib_ocult_pag ('form_public_pessoa_fisica_mob_form1')">
     Endereço
    </a>
   </li>
<?php
    if ($nmgp_num_form == "form_public_pessoa_fisica_mob_form2")
    {
        $css_celula = "scTabActive";
    }
    else
    {
        $css_celula = "scTabInactive";
    }
?>
   <li id="id_form_public_pessoa_fisica_mob_form2" class="<?php echo $css_celula; ?>">
    <a href="javascript: sc_exib_ocult_pag ('form_public_pessoa_fisica_mob_form2')">
     Endereço Cobrança
    </a>
   </li>
<?php
    if ($nmgp_num_form == "form_public_pessoa_fisica_mob_form3")
    {
        $css_celula = "scTabActive";
    }
    else
    {
        $css_celula = "scTabInactive";
    }
?>
   <li id="id_form_public_pessoa_fisica_mob_form3" class="<?php echo $css_celula; ?>">
    <a href="javascript: sc_exib_ocult_pag ('form_public_pessoa_fisica_mob_form3')">
     Documentos
    </a>
   </li>
</ul>
<div style='clear:both'></div>
</td></tr> 
<tr><td style="padding: 0px">
<div id="form_public_pessoa_fisica_mob_form0" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_pessoa_fisica']))
           {
               $this->nmgp_cmp_readonly['id_pessoa_fisica'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['id_pessoa_fisica']))
    {
        $this->nm_new_label['id_pessoa_fisica'] = "ID Pessoa Fisica";
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
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_pessoa_fisica"]) &&  $this->nmgp_cmp_readonly["id_pessoa_fisica"] == "on"))
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
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd css_id_pessoa_fisica_line" id="hidden_field_data_id_pessoa_fisica" style="<?php echo $sStyleHidden_id_pessoa_fisica; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_pessoa_fisica_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_pessoa_fisica_label"><span id="id_label_id_pessoa_fisica"><?php echo $this->nm_new_label['id_pessoa_fisica']; ?></span></span><br><span id="id_read_on_id_pessoa_fisica" class="css_id_pessoa_fisica_line" style="<?php echo $sStyleReadLab_id_pessoa_fisica; ?>"><?php echo $this->form_encode_input($this->id_pessoa_fisica); ?></span><span id="id_read_off_id_pessoa_fisica" style="<?php echo $sStyleReadInp_id_pessoa_fisica; ?>"><input type="hidden" name="id_pessoa_fisica" value="<?php echo $this->form_encode_input($id_pessoa_fisica) . "\">"?><span id="id_ajax_label_id_pessoa_fisica"><?php echo nl2br($id_pessoa_fisica); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_pessoa_fisica_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_pessoa_fisica_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cpf']))
    {
        $this->nm_new_label['cpf'] = "CPF";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cpf = $this->cpf;
   $sStyleHidden_cpf = '';
   if (isset($this->nmgp_cmp_hidden['cpf']) && $this->nmgp_cmp_hidden['cpf'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cpf']);
       $sStyleHidden_cpf = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cpf = 'display: none;';
   $sStyleReadInp_cpf = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cpf']) && $this->nmgp_cmp_readonly['cpf'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cpf']);
       $sStyleReadLab_cpf = '';
       $sStyleReadInp_cpf = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cpf']) && $this->nmgp_cmp_hidden['cpf'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cpf" value="<?php echo $this->form_encode_input($cpf) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cpf_line" id="hidden_field_data_cpf" style="<?php echo $sStyleHidden_cpf; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cpf_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cpf_label"><span id="id_label_cpf"><?php echo $this->nm_new_label['cpf']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cpf"]) &&  $this->nmgp_cmp_readonly["cpf"] == "on") { 

 ?>
<input type="hidden" name="cpf" value="<?php echo $this->form_encode_input($cpf) . "\">" . $cpf . ""; ?>
<?php } else { ?>
<span id="id_read_on_cpf" class="sc-ui-readonly-cpf css_cpf_line" style="<?php echo $sStyleReadLab_cpf; ?>"><?php echo $this->form_encode_input($this->cpf); ?></span><span id="id_read_off_cpf" style="white-space: nowrap;<?php echo $sStyleReadInp_cpf; ?>">
 <input class="sc-js-input scFormObjectOdd css_cpf_obj" style="" id="id_sc_field_cpf" type=text name="cpf" value="<?php echo $this->form_encode_input($cpf) ?>"
 size=17 alt="{datatype: 'cpf', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cpf_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cpf_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nome']))
    {
        $this->nm_new_label['nome'] = "Nome";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nome = $this->nome;
   $sStyleHidden_nome = '';
   if (isset($this->nmgp_cmp_hidden['nome']) && $this->nmgp_cmp_hidden['nome'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nome']);
       $sStyleHidden_nome = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nome = 'display: none;';
   $sStyleReadInp_nome = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nome']) && $this->nmgp_cmp_readonly['nome'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nome']);
       $sStyleReadLab_nome = '';
       $sStyleReadInp_nome = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nome']) && $this->nmgp_cmp_hidden['nome'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nome" value="<?php echo $this->form_encode_input($nome) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nome_line" id="hidden_field_data_nome" style="<?php echo $sStyleHidden_nome; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nome_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nome_label"><span id="id_label_nome"><?php echo $this->nm_new_label['nome']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nome"]) &&  $this->nmgp_cmp_readonly["nome"] == "on") { 

 ?>
<input type="hidden" name="nome" value="<?php echo $this->form_encode_input($nome) . "\">" . $nome . ""; ?>
<?php } else { ?>
<span id="id_read_on_nome" class="sc-ui-readonly-nome css_nome_line" style="<?php echo $sStyleReadLab_nome; ?>"><?php echo $this->form_encode_input($this->nome); ?></span><span id="id_read_off_nome" style="white-space: nowrap;<?php echo $sStyleReadInp_nome; ?>">
 <input class="sc-js-input scFormObjectOdd css_nome_obj" style="" id="id_sc_field_nome" type=text name="nome" value="<?php echo $this->form_encode_input($nome) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nome_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nome_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sexo']))
   {
       $this->nm_new_label['sexo'] = "Sexo";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sexo = $this->sexo;
   $sStyleHidden_sexo = '';
   if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sexo']);
       $sStyleHidden_sexo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sexo = 'display: none;';
   $sStyleReadInp_sexo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sexo']) && $this->nmgp_cmp_readonly['sexo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sexo']);
       $sStyleReadLab_sexo = '';
       $sStyleReadInp_sexo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sexo" value="<?php echo $this->form_encode_input($this->sexo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sexo_line" id="hidden_field_data_sexo" style="<?php echo $sStyleHidden_sexo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sexo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sexo_label"><span id="id_label_sexo"><?php echo $this->nm_new_label['sexo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sexo"]) &&  $this->nmgp_cmp_readonly["sexo"] == "on") { 

$sexo_look = "";
 if ($this->sexo == "M") { $sexo_look .= "Masculino" ;} 
 if ($this->sexo == "F") { $sexo_look .= "Feminino" ;} 
 if (empty($sexo_look)) { $sexo_look = $this->sexo; }
?>
<input type="hidden" name="sexo" value="<?php echo $this->form_encode_input($sexo) . "\">" . $sexo_look . ""; ?>
<?php } else { ?>
<?php

$sexo_look = "";
 if ($this->sexo == "M") { $sexo_look .= "Masculino" ;} 
 if ($this->sexo == "F") { $sexo_look .= "Feminino" ;} 
 if (empty($sexo_look)) { $sexo_look = $this->sexo; }
?>
<span id="id_read_on_sexo" class="css_sexo_line"  style="<?php echo $sStyleReadLab_sexo; ?>"><?php echo $this->form_encode_input($sexo_look); ?></span><span id="id_read_off_sexo" style="<?php echo $sStyleReadInp_sexo; ?>">
 <span id="idAjaxSelect_sexo"><select class="sc-js-input scFormObjectOdd css_sexo_obj" style="" id="id_sc_field_sexo" name="sexo" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_sexo'][] = ''; ?>
 <option value=""></option>
 <option value="M" <?php  if ($this->sexo == "M") { echo " selected" ;} ?>>M - Masculino</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_sexo'][] = 'M'; ?>
 <option value="F" <?php  if ($this->sexo == "F") { echo " selected" ;} ?>>F - Feminino</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_sexo'][] = 'F'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sexo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sexo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dt_nasc']))
    {
        $this->nm_new_label['dt_nasc'] = "Dt Nasc";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dt_nasc = $this->dt_nasc;
   $sStyleHidden_dt_nasc = '';
   if (isset($this->nmgp_cmp_hidden['dt_nasc']) && $this->nmgp_cmp_hidden['dt_nasc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dt_nasc']);
       $sStyleHidden_dt_nasc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dt_nasc = 'display: none;';
   $sStyleReadInp_dt_nasc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dt_nasc']) && $this->nmgp_cmp_readonly['dt_nasc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dt_nasc']);
       $sStyleReadLab_dt_nasc = '';
       $sStyleReadInp_dt_nasc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dt_nasc']) && $this->nmgp_cmp_hidden['dt_nasc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dt_nasc" value="<?php echo $this->form_encode_input($dt_nasc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dt_nasc_line" id="hidden_field_data_dt_nasc" style="<?php echo $sStyleHidden_dt_nasc; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dt_nasc_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dt_nasc_label"><span id="id_label_dt_nasc"><?php echo $this->nm_new_label['dt_nasc']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dt_nasc"]) &&  $this->nmgp_cmp_readonly["dt_nasc"] == "on") { 

 ?>
<input type="hidden" name="dt_nasc" value="<?php echo $this->form_encode_input($dt_nasc) . "\">" . $dt_nasc . ""; ?>
<?php } else { ?>
<span id="id_read_on_dt_nasc" class="sc-ui-readonly-dt_nasc css_dt_nasc_line" style="<?php echo $sStyleReadLab_dt_nasc; ?>"><?php echo $this->form_encode_input($dt_nasc); ?></span><span id="id_read_off_dt_nasc" style="white-space: nowrap;<?php echo $sStyleReadInp_dt_nasc; ?>">
 <input class="sc-js-input scFormObjectOdd css_dt_nasc_obj" style="" id="id_sc_field_dt_nasc" type=text name="dt_nasc" value="<?php echo $this->form_encode_input($dt_nasc) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['dt_nasc']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dt_nasc']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['dt_nasc']['date_format'];
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dt_nasc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dt_nasc_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['nacionalidade']))
   {
       $this->nm_new_label['nacionalidade'] = "Nacionalidade";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nacionalidade = $this->nacionalidade;
   $sStyleHidden_nacionalidade = '';
   if (isset($this->nmgp_cmp_hidden['nacionalidade']) && $this->nmgp_cmp_hidden['nacionalidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nacionalidade']);
       $sStyleHidden_nacionalidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nacionalidade = 'display: none;';
   $sStyleReadInp_nacionalidade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nacionalidade']) && $this->nmgp_cmp_readonly['nacionalidade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nacionalidade']);
       $sStyleReadLab_nacionalidade = '';
       $sStyleReadInp_nacionalidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nacionalidade']) && $this->nmgp_cmp_hidden['nacionalidade'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="nacionalidade" value="<?php echo $this->form_encode_input($this->nacionalidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nacionalidade_line" id="hidden_field_data_nacionalidade" style="<?php echo $sStyleHidden_nacionalidade; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nacionalidade_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nacionalidade_label"><span id="id_label_nacionalidade"><?php echo $this->nm_new_label['nacionalidade']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nacionalidade"]) &&  $this->nmgp_cmp_readonly["nacionalidade"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array(); 
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
   $x = 0; 
   $nacionalidade_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->nacionalidade_1))
          {
              foreach ($this->nacionalidade_1 as $tmp_nacionalidade)
              {
                  if (trim($tmp_nacionalidade) === trim($cadaselect[1])) { $nacionalidade_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->nacionalidade) === trim($cadaselect[1])) { $nacionalidade_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="nacionalidade" value="<?php echo $this->form_encode_input($nacionalidade) . "\">" . $nacionalidade_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $nacionalidade_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->nacionalidade_1))
          {
              foreach ($this->nacionalidade_1 as $tmp_nacionalidade)
              {
                  if (trim($tmp_nacionalidade) === trim($cadaselect[1])) { $nacionalidade_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->nacionalidade) === trim($cadaselect[1])) { $nacionalidade_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($nacionalidade_look))
          {
              $nacionalidade_look = $this->nacionalidade;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_nacionalidade\" class=\"css_nacionalidade_line\" style=\"" .  $sStyleReadLab_nacionalidade . "\">" . $this->form_encode_input($nacionalidade_look) . "</span><span id=\"id_read_off_nacionalidade\" style=\"" . $sStyleReadInp_nacionalidade . "\">";
   echo " <span id=\"idAjaxSelect_nacionalidade\"><select class=\"sc-js-input scFormObjectOdd css_nacionalidade_obj\" style=\"\" id=\"id_sc_field_nacionalidade\" name=\"nacionalidade\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_nacionalidade'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->nacionalidade) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->nacionalidade)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nacionalidade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nacionalidade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['naturalidade']))
    {
        $this->nm_new_label['naturalidade'] = "Naturalidade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $naturalidade = $this->naturalidade;
   $sStyleHidden_naturalidade = '';
   if (isset($this->nmgp_cmp_hidden['naturalidade']) && $this->nmgp_cmp_hidden['naturalidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['naturalidade']);
       $sStyleHidden_naturalidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_naturalidade = 'display: none;';
   $sStyleReadInp_naturalidade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['naturalidade']) && $this->nmgp_cmp_readonly['naturalidade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['naturalidade']);
       $sStyleReadLab_naturalidade = '';
       $sStyleReadInp_naturalidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['naturalidade']) && $this->nmgp_cmp_hidden['naturalidade'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="naturalidade" value="<?php echo $this->form_encode_input($naturalidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_naturalidade_line" id="hidden_field_data_naturalidade" style="<?php echo $sStyleHidden_naturalidade; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_naturalidade_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_naturalidade_label"><span id="id_label_naturalidade"><?php echo $this->nm_new_label['naturalidade']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["naturalidade"]) &&  $this->nmgp_cmp_readonly["naturalidade"] == "on") { 

 ?>
<input type="hidden" name="naturalidade" value="<?php echo $this->form_encode_input($naturalidade) . "\">" . $naturalidade . ""; ?>
<?php } else { ?>
<span id="id_read_on_naturalidade" class="sc-ui-readonly-naturalidade css_naturalidade_line" style="<?php echo $sStyleReadLab_naturalidade; ?>"><?php echo $this->form_encode_input($this->naturalidade); ?></span><span id="id_read_off_naturalidade" style="white-space: nowrap;<?php echo $sStyleReadInp_naturalidade; ?>">
 <input class="sc-js-input scFormObjectOdd css_naturalidade_obj" style="" id="id_sc_field_naturalidade" type=text name="naturalidade" value="<?php echo $this->form_encode_input($naturalidade) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_naturalidade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_naturalidade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_tipo_estado_civil']))
   {
       $this->nm_new_label['id_tipo_estado_civil'] = "Tipo Estado Civil";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_tipo_estado_civil = $this->id_tipo_estado_civil;
   $sStyleHidden_id_tipo_estado_civil = '';
   if (isset($this->nmgp_cmp_hidden['id_tipo_estado_civil']) && $this->nmgp_cmp_hidden['id_tipo_estado_civil'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_tipo_estado_civil']);
       $sStyleHidden_id_tipo_estado_civil = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_tipo_estado_civil = 'display: none;';
   $sStyleReadInp_id_tipo_estado_civil = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_tipo_estado_civil']) && $this->nmgp_cmp_readonly['id_tipo_estado_civil'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_tipo_estado_civil']);
       $sStyleReadLab_id_tipo_estado_civil = '';
       $sStyleReadInp_id_tipo_estado_civil = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_tipo_estado_civil']) && $this->nmgp_cmp_hidden['id_tipo_estado_civil'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_tipo_estado_civil" value="<?php echo $this->form_encode_input($this->id_tipo_estado_civil) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_tipo_estado_civil_line" id="hidden_field_data_id_tipo_estado_civil" style="<?php echo $sStyleHidden_id_tipo_estado_civil; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_tipo_estado_civil_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_tipo_estado_civil_label"><span id="id_label_id_tipo_estado_civil"><?php echo $this->nm_new_label['id_tipo_estado_civil']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_tipo_estado_civil"]) &&  $this->nmgp_cmp_readonly["id_tipo_estado_civil"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array(); 
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
   $x = 0; 
   $id_tipo_estado_civil_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tipo_estado_civil_1))
          {
              foreach ($this->id_tipo_estado_civil_1 as $tmp_id_tipo_estado_civil)
              {
                  if (trim($tmp_id_tipo_estado_civil) === trim($cadaselect[1])) { $id_tipo_estado_civil_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tipo_estado_civil) === trim($cadaselect[1])) { $id_tipo_estado_civil_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_tipo_estado_civil" value="<?php echo $this->form_encode_input($id_tipo_estado_civil) . "\">" . $id_tipo_estado_civil_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $id_tipo_estado_civil_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tipo_estado_civil_1))
          {
              foreach ($this->id_tipo_estado_civil_1 as $tmp_id_tipo_estado_civil)
              {
                  if (trim($tmp_id_tipo_estado_civil) === trim($cadaselect[1])) { $id_tipo_estado_civil_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tipo_estado_civil) === trim($cadaselect[1])) { $id_tipo_estado_civil_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_tipo_estado_civil_look))
          {
              $id_tipo_estado_civil_look = $this->id_tipo_estado_civil;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_tipo_estado_civil\" class=\"css_id_tipo_estado_civil_line\" style=\"" .  $sStyleReadLab_id_tipo_estado_civil . "\">" . $this->form_encode_input($id_tipo_estado_civil_look) . "</span><span id=\"id_read_off_id_tipo_estado_civil\" style=\"" . $sStyleReadInp_id_tipo_estado_civil . "\">";
   echo " <span id=\"idAjaxSelect_id_tipo_estado_civil\"><select class=\"sc-js-input scFormObjectOdd css_id_tipo_estado_civil_obj\" style=\"\" id=\"id_sc_field_id_tipo_estado_civil\" name=\"id_tipo_estado_civil\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_estado_civil'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_tipo_estado_civil) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_tipo_estado_civil)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_tipo_estado_civil_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_tipo_estado_civil_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_tipo_escolaridade']))
   {
       $this->nm_new_label['id_tipo_escolaridade'] = "Tipo Escolaridade";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_tipo_escolaridade = $this->id_tipo_escolaridade;
   $sStyleHidden_id_tipo_escolaridade = '';
   if (isset($this->nmgp_cmp_hidden['id_tipo_escolaridade']) && $this->nmgp_cmp_hidden['id_tipo_escolaridade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_tipo_escolaridade']);
       $sStyleHidden_id_tipo_escolaridade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_tipo_escolaridade = 'display: none;';
   $sStyleReadInp_id_tipo_escolaridade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_tipo_escolaridade']) && $this->nmgp_cmp_readonly['id_tipo_escolaridade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_tipo_escolaridade']);
       $sStyleReadLab_id_tipo_escolaridade = '';
       $sStyleReadInp_id_tipo_escolaridade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_tipo_escolaridade']) && $this->nmgp_cmp_hidden['id_tipo_escolaridade'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_tipo_escolaridade" value="<?php echo $this->form_encode_input($this->id_tipo_escolaridade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_tipo_escolaridade_line" id="hidden_field_data_id_tipo_escolaridade" style="<?php echo $sStyleHidden_id_tipo_escolaridade; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_tipo_escolaridade_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_tipo_escolaridade_label"><span id="id_label_id_tipo_escolaridade"><?php echo $this->nm_new_label['id_tipo_escolaridade']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_tipo_escolaridade"]) &&  $this->nmgp_cmp_readonly["id_tipo_escolaridade"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array(); 
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
   $x = 0; 
   $id_tipo_escolaridade_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tipo_escolaridade_1))
          {
              foreach ($this->id_tipo_escolaridade_1 as $tmp_id_tipo_escolaridade)
              {
                  if (trim($tmp_id_tipo_escolaridade) === trim($cadaselect[1])) { $id_tipo_escolaridade_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tipo_escolaridade) === trim($cadaselect[1])) { $id_tipo_escolaridade_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_tipo_escolaridade" value="<?php echo $this->form_encode_input($id_tipo_escolaridade) . "\">" . $id_tipo_escolaridade_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $id_tipo_escolaridade_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tipo_escolaridade_1))
          {
              foreach ($this->id_tipo_escolaridade_1 as $tmp_id_tipo_escolaridade)
              {
                  if (trim($tmp_id_tipo_escolaridade) === trim($cadaselect[1])) { $id_tipo_escolaridade_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tipo_escolaridade) === trim($cadaselect[1])) { $id_tipo_escolaridade_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_tipo_escolaridade_look))
          {
              $id_tipo_escolaridade_look = $this->id_tipo_escolaridade;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_tipo_escolaridade\" class=\"css_id_tipo_escolaridade_line\" style=\"" .  $sStyleReadLab_id_tipo_escolaridade . "\">" . $this->form_encode_input($id_tipo_escolaridade_look) . "</span><span id=\"id_read_off_id_tipo_escolaridade\" style=\"" . $sStyleReadInp_id_tipo_escolaridade . "\">";
   echo " <span id=\"idAjaxSelect_id_tipo_escolaridade\"><select class=\"sc-js-input scFormObjectOdd css_id_tipo_escolaridade_obj\" style=\"\" id=\"id_sc_field_id_tipo_escolaridade\" name=\"id_tipo_escolaridade\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_escolaridade'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_tipo_escolaridade) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_tipo_escolaridade)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_tipo_escolaridade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_tipo_escolaridade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['id_tipo_sanguineo']))
   {
       $this->nm_new_label['id_tipo_sanguineo'] = "Tipo Sanguineo";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_tipo_sanguineo = $this->id_tipo_sanguineo;
   $sStyleHidden_id_tipo_sanguineo = '';
   if (isset($this->nmgp_cmp_hidden['id_tipo_sanguineo']) && $this->nmgp_cmp_hidden['id_tipo_sanguineo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_tipo_sanguineo']);
       $sStyleHidden_id_tipo_sanguineo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_tipo_sanguineo = 'display: none;';
   $sStyleReadInp_id_tipo_sanguineo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['id_tipo_sanguineo']) && $this->nmgp_cmp_readonly['id_tipo_sanguineo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_tipo_sanguineo']);
       $sStyleReadLab_id_tipo_sanguineo = '';
       $sStyleReadInp_id_tipo_sanguineo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_tipo_sanguineo']) && $this->nmgp_cmp_hidden['id_tipo_sanguineo'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="id_tipo_sanguineo" value="<?php echo $this->form_encode_input($this->id_tipo_sanguineo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_id_tipo_sanguineo_line" id="hidden_field_data_id_tipo_sanguineo" style="<?php echo $sStyleHidden_id_tipo_sanguineo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id_tipo_sanguineo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_id_tipo_sanguineo_label"><span id="id_label_id_tipo_sanguineo"><?php echo $this->nm_new_label['id_tipo_sanguineo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["id_tipo_sanguineo"]) &&  $this->nmgp_cmp_readonly["id_tipo_sanguineo"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array(); 
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
   $x = 0; 
   $id_tipo_sanguineo_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tipo_sanguineo_1))
          {
              foreach ($this->id_tipo_sanguineo_1 as $tmp_id_tipo_sanguineo)
              {
                  if (trim($tmp_id_tipo_sanguineo) === trim($cadaselect[1])) { $id_tipo_sanguineo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tipo_sanguineo) === trim($cadaselect[1])) { $id_tipo_sanguineo_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="id_tipo_sanguineo" value="<?php echo $this->form_encode_input($id_tipo_sanguineo) . "\">" . $id_tipo_sanguineo_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'] = array(); 
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
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $id_tipo_sanguineo_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->id_tipo_sanguineo_1))
          {
              foreach ($this->id_tipo_sanguineo_1 as $tmp_id_tipo_sanguineo)
              {
                  if (trim($tmp_id_tipo_sanguineo) === trim($cadaselect[1])) { $id_tipo_sanguineo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->id_tipo_sanguineo) === trim($cadaselect[1])) { $id_tipo_sanguineo_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($id_tipo_sanguineo_look))
          {
              $id_tipo_sanguineo_look = $this->id_tipo_sanguineo;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_id_tipo_sanguineo\" class=\"css_id_tipo_sanguineo_line\" style=\"" .  $sStyleReadLab_id_tipo_sanguineo . "\">" . $this->form_encode_input($id_tipo_sanguineo_look) . "</span><span id=\"id_read_off_id_tipo_sanguineo\" style=\"" . $sStyleReadInp_id_tipo_sanguineo . "\">";
   echo " <span id=\"idAjaxSelect_id_tipo_sanguineo\"><select class=\"sc-js-input scFormObjectOdd css_id_tipo_sanguineo_obj\" style=\"\" id=\"id_sc_field_id_tipo_sanguineo\" name=\"id_tipo_sanguineo\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_tipo_sanguineo'][] = ''; 
   echo "  <option value=\"\"></option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->id_tipo_sanguineo) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->id_tipo_sanguineo)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_tipo_sanguineo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_tipo_sanguineo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['profissao']))
    {
        $this->nm_new_label['profissao'] = "Profissão";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $profissao = $this->profissao;
   $sStyleHidden_profissao = '';
   if (isset($this->nmgp_cmp_hidden['profissao']) && $this->nmgp_cmp_hidden['profissao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['profissao']);
       $sStyleHidden_profissao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_profissao = 'display: none;';
   $sStyleReadInp_profissao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['profissao']) && $this->nmgp_cmp_readonly['profissao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['profissao']);
       $sStyleReadLab_profissao = '';
       $sStyleReadInp_profissao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['profissao']) && $this->nmgp_cmp_hidden['profissao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="profissao" value="<?php echo $this->form_encode_input($profissao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_profissao_line" id="hidden_field_data_profissao" style="<?php echo $sStyleHidden_profissao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_profissao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_profissao_label"><span id="id_label_profissao"><?php echo $this->nm_new_label['profissao']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["profissao"]) &&  $this->nmgp_cmp_readonly["profissao"] == "on") { 

 ?>
<input type="hidden" name="profissao" value="<?php echo $this->form_encode_input($profissao) . "\">" . $profissao . ""; ?>
<?php } else { ?>
<span id="id_read_on_profissao" class="sc-ui-readonly-profissao css_profissao_line" style="<?php echo $sStyleReadLab_profissao; ?>"><?php echo $this->form_encode_input($this->profissao); ?></span><span id="id_read_off_profissao" style="white-space: nowrap;<?php echo $sStyleReadInp_profissao; ?>">
 <input class="sc-js-input scFormObjectOdd css_profissao_obj" style="" id="id_sc_field_profissao" type=text name="profissao" value="<?php echo $this->form_encode_input($profissao) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_profissao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_profissao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['aposentado']))
   {
       $this->nm_new_label['aposentado'] = "Aposentado?";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $aposentado = $this->aposentado;
   $sStyleHidden_aposentado = '';
   if (isset($this->nmgp_cmp_hidden['aposentado']) && $this->nmgp_cmp_hidden['aposentado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['aposentado']);
       $sStyleHidden_aposentado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_aposentado = 'display: none;';
   $sStyleReadInp_aposentado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['aposentado']) && $this->nmgp_cmp_readonly['aposentado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['aposentado']);
       $sStyleReadLab_aposentado = '';
       $sStyleReadInp_aposentado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['aposentado']) && $this->nmgp_cmp_hidden['aposentado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="aposentado" value="<?php echo $this->form_encode_input($this->aposentado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_aposentado_line" id="hidden_field_data_aposentado" style="<?php echo $sStyleHidden_aposentado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_aposentado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_aposentado_label"><span id="id_label_aposentado"><?php echo $this->nm_new_label['aposentado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["aposentado"]) &&  $this->nmgp_cmp_readonly["aposentado"] == "on") { 

$aposentado_look = "";
 if ($this->aposentado == "S") { $aposentado_look .= "Sim" ;} 
 if ($this->aposentado == "N") { $aposentado_look .= "Não" ;} 
 if (empty($aposentado_look)) { $aposentado_look = $this->aposentado; }
?>
<input type="hidden" name="aposentado" value="<?php echo $this->form_encode_input($aposentado) . "\">" . $aposentado_look . ""; ?>
<?php } else { ?>
<?php

$aposentado_look = "";
 if ($this->aposentado == "S") { $aposentado_look .= "Sim" ;} 
 if ($this->aposentado == "N") { $aposentado_look .= "Não" ;} 
 if (empty($aposentado_look)) { $aposentado_look = $this->aposentado; }
?>
<span id="id_read_on_aposentado" class="css_aposentado_line"  style="<?php echo $sStyleReadLab_aposentado; ?>"><?php echo $this->form_encode_input($aposentado_look); ?></span><span id="id_read_off_aposentado" style="<?php echo $sStyleReadInp_aposentado; ?>">
 <span id="idAjaxSelect_aposentado"><select class="sc-js-input scFormObjectOdd css_aposentado_obj" style="" id="id_sc_field_aposentado" name="aposentado" size="1" alt="{type: 'select', enterTab: false}">
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_aposentado'][] = ''; ?>
 <option value=""></option>
 <option value="S" <?php  if ($this->aposentado == "S") { echo " selected" ;} ?>>S - Sim</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_aposentado'][] = 'S'; ?>
 <option value="N" <?php  if ($this->aposentado == "N") { echo " selected" ;} ?>>N - Não</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_aposentado'][] = 'N'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_aposentado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_aposentado_text"></span></td></tr></table></td></tr></table> </TD>
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
        $this->nm_new_label['id_tipo_vinculo'] = "Tipo Vinculo";
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
<?php
$obs_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($obs));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["obs"]) &&  $this->nmgp_cmp_readonly["obs"] == "on") { 

 ?>
<input type="hidden" name="obs" value="<?php echo $this->form_encode_input($obs) . "\">" . $obs_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_obs" class="sc-ui-readonly-obs css_obs_line" style="<?php echo $sStyleReadLab_obs; ?>"><?php echo $this->form_encode_input($obs_val); ?></span><span id="id_read_off_obs" style="white-space: nowrap;<?php echo $sStyleReadInp_obs; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_obs_obj" style="white-space: pre-wrap;" name="obs" id="id_sc_field_obs" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $obs; ?>
</textarea>
</span><?php } ?>
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
        $this->nm_new_label['id_ativo'] = "Ativo";
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

 if ("1" == $this->id_ativo) { $id_ativo_look = "Ativo";} 
 if ("0" == $this->id_ativo) { $id_ativo_look = "Inativo";} 
?>
<input type="hidden" name="id_ativo" value="<?php echo $this->form_encode_input($id_ativo) . "\">" . $id_ativo_look . ""; ?>
<?php } else { ?>

<?php

 if ("1" == $this->id_ativo) { $id_ativo_look = "Ativo";} 
 if ("0" == $this->id_ativo) { $id_ativo_look = "Inativo";} 
?>
<span id="id_read_on_id_ativo"  class="css_id_ativo_line" style="<?php echo $sStyleReadLab_id_ativo; ?>"><?php echo $this->form_encode_input($id_ativo_look); ?></span><span id="id_read_off_id_ativo" style="<?php echo $sStyleReadInp_id_ativo; ?>"><div id="idAjaxRadio_id_ativo" style="display: inline-block">
<TABLE cellspacing="0" cellpadding="0" border="0"><TR>
  <TD class="scFormDataFontOdd css_id_ativo_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="id_ativo" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_ativo'][] = '1'; ?>
<?php  if ("1" == $this->id_ativo)  { echo " checked" ;} ?><?php  if (empty($this->id_ativo)) { echo " checked" ;} ?>  onClick="" >1 - Ativo</TD>
</TR>
<TR>
  <TD class="scFormDataFontOdd css_id_ativo_line">    <input style="float:left; position:relative; top: -3px;" type=radio name="id_ativo" value="0"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_public_pessoa_fisica_mob']['Lookup_id_ativo'][] = '0'; ?>
<?php  if ("0" == $this->id_ativo)  { echo " checked" ;} ?>  onClick="" >0 - Inativo</TD>
</TR></TABLE>
</div>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_ativo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_ativo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php } ?>
   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
