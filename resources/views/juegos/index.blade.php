@extends('layouts.app')
@section('title','Home')
@section('content')
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-500 text-white">
            <th class="w-20 py-4 ...">ID</th>
            <th class="w-1/10 py-4 ...">Titulo</th>
            <th class="w-1/16 py-4 ...">Genero</th>
            <th class="w-1/16 py-4 ...">Precio</th>
            <th class="w-28 py-4 ...">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($juegos as $item)
                <tr>
                <td class="py-3 px-6">{{$item->id}}</td>
                <td class="p-3">{{$item->titulo}}</td>
                <td class="p-3 text-center">{{$item->genero}}</td>
                <td class="p-3 text-center">{{$item->precio}}</td>
                <td class="p-3">
                    <form action="{{route('juegos.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                        <i class="fas fa-trash"></i></button>
                        <a href="{{route('juegos.edit',$item->id)}}"class="bg-green-500 text-white px-3 py-1 rounded-sm">
                        <i class="fas fa-pen"></i></a>
                    </form>
                </td>
                </tr>  
            @endforeach
        </tbody>
        </table>
    </div>

@endsection