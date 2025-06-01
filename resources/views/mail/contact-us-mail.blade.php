<x-mail::message>
# New Contact from Web

## Subject : {{ $contactData['subject' ]}}

## Email : {{ $contactData['email' ]}}

## Message :
{{ $contactData['contactMessage' ]}}


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
