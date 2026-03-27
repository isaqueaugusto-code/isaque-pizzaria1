<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Teu Carrinho - Isaque Pizzaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
       
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
        }


        .item-row:hover {
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
    </style>
</head>
<body class="text-gray-800 antialiased">


    <!-- Barra de Navegação -->
    <nav class="bg-white border-b border-gray-100 py-4">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <button onclick="history.back()" class="text-gray-500 hover:text-red-600 flex items-center space-x-2 transition">
                <i class="fas fa-arrow-left"></i>
                <span class="font-semibold text-sm">Voltar ao Menu</span>
            </button>
            <div class="flex items-center space-x-2">
                <i class="fas fa-pizza-slice text-red-600 text-2xl"></i>
                <span class="text-xl font-black tracking-tighter uppercase">Isaque <span class="text-red-600">Pizzaria</span></span>
            </div>
            <div class="w-20"></div> <!-- Espaçador para equilíbrio -->
        </div>
    </nav>


    <main class="container mx-auto px-4 py-8 lg:py-12">
        <!-- Indicador de Progresso -->
        <div class="max-w-2xl mx-auto mb-10 text-center">
            <div class="step-indicator flex justify-between items-center relative">
                <div class="step-line"></div>
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center font-bold shadow-lg shadow-red-200">1</div>
                    <span class="text-xs font-bold mt-2 text-red-600 uppercase tracking-tighter">Carrinho</span>
                </div>
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-10 h-10 bg-white border-2 border-gray-200 text-gray-400 rounded-full flex items-center justify-center font-bold">2</div>
                    <span class="text-xs font-bold mt-2 text-gray-400 uppercase tracking-tighter">Pagamento</span>
                </div>
                <div class="relative z-10 flex flex-col items-center">
                    <div class="w-10 h-10 bg-white border-2 border-gray-200 text-gray-400 rounded-full flex items-center justify-center font-bold">3</div>
                    <span class="text-xs font-bold mt-2 text-gray-400 uppercase tracking-tighter">Sucesso</span>
                </div>
            </div>
        </div>


        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
           
            <!-- Lista de Produtos -->
            <div class="lg:col-span-2 space-y-4">
                <div class="bg-white rounded-3xl p-6 lg:p-8 shadow-sm border border-gray-100">
                    <h2 class="text-2xl font-black mb-6 flex items-center">
                        <i class="fas fa-shopping-basket text-red-600 mr-3"></i>
                        O Teu Pedido
                    </h2>


                    <div id="cart-list" class="divide-y divide-gray-100">
                        <!-- Item 1 -->
                        <div class="py-6 flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6 item-row transition-colors rounded-2xl px-2">
                            <img src="https://rossopizza.com.br/salao/wp-content/uploads/2019/09/istock-181175167.jpg" class="w-24 h-24 rounded-2xl object-cover shadow-md" alt="Pizza">
                            <div class="flex-1 text-center sm:text-left">
                                <h3 class="font-bold text-lg">Margherita Premium</h3>
                                <p class="text-xs text-gray-400 mb-3">Tamanho: Familiar • Massa Tradicional</p>
                                <div class="flex items-center justify-center sm:justify-start space-x-4">
                                    <div class="flex items-center bg-gray-100 rounded-xl p-1">
                                        <button class="w-8 h-8 flex items-center justify-center hover:text-red-600"><i class="fas fa-minus text-xs"></i></button>
                                        <span class="w-10 text-center font-bold">1</span>
                                        <button class="w-8 h-8 flex items-center justify-center hover:text-red-600"><i class="fas fa-plus text-xs"></i></button>
                                    </div>
                                    <button class="text-gray-300 hover:text-red-500 transition"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-xl font-black text-gray-900">25,90 R$</span>
                            </div>
                        </div>


                        <!-- Item 2 -->
                        <div class="py-6 flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6 item-row transition-colors rounded-2xl px-2">
                            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=150&q=80" class="w-24 h-24 rounded-2xl object-cover shadow-md" alt="Pizza">
                            <div class="flex-1 text-center sm:text-left">
                                <h3 class="font-bold text-lg">Pepperoni Double</h3>
                                <p class="text-xs text-gray-400 mb-3">Tamanho: Média • Borda com Queijo</p>
                                <div class="flex items-center justify-center sm:justify-start space-x-4">
                                    <div class="flex items-center bg-gray-100 rounded-xl p-1">
                                        <button class="w-8 h-8 flex items-center justify-center hover:text-red-600"><i class="fas fa-minus text-xs"></i></button>
                                        <span class="w-10 text-center font-bold">2</span>
                                        <button class="w-8 h-8 flex items-center justify-center hover:text-red-600"><i class="fas fa-plus text-xs"></i></button>
                                    </div>
                                    <button class="text-gray-300 hover:text-red-500 transition"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-xl font-black text-gray-900">33,00 R$</span>
                            </div>
                        </div>
                    </div>


                    <div class="mt-8">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Observações para a cozinha:</label>
                        <textarea placeholder="Ex: Retirar as azeitonas, cortar em 12 pedaços..." class="w-full bg-gray-50 border border-gray-200 rounded-2xl p-4 outline-none focus:border-red-600 transition h-24 resize-none"></textarea>
                    </div>
                </div>


                <!-- Sugestão de última hora -->
                <div class="bg-red-50 rounded-3xl p-6 border border-red-100 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="text-2xl">🥤</div>
                        <div>
                            <p class="font-bold text-red-800">Falta a bebida?</p>
                            <p class="text-xs text-red-600">Adiciona uma Coca-Cola de 1.5L por apenas 8,50 R$</p>
                        </div>
                    </div>
                    <button class="bg-red-600 text-white px-4 py-2 rounded-xl text-sm font-bold hover:bg-red-700 transition">Adicionar</button>
                </div>
            </div>


            <!-- Resumo e Pagamento -->
            <div class="space-y-6">
                <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 sticky top-28">
                    <h3 class="text-xl font-black mb-6">Resumo</h3>
                   
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between text-gray-500">
                            <span>Subtotal</span>
                            <span class="font-semibold text-gray-900">47,90 R$</span>
                        </div>
                        <div class="flex justify-between text-gray-500">
                            <span>Taxa de Entrega</span>
                            <span class="text-green-600 font-bold uppercase text-xs mt-1">Grátis</span>
                        </div>
                        <div class="flex justify-between text-gray-500">
                            <span>Desconto (Novo Cliente)</span>
                            <span class="text-red-600 font-bold">-4,79 R$</span>
                        </div>
                        <div class="pt-4 border-t border-dashed border-gray-200 flex justify-between items-center">
                            <span class="text-xl font-black">Total</span>
                            <span class="text-3xl font-black text-red-600">43,11 R$</span>
                        </div>
                    </div>


                    <!-- Código Promocional -->
                    <div class="mb-8">
                        <div class="flex space-x-2">
                            <input type="text" placeholder="Código Promocional" class="flex-1 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm outline-none focus:border-red-600 transition">
                            <button class="bg-gray-900 text-white px-4 py-3 rounded-xl font-bold text-sm hover:bg-black transition">Aplicar</button>
                        </div>
                    </div>


                    <button class="w-full bg-red-600 text-white py-5 rounded-2xl font-black text-lg hover:bg-red-700 shadow-xl shadow-red-200 transition transform active:scale-[0.98] flex items-center justify-center space-x-3">
                        <span>Checkout</span>
                        <i class="fas fa-chevron-right text-sm"></i>
                    </button>
                   
                    <div class="mt-6 flex justify-center items-center space-x-4 opacity-30 grayscale">
                        <i class="fab fa-cc-visa text-2xl"></i>
                        <i class="fab fa-cc-mastercard text-2xl"></i>
                        <i class="fab fa-cc-apple-pay text-2xl"></i>
                        <i class="fas fa-money-bill-wave text-2xl"></i>
                    </div>
                </div>


                <div class="text-center">
                    <p class="text-xs text-gray-400">Tempo estimado de entrega: <span class="text-gray-600 font-bold">25-35 min</span></p>
                </div>
            </div>


        </div>
    </main>


    <!-- Footer Simples -->
    <footer class="mt-12 py-8 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <p class="text-xs text-gray-400 uppercase tracking-widest font-bold">&copy; 2024 Isaque Pizzaria • Made with <i class="fas fa-heart text-red-500"></i> in Portugal</p>
        </div>
    </footer>


</body>
</html>
