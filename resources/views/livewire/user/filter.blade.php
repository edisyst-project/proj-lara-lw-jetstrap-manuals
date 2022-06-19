<div>
    <div class="row">
        <div class="col-md-3">
            <input wire:model="searchQuery" type="text" placeholder="Search for user..." class="form-control" />
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="alert alert-default-info">
            Questo paginatore non scrive niente nella querystring (quindi non fa conflitto col filter), sembra anche più compatto di quello di Products.
        </div>
    </div>

    <table class="table" wire:loading.class="bg-success">
        <thead>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No users found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $users->links('livewire.user.pagination') }}
</div>
