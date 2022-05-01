<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h1 class="text-2xl font-semibold text-blue-500 text-center mt-5">SERVICES WE OFFER</h1>
    @guest
        <h5 class="font-semibold text-red-500 text-center mt-1">Please login before making a Reservation</h5>
    @endguest
    <!-- component -->
    <a href="#">
        <div class="py-16">
            <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0 ">
                <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
                    @foreach ($info as $data)
                        <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8 cursor-grab">
                            <div class="mb-12">
                                <h3 class="text-2xl font-semibold uppercase text-purple-900">{{ $data->name }}</h3>
                                <h3 class="text-xl font-semibold uppercase text-purple-900">${{ $data->cost }}</h3>
                                <p class="mb-6 uppercase">{{ $data->desc }}
                                </p>
                                <a href="{{ url('reservation', $data->id) }}"
                                    class="block font-medium text-purple-600">Make Reservation</a>
                            </div>
                            <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg"
                                class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </a>
</div>
