@props(['judul'])
<div class="card">
    <div class="card-header"><h5 class="card-title fw-bold">{{ $judul }}</h5></div>
    <div class="card-body">{{ $slot }}</div>
</div>
