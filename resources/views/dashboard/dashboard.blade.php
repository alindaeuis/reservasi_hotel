@extends('templates.sidebar')

@section('sidebar')
<div class="gap-14">
  {{-- <img src="/assets/img/banner.jpg" class="h-1/2 mb-auto" alt="Banner"> --}}
<div class="p-4 sm:ml-64 lg:ml-56">
<div class="header mb-16 mt-8">
<h1 class=" font-bold text-1xl">Hallo Selamat Datang 🤗</h1>
<h1 class="text-3xl"><b>{{ Auth::user()->name }}!</b></h1>
</div>
<div class="flex gap-3">
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 w-full h-32">
   <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $totalRooms }}</h4>
   <p class="font-normal text-xl text-gray-700 dark:text-gray-400">Kamar (secara keseluruhan)</p>
</a>
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 w-full h-32">
   <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $totalReservations }}</h4>
   <p class="font-normal text-xl text-gray-700 dark:text-gray-400">Reservasi</p>
</a>
</div>
</div>

</div>

@endsection
