<?php
/**
 * Minimal Theme for Croogo CMS
 *
 * @author Manuel Tancoigne <m.tancoigne@gmail.com>
 * @link   http://fahad19.com
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
		<?php
		echo $this->Layout->meta();
		echo $this->Layout->feed();
		echo $this->Html->script(array(
				'bootstrap.min',
				'jquery-1.11.0.min',
				'modernizr-2.6.2-respond-1.1.0.min'
						), array('block' => 'scriptBottom'));
		echo $this->Layout->js();
		echo $this->Html->css(array(
				'bootstrap.min.css',
		));
		echo $this->Blocks->get('css');
		echo $this->Blocks->get('script');
		?>
  </head>
  <body>
		<!--[if lt IE 7]>
				<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
			<![endif]-->

		<!-- NAVIGATION BAR -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="mainNav">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php echo $this->Html->link(Configure::read('Site.title'), '/', array('class' => 'navbar-brand')); ?>
				</div>
				<div class="navbar-collapse collapse">
					<?php echo $this->Menus->menu('main', array('element' => 'menu_main', 'tagAttributes' => array('class' => 'nav navbar-nav'))); ?>
				</div><!--/.navbar-collapse -->
			</div>
		</div><!--/ NAVIGATION BAR -->

		<!-- TITLE -->
		<div class="container" id="title">
			<h1><?php echo $this->Html->link(Configure::read('Site.title'), '/'); ?> <small><?php echo Configure::read('Site.tagline'); ?></small></h1>
		</div><!--/ TITLE -->

		<!-- PAGE -->
		<div id="main" class="container">
			<div class="row">

				<!-- PAGE CONTENT -->
				<div id="content" class="col-md-9">
					<?php
					echo $this->Layout->sessionFlash();
					echo $content_for_layout;
					?>
				</div><!--/ PAGE CONTENT -->

				<!-- RIGHT BLOCK -->
				<div id="sidebar" class="col-md-3">
					<?php echo $this->Regions->blocks('right'); ?>
				</div><!--/ RIGHT BLOCK -->

			</div>
		</div><!--/ PAGE -->

		<!-- FOOTER -->
		<div class="navbar navbar-default navbar-fixed-bottom hidden-xs" id="footer">
			<div class="container">
				<div class="row">

					<!-- FOOTER MENU -->
					<div class="col-md-6">
						<?php echo $this->Menus->menu('footer', array('element' => 'menu_footer', 'tagAttributes' => array('class' => 'footerMenu'))); ?>
					</div><!--/ FOOTER MENU -->

					<!-- NOTICE AND COPY -->
					<div class="col-md-6">
						<div class="navbar-text  navbar-right">
							Powered by <a href="http://www.croogo.org">Croogo</a> and <a href="http://www.cakephp.org">CakePHP</a>.
						</div>
					</div><!--/ NOTICE AND COPY -->

				</div>
			</div>
		</div><!--/ FOOTER -->

		<?php
		// Bottom scripts
		echo $this->Blocks->get('scriptBottom');
		echo $this->Js->writeBuffer();
		?>
  </body>
</html>
