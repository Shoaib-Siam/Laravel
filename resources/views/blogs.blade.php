<x-layout>
    <x-slot:heading>
        <div class = "flex justify-between" >
            <div> Blogs</div>
            <x-nav-link href="/blogs/create" :active="true">Create New Post</x-nav-link>
    </x-slot:heading>

    <ul>
        @foreach ($blogs as $blog)
            <li>
                <a href="/blogs/{{ $blog['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $blog['title'] }}</strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
