@extends('web.app')
@section('content')

    <div class="container">
        <h1 class="h3 text-center page-header"></h1>
    </div>
    <div class="container">

        <div class="starter-template">
            <h1>{{ $data->title }}</h1>
            <p class="lead"><?=$data->body?></p>
        </div>

    </div>
@endsection

