
<nav id = "header-menu">
<ul>
    <?php if (isLoggedIn()): ?>
	<li class = 'left-item'><a href="index.php">Pagina inicial</a></li>
    <li class = 'right-item'><a href=logout.php>Sair</a></li>
    <?php endif; ?>

</ul>
</nav>
