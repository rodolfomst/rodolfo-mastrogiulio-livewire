<x-layout>
    <x-header/>

    <livewire:counter/>
    <livewire:counter/>
</x-layout>
<script>
    let number = document.querySelector('#number');
    let decrement = document.querySelector('#decrement');
    let increment = document.querySelector('#increment');
    let value = number.innerHTML;
    
    increment.addEventListener('click', ()=>{
        value++;
        number.innerHTML = value;
    });

    decrement.addEventListener('click', ()=>{
        value--;
        number.innerHTML = value;
    });

</script>