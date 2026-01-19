<!DOCTYPE html>
<html lang="pt-BR" x-data="{ menuAberto: false, modalContato: false }" x-cloak>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Abigail Cristina Advocacia - Especialistas em Direito Previdenciário. Aposentadorias, Pensões, Auxílios e muito mais.">
    
    <title>Abigail Cristina Advocacia - Direito Previdenciário</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='0.9em' font-size='90'>⚖️</text></svg>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
        html { scroll-behavior: smooth; }
        :root {
            --color-gold: #D4AF37; /* Dourado principal */
            --color-gold-dark: #B8941E;
            --color-gold-light: #F4E5C2;
            --color-bg-light: #FAF9F6; /* Bege clarinho */
        }
        .bg-gold { background-color: #D4AF37; }
        .bg-gold-dark { background-color: #B8941E; }
        .text-gold { color: #D4AF37; }
        .hover\:bg-gold-dark:hover { background-color: #B8941E; }
        .hover\:text-gold:hover { color: #D4AF37; }
        .ring-gold:focus { --tw-ring-color: #D4AF37; }
        .border-gold { border-color: #D4AF37; }
    </style>

</head>
<body class="font-sans antialiased bg-[#FAF9F6] text-gray-900 overflow-x-hidden">
    
    <!-- Header / Navbar -->
    <header class="fixed top-0 w-full bg-[#FAF9F6]/95 backdrop-blur-sm shadow-sm z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('assets/images/logo.jpeg') }}" alt="Logo Abigail Cristina" class="w-8 h-8 object-contain">
                    <div>
                        <h1 class="font-bold text-xl text-gray-900">Abigail Cristina</h1>
                        <p class="text-xs text-gray-600">Advocacia</p>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#inicio" class="text-gray-700 hover:text-gold transition">Início</a>
                    <a href="#sobre" class="text-gray-700 hover:text-gold transition">Sobre</a>
                    <a href="#servicos" class="text-gray-700 hover:text-gold transition">Serviços</a>
                    <a href="#resultados" class="text-gray-700 hover:text-gold transition">Resultados</a>
                    <a href="#contato" class="bg-gold text-white px-6 py-2 rounded-lg hover:bg-gold-dark transition">Contato</a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="menuAberto = !menuAberto" class="md:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!menuAberto" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="menuAberto" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div x-show="menuAberto" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="md:hidden mt-4 pb-4 space-y-3">
                <a href="#inicio" @click="menuAberto = false" class="block text-gray-700 hover:text-gold transition">Início</a>
                <a href="#sobre" @click="menuAberto = false" class="block text-gray-700 hover:text-gold transition">Sobre</a>
                <a href="#servicos" @click="menuAberto = false" class="block text-gray-700 hover:text-gold transition">Serviços</a>
                <a href="#resultados" @click="menuAberto = false" class="block text-gray-700 hover:text-gold transition">Resultados</a>
                <a href="#contato" @click="menuAberto = false" class="block bg-gold text-white px-6 py-2 rounded-lg hover:bg-gold-dark transition text-center">Contato</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="pt-32 pb-20 bg-gradient-to-br from-[#FFF8E7] to-[#FAF9F6]">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Conquiste seus <span class="text-gold">Benefícios</span> com Quem Entende
                    </h2>
                    <p class="text-base sm:text-lg lg:text-xl text-gray-700 mb-8 leading-relaxed">
                        Especialistas em Direito Previdenciário com anos de experiência. 
                        Aposentadorias, pensões, auxílios e muito mais. Conquiste o que é seu por direito.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#contato" class="bg-gold text-white px-6 py-3 sm:px-8 sm:py-4 rounded-lg text-base sm:text-lg font-semibold hover:bg-gold-dark transition shadow-lg">
                            Agendar Consulta Gratuita
                        </a>
                        <a href="https://wa.me/5568992399452" target="_blank" class="bg-green-500 text-white px-6 py-3 sm:px-8 sm:py-4 rounded-lg text-base sm:text-lg font-semibold hover:bg-green-600 transition shadow-lg flex items-center justify-center gap-2">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
                <div class="flex-1 w-full flex justify-center">
                    <div class="relative max-w-sm w-full">
                        <div class="absolute inset-0 bg-gold rounded-3xl transform rotate-3"></div>
                        <div class="relative rounded-3xl shadow-2xl overflow-hidden" style="aspect-ratio: 3/4;">
                            <!-- Carousel de imagens -->
                            <div id="carousel" class="relative w-full h-full">
                                <img src="{{ asset('assets/images/abigail.jpeg') }}" 
                                     alt="Abigail Cristina" 
                                     class="carousel-image absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100">
                                <img src="{{ asset('assets/images/abigail2.jpeg') }}" 
                                     alt="Abigail Cristina" 
                                     class="carousel-image absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
                                {{--<img src="{{ asset('assets/images/carolina.png') }}" 
                                     alt="Carolina" 
                                     class="carousel-image absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
                                <img src="{{ asset('assets/images/juntas.jpeg') }}" 
                                     alt="Juntas" 
                                     class="carousel-image absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
                                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=800&q=80" 
                                     alt="Escritório" 
                                     class="carousel-image absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0">
                            --}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Section -->
    <section id="sobre" class="py-20 bg-[#FAF9F6]">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Sobre Nós</h3>
                <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    A <strong>Abigail Cristina Advocacia</strong> é um escritório especializado em Direito Previdenciário, 
                    comprometido em defender os direitos dos segurados do INSS. Com anos de experiência e centenas de casos 
                    de sucesso, nossa missão é garantir que você receba todos os benefícios que merece.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-[#FAF9F6] p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-[#F4E5C2] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Experiência Comprovada</h4>
                    <p class="text-gray-600">Mais de 5 anos atuando exclusivamente em Direito Previdenciário</p>
                </div>

                <div class="bg-[#FAF9F6] p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-[#F4E5C2] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Atendimento Humanizado</h4>
                    <p class="text-gray-600">Cada cliente é único e recebe atenção personalizada</p>
                </div>

                <div class="bg-[#FAF9F6] p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-[#F4E5C2] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Resultados Rápidos</h4>
                    <p class="text-gray-600">Agilidade e eficiência em todos os processos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços / Áreas de Atuação -->
    <section id="servicos" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Áreas de Atuação</h3>
                <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-lg text-gray-700">
                    Atuamos em todas as áreas do Direito Previdenciário, sempre buscando o melhor resultado para você.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Serviço 1 -->
                <div class="bg-[#FAF9F6] p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-[#F4E5C2] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Aposentadorias</h4>
                    <p class="text-gray-600">Por tempo de contribuição, idade, invalidez e especial</p>
                </div>

                <!-- Serviço 2 -->
                <div class="bg-[#FAF9F6] p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-[#F4E5C2] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Pensão por Morte</h4>
                    <p class="text-gray-600">Garantia de amparo aos dependentes</p>
                </div>

                <!-- Serviço 3 -->
                <div class="bg-[#FAF9F6] p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-[#F4E5C2] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Auxílio-Doença</h4>
                    <p class="text-gray-600">Benefício por incapacidade temporária</p>
                </div>

                <!-- Serviço 4 -->
                <div class="bg-[#FAF9F6] p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-[#F4E5C2] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">BPC/LOAS</h4>
                    <p class="text-gray-600">Benefício de prestação continuada para idosos e deficientes</p>
                </div>

                <!-- Serviço 5 -->
                <div class="bg-[#FAF9F6] p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-[#F4E5C2] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Revisão de Benefícios</h4>
                    <p class="text-gray-600">Correção de valores e reconhecimento de direitos</p>
                </div>

                <!-- Serviço 6 -->
                <div class="bg-[#FAF9F6] p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-[#F4E5C2] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">Planejamento Previdenciário</h4>
                    <p class="text-gray-600">Orientação para melhor aposentadoria futura</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Por que nos escolher -->
    <section class="py-20 bg-gold text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h3 class="text-4xl font-bold text-center mb-12">Por Que Escolher a Abigail Cristina Advocacia?</h3>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-[#FAF9F6]/20 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Consulta Inicial Gratuita</h4>
                            <p class="text-amber-50">Avaliamos seu caso sem nenhum custo</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-[#FAF9F6]/20 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Honorários Justos</h4>
                            <p class="text-amber-50">Você só paga quando ganhar</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-[#FAF9F6]/20 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Acompanhamento Total</h4>
                            <p class="text-amber-50">Informamos você em cada etapa do processo</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-[#FAF9F6]/20 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Atendimento Online</h4>
                            <p class="text-amber-50">Resolva tudo sem sair de casa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resultados / Estatísticas -->
    <section id="resultados" class="py-20 bg-[#FAF9F6]">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Nossos Resultados</h3>
                <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                <p class="text-lg text-gray-700">
                    Números que comprovam nossa dedicação e compromisso com cada cliente
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-5xl font-bold text-gold mb-2">500+</div>
                    <div class="text-gray-600 font-medium">Casos de Sucesso</div>
                </div>
                <div class="p-6">
                    <div class="text-5xl font-bold text-gold mb-2">95%</div>
                    <div class="text-gray-600 font-medium">Taxa de Êxito</div>
                </div>
                <div class="p-6">
                    <div class="text-5xl font-bold text-gold mb-2">5+</div>
                    <div class="text-gray-600 font-medium">Anos de Experiência</div>
                </div>
                <div class="p-6">
                    <div class="text-5xl font-bold text-gold mb-2">100%</div>
                    <div class="text-gray-600 font-medium">Satisfação dos Clientes</div>
                </div>
            </div>

            <!-- Depoimentos -->
            <div class="mt-20 grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl shadow-md">
                    <div class="flex mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4 italic">
                        "Excelente atendimento! Conseguiram minha aposentadoria em tempo recorde. Recomendo!"
                    </p>
                    <p class="font-semibold text-gray-900">Maria Silva</p>
                    <p class="text-sm text-gray-500">Aposentadoria por Idade</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl shadow-md">
                    <div class="flex mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4 italic">
                        "Profissionais competentes e atenciosos. Meu benefício foi revisado e recebi os atrasados."
                    </p>
                    <p class="font-semibold text-gray-900">João Santos</p>
                    <p class="text-sm text-gray-500">Revisão de Aposentadoria</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl shadow-md">
                    <div class="flex mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4 italic">
                        "Muito satisfeita! Conseguiram o BPC para meu pai. Gratidão eterna!"
                    </p>
                    <p class="font-semibold text-gray-900">Ana Paula</p>
                    <p class="text-sm text-gray-500">BPC/LOAS</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section id="contato" class="py-20 bg-gradient-to-br from-[#FFF8E7] to-[#FAF9F6]">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h3 class="text-4xl font-bold text-gray-900 mb-4">Entre em Contato</h3>
                    <div class="w-20 h-1 bg-gold mx-auto mb-6"></div>
                    <p class="text-lg text-gray-700">
                        Preencha o formulário abaixo e retornaremos em até 24 horas
                    </p>
                </div>

                <div class="bg-[#FAF9F6] rounded-2xl shadow-xl p-8 md:p-12">
                    <form 
                        x-data="{
                            nome: '',
                            email: '',
                            telefone: '',
                            mensagem: '',
                            enviando: false,
                            sucesso: false,
                            erro: false,
                            mensagemErro: '',
                            mascaraTelefone(valor) {
                                let numeros = valor.replace(/\D/g, '');
                                if (numeros.length <= 11) {
                                    if (numeros.length <= 2) {
                                        return numeros;
                                    } else if (numeros.length <= 7) {
                                        return `(${numeros.slice(0, 2)}) ${numeros.slice(2)}`;
                                    } else if (numeros.length <= 10) {
                                        return `(${numeros.slice(0, 2)}) ${numeros.slice(2, 6)}-${numeros.slice(6)}`;
                                    } else {
                                        return `(${numeros.slice(0, 2)}) ${numeros.slice(2, 7)}-${numeros.slice(7, 11)}`;
                                    }
                                }
                                return valor;
                            },
                            async submitForm(event) {
                                event.preventDefault();
                                this.enviando = true;
                                this.erro = false;
                                
                                try {
                                    const response = await fetch('{{ route('contato.enviar') }}', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                            'Accept': 'application/json'
                                        },
                                        body: JSON.stringify({
                                            nome: this.nome,
                                            email: this.email,
                                            telefone: this.telefone,
                                            mensagem: this.mensagem
                                        })
                                    });
                                    
                                    const data = await response.json();
                                    
                                    this.enviando = false;
                                    
                                    if (data.success) {
                                        this.sucesso = true;
                                        this.nome = '';
                                        this.email = '';
                                        this.telefone = '';
                                        this.mensagem = '';
                                        
                                        setTimeout(() => {
                                            this.sucesso = false;
                                        }, 5000);
                                    } else {
                                        this.erro = true;
                                        this.mensagemErro = data.message || 'Erro ao enviar mensagem';
                                        setTimeout(() => {
                                            this.erro = false;
                                        }, 5000);
                                    }
                                } catch (error) {
                                    this.enviando = false;
                                    this.erro = true;
                                    this.mensagemErro = 'Erro ao enviar mensagem. Tente novamente.';
                                    setTimeout(() => {
                                        this.erro = false;
                                    }, 5000);
                                }
                            }
                        }"
                        @submit="submitForm"
                        class="space-y-6"
                    >
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Nome Completo *</label>
                                <input 
                                    type="text" 
                                    x-model="nome"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-transparent outline-none transition"
                                    placeholder="Seu nome completo">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">E-mail *</label>
                                <input 
                                    type="email" 
                                    x-model="email"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-transparent outline-none transition"
                                    placeholder="seu@email.com">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Telefone / WhatsApp *</label>
                            <input 
                                type="tel" 
                                x-model="telefone"
                                @input="telefone = mascaraTelefone($event.target.value)"
                                required
                                maxlength="15"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-transparent outline-none transition"
                                placeholder="(68) 99999-9999">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Mensagem *</label>
                            <textarea 
                                x-model="mensagem"
                                required
                                rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-transparent outline-none transition resize-none"
                                placeholder="Conte-nos sobre seu caso..."></textarea>
                        </div>

                        <!-- Mensagem de Sucesso -->
                        <div x-show="sucesso"
                             x-transition
                             class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
                            <p class="font-medium">✓ Mensagem enviada com sucesso!</p>
                            <p class="text-sm">Entraremos em contato em breve.</p>
                        </div>

                        <!-- Mensagem de Erro -->
                        <div x-show="erro"
                             x-transition
                             class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg">
                            <p class="font-medium">✗ Erro ao enviar mensagem</p>
                            <p class="text-sm" x-text="mensagemErro"></p>
                        </div>

                        <button 
                            type="submit"
                            :disabled="enviando"
                            :class="enviando ? 'bg-gray-400 cursor-not-allowed' : 'bg-gold hover:bg-gold-dark'"
                            class="w-full text-white px-8 py-4 rounded-lg text-lg font-semibold transition shadow-lg">
                            <span x-show="!enviando">Enviar Mensagem</span>
                            <span x-show="enviando" class="flex items-center justify-center">
                                <svg class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Enviando...
                            </span>
                        </button>
                    </form>

                    <!-- Informações de Contato -->
                    <div class="mt-12 pt-12 border-t border-gray-200">
                        <div class="grid md:grid-cols-3 gap-8 text-center">
                            <div>
                                <div class="w-12 h-12 bg-[#F4E5C2] rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Telefone</h4>
                                <p class="text-gray-600">(68) 99239-9452</p>
                            </div>

                            <div>
                                <div class="w-12 h-12 bg-[#F4E5C2] rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">E-mail</h4>
                                <p class="text-gray-600">rodriguesantunes.adv@gmail.com</p>
                            </div>

                            <div>
                                <div class="w-12 h-12 bg-[#F4E5C2] rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Horário</h4>
                                <p class="text-gray-600">Seg - Sex: 9h às 18h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-lg font-bold mb-4">Abigail Cristina Advocacia</h4>
                    <p class="text-gray-400 text-sm">
                        Especialistas em Direito Previdenciário, defendendo seus direitos com dedicação e competência.
                    </p>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#inicio" class="hover:text-white transition">Início</a></li>
                        <li><a href="#sobre" class="hover:text-white transition">Sobre</a></li>
                        <li><a href="#servicos" class="hover:text-white transition">Serviços</a></li>
                        <li><a href="#contato" class="hover:text-white transition">Contato</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Serviços</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li>Aposentadorias</li>
                        <li>Pensão por Morte</li>
                        <li>Auxílio-Doença</li>
                        <li>BPC/LOAS</li>
                        <li>Revisão de Benefícios</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Redes Sociais</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/abigail_cristina.adv" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gold transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/5568992399452" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-green-600 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} Abigail Cristina Advocacia. Todos os direitos reservados.</p>
                <p class="mt-2">OAB/AC 6407</p>
            </div>
        </div>
    </footer>

    <!-- Botão Flutuante WhatsApp -->
    <a href="https://wa.me/5568992399452" 
       target="_blank"
       class="fixed bottom-6 right-6 bg-green-500 text-white w-16 h-16 rounded-full shadow-2xl hover:bg-green-600 transition flex items-center justify-center z-50 hover:scale-110">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>

    <script>
        // Carousel de imagens
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.carousel-image');
            let currentIndex = 0;

            function showNextImage() {
                // Esconde a imagem atual
                images[currentIndex].classList.remove('opacity-100');
                images[currentIndex].classList.add('opacity-0');

                // Calcula o próximo índice
                currentIndex = (currentIndex + 1) % images.length;

                // Mostra a próxima imagem
                images[currentIndex].classList.remove('opacity-0');
                images[currentIndex].classList.add('opacity-100');
            }

            // Troca de imagem a cada 4 segundos
            setInterval(showNextImage, 4000);
        });
    </script>
</body>
</html>
