<?php /* Smarty version 2.6.26, created on 2013-05-15 20:24:35
         compiled from pg/admin/mission.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'spUrl', 'pg/admin/mission.html', 15, false),)), $this); ?>
<!DOCTYPE html>
<html lang="zh"> 
<head>
<meta charset="utf-8">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/base.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>
<body class="pgAdmin mission">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrap">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pg/admin/pgadminNav.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<article class="content">
<section class="search">
	<h1>列表 - 任务模板一览</h1>
    <div class="tab searchTab1">
        <a id="searchTab1" href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pgadmin','a' => 'missionlist'), $this);?>
">表</a>
        <?php if (@PM_power == 0): ?>
        <span class="dot">&nbsp;</span>
        <a id="searchTab2" href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pgadmin','a' => 'mtplAdd'), $this);?>
" title="添加任务模板">加</a>
        <?php endif; ?>
    </div>
</section>
<table class="table3">
<thead>
  <tr class="btop">
    <td class="bleft">模板id</td>
    <td class="tleft">模板名称</td>
    <td class="bright">设置</td>
  </tr>
  </thead>
  <?php $_from = $this->_tpl_vars['mtpllist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
  <tr>
    <td class="bleft"><?php echo $this->_tpl_vars['rs']['mtpl_id']; ?>
</td>
    <td class="tleft"><?php echo $this->_tpl_vars['rs']['mtpl_name']; ?>
</td>
    <td class="bright"><?php if ($this->_tpl_vars['isManager']): ?><a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pgadmin','a' => 'mtplEdit','mtplid' => $this->_tpl_vars['rs']['mtpl_id']), $this);?>
">修改</a>&nbsp;<a href="javascript:;" data-id="<?php echo $this->_tpl_vars['rs']['mtpl_id']; ?>
" class="del-btn">删除</a><?php endif; ?></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
	<tfoot>
	  	<tr>
			<td colspan="6">
			<?php if ($this->_tpl_vars['pager']): ?>
			<div class="pager">
			页码：<?php echo $this->_tpl_vars['pager']['current_page']; ?>
/<?php echo $this->_tpl_vars['pager']['total_page']; ?>

			<?php $_from = $this->_tpl_vars['pager']['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thepage']):
?>
			    <?php if ($this->_tpl_vars['thepage'] != $this->_tpl_vars['pager']['current_page']): ?>
					<a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pgadmin','a' => 'missionList','topage' => $this->_tpl_vars['thepage']), $this);?>
"><?php echo $this->_tpl_vars['thepage']; ?>
</a>
			    <?php else: ?>
			    	<span><?php echo $this->_tpl_vars['thepage']; ?>
</span>
			    <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			</div>
			<?php endif; ?>
			</td>
		</tr>
	  </tfoot>	  
  
</table>
</article>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
<script>
    $(function(){
        $(".del-btn").click(function(){
            if(confirm('确定删除？')){
                var id=$(this).attr('data-id');
                var parentEle=$(this).parent().parent();
                $.get('<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pgadmin','a' => 'mtpldel_do'), $this);?>
&mtpl_id='+id,function(data){
                    if(JSON.parse(data).status=='200'){
                        alert('删除成功！');
                        parentEle.detach();
                    }
                })
            }
        })
    })
</script>
</html>