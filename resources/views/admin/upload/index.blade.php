@extends('layouts.admin')

@section('title', 'Uploads')

@section('content')
    <a href="{{ route('admin.uploads.create') }}" class="btn btn-primary">New Upload</a>

    @dd(\Illuminate\Support\Facades\Storage::disk('local')->files('chunks'))
@endsection
