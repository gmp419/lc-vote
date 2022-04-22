<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="cateogory" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="category one">Category One</option>
                <option value="category two">Category Two</option>
                <option value="category three">Category Three</option>
                <option value="category four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="category one">Category One</option>
                <option value="category two">Category Two</option>
                <option value="category three">Category Three</option>
                <option value="category four">Category Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">

            <input type="search" placeholder="find an idea" class="w-full rounded-xl placeholder-gray-900 bg-white px-4 py-2 pl-8 border-none">
            <div class="top-0 absolute flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-md transition ease-in duration-150 cursor-pointer bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">vote</button>
                </div>
            </div>

            <div class="flex px-2 py-8">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/100x100/?face&crop=face&v=1" alt="avatar" class="rounded-xl w-24">
                    </a>
                </div>
                <div class="px-2">
                    <h4 class="text-xl font-semibold ">
                        <a href="#" class="hover:underline">A randon tutkdbbjdbjjhb</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores obcaecati laborum similique fugit excepturi minus iusto doloribus dolorum maxime ipsam earum in reiciendis at dicta consequatur unde, magnam corrupti ut praesentium quos! Neque sit facilis dignissimos facere aliquam unde in dolorum odit quibusdam impedit sint, ex expedita magnam qui a ipsam bl
                    </div>

                    <div class="flex justify-between items-center mt-6">
                        <div class="flex text-xs items-stretch font-semibold space-x-2 text-gray-400">
                            <div class="">10 hours ago</div>
                            <div class="px-1">&bull;</div>
                            <div class="">Category</div>
                            <div class="px-1">&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                            <!-- <div class="px-1 ">&bull;</div> -->
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 ">Open</div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute w-44 text-left ml-8 font-semibold text-sm bg-white shadow-lg rounded-xl py-3">
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
</x-app-layout>