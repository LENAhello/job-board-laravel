<x-layout>
    <div class="w-full my-8 mx-auto bg-white shadow-lg rounded-xl p-8">
        <h1 class="text-2xl font-bold text-primary mb-6">Create New Job</h1>

        <form method="POST" action="{{ route('jobs.store') }}" class="space-y-6">
            @csrf

            {{-- Title --}}
            <div>
                <label for="title" class="block text-sm font-medium text-primary">Job Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                       class="mt-1 block w-full rounded-lg p-2 border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                @error('title')
                    <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                        <x-warning-icon/> 
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Company --}}
            <div>
                <label for="company" class="block text-sm font-medium text-primary">Company</label>
                <input type="text" id="company" name="company" value="{{ old('company') }}"
                       class="mt-1 block w-full rounded-lg p-2 border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                @error('company')
                    <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                        <x-warning-icon/> 
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Remote or On-site --}}
            <div>
                <span class="block text-sm font-medium text-primary">Work Type</span>
                <div class="mt-2 flex items-center space-x-4">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="is_remote" value="1" {{ old('is_remote') == 1 ? 'checked' : '' }}>
                        <span>Remote</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="is_remote" value="0" {{ old('is_remote') == 0 ? 'checked' : '' }}>
                        <span>On-site</span>
                    </label>
                </div>
                @error('is_remote')
                    <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                        <x-warning-icon/> 
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Description --}}
            <div>
                <label for="description" class="block text-sm font-medium text-primary">Description</label>
                <textarea id="description" name="description" rows="4"
                          class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring-primary">{{ old('description') }}</textarea>
                @error('description')
                    <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                        <x-warning-icon/> 
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Salary --}}
            <div>
                <label for="salary" class="block text-sm font-medium text-primary">Salary</label>
                <input type="number" id="salary" name="salary" value="{{ old('salary') }}"
                       class="mt-1 block w-full rounded-lg p-2 border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                @error('salary')
                    <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                        <x-warning-icon/> 
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Posted At --}}
            <div>
                <label for="posted_at" class="block text-sm font-medium text-primary">Posted At</label>
                <input type="date" id="posted_at" name="posted_at" value="{{ old('posted_at') }}"
                       class="mt-1 block w-full rounded-lg p-2 border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                @error('posted_at')
                    <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                        <x-warning-icon/> 
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Category --}}
            <div>
                <label for="category_id" class="block text-sm font-medium text-primary">Category</label>
                <select id="category_id" name="category_id"
                        class="mt-1 block w-full rounded-lg p-2 border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category['id'] }}" {{ old('category_id') == $category['id'] ? 'selected' : '' }}>
                            {{ $category['name'] }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="flex items-center justify-start text-red-600 text-sm mt-1">
                        <x-warning-icon/> 
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Submit --}}
            <div>
                <button type="submit"
                        class="w-full px-4 py-2 font-bold rounded-lg bg-primary/80 hover:bg-primary text-white transition">
                    Create Job
                </button>
            </div>
        </form>
    </div>
</x-layout>
