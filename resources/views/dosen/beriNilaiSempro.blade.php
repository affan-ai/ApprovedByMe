@extends('layout.navbar')

@section('content')
<div class="font-lato max-w-screen-lg mx-auto">
  <div class="bg-gray-200 shadow-lg rounded-lg p-6">
    <div class="ml-5">
        <h2 class="text-xl font-bold mb-10 text-center">PENILAIAN SEMINAR PROPOSAL</h2>
        <div class="md:flex">
        @if ($sempro->mahasiswa)
            <img class="object-cover w-full md:h-44 md:w-36 md:rounded-none border-black border-8 border-solid md:border-solid" src="{{ asset('images/' . $sempro->mahasiswa->gambar) }}" alt="{{ $sempro->nama }}"> 
        @else
            <p>Tidak ada gambar mahasiswa yang tersedia.</p>
        @endif  
            <div class ="ml-5">
            <p class="text-lg font-bold">Nama : {{ $sempro->nama }}</p>  
            <p class="text-lg">NIM : {{ $sempro->nim }}</p>
            <p class="text-lg">Jurusan : {{ $sempro->jurusan }}</p>
            <p class="text-lg font-semibold">Judul : {{ $sempro->judul }}</p>
            </div>
        </div>
        
         
        <form class="font-lato " action="{{ route('simpanNilai') }}" method="POST">
            @csrf
            <div class="flex flex-wrap mt-5">
            <div class="mb-6">
                <input type="hidden" name="id_sempro" value="{{ $sempro->id }}" id="id_sempro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <input type="hidden" name="id_dosen" value="{{ Auth::user()->id }}" id="id_dosen" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div class ="md:w-1/2 ">  
                <div class="mb-6 ">
                    <label for="nilai_1" class="block mb-2 text-sm font-medium text-black dark:text-white who">Permasalahan dan metodologi penelitian (bobot 20%)</label>
                    
                    <input type="text" name="nilai_1" id="nilai_1" class="bg-gray-50 w-full md:w-5/6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="Masukkan Nilai" required>
                </div> 
                <div class="mb-6">
                    <label for="nilai_2" class="block mb-2 text-sm font-medium text-black dark:text-white">Relevansi Literatur (bobot 20%)</label>
                    <input type="text" name="nilai_2" id="nilai_2" class="bg-gray-50 w-full md:w-5/6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nilai" required>
                </div> 
            </div>
            <div class ="md:w-1/2 ">  
                <div class="mb-6">
                    <label for="nilai_3" class="block mb-2 text-sm font-medium text-black dark:text-white">Penulisan Proposal penelitian (isi, bahasa, format), (bobot 20%)</label>
                    <input type="text" name="nilai_3" id="nilai_3" class="bg-gray-50 w-full md:w-5/6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nilai" required>
                </div> 
                <div class="mb-6">
                    <label for="nilai_4" class="block mb-2 text-sm font-medium text-black dark:text-white">Penguasaan Materi dan Pengetahuan Dasar Terkait Penelitian (bobot 20%)</label>
                    <input type="text" name="nilai_4" id="nilai_4" class="bg-gray-50 w-full md:w-5/6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nilai" required>
                </div>
            </div>
            <div class="mb-6">
                <label for="nilai_5" class="block mb-2 text-sm font-medium text-black dark:text-white">Teknik Presentasi dan Kemampuan Berkomunikasi (bobot 20%)</label>
                <input type="text" name="nilai_5" id="nilai_5" class="bg-gray-50 w-full  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nilai" required>
            </div>   
            
            </div>
            <button type="submit" class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Approved</button>
        </form>
    </div>
    
</div>
</div>



@endsection