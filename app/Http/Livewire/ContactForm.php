<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $full_name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;

    protected $rules = [
        'full_name' => 'required',
        'email' => ['required','email'],
        'phone' => 'required',
        'message' => 'required'
    ];

    public function updated($propertyName)
    {   
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();

        $contact['full_name'] = $this->full_name;
        $contact['email'] = $this->email;
        $contact['phone'] = $this->phone;
        $contact['message'] = $this->message;

        $this->resetForm();
        $this->successMessage = 'We have received your message, thanks for contacting us';

        // Mail::to($contact['email'])->send(new ContactMail());
    }

    public function resetForm()
    {
        $this->full_name = '';
        $this->email = '';
        $this->phone ='';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
