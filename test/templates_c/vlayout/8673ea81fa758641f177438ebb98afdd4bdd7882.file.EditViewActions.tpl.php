<?php /* Smarty version Smarty-3.1.7, created on 2017-05-17 12:30:03
         compiled from "D:\OpenServer\domains\vtigercrm6.5.kg\includes\runtime/../../layouts/vlayout\modules\Vtiger\EditViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19564591c181bd5a264-77908088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8673ea81fa758641f177438ebb98afdd4bdd7882' => 
    array (
      0 => 'D:\\OpenServer\\domains\\vtigercrm6.5.kg\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\EditViewActions.tpl',
      1 => 1450875195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19564591c181bd5a264-77908088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FL_IMPORT_BUTTON' => 0,
    'MODULE' => 0,
    'RECORD_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_591c181be257d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c181be257d')) {function content_591c181be257d($_smarty_tpl) {?>

<div class="row-fluid"><div class="pull-right"><?php if ($_smarty_tpl->tpl_vars['FL_IMPORT_BUTTON']->value&&($_smarty_tpl->tpl_vars['MODULE']->value=='Leads'||$_smarty_tpl->tpl_vars['MODULE']->value=='Accounts'||$_smarty_tpl->tpl_vars['MODULE']->value=='Contacts')){?><button class="btn btn-info" type="button" onclick="SPSocialConnector_Edit_Js.triggerEnterURL('index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&record_id=<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
&view=MassActionAjax&mode=showEnterURLForm');"><strong><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<?php }?><button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><div class="clearfix"></div></div><br></form></div><?php }} ?>