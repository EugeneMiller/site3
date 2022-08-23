<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li <?php echo ($page == 1) ? "class='active'" : "" ?>>
					<a href="index.php?page=1">Catalog</a>
				</li>
				<li <?php echo ($page == 2) ? "class='active'" : "" ?>>
					<a href="index.php?page=2">Cart</a>
				</li>
				<li <?php echo ($page == 3) ? "class='active'" : "" ?>>
					<a href="index.php?page=3">Registration</a>
				</li>
				<li <?php echo ($page == 4) ? "class='active'" : "" ?>>
					<a href="index.php?page=4">Admin Forms</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
						Ученики
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Ivan</a>
						<a class="dropdown-item" href="#">Semen</a>
					</div>
				</li>
			</ul>
			</li>
			</ul>
			</ul>
			<ul class="nav navbar-nav navbar-right">

				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="input-sm" placeholder="login">
						<input type="pass" class="input-sm" placeholder="password">
					</div>
					<button type="submit" class="btn btn-sm btn-default">Login</button>
				</form>
			</ul>

		</div>
	</div>
</nav>