<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Dasar Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <nav class="bg-[#1e293b] p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-400">Websiteku</h1>
            <div class="space-x-4 text-sm">
                <a href="#" class="hover:text-blue-300">Home</a>
                <a href="#" class="hover:text-blue-300">About</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-10 px-4">
        
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-extrabold text-slate-800 mb-4">
                Belajar Desain Modern dengan Tailwind
            </h2>
            <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                Tailwind CSS adalah framework CSS yang sangat populer karena memungkinkan kita membangun UI yang unik tanpa harus menulis banyak file CSS manual. Cukup gunakan class utility langsung pada elemen HTML.
            </p>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-8 bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
            
            <div class="w-full md:w-1/2">
                <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                     alt="Coding Illustration" 
                     class="rounded-xl shadow-lg w-full h-64 object-cover">
            </div>

            <div class="w-full md:w-1/2">
                <span class="text-blue-600 font-semibold uppercase tracking-wider text-sm">Framework Masa Depan</span>
                <h3 class="text-2xl font-bold text-slate-800 mt-2 mb-4">Kenapa Memilih Tailwind?</h3>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Dengan Tailwind, kamu bisa fokus pada desain dan fungsionalitas tanpa harus khawatir tentang penamaan class atau struktur CSS yang rumit. Tailwind memberikan fleksibilitas penuh untuk menciptakan tampilan yang sesuai dengan visi kreatifmu.
                </p>
                <div class="flex gap-4">
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Mulai Belajar</button>
                    <button class="border border-blue-600 text-blue-600 px-6 py-2 rounded-lg hover:bg-blue-50 transition">Detail</button>
                </div>
            </div>
        </div>

    </main>

    <footer class="mt-20 py-8 border-t border-gray-200 text-center text-gray-500">
    </footer>

</body>
</html>