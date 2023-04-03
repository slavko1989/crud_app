@props(['edit'])

@if(session()->has('edit'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('edit') }}</p>
@endif