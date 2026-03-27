<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - Isaque Pizzaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
       
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
        }


        .method-card {
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid #f3f4f6;
        }


        .method-card.active {
            border-color: #ef4444;
            background-color: #fef2f2;
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
            background: #e5e7eb;
            z-index: 1;
        }


        .step-line-fill {
            position: absolute;
            top: 50%;
            left: 0;
            width: 50%;
            height: 2px;
            background: #ef4444;
            z-index: 1;
        }
    </style>
</head>
<body class="text-gray-800 antialiased">


    <!-- Barra de Navegação -->
    <nav class="bg-white border-b border-gray-100 py-4">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <button onclick="history.back()" class="text-gray-500 hover:text-red-600 flex items-center space-x-2 transition">
                <i class="fas fa-arrow-left"></i>
                <span class="font-semibold text-sm">Voltar ao Carrinho</span>
            </button>
            <div class="flex items-center space-x-2">
                <i class="fas fa-pizza-slice text-red-600 text-2xl"></i>
                <span class="text-xl font-black tracking-tighter uppercase">Isaque <span class="text-red-600">Pizzaria</span></span>
            </div>
            <div class="w-20"></div>
        </div>
    </nav>


    <main class="container mx-auto px-4 py-8 lg:py-12">
        <!-- Indicador de Progresso (Passo 2) -->
        <div class="max-w-2xl mx-auto mb-10 text-center">
            <div class="step-indicator flex justify-between items-center relative">
                <div class="step-line"></div>
                <div class="step-line-fill"></div>
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center font-bold shadow-lg shadow-red-200">
                        <i class="fas fa-check text-xs"></i>
                    </div>
                    <span class="text-xs font-bold mt-2 text-red-600 uppercase tracking-tighter">Carrinho</span>
                </div>
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center font-bold shadow-lg shadow-red-200">2</div>
                    <span class="text-xs font-bold mt-2 text-red-600 uppercase tracking-tighter">Pagamento</span>
                </div>
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-10 h-10 bg-white border-2 border-gray-200 text-gray-400 rounded-full flex items-center justify-center font-bold">3</div>
                    <span class="text-xs font-bold mt-2 text-gray-400 uppercase tracking-tighter">Sucesso</span>
                </div>
            </div>
        </div>


        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
           
            <!-- Detalhes de Entrega e Pagamento -->
            <div class="lg:col-span-2 space-y-6">
               
                <!-- Secção 1: Morada de Entrega -->
                <div class="bg-white rounded-3xl p-6 lg:p-8 shadow-sm border border-gray-100">
                    <h2 class="text-2xl font-black mb-6 flex items-center">
                        <i class="fas fa-truck text-red-600 mr-3"></i>
                        Dados de Entrega
                    </h2>
                   
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1 md:col-span-2">
                            <label class="block text-xs font-bold text-gray-400 mb-2 uppercase">Rua e Número</label>
                            <input type="text" value="Avenida da Boavista, 123, 4º Esq" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 outline-none focus:border-red-600 transition">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 mb-2 uppercase">Código Postal</label>
                            <input type="text" value="4100-113" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 outline-none focus:border-red-600 transition">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 mb-2 uppercase">Cidade</label>
                            <input type="text" value="Porto" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 outline-none focus:border-red-600 transition">
                        </div>
                    </div>
                </div>


                <!-- Secção 2: Método de Pagamento -->
                <div class="bg-white rounded-3xl p-6 lg:p-8 shadow-sm border border-gray-100">
                    <h2 class="text-2xl font-black mb-6 flex items-center">
                        <i class="fas fa-credit-card text-red-600 mr-3"></i>
                        Método de Pagamento
                    </h2>


                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <!-- MB Way -->
                        <div onclick="selectMethod(this)" class="method-card active p-4 rounded-2xl text-center">
                            <div class="h-12 flex items-center justify-center mb-3">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f6/MBWAY_logo.png" class="h-6 object-contain" alt="MB Way">
                            </div>
                            <span class="text-sm font-bold">MB Way</span>
                        </div>


                        <!-- Cartão -->
                        <div onclick="selectMethod(this)" class="method-card p-4 rounded-2xl text-center">
                            <div class="h-12 flex items-center justify-center mb-3">
                                <i class="fas fa-credit-card text-2xl text-gray-400"></i>
                            </div>
                            <span class="text-sm font-bold">Cartão Débito/Crédito</span>
                        </div>


                        <!-- Dinheiro -->
                        <div onclick="selectMethod(this)" class="method-card p-4 rounded-2xl text-center">
                            <div class="h-12 flex items-center justify-center mb-3">
                                <i class="fas fa-money-bill-wave text-2xl text-gray-400"></i>
                            </div>
                            <span class="text-sm font-bold">Dinheiro</span>
                        </div>
                    </div>


                    <!-- Input Condicional (MB Way) -->
                    <div id="mbway-input" class="mt-6 animate-fadeIn">
                        <label class="block text-xs font-bold text-gray-400 mb-2 uppercase">Número de Telemóvel MB Way</label>
                        <div class="relative">
                            <span class="absolute left-4 top-3.5 font-bold text-gray-400">+351</span>
                            <input type="tel" placeholder="9xx xxx xxx" class="w-full bg-gray-50 border border-gray-200 rounded-2xl pl-16 pr-4 py-3 outline-none focus:border-red-600 transition">
                        </div>
                        <p class="text-[10px] text-gray-400 mt-2 italic">Receberás uma notificação na tua App MB Way para autorizar o pagamento.</p>
                    </div>
                </div>
            </div>


            <!-- Coluna de Resumo -->
            <div class="space-y-6">
                <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 sticky top-10">
                    <h3 class="text-xl font-black mb-6">O Teu Pedido</h3>
                   
                    <!-- Lista Mini -->
                    <div class="space-y-3 mb-6 max-h-40 overflow-y-auto pr-2">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500"><b class="text-gray-900">1x</b> Margherita Premium</span>
                            <span class="font-bold">14,90€</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500"><b class="text-gray-900">2x</b> Pepperoni Double</span>
                            <span class="font-bold">33,00€</span>
                        </div>
                    </div>


                    <div class="space-y-3 mb-8 pt-4 border-t border-gray-50">
                        <div class="flex justify-between text-gray-500 text-sm">
                            <span>Subtotal</span>
                            <span class="font-semibold text-gray-900">47,90€</span>
                        </div>
                        <div class="flex justify-between text-red-600 text-sm font-bold">
                            <span>Desconto Novo Cliente</span>
                            <span>-4,79€</span>
                        </div>
                        <div class="pt-4 border-t border-dashed border-gray-200 flex justify-between items-center">
                            <span class="text-lg font-black">Total a Pagar</span>
                            <span class="text-3xl font-black text-red-600">43,11€</span>
                        </div>
                    </div>


                    <button onclick="processPayment()" id="pay-button" class="w-full bg-red-600 text-white py-5 rounded-2xl font-black text-lg hover:bg-red-700 shadow-xl shadow-red-200 transition transform active:scale-[0.98] flex items-center justify-center space-x-3">
                        <i class="fas fa-lock text-sm opacity-50"></i>
                        <span>Confirmar e Pagar</span>
                    </button>
                   
                    <p class="text-center text-[10px] text-gray-400 mt-4">
                        Pagamento processado de forma segura e encriptada.
                    </p>
                </div>
            </div>


        </div>
    </main>


    <!-- Overlay de Processamento -->
    <div id="processing-overlay" class="fixed inset-0 bg-white/90 backdrop-blur-md z-[100] flex flex-col items-center justify-center hidden">
        <div class="relative">
            <i class="fas fa-pizza-slice text-red-600 text-6xl animate-spin"></i>
        </div>
        <h2 class="text-2xl font-black mt-8">A processar o pedido...</h2>
        <p class="text-gray-500 mt-2">Não feches esta janela.</p>
    </div>


    <script>
        function selectMethod(element) {
            // Remove active de todos
            document.querySelectorAll('.method-card').forEach(card => {
                card.classList.remove('active');
                card.querySelector('i')?.classList.replace('text-red-600', 'text-gray-400');
            });
           
            // Adiciona ao selecionado
            element.classList.add('active');
            const icon = element.querySelector('i');
            if (icon) icon.classList.replace('text-gray-400', 'text-red-600');


            // Mostrar/Ocultar campos específicos
            const mbwayInput = document.getElementById('mbway-input');
            if (element.innerText.includes('MB Way')) {
                mbwayInput.classList.remove('hidden');
            } else {
                mbwayInput.classList.add('hidden');
            }
        }


        function processPayment() {
            const overlay = document.getElementById('processing-overlay');
            overlay.classList.remove('hidden');
           
            // Simulação de sucesso após 2.5 segundos
            setTimeout(() => {
                overlay.innerHTML = `
                    <div class="text-center p-8">
                        <div class="w-24 h-24 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-check text-4xl"></i>
                        </div>
                        <h2 class="text-3xl font-black mb-2">Pedido Confirmado!</h2>
                        <p class="text-gray-500 mb-8">O número do teu pedido é #8294. <br> Já estamos a preparar a massa!</p>
                        <button onclick="location.reload()" class="bg-gray-900 text-white px-8 py-4 rounded-2xl font-bold">Acompanhar Entrega</button>
                    </div>
                `;
            }, 2500);
        }
    </script>


</body>
</html>
