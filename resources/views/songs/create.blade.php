<x-layout>
    <x-slot:title>Musify - Create Song</x-slot:title>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h2 class="mb-0">Add New Song</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('songs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="title" class="form-label">Song Title *</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                    id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="artist" class="form-label">Artist *</label>
                                <input type="text" class="form-control @error('artist') is-invalid @enderror" 
                                    id="artist" name="artist" value="{{ old('artist') }}" required>
                                @error('artist')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="album" class="form-label">Album</label>
                                <input type="text" class="form-control @error('album') is-invalid @enderror" 
                                    id="album" name="album" value="{{ old('album') }}">
                                @error('album')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                    id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre</label>
                                <select class="form-select @error('genre') is-invalid @enderror" id="genre" name="genre">
                                    <option value="">Select Genre</option>
                                    <option value="Pop" {{ old('genre') == 'Pop' ? 'selected' : '' }}>Pop</option>
                                    <option value="Rock" {{ old('genre') == 'Rock' ? 'selected' : '' }}>Rock</option>
                                    <option value="Jazz" {{ old('genre') == 'Jazz' ? 'selected' : '' }}>Jazz</option>
                                    <option value="Classical" {{ old('genre') == 'Classical' ? 'selected' : '' }}>Classical</option>
                                    <option value="Hip Hop" {{ old('genre') == 'Hip Hop' ? 'selected' : '' }}>Hip Hop</option>
                                    <option value="R&B" {{ old('genre') == 'R&B' ? 'selected' : '' }}>R&B</option>
                                    <option value="Country" {{ old('genre') == 'Country' ? 'selected' : '' }}>Country</option>
                                    <option value="Electronic" {{ old('genre') == 'Electronic' ? 'selected' : '' }}>Electronic</option>
                                    <option value="Dance" {{ old('genre') == 'Dance' ? 'selected' : '' }}>Dance</option>
                                    <option value="Metal" {{ old('genre') == 'Metal' ? 'selected' : '' }}>Metal</option>
                                    <option value="Punk" {{ old('genre') == 'Punk' ? 'selected' : '' }}>Punk</option>
                                    <option value="Folk" {{ old('genre') == 'Folk' ? 'selected' : '' }}>Folk</option>
                                    <option value="Soul" {{ old('genre') == 'Soul' ? 'selected' : '' }}>Soul</option>
                                    <option value="Blues" {{ old('genre') == 'Blues' ? 'selected' : '' }}>Blues</option>
                                    <option value="Reggae" {{ old('genre') == 'Reggae' ? 'selected' : '' }}>Reggae</option>
                                    <option value="Latin" {{ old('genre') == 'Latin' ? 'selected' : '' }}>Latin</option>
                                    <option value="Gospel" {{ old('genre') == 'Gospel' ? 'selected' : '' }}>Gospel</option>
                                    <option value="Indie" {{ old('genre') == 'Indie' ? 'selected' : '' }}>Indie</option>
                                    <option value="Ska" {{ old('genre') == 'Ska' ? 'selected' : '' }}>Ska</option>
                                    <option value="Metalcore" {{ old('genre') == 'Metalcore' ? 'selected' : '' }}>Metalcore</option>
                                    <option value="Funk" {{ old('genre') == 'Funk' ? 'selected' : '' }}>Funk</option>
                                    <option value="Trap" {{ old('genre') == 'Trap' ? 'selected' : '' }}>Trap</option>
                                    <option value="EDM" {{ old('genre') == 'EDM' ? 'selected' : '' }}>EDM</option>
                                    <option value="House" {{ old('genre') == 'House' ? 'selected' : '' }}>House</option>
                                    <option value="Dancehall" {{ old('genre') == 'Dancehall' ? 'selected' : '' }}>Dancehall</option>
                                    <option value="Dubstep" {{ old('genre') == 'Dubstep' ? 'selected' : '' }}>Dubstep</option>
                                    <option value="Drum&Bass" {{ old('genre') == 'Drum&Bass' ? 'selected' : '' }}>Drum&Bass</option>
                                    <option value="Techno" {{ old('genre') == 'Techno' ? 'selected' : '' }}>Techno</option>
                                    <option value="Future Bass" {{ old('genre') == 'Future Bass' ? 'selected' : '' }}>Future Bass</option>
                                </select>
                                @error('genre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image_path" class="form-label">Cover Image</label>
                                <input type="file" class="form-control @error('image_path') is-invalid @enderror" 
                                    id="image_path" name="image_path" accept="image/*">
                                @error('image_path')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Add Song</button>
                                <a href="{{ route('songs.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
