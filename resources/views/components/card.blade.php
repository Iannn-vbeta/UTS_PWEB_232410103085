<div class="card" style="width: 18rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
    <img src="{{ asset('image/' . $image) }}" class="card-img-top mt-3" alt="{{ $name }}" style="height: 200px; object-fit: cover;">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title text-center">{{ $name }}</h5>
        <p class="card-text text-center">Harga: {{ $price }}</p>
        <p class="card-text mb-3 text-center">{{ $keterangan }}</p>
        <div class="mt-auto text-center">
            <button class="btn btn-success">Send</button>
        </div>
    </div>
</div>