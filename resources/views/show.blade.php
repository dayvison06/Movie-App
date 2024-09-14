@extends('layouts.main')

@section('title', 'Movie')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="https://whatsrel.com.br/wp-content/uploads/2018/02/the-post1.jpg" alt="blade runner" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold text-lime-500">Blade Runner (2049)</h2>
                <div class="flex flex-wrap items-center text-gray-400">
                    <span><ion-icon class="mt-1" name="star"></ion-icon></span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et illum nostrum odit veritatis
                    voluptates. Ab adipisci asperiores assumenda at aut dolore, dolorum ea eligendi esse expedita fuga
                    illo inventore ipsa laborum nam neque non numquam
                    perferendis quae, quaerat quo quos repellat repellendus saepe soluta tempora totam unde vero, vitae
                    voluptate.
                </p>

                <div class="mt-12">
                    <h4 class="text-2xl font-semibold text-lime-500">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-Won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-lime-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-lime-600 transition ease-in-out duration-150">
                        <ion-icon class="mx-2" size="large" name="play-circle-outline"></ion-icon> Assistir Trailer
                    </button>
                </div>
            </div>
        </div>
    </div> <!-- end movie info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="https://whatsrel.com.br/wp-content/uploads/2018/02/the-post1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="txt-lg mt-2 hover:text-gray:300">Blade Runner</a>
                        <div class="flex items-center text-gray-400">
                            <span><ion-icon class="mt-1" name="star"></ion-icon></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="https://whatsrel.com.br/wp-content/uploads/2018/02/the-post1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="txt-lg mt-2 hover:text-gray:300">Blade Runner</a>
                        <div class="flex items-center text-gray-400">
                            <span><ion-icon class="mt-1" name="star"></ion-icon></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="https://whatsrel.com.br/wp-content/uploads/2018/02/the-post1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="txt-lg mt-2 hover:text-gray:300">Blade Runner</a>
                        <div class="flex items-center text-gray-400">
                            <span><ion-icon class="mt-1" name="star"></ion-icon></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="https://whatsrel.com.br/wp-content/uploads/2018/02/the-post1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="txt-lg mt-2 hover:text-gray:300">Blade Runner</a>
                        <div class="flex items-center text-gray-400">
                            <span><ion-icon class="mt-1" name="star"></ion-icon></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="https://whatsrel.com.br/wp-content/uploads/2018/02/the-post1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="txt-lg mt-2 hover:text-gray:300">Blade Runner</a>
                        <div class="flex items-center text-gray-400">
                            <span><ion-icon class="mt-1" name="star"></ion-icon></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="https://whatsrel.com.br/wp-content/uploads/2018/02/the-post1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="txt-lg mt-2 hover:text-gray:300">Blade Runner</a>
                        <div class="flex items-center text-gray-400">
                            <span><ion-icon class="mt-1" name="star"></ion-icon></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="https://whatsrel.com.br/wp-content/uploads/2018/02/the-post1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="txt-lg mt-2 hover:text-gray:300">Blade Runner</a>
                        <div class="flex items-center text-gray-400">
                            <span><ion-icon class="mt-1" name="star"></ion-icon></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="https://whatsrel.com.br/wp-content/uploads/2018/02/the-post1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="txt-lg mt-2 hover:text-gray:300">Blade Runner</a>
                        <div class="flex items-center text-gray-400">
                            <span><ion-icon class="mt-1" name="star"></ion-icon></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
