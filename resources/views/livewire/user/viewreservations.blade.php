<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div
        class="overflow-y-hidden overflow-x-hidden fixed right-0 left-0 top- z-50 justify-center items-center h-modal md:h-full md:inset-0">
        <div class="relative w-full max-w-4xl h-full md:h-auto ">
            <div class="w-screen h-screen flex justify-center items-center ease-in" style="background: rgba(0,0,0,0.2)">
                <div class="bg-white h-3/4 w-3/4">
                    <div class="container">
                        <table class="text-left w-full">
                            <thead class="bg-gray-500 flex text-white w-full">
                                <tr class="flex w-full mb-1">
                                  <th class="p-4 w-1/4">Service</th>
                                  <th class="p-4 w-1/4">Cost</th>
                                  <th class="p-4 w-1/4">Requested Date</th>
                                  <th class="p-4 w-1/4">Status</th>
                                    <th class="p-4 w-1/4">Options</th>
                                </tr>
                            </thead>
                            <tbody
                                class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full"
                                style="height: 50vh;">
                                @forelse ($data as $info)
                                    <tr class="flex w-full border-b-2">
                                      <td class="p-4 w-1/4">{{ $info->service->name }}</td>
                                      <td class="p-4 w-1/4">{{ $info->service->cost }}</td>
                                      <td class="p-4 w-1/4">
                                        <p>Date:</p>{{ $info->date }}<br>
                                        <p>Time :</p>  {{ $info->time }}
                                      </td>
                                      <td class="p-4 w-1/4">{{ $info->status }}</td>
                                      <td class="p-4">
                                        <button wire:click=" delete({{$info->id}}) " class="px-2 py-1 bg-red-500 mt-2 text-white text-sm">Cancel</button>
                                      </td>
                                      @empty
                                      <td class="pt-20 mt-6 text-xl font-bold text-blue-700">
                                        <h1>YOU HAVE NOT MADE ANY RESERVATIONS AS YET</h1>
                                      </td>
                                @endforelse
                                </tr>
                            </tbody>
                        </table>
                        {{ $data->links() }}
                    </div>
                    <div class="w-full flex justify-center">
                        <button wire:click="closeView" class="px-2 py-1 bg-red-500 hover:bg-red-700 text-white mt-4">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
