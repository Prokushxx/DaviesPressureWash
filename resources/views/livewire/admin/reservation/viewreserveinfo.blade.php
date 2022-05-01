<div
    class="overflow-y-hidden overflow-x-hidden fixed right-0 left-0 top- z-50 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative w-full max-w-4xl h-full md:h-auto ">
        <div class="w-screen h-screen flex justify-center items-center ease-in" style="background: rgba(0,0,0,0.2)">
            <div class="bg-white h-3/4 w-3/4">
                <div class="flex justify-end mr-4 pt-4">
                </div>
                <div class="grid grid-cols-2 h-full flex justify-center items-center">
                    <div class="border-gray-500 border-r-2 px-2 h-3/4 w-full grid grid-rows-4">
                        <div>
                            <label for="username" class="text-md font-bold text-gray-300">Name</label>
                            <input type="text" wire:model="username"
                                class="border-b-2 border-gray-400 w-full text-xl pb-4">
                        </div>

                        <div>
                            <label for="username" class="text-md font-bold text-gray-300">Address</label>
                            <input type="text" wire:model="address"
                                class="border-b-2 border-gray-400 w-full text-xl pb-4">
                        </div>

                        <div>
                            <label for="username" class="text-md font-bold text-gray-300">Email</label>
                            <input type="text" wire:model="email"
                                class="border-b-2 border-gray-400 w-full text-xl pb-4">
                        </div>

                        <div>
                            <label for="username" class="text-md font-bold text-gray-300">Phone</label>
                            <input type="text" wire:model="phone"
                                class="border-b-2 border-gray-400 w-full text-xl pb-4">
                        </div>
                    </div>

                    <div class="grid grid-rows-4 h-3/4 px-2">
                        <div>
                            <label for="servicename" class="text-md font-bold text-gray-300">Service Name</label>
                            <input type="text" wire:model="servicename"
                                class="w-full pb-4 text-xl px-2 border-b-2 border-gray-400">
                        </div>

                        <div>
                            <label for="cost" class="text-md font-bold text-gray-300">Cost</label>
                            <input type="text" wire:model="cost"
                                class="w-full pb-4 text-xl px-2 border-b-2 border-gray-400">
                        </div>

                        <div>
                            <label for="status" class="text-md font-bold text-gray-300">Status</label>
                            <input type="text" wire:model="status"
                                class="w-full pb-4 text-xl px-2 border-b-2 border-gray-400">
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <label for="date" class="text-md font-bold text-gray-300">Appointment Date</label>
                                <input type="text" wire:model="date"
                                    class="w-full pb-4 text-xl px-2 border-b-2 border-gray-400">
                            </div>

                            <div>
                                <label for="time" class="text-md font-bold text-gray-300">Time</label>
                                <input type="text" wire:model="time"
                                    class="w-full pb-4 text-xl px-2 border-b-2 border-gray-400">
                            </div>
                        </div>
                        <div class="flex space-x-8">
                            <button class="bg-blue-600 text-white w-1/6" wire:click="closeModal">Close</button>
                            <button class="bg-green-600 hover:bg-green-300 text-white w-3/6" wire:click="editDateTime">Edit Date and
                                Time</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
