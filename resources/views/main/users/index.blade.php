@extends('layouts.main.main')

@section('content')

<!-- Videos Section -->
<section class="mb-12">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Videos</h2>
        <div class="flex space-x-4">
            <div class="relative">
                <select class="appearance-none bg-surface-100 border border-surface-200 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>Category</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="relative">
                <select class="appearance-none bg-surface-100 border border-surface-200 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>Tags</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="relative">
                <select class="appearance-none bg-surface-100 border border-surface-200 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>Date</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="relative">
                <select class="appearance-none bg-surface-100 border border-surface-200 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>Newest</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    @foreach ($videos as $video)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-xs overflow-hidden border border-gray-100 hover:shadow-sm transition-all duration-200 hover:border-primary-100 group flex flex-col h-full">
                <!-- Video Embed -->
                <div class="relative aspect-video bg-gray-50">
                    <iframe
                        width="100%"
                        height="100%"
                        src="{{ $video->url }}"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                        class="absolute inset-0 w-full h-full object-cover">
                    </iframe>


                </div>

                <!-- Card Content -->
                <div class="p-4 flex-grow flex flex-col">
                    <a href="#" class="block group-hover:text-primary-700 transition-colors duration-150">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2 leading-snug line-clamp-2 hover:underline transition-all duration-150">
                            {{ $video->title }}
                        </h3>
                        <div class="h-1 w-10 bg-gradient-to-r from-primary-400 to-primary-600 rounded-full mb-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <!-- Description with improved readability -->
                    @if($video->description)
                    <div class="mb-3">
                        <p class="text-sm text-gray-600 line-clamp-3 leading-snug">
                            {{ $video->description }}
                        </p>
                    </div>
                    @endif

                    <div class="mt-auto">
                        <div class="flex items-center justify-between">
                            <!-- Authors -->
                            <div class="flex items-center space-x-2">
                                @if(count($video->authors) > 0)
                                <div class="flex -space-x-2">
                                    @foreach($video->authors->take(3) as $author)
                                    <div class="relative">
                                        <div class="w-7 h-7 rounded-full bg-gray-200 flex items-center justify-center text-xs font-medium text-gray-600 border-2 border-white">
                                            {{ substr($author->name, 0, 1) }}
                                        </div>
                                        @if($loop->first && count($video->authors) > 3)
                                        <div class="absolute -right-2 -bottom-1 bg-gray-100 text-xs px-1 rounded-full border border-white">
                                            +{{ count($video->authors) - 3 }}
                                        </div>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                                <span class="text-sm text-gray-500">
                                    @if(count($video->authors) == 1)
                                    {{ $video->authors[0]->name }}
                                    @else
                                    {{ count($video->authors) }} contributors
                                    @endif
                                </span>
                                @endif
                            </div>

                            <!-- Date -->
                            <span class="text-xs font-medium text-gray-400 bg-gray-50 px-2 py-1 rounded-full whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($video->created_at)->diffForHumans() }}
                            </span>
                        </div>

                        <!-- Category tag -->
                        @if($video->category)
                        <div class="mt-3">
                            <span class="inline-block px-2 py-1 text-xs font-medium rounded-full bg-primary-50 text-primary-700">
                                {{ $video->category->name }}
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>

<!-- Podcasts Section -->
<section class="mb-12">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Podcasts</h2>
        <div class="flex space-x-4">
            <div class="relative">
                <select class="appearance-none bg-surface-100 border border-surface-200 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>Category</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="relative">
                <select class="appearance-none bg-surface-100 border border-surface-200 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>Tags</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="relative">
                <select class="appearance-none bg-surface-100 border border-surface-200 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>Date</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="relative">
                <select class="appearance-none bg-surface-100 border border-surface-200 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <option>Newest</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Placeholder for podcast cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-surface-200 hover:shadow-md transition-shadow">
            <div class="bg-gray-200 h-48"></div>
            <div class="p-4">
                <h3 class="font-medium text-gray-800 mb-1">Podcast Title</h3>
                <p class="text-sm text-gray-500">Author • 1 week ago</p>
            </div>
        </div>
        <!-- More podcast cards would go here -->
    </div>
</section>

<!-- Books Section -->
<section class="mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Books</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
        <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-surface-200 hover:shadow-md transition-shadow">
            <div class="aspect-[2/3] bg-gray-200"></div>
            <div class="p-3">
                <h3 class="font-medium text-gray-800 text-sm truncate">Book Title</h3>
                <p class="text-xs text-gray-500 truncate">Author</p>
            </div>
        </div>
        <!-- More book cards would go here -->
    </div>
</section>

@endsection