<footer class="prime-footer">
	<div class="container">
		<section class="footer-inn">
			<div class="col-lg-5 col-sm-8 col-xs-12">
				<div class="row between-xs">
					<div class="logo"><a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a></div>
					<ul class="soc-block row middle-xs">
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
					</ul>
					<p class="text-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida quam quis nunc rutrum placerat. Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.</p>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4 col-xs-12">
				<h5 class="text-head text-uppercase">Contact info</h5>
				<address class="text-desc">222 Ave C South
					Saskatoon, Saskatchewan
					Canada S7K 2N5
				</address>
				<address class="text-desc">info@deliver.ca</address>
				<h5 class="text-head text-uppercase">1.306.222.3456</h5>
			</div>
			<div class="col-lg-2 col-sm-6 col-xs-12">
				<h5 class="text-head text-uppercase">Quick Links</h5>
				<ul class="bot-menu">
					<li><a class="text-desc" href="#">Portfolio</a></li>
					<li><a class="text-desc" href="#">About</a></li>
					<li><a class="text-desc" href="#">Archive</a></li>
					<li><a class="text-desc" href="#">Blog</a></li>
					<li><a class="text-desc" href="#">Dropdown</a></li>
					<li><a class="text-desc" href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<h5 class="text-head text-uppercase">Newsletter</h5>
				<p class="text-desc">Lorem ipsum dolor sit amet dolor consectetur adipiscing elit. </p>
				<form class="email-form" action="#">
					<label><input class="input-email text-desc" type="email" placeholder="Email"></label>
					<button class="btn text-uppercase text-head">Ok</button>
				</form>
			</div>
		</section>
		<div class="row center-xs between-sm">
			<address class="text-head text-uppercase">Copyright <?php echo date('Y');?> <span><?php bloginfo('name'); ?>.</span> All Rights Reserved.</address>
			<ul class="view-footlinks row">
				<li><a href="#" class="text-head text-uppercase">About</a></li>
				<li><a href="#" class="text-head text-uppercase">Privacy policy</a></li>
				<li><a href="#" class="text-head text-uppercase">Contact</a></li>
			</ul>
		</div>
	</div>
</footer>
</div>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>