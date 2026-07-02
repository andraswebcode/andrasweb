<form>
	@if ($success)
	<div class="success-message">
		Köszönöm az üzenetet! Hamarosan felveszem veled a kapcsolatot.
	</div>
	@else
	<div class="form-group">
		<label>Név</label>
		<input type="text" wire:model="name">
		@error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="email" wire:model="email">
		@error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
	</div>

	<div class="form-group">
		<label>Üzenet</label>
		<textarea wire:model="message"></textarea>
		@error('message') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
	</div>

	@error('recaptchaToken')
		<span class="text-sm text-red-500">{{ $message }}</span>
	@enderror

	<button
		type="button"
		x-data
        class="btn-primary"
		@click="
			grecaptcha.ready(() => {
				grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {
					action: 'contact'
				}).then(token => {
					$wire.submit(token);
				});
			});
		"
	>
		Küldés
	</button>
	@endif
</form>

@once
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
@endonce

