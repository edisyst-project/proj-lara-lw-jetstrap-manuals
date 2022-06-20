@extends('layouts.adminlte')

@section('content-main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add new product') }}</div>

                    <div class="card-body">
                        @livewire('product.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
