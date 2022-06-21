@extends('layouts.adminlte')

@section('content-main')
    <div class=" mt-4">
        <div class="row">
            <div class="col-md-3">
                @livewire('todo.notification-component') <!-- This component will show notification when todo is saved or updated -->
                @livewire('todo.form-component') <!-- This component will display Todo form -->
            </div>

            <div class="col-md-9">
                @livewire('todo.list-component') <!-- This component will list Todos -->
            </div>
        </div>
    </div>
@endsection

