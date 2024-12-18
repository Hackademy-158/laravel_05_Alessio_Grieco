<x-layout>
    <x-slot:title>Musify - Create Song</x-slot:title>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h2 class="mb-0">Edit Song</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('songs.update', $song->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="title" class="form-label">Song Title *</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                    id="title" name="title" value="{{ old('title', $song->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="artist" class="form-label">Artist *</label>
                                <input type="text" class="form-control @error('artist') is-invalid @enderror" 
                                    id="artist" name="artist" value="{{ old('artist'), $song->artist }}" required>
                                @error('artist')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="album" class="form-label">Album</label>
                                <input type="text" class="form-control @error('album') is-invalid @enderror" 
                                    id="album" name="album" value="{{ old('album'), $song->album }}">
                                @error('album')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                    id="description" name="description" rows="3">{{ old('description'), $song->description }}</textarea>
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
                                </select>
                                @error('genre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image_path" class="form-label">Cover Image</label>
                                @if($song->image_path)
                                    <div class="mb-2">
                                        <img src="{{ Storage::url($song->image_path) }}" alt="Current image" class="img-thumbnail" style="max-height: 200px;">
                                    </div>
                                @endif
                                <input type="file" class="form-control @error('image_path') is-invalid @enderror" 
                                    id="image_path" name="image_path" accept="image/*">
                                @error('image_path')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Modify Song</button>
                                <a href="{{ route('songs.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
