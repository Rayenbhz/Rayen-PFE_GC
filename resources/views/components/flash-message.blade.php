@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show" class=" alert alert-success alert-dismissible fixed top-0 left-1/2 transform -translate-x-1/2 bd-laravel text-white px-48 py-3">
<p>
    <button type="button" class="btn-close" data-bs-dismiss="alert"><i class="fa-solid fa-x"></i></button>
<strong>{{session('message')}} </strong> 
</p>
</div>

@endif
