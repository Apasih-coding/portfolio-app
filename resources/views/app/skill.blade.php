@extends('app.main')

@section('content')
<div class="flex mx-auto px-4 bg-brown-101 text-blue-105 w-full justify-around">
    <img src="img/cs.png" class="h-580">
    <div id="home_content" class="relative text-blue-105 top-105 h-auto max-h-400 bottom-0">
        <h2 class="uppercase tracking-wider text-lg font-semibold text-blue-105 flex text-left">Input Skill</h2>
        <form action="{{route('admin.add_skill')}}" method="post">
            @csrf
            <div class="flex mx-auto py-2">
                <input type="text" name="name" id="name" placeholder="name skill" class="rounded-lg bg-brown-101 border-2 border-blue-105 font-bold text-blue-105 mr-2 focus:outline-none">
                <select name="category" id="category" class="rounded-lg bg-brown-101 border-2 border-blue-105 font-bold text-blue-105 mr-2">
                    <option value="">Select Category</option>
                    <option value="basic">Basic</option>
                    <option value="framework">Framework</option>
                </select>
                <input type="month" name="since" id="since" class="rounded-lg bg-brown-101 border-2 border-blue-105 font-bold text-blue-105">
            </div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description" class="rounded-lg bg-brown-101 border-2 border-blue-105 font-bold text-blue-105 w-full"></textarea>
            <button type="submit" class="text-center px-6 py-2 bg-blue-105 hover:bg-brown-101 text-brown-101 hover:text-blue-105 hover:border-2 hover:border-blue-105 font-bold rounded-lg transition ease-in-out duration-150">Add Skill</button>
        </form>
    </div>
</div>

<div class="container bg-brown-101 text-blue-105 w-full mx-auto px-8 my-8">
    <table class="table-fixed border-separate border-spacing-2 border border-blue-105 rounded">
        <caption class="caption-top text-start font-semibold m-2">
            List Basic Skill
        </caption>
        <thead>
            <tr>
                <th class="border border-blue-105 py-1 px-2 rounded">No</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Name</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Since</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Description</th>
            </tr>
        </thead>
        <tbody>
        @foreach($basic as $b)
            <tr class="text-center">                
                <td>
                    {{$loop->iteration}}
                </td>
                <td class="whitespace-nowrap">{{ $b['name'] }}</td>
                <td>{{ $b['since'] }}</td>
                <td class="text-sm indent-8">{{ $b['description'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="container bg-brown-101 text-blue-105 w-full mx-auto px-8 my-8">
    <table class="table-fixed border-separate border-spacing-2 border border-blue-105 rounded">
        <caption class="caption-top text-start font-semibold m-2">
            List Framework Skill
        </caption>
        <thead>
            <tr>
                <th class="border border-blue-105 py-1 px-2 rounded">No</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Name</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Since</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Description</th>
            </tr>
        </thead>
        <tbody>
        @foreach($framework as $f)
            <tr class="text-center">                
                <td>
                    {{$loop->iteration}}
                </td>
                <td class="whitespace-nowrap">{{ $f['name'] }}</td>
                <td>{{ $f['since'] }}</td>
                <td class="text-sm indent-8">{{ $f['description'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

    
@endsection

    
<!-- Backup gallery -->
        <!-- <div class="container mx-auto flex justify-center">
            <div class="grid grid-cols-3 gap-y-4 w-xxl">
                <img src="" class="bg-gray-500 rounded-3xl border-y-4 border-red-103 h-210 w-350">
                <img src="" class="bg-gray-500 rounded-3xl border-y-4 border-red-103 h-210 w-350">
                <img src="" class="bg-gray-500 rounded-3xl border-y-4 border-red-103 h-210 w-350">
                <img src="" class="bg-gray-500 rounded-3xl border-y-4 border-red-103 h-210 w-350">
            </div>
        </div> -->