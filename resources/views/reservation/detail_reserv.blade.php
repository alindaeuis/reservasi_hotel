@extends('templates.app')
@section('content-dinamis')
<div class="flex justify-center items-center mt-36">
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Detail</h5>
  <ul>
    <li>Room Number: {{ $showDetail['room_number'] }}</li>
  </ul>
  </a>
</div>
  
@endsection