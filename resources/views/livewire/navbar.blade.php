<div>
    <div>
        {{-- Care about people's approval and you will be their prisoner. --}}
        <header class="bg-white shadow border-t-4 border-indigo-600">
            <div class="container mx-auto px-6 py-4 bg-white">
                <div class="flex items-center justify-between">
                    <div>
                        <a class="flex items-center text-gray-800 hover:text-indigo-600" href="{{ url('/') }}">
                            {{-- <svg class="h-6 w-6 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg> --}}
                            <span class="mx-3 font-medium text-sm md:text-base text-blue-700">Davie's Pressure
                                Washing</span>
                        </a>
                    </div>
                    @auth
                        @if (auth()->user()->usertype == 'admin')
                        @elseif(auth()->user()->usertype == 'member')
                            <div class="flex items-center -mx-2">
                                <a href="{{ url('/login') }}"
                                    class="flex items-center mx-2 px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white">
                                    Reservations
                                </a>

                                <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                    href="#contact">
                                    Contact
                                </a>

                                <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                    href="{{ url('service') }}">
                                    Services
                                </a>

                                <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                    href="#">
                                    Settings
                                </a>
                                <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                                    href="{{ url('logout') }}">
                                    Logout
                                </a>
                        @endif
                    @else
                        

                    @endauth
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

                </div>
            </div>

        </header>
    </div>
</div>
</div>
</div>
