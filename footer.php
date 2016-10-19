	<footer class="section">
		<div class="container">
			<div class="col-2">
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu')); ?>
				</nav>
				<!-- <ul>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">FSG</a></li>
					<li><a href="#">Disclaimer</a></li>
				</ul> -->
			</div>
			<div class="col-2">
				<ul>
					<li> <a href="http://www.sailorstudio.com.au/" target="_blank">Website by Sailor Studio</a></li>
					<li>Copyright 2016 Woodbury</li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="https://use.typekit.net/bfk3wzf.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
</body>
</html>

<?php wp_footer(); ?>