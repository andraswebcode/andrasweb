<?php

namespace App\Rules;

use App\Services\RecaptchaService;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Recaptcha implements ValidationRule
{
	public function validate(string $attribute, mixed $value, Closure $fail): void
	{
		$verified = app(RecaptchaService::class)->verify(
			(string) $value,
			request()->ip()
		);

		if (!$verified) {
			$fail('A reCAPTCHA ellenőrzés sikertelen volt. Kérjük, próbáld újra.');
		}
	}
}
