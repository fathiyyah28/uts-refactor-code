<h2>Hasil Pencarian Film</h2>

@if(isset($movies['Response']) && $movies['Response'] === 'True')
    <div class="row">
        @foreach($movies['Search'] as $film)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ $film['Poster'] }}" class="card-img-top" alt="{{ $film['Title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film['Title'] }}</h5>
                        <p class="card-text">{{ $film['Year'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>Film tidak ditemukan.</p>
@endif
