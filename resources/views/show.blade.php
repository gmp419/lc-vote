<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <!-- main idea container -->
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex">

            <div class="flex flex-1 px-4 py-8">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/100x100/?face&crop=face&v=1" alt="avatar" class="rounded-xl w-24">
                    </a>
                </div>
                <div class="px-2 w-full">
                    <h4 class="text-xl font-semibold ">
                        <a href="#" class="hover:underline">A randon tutkdbbjdbjjhb</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores obcaecati laborum similique fugit excepturi minus iusto doloribus dolorum maxime ipsam earum in reiciendis at dicta consequatur unde, magnam corrupti ut praesentium quos! Neque sit facilis dignissimos facere aliquam unde in dolorum odit quibusdam impedit sint, ex expedita magnam qui a ipsam bl
                    </div>

                    <div class="flex justify-between items-center mt-6">
                        <div class="flex text-xs items-stretch font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div class="px-1">&bull;</div>
                            <div class="">10 hours ago</div>
                            <div class="px-1">&bull;</div>
                            <div class="">Category</div>
                            <div class="px-1">&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                            <!-- <div class="px-1 ">&bull;</div> -->
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-100 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-200 border transition duration-150 ease-in">Open</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute hidden w-44 text-left ml-8 font-semibold text-sm bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="button" class="flex items-center justify-center w-32 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in py-3 px-4">
                <span class="text-white">Reply</span>
            </button>

            <button type="button" class="flex items-center justify-center h-11 w-32 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in py-3 px-4">
                <span class="mr-1">Set status</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center px-3 py-2 rounded-xl">
                <div class="text-xl leading-snug">12</div>
                <div class="text-xs text-gray-400 leading-none">Votes</div>
            </div>

            <button type="button" class="h-11 w-32 text-xs bg-gray-200 uppercase font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in py-3 px-4">
                <span class="mr-1">Vote</span>
            </button>
        </div>
    </div>

    <!-- comments container -->
    <div class="comments-container relative space-y-6 ml-24 my-8 mt-1 pt-4">
        <!-- <div class="ideas-container space-y-6 my-6"> -->
        <div class="comment-container relative bg-white rounded-xl flex">

            <div class="flex flex-1 px-4 py-8">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/100x100/?face&crop=face&v=3" alt="avatar" class="rounded-xl w-24">
                    </a>
                </div>
                <div class="px-2 w-full">
                    <!-- <h4 class="text-xl font-semibold ">
                            <a href="#" class="hover:underline">A randon tutkdbbjdbjjhb</a>
                        </h4> -->
                    <div class="text-gray-600 mt-3 line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores obcaecati laborum similique fugit excepturi minus iusto doloribus dolorum maxime ipsam earum in reiciendis at dicta consequatur unde, magnam corrupti ut praesentium quos! Neque sit facilis dignissimos facere aliquam unde in dolorum odit quibusdam impedit sint, ex expedita magnam qui a ipsam bl
                    </div>

                    <div class="flex justify-between items-center mt-6">
                        <div class="flex text-xs items-stretch font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div class="px-1">&bull;</div>
                            <div class="">10 hours ago</div>
                            <!-- <div class="px-1">&bull;</div> -->
                        </div>

                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute hidden w-44 text-left ml-8 font-semibold text-sm bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="isadmin comment-container relative bg-white rounded-xl flex">

            <div class="flex flex-1 px-4 py-8">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/100x100/?face&crop=face&v=2" alt="avatar" class="rounded-xl w-24">
                    </a>
                    <div class="text-center uppercase text-blue text-xs font-bold mt-1">Admin</div>
                </div>
                <div class="px-2 w-full">
                    <h4 class="text-xl font-semibold ">
                        <a href="#" class="hover:underline">Status changed to "Under construction"</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores obcaecati laborum similique fugit excepturi minus iusto doloribus dolorum maxime ipsam earum in reiciendis at dicta consequatur unde, magnam corrupti ut praesentium quos! Neque sit facilis dignissimos facere aliquam unde in dolorum odit quibusdam impedit sint, ex expedita magnam qui a ipsam bl
                    </div>

                    <div class="flex justify-between items-center mt-6">
                        <div class="flex text-xs items-stretch font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Addreaa</div>
                            <div class="px-1">&bull;</div>
                            <div class="">10 hours ago</div>
                            <!-- <div class="px-1">&bull;</div> -->
                        </div>

                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute hidden w-44 text-left ml-8 font-semibold text-sm bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-container relative bg-white rounded-xl flex">

            <div class="flex flex-1 px-4 py-8">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/100x100/?face&crop=face&v=3" alt="avatar" class="rounded-xl w-24">
                    </a>
                </div>
                <div class="px-2 w-full">
                    <!-- <h4 class="text-xl font-semibold ">
                            <a href="#" class="hover:underline">A randon tutkdbbjdbjjhb</a>
                        </h4> -->
                    <div class="text-gray-600 mt-3 line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores obcaecati laborum similique fugit excepturi minus iusto doloribus dolorum maxime ipsam earum in reiciendis at dicta consequatur unde, magnam corrupti ut praesentium quos! Neque sit facilis dignissimos facere aliquam unde in dolorum odit quibusdam impedit sint, ex expedita magnam qui a ipsam bl
                    </div>

                    <div class="flex justify-between items-center mt-6">
                        <div class="flex text-xs items-stretch font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div class="px-1">&bull;</div>
                            <div class="">10 hours ago</div>
                            <!-- <div class="px-1">&bull;</div> -->
                        </div>

                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute hidden w-44 text-left ml-8 font-semibold text-sm bg-white shadow-lg rounded-xl py-3">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition block duration-150 ease-in">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</x-app-layout>