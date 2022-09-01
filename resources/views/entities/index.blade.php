@extends('layout')
@section('content')
    @foreach ($entities as $entity)
        <x-preview :entity="$entity" />
    @endforeach
@endsection
