@if (count($errors) > 0)
<div class="alert alert-danger mt-3">
    @foreach ($errors->all() as $error)
    <p class="mb-0">{{ $error }}</p>
    @endforeach
</div>
@endif
