<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
      <form class="w-full sm:max-w-md p-5 mx-auto" wire:submit.prevent="submit">
        @csrf
        <h2 class="mb-12 text-center text-5xl text-blue-500 font-extrabold">Login.</h2>
        @if ($errorMessage)
            <span class="text-red-500"> {{ $errorMessage }} </span>
        @endif
            <div class="mb-4">
                <label class="block mb-1" for="email">Email-Address</label>
                <span class="text-red-500"> @error('email')
                        {{ $message }}
                    @enderror
                </span>
                <input id="email" type="text" wire:model="email" autocomplete="email"
                    class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="password">Password</label>
                <span class="text-red-500"> @error('password')
                        {{ $message }}
                    @enderror
                </span>
                <input id="password" type="password" wire:model="password" autocomplete="current-password"
                    class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
            </div>
            <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <input wire:model="remember_me" type="checkbox"
                        class="border border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50" />
                    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900"> Remember me </label>
                </div>
            </div>
            <div class="mt-6">
                <button type="submit"
                    class="w-full inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-red-700 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">Sign
                    In</button>
            </div>
            <div class="mt-6 text-center">
                <a href="{{ url('/register') }}" class="underline">Sign up for an account</a>
            </div>
        </form>
    </div>
</div>
