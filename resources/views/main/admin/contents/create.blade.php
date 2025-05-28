<x-app-layout>
    <div class="py-8 space-y-6">
        <!-- Заголовок с действиями -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
                <div class="p-6 md:p-8 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="space-y-3">
                        <div class="flex items-center space-x-4">
                            <div class="p-3 rounded-lg bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                                    {{ __("Управление контентом") }}
                                </h1>
                                <p class="text-gray-600 dark:text-gray-400 mt-1">
                                    {{ __("Создавайте, редактируйте и управляйте материалами") }}
                                </p>
                            </div>
                        </div>

                        <!-- Статусы -->
                        <div class="flex flex-wrap gap-2 pt-1">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                                {{ __("Обновлено сегодня") }}
                            </span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                {{ $contents->count() }} {{ trans_choice('материал|материала|материалов', $contents->count()) }}
                            </span>
                        </div>
                    </div>

                    <!-- Кнопки действий -->
                    <div class="flex flex-col sm:flex-row gap-3 shrink-0">
                        <button id="openModalBtn" class="flex items-center justify-center px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 shadow-sm hover:shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                            {{ __("Добавить") }}
                        </button>
                        <a href="{{ route('admin.contents.index') }}" class="flex items-center justify-center px-4 py-2.5 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 rounded-lg font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                            {{ __("Назад") }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Панель фильтров -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-4 shadow-sm">
                <div class="space-y-4 sm:space-y-0 sm:flex sm:items-center sm:justify-between">
                    <!-- Поиск -->
                    <div class="relative w-full sm:max-w-xs">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input
                            type="text"
                            class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200"
                            placeholder="{{ __('Поиск по названию...') }}"
                            aria-label="Поиск материалов">
                    </div>

                    <!-- Фильтры -->
                    <div class="flex items-center space-x-3">
                        <select class="block w-full sm:w-40 pl-3 pr-8 py-2.5 text-sm border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                            <option>{{ __('Сортировка') }}</option>
                            <option>{{ __('А-Я') }}</option>
                            <option>{{ __('Я-А') }}</option>
                            <option>{{ __('Новые') }}</option>
                            <option>{{ __('Старые') }}</option>
                        </select>

                        <button class="flex items-center px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200 transition-colors duration-200 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                            {{ __("Фильтры") }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Основное содержимое -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Таблица материалов -->
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider w-1/4">
                                    {{ __("Контент") }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider w-2/5">
                                    {{ __("Описание") }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    {{ __("Категория") }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    {{ __("Действия") }}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($contents as $content)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-150 group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="min-w-0">
                                            <div class="text-sm font-medium text-gray-900 dark:text-white truncate max-w-xs">
                                                {{ $content->title }}
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400 mt-1 flex items-center">
                                                <span class="truncate max-w-xs">{{ $content->url }}</span>
                                                <a href="{{ $content->url }}" class="ml-2 text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400" title="Перейти">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-2">
                                        {{ $content->description }}
                                    </p>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-indigo-100 dark:bg-indigo-900/30 text-indigo-800 dark:text-indigo-200">
                                        {{ $content->category->name }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                        <a href="{{ route('admin.contents.show', $content->id) }}" class="text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 p-1.5 rounded-md hover:bg-indigo-50 dark:hover:bg-indigo-900/20" title="Просмотр">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>

                                        <a href="{{ route('admin.contents.edit', $content->id) }}" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 p-1.5 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600" title="Редактировать">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>

                                        <form action="{{ route('admin.contents.destroy', $content->id) }}" method="POST" onsubmit="return confirm('Удалить этот материал?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-gray-400 hover:text-red-600 dark:hover:text-red-400 p-1.5 rounded-md hover:bg-red-50 dark:hover:bg-red-900/20" title="Удалить">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Модальное окно добавления -->
    <div class="fixed inset-0 z-50 hidden" id="exampleModal" aria-modal="true" role="dialog">
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm transition-opacity" aria-hidden="true"></div>
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl border border-gray-200 dark:border-gray-700 w-full max-w-2xl transform transition-all">
                <!-- Заголовок -->
                <div class="p-5 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        {{ __("Новый материал") }}
                    </h3>
                    <button type="button" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300" onclick="document.getElementById('exampleModal').classList.add('hidden')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Форма -->
                <form action="{{ route('admin.contents.store') }}" method="POST" class="p-5 space-y-4">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Основные поля -->
                        <div class="space-y-4">
                            <!-- Название -->
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __("Название") }} <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="title"
                                    name="title"
                                    required
                                    class="block w-full px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                                @error('title')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Описание -->
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __("Описание") }}
                                </label>
                                <textarea
                                    id="description"
                                    name="description"
                                    rows="3"
                                    class="block w-full px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200"></textarea>
                            </div>

                            <!-- Ссылка -->
                            <div>
                                <label for="url" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __("Ссылка") }} <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="url"
                                    id="url"
                                    name="url"
                                    required
                                    class="block w-full px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                            </div>
                        </div>

                        <!-- Выбор категорий и тегов -->
                        <div class="space-y-4">
                            <!-- Категория -->
                            <div>
                                <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __("Категория") }} <span class="text-red-500">*</span>
                                </label>
                                <select id="category_id"
                                    name="category_id"
                                    required
                                    class="block w-full px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                                    <option value="">{{ __("Выберите категорию") }}</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Авторы -->
                            <div>
                                <label for="authors" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __("Авторы") }}
                                </label>
                                <select id="authors"
                                    name="authors[]"
                                    multiple
                                    class="block w-full px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                                    @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ __("Удерживайте Ctrl для выбора нескольких") }}</p>
                            </div>

                            <!-- Жанры -->
                            <div>
                                <label for="genres" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __("Жанры") }}
                                </label>
                                <select id="genres"
                                    name="genres[]"
                                    multiple
                                    class="block w-full px-3 py-2.5 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                                    @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Кнопки -->
                    <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <button type="button" onclick="document.getElementById('exampleModal').classList.add('hidden')" class="px-4 py-2.5 text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-all duration-200">
                            {{ __("Отмена") }}
                        </button>
                        <button type="submit" class="px-4 py-2.5 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5 -ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            {{ __("Добавить") }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Управление модальным окном
        document.addEventListener('DOMContentLoaded', function() {
            const openBtn = document.getElementById('openModalBtn');
            const modal = document.getElementById('exampleModal');

            openBtn.addEventListener('click', () => {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });

            modal.addEventListener('click', (e) => {
                if (e.target === modal || e.target.classList.contains('modal-backdrop')) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            });

            // Закрытие при нажатии ESC
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            });
        });
    </script>
</x-app-layout>