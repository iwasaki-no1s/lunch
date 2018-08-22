<?php
<<<<<<< HEAD
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
	//独自のCSS
	$this->prepend('css',$this->Html->css([
		'style.css'
	]));
	//BootstrapをCDNから取得
	$this->prepend('css',$this->Html->css([
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
	]));
	//BootstrapのJSをCDNから取得
	$this->prepend('script',$this->Html->script([
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
	]));
	$this->prepend('script',$this->Html->script([
		'//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'
	]));
	//jQueryをCDNから取得
	$this->prepend('script',$this->Html->script([
		'//code.jquery.com/jquery-2.2.4.js'
	]));


?>
<!DOCTYPE html>
<html>
<head>
	<?=$this->Html->charset() ?>
	<?=$this->Html->meta('icon') ?>
	<?=$this->fetch('script') ?>
	<title><?=$this->fetch('title') ?></title>
	<?=$this->fetch('css') ?>
</head>
<body>
	<?=$this->element("menu/".$menu) ?>
	<?=$this->element('content') ?>
	<?=$this->fetch('script')?>
</body>
</html>
S
