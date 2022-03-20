<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div id="my-modal"
        class="log-form overflow-y-hidden overflow-x-hidden fixed right-0 left-0 z-50 justify-center items-center h-modal md:h-full md:inset-0"
        style="display: none">
        <div class="relative w-full max-w-2xl h-full md:h-auto ">
            <div class="w-screen h-screen flex justify-center items-center ease-in">
                <div class="w-screen h-screen flex justify-center items-center bg-gray-500"
                    style="background: rgba(0,0,0,.7)">
                    <div class="p-10 w-1/3 bg-white rounded flex-col shadow-md ">
                        <form class="log-form space-x-4 space-y-4" wire:submit="submit">
                            <button id="log-close"
                                class="bg-red-500 float-right rounded-full px-2 py-0 text-lg text-white hover:bg-red-700"
                                onclick="closeModal()">x</button>
                            <H1 class="flex justify-center text-2xl">LOGIN</H1>

                            <div>
                                <label for="email">Email</label><br>
                                <input id="drop" class="bg-gray-400 px-4 py-2 rounded w-4/5" type="email"
                                    placeholder="E-mail" autocomplete="email">
                            </div>
                            <div>
                                <label for="password">Password</label> <br>
                                <input class="bg-gray-400 px-4 py-2 rounded w-4/5" type="password"
                                    autocomplete="current-password" placeholder="Password">
                            </div>
                            <button type="submit" class="bg-blue-500 text-white rounded px-2 py-0 btn">Login</button> <br>
                            <button class="text-blue-400 underline">Don't have an Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
