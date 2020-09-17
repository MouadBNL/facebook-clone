@extends('layouts.app')

@section('content')
<div class="font-body min-h-screen">
    <nav class="bg-blue-700 py-3 shadow-lg">
        <div class="container mx-auto flex justify-around">
            <h1 class="text-white text-2xl font-bold md:w-2/12 flex items-center">facebook</h1>
            <form action="#" class="md:w-6/12 hidden md:flex  border rounded-full shadow py-2 px-3 bg-gray-100 text-gray-700">
                <i data-feather="search" class="mx-2 w-5"></i>
                <input class="appearance-none w-full leading-tight focus:outline-none" id="search" type="text" placeholder="Seach">
            </form>
            <div class="md:w-4/12 flex">
                <div class="w-9/12 max-w-xs flex justify-around items-center text-white mr-4">
                    <div class="cursor-pointer rounded-full p-2 bg-white bg-opacity-0 hover:bg-opacity-25"">
                        <i class="max-w-1/3" data-feather="bell"></i>
                    </div>
                    <div class="cursor-pointer rounded-full p-2 bg-white bg-opacity-0 hover:bg-opacity-25"">
                        <i class="max-w-1/3"data-feather="message-circle"></i>
                    </div>
                    <div class="cursor-pointer rounded-full p-2 bg-white bg-opacity-0 hover:bg-opacity-25"">
                        <i class="max-w-1/3"data-feather="users"></i>
                    </div>
                </div>
                <div class="cursor-pointer w-9/12 flex items-center rounded-full p-1 bg-white bg-opacity-0 hover:bg-opacity-25">
                    <img class="rounded-full h-8 w-8 object-cover mr-4" src="./images/profile.jpg" alt="profile">
                    <a href="#" class="text-white">mouadbnl</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex bg-gray-100  h-full">
        <aside class="lg:w-3/12 md:w-4/12 hidden md:flex bg-gray-200 p-4 sm:px-10 md:px-16">
            <nav>
                <span class="font-black block mt-3 text-gray-800">Menu</span>
                <ul class="text-gray-600 text-sm pl-3 py-1 mt-2 border-l-2 border-gray-400">
                    <li class="flex items-center font-semibold my-3"><i class="mr-4"data-feather="book-open"> </i>News</li>
                    <li class="flex items-center font-semibold my-3"><i class="mr-4"data-feather="message-square"> </i>Messages</li>
                    <li class="flex items-center font-semibold my-3"><i class="mr-4"data-feather="award"> </i>Events</li>
                    <li class="flex items-center font-semibold my-3"><i class="mr-4"data-feather="user"> </i>Friends</li>
                    <li class="flex items-center font-semibold my-3"><i class="mr-4"data-feather="shopping-bag"> </i>Shop</li>
                </ul>
            </nav>
        </aside>
        <main class="shadow-xl w-full lg:w-9/12 md:w-8/12 p-4 sm:px-10 md:px-16">
            <!-- Create new Post -->
            <section class="shadow-md w-full bg-white flex rounded p-3 my-5">
                <div class="mr-4 flex flex-col justify-items-end">
                    <img class="rounded-full h-10 w-10 object-cover mb-2" src="./images/profile.jpg" alt="profile">
                    <i class="w-7 h-7 mx-auto text-gray-500 mt-auto"data-feather="image"></i>
                    <i class="w-7 h-7 mx-auto text-gray-500"data-feather="smile"></i>
                </div>
                <textarea class="appearance-none focus:outline-none w-full text-sm" cols="30" rows="5" placeholder="What's on your mind?"></textarea>
            </section>

            <article class="shadow-md w-full bg-white p-3">
                <header class="flex mb-4">
                    <img class="rounded-full h-10 w-10 object-cover mr-2" src="./images/profile.jpg" alt="profile">
                    <div class="">
                        <a href="#" class="block font-bold">Pewdiepie</a>
                        <p class="text-xs font-semibold text-gray-600">Friday 8:15pm</p>
                    </div>
                </header>
                <section>
                    <p class="mb-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facilis voluptatum soluta doloribus repellat, recusandae officiis optio suscipit at unde?
                    </p>
                    <div class="flex flex-auto items-start max-w-full">
                        <img class="w-1/4 object-contain rounded m-1" src="./images/lerone-pieters-FFfrL2bJCUs-unsplash.jpg">
                        <img class="w-1/4 object-contain rounded m-1" src="./images/romain-tordo-pqbh-KsIxoE-unsplash.jpg">
                        <img class="w-1/4 object-contain rounded m-1" src="./images/the-blowup-Gyv_mXDbO70-unsplash.jpg">
                    </div>
                </section>
            </article>
        </main>
    </div>
</div>