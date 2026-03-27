<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Confirmado - Isaque Pizzaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
       
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
        }


        .step-indicator {
            position: relative;
        }


        .step-line {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background: #ef4444;
            z-index: 1;
        }


        .success-check {
            animation: scaleIn 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }


        @keyframes scaleIn {
            0% { transform: scale(0); }
            100% { transform: scale(1); }
        }


        .pulse-red {
            animation: pulse 2s infinite;
        }


        @keyframes pulse {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(239, 68, 68, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(239, 68, 68, 0); }
        }


        .delivery-progress {
            height: 8px;
            background: #e5e7eb;
            border-radius: 4px;
            overflow: hidden;
        }


        .delivery-progress-fill {
            height: 100%;
            background: #ef4444;
            width: 35%; /* Simulação de progresso inicial */
            transition: width 1s ease-in-out;
        }
    </style>
</head>
<body class="text-gray-800 antialiased">


    <!-- Barra de Navegação -->
    <nav class="bg-white border-b border-gray-100 py-4">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <div class="flex items-center space-x-2 mx-auto">
                <i class="fas fa-pizza-slice text-red-600 text-2xl"></i>
                <span class="text-xl font-black tracking-tighter uppercase">Isaque <span class="text-red-600">Pizzaria</span></span>
            </div>
        </div>
    </nav>


    <main class="container mx-auto px-4 py-8 lg:py-12">
        <!-- Indicador de Progresso (Passo 3) -->
        <div class="max-w-2xl mx-auto mb-12 text-center">
            <div class="step-indicator flex justify-between items-center relative">
                <div class="step-line"></div>
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center font-bold shadow-lg shadow-red-200">
                        <i class="fas fa-check text-xs"></i>
                    </div>
                    <span class="text-xs font-bold mt-2 text-red-600 uppercase tracking-tighter">Carrinho</span>
                </div>
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center font-bold shadow-lg shadow-red-200">
                        <i class="fas fa-check text-xs"></i>
                    </div>
                    <span class="text-xs font-bold mt-2 text-red-600 uppercase tracking-tighter">Pagamento</span>
                </div>
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center font-bold shadow-lg shadow-red-200">3</div>
                    <span class="text-xs font-bold mt-2 text-red-600 uppercase tracking-tighter">Sucesso</span>
                </div>
            </div>
        </div>


        <div class="max-w-3xl mx-auto">
            <!-- Card Principal de Sucesso -->
            <div class="bg-white rounded-[40px] p-8 lg:p-12 shadow-xl shadow-gray-200/50 border border-gray-100 text-center relative overflow-hidden">
                <!-- Elementos decorativos de fundo -->
                <div class="absolute -top-10 -right-10 opacity-[0.03] transform rotate-12">
                    <i class="fas fa-pizza-slice text-[200px]"></i>
                </div>


                <div class="success-check w-24 h-24 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-8 shadow-inner">
                    <i class="fas fa-check text-4xl"></i>
                </div>


                <h1 class="text-4xl font-black mb-4 italic tracking-tight">Obrigado pelo teu pedido!</h1>
                <p class="text-gray-500 mb-10 max-w-md mx-auto">O teu pedido <span class="font-bold text-gray-900">#8294</span> foi recebido e já estamos a preparar a tua pizza com todo o carinho.</p>


                <!-- Status da Entrega -->
                <div class="bg-gray-50 rounded-3xl p-8 mb-8 text-left border border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
                        <div>
                            <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">Tempo Estimado</span>
                            <p class="text-2xl font-black text-gray-900">25 - 35 minutos</p>
                        </div>
                        <div class="mt-4 md:mt-0 flex items-center">
                            <span class="flex h-3 w-3 relative mr-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
                            </span>
                            <span class="text-sm font-bold text-red-600 uppercase tracking-tighter">A Preparar a Massa</span>
                        </div>
                    </div>


                    <!-- Barra de Progresso -->
                    <div class="delivery-progress mb-8">
                        <div class="delivery-progress-fill"></div>
                    </div>


                    <!-- Linha do Tempo -->
                    <div class="grid grid-cols-4 gap-2 text-center">
                        <div class="space-y-2">
                            <i class="fas fa-receipt text-red-600"></i>
                            <p class="text-[10px] font-bold text-gray-900 leading-tight uppercase">Confirmado</p>
                        </div>
                        <div class="space-y-2">
                            <i class="fas fa-utensils text-red-600"></i>
                            <p class="text-[10px] font-bold text-gray-900 leading-tight uppercase">Cozinha</p>
                        </div>
                        <div class="space-y-2">
                            <i class="fas fa-motorcycle text-gray-300"></i>
                            <p class="text-[10px] font-bold text-gray-300 leading-tight uppercase">Caminho</p>
                        </div>
                        <div class="space-y-2">
                            <i class="fas fa-home text-gray-300"></i>
                            <p class="text-[10px] font-bold text-gray-300 leading-tight uppercase">Entregue</p>
                        </div>
                    </div>
                </div>


                <!-- Detalhes do Resumo -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left pt-6 border-t border-gray-100">
                    <div>
                        <h4 class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4">Entrega em:</h4>
                        <p class="text-sm font-bold text-gray-800">Avenida da Boavista, 123</p>
                        <p class="text-sm text-gray-500">4100-113, Porto</p>
                        <p class="text-sm text-gray-500 mt-2"><i class="fas fa-phone-alt mr-2"></i> +351 912 345 678</p>
                    </div>
                    <div>
                        <h4 class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4">Pagamento:</h4>
                        <div class="flex items-center space-x-3">
                            <span class="text-sm font-bold text-gray-800">MB Way</span>
                        </div>
                        <p class="text-lg font-black text-red-600 mt-2">43,11 R$</p>
                    </div>
                </div>


                <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <button class="w-full sm:w-auto bg-gray-900 text-white px-10 py-4 rounded-2xl font-bold hover:bg-black transition shadow-lg">
                        Descarregar Fatura
                    </button>
                    <button onclick="window.location.reload()" class="w-full sm:w-auto bg-white border-2 border-gray-100 text-gray-600 px-10 py-4 rounded-2xl font-bold hover:bg-gray-50 transition">
                        Voltar ao Início
                    </button>
                </div>
            </div>


            <!-- Rodapé Informativo -->
            <div class="mt-8 text-center bg-white rounded-3xl p-6 border border-gray-100">
                <p class="text-sm text-gray-500">Precisa de ajuda com o teu pedido?</p>
                <div class="flex justify-center space-x-6 mt-3">
                    <a href="#" class="text-red-600 font-bold text-sm hover:underline"><i class="fab fa-whatsapp mr-1"></i> WhatsApp</a>
                    <a href="#" class="text-red-600 font-bold text-sm hover:underline"><i class="fas fa-phone-alt mr-1"></i> Ligar Grátis</a>
                </div>
            </div>
        </div>
    </main>


    <footer class="mt-12 py-8 opacity-50">
        <div class="container mx-auto px-4 text-center">
            <p class="text-xs text-gray-400 uppercase tracking-widest font-bold">&copy; 2024 Isaque Pizzaria • Bom Apetite!</p>
        </div>
    </footer>


</body>
</html>
