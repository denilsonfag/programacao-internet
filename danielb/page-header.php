<nav id = "header-menu"> 
<ul>
	<li class = 'left-item'><a href="#">Pagina inicial</a></li>
	<li class = 'right-item'><a href="#">Entrar</a></li>
	<?php
			if(isset($_SESSION['usuario'])) 
			echo "<li class = 'right-item'><a href='#'>Sair</a></li>"; 
	?>
</ul>
</nav>