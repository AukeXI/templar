<?php
// Written by Auke Scheepstra
// Basic nav?>
<ul id="nav-container">
	<a href="index.php"><img id="nav-logo" src="img/logo.png"></a>
	<?php if($pagetype == 'shop')
	echo '<form id="nav-search" method="GET">
		<input id="query" type="text" name="query" placeholder="Search"/>
	</form>';?>
	<li class="nav-item">
		About
		<ul class="nav-dropdown">
			<a href="##"><li class="nav-dropdown-item">Team</li></a>
			<a href="#"><li class="nav-dropdown-item">Mission</li></a>
			<a href="#"><li class="nav-dropdown-item">History</li></a>
		</ul>
	</li>
	<li class="nav-item">Contact</li>
	<a href="shop.php"><li class="nav-item">Shop</li></a>
</ul>