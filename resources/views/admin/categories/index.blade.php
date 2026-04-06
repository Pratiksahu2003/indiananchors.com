@extends('layouts.admin')

@section('title', 'Manage Categories')
@section('page_title', 'Journal Categories')

@section('content')
<div x-data="{ 
    editMode: false, 
    editCategory: { id: '', name: '', slug: '' },
    openEdit(cat) {
        this.editCategory = { ...cat };
        this.editMode = true;
    }
}">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Add Category Form -->
        <div class="lg:col-span-1">
            <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm">
                <h3 class="text-lg font-bold text-slate-950 mb-6 flex items-center gap-2">
                    <i class="fas fa-folder-plus text-indigo-600"></i> New Category
                </h3>
                <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Category Name</label>
                        <input type="text" name="name" required placeholder="e.g. Masterclass Presence" 
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">Slug (Optional)</label>
                        <input type="text" name="slug" placeholder="e.g. masterclass-presence" 
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
                    </div>
                    <button type="submit" class="w-full bg-slate-900 text-white py-4 rounded-xl font-bold uppercase tracking-widest text-[10px] hover:bg-indigo-600 transition-all shadow-lg">
                        Add Category
                    </button>
                </form>
            </div>
        </div>

        <!-- Categories List -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="px-8 py-6 border-b border-slate-100 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                    <div>
                        <h3 class="font-bold text-slate-950">Active Discovery Paths</h3>
                        <span class="text-[10px] text-slate-400 font-black uppercase tracking-widest mt-1 block">Total: {{ $categories->count() }}</span>
                    </div>
                    <div class="w-full md:w-64 relative group">
                        <form action="{{ route('admin.categories.index') }}" method="GET">
                            <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-indigo-500 transition-colors"></i>
                            <input type="text" name="search" value="{{ request('search') }}" 
                                   placeholder="Search paths..." 
                                   class="w-full pl-11 pr-4 py-2.5 bg-slate-50 border border-slate-100 rounded-xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 transition-all outline-none text-sm">
                        </form>
                    </div>
                </div>
                <div class="p-0 overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-[10px] font-black uppercase tracking-widest text-slate-400">
                            <tr>
                                <th class="px-8 py-4">Name</th>
                                <th class="px-8 py-4 text-center">Stories</th>
                                <th class="px-8 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach($categories as $category)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-8 py-5">
                                    <div class="leading-none">
                                        <p class="font-bold text-slate-950 uppercase tracking-tighter">{{ $category->name }}</p>
                                        <p class="text-[10px] text-slate-400 mt-1">/{{ $category->slug }}</p>
                                    </div>
                                </td>
                                <td class="px-8 py-5 text-center">
                                    <span class="px-2.5 py-1 bg-indigo-50 text-indigo-600 rounded-md text-[10px] font-black">
                                        {{ $category->posts_count }}
                                    </span>
                                </td>
                                <td class="px-8 py-5 text-right flex items-center justify-end gap-3">
                                    <button @click='openEdit(@json($category))' class="text-indigo-400 hover:text-indigo-600 p-2 transition-colors">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Remove category?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-400 hover:text-rose-600 p-2 transition-colors">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal (Simplified Persistence) -->
    <div x-show="editMode" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
         x-cloak>
        <div class="bg-white rounded-[40px] w-full max-w-md p-10 shadow-2xl overflow-hidden relative" @click.away="editMode = false">
            <div class="absolute top-0 right-0 p-8">
                <button @click="editMode = false" class="text-slate-400 hover:text-slate-950 transition-colors">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <h3 class="text-2xl font-syne font-black text-slate-950 mb-8 uppercase tracking-tighter">Update Content Path</h3>
            
            <form :action="'{{ url('admin/categories') }}/' + editCategory.id" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-3">Narrative Name</label>
                    <input type="text" name="name" x-model="editCategory.name" required
                           class="w-full px-6 py-4 rounded-2xl bg-slate-50 border border-slate-100 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all font-bold text-slate-950 uppercase tracking-tighter">
                </div>
                <div>
                    <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-3">Discovery Slug</label>
                    <input type="text" name="slug" x-model="editCategory.slug" required
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
</div>
@endsection
