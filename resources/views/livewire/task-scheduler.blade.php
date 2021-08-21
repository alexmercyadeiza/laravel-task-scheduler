<header class="relative bg-white">
    <p class="bg-indigo-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
        Micro - Projects
    </p>
    </div>

    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">


        <div class="space-y-8">

            <div class="text-3xl font-bold">Task Scheduler
                <span
                    class="px-4 py-2 tracking-tight inline-flex leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                    Beta
                </span>
            </div>

            <div class="space-y-2">

                <p>Create a new task.</p>

                <div class="flex space-x-2 items-end ">
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                  </svg>
                            </span>
                        </div>
                        <input type="text" name="task" id="task"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 pr-20 sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                  </svg>
                            </span>
                        </div>
                        <input type="text" id="datepicker" name="task" id="task"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-12 pr-2 sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <button type="submit"
                        class="py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800">
                        Create
                    </button>
                </div>
            </div>

            <div class="space-y-2">
                <span class="text-xl text-yellow-700">Upcoming Tasks</span>
                <span class="text-xs block">Tasks are auto arranged by date and time.</span>

                <hr />

                <div class="flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-l font-bold text-yellow-700"> Migrate emails to MX Exchange. </span>
                        <span class="block text-xs"> Fri, Aug 2021 10:00AM </span>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 cursor-pointer hover:text-green-600 text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>

            </div>

            <div class="space-y-2">
                <span class="text-xl text-green-700">Completed Tasks</span>

                <hr />

                <div class="flex items-center justify-between">
                    <div class="space-y-1">
                        <span class="text-l font-bold text-green-700"> Migrate emails to MX Exchange. </span>
                        <span class="block text-xs"> Fri, Aug 2021 10:00AM </span>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 cursor-pointer hover:text-gray-600 text-green-600" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>


            </div>
        </div>

    </div>
