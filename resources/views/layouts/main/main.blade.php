<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Useful Content Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        },
                        surface: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    spacing: {
                        '128': '32rem',
                        '144': '36rem',
                    },
                    borderRadius: {
                        'xl': '1rem',
                        '2xl': '2rem',
                    }
                }
            }
        }
    </script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>

<body class="font-sans bg-surface-50 text-gray-900 min-h-screen flex flex-col antialiased">

    @include('layouts.main.navigation')

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Hero Carousel -->
        <div class="mb-16 rounded-2xl overflow-hidden shadow-xl">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="w-3 h-3 rounded-full" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="w-3 h-3 rounded-full" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded-2xl">
                    
                    <div class="carousel-item active">
                        <div class="relative">

                            <img
                                src="https://media.istockphoto.com/id/517188688/ru/%D1%84%D0%BE%D1%82%D0%BE/%D0%B3%D0%BE%D1%80%D0%BD%D1%8B%D0%B9-%D0%BB%D0%B0%D0%BD%D0%B4%D1%88%D0%B0%D1%84%D1%82.jpg?s=612x612&w=0&k=20&c=6Qfb5YCLIkiq_hYxRmTj8t2FWwr4Yrdq2CRGVwj5Ymk="
                                class="d-block w-full h-96 sm:h-[32rem] object-cover"
                                alt="Mountain landscape">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end pb-12 sm:pb-16 md:pb-20 px-8">
                                <div class="max-w-3xl text-white animate__animated animate__fadeInUp">
                                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">
                                        Discover Amazing Content
                                    </h2>
                                    <p class="text-lg sm:text-xl opacity-90 mb-6">
                                        Explore curated resources and tools to enhance your productivity and knowledge.
                                    </p>
                                    <button class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                                        Get Started
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/517188688/ru/%D1%84%D0%BE%D1%82%D0%BE/%D0%B3%D0%BE%D1%80%D0%BD%D1%8B%D0%B9-%D0%BB%D0%B0%D0%BD%D0%B4%D1%88%D0%B0%D1%84%D1%82.jpg?s=612x612&w=0&k=20&c=6Qfb5YCLIkiq_hYxRmTj8t2FWwr4Yrdq2CRGVwj5Ymk=" class="d-block w-full h-96 sm:h-[32rem] object-cover" alt="Technology">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end pb-12 sm:pb-16 md:pb-20 px-8">
                            <div class="max-w-3xl text-white animate__animated animate__fadeInUp">
                                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">
                                    Discover Amazing Content
                                </h2>
                                <p class="text-lg sm:text-xl opacity-90 mb-6">
                                    Explore curated resources and tools to enhance your productivity and knowledge.
                                </p>
                                <button class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                                    Get Started
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-black/30 rounded-full p-4" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-black/30 rounded-full p-4" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>

        <!-- Content Section -->
        <section class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Featured Content
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Handpicked resources to help you learn, grow and be more productive
                </p>
            </div>

            @yield('content')
        </section>

    </main>

    @include('layouts.main.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Optional: Add smooth scroll and animations
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = new bootstrap.Carousel('#carouselExampleIndicators', {
                interval: 5000,
                ride: 'carousel'
            });
        });
    </script>
</body>

</html>