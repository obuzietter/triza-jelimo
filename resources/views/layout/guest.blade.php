<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Consultant Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
         tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        burgundy: '#800020',
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        serif: ['Georgia', 'serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
     <style>
        /* Custom scrollbar for testimonials */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        /* Dotted border utility for the timeline */
        .border-dotted-custom {
            border-style: dotted;
            border-width: 2px;
            border-color: #d1d5db;
        }
    </style>
</head>

<body class="bg-white text-gray-900 font-sans overflow-x-hidden selection:bg-burgundy selection:text-white">

    @include('layout.partials.header')


    <main class="relative pt-32 md:pt-44 pb-12 min-h-screen flex flex-col items-center px-4">
        @yield('content')
    </main>

@include('layout.partials.footer')
</body>

</html>
