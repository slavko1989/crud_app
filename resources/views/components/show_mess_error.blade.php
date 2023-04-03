@props(['error_create_employee'])
@if(session()->has('error_create_employee'))
<p>{{ session()->get('error_create_employee') }}</p>
@endif