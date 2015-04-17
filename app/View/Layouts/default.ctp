<?php
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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');

	echo $this->Html->css('main');
	echo $this->Html->css('index');

	echo $this->Html->script('jquery-2.1.3.min');


	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
	<title>League of Tactics</title>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<meta charset="UTF-8" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>

</head>
<body>
	<header>
		<h1>
			<?php echo $this->Html->image('banner.jpg', array('alt' => 'League of Tactics', 'id' => 'banner', 'class' => 'img-responsive')); ?>
		</h1>
		<nav class="menu-principal navbar navbar-default col-sm-12 col-md-12 col-lg-12">
			<div class="container-fluid col-lg-10 col-lg-offset-1 col-md-12 col-sm-12">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<?php echo $this->Html->image('foto2.jpg', array('alt' => 'Foto do usuário', 'class' => 'img-responsive hidden-xs foto col-lg-2 col-lg-offset-1')); ?>
						<?php echo $this->Html->image('foto2.jpg', array('alt' => 'Foto do usuário', 'class' => 'visible-xs logo-menor')); ?>						
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><?php echo $this->Html->link('Home', array('controller' => 'Pages', 'action' => 'display') ); ?></li>
						<li><?php echo $this->Html->link('Todos Artigos', array('controller' => 'Artigos', 'action' => 'index') ); ?></li>                           
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estratégias <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Geral</a></li>
								<li><a href="selecao.html">Específico</a></li>                               
							</ul>
						</li>
						<li><a href="">Notícias</a></li>
					</ul>	
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

	</header>
	<main id="main" class="col-sm-12 col-md-12 col-lg-12">		

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

	</main>
	<footer>
		<div id="rodape" class="container col-lg-12 col-md-12 col-sm-12">
			<section class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12 rodape">
				<?php echo $this->Html->image('facebook-icon.jpg', array('alt' => 'Ícone Facebook', 'class' => 'rodape-icone')); ?>
				<h4 class="rodape-titulo">Facebook</h4>
				<p class="rodape-corpo">www.facebook.com/avast</p>
			</section>
			<section class="col-lg-4 col-md-4 col-sm-12 rodape">
				<?php echo $this->Html->image('twitter-icon.jpg', array('alt' => 'Ícone Twitter', 'class' => 'rodape-icone')); ?>
				<h4 class="rodape-titulo">Twitter</h4>
				<p class="rodape-corpo">www.twitter.com/avast</p>
			</section>
			<section class="col-lg-3 col-md-4 col-sm-12 rodape">
				<?php echo $this->Html->image('youtube-icon.jpg', array('alt' => 'Ícone Youtube', 'class' => 'rodape-icone')); ?>
				<h4 class="rodape-titulo">Youtube</h4>
				<p class="rodape-corpo">www.youtube.com/avast</p>
			</section>

			<?php echo $this->element('sql_dump'); ?>
		</div>
	</footer>
</body>
</html>