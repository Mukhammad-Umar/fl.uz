@extends('back.store-update.template')

@section('form-open')
    <form method="post" action="{{ route('news.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}
@endsection