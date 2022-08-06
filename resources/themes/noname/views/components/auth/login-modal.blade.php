<div id="authentication-modal" tabindex="-1" class="hidden transition ease-in-out duration-200 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                    {{ __('Login to :hotel', ['hotel' => setting('hotel_name')]) }}
                </h3>

                <!-- Validation Errors -->
                <x-messages.flash-messages />

                <form class="flex flex-col gap-y-3" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div>
                        <label class="block font-bold text-gray-700">
                            {{ __('Username') }}
                        </label>

                        <input id="username" type="text" class="focus:ring-0 border-4 border-gray-200 rounded-md focus:border-[#eeb425] w-full @error('name')  border-red-500 @enderror"
                               name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    </div>

                    <div>
                        <label for="password" class="block font-bold text-gray-700">
                            {{ __('Password') }}
                        </label>

                        <input id="password" type="password" class="focus:ring-0 border-4 border-gray-200 rounded-md focus:border-[#eeb425] w-full @error('name')  border-red-500 @enderror"
                               name="password" required>
                    </div>

                    <button type="submit" class="mt-2 w-full rounded-md bg-[#eeb425] text-white p-2 transition ease-in-out duration-200 hover:scale-[102%] font-bold">
                        {{ __('Login') }}
                    </button>

                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>