@extends('layouts.adminlte')

@section('content-main')
    <div class=" mt-4">
        <div class="row">
            <div class="col-md-4">
                @livewire('post.create')
            </div>
            <div class="col-md-8">
                @livewire('post.index')
            </div>
        </div>
    </div>
@endsection
