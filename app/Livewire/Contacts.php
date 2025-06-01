<?php

namespace App\Livewire;

use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contacts extends Component
{

    public $email;
    public $subject;
    public $contactMessage;
    public $success;

    protected $rules = [
        'email' => 'required|email',
        'subject' => 'required',
        'contactMessage' => 'required|min:5',
    ];

    public function contactFormSubmit()
    {
        $validated = $this->validate();

        Mail::send('email',
        array(
            'email' => $this->email,
            'subject' => $this->subject,
            'contactMessage' => $this->contactMessage,
            ),
            function($compose){
                $compose->from('portofolio@web.com');
                $compose->to('ricoadhe08@gmail.com', 'Rico')->subject('Dari Contact Form Website');
            }
        );

        try {
            // Send Mail
            Mail::to('ricoadhe08@gmail.com')->send(New ContactUsMail($validated));

            session()->flash('success', 'Message sent successfully!');
        } catch (\Throwable $th) {
            
            session()->flash('error', 'Failed sending message. Try again.');
        }

        $this->resetFields();
    }

    private function resetFields()
    {
        $this->email = '';
        $this->subject = '';
        $this->contactMessage = '';
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}
