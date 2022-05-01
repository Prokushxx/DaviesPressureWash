<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div>
        <h1 class="px-3">WELCOME ADMIN</h1>
        <button class="text-2xl hover:bg-green-800 text-white px-2 py-1 bg-green-500 rounded mb-4"
            wire:click="$emitSelf('addservice')">
            Add Services
        </button>

        @if ($addmode)
            @include('livewire.admin.service.addservice')
        @endif

        @if ($editmode)
            @include('livewire.admin.service.editservice')
        @endif

        <div class="container">
            <table class="text-left w-full">
                <thead class="bg-gray-500 flex text-white w-full">
                    <tr class="flex w-full mb-1">
                        <th class="p-4 w-1/4">Name</th>
                        <th class="p-4 w-1/4">Cost</th>
                        <th class="p-4 w-1/4">Description</th>
                        <th class="p-4 w-1/4">Options</th>
                    </tr>
                </thead>
                <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full"
                    style="height: 50vh;">
                    @forelse ($data as $datainfo)
                        <tr class="flex w-full mb-">
                            <td class="p-4 w-1/4">{{ $datainfo->name }}</td>
                            <td class="p-4 w-1/4">{{ $datainfo->cost }}</td>
                            <td class="p-4 w-1/4">{{ $datainfo->desc }}</td>
                            <td class="p-4 w-1/4">
                                <button class="px-3 py-1 hover:bg-yellow-300 bg-yellow-500 text-white"
                                    wire:click="editService({{ $datainfo->id }})">Edit</button>
                                <button class="px-3 py-1 hover:bg-red-300 bg-red-700 text-white"
                                    wire:click="delete({{ $datainfo->id }})">Delete</button>
                            </td>
                        @empty
                            
                                <td class="pt-20 mt-6 text-xl font-bold text-blue-700">
                                    <h1>THERE IS NOTHNG TO SHOW HERE</h1>
                                    <p class="flex justify-center text-xl font-bold text-blue-700">ADD SERVICES</p>
                                </td>
                            
                    @endforelse
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
