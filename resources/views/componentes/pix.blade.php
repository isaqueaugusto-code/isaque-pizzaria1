<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento PIX - Isaque Pizzaria</title>
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


        .qr-container {
            background: white;
            padding: 20px;
            border-radius: 24px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }


        .copy-button:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body class="text-gray-800 antialiased">


    <!-- Barra de Navegação -->
    <nav class="bg-white border-b border-gray-100 py-4">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <button onclick="history.back()" class="text-gray-500 hover:text-red-600 flex items-center space-x-2 transition">
                <i class="fas fa-arrow-left"></i>
                <span class="font-semibold text-sm">Alterar Método</span>
            </button>
            <div class="flex items-center space-x-2">
                <i class="fas fa-pizza-slice text-red-600 text-2xl"></i>
                <span class="text-xl font-black tracking-tighter uppercase">Isaque <span class="text-red-600">Pizzaria</span></span>
            </div>
            <div class="w-20"></div>
        </div>
    </nav>


    <main class="container mx-auto px-4 py-8 lg:py-12">
        <!-- Indicador de Progresso (Passo 2 - Pagamento) -->
        <div class="max-w-2xl mx-auto mb-10 text-center">
            <div class="step-indicator flex justify-between items-center relative">
                <div class="step-line"></div>
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


        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-[40px] p-8 lg:p-12 shadow-xl shadow-gray-200/50 border border-gray-100 text-center">
               
                <div class="flex items-center justify-center space-x-3 mb-6">
                    <h1 class="text-2xl font-black italic tracking-tight uppercase">Pagamento via PIX</h1>
                </div>


                <p class="text-gray-500 mb-8 max-w-sm mx-auto text-sm">
                    Abre a app do teu banco e digitaliza o código abaixo. O teu pedido será confirmado instantaneamente.
                </p>


                <!-- Área do QR Code -->
                <div class="qr-container inline-block mb-8 border-4 border-red-50">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=isaque-pizzaria-pix-payload-exemplo" class="w-48 h-48" alt="QR Code PIX">
                </div>


                <!-- Contador de Tempo -->
                <div class="mb-8 flex items-center justify-center space-x-2 text-red-600">
                    <i class="fas fa-clock animate-pulse"></i>
                    <span class="font-bold">O código expira em: <span id="timer">15:00</span></span>
                </div>


                <!-- PIX Copia e Cola -->
                <div class="text-left max-w-sm mx-auto mb-10">
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">PIX Copia e Cola</label>
                    <div class="flex items-center space-x-2 bg-gray-50 p-2 rounded-2xl border border-gray-100">
                        <input id="pix-code" type="text" readonly value="00020126580014br.gov.bcb.pix0136isaquepizzaria-1234-5678-9012-345678" class="flex-1 bg-transparent border-none text-xs font-mono text-gray-500 outline-none px-2 overflow-hidden text-ellipsis">
                        <button onclick="copyPix()" class="copy-button bg-gray-900 text-white px-4 py-2 rounded-xl text-xs font-bold transition hover:bg-black">
                            Copiar
                        </button>
                    </div>
                </div>


                <!-- Resumo Rápido -->
                <div class="bg-gray-50 rounded-3xl p-6 mb-10 flex justify-between items-center border border-gray-100">
                    <div class="text-left">
                        <p class="text-xs text-gray-400 font-bold uppercase">Total a pagar</p>
                        <p class="text-2xl font-black text-red-600">43,11R$</p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-400 font-bold uppercase">Pedido</p>
                        <p class="text-sm font-bold text-gray-900">#8294</p>
                    </div>
                </div>


                <div class="space-y-4">
                    <div class="flex items-center justify-center space-x-2 text-green-600 text-sm font-bold">
                        <i class="fas fa-shield-alt"></i>
                        <span>Ambiente de pagamento seguro</span>
                    </div>
                    <button onclick="simulateSuccess()" class="text-gray-400 hover:text-red-600 text-xs font-bold transition underline decoration-dotted">
                        Já fiz o pagamento, verificar agora
                    </button>
                </div>
            </div>


            <!-- Ajuda -->
            <div class="mt-8 text-center">
                <p class="text-xs text-gray-400 uppercase tracking-widest font-bold">Dificuldades com o PIX?</p>
                <button class="mt-2 text-red-600 font-bold text-sm hover:underline">Falar com o Suporte</button>
            </div>
        </div>
    </main>


    <!-- Overlay de Sucesso (Simulado) -->
    <div id="success-overlay" class="fixed inset-0 bg-white z-[100] flex flex-col items-center justify-center hidden">
        <div class="w-24 h-24 bg-green-100 text-green-600 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-check text-4xl"></i>
        </div>
        <h2 class="text-3xl font-black">Pagamento Confirmado!</h2>
        <p class="text-gray-500 mt-2">A tua pizza já está a ser preparada.</p>
    </div>


    <script>
        // Simulação do contador
        let time = 900; // 15 minutos
        const timerEl = document.getElementById('timer');
       
        setInterval(() => {
            const minutes = Math.floor(time / 60);
            let seconds = time % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            timerEl.innerHTML = `${minutes}:${seconds}`;
            if(time > 0) time--;
        }, 1000);


        function copyPix() {
            const copyText = document.getElementById("pix-code");
            copyText.select();
            document.execCommand("copy");
           
            const btn = document.querySelector('.copy-button');
            btn.innerText = "Copiado!";
            btn.classList.replace('bg-gray-900', 'bg-green-600');
           
            setTimeout(() => {
                btn.innerText = "Copiar";
                btn.classList.replace('bg-green-600', 'bg-gray-900');
            }, 2000);
        }


        function simulateSuccess() {
            document.getElementById('success-overlay').classList.remove('hidden');
            setTimeout(() => {
                // Aqui redirecionaria para a tela de sucesso real
                alert("Redirecionando para o rastreio do pedido...");
            }, 2000);
        }
    </script>


</body>
</html>
