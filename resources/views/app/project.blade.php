@extends('app.main')

@section('content')
<div class="flex mx-auto px-4 bg-brown-101 text-blue-105 w-full justify-around">
    <img src="img/cs.png" class="h-580">
    <div id="home_content" class="relative text-blue-105 top-105 h-auto max-h-400 bottom-0">
        <h2 class="uppercase tracking-wider text-lg font-semibold text-blue-105 flex text-left">Input Project</h2>
        <form action="{{route('admin.add_projects')}}" method="post">
            @csrf
            <div class="flex mx-auto py-2">
                <input type="text" name="title" id="title" placeholder="Title project" class="rounded-lg bg-brown-101 border-2 border-blue-105 font-bold text-blue-105 mr-2 focus:outline-none" required>
                <input type="url" name="link" id="link" placeholder="http://.." class="rounded-lg bg-brown-101 border-2 border-blue-105 font-bold text-blue-105" required>
            </div>
            <textarea name="desc" id="" cols="30" rows="10" placeholder="Description" class="rounded-lg bg-brown-101 border-2 border-blue-105 font-bold text-blue-105 w-full" required></textarea>
            <button type="submit" class="text-center px-6 py-2 bg-blue-105 hover:bg-brown-101 text-brown-101 hover:text-blue-105 hover:border-2 hover:border-blue-105 font-bold rounded-lg transition ease-in-out duration-150">Add Project</button>
        </form>
    </div>
</div>

<div class="container flex bg-brown-101 text-blue-105 w-full mx-auto px-8 my-8 justify-center">
    <table class="table-fixed border-separate border-spacing-2 border border-blue-105 rounded">
        <caption class="caption-top text-start font-semibold m-2">
            List Project
        </caption>
        <thead>
            <tr>
                <th class="border border-blue-105 py-1 px-2 rounded">No</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Title</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Link</th>
                <th class="border border-blue-105 py-1 px-2 rounded">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr class="text-center">                
                <td>
                    {{$loop->iteration}}
                </td>
                <td class="whitespace-nowrap px-2">{{ $project['title'] }}</td>
                <td class="whitespace-nowrap px-2">{{ $project['link'] }}</td>
                <td>
                    <a href="{{route('admin.detail_projects', $project['id'])}}" class="text-center px-2 py-1 bg-blue-105 hover:bg-brown-101 text-brown-101 hover:text-blue-105 hover:border-2 hover:border-blue-105 font-bold rounded-lg transition ease-in-out duration-150">
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