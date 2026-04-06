@extends('layouts.admin')

@section('title', isset($post) ? 'Edit Post: ' . $post->title : 'Create New Post')
@section('page_title', isset($post) ? 'Edit Post' : 'Create New Post')

@section('content')
<style>
    .ck-editor__editable {
        min-height: 300px !important;
        max-height: 500px !important;
        overflow-y: auto !important;
        border: none !important;
        background: transparent !important;
        padding: 0 !important;
        font-family: 'Inter', sans-serif !important;
        font-size: 1rem !important;
        line-height: 1.6 !important;
        color: #0f172a !important;
    }
    .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
        border: none !important;
    }
    .ck.ck-toolbar {
        border: none !important;
        background: #f8fafc !important;
        border-radius: 12px !important;
        margin-bottom: 12px !important;
        padding: 6px !important;
    }
</style>
<form action="{{ isset($post) ? route('admin.posts.update', $post) : route('admin.posts.store') }}" 
      method="POST" 
      enctype="multipart/form-data" 
      class="grid grid-cols-1 lg:grid-cols-3 gap-6 pb-12">
    @csrf
    @if(isset($post)) @method('PUT') @endif

    <!-- Main Content Area (Left) -->
    <div class="lg:col-span-2 space-y-4">
        <div class="bg-white rounded-xl shadow-lg border border-slate-50 p-6 relative overflow-hidden group">
            <!-- Title Content Section -->
            <div class="space-y-4 relative z-10">
                <div class="flex flex-col md:flex-row md:items-center gap-4">
                    <div class="flex-1">
                        <input type="text" name="title" id="title" value="{{ old('title', $post->title ?? '') }}" 
                            class="w-full text-2xl font-black bg-transparent border-none p-0 focus:ring-0 outline-none placeholder:text-slate-200 tracking-tight" 
                            placeholder="Headline..." required onkeyup="updateFieldInsight(this.value)">
                    </div>
                    <div class="flex items-center gap-2 text-xs font-mono text-slate-400 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-100">
                        <span class="opacity-30">/blog/</span>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug ?? '') }}" 
                            class="bg-transparent border-none p-0 focus:ring-0 outline-none text-slate-900 w-32" 
                            placeholder="slug-gen" required>
                    </div>
                </div>

                <div class="pt-2 border-t border-slate-50">
                    <textarea name="content" id="editor">{{ old('content', $post->content ?? '') }}</textarea>
                </div>
            </div>
        </div>

        <!-- Discovery Hub -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-50 p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xs font-black text-slate-900 uppercase tracking-widest">Discovery Hub</h3>
                        <span class="text-[8px] text-emerald-500 font-bold uppercase tracking-widest">Ready for search</span>
                    </div>
                    <input type="text" name="meta_title" value="{{ old('meta_title', $post->meta_title ?? '') }}" 
                        class="w-full bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 text-xs font-bold outline-none focus:border-indigo-500" 
                        placeholder="Meta Title">
                    <textarea name="meta_description" rows="2" 
                        class="w-full bg-slate-50 border border-slate-100 rounded-lg px-4 py-2 text-xs outline-none focus:border-indigo-500" 
                        placeholder="Snippet...">{{ old('meta_description', $post->meta_description ?? '') }}</textarea>
                </div>
                <div class="bg-slate-950 rounded-xl p-4 text-white relative">
                    <div class="flex items-center gap-2 mb-1">
                        <div class="w-1 h-1 rounded-full bg-emerald-500 animate-pulse"></div>
                        <span class="text-[8px] font-black uppercase text-slate-500">Live</span>
                    </div>
                    <h4 class="text-xs font-bold mb-1 truncate text-indigo-400" id="preview-title">Headline</h4>
                    <p class="text-slate-500 text-[9px] line-clamp-1 leading-tight" id="preview-desc">Search snippet preview area.</p>
                </div>
            </div>
        </div>
