<?php
defined('_JEXEC') or die('Unauthorized Access');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-mobile-web-app-capable" content="YES" />
	<jdoc:include type="head" />
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/materialize.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body class="grey lighten-5">
	<header>
		<nav class="blue">
			<div class="nav-wrapper">
				<a href="/" class="brand-logo">DaoBlog</a>
				<?php if ($this->countModules('position-1')) { ?>
					<div class="right">
						<jdoc:include type="modules" name="position-1" style="none" />
						<?php if ($this->countModules('profile')) { ?>
						<jdoc:include type="modules" name="profile" style="none"/>
						<?php } ?>
					</div>
				<?php } ?>

			</div>
		</nav>
	</header>
	
	
		<?php if ($this->countModules('position-2')) { ?>
		<nav class="grey darken-4 clearfix">
			<div class="nav-wrapper container">
			  <div class="col s12">
					<jdoc:include type="modules" name="position-2" />
			 </div>
			</div>
		  </nav>
		<?php } ?>
	
		<div class="container">
			<div class="row">
				<div class="col l<?php if ($this->countModules('position-7')) { ?>9<?php } else { ?>12<?php } ?> m<?php if ($this->countModules('position-7')) { ?>6<?php } else { ?>12<?php } ?>">
					<div class="content-section">
						<jdoc:include type="component" />
					</div>
				</div>
				<?php if ($this->countModules('position-7')) { ?>
				<div class="col l3 m6 s12">
					<div class="sidebar-section">
						<jdoc:include type="modules" name="position-7" style="sidebar" />
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	<footer class="page-footer blue">
		<div class="container hide-on-small-only">
			<div class="row">		
				<div class="col l4">
					<?php if ($this->countModules('footer-1')) { ?>
					<jdoc:include type="modules" name="footer-1" style="footer" />
					<?php } ?>
				</div>
				<div class="col l4">
					<?php if ($this->countModules('footer-2')) { ?>
					<jdoc:include type="modules" name="footer-2" style="footer" />
					<?php } ?>
				</div>
				<div class="col l4">
					<?php if ($this->countModules('footer-3')) { ?>
					<jdoc:include type="modules" name="footer-3" style="footer" />
					<?php } ?>
				</div>
			</div>
		</div>
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright &copy; Ever <a target="_blank" href="http://daoblog.ru" class="grey-text text-lighten-4">Daoblog</a> All rights reserved.</span>
        <span class="right">Design by <a href="http://daoblog.ru" class="grey-text text-lighten-4">HiopsNerevar</a></span>
        </div>
    </div>
  </footer>
<?php if ($this->countModules('modal1')) { ?>
	<div id="modal1" class="modal">
		<div class="modal-content">
			<jdoc:include type="modules" name="modal1" style="none" />
		</div>
		<div class="modal-footer">
		  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">X</a>
		</div>
	</div>
<?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-2.1.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/materialize.min.js" type="text/javascript" charset="utf-8"></script>
<script>
$(document).ready(function(){
    $('.modal-trigger').leanModal();
  });
</script>
</body>
</html>