<div>
    {{-- Stop trying to control. --}}
    <div class="ml-4 animate-bounce">
        <h1 class="text-3xl font-bold text-blue-500"> Welcome </h1>
        <p class="text-xl text-blue-500 uppercase font-bold"> {{ Auth::user()->name }}</p>
    </div>
    @include('livewire.home')
</div>
