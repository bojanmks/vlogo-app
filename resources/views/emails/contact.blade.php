@component('mail::message')
# {{ $subject }}

{{ $message }}
<br/><br/>
<span>Sent from: {{ $email }}</span>
@endcomponent
