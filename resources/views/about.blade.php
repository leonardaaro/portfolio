<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Welcome to my About!</h3>
    <p>Ini adalah halaman about yang menjelaskan tentang isi halaman ini.</p>
    <p>Untuk melihat daftar artikel, silahkan klik <a href="/blog">di sini</a>.</p>
    <p>Untuk melihat daftar produk, silahkan klik <a href="/product">di sini</a>.</p>
    <p>Untuk melihat daftar kategori, silahkan klik <a href="/category">di sini</a>.</p>
    <p>Untuk melihat daftar tag, silahkan klik <a href="/tag">di sini</a>.</p>
    <p>Untuk melihat halaman home, silahkan klik <a href="/home">di sini</a>.</p>
    <p>Nama : {{ $name }}</p>
  </x-layout>