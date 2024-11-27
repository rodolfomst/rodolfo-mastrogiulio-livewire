<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form class="p-5 shadow" wire:submit="store">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model.live="title">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" wire:model.blur="subtitle">
            @error('subtitle')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'articolo</label>
            <textarea wire:model.live.debounce.2000ms="body" id="body" class="form-control"></textarea>
            @error('body')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Inserisci articolo</button>
    </form>
</div>