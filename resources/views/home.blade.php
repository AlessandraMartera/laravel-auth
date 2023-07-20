@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        Questi sono i miei bellissimi progetti
    </div>

    <div class="container">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, earum esse! Placeat ea ipsum distinctio totam
            ullam, magni dolor voluptatem ipsa aspernatur quos eos expedita esse illum, non eum maxime!Asperiores
            repudiandae quis sequi cum labore illum, et vel blanditiis laudantium dolorem earum dolorum eligendi,
            praesentium architecto magni optio voluptatibus laboriosam ipsam veniam? Minus fuga eligendi assumenda fugit?
            Aspernatur, unde!
        </p>

        <div>
            <ul class="d-flex flex-wrap justify-around">
                @foreach ($projects as $project)
                    <li>{{ $project['name'] }}</li>
                @endforeach
            </ul>
        </div>


    </div>
@endsection
