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
                <div class="flex items-center -mx-2">
                    <a href="#drop"
                        class="flex items-center mx-2 px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                        onclick="logToggle()"
                        wire:click="$emit()"
                        {{-- data-bs-toggle="modal" data-bs-target="#exampleModal" --}}
                        >
                        Login
                    </a >

                    <a class="flex items-center mx-2  px-2 py-1 text-gray-800 hover:bg-indigo-600 rounded-md hover:text-white"
                        href="#">
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
    <script>
        // LOGIN TOGGLE 
        function logToggle() {
            if (document.querySelector(".log-form").style.display === "block") {
                document.querySelector(".log-form").style.display = "none";
            } else {
                document.querySelector(".log-form").style.display = "block";
            }
          }

          function closeModal(){
              document.querySelector(".log-form").style.display = "none";
          }
    </script>
</div>
