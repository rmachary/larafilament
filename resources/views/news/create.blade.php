

@include('layout.layouts')

    <div class="container">
        <h1>Create News</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('news.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" rows="4" required>{{ old('content') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image" >
                <small class="form-text text-muted">Recommended size: 800x500px</small>
            </div>

            <div class="mb-3">
                <label for="published_at" class="form-label">Publish Date</label>
                <input type="date" name="published_at" class="form-control" id="published_at" value="{{ old('published_at') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit News</button>
        </form>
    </div>
@include('layout.layour2')

