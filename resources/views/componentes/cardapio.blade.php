<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isaque Pizzaria - O Sabor da Tradição</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
       
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }


        .pizza-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }


        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ef4444;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
        }


        .hidden-view {
            display: none;
        }


        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #ef4444;
            border-radius: 10px;
        }


        .auth-container {
            animation: fadeIn 0.3s ease-in-out;
        }


        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }


        input:focus {
            border-color: #ef4444;
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">


    <!-- Barra de Navegação -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2 cursor-pointer" onclick="showView('home')">
                <i class="fas fa-pizza-slice text-red-600 text-2xl"></i>
                <h1 class="text-xl font-bold tracking-tight text-gray-900">ISAQUE <span class="text-red-600">PIZZARIA</span></h1>
            </div>
            <div class="flex items-center space-x-4">
                <div id="user-info" class="hidden text-sm font-semibold text-gray-700">
                    Olá, <span id="display-name">Utilizador</span>
                </div>
                <button id="btn-login-view" onclick="showView('auth')" class="text-gray-600 hover:text-red-600 font-medium transition flex items-center space-x-1">
                    <i class="fas fa-user-circle text-xl"></i>
                    <span id="auth-label" class="hidden md:inline">Entrar</span>
                </button>
                <div class="relative">
                    <button onclick="toggleCart()" class="p-2 text-gray-600 hover:text-red-600 transition">
                        <i class="fas fa-shopping-cart text-2xl"></i>
                        <span id="cart-count" class="cart-badge">0</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>


    <!-- Vista de Autenticação -->
    <section id="view-auth" class="hidden-view container mx-auto px-4 py-8 lg:py-12">
        <div class="max-w-2xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100 auth-container">
            <div class="flex border-b">
                <button onclick="toggleAuthTab('login')" id="tab-login" class="w-1/2 py-4 font-bold text-gray-400 hover:text-red-600 transition-all">Login</button>
                <button onclick="toggleAuthTab('register')" id="tab-register" class="w-1/2 py-4 font-bold text-red-600 border-b-4 border-red-600 bg-gray-50 transition-all">Primeiro Acesso</button>
            </div>
           
            <!-- Formulário de Login -->
            <div id="form-login" class="hidden p-8 space-y-4">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-900">Bem-vindo!</h3>
                    <p class="text-gray-500">Acesse sua conta para pedir sua pizza favorita.</p>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">E-mail</label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-3 top-4 text-gray-400"></i>
                        <input type="email" id="login-email" class="w-full pl-10 p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none transition" placeholder="exemplo@email.com">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Palavra-passe</label>
                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-4 text-gray-400"></i>
                        <input type="password" id="login-pass" class="w-full pl-10 p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none transition" placeholder="••••••••">
                    </div>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center"><input type="checkbox" class="mr-2 accent-red-600"> Lembrar-me</label>
                    <a href="#" class="text-red-600 font-semibold">Esqueceu a senha?</a>
                </div>
                <button onclick="handleAuth('login')" class="w-full bg-red-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-red-700 shadow-lg shadow-red-200 transition-all transform active:scale-95">Entrar agora</button>
            </div>


            <!-- Formulário de Cadastro Detalhado (Primeiro Acesso) -->
            <div id="form-register" class="p-8 space-y-6">
                <div class="text-center mb-6">
                    <h3 class="text-3xl font-bold text-gray-900">Seja Bem-vindo!</h3>
                    <p class="text-gray-500">Crie sua conta em menos de 1 minuto.</p>
                    <div class="mt-4 flex justify-center items-center space-x-2">
                        <div class="h-2 w-16 bg-red-600 rounded-full"></div>
                        <div class="h-2 w-16 bg-gray-200 rounded-full"></div>
                    </div>
                </div>
               
                <div class="space-y-4">
                    <h4 class="font-bold text-gray-700 flex items-center space-x-2">
                        <i class="fas fa-user-circle text-red-500"></i>
                        <span>Dados Pessoais</span>
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nome Completo</label>
                            <input type="text" id="reg-name" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none" placeholder="Ex: Isaque Silva">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Telemóvel / Celular</label>
                            <input type="tel" id="reg-phone" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none" placeholder="(00) 00000-0000">
                        </div>
                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Data de Nascimento</label>
                            <input type="date" id="reg-birth" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">E-mail</label>
                            <input type="email" id="reg-email" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none" placeholder="seu@email.com">
                        </div>
                    </div>
                </div>


                <div class="space-y-4">
                    <h4 class="font-bold text-gray-700 flex items-center space-x-2">
                        <i class="fas fa-map-marker-alt text-red-500"></i>
                        <span>Onde entregamos?</span>
                    </h4>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Endereço Principal de Entrega</label>
                        <input type="text" id="reg-address" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none" placeholder="Rua, Número, Bairro e Ponto de Referência">
                    </div>
                </div>


                <div class="space-y-4">
                    <h4 class="font-bold text-gray-700 flex items-center space-x-2">
                        <i class="fas fa-shield-alt text-red-500"></i>
                        <span>Segurança</span>
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Senha</label>
                            <input type="password" id="reg-pass" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none" placeholder="••••••••">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Confirmar Senha</label>
                            <input type="password" id="reg-confirm-pass" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none" placeholder="••••••••">
                        </div>
                    </div>
                </div>


                <div class="bg-red-50 p-4 rounded-xl border border-red-100">
                    <label class="flex items-start space-x-3 cursor-pointer">
                        <input type="checkbox" id="reg-terms" class="mt-1 accent-red-600">
                        <span class="text-xs text-gray-600">Estou ciente de que meus dados serão processados para fins de entrega e promoções exclusivas da Isaque Pizzaria. <a href="#" class="text-red-600 font-bold underline">Ler Termos</a>.</span>
                    </label>
                </div>
               
                <button onclick="handleAuth('register')" class="w-full bg-red-600 text-white py-4 rounded-2xl font-bold text-lg hover:bg-red-700 shadow-xl shadow-red-100 transition-all transform active:scale-95">Criar minha conta</button>
            </div>
        </div>
    </section>


    <!-- Vista Principal (Home) -->
    <div id="view-home">
        <!-- Hero -->
        <header class="bg-red-600 text-white py-12 px-4 text-center relative overflow-hidden">
            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">A verdadeira pizza artesanal</h2>
                <p class="text-lg opacity-90 mb-6">Massa de fermentação lenta e ingredientes premium.</p>
                <a href="#menu" class="bg-white text-red-600 px-8 py-3 rounded-full font-bold shadow-lg hover:bg-gray-100 transition inline-block">
                    Ver Cardápio
                </a>
            </div>
            <i class="fas fa-pizza-slice absolute -bottom-10 -right-10 text-9xl text-red-500 opacity-20 transform -rotate-12"></i>
        </header>


        <!-- Menu -->
        <main id="menu" class="container mx-auto px-4 py-12">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h3 class="text-2xl font-bold border-b-4 border-red-600 inline-block pb-1">Favoritas da Casa</h3>
                </div>
            </div>
           
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Pizza 1 -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all overflow-hidden border border-gray-100 flex flex-col h-full">
                    <img src="https://rossopizza.com.br/salao/wp-content/uploads/2019/09/istock-181175167.jpg" alt="Margherita" class="w-full h-40 object-cover">
                    <div class="p-4 flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-lg">Margherita</h4>
                            <span class="text-red-600 font-bold whitespace-nowrap">R$ 45,90</span>
                        </div>
                        <p class="text-gray-500 text-xs leading-relaxed mb-4">Mussarela de búfala, manjericão fresco e azeite extravirgem.</p>
                    </div>
                    <div class="p-4 pt-0">
                        <button onclick="addToCart('Margherita', 45.90)" class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-red-600 transition flex items-center justify-center space-x-2">
                            <i class="fas fa-cart-plus"></i>
                            <span>Pedir</span>
                        </button>
                    </div>
                </div>


                <!-- Pizza 2 -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all overflow-hidden border border-gray-100 flex flex-col h-full">
                    <img src="https://cdn0.tudoreceitas.com/pt/posts/9/8/3/pizza_calabresa_e_mussarela_4389_orig.jpg" alt="Calabresa" class="w-full h-40 object-cover">
                    <div class="p-4 flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-lg">Calabresa</h4>
                            <span class="text-red-600 font-bold">R$ 42,00</span>
                        </div>
                        <p class="text-gray-500 text-xs leading-relaxed mb-4">Calabresa artesanal, cebola roxa fatiada e orégano.</p>
                    </div>
                    <div class="p-4 pt-0">
                        <button onclick="addToCart('Calabresa', 42.00)" class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-red-600 transition flex items-center justify-center space-x-2">
                            <i class="fas fa-cart-plus"></i>
                            <span>Pedir</span>
                        </button>
                    </div>
                </div>


                <!-- Pizza 3 -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all overflow-hidden border border-gray-100 flex flex-col h-full">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYTNZSZIoidS_EN47b13VD_g60tl4n0RWCVQ&s" alt="Frango com Catupiry" class="w-full h-40 object-cover">
                    <div class="p-4 flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-lg">Frango/Catupiry</h4>
                            <span class="text-red-600 font-bold">R$ 49,90</span>
                        </div>
                        <p class="text-gray-500 text-xs leading-relaxed mb-4">Frango desfiado suculento e o legítimo catupiry original.</p>
                    </div>
                    <div class="p-4 pt-0">
                        <button onclick="addToCart('Frango/Catupiry', 49.90)" class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-red-600 transition flex items-center justify-center space-x-2">
                            <i class="fas fa-cart-plus"></i>
                            <span>Pedir</span>
                        </button>
                    </div>
                </div>


                <!-- Pizza 4 -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all overflow-hidden border border-gray-100 flex flex-col h-full">
                    <img src="https://i.ytimg.com/vi/tiW-9oASTx0/maxresdefault.jpg" alt="Portuguesa" class="w-full h-40 object-cover">
                    <div class="p-4 flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-lg">Portuguesa</h4>
                            <span class="text-red-600 font-bold">R$ 48,50</span>
                        </div>
                        <p class="text-gray-500 text-xs leading-relaxed mb-4">Presunto, ovos cozidos, ervilhas, cebola e mussarela.</p>
                    </div>
                    <div class="p-4 pt-0">
                        <button onclick="addToCart('Portuguesa', 48.50)" class="w-full bg-gray-900 text-white py-2 rounded-lg hover:bg-red-600 transition flex items-center justify-center space-x-2">
                            <i class="fas fa-cart-plus"></i>
                            <span>Pedir</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <!-- Modal do Carrinho -->
    <div id="cart-modal" class="fixed inset-0 bg-black bg-opacity-60 z-[100] hidden flex justify-end transition-all">
        <div class="bg-white w-full max-w-md h-full shadow-2xl flex flex-col transform transition-transform">
            <div class="p-6 border-b flex justify-between items-center bg-red-600 text-white">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-shopping-basket"></i>
                    <h2 class="text-xl font-bold">Seu Pedido</h2>
                </div>
                <button onclick="toggleCart()" class="text-3xl hover:opacity-70">&times;</button>
            </div>
           
            <div id="cart-items" class="flex-1 overflow-y-auto p-6 space-y-4 bg-gray-50">
                <p class="text-center text-gray-400 py-10 italic">O seu carrinho está vazio no momento...</p>
            </div>


            <div class="p-6 border-t bg-white">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-gray-500 font-medium">Subtotal</span>
                    <span id="cart-total" class="text-2xl font-black text-red-600">R$ 0,00</span>
                </div>
               
                <div id="checkout-form" class="hidden space-y-4 mb-6 p-4 bg-gray-50 rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-gray-700 border-b pb-2 mb-2">Dados de Entrega</h4>
                    <input type="text" id="cust-name" placeholder="Confirmar Nome" class="w-full p-3 border rounded-xl outline-none focus:ring-2 focus:ring-red-500">
                    <input type="text" id="cust-addr" placeholder="Endereço Completo" class="w-full p-3 border rounded-xl outline-none focus:ring-2 focus:ring-red-500">
                </div>


                <button id="btn-finish" onclick="processOrder()" class="w-full bg-green-600 text-white py-4 rounded-2xl font-bold text-lg hover:bg-green-700 transition-all shadow-lg disabled:bg-gray-300 disabled:shadow-none" disabled>
                    Finalizar e Pagar
                </button>
            </div>
        </div>
    </div>


    <!-- Toasts / Mensagens -->
    <div id="message-box" class="fixed bottom-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white px-8 py-3 rounded-full shadow-2xl z-[200] hidden">
        <span id="message-text"></span>
    </div>


    <!-- Rodapé -->
    <footer class="bg-white border-t border-gray-100 py-10 px-4 text-center">
        <div class="mb-6">
            <h4 class="font-bold text-gray-900">ISAQUE PIZZARIA</h4>
            <p class="text-sm text-gray-500 mt-1">Sabor que une gerações.</p>
        </div>
        <div class="flex justify-center space-x-6 text-gray-400 mb-6">
            <a href="#" class="hover:text-red-600 transition text-2xl"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-red-600 transition text-2xl"><i class="fab fa-facebook"></i></a>
            <a href="#" class="hover:text-red-600 transition text-2xl"><i class="fab fa-whatsapp"></i></a>
        </div>
        <p class="text-xs text-gray-400">&copy; 2024 Isaque Pizzaria Ltda. Todos os direitos reservados.</p>
    </footer>


    <script>
        let cart = [];
        let total = 0;
        let currentUser = null;


        // Gestão de Vistas
        function showView(view) {
            const home = document.getElementById('view-home');
            const auth = document.getElementById('view-auth');


            if(view === 'home') {
                home.classList.remove('hidden-view');
                auth.classList.add('hidden-view');
                window.scrollTo({top: 0, behavior: 'smooth'});
            } else if(view === 'auth') {
                if(currentUser) {
                    logout();
                } else {
                    home.classList.add('hidden-view');
                    auth.classList.remove('hidden-view');
                    window.scrollTo({top: 0, behavior: 'smooth'});
                }
            }
        }


        function toggleAuthTab(tab) {
            const loginForm = document.getElementById('form-login');
            const regForm = document.getElementById('form-register');
            const tabL = document.getElementById('tab-login');
            const tabR = document.getElementById('tab-register');


            if(tab === 'login') {
                loginForm.classList.remove('hidden');
                regForm.classList.add('hidden');
                tabL.classList.add('text-red-600', 'border-red-600', 'border-b-4', 'bg-gray-50');
                tabL.classList.remove('text-gray-400');
                tabR.classList.remove('text-red-600', 'border-red-600', 'border-b-4', 'bg-gray-50');
                tabR.classList.add('text-gray-400');
            } else {
                loginForm.classList.add('hidden');
                regForm.classList.remove('hidden');
                tabR.classList.add('text-red-600', 'border-red-600', 'border-b-4', 'bg-gray-50');
                tabR.classList.remove('text-gray-400');
                tabL.classList.remove('text-red-600', 'border-red-600', 'border-b-4', 'bg-gray-50');
                tabL.classList.add('text-gray-400');
            }
        }


        function handleAuth(type) {
            let email, name, address;


            if(type === 'login') {
                email = document.getElementById('login-email').value;
                name = "Utilizador";
                address = "Rua Central, 123";
            } else {
                email = document.getElementById('reg-email').value;
                name = document.getElementById('reg-name').value;
                address = document.getElementById('reg-address').value;
                const pass = document.getElementById('reg-pass').value;
                const confirmPass = document.getElementById('reg-confirm-pass').value;
                const terms = document.getElementById('reg-terms').checked;
               
                if(!name || !email || !address || !pass) {
                    showMessage("Por favor, preencha todos os campos obrigatórios.");
                    return;
                }
                if(pass !== confirmPass) {
                    showMessage("As senhas não coincidem.");
                    return;
                }
                if(!terms) {
                    showMessage("Você precisa aceitar os termos de uso.");
                    return;
                }
            }


            // Simulação de Sucesso
            currentUser = { name: name, email: email, address: address };
            document.getElementById('display-name').innerText = name.split(' ')[0];
            document.getElementById('user-info').classList.remove('hidden');
            document.getElementById('cust-name').value = name;
            document.getElementById('cust-addr').value = address;
            document.getElementById('auth-label').innerText = "Sair";
            document.getElementById('btn-login-view').innerHTML = '<i class="fas fa-sign-out-alt text-xl text-red-500"></i> <span class="hidden md:inline">Sair</span>';
           
            showMessage(type === 'login' ? `Bem-vindo de volta, ${name}!` : "Conta criada com sucesso! Aproveite.");
            showView('home');
        }


        function logout() {
            currentUser = null;
            document.getElementById('user-info').classList.add('hidden');
            document.getElementById('auth-label').innerText = "Entrar";
            document.getElementById('btn-login-view').innerHTML = '<i class="fas fa-user-circle text-xl"></i> <span class="hidden md:inline">Entrar</span>';
            document.getElementById('cust-name').value = '';
            document.getElementById('cust-addr').value = '';
            showMessage("Você saiu da sua conta.");
        }


        // Carrinho
        function toggleCart() {
            const modal = document.getElementById('cart-modal');
            modal.classList.toggle('hidden');
        }


        function addToCart(name, price) {
            const existingItem = cart.find(item => item.name === name);
            if (existingItem) {
                existingItem.qty++;
            } else {
                cart.push({ name, price, qty: 1 });
            }
            updateCart();
            showMessage(`${name} adicionado!`);
        }


        function updateCart() {
            const itemsContainer = document.getElementById('cart-items');
            const cartCount = document.getElementById('cart-count');
            const cartTotal = document.getElementById('cart-total');
            const btnFinish = document.getElementById('btn-finish');
            const checkoutForm = document.getElementById('checkout-form');


            if (cart.length === 0) {
                itemsContainer.innerHTML = '<p class="text-center text-gray-400 py-10 italic">Carrinho vazio.</p>';
                btnFinish.disabled = true;
                checkoutForm.classList.add('hidden');
            } else {
                itemsContainer.innerHTML = '';
                total = 0;
                let count = 0;


                cart.forEach((item, index) => {
                    total += item.price * item.qty;
                    count += item.qty;
                    itemsContainer.innerHTML += `
                        <div class="flex justify-between items-center bg-white p-4 rounded-2xl border border-gray-100">
                            <div>
                                <h5 class="font-bold text-gray-800">${item.name}</h5>
                                <p class="text-sm text-gray-500">R$ ${item.price.toFixed(2)}</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button onclick="changeQty(${index}, -1)" class="w-8 h-8 bg-gray-100 rounded-lg">-</button>
                                <span class="font-bold">${item.qty}</span>
                                <button onclick="changeQty(${index}, 1)" class="w-8 h-8 bg-gray-100 rounded-lg">+</button>
                            </div>
                        </div>
                    `;
                });


                cartTotal.innerText = `R$ ${total.toFixed(2)}`;
                cartCount.innerText = count;
                btnFinish.disabled = false;
                checkoutForm.classList.remove('hidden');
            }
        }


        function changeQty(index, delta) {
            cart[index].qty += delta;
            if (cart[index].qty <= 0) cart.splice(index, 1);
            updateCart();
        }


        function showMessage(text) {
            const box = document.getElementById('message-box');
            const msg = document.getElementById('message-text');
            msg.innerText = text;
            box.classList.remove('hidden');
            setTimeout(() => box.classList.add('hidden'), 3000);
        }


        function processOrder() {
            const name = document.getElementById('cust-name').value;
            const addr = document.getElementById('cust-addr').value;


            if (!name || !addr) {
                showMessage("Confirme seu nome e endereço de entrega.");
                return;
            }


            const btn = document.getElementById('btn-finish');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Confirmando...';
            btn.disabled = true;


            setTimeout(() => {
                cart = [];
                updateCart();
                toggleCart();
                btn.innerHTML = 'Finalizar e Pagar';
                showMessage("Pedido confirmado! Bom apetite.");
            }, 2000);
        }
    </script>
</body>
</html>
