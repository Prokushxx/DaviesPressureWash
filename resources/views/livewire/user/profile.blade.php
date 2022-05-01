<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="">
        <p class="text-3xl text-blue-600 flex justify-center">
            Edit Profile
        </p>
        <div class="bg-white">
            <div class="grid grid-cols-2 flex justify-center"> 
                <div class="pt-4 pl-10">
                    @if ($successMessage)
                        <span class="text-green-500">{{ $successMessage }}</span>
                    @endif
                    @error('name')
                        <span class="text-red-500"> {{ $message }}</span>
                    @enderror
                    <p class="text-2xl">Update Username</p>

                    <input type="text" class="w-3/4 mt-2 shadow-md border-2 my-4 py-2 px-2 border-gray-200"
                        wire:model='name'><br>
                    <button wire:click="upName" class="px-2 py-1 bg-blue-500 text-white">Update</button>
                </div>
                <div class="pt-4 pl-10">
                    @error('email')
                        <span class="text-red-500"> {{ $message }}</span>
                    @enderror
                    <p class="text-2xl">Update Email</p>
                    <input type="email" class="w-3/4 mt-2 shadow-md border-2 my-4 py-2 px-2 border-gray-200"
                        wire:model='email'><br>
                    <button wire:click="upEmail" class="px-2 py-1 bg-blue-500 text-white">Update</button>
                </div>
            </div>
            <div class="grid grid-cols-2"> 
                <div class="pt-4 pl-10">
                 
                    @error('address')
                        <span class="text-red-500"> {{ $message }}</span>
                    @enderror
                    <p class="text-2xl">Update Address</p>

                    <input type="text" class="w-3/4 mt-2 shadow-md border-2 my-4 py-2 px-2 border-gray-200"
                        wire:model='address'><br>
                    <button wire:click="upAddress" class="px-2 py-1 bg-blue-500 text-white">Update</button>
                </div>
                <div class="pt-4 pl-10">
                    @error('telephone')
                        <span class="text-red-500"> {{ $message }}</span>
                    @enderror
                    <p class="text-2xl">Update #Phone</p>
                    <input type="text" class="w-3/4 mt-2 shadow-md border-2 my-4 py-2 px-2 border-gray-200"
                        wire:model='telephone'><br>
                    <button wire:click="upTelephone" class="px-2 py-1 bg-blue-500 text-white">Update</button>
                </div>
            </div>
            <div class="pt-4 pl-10">
                <p class="text-2xl">Change Password</p>
                <div class="grid grid-cols-2">
                    <div class="pt-4">
                        @if ($errorMessage)
                            <span class="text-red-500">{{ $errorMessage }}</span>
                        @endif
                        @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <p class="text-xl">Current Password</p>
                        <input type="password" wire:model="password"
                            class="w-3/4 mt-2 shadow-md border-2 py-2 px-2 border-gray-200">
                    </div>

                    <div class="pt-4 pl-10">
                        @error('newpassword')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <p class="text-xl">New Password</p>
                        <input type="password" wire:model="newpassword"
                            class="w-3/4 mt-2 shadow-md border-2 py-2 px-2 border-gray-200">
                    </div>
                </div>
                <div class="cols-span-2 mr-10 w-full mt-4 mb-4 flex justify-center">
                    <button wire:click="upPassword"
                        class="px-2 py-1 mr-16 text-white bg-blue-500 hover:bg-blue-400 mb-2">Update
                        Password</button>
                </div>
            </div>
        </div>
    </div>
</div>
