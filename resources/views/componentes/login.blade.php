<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Registo - Isaque Pizzaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap');
       
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
        }


        .auth-card {
            transition: all 0.5s ease-in-out;
        }


        .input-group:focus-within label {
            color: #ef4444;
        }


        .input-group:focus-within input {
            border-color: #ef4444;
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
        }


        .floating-pizza {
            animation: float 8s ease-in-out infinite;
        }


        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }


        .hidden-auth {
            display: none;
        }


        /* Animação suave para troca de telas */
        .fade-in {
            animation: fadeIn 0.4s ease-in-out;
        }


        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 bg-gray-50 overflow-hidden relative">


    <!-- Decoração de Fundo (Blur) -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-red-100 rounded-full -translate-x-1/2 -translate-y-1/2 opacity-50 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-red-100 rounded-full translate-x-1/4 translate-y-1/4 opacity-50 blur-3xl"></div>


    <div class="container max-w-5xl mx-auto flex flex-col lg:flex-row bg-white rounded-[2.5rem] shadow-2xl overflow-hidden relative z-10 min-h-[600px]">
       
        <!-- Lado Esquerdo: Identidade Visual -->
        <div class="lg:w-1/2 bg-red-600 p-12 text-white flex flex-col justify-between relative overflow-hidden">
            <div class="relative z-10">
                <div class="flex items-center space-x-2 mb-8">
                    <i class="fas fa-pizza-slice text-3xl"></i>
                    <span class="text-2xl font-black italic tracking-tighter uppercase">Isaque <span class="text-gray-900">Pizzaria</span></span>
                </div>
                <h2 class="text-4xl font-black leading-tight italic mb-4">A tua fatia favorita está à espera.</h2>
                <p class="text-red-100 opacity-80 font-medium">Faz login para acederes aos teus pedidos favoritos e ganhares pontos em cada compra.</p>
            </div>


            <!-- Imagem Flutuante -->
            <div class="relative z-10 flex justify-center py-8">
                <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=600&q=80" alt="Pizza Isaque" class="floating-pizza w-64 h-64 object-cover rounded-full border-8 border-white/20 shadow-2xl">
            </div>


            <div class="relative z-10">
                <p class="text-sm font-bold opacity-60 italic tracking-widest">ARTESANAL & FORNO A LENHA</p>
                <p class="text-[10px] font-medium opacity-40 mt-1 uppercase">© 2024 Isaque Pizzaria Artesanal</p>
            </div>


            <!-- Pattern decorativo no fundo -->
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <i class="fas fa-pizza-slice absolute top-10 left-10 text-6xl rotate-12"></i>
                <i class="fas fa-utensils absolute bottom-20 right-10 text-8xl -rotate-12"></i>
                <i class="fas fa-heart absolute top-1/2 left-1/4 text-4xl opacity-50"></i>
            </div>
        </div>


        <!-- Lado Direito: Formulários de Autenticação -->
        <div class="lg:w-1/2 p-8 lg:p-16 flex flex-col justify-center bg-white">
           
            <!-- SECÇÃO DE LOGIN -->
            <div id="login-section" class="auth-card fade-in">
                <div class="mb-10 text-center lg:text-left">
                    <h3 class="text-3xl font-black text-gray-900 mb-2 tracking-tight">Bem-vindo de volta!</h3>
                    <p class="text-gray-400 font-medium italic">Sentimos a tua falta (e do teu apetite).</p>
                </div>


                <form class="space-y-6" onsubmit="event.preventDefault();">
                    <div class="input-group">
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2 ml-1">E-mail</label>
                        <div class="relative">
                            <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                            <input type="email" placeholder="teu@email.com" class="w-full pl-12 pr-4 py-4 bg-gray-50 border-2 border-gray-50 rounded-2xl outline-none transition-all font-medium text-sm focus:bg-white">
                        </div>
                    </div>


                    <div class="input-group">
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2 ml-1">Palavra-passe</label>
                        <div class="relative">
                            <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                            <input type="password" placeholder="••••••••" class="w-full pl-12 pr-4 py-4 bg-gray-50 border-2 border-gray-50 rounded-2xl outline-none transition-all font-medium text-sm focus:bg-white">
                        </div>
                    </div>


                    <div class="flex items-center justify-between text-xs">
                        <label class="flex items-center space-x-2 cursor-pointer font-bold text-gray-500">
                            <input type="checkbox" class="rounded border-gray-200 text-red-600 focus:ring-red-600">
                            <span>Lembrar-me</span>
                        </label>
                        <a href="#" class="font-black text-red-600 hover:underline">Esqueceste a senha?</a>
                    </div>


                    <button class="w-full bg-red-600 text-white py-5 rounded-2xl font-black text-lg shadow-xl shadow-red-100 hover:bg-gray-900 transition-all transform active:scale-95">
                        Entrar na Conta
                    </button>
                </form>


                <div class="mt-10 text-center">
                    <p class="text-sm text-gray-500 font-medium tracking-tight">Ainda não tens conta?
                        <button onclick="toggleAuth()" class="text-red-600 font-black hover:underline ml-1">Cria uma aqui</button>
                    </p>
                </div>
            </div>


            <!-- SECÇÃO DE CADASTRO -->
            <div id="register-section" class="auth-card hidden-auth fade-in">
                <div class="mb-10 text-center lg:text-left">
                    <h3 class="text-3xl font-black text-gray-900 mb-2 tracking-tight">Cria a tua conta</h3>
                    <p class="text-gray-400 font-medium italic">Junta-te à família Isaque hoje.</p>
                </div>


                <form class="space-y-4" onsubmit="event.preventDefault();">
                    <div class="input-group">
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2 ml-1">Nome Completo</label>
                        <div class="relative">
                            <i class="fas fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                            <input type="text" placeholder="Como te chamas?" class="w-full pl-12 pr-4 py-4 bg-gray-50 border-2 border-gray-50 rounded-2xl outline-none transition-all font-medium text-sm focus:bg-white">
                        </div>
                    </div>


                    <div class="input-group">
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2 ml-1">E-mail</label>
                        <div class="relative">
                            <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                            <input type="email" placeholder="teu@email.com" class="w-full pl-12 pr-4 py-4 bg-gray-50 border-2 border-gray-50 rounded-2xl outline-none transition-all font-medium text-sm focus:bg-white">
                        </div>
                    </div>


                    <div class="input-group">
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2 ml-1">Telemóvel</label>
                        <div class="relative">
                            <i class="fas fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                            <input type="tel" placeholder="9xx xxx xxx" class="w-full pl-12 pr-4 py-4 bg-gray-50 border-2 border-gray-50 rounded-2xl outline-none transition-all font-medium text-sm focus:bg-white">
                        </div>
                    </div>


                    <div class="input-group">
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2 ml-1">Palavra-passe</label>
                        <div class="relative">
                            <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                            <input type="password" placeholder="Mínimo 8 caracteres" class="w-full pl-12 pr-4 py-4 bg-gray-50 border-2 border-gray-50 rounded-2xl outline-none transition-all font-medium text-sm focus:bg-white">
                        </div>
                    </div>


                    <button class="w-full bg-gray-900 text-white py-5 rounded-2xl font-black text-lg shadow-xl shadow-gray-200 hover:bg-red-600 transition-all transform active:scale-95 mt-4">
                        Registar Agora
                    </button>
                </form>


                <div class="mt-10 text-center">
                    <p class="text-sm text-gray-500 font-medium tracking-tight">Já tens uma conta?
                        <button onclick="toggleAuth()" class="text-red-600 font-black hover:underline ml-1">Faz login</button>
                    </p>
                </div>
            </div>


        </div>
    </div>


    <!-- Script de Alternância -->
    <script>
        function toggleAuth() {
            const loginSection = document.getElementById('login-section');
            const registerSection = document.getElementById('register-section');
           
            if (loginSection.classList.contains('hidden-auth')) {
                loginSection.classList.remove('hidden-auth');
                registerSection.classList.add('hidden-auth');
            } else {
                loginSection.classList.add('hidden-auth');
                registerSection.classList.remove('hidden-auth');
            }
        }
    </script>


</body>
</html>
