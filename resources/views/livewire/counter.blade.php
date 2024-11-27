<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">{{ $value }}</h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-danger mx-2" wire:click="decrement">-1</button>
            <button class="btn btn-success mx-2" wire:click="increment">+1</button>
        </div>
    </div>
</div>