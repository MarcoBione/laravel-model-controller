@extends('welcome')

@section('movies')
    <section class="container">
        <p>Most viewed</p>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    {{ $movie->title }}
                    {{ $movie->id }}
                </li>
            @endforeach
        </ul>
    </section>
@endsection
