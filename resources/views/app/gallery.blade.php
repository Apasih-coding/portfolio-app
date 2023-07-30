@extends('app.main')

@section('content')
<div class="flex mx-auto px-4 bg-brown-101 text-blue-105 w-full justify-around">
    <img src="img/cs.png" class="h-580">
    <div id="home_content" class="relative text-blue-105 top-105 h-auto max-h-400 bottom-0">
        <h2 class="uppercase tracking-wider text-lg font-semibold text-blue-105 flex text-left">Input Gallery</h2>
        <form action="{{route('admin.add_gallery')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="relative flex flex-col mx-auto py-2 -left-16 ">
                <input type="file" name="image" id="image" class="block file:rounded-lg file:border-blue-105 file:bg-blue-105 file:px-4 file:py-2 file:text-brown-101 file:font-semibold hover:file:bg-brown-101 hover:file:text-blue-105 hover:file:border-2 hover:file:border-blue-105 mb-2 w-464" required >
                <select name="project_id" id="project_id" class="rounded-lg bg-brown-101 border-2 border-blue-105 font-bold text-blue-105 mr-2 mb-2 w-464">
                    <option value="" selected disabled>Select Project</option>
                    @foreach($projects as $project)
                    <option value="{{ $project['id'] }}">{{ $project['title'] }}</option>
                    @endforeach
                </select>
                <select name="type" id="type" class="rounded-lg bg-brown-101 border-2 border-blue-105 font-bold text-blue-105 mr-2 w-464">
                    <option value="" selected disabled>Select Type Image</option>
                    <option value="potrait">Potrait</option>
                    <option value="landscape">Landscape</option>
                </select>
                <button type="submit" class="text-center px-6 py-2 bg-blue-105 hover:bg-brown-101 text-brown-101 hover:text-blue-105 hover:border-2 hover:border-blue-105 font-bold rounded-lg transition ease-in-out duration-150 mt-2">Add Image</button>
            </div>
        </form>
    </div>
</div>

<div class="container flex bg-brown-101 text-blue-105 w-full mx-auto px-8 my-8 justify-center">
    <table class="table-fixed border-separate border-spacing-2 border border-blue-105 rounded">
        <caption class="caption-top text-start font-semibold m-2">
            List Galleries
        </caption>
        <thead>
            <tr>
                <th class="border border-blue-105 py-1 px-2 rounded">No</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Image</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Project</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Type</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr class="text-center">                
                <td>
                    {{$loop->iteration}}
                </td>
                <td>
                    <img src="{{ asset('images') }}/{{ $gallery['image'] }}" alt="" class="h-69 w-auto">
                </td>
                <td class="whitespace-nowrap px-2">{{ $gallery->projects->title }}</td>
                <td class="whitespace-nowrap px-2">{{ $gallery['type'] }}</td>
                <td>
                    <a href="{{route('admin.detail_projects', $gallery['id'])}}" class="text-center px-2 py-1 bg-blue-105 hover:bg-brown-101 text-brown-101 hover:text-blue-105 hover:border-2 hover:border-blue-105 font-bold rounded-lg transition ease-in-out duration-150">
                        Details
                    </a>
                </td>
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