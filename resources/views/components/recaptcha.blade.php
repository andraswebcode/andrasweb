<input type="hidden" name="recaptcha_token" id="recaptcha_token">

@once
	<script>
		(function () {
			grecaptcha.ready(async () => {
				const token = await grecaptcha.execute(
					'{{ config('services.recaptcha.site_key') }}',
					{
						action: 'contact'
					}
				);

				document.getElementById('recaptcha_token').value = token;
			});
		})();
	</script>
@endonce
