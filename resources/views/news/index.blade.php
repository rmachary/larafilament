
@include('layout.layouts')
{{-- @extends('layout.layour2') --}}



    <style>
        body {
            padding-top: 20px;
        }

        .header {
            background-color: #9899993f;
            color: rgb(5, 5, 5);
            padding: 20px 0;
            text-align: center;
        }

        .footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        .news-item {
            margin-bottom: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .news-image {
            width: 100%;
            height: auto;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
        }
    </style>


@section('machary')
<body>
    <div class="header">
        <h1>Bethsaida Secondary School News</h1>
        <p>Stay updated with the latest news and events!</p>
    </div>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('failure'))
            <div class="alert alert-danger">
                {{ session('failure') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">
                @foreach ($newsItems as $new)
                    <div class="news-item">
                        {{-- <img src="{{ $new->image ? url('storage/' . $new->image) : 'https://via.placeholder.com/800x300' }}" alt="News Image" class="news-image"> --}}
                        <img src="/storage/new_image/{{ $new->image }}" width="500px">

                        <div class="p-3">
                            <h2>{{ $new->title }}</h2>
                            <p class="text-muted">Published on {{ $new->published_at->format('F j, Y') }}</p>
                            <p>{{ Str::limit($new->content, 200) }}</p>
                            <a href="{{ route('news.show', $new->id) }}" class="btn btn-custom">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">
                <h3>Recent Updates</h3>
                <ul class="list-group">
                    @foreach ($newsItems->take(15) as $new)
                        <li class="list-group-item"><a href="{{ route('news.index', $new->id) }}">{{ Str::limit($new->title) }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


</body>
@endsection

@include('layout.layour2')


