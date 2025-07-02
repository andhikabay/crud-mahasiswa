<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mahasiswa App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-up': 'fadeUp 0.7s ease-out',
                    },
                    keyframes: {
                        fadeUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="relative min-h-screen bg-gradient-to-br from-[#6D28D9] via-[#4C1D95] to-[#2563EB] text-white font-sans overflow-x-hidden">
    <nav class="relative z-10 backdrop-blur-md bg-white/10 shadow-lg py-4 px-6 sticky top-0">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold tracking-tight">MahasiswaApp</h1>
        </div>
    </nav>

    <main class="relative z-10 max-w-6xl mx-auto px-4 py-10">
        @yield('content')
    </main>
</body>
</html>
