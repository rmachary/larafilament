
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
            <div class="news-item">
            <h2>{{ $news->title }}</h2>
            <img src="{{ asset('storage/' . $news->image) }}" alt="News Image">
            <p>{{ $news->content }}</p>
            </div>
        </div>
    </div>

</body>
@endsection

@include('layout.layour2')


