<x-layout>
    <x-slot:title>Musify - Songs</x-slot:title>

    <div class="container py-5">
        <div class="d-flex justify-content-between container-fluid align-items-center mb-4">
            <h1>Songs Collection</h1>
            <div>
                <a href="{{ route('songs.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Song List
                </a>
                <a href="{{ route('songs.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i> Add New Song
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row g-4">
            @forelse($songs as $song)
                <div class="col-md-4">
                    <div class="card bg-dark text-white h-100">
                        @if ($song->image_path)
                            <img src="{{ $song->image_path === 'default/ildio.jpg' ? asset('default/ildio.jpg') : Storage::url($song->image_path) }}"
                                class="card-img-top" alt="{{ $song->title }}">
                        @else
                            <div class="bg-secondary text-white text-center py-5">
                                <i class="bi bi-music-note-beamed display-1"></i>
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $song->title }}</h5>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class="bi bi-person"></i> {{ $song->artist }}
                                </small>
                            </p>
                            @if ($song->album)
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="bi bi-disc"></i> {{ $song->album }}
                                    </small>
                                </p>
                            @endif
                            @if ($song->genre)
                                <span class="badge bg-primary">{{ $song->genre }}</span>
                            @endif
                        </div>
                        <div class="card-footer">
                            <div class="btn-group w-100">
                                <a href="{{ route('songs.edit', $song->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('songs.destroy', $song->id) }}" method="POST"
                                    class="d-inline w-50">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        No songs available yet. Be the first to <a href="{{ route('songs.create') }}"
                            class="alert-link">add a song</a>!
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
