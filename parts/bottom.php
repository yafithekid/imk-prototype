<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
	<div class="container-fluid">
	
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-bottom">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<p class="navbar-text" href="#"><span id="currentDateTime"></span></p>
		</div>

		<div class="collapse navbar-collapse" id="navbar-bottom">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?= $bottom['user'] ?></a>
					<ul class="dropdown-menu" role="menu">
						<?php foreach ($bottom['user_menu'] as $text => $link): ?>
							<li><a href="<?= $link ?>"><?= $text ?></a></li>
						<?php endforeach ?>
					</ul>
				</li>
			</ul>
		</div>

	</div>
</nav>
<script type="text/javascript">
	var currentDateTime = document.getElementById('currentDateTime');
	function updateCurrentDateTime() {
		currentDateTime.innerHTML = new Date().toLocaleString();
	}
	updateCurrentDateTime();
	setInterval(updateCurrentDateTime, 1000);
</script>