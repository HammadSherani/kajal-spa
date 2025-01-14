<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex justify-between items-center">
            {{ __('Blogs') }}

            <a href="{{route('blogs.create')}}" class="bg-indigo-500 text-white rounded py-1 px-5 text-[20px]">Add Blog</a>
        </div>
    </x-slot>


    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
        <table class="min-w-full leading-normal">
            <thead>
            <tr>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Title
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Created at
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $blog->title }}</p>
                        <p class="text-gray-900 whitespace-no-wrap">{{ $blog->slug }}</p>
                    </td>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $blog->created_at }}</p>
                    </td>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <a class="text-yellow-500 hover:underline font-bold" href="{{route('blogs.edit', ['blog' => $blog])}}">Edit</a>
                        <a class="ml-5 text-red-500 hover:underline font-bold" href="{{route('blogs.destroy', ['blog' => $blog])}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
            {{ $blogs->links() }}
        </div>
    </div>

</x-app-layout>
