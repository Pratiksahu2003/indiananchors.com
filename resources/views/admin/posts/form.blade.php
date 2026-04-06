@extends('layouts.admin')

@section('title', isset($post) ? 'Edit Post: ' . $post->title : 'Create New Post')
@section('page_title', isset($post) ? 'Edit Post' : 'Create New Post')

@section('content')
<form action="{{ isset($post) ? route('admin.posts.update', $post) : route('admin.posts.store') }}" 
      method="POST" 
      enctype="multipart/form-data" 
      class="grid grid-cols-1 lg:grid-cols-3 gap-8 pb-20">
    @csrf
    @if(isset($post)) @method('PUT') @endif

    <!-- Main Content Area (Left) -->
    <div class="lg:col-span-2 space-y-8">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
            <!-- Title Content Section -->
            <div class="space-y-6">
                <div>
                    <label for="title" class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Post Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $post->title ?? '') }}" 
                        class="w-full text-2xl font-bold bg-slate-50 border border-slate-200 rounded-xl px-6 py-4 focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 focus:bg-white transition-all shadow-sm outline-none" 
                        placeholder="Enter catchy title here..." required onkeyup="generateSlug(this.value)">
                </div>

                <div>
                    <label for="slug" class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">SEO Slug</label>
                    <div class="flex items-center gap-2">
                        <span class="text-slate-400 font-medium whitespace-nowrap">/blog/</span>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug ?? '') }}" 
                            class="flex-1 bg-slate-50 border border-slate-200 rounded-lg px-4 py-2 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all font-mono text-sm text-slate-600" 
                            placeholder="url-friendly-slug-auto-generated" required>
                    </div>
                </div>

                <div>
                    <label for="editor" class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Content</label>
                    <div class="rounded-xl overflow-hidden border border-slate-200">
                        <textarea name="content" id="editor">{{ old('content', $post->content ?? '') }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Section -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
            <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
                <i class="fas fa-search-plus text-indigo-500"></i> SEO Optimization
            </h3>
            <div class="space-y-6">
                <div>
                    <label for="meta_title" class="block text-sm font-bold text-slate-700 mb-2">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $post->meta_title ?? '') }}" 
                        class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 focus:ring-4 focus:ring-indigo-100 text-sm focus:border-indigo-500 transition-all outline-none" 
                        placeholder="Default is post title">
                </div>
                <div>
                    <label for="meta_description" class="block text-sm font-bold text-slate-700 mb-2">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="3" 
                        class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 focus:ring-4 focus:ring-indigo-100 text-sm focus:border-indigo-500 transition-all outline-none" 
                        placeholder="Brief summary for search results...">{{ old('meta_description', $post->meta_description ?? '') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Area (Right) -->
    <div class="space-y-8">
        <!-- Publish Settings -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden sticky top-8">
            <div class="bg-slate-50 px-8 py-4 border-b border-slate-100">
                <h3 class="font-bold text-slate-800 uppercase text-xs tracking-widest">Publish Settings</h3>
            </div>
            <div class="p-8 space-y-6">
                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2 uppercase">Status</label>
                    <select name="status" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 transition-all outline-none appearance-none">
                        <option value="draft" {{ (old('status', $post->status ?? '') === 'draft') ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ (old('status', $post->status ?? '') === 'published') ? 'selected' : '' }}>Published</option>
                        <option value="scheduled" {{ (old('status', $post->status ?? '') === 'scheduled') ? 'selected' : '' }}>Scheduled</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2 uppercase">Category</label>
                    <select name="category_id" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 transition-all outline-none appearance-none">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ (old('category_id', $post->category_id ?? '') == $category->id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 mb-2 uppercase">Tags</label>
                    <div class="grid grid-cols-2 gap-2 mt-2 max-h-40 overflow-y-auto p-4 bg-slate-50 rounded-xl border border-slate-100">
                        @foreach($tags as $tag)
                            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-indigo-600 transition-colors">
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
                                    class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500"
                                    {{ in_array($tag->id, old('tags', isset($post) ? $post->tags->pluck('id')->toArray() : [])) ? 'checked' : '' }}>
                                {{ $tag->name }}
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="pt-4 space-y-3">
                    <button type="submit" class="w-full py-4 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-0.5 transition-all">
                        {{ isset($post) ? 'Save Changes' : 'Publish Post' }}
                    </button>
                    <a href="{{ route('admin.posts.index') }}" class="block text-center py-4 text-slate-500 font-bold hover:text-slate-800 transition-colors">Cancel</a>
                </div>
            </div>
        </div>

        <!-- Featured Image -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
            <h3 class="text-sm font-bold text-slate-800 mb-4 flex items-center gap-2">
                <i class="fas fa-image text-emerald-500"></i> Featured Image
            </h3>
            <div class="relative group">
                <div class="w-full aspect-video bg-slate-50 rounded-xl border-2 border-dashed border-slate-200 flex flex-col items-center justify-center text-slate-400 group-hover:border-indigo-400 transition-all cursor-pointer overflow-hidden p-2" onclick="document.getElementById('imageInput').click()">
                    @if(isset($post) && $post->featured_image)
                        <img src="{{ Storage::url($post->featured_image) }}" id="imagePreview" class="w-full h-full object-cover rounded-lg">
                    @else
                        <img id="imagePreview" class="hidden w-full h-full object-cover rounded-lg">
                        <div id="imagePlaceholder" class="flex flex-col items-center">
                            <i class="fas fa-cloud-upload-alt text-3xl mb-2 group-hover:text-indigo-500"></i>
                            <span class="text-xs font-bold uppercase tracking-wider">Click to Upload</span>
                        </div>
                    @endif
                </div>
                <input type="file" name="featured_image" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(this)">
            </div>
        </div>

        <!-- Media Integration -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
            <h3 class="text-sm font-bold text-slate-800 mb-4 flex items-center gap-2">
                <i class="fab fa-youtube text-rose-500"></i> YouTube Integration
            </h3>
            <input type="url" name="youtube_url" id="youtube_url" value="{{ old('youtube_url', $post->youtube_url ?? '') }}" 
                class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:ring-4 focus:ring-rose-100 focus:border-rose-500 transition-all outline-none" 
                placeholder="https://youtube.com/watch?v=..." oninput="updateYoutubePreview(this.value)">
            
            <div id="yt-preview-container" class="mt-4 hidden aspect-video rounded-xl overflow-hidden border border-slate-200 shadow-sm">
                <iframe id="yt-preview" class="w-full h-full" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</form>

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    // CKEditor Initialization
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', 'undo', 'redo'],
            placeholder: 'Start writing your story here...'
        })
        .catch(error => {
            console.error(error);
        });

    // Slug Generation
    function generateSlug(text) {
        const slug = text.toLowerCase()
            .replace(/[^\w\s-]/g, '') // Remove non-word chars
            .replace(/[\s_]+/g, '-')  // Replace spaces/underscores with -
            .replace(/^-+|-+$/g, ''); // Trim - from ends
        document.getElementById('slug').value = slug;
    }

    // Image Preview
    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('imagePreview');
                const placeholder = document.getElementById('imagePlaceholder');
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                if(placeholder) placeholder.classList.add('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // YouTube Preview Logic
    function updateYoutubePreview(url) {
        const container = document.getElementById('yt-preview-container');
        const iframe = document.getElementById('yt-preview');
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        const match = url.match(regExp);

        if (match && match[2].length == 11) {
            container.classList.remove('hidden');
            iframe.src = `https://www.youtube.com/embed/${match[2]}`;
        } else {
            container.classList.add('hidden');
            iframe.src = '';
        }
    }

    // Run initial youtube preview check
    window.onload = function() {
        const ytInput = document.getElementById('youtube_url');
        if(ytInput.value) updateYoutubePreview(ytInput.value);
    }
</script>
@endpush
@endsection
