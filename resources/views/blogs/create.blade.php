<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex justify-between items-center">
            {{ __('Add Blog') }}

            <a href="{{ route('blogs.index') }}" class="bg-indigo-500 text-white rounded py-1 px-5 text-[20px]">
                Go Back
            </a>
        </div>
    </x-slot>

    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="banner" class="block">
                Banner
            </label>
            <input type="file" required name="banner" id="banner" accept="image/*"
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500">
            @error('banner')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="block">
                Title
            </label>
            <input type="text" required name="title" id="title" value="{{ old('title') }}"
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500">
            @error('title')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="block">
                Slug
            </label>
            <input type="text" name="slug" id="slug" readonly required value="{{ old('slug') }}"
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500">
            @error('slug')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="block">
                Description
            </label>
            <textarea name="description" id="description" rows="5" required
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500 p-3">{{ old('description') }}</textarea>
            @error('description')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="block">
                Content
            </label>
            <textarea name="content" id="content" rows="30"
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500">{{ old('content') }}</textarea>
            @error('content')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="block">
                Cannonical URL
            </label>
            <input type="text" name="cannonical_url" id="cannonical_url" value="{{ old('cannonical_url') }}"
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500">
            @error('cannonical_url')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="block">
                Meta Title
            </label>
            <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title') }}"
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500">
            @error('meta_title')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="block">
                Meta Description
            </label>
            <textarea name="meta_description" id="meta_description" rows="5"
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500 p-3">{{ old('meta_description') }}</textarea>
            @error('meta_description')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="block">
                Meta Keyword
            </label>
            <textarea name="meta_keyword" id="meta_keyword" rows="5"
                class="w-full rounded border border-indigo-500 focus:ring-indigo-500 p-3">{{ old('meta_keyword') }}</textarea>
            @error('meta_keyword')
                <span class="text-red-500">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <button type="submit" class="bg-indigo-500 text-white rounded py-1 px-5 text-[20px]">
            Add
        </button>
    </form>
    @push('head')
        <script src="https://cdn.tiny.cloud/1/y5dh3bfx0gqt5sggf6pzlr9avvt8ay1c0xwpwuyxocs2bsk7/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
    @endpush
    @push('script')
        <script>
            tinymce.init({
                selector: '#content',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });

            $('#title').on('input', function() {
                let title = $(this).val();
                // Replace spaces with hyphens and remove special characters
                let slug = title.toLowerCase().trim().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '');
                let canonical_url = 'blog/' + slug; // Updated canonical URL structure
                $('#slug').val(slug);
                $('#cannonical_url').val(canonical_url);
            });
        </script>
    @endpush
</x-app-layout>
