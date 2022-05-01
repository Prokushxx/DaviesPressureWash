<div>
    <div class="open overflow-y-hidden overflow-x-hidden fixed right-0 left-0 top- z-50 justify-center items-center h-modal md:h-full md:inset-0"
        id="open" style="display:non;">
        <div class="relative w-full max-w-4xl h-full md:h-auto ">
            <div class="w-screen h-screen flex justify-center items-center ease-in" style="background: rgba(0,0,0,.7)">
                <form wire:submit.prevent="edit"
                    class="p-10 bg-white rounded flex justify-center w-2/4 items-center flex-col shadow-md ">
                    <div class="mt-0 flex justify-end ml-20 w-1/2">

                        <button class=" bg-blue-500 m rounded-lg px-2 py-0 text-white text-2xl hover:bg-blue-700"
                            wire:click="closeModal">x</button>
                    </div>

                    <Label>Name of Service</Label>
                    @error('name')
                        <span class="text-red-500"> {{ $message }} </span>
                    @enderror
                    <input type="text" wire:model="name"
                        class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none" onchange="stayOpen()"
                        autocomplete="username" placeholder="NAME">
                    <Label>Cost Of Service</Label>
                    @error('cost')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <input type="number" wire:model="cost"
                        class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none" placeholder="COST">


                    <Label>DESCRIPTION</Label>
                    @error('desc')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <textarea class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none" wire:model="desc"
                        placeholder="DESCRIPTION"></textarea>

                    <button type="submit" class="bg-blue-500 text-white text-lg py-1 px-2">Edit Services</button>
                </form>
            </div>
        </div>
    </div>
 
</div>
