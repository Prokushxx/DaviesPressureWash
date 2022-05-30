<div>
    <div>
        {{-- Care about people's approval and you will be their prisoner. --}}
        <header class="bg-white shadow border-t-4 border-indigo-600">
            <div class="container mx-auto px-6 py-4 bg-white">
                <div class="md:flex md:items-center md:justify-between z-[-1] md:z-auto">
                  @auth
                    
                    <div>
                        <a class="flex items-center text-gray-800 hover:text-indigo-600" href="{{ url('/home') }}">
                        
                            <span class="mx-3 font-medium text-sm md:text-base text-blue-700">Davie's Pressure
                                Washing</span>
                        </a>
                    </div>

                        <div class="flex items-center -mx-2">
                            <button wire:click="openReservation"
                                class="flex items-center mx-2 px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white">
                                Reservations
                        </button>
                            @if ($reserve)
                                @include('livewire.user.viewreservations')
                            @endif

                            <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                href="#contact">
                                Contact
                            </a>
                            <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                href="{{ url('service') }}">
                                Services
                            </a>

                            <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                href="{{ url('Profile') }}">
                                Profile
                            </a>

                            <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                href="{{ url('logout') }}">
                                Logout
                            </a>
                        </div>
                    @endauth

                    @guest
                    <div>
                      <a class="flex items-center text-gray-800 hover:text-indigo-600" href="{{ url('/') }}">
                          
                          <span class="mx-3 font-medium text-sm md:text-base text-blue-700">Davie's Pressure
                              Washing</span>
                      </a>
                  </div>
                        <div class="flex items-center -mx-2">
                            <a href="{{ url('/login') }}"
                                class="flex items-center mx-2 px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white">
                                Login
                            </a>

                            <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                href="{{ url('register') }}">
                                Register
                            </a>

                            <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                href="#contact">
                                Contact
                            </a>

                            <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                href="{{ url('service') }}">
                                Services
                            </a>

                          </div>
                        @endguest
                </div>
            </div>

        </header>
    </div>
    <script>
      window.addEventListener('deactivate', function(e) {
                Swal.fire(e.detail);
            });
      window.addEventListener('updated', function(e) {
                Swal.fire(e.detail);
            });
    </script>
</div>

