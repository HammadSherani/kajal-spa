<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex justify-between items-center">
            {{ __('Add Blog') }}

            <a href="{{ route('blogs.index') }}" class="bg-indigo-500 text-white rounded py-1 px-5 text-[20px]">
                Go Back
            </a>
        </div>
    </x-slot>

    <form action="{{ route('blogs.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="block">
                Title
            </label>
            <input type="text" name="title" class="w-full rounded border border-indigo-500 focus:ring-indigo-500">
        </div>
        <div class="mb-3">
            <label for="" class="block">
                Content
            </label>
            <textarea name="content" id="content" rows="30"
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500"></textarea>
        </div>
        <button type="submit" class="bg-indigo-500 text-white rounded py-1 px-5 text-[20px]">
            Add
        </button>
    </form>
    @push('head')
        <script src="https://cdn.tiny.cloud/1/y5dh3bfx0gqt5sggf6pzlr9avvt8ay1c0xwpwuyxocs2bsk7/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>
    @endpush
    @push('script')
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        </script>
    @endpush
</x-app-layout>
