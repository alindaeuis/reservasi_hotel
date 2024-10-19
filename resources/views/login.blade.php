@extends('templates.app')

@section('content-dinamis')
<div class="container flex items-center justify-between mx-auto bg-white px-12 py-10 mt-12 shadow-md rounded-md">
<div class="left text-center"> 
  <h1 class="mb-4 text-1xl font-bold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white text-center">Welcome!</h1>
    <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="w-40 mx-auto">
    <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-3xl dark:text-white text-center">Calm Haven Hotel</h1>
    <p class="lg:max-w-sm text-slate-900"><i>Tinggalkan keramaian dan temukan kedamaian sejati di Calm Haven. Tempat di mana ketenangan adalah kemewahan.</i></p>
</div>
<form action="{{ route('login.auth') }}" method="POST">
@csrf
@if (Session::get('failed'))
  <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert"><span class="font-medium">Opps!</span> {{ Session::get('failed') }}</div>
@endif
@if(Session::get('logout'))
<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert"><span class="font-medium"></span> {{ Session::get('logout') }}</div>
@endif
  <div class="">
    <div class="border-b border-gray-900/10 pb-8 pt-10">
      <h2 class="text-base font-semibold leading-7 text-gray-900 lg:text-2xl ">Login</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600 lg:max-w-sm">This information will be displayed publicly so be careful what you share.</p>

      <div class="mt-8">
        <div class="sm:col-span-4">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">email</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="email" name="email" id="email" autocomplete="email" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 " placeholder="Email ">
              @error('email')
                <small class="text-rose-700">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>
        <div class="sm:col-span-4">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">password</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="password" name="password" id="password" autocomplete="password" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Password">
              @error('email')
                <small class="text-rose-700">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <div class="mt-6 flex items-center justify-start gap-x-6">
      <button type="submit" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button> 
      </div> 
    </div>
</form>
{{-- <form class="max-w-sm mx-auto">
    <div class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
      <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
    </div>
    <div class="mb-5">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
      <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class=" mb-5">
      <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
      </div>
      <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form> --}}
  </div>
  @endsection
