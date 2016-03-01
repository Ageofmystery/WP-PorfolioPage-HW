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
					<p class="text-desc"><?php bloginfo('description'); ?></p>
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
				<?php $menuArguments = array(
				'theme_location' => 'secondary',
				'container'       => 'false',
				'menu_class' 	=> 'bot-menu',
				);
				wp_nav_menu($menuArguments); ?>
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
			<?php $menuArguments = array(
				'theme_location' => 'last',
				'container'       => 'false',
				'menu_class' 	=> 'view-footlinks row',
			);
			wp_nav_menu($menuArguments); ?>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>