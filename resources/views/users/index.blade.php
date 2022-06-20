@extends('layouts.adminlte')

@section('content-main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">
                        @livewire('user.filter')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
