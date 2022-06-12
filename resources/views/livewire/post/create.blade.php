<div class="card">
    <div class="card-header">
        <i class="fa-solid fa-pen-to-square"></i>
        New Post (posso metterci un controllo sui permessi dell'utente)
    </div>
    <div class="card-body">
        <form wire:submit.prevent="save">

            <div class="form-group">
                <label for="title">Title</label>
                <input wire:model="title" type="text" id="title" class="form-control" />
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input wire:model="photo" type="file" class="form-control" id="photo" />
                @error('photo') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="text">Text</label>
                <textarea wire:model="text" class="form-control" id="text" rows="4"></textarea>
                @error('text') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
        </form>
    </div>
</div>
