<x-layout>
    <x-slot:title>Musify - Homepage</x-slot:title>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">MusiFY-it!</h1>
            <h3 class="fw-normal text-muted mb-3">Explore, Listen, and Create Playlists</h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <a class="icon-link icon-link-hover" href="/songs">
                    Browse Songs
                    <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
                <a class="icon-link icon-link-hover" href="/playlists/create">
                    Create Playlist
                    <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Latest Songs</h5>
                        <p class="card-text">Discover the newest tracks across all genres</p>
                        <a href="/songs" class="btn btn-dark">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Top Artists</h5>
                        <p class="card-text">Explore trending musicians from around the world</p>
                        <a href="/artists" class="btn btn-dark">View Artists</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Popular Playlists</h5>
                        <p class="card-text">Find curated playlists for every mood and personalities</p>
                        <a href="/playlists" class="btn btn-dark">Browse Playlists</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
