<x-layout>
    <x-slot:heading>
       New Blog
    </x-slot:heading>

    <h1 class="text-3xl font-semibold mb-6">Create your Blog</h1>

    <form action="#" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg space-y-4">
        @csrf
        <!-- Title Input -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Blog Title</label>
            <input 
                type="text" 
                name="title" 
                id="title" 
                class="mt-2 p-3 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                placeholder="Enter your blog title"
            />
        </div>

        <!-- Body Textarea -->
        <div>
            <label for="body" class="block text-sm font-medium text-gray-700">Blog Body</label>
            <textarea 
                name="body" 
                id="body" 
                rows="6" 
                class="mt-2 p-3 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                placeholder="Write your blog content here"
            ></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Create Blog
            </button>
        </div>

    </form>
</x-layout>
