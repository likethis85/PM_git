<?php /* Smarty version 2.6.26, created on 2013-06-06 17:48:43
         compiled from pg/user/mySkillBase.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'spUrl', 'pg/user/mySkillBase.html', 18, false),)), $this); ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/base.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <link>
    <style>
        .select2-container{position: static;}/*hack select2 hidden */
    </style>
</head>
<body class="pgAdmin  userDeafult">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pg/user/myInformation.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<nav class="myNav clearfix">
    <div class="myNav-inner">
        <a class="brand">个人空间导航&nbsp;&#187;</a>
        <ul>
            <li><a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'project_bll','a' => 'myWork'), $this);?>
">正在进行的工作</a></li>
            <li ><a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pguser','a' => 'myGrowRecord'), $this);?>
">成长记录</a></li>
            <li class="active"><a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pguser','a' => 'mySkillGift'), $this);?>
">技能及战力</a></li>
            <li><a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pguser','a' => 'myMedal'), $this);?>
">成长勋章</a></li>
            <li>
                <a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pguser','a' => 'myMessage'), $this);?>
">系统通知
                    <span class="unread-msg">0</span>
                </a>
            </li>
            <li><a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pguser','a' => 'myLvUp'), $this);?>
">升级要求</a></li>
            <?php if ($this->_tpl_vars['p_user_id'] == -1): ?>
            	<li><a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pguser','a' => 'myStudent'), $this);?>
">学生情况</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<div class="wrap">

    <p class="mySkill-common">
        你的职业是：<?php echo $this->_tpl_vars['job_name']; ?>
。该职业基本技能如下。
        <a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pguser','a' => 'mySkillGift'), $this);?>
" class="myInfo-btn ">天赋</a>
        <a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pguser','a' => 'mySkillBase'), $this);?>
" class="myInfo-btn current">基本</a>
    </p>
    <table class="table3">
        <thead>
        <tr class="btop">
            <td class="bleft">序号</td>
            <td class="tleft">技能名</td>
            <td class="bright">性质</td>
        </tr>
        </thead>
        <?php $_from = $this->_tpl_vars['resultArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['table'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['table']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['rs']):
        $this->_foreach['table']['iteration']++;
?>
        <tr>
            <td class="bleft"><?php echo $this->_foreach['table']['iteration']; ?>
</td>
            <td class="tleft"><?php echo $this->_tpl_vars['rs']['skill_name']; ?>
</td>
            <td class="bright"><?php echo $this->_tpl_vars['rs']['skill_intro']; ?>
</td>
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
                    <a href="<?php echo $this->_plugins['function']['spUrl'][0][0]->__template_spUrl(array('c' => 'pguser','a' => 'mySkillBase','topage' => $this->_tpl_vars['thepage']), $this);?>
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
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>