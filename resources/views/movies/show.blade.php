@extends('welcome')

@section('movies')
    <section class="container">
        <p>All movies</p>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    {{ $movie->title }}
                </li>
            @endforeach
        </ul>
    </section>
@endsection
