<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container">
        <table class="text-left w-full">
            <thead class="bg-gray-500 flex text-white w-full">
                <tr class="flex w-full mb-1">
                    <th class="p-4 w-1/4">Name</th>
                    <th class="p-4 w-1/4">Email</th>
                    <th class="p-4 w-1/4">Contact</th>
                    <th class="p-4 w-1/4">Address</th>
                    <th class="p-4 w-1/4">Options</th>
                </tr>
            </thead>

            <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full"
                style="height: 50vh;">
                @forelse ($data as $datainfo)
                    <tr class="flex w-full mb-">
                        <td class="p-4 w-1/4">{{ $datainfo->name }}</td>
                        <td class="p-4 w-1/4">{{ $datainfo->email }}</td>
                        <td class="p-4 w-1/4">{{ $datainfo->telephone }}</td>
                        <td class="p-4 w-1/4">{{ $datainfo->address }}</td>
                        <td class="p-4 w-1/4">
                          @if ($datainfo->active_flag == true)                           
                          <button class="ml-4 mt-1 px-2 py-1 hover:bg-red-800 bg-red-500 text-white underline"
                              wire:click="deactivate({{ $datainfo->id }})">Deactivate Account</button>
                              @else
                              <button class="ml-4 mt-1 px-2 py-1 hover:bg-green-800 bg-green-500 text-white underline"
                              wire:click="activate({{ $datainfo->id }})">Activate Account</button>
                          @endif
                        </td>
                    @empty
                        <td class="pt-20 mt-6 text-xl font-bold text-blue-700">
                            <h1>NO RESULT LIKE TRUMP'S IQ TEST</h1>
                        </td>
                @endforelse
                </tr>
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
</div>
