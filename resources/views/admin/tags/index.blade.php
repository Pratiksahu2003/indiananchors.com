@extends('layouts.admin')

@section('title', 'Manage Tags')
@section('page_title', 'Journal Themes (Tags)')

@section('content')
<div x-data="{ 
    editMode: false, 
    editTag: { id: '', name: '', slug: '' },
    openEdit(tag) {
        this.editTag = { ...tag };
        this.editMode = true;
    }
}">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Add Tag Form -->
        <div class="lg:col-span-1">
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm">
                <h3 class="text-lg font-bold text-slate-950 mb-6 flex items-center gap-2">
                    <i class="fas fa-plus-circle text-indigo-600"></i> New Theme
                </h3>
                <form action="{{ route('admin.tags.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Tag Name</label>
                        <input type="text" name="name" required placeholder="e.g. Stage Presence" 
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all font-bold text-slate-950">
                    </div>
                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Slug (Optional)</label>
                        <input type="text" name="slug" placeholder="e.g. stage-presence" 
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all text-slate-500 italic">
                    </div>
                    <button type="submit" class="w-full bg-slate-950 text-white py-4 rounded-xl font-bold uppercase tracking-widest text-[10px] hover:bg-indigo-600 transition-all shadow-lg">
                        Add Tag
                    </button>
                </form>
            </div>
        </div>

        <!-- Tags List -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="px-8 py-6 border-b border-slate-100 flex items-center justify-between">
                    <h3 class="font-bold text-slate-950">Active Narrative Themes</h3>
                    <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-[10px] font-black uppercase tracking-widest">
                        Total: {{ $tags->count() }}
                    </span>
                </div>
                <div class="p-0 overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-[10px] font-black uppercase tracking-widest text-slate-400">
                            <tr>
                                <th class="px-8 py-4">Name</th>
                                <th class="px-8 py-4">Slug</th>
                                <th class="px-8 py-4">Stories</th>
                                <th class="px-8 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach($tags as $tag)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-8 py-5">
                                    <span class="font-bold text-slate-950 uppercase tracking-tighter">{{ $tag->name }}</span>
                                </td>
                                <td class="px-8 py-5">
                                    <code class="text-[11px] text-slate-400">#{{ $tag->slug }}</code>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="px-2.5 py-1 bg-indigo-50 text-indigo-600 rounded-md text-[10px] font-black">
                                        {{ $tag->posts_count }}
                                    </span>
                                </td>
                                <td class="px-8 py-5 text-right flex items-center justify-end gap-3">
                                    <button @click="openEdit({{ json_encode($tag) }})" class="text-indigo-400 hover:text-indigo-600 p-2 transition-colors">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST" onsubmit="return confirm('Remove tag theme?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-400 hover:text-rose-600 p-2 transition-colors">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @if($tags->isEmpty())
                            <tr>
                                <td colspan="4" class="px-8 py-20 text-center text-slate-400 italic">No tags found. Start by adding one!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Tag Edit Modal (High Performance) -->
    <template x-if="editMode">
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm">
            <div class="bg-white rounded-[40px] w-full max-w-md p-10 shadow-2xl overflow-hidden relative" @click.away="editMode = false">
                <div class="absolute top-0 right-0 p-8">
                    <button @click="editMode = false" class="text-slate-400 hover:text-slate-950 transition-colors">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <h3 class="text-2xl font-syne font-black text-slate-950 mb-8 uppercase tracking-tighter">Update Theme</h3>
                
                <form :action="'{{ url('admin/tags') }}/' + editTag.id" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-3">Theme Title</label>
                        <input type="text" name="name" x-model="editTag.name" required
                               class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-100 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all font-bold text-slate-950 uppercase tracking-tighter">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-3">Narrative Slug</label>
                        <input type="text" name="slug" x-model="editTag.slug" required
                               class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-100 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all text-slate-500 italic">
                    </div>
                    
                    <div class="pt-4">
                        <button type="submit" class="w-full py-5 bg-slate-950 text-white rounded-2xl font-black uppercase tracking-[0.2em] text-[10px] hover:bg-indigo-600 transition-all shadow-xl">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </template>
</div>
@endsection
