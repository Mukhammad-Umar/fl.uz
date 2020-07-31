@extends('back.store-update.template')

@section('form-open')
    <form method="post" action="{{ route('news.update', [$news->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}
@endsection
