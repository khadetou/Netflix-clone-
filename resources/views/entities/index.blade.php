@extends('layout')
@section('content')
    @foreach ($entitiesrand as $entity)
        <x-preview :entity="$entity" />
    @endforeach
    @foreach ($categories as $category)
        <x-category-preview :category="$category" />
    @endforeach
@endsection
