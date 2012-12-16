<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<html>
	<head>
	<title><?php echo isset($title) ? $title : ''; ?></title>
	</head>

	<body>

		<h1><?php echo isset($title) ? $title : ''; ?></h1>

		<?php echo isset($content) ? $content : ''; ?>
		<?php if(!$entered): ?>
			<?php echo Form::open(); ?>
				<?php echo Form::label('username', 'Login') ?>:
				<br />
				<?php echo Form::input('username', NULL, array('id'=>'username')) ?><br />
				<?php echo Form::label('password', 'Password') ?>:
				<br />
				<?php echo Form::password('password', NULL, array('id'=>'password')) ?>
				<br />
				<?php echo Form::button('submit','Login') ?> 
			<?php echo Form::close(); ?>
		<?php endif ?>
	</body>
</html>
