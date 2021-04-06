@component('mail::message')
# Introduction

Thanks you ,  for Registration  to our App.
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
