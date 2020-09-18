@extends('layouts.app')

@section('content')
<div class="font-body min-h-screen">
    <nav class="bg-blue-700 py-3 shadow-lg h-8">
        
    </nav>
    <div class="flex bg-gray-100 min-h-full">
        {{-- Sidebar --}}
        <aside class="lg:w-3/12 md:w-4/12 hidden md:flex bg-gray-200 p-4 sm:px-10 md:px-16">

        </aside>

        <main class="shadow-xl w-full lg:w-9/12 md:w-8/12 p-4 sm:px-10 md:px-16">
            <app-timeline>
        </main>
    </div>
</div>
@endsection