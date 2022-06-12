<div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fa-solid fa-envelopes-bulk mr-2"></i>
                Posts List
            </h3>
            <div class="card-tools">
                <div class="flex align-content-between">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="input-group mb-4">
                    <input
                        wire:model="search"
                        type="text"
                        class="form-control"
                        placeholder="Filtra per titolo o contenuto del post..."
                    />
                    @if($search != '')
                        <button wire:click="reset" class="btn btn-outline-primary">Reset filtro</button>
                    @endif
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
{{--                                <img src="{{ $post->photo }}" class="img-fluid" />--}}
                                <img src="{{ Storage::url($post->photo) }}" class="img-fluid" />
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit($post->text, 10, '...') }}
                                </p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

        <div class="card-footer clearfix">
            <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item </button>
        </div>
    </div>


</div>
