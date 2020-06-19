<link rel="stylesheet" href="<?= DIR ?>/template/css/home.css">
<div class="modules">
<?php foreach ($this->view->dados['modules'] as $module) { ?>
	<div class="module" id="module_<?= $module['module_id'] ?>" onmouseover="moduleMouseOver('module_title_<?= $module['module_id'] ?>','module_icon_<?= $module['module_id'] ?>')" onmouseout="moduleMouseOut('module_title_<?= $module['module_id'] ?>','module_icon_<?= $module['module_id'] ?>')" onclick="window.location='<?= $module['module_view'] ?>';">
		<h1 class="module-title" id="module_title_<?= $module['module_id'] ?>"><?= $module['module_name'] ?></h1>
    <i class="<?= $module['module_icon'] ?> module-icon" id="module_icon_<?= $module['module_id'] ?>"></i>
	</div>
<?php } ?>
</div>