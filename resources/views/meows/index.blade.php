{{--@extends('layouts.app')--}}
{{--@section('content')--}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meows France') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <h1>Meows France: Les Miaouuuuu, sont de retours </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div>
    <h1>Meows France: Les Miaouuuuu, sont de retours </h1>

</div>

    <h2>Liste des miaou</h2>
    <div style="margin-bottom: 1rem">
        <a >liste de miaou </a>
    </div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>User ID </th>
            <th>Messages</th>
        </tr>
        </thead>
        <tbody>
        @foreach($meows as $meow)
            <tr>
                <td>
                    <a >{{ $meow->id }}</a>
                </td>
                <td>{{ $meow->user_id }}</td>
                <td>{{ $meow->messages }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


