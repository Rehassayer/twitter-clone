@if (session()->has('sucess'))

@endif

<div class="alert alert-sucess alert-dismissible fade show" role="alert">
    {{ session('sucess') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>