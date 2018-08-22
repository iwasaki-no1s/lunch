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
=======
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
	
>>>>>>> 4c4c1c1ca7e37db5cd639273e82e862e68275ae0
?>
<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
=======
	<?=$this->Html->charset() ?>
	<?=$this->Html->meta('icon') ?>
	<?=$this->fetch('script') ?>
	<title><?=$this->fetch('title') ?></title>
	<?=$this->fetch('css') ?>
</head>
<body>
	<?=$this->element("menu/".$menu) ?>
	<?=$this->element('content') ?>
</body>
</html>
>>>>>>> 4c4c1c1ca7e37db5cd639273e82e862e68275ae0
