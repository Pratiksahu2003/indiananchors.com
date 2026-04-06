@extends('layouts.admin')

@section('title', isset($post) ? 'Edit Post: ' . $post->title : 'Create New Post')
@section('page_title', isset($post) ? 'Edit Post' : 'Create New Post')

@section('content')
<style>
    .ck-editor__editable {
        min-height: 500px !important;
        max-height: 700px !important;
        overflow-y: auto !important;
        border: none !important;
        background: transparent !important;
        padding: 0 !important;
        font-family: 'Inter', sans-serif !important;
        font-size: 1.1rem !important;
        line-height: 1.8 !important;
        color: #0f172a !important;
    }
    .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
        border: none !important;
    }
    .ck.ck-toolbar {
        border: none !important;
        background: #f8fafc !important;
        border-radius: 20px !important;
        margin-bottom: 20px !important;
        padding: 10px !important;
    }
    .ck-content blockquote {
        border-left: 4px solid #6366f1 !important;
        background: #f5f3ff !important;
        padding: 20px !important;
        border-radius: 0 20px 20px 0 !important;
        font-style: italic !important;
    }
</style>
<form action="{{ isset($post) ? route('admin.posts.update', $post) : route('admin.posts.store') }}" 
      method="POST" 
      enctype="multipart/form-data" 
      class="grid grid-cols-1 lg:grid-cols-3 gap-8 pb-20">
    @csrf
    @if(isset($post)) @method('PUT') @endif

    <!-- Main Content Area (Left) -->
    <div class="lg:col-span-2 space-y-10">
        <div class="bg-white rounded-[40px] shadow-2xl border border-slate-50 p-10 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50/30 rounded-bl-[100%] transition-all duration-700 group-focus-within:scale-150"></div>
            
            <!-- Title Content Section -->
            <div class="space-y-8 relative z-10">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <label for="title" class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400">Narrative Headline</label>
                        <span class="text-[12px] text-indigo-400 font-bold italic" id="title-hint">Ready for impact?</span>
                    </div>
                    <input type="text" name="title" id="title" value="{{ old('title', $post->title ?? '') }}" 
                        class="w-full text-4xl font-black bg-transparent border-none p-0 focus:ring-0 outline-none placeholder:text-slate-200 tracking-tighter" 
                        placeholder="Start your story here..." required onkeyup="updateFieldInsight(this.value)">
                </div>

                <div class="pt-4 border-t border-slate-50">
                    <div class="flex items-center gap-3">
                        <div class="px-3 py-1 bg-slate-900 text-white rounded-lg text-[9px] font-black uppercase tracking-widest">SEO PATH</div>
                        <div class="flex-1 flex items-center gap-1.5 text-sm font-mono text-slate-400 bg-slate-50 px-4 py-2 rounded-xl">
                            <span class="opacity-40">/blog/</span>
                            <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug ?? '') }}" 
                                class="flex-1 bg-transparent border-none p-0 focus:ring-0 outline-none text-slate-900" 
                                placeholder="narrative-slug-auto-generated" required>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <label for="editor" class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 mb-4 block">Manuscript Content</label>
                    <textarea name="content" id="editor">{{ old('content', $post->content ?? '') }}</textarea>
                </div>
            </div>
        </div>

        <!-- Discovery Optimization Section -->
        <div class="bg-white rounded-[40px] shadow-sm border border-slate-50 p-10">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl font-black text-slate-950 uppercase tracking-tighter flex items-center gap-3">
                    <i class="fas fa-bullseye text-indigo-500"></i> Discovery Hub
                </h3>
                <span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-lg text-[10px] font-black uppercase tracking-widest">SEO Optimization</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-3">Search Meta Title</label>
                        <input type="text" name="meta_title" value="{{ old('meta_title', $post->meta_title ?? '') }}" 
                            class="w-full bg-slate-50 border border-slate-50 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 transition-all outline-none text-sm font-bold" 
                            placeholder="Defaults to Headline">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-3">Snippet Description</label>
                        <textarea name="meta_description" rows="3" 
                            class="w-full bg-slate-50 border border-slate-50 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-indigo-100 text-sm focus:border-indigo-500 transition-all outline-none leading-relaxed" 
                            placeholder="Brief search summary...">{{ old('meta_description', $post->meta_description ?? '') }}</textarea>
                    </div>
                </div>
                <div class="bg-slate-900 rounded-[30px] p-8 text-white flex flex-col justify-center border border-slate-800 shadow-2xl">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></div>
                        <span class="text-[10px] font-black uppercase tracking-widest text-slate-400">Search Live Preview</span>
                    </div>
                    <p class="text-indigo-400 text-[10px] font-bold mb-2 truncate">indiananchors.com › blog › ...</p>
                    <h4 class="text-lg font-bold mb-2 leading-tight uppercase tracking-tighter line-clamp-1" id="preview-title">Your Narrative Headline</h4>
                    <p class="text-slate-500 text-xs line-clamp-2" id="preview-desc">The manuscript summary you craft will appear right here in global search results, captivating your audience at first glance.</p>
                </div>
            </div>
        </div>
        
        <!-- Featured Image -->
        <div class="bg-white rounded-[40px] shadow-sm border border-slate-50 p-10 group" 
             id="dropzone" 
             ondragover="handleDragOver(event)" 
             ondragleave="handleDragLeave(event)" 
             ondrop="handleDrop(event)">
            <h3 class="text-sm font-black text-slate-950 uppercase tracking-widest mb-6 flex items-center gap-3">
                <i class="fas fa-camera-retro text-indigo-500"></i> Cinematic Header
            </h3>
            <div class="relative overflow-hidden rounded-[30px] border-2 border-dashed border-slate-100 group-hover:border-indigo-400 transition-all">
                <div class="w-full aspect-video bg-slate-50 flex flex-col items-center justify-center text-slate-400 cursor-pointer p-4" onclick="document.getElementById('imageInput').click()">
                    @if(isset($post) && $post->featured_image)
                        <img src="{{ Storage::url($post->featured_image) }}" id="imagePreview" class="w-full h-full object-cover rounded-2xl">
                    @else
                        <img id="imagePreview" class="hidden w-full h-full object-cover rounded-2xl">
                        <div id="imagePlaceholder" class="flex flex-col items-center">
                            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-xl mb-4 transition-transform group-hover:scale-110">
                                <i class="fas fa-cloud-upload-alt text-2xl text-indigo-500"></i>
                            </div>
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-400">Drag & Drop Narrative Art</span>
                        </div>
                    @endif
                </div>
                <input type="file" name="featured_image" id="imageInput" class="hidden" accept="image/*" onchange="previewImage(this)">
            </div>
            <p class="mt-3 text-[9px] text-slate-400 uppercase font-black tracking-[0.2em] text-center">Recommended: 1200 x 630px Cinematic Clarity</p>
        </div>

        <!-- Media Integration -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
            <h3 class="text-sm font-bold text-slate-800 mb-4 flex items-center gap-2">
                <i class="fab fa-youtube text-rose-500"></i> Cinematic Reel (YouTube Link)
            </h3>
            <div class="space-y-4">
                <input type="url" name="youtube_url" id="youtube_url" value="{{ old('youtube_url', $post->youtube_url ?? '') }}" 
                    class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:ring-4 focus:ring-rose-100 focus:border-rose-500 transition-all outline-none" 
                    placeholder="https://youtube.com/watch?v=..." oninput="updateYoutubePreview(this.value)">
                
                <div id="yt-preview-container" class="hidden aspect-video rounded-xl overflow-hidden border border-slate-200 shadow-sm relative">
                    <div class="absolute inset-0 bg-slate-900/10 pointer-events-none"></div>
                    <iframe id="yt-preview" class="w-full h-full" frameborder="0" allowfullscreen></iframe>
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