iv>
        
        <!-- Media Integration Modules -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Featured Image -->
            <div class="bg-white rounded-3xl shadow-sm border border-slate-50 p-8 group" 
                 id="dropzone" 
                 ondragover="handleDragOver(event)" 
                 ondragleave="handleDragLeave(event)" 
                 ondrop="handleDrop(event)">
                <h3 class="text-sm font-black text-slate-950 uppercase tracking-widest mb-4 flex items-center gap-2">
                    <i class="fas fa-camera-retro text-indigo-500 text-xs"></i> Cinematic Header
                </h3>
                <div class="relative overflow-hidden rounded-2xl border-2 border-dashed border-slate-100 group-hover:border-indigo-400 transition-all">
                    <div class="w-full aspect-video bg-slate-50 flex flex-col items-center justify-center text-slate-400 cursor-pointer p-4" onclick="document.getElementById('imageInput').click()">
                        @if(isset($post) && $post->featured_image)
                            <img src="{{ Storage::url($post->featured_image) }}" id="imagePreview" class="w-full h-full object-cover rounded-xl">
                        @else
                            <img id="imagePreview" class="hidden w-full h-full object-cover rounded-xl">
                            <div id="imagePlaceholder" class="flex flex-col items-center">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg mb-2 transition-transform group-hover:scale-110">
                                    <i class="fas fa-cloud-upload-alt text-lg text-indigo-500"></i>
                                </div>
                                <span class="text-[8px] font-black uppercase tracking-widest text-slate-400">Drag & Drop Narrative Art</span>
                            </div>
                        @endif
                    </div>
                    <input type="file" name="featured_image" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(this)">
                </div>
                <p class="mt-2 text-[8px] text-slate-400 uppercase font-black tracking-widest text-center">Recommended: 1200 x 630px Clarity</p>
            </div>

            <!-- YouTube Integration -->
            <div class="bg-white rounded-3xl shadow-sm border border-slate-50 p-8 h-full flex flex-col">
                <h3 class="text-sm font-black text-slate-950 uppercase tracking-widest mb-4 flex items-center gap-2">
                    <i class="fab fa-youtube text-rose-500 text-xs"></i> Cinematic Reel
                </h3>
                <div class="space-y-3 flex-1 flex flex-col">
                    <input type="url" name="youtube_url" id="youtube_url" value="{{ old('youtube_url', $post->youtube_url ?? '') }}" 
                        class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 text-sm font-bold focus:ring-2 focus:ring-rose-100 focus:border-rose-500 transition-all outline-none" 
                        placeholder="YouTube Story URL..." oninput="updateYoutubePreview(this.value)">
                    
                    <div id="yt-preview-container" class="hidden flex-1 aspect-video rounded-2xl overflow-hidden border border-slate-50 shadow-xl relative mt-auto">
                        <iframe id="yt-preview" class="w-full h-full" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div id="yt-placeholder" class="flex-1 flex flex-col items-center justify-center bg-slate-50 rounded-2xl border border-slate-50 border-dashed text-slate-200 py-6">
                        <i class="fab fa-youtube text-2xl opacity-10 mb-1"></i>
                        <span class="text-[8px] font-black uppercase tracking-widest">Video Preview Hub</span>
                    </div>
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

    </div>
</form>

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    // CKEditor Initialization with Cinematic Styles
    ClassicEditor.create(document.querySelector('#editor'), {
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', 'undo', 'redo'],
        placeholder: 'Begin the artistic narrative...'
    }).catch(error => { console.error(error); });

    // Narrative Insight & Slug Logic
    function updateFieldInsight(text) {
        const hint = document.getElementById('title-hint');
        if (text.length > 5) hint.innerText = "Story looks compelling!";
        else if (text.length > 0) hint.innerText = "Drafting the focus...";
        else hint.innerText = "Ready for impact?";
        
        // Slug Gen
        const slug = text.toLowerCase()
            .replace(/[^\w\s-]/g, '')
            .replace(/[\s_]+/g, '-')
            .replace(/^-+|-+$/g, '');
        document.getElementById('slug').value = slug;
    }

    // Cinematic Drag & Drop Media Upload
    const dropzone = document.getElementById('dropzone');
    const imageInput = document.getElementById('imageInput');

    function handleDragOver(e) {
        e.preventDefault();
        dropzone.classList.add('border-indigo-500', 'bg-indigo-50/20', 'scale-[1.01]');
    }

    function handleDragLeave(e) {
        e.preventDefault();
        dropzone.classList.remove('border-indigo-500', 'bg-indigo-50/20', 'scale-[1.01]');
    }

    function handleDrop(e) {
        e.preventDefault();
        dropzone.classList.remove('border-indigo-500', 'bg-indigo-50/20', 'scale-[1.01]');
        
        if (e.dataTransfer.files && e.dataTransfer.files[0]) {
            imageInput.files = e.dataTransfer.files;
            previewImage(imageInput);
        }
    }

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                const preview = document.getElementById('imagePreview');
                const placeholder = document.getElementById('imagePlaceholder');
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                if(placeholder) placeholder.classList.add('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // YouTube Precision Hub
    function updateYoutubePreview(url) {
        const container = document.getElementById('yt-preview-container');
        const placeholder = document.getElementById('yt-placeholder');
        const iframe = document.getElementById('yt-preview');
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        const match = url.match(regExp);

        if (match && match[2].length == 11) {
            container.classList.remove('hidden');
            if(placeholder) placeholder.classList.add('hidden');
            iframe.src = `https://www.youtube.com/embed/${match[2]}`;
        } else {
            container.classList.add('hidden');
            if(placeholder) placeholder.classList.remove('hidden');
            iframe.src = '';
        }
    }

    window.onload = () => {
        const ytInput = document.getElementById('youtube_url');
        if(ytInput.value) updateYoutubePreview(ytInput.value);
    }
</script>
@endpush
@endsection
