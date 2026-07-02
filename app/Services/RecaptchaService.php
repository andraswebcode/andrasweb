<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RecaptchaService
{
	public function enabled(): bool
	{
		return (bool) config('services.recaptcha.enabled');
	}

	public function verify(?string $token, ?string $ip = null): bool
	{
		if (!$this->enabled()) {
			return true;
		}

		if (empty($token)) {
			return false;
		}

		try {
			$response = Http::asForm()->timeout(5)->post('https://www.google.com/recaptcha/api/siteverify', [
				'secret' => config('services.recaptcha.secret_key'),
				'response' => $token,
				'remoteip' => $ip,
			]);
		} catch (\Throwable) {
			return false;
		}

		return (bool) data_get($response->json(), 'success');
	}
}
