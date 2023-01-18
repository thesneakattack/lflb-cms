<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
        Laravel 9 JetStream Livewire CRUD Operations Tutorial - LaravelTuts.com
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white py-1 mb-6 px-3 rounded my-3 mt-1">Create New Product</button>
            @if($isOpen)
                @include('livewire.topics.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">ID.</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Cover Photo</th>
                        <th class="px-4 py-2">Sub Topics</th>
                        <th class="px-4 py-2">Featured?</th>
                        <th class="px-4 py-2">Intro Text</th>
                        <th class="px-4 py-2">Body Text</th>
                        <th class="px-4 py-2">Main Image</th>
                        <th class="px-4 py-2 w-60">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topics as $topic)
                    <tr>
                        <td class="border px-4 py-2">{{ $topic->_newid }}</td>
                        <td class="border px-4 py-2">{{ $topic->title }}</td>
                        <td class="border px-4 py-2">{{ $topic->description }}</td>
                        <td class="border px-4 py-2">{{ $topic->coverPhoto }}</td>
                        <td class="border px-4 py-2">{{ $topic->subCollections }}</td>
                        <td class="border px-4 py-2">{{ $topic->featured }}</td>
                        <td class="border px-4 py-2">{{ $topic->introText }}</td>
                        <td class="border px-4 py-2">{{ $topic->bodyText }}</td>
                        <td class="border px-4 py-2">{{ $topic->mainImage }}</td>
                        <td class="border px-4 py-2 text-center">
                        <button wire:click="edit({{ $topic->_newid }})" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded">Edit</button>
                            <button wire:click="delete({{ $topic->_newid }})" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>