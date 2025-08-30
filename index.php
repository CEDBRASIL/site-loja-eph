<?php
    $pageTitle = "EncryptHost STORE";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background: linear-gradient(135deg, #2A0A4A, #1C0535, #110121); }
        .nav-link:hover { color: #d1d5db; }
        .product-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .product-card:hover { transform: translateY(-5px); box-shadow: 0 10px 15px -3px rgba(0,0,0,0.2), 0 4px 6px -2px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="text-white">
    <div class="container mx-auto px-4 md:px-8">
        <header class="flex flex-wrap justify-between items-center py-6">
            <div class="flex items-center">
                <span class="text-xl font-bold tracking-wider">EncryptHost <span class="font-light text-purple-400">STORE</span></span>
            </div>
            <div class="flex items-center space-x-6 mt-4 md:mt-0 w-full md:w-auto justify-center">
                <div class="relative">
                    <input type="text" placeholder="Pesquisar" class="bg-gray-800/50 text-white placeholder-gray-400 rounded-full py-2 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-purple-500 w-48">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                </div>
                <nav class="hidden lg:flex items-center space-x-6 text-gray-300">
                    <a href="#" class="nav-link">Início</a>
                    <a href="#" class="nav-link">Loja</a>
                    <a href="#" class="nav-link">Minha conta</a>
                    <a href="#" class="nav-link">Contato</a>
                </nav>
            </div>
            <div class="flex items-center space-x-4 mt-4 md:mt-0">
                <a href="#" class="text-gray-300 hover:text-white">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </a>
                <div class="flex items-center space-x-2">
                    <a href="#" class="text-gray-300 hover:text-white">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </a>
                    <span class="font-semibold">R$ 0,00</span>
                </div>
            </div>
        </header>
        <main class="text-center py-20 md:py-32">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight">Tudo o que você procura em um só lugar</h1>
            <p class="text-xl md:text-2xl text-gray-300 mt-4 max-w-3xl mx-auto">Qualidade, variedade e preço justo para o seu dia a dia</p>
            <div class="mt-16">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 md:gap-8">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <div class="product-card <?php echo $i === 4 ? 'hidden sm:block' : ''; ?>">
                            <div class="bg-white/90 h-40 md:h-48 w-full rounded-2xl shadow-lg"></div>
                            <button class="mt-4 w-full bg-gray-800/60 text-white py-2 rounded-xl hover:bg-purple-700 transition-colors">Produto</button>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </main>
        <footer class="text-center py-10 border-t border-white/10 mt-20">
            <nav class="flex justify-center items-center space-x-6 text-gray-300">
                <a href="#" class="nav-link">Início</a>
                <a href="#" class="nav-link">Loja</a>
                <a href="#" class="nav-link">Minha conta</a>
                <a href="#" class="nav-link">Contato</a>
            </nav>
        </footer>
    </div>
</body>
</html>
