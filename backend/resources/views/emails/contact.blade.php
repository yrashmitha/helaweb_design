@component('mail::message')
# Introduction

{{$token["mail"]}}

{{$token["subject"]}}

{{$token["name"]}}

{{$token["tel"]}}

{{$token["message"]}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
