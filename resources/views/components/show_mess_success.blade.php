@props(['create_employee'])

@if(session()->has('create_employee'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('create_employee') }}</p>
@endif