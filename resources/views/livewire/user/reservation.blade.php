<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="grid lg:grid-cols-2 md:grid-cols-1 space-x-3">
        <div class="h-screen w-full flex justify-center items-center">
            <div class="shadow-xl w-3/4 h-3/4 rounded-lg flex items-center justify-center">
                <form wire:submit.prevent="submit" class="space-y-4">
                    <h1 class="text-2xl text-blue-500 mb-10">Reservation Form</h1>
                    @csrf
                    @error('date')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div>
                      <label for="date">Date</label><br>
                        <input type="date" wire:model='date'
                            class="w-full px-4 py-1 border-2 border-gray-500 active:border-gray-400">
                    </div>
                    @error('time')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div>
                      <label for="date">Time</label><br>
                        <input type="time" wire:model='time'
                            class="w-full px-4 py-1 border-2 border-gray-500 active:border-gray-400">
                    </div>

                    <div>
                        <button type="submit"
                            class="w-9/10 px-4 py-1  border-2 border-gray-500 hover:border-green-400">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0 ">
                <div class="mx-auto h-3/4 md:w-3/4 lg:w-3/4">

                    <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8 cursor-grab">
                        <div class="mb-12">
                            <h3 class="text-2xl font-semibold text-purple-900">{{ $data[0]['name'] }}</h3>
                            <h3 class="text-xl font-semibold text-purple-900">Starting At ${{ $data[0]['cost'] }}</h3>
                            <p class="mb-6">
                                {{ $data[0]['desc'] }}
                            </p>
                        </div>
                        <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg"
                            class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  window.addEventListener('reserveadd',function (e) {
    Swal.fire(
      e.detail
    )
  })
</script>
