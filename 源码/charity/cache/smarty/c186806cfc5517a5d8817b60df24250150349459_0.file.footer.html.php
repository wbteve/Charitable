<?php /* Smarty version 3.1.27, created on 2016-06-15 11:23:58
         compiled from "E:\xampp\htdocs\charity\charity\application\views\common\footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:114475760ca4e4f9475_08955027%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c186806cfc5517a5d8817b60df24250150349459' => 
    array (
      0 => 'E:\\xampp\\htdocs\\charity\\charity\\application\\views\\common\\footer.html',
      1 => 1465887354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114475760ca4e4f9475_08955027',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5760ca4e4fb3b9_59374175',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5760ca4e4fb3b9_59374175')) {
function content_5760ca4e4fb3b9_59374175 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114475760ca4e4f9475_08955027';
?>
<div class="bottom">Copyright © 2014-2015 xxx. All Rights Reserved</div>

<?php echo '<script'; ?>
>
    window.onload=function() {
        var Aleft=document.getElementById('left');
        var Aright=document.getElementById('right');

        Aleft.style.minHeight=window.innerHeight-130+"px";
        Aright.style.minHeight=window.innerHeight-130+"px";
        Aright.style.width=window.innerWidth-207+"px";

    };
    window.onresize=function() {
        var Aleft=document.getElementById('left');
        var Aright=document.getElementById('right');

        Aleft.style.minHeight=window.innerHeight-130+"px";
        Aright.style.minHeight=window.innerHeight-130+"px";
        Aright.style.width=window.innerWidth-207+"px";

    };

    $(function(){
        $.getJSON("/ajax/stat/data/", function( response ) {
            if ( response.code != 1 ) { return false;}

            $("#companyName").after(response.data.name);
        });
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>