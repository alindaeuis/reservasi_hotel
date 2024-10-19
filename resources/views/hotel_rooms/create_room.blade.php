@extends('templates.app')

@section('content-dinamis')
<form action="{{ route('hotel_room.add.process') }}" method="POST" class="max-w-sm mx-auto mt-40">
@csrf
@if ($errors->any())
    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
    </div>
@endif
  <div class="mb-5">
    <label for="room-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Number</label>
    <input type="number" id="room_number" name="room_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example: 01" value="{{ old('room_number') }}"/>
  </div>
  <div class="mb-5">
    <select name="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('type') }}">
      <option selected disabled>Pilih tipe kamar</option>
      <option value="single"  {{ old('type' === 'single' ? 'selected' : '') }}>Single</option>
      <option value="double" {{ old('type' === 'double' ? 'selected' : '') }}>Double</option>
      <option value="suite" {{ old('type' === 'suite' ? 'selected' : '') }}>Suite</option>
    </select>
  </div>
  <div class="mb-5">
    <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected disabled>Pilih status</option>
      <option value="available" {{ old('status' === 'available' ? 'selected' : '') }}>Tersedia</option>
      <option value="booked" {{ old('status' === 'booked' ? 'selected' : '') }}>Sudah di booking</option>
      <option value="maintanance" {{ old('status' === 'maintanance' ? 'selected' : '') }}>Dalam perawatan</option>
    </select>
  </div>
  <div class="mb-5">
    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
    <input type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('price') }}"/>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
@endsection

@push('script')
<script>
  // document.getElementById('price').addEventListener('change', function() {
  //   let type = this.value;
  //   let price = 0
  //   if(type === "single") {
  //     price = 100000;
  //   }else if(type === "double") {
  //     price = 200000
  //   }else if(type === "suite") {
  //     price = 300000;
  //   }

  //   document.getElementById('price').value = price;
  // })
</script>
@endpush