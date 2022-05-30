<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="relative w-full max-w-2xl h-full md:h-auto ">
        <div class="w-screen h-screen bg-gray-50 flex justify-center items-center ease-in">
            <div class="w-screen h-screen flex justify-center items-center">
                <div class="p-10 bg-whie rounded flex justify-center items-center flex-col shadow-m ">
                    <p class="mt-5 text-5xl font-extrabold text-blue-500">Sign Up</p>
                    <form wire:submit.prevent="submit" class="flex-row mt-15">
                        @csrf
                        @if (session('message'))
                            {{ session('message') }}
                            <br>
                        @endif
                        @error('fullname')
                            <span class="text-red-500 font-semibold">{{ $message }}</span>
                        @enderror
                        <br>
                        <input type="text" wire:model="fullname" placeholder="fullname"
                            class="mb-3 p-3 w-80 focus:border-blue-700 rounded border-2 outline-none"><br>

                        @error('email')
                            <span class="text-red-500 font-semibold">{{ $message }}</span>
                        @enderror <br>
                        <input type="text" wire:model="email" placeholder="email"
                            class="mb-3 p-3 w-80 focus:border-blue-700 rounded border-2 outline-none"><br>

                        @error('address')
                            <span class="text-red-500 font-semibold">{{ $message }}</span>
                        @enderror
                        <br>
                        <input type="text" placeholder="address" wire:model="address" autocomplete="street-address"
                            class="mb-3 p-3 w-80 focus:border-blue-700 rounded border-2 outline-none"><br>

                        @error('mobile')
                            <span class="text-red-500 font-semibold">{{ $message }}</span>
                        @enderror
                        <br>
                        <input type="number" wire:model="mobile" placeholder="mobile"
                            class="mb-3 p-3 w-80 focus:border-blue-700 rounded border-2 outline-none"><br>

                        @error('password')
                            <span class="text-red-500 font-semibold">{{ $message }}</span>
                        @enderror
                        <br>
                        <input type="password" wire:model="password" placeholder="password" autocomplete="new-password"
                            class="mb-3 p-3 w-80 focus:border-blue-700 rounded border-2 outline-none"><br>

                        @error('confirmpassword')
                            <span class="text-red-500 font-semibold">{{ $message }}</span>
                        @enderror
                        <br>
                        <input type="password" wire:model="confirmpassword" placeholder="Confirm Password"
                            autocomplete="new-password"
                            class="mb-5 p-3 w-80 focus:border-blue-700 rounded border-2 outline-none"><br>
                        <button type="submit"
                            class="ml-10 justify-center bg-blue-600 py-1 px-2 text-white">Register</button>
                        <button class="ml-10 justify-center  py-1 px-2 text-blue-500 underline"><a
                                href="{{ url('login') }}"> Already have an Account?</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
