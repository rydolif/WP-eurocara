
	<!-- modal -->
		<div class="modal" id="order">

			<button class="close order_close" type="button">
				<span></span>
				<span></span>
			</button>

			<h2><?php the_field('modal-title', 'option'); ?></h2>
			<h3><?php the_field('modal-sub-title', 'option'); ?></h3>
			<p class="modal__sub-title"><?php the_field('modal-text', 'option'); ?></p>

			<form class="form" method="post">

				<input type="hidden" name="subject" value="Узнать подробнее!">


				<div class="">
					<input type="tel" name="phone" required placeholder="+7-(999)-999-99-99">
				</div>
				<div class="form__btn">
					<button type="submit" class="btn" name="submit" id="file"><?php the_field('modal-btn', 'option'); ?></button>
				</div>
				<p>
					<a href="<?php the_field('policy-file', 'option'); ?>" target="_blank"><?php the_field('modal-policy-text', 'option'); ?></a>
				</p>

			</form>

		</div>

		<div class="modal" id="thanks">
			<button class="close thanks_close" type="button">
				<span></span>
				<span></span>
			</button>
			<h2>Спасибо за доверие!</h2>
			<p>
				<a href="<?php the_field('policy-file', 'option'); ?>" download target="_blank">Загрузить если загрузка неначалась</a>
			</p>
		</div>
	<!-- modal end-->


	<?php wp_footer(); ?>

	<script>
		  $('#file').on('click', function () {
		    $.ajax({
		        url: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/172905/test.pdf',
		        method: 'GET',
		        xhrFields: {
		            responseType: 'blob'
		        },
		        success: function (data) {
		            var a = document.createElement('a');
		            var url = window.URL.createObjectURL(data);
		            a.href = url;
		            a.download = '<?php the_field('file', 'option'); ?>';
		            a.click();
		            window.URL.revokeObjectURL(url);
		        }
		    });
		});
	</script>

</body>
</html>
