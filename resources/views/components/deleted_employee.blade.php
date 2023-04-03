@props(['deleted_employee'])

@if(session()->has('deleted_employee'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('deleted_employee') }}</p>
@endif