@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <div class="flex-none">
                <img src="/imgs/parasite.jpg" alt="parasite" class="w-96">
            </div>
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex items-center text-gray-400 text-sm">
                    <span>s</span>
                    <span class="ml-1 text-sm">75%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Comedy</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo id, commodi unde deserunt nam odio tenetur quam vel laboriosam odit assumenda repellendus. Nobis iusto nam aspernatur est recusandae iure laudantium!
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cats</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Sccreenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Sccreenplay, Director, Story</div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button class="flex items center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5  gap-8">
                <div class="mt-8">
                    <a href="#"><img src="/imgs/actor1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor Name</a>
                        <div class="text-gray-400 text-sm">
                            John Smith
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#"><img src="/imgs/actor2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor Name</a>
                        <div class="text-gray-400 text-sm">
                            John Smith
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#"><img src="/imgs/actor3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor Name</a>
                        <div class="text-gray-400 text-sm">
                            John Smith
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#"><img src="/imgs/actor4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor Name</a>
                        <div class="text-gray-400 text-sm">
                            John Smith
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#"><img src="/imgs/actor5.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Actor Name</a>
                        <div class="text-gray-400 text-sm">
                            John Smith
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <div class="mt-8">
                    <a href="#"><img src="/imgs/image1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                </div>
                <div class="mt-8">
                    <a href="#"><img src="/imgs/image2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                </div>
                <div class="mt-8">
                    <a href="#"><img src="/imgs/image3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                </div>
                <div class="mt-8">
                    <a href="#"><img src="/imgs/image4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                </div>
                <div class="mt-8">
                    <a href="#"><img src="/imgs/image5.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                </div>
                <div class="mt-8">
                    <a href="#"><img src="/imgs/image6.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-200"></a>
                </div>
            </div>
        </div>
    </div>
@endsection