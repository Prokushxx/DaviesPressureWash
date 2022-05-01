<div>
    {{-- The Master doesn't talk, he acts. --}}

    <div class="w-full mb-1 grid grid-cols-2">
        <div>
            <label class="text-lg" for="">Fiter Search by:</label>
            <Select class="px-2 py-1 mb-2" wire:model='opt'>
                <option value="all">ALL</option>
                <option value="accept">ACCEPTED</option>
                <option value="reject">REGECTED</option>
                <option value="pend">PENDING</option>
            </Select>
        </div>

        <div class="flex justify-end px-3 mb-2">
            <input type="text" placeholder="Search Name..." wire:model='search' class="w-2/4 px-2 py-1">
        </div>
    </div>
    <div class="container">
        <table class="text-left w-full">
            <thead class="bg-gray-500 flex text-white w-full">
                <tr class="flex w-full mb-1">
                    <th class="p-4 w-1/4">Name</th>
                    <th class="p-4 w-1/4">Service</th>
                    <th class="p-4 w-1/4">Contact</th>
                    <th class="p-4 w-1/4">Requested Date</th>
                    <th class="p-4 w-1/4">Options</th>
                </tr>
            </thead>
            <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full"
                style="height: 50vh;">
                @forelse ($data as $datainfo)
                    <tr class="flex w-full mb-">
                        <td class="p-4 w-1/4">{{ $datainfo->user->name }}</td>
                        <td class="p-4 w-1/4">{{ $datainfo->service->name }}</td>
                        <td class="p-4 w-1/4">{{ $datainfo->user->telephone }}</td>
                        <td class="p-4 w-1/4">
                            <p>Date:</p> {{ $datainfo->date }} <br>
                            <p>Time :</p> {{ $datainfo->time }}
                        </td>
                        <td class="p-4 w-1/4">
                            @if ($datainfo->status == 'Pending')
                                <button class="px-2 py-1 hover:bg-green-300 bg-green-500 text-white"
                                    wire:click="accept({{ $datainfo->id }})">Accept</button>
                                <button class="px-2 py-1 hover:bg-red-300 bg-red-700 text-white"
                                    wire:click="reject({{ $datainfo->id }})">Reject</button>
                            @elseif ($datainfo->status == 'Accepted')
                                <button class="px-2 py-1 hover:bg-blue-300 bg-blue-500 text-white"
                                    wire:click="pend({{ $datainfo->id }})">Stall</button>
                                <button class="px-2 py-1 hover:bg-red-300 bg-red-700 text-white"
                                    wire:click="reject({{ $datainfo->id }})">Reject</button>
                            @elseif ($datainfo->status == 'Rejected')
                                <button class="px-2 py-1 hover:bg-green-300 bg-green-500 text-white"
                                    wire:click="accept({{ $datainfo->id }})">Accept</button>
                                <button class="px-2 py-1 hover:bg-blue-300 bg-blue-700 text-white"
                                    wire:click="pend({{ $datainfo->id }})">Stall</button>
                            @endif
                            <button class="ml-4 mt-1 px-2 py-1 hover:bg-yellow-300 bg-yellow-500 text-white underline"
                                wire:click="$emitSelf('viewreserve',{{ $datainfo->id }})">View More</button>
                        </td>
                        @if ($viewresmode)
                            @include(
                                'livewire.admin.reservation.viewreserveinfo'
                            );
                        @endif
                    @empty
                        <td class="pt-20 mt-6 text-xl font-bold text-blue-700">
                            <h1>NO RESULT</h1>
                        </td>
                @endforelse
                </tr>

            </tbody>
        </table>
        {{ $data->links() }}
    </div>
</div>
