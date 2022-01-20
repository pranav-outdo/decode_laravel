@if (session('success'))
<div class="alert alert-success" style="margin-left: auto;margin-right: auto;width: max-content;">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger" style="margin-right: auto;margin-left: auto;width: max-content;">
    {{ session('error') }}
</div>
@endif
