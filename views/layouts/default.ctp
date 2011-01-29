<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <?php echo $this->Html->charset(); ?>
  <title>Kamus Tegal v.01</title>
  <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('main');

                echo $html->script(array('jquery-1.3.2.min.js','function.js'));

		echo $scripts_for_layout;
  ?>
</head>
<body>
  <div id="header">
    <ul>
      <li><a href="http://localhost/kamustegal"><span>Home</span></a></li>
      <li><a href="#"><span>Jadi Kontributor</span></a></li>
      <li><a href="#"><span>Login</span></a></li>
      <li><a href="#"><span>Daftar Kata</span></a></li>
      <li><a href="#"><span>FAQ</span></a></li>
      <li><a href="#"><span>About</span></a></li>
    </ul>
  </div>
       <?php echo $this->Session->flash(); ?>

       <?php echo $content_for_layout; ?>

  <div id="footer">
    <p>Design by <a href="http://jonnotie.nl/">Jonnotie</a> Powered By
        <?php echo $this->Html->link(
		$this->Html->image('cake.icon.png', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
		'http://www.cakephp.org/',
		array('target' => '_blank', 'escape' => false)
		)." CakePHP";
	?><br/>
        <small>Developed by hanx</small>
    </p>
    <!-- Don't remove this link. Respect the designer. If you want to remove it, shoot me an email me@jonnotie.nl -->
  </div>
</body>
</html>