<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cadastro - Isaque Pizzaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
       
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fdfdfd;
        }


        .step-active {
            color: #ef4444;
            border-bottom: 3px solid #ef4444;
        }


        .input-group:focus-within label {
            color: #ef4444;
        }


        .form-card {
            animation: slideUp 0.5s ease-out;
        }


        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }


        /* Estilo para os inputs */
        input {
            transition: all 0.3s border;
        }
       
        input:focus {
            border-color: #ef4444 !important;
            ring: 2px solid rgba(239, 68, 68, 0.2);
        }
    </style>
</head>
<body class="text-gray-800 antialiased">


    <!-- Header Simples -->
    <header class="py-6 bg-white shadow-sm">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-pizza-slice text-red-600 text-3xl"></i>
                <span class="text-2xl font-black tracking-tighter">ISAQUE <span class="text-red-600">PIZZARIA</span></span>
            </div>
            <a href="#" class="text-sm font-semibold text-gray-500 hover:text-red-600 transition">Já tenho conta</a>
        </div>
    </header>


    <main class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
           
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
               
                <!-- Coluna de Boas-vindas -->
                <div class="hidden lg:block space-y-6">
                    <h1 class="text-4xl font-bold leading-tight">Cria a tua conta e ganha <span class="text-red-600">10% de desconto</span> no primeiro pedido.</h1>
                    <p class="text-gray-500">Ao registares-te, terás acesso a promoções exclusivas e poderás guardar as tuas moradas favoritas.</p>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Histórico de pedidos completo</span>
                        </div>
                        <div class="flex items-center space-x-3 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Pagamento rápido e seguro</span>
                        </div>
                        <div class="flex items-center space-x-3 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>Programa de fidelidade</span>
                        </div>
                    </div>
                    <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=400&q=80" alt="Pizza" class="rounded-3xl shadow-lg mt-8">
                </div>


                <!-- Formulário de Cadastro -->
                <div class="lg:col-span-2 bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-gray-100 form-card">
                    <div class="mb-10">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Primeiro Acesso</h2>
                        <p class="text-gray-500 text-sm">Preenche os campos abaixo para começar.</p>
                    </div>


                    <form id="registration-form" class="space-y-8">
                       
                        <!-- Secção 1: Quem és tu? -->
                        <div class="space-y-4">
                            <div class="flex items-center space-x-2 text-red-600 font-bold text-sm uppercase tracking-wider">
                                <i class="fas fa-user"></i>
                                <span>Informação Pessoal</span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="input-group">
                                    <label class="block text-xs font-bold text-gray-400 mb-1 uppercase">Nome Completo</label>
                                    <input type="text" placeholder="Como te chamamos?" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white transition">
                                </div>
                                <div class="input-group">
                                    <label class="block text-xs font-bold text-gray-400 mb-1 uppercase">Telemóvel</label>
                                    <input type="tel" placeholder="9xx xxx xxx" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white transition">
                                </div>
                            </div>
                            <div class="input-group">
                                <label class="block text-xs font-bold text-gray-400 mb-1 uppercase">E-mail</label>
                                <input type="email" placeholder="exemplo@mail.com" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white transition">
                            </div>
                        </div>


                        <!-- Secção 2: Morada -->
                        <div class="space-y-4">
                            <div class="flex items-center space-x-2 text-red-600 font-bold text-sm uppercase tracking-wider">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Onde queres receber a tua Pizza?</span>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="col-span-2 input-group">
                                    <label class="block text-xs font-bold text-gray-400 mb-1 uppercase">Rua / Avenida</label>
                                    <input type="text" placeholder="Ex: Rua das Flores" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white transition">
                                </div>
                                <div class="input-group">
                                    <label class="block text-xs font-bold text-gray-400 mb-1 uppercase">Nº / Porta</label>
                                    <input type="text" placeholder="12-A" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white transition">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="input-group">
                                    <label class="block text-xs font-bold text-gray-400 mb-1 uppercase">Localidade / Cidade</label>
                                    <input type="text" placeholder="Ex: Porto" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white transition">
                                </div>
                                <div class="input-group">
                                    <label class="block text-xs font-bold text-gray-400 mb-1 uppercase">Código Postal</label>
                                    <input type="text" placeholder="0000-000" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white transition">
                                </div>
                            </div>
                        </div>


                        <!-- Secção 3: Palavra-passe -->
                        <div class="space-y-4">
                            <div class="flex items-center space-x-2 text-red-600 font-bold text-sm uppercase tracking-wider">
                                <i class="fas fa-lock"></i>
                                <span>Segurança</span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="input-group relative">
                                    <label class="block text-xs font-bold text-gray-400 mb-1 uppercase">Palavra-passe</label>
                                    <input type="password" placeholder="Mín. 8 caracteres" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white transition">
                                    <button type="button" class="absolute right-4 top-9 text-gray-400 hover:text-red-600">
                                        <i class="fas fa-eye-slash"></i>
                                    </button>
                                </div>
                                <div class="input-group relative">
                                    <label class="block text-xs font-bold text-gray-400 mb-1 uppercase">Confirmar</label>
                                    <input type="password" placeholder="Igual à anterior" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:bg-white transition">
                                </div>
                            </div>
                        </div>


                        <!-- Termos e Consentimento -->
                        <div class="p-6 bg-gray-50 rounded-2xl space-y-3">
                            <label class="flex items-start space-x-3 cursor-pointer">
                                <input type="checkbox" class="mt-1 accent-red-600 h-4 w-4 rounded">
                                <span class="text-xs text-gray-500 leading-relaxed">Aceito os <a href="#" class="text-red-600 font-bold underline">Termos e Condições</a> e a Política de Privacidade da Isaque Pizzaria.</span>
                            </label>
                            <label class="flex items-start space-x-3 cursor-pointer">
                                <input type="checkbox" class="mt-1 accent-red-600 h-4 w-4 rounded" checked>
                                <span class="text-xs text-gray-500 leading-relaxed">Quero receber SMS e E-mails com cupões de desconto e novidades saborosas.</span>
                            </label>
                        </div>


                        <!-- Botão de Ação -->
                        <div class="pt-4">
                            <button type="button" onclick="finalizeRegistration()" class="w-full bg-red-600 text-white py-4 rounded-2xl font-bold text-lg hover:bg-red-700 shadow-xl shadow-red-200 transition transform active:scale-[0.98] flex items-center justify-center space-x-2">
                                <span>Criar Conta e Ganhar Desconto</span>
                                <i class="fas fa-arrow-right text-sm"></i>
                            </button>
                            <p class="text-center text-sm text-gray-400 mt-6 font-medium">
                                Já tens conta? <a href="#" class="text-red-600 font-bold">Inicia sessão aqui</a>
                            </p>
                        </div>


                    </form>
                </div>


            </div>
        </div>
    </main>


    <!-- Modal de Sucesso (Oculto) -->
    <div id="success-modal" class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 p-4 hidden animate-fadeIn">
        <div class="bg-white rounded-[40px] p-10 max-w-sm w-full text-center shadow-2xl">
            <div class="w-24 h-24 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-pizza-slice text-4xl animate-bounce"></i>
            </div>
            <h3 class="text-3xl font-black mb-2">Bem-vindo à Família!</h3>
            <p class="text-gray-500 mb-8 italic">"A pizza está quase a sair do forno..."</p>
            <p class="text-sm text-gray-600 mb-8 leading-relaxed">A tua conta foi criada com sucesso. Já podes usufruir do teu desconto de 10% no primeiro pedido!</p>
            <button onclick="location.reload()" class="w-full bg-gray-900 text-white py-4 rounded-2xl font-bold hover:bg-black transition">Ir para o Menu</button>
        </div>
    </div>


    <script>
        function finalizeRegistration() {
            const btn = document.querySelector('button[onclick="finalizeRegistration()"]');
            btn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> <span>A processar...</span>';
            btn.disabled = true;


            // Simulação de tempo de processamento
            setTimeout(() => {
                document.getElementById('success-modal').classList.remove('hidden');
                document.getElementById('success-modal').classList.add('flex');
            }, 1500);
        }
    </script>


</body>
</html>
