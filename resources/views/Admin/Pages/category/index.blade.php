@extends('Admin.Layouts.master')
@section('title', 'Categories')
@section('content')

@foreach ($categories as $category)
    <p>{{ $category->name }}</p>
    
@endforeach

@endsection