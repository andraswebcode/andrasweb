<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Rules\Recaptcha;

class ContactForm extends Component
{
    public string $name = '';
	public string $email = '';
	public string $message = '';
	public string $recaptchaToken = '';

	public function submit(string $token): void
	{
		$this->recaptchaToken = $token;

		$this->validate([
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'email', 'max:255'],
			'message' => ['required', 'string'],
			'recaptchaToken' => ['required', new Recaptcha],
		]);

		Mail::to(config('mail.contact.address'))->send(
			new ContactMail(
				$this->name,
				$this->email,
				$this->message,
			)
		);

		$this->reset();

		session()->flash('contact_success', true);

		// $this->redirectRoute('home', navigate: false);
	}

    public function render()
    {
        return view('livewire.contact-form');
    }
}
