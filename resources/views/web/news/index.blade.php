@extends('web.app')
@section('content')

    <div class="container">
        <h1 class="h3 text-center page-header">{{ __('messages.news') }}</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach($data as $item)
                @include('web.news.block',['news' => $item])
            @endforeach


        </div>
    </div>
@endsection

