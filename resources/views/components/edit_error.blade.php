@props(['edit_error'])
@if(session()->has('edit_error'))
<p>{{ session()->get('edit_error') }}</p>
@endif