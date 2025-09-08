@extends('layouts.app')



@section('content')
    <h1 class="mb-4 text-3xl text-white">{{ $page->title }}</h1>
    <div class="text-white">
        {!! $page->content !!}
    </div>
@endsection
