<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Modifica articolo</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <livewire:edit-article :article="$article"/>
            </div>
        </div>
    </div>
</x-layout>