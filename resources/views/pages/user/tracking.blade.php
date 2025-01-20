@extends('layouts.admin')

@section('content')
    @include('components.adminHeader', [
        'title' => $title,
        'description' => $description,
    ])

    @include('components.adminSidebar')


@endsection
