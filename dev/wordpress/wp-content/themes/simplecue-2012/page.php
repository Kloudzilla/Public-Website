<?php
	the_post();
	get_header();
?>
<div class="container main-container">
	<div class="main-container external-pages gymstick" xmlns="http://www.w3.org/1999/html">
		<div class="content">
			<?php
				the_content();
			?>
		</div>
	 </div>

    <script type="text/javascript">
       _kmq.push(['record', 'Viewed Gymstick Page']);
    </script>
</div>

<?php
	get_footer();