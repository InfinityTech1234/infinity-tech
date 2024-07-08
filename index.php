<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Infinity tech</title>
</head>

<body>
<header>
        <nav class="navigation">
            <a href="#" class="logo">Infi<span>ni</span>ty<span>te</span>ch</a>
            <div class="nav">
                <a href="#" onclick="toggleCart()"><i class='bx bx-cart-alt'> Carrinho</i></a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#">Inicio</a></li>
                <li class="nav-item"><a href="#">Produtos</a></li>
                <li class="nav-item"><a href="#">Ajuda</a></li>
                <li class="nav-item"><a href="perfil.php">Perfil</a></li>
            </ul>
            <div class="menu" onclick="toggleMenu()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <!-- Cart Sidebar -->
    <div id="cartSidebar" class="cart-sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleCart()">&times;</a>
        <h2></h2>
        <div class="cart-items">
            <!-- Itens do carrinho aqui -->
        </div>
    </div>
    <main>
        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Bem vindo à infinity tech</h4>
                <h1 class="text-h1" id="dynamic-text">
                    <?php
                    if (isset($_SESSION['full_name'])) {
                        echo "" . htmlspecialchars($_SESSION['full_name']) . "!";
                    }
                    ?>
                </h1>
                <br><br><br>
                <a href="#" class="home-btn">Navegar</a>
            </div>
        </section>
        <div class="servicos">
            <div class="servicos-text">
                <h2 class="text-h2">Nossos produtos</h2>
                <div class="filter-controls">
                    <div class="price-filter">
                        <label for="price-range">Filtrar por preço até: R$<span id="price-value">1000</span></label>
                        <input type="range" id="price-range" min="0" max="1000" step="10" value="1000">
                    </div>
                    <div class="category-filter">
                        <button class="filter-btn" data-category="all">Todos</button>
                        <button class="filter-btn" data-category="headset">Headset</button>
                        <button class="filter-btn" data-category="microfone">Microfone</button>
                        <button class="filter-btn" data-category="monitor">Monitor</button>
                        <button class="filter-btn" data-category="mousepad">Mousepad</button>
                    </div>
                </div>
            </div>
            <div class="servicos-grid">
                <a href="headset.html">
                <div class="servico-item" data-category="headset" data-price="299">
                    <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQf3O0BM7ZyD3iWLTQTI-ylkJdO0Ek5d6PemQDNWmiob8tcHhWQKJq6outxoFQC21YCuuq2lCMJrYkPUOnHIQebvpNqpYjLSO8m3m4HuO8DwikvdklEc3vj-g&usqp=CAE"
                        alt="Headset 1">
                    <div class="servico-info">
                        <h3 class="servico-title">Headset Gamer HyperX Cloud Stinger</h3>
                        <p class="servico-description"></p>
                    </div>
                    </a>
                </div>
                <div class="servico-item" data-category="headset" data-price="499">
                    <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSLYDZ8xOZZcjVz6nX_LZojOVvZWO-ZV-QUNojR24GJu5m8vDhrvzMdL7AloVj-sQqjlHdgkeZW54fWUnVC9i2A8ikVw5AHBlKPylVNXYtO4BZTZ5Lg60pG6A&usqp=CAE"
                        alt="Headset 2">
                    <div class="servico-info">
                        <h3 class="servico-title">Headset Logitech G533 Wireless</h3>
                        <p class="servico-description"></p>
                    </div>
                </div>
                <div class="servico-item" data-category="microfone" data-price="399">
                    <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ0NbL_68W1RfCtFJYzoY6CwGMBq_ohpKkT6iL5w-deBqbI0B-YA0ITlTdh4I2npFwcCrR9d0he8_6Bl4fyOWYTlaxZWr5CClTJCRSVxhaLOvv6OsGpVjQ4&usqp=CAE"
                        alt="Headset 3">
                    <div class="servico-info">
                        <h3 class="servico-title">Headset Razer Kraken X</h3>
                        <p class="servico-description"></p>
                    </div>
                </div>
                <div class="servico-item" data-category="microfone" data-price="799">
                    <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ0tDaObZRkvvx0CQvcmvo2L_FXYkKQx80GVcKmaL0N83YQoJLYsHPHWtCCleEAOQwv8UnQeoTU1jNO8BwrylOsml9yIjN3G2G8QikFL0yGI51EadOOBvmPcA&usqp=CAE"
                        alt="Microfone 1">
                    <div class="servico-info">
                        <h3 class="servico-title">Microfone Blue Yeti USB</h3>
                        <p class="servico-description"></p>
                    </div>
                </div>
                <div class="servico-item" data-category="monitor" data-price="899">
                    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTPUlZx5Q_p9YaUNMtrLFp_8oRT_8jaKSxojxbCBOhRyxMYRxP0Q0VJ_av4bgNzRJpIEyuX1ZgBUZF6jTY8NuF43pJ6enUZRZagQcHIHUdVjUPOggck8TdLXA&usqp=CAE"
                        alt="Microfone 2">
                    <div class="servico-info">
                        <h3 class="servico-title">
                            Monitor Concórdia Gamer Curvo</h3>
                        <p class="servico-description"></p>
                    </div>
                </div>
                <div class="servico-item" data-category="monitor" data-price="129">
                    <img src="data:image/jpeg;base64,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"
                        alt="Mousepad 1">
                    <div class="servico-info">
                        <h3 class="servico-title">Monitor gamer Picha</h3>
                        <p class="servico-description"></p>
                    </div>
                </div>
                <div class="servico-item" data-category="mousepad" data-price="149">
                    <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRjk27FLPv-S7Wb8Y29mKM2fuamIS2P7DaAWZLHlWiJktGJial3lG2bfMxKZLi3_nXQjJOAAtodpCHwCHYbwRoDiCbZUgfSZcA1v7NpaugQy_Yxe5WsDGAPoXJmkE-jiH1Oaherlhk&usqp=CAc"
                        alt="Mousepad 2">
                    <div class="servico-info">
                        <h3 class="servico-title">Mousepad PcYes!</h3>
                        <p class="servico-description"></p>
                    </div>
                </div>
                <div class="servico-item" data-category="mousepad" data-price="149">
                    <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTx9iQbcvevCpwHbDXM7TbeuwZQ40_FjSAP8l0nGR4uip6zhYIDfgyTYVIa5aTS6a-_lxYkJhyr_8wHmvEO1GPeD0ARrEhZSrs9gPhnfOFi&usqp=CAE"
                        alt="Mousepad 2">
                    <div class="servico-info">
                        <h3 class="servico-title">Mousepad HyperX Fury S</h3>
                        <p class="servico-description"></p>
                    </div>
                </div>
            </div>
        </div>

        <section class="quem-somos">
            <div class="quem-somos-text">
                <h2 class="text-h2">Quem Somos</h2>
                <p>Bem-vindo à nossa loja de periféricos de alta qualidade! Oferecemos uma ampla gama de acessórios e
                    dispositivos, desde teclados mecânicos avançados até mouses ergonômicos e headsets imersivos. Nossa
                    seleção inclui produtos das melhores marcas, garantindo durabilidade, desempenho e estilo.
                    Atualizados com as últimas tendências, temos a solução perfeita para otimizar seu setup, melhorar a
                    produtividade, maximizar a precisão nos jogos ou elevar seu entretenimento. Compre agora e
                    transforme sua experiência digital!</p>
            </div>
            <div class="team">
                <h2 class="text-h2 text-center text-2xl mb-6">Nossa Equipe</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="group before:hover:scale-95 before:hover:h-72 before:hover:w-80 before:hover:h-44 before:hover:rounded-b-2xl before:transition-all before:duration-500 before:content-[''] before:w-80 before:h-24 before:rounded-t-2xl before:bg-gradient-to-bl from-sky-200 via-orange-200 to-orange-700 before:absolute before:top-0 w-80 h-72 relative bg-slate-50 flex flex-col items-center justify-center gap-2 text-center rounded-2xl overflow-hidden">
                        <div
                            class="w-28 h-28 rounded-full border-4 border-slate-50 z-10 group-hover:scale-150 group-hover:-translate-x-24 group-hover:-translate-y-20 transition-all duration-500 overflow-hidden">
                            <img src="img/Ana.jpg" alt="Profile Image" class="w-full h-full object-cover">
                        </div>
                        <div class="z-10 group-hover:-translate-y-10 transition-all duration-500">
                            <span class="text-2xl font-semibold">Ana Clara Engles Rottini</span>
                            <p>Documentação</p>
                        </div>
                    </div>
                    <div
                        class="group before:hover:scale-95 before:hover:h-72 before:hover:w-80 before:hover:h-44 before:hover:rounded-b-2xl before:transition-all before:duration-500 before:content-[''] before:w-80 before:h-24 before:rounded-t-2xl before:bg-gradient-to-bl from-sky-200 via-orange-200 to-orange-700 before:absolute before:top-0 w-80 h-72 relative bg-slate-50 flex flex-col items-center justify-center gap-2 text-center rounded-2xl overflow-hidden">
                        <div
                            class="w-28 h-28 rounded-full border-4 border-slate-50 z-10 group-hover:scale-150 group-hover:-translate-x-24 group-hover:-translate-y-20 transition-all duration-500 overflow-hidden">
                            <img src="img/arthur.jpg" alt="Profile Image" class="w-full h-full object-cover">
                        </div>
                        <div class="z-10 group-hover:-translate-y-10 transition-all duration-500">
                            <span class="text-2xl font-semibold">Arthur Henrique Pereira</span>
                            <p>Documentação</p>
                        </div>
                    </div>
                    <div
                        class="group before:hover:scale-95 before:hover:h-72 before:hover:w-80 before:hover:h-44 before:hover:rounded-b-2xl before:transition-all before:duration-500 before:content-[''] before:w-80 before:h-24 before:rounded-t-2xl before:bg-gradient-to-bl from-sky-200 via-orange-200 to-orange-700 before:absolute before:top-0 w-80 h-72 relative bg-slate-50 flex flex-col items-center justify-center gap-2 text-center rounded-2xl overflow-hidden">
                        <div
                            class="w-28 h-28 rounded-full border-4 border-slate-50 z-10 group-hover:scale-150 group-hover:-translate-x-24 group-hover:-translate-y-20 transition-all duration-500 overflow-hidden">
                            <img src="img/pacheco.png" alt="Profile Image" class="w-full h-full object-cover">
                        </div>
                        <div class="z-10 group-hover:-translate-y-10 transition-all duration-500">
                            <span class="text-2xl font-semibold">Lucas Silva Pacheco</span>
                            <p>Documentação</p>
                        </div>
                    </div>
                    <div
                        class="group before:hover:scale-95 before:hover:h-72 before:hover:w-80 before:hover:h-44 before:hover:rounded-b-2xl before:transition-all before:duration-500 before:content-[''] before:w-80 before:h-24 before:rounded-t-2xl before:bg-gradient-to-bl from-sky-200 via-orange-200 to-orange-700 before:absolute before:top-0 w-80 h-72 relative bg-slate-50 flex flex-col items-center justify-center gap-2 text-center rounded-2xl overflow-hidden">
                        <div
                            class="w-28 h-28 rounded-full border-4 border-slate-50 z-10 group-hover:scale-150 group-hover:-translate-x-24 group-hover:-translate-y-20 transition-all duration-500 overflow-hidden">
                            <img src="img/emanuel.jpg" alt="Profile Image" class="w-full h-full object-cover">
                        </div>
                        <div class="z-10 group-hover:-translate-y-10 transition-all duration-500">
                            <span class="text-2xl font-semibold">Emanuel Tonis Florz Filho</span>
                            <p>Desenvolverdor Front/Back-end</p>
                        </div>
                    </div>
                    <div
                        class="group before:hover:scale-95 before:hover:h-72 before:hover:w-80 before:hover:h-44 before:hover:rounded-b-2xl before:transition-all before:duration-500 before:content-[''] before:w-80 before:h-24 before:rounded-t-2xl before:bg-gradient-to-bl from-sky-200 via-orange-200 to-orange-700 before:absolute before:top-0 w-80 h-72 relative bg-slate-50 flex flex-col items-center justify-center gap-2 text-center rounded-2xl overflow-hidden">
                        <div
                            class="w-28 h-28 rounded-full border-4 border-slate-50 z-10 group-hover:scale-150 group-hover:-translate-x-24 group-hover:-translate-y-20 transition-all duration-500 overflow-hidden">
                            <img src="img/cani.jpg" alt="Profile Image" class="w-full h-full object-cover">
                        </div>
                        <div class="z-10 group-hover:-translate-y-10 transition-all duration-500">
                            <span class="text-2xl font-semibold">Vichtor Vilson Klipp Cani</span>
                            <p>Desenvolvedor Back-end</p>
                        </div>
                    </div>
                    <div
                        class="group before:hover:scale-95 before:hover:h-72 before:hover:w-80 before:hover:h-44 before:hover:rounded-b-2xl before:transition-all before:duration-500 before:content-[''] before:w-80 before:h-24 before:rounded-t-2xl before:bg-gradient-to-bl from-sky-200 via-orange-200 to-orange-700 before:absolute before:top-0 w-80 h-72 relative bg-slate-50 flex flex-col items-center justify-center gap-2 text-center rounded-2xl overflow-hidden">
                        <div
                            class="w-28 h-28 rounded-full border-4 border-slate-50 z-10 group-hover:scale-150 group-hover:-translate-x-24 group-hover:-translate-y-20 transition-all duration-500 overflow-hidden">
                            <img src="img/winter.jpg" alt="Profile Image" class="w-full h-full object-cover">
                        </div>
                        <div class="z-10 group-hover:-translate-y-10 transition-all duration-500">
                            <span class="text-2xl font-semibold">Matheus Winter</span>
                            <p>Desenvolvedor Back-end</p>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <footer class="footer">
        <div class="contatos">
            <h3>Contatos</h3>
            <ul>
                <li><a href="mailto:infinity-tech@gmail.com"><i class='bx bx-envelope'></i>infinitytech@gmail.com</a>
                </li>
                <li><a href="https://www.instagram.com/sonnusterapia/"><i class='bx bxl-instagram'></i>
                        @infinity_tech</a></li>
                <li><a href="tel:+5547997802455"><i class='bx bx-phone'></i> (XX) XXXX-XXXX</a></li>
            </ul>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menu = document.querySelector('.menu');
            const NavMenu = document.querySelector('.nav-menu');

            menu.addEventListener('click', () => {
                menu.classList.toggle('ativo');
                NavMenu.classList.toggle('ativo');
            });

            const priceRange = document.getElementById('price-range');
            const priceValue = document.getElementById('price-value');
            const servicoItems = document.querySelectorAll('.servico-item');
            const filterButtons = document.querySelectorAll('.filter-btn');

            const filterProducts = () => {
                const maxPrice = priceRange.value;
                const activeCategory = document.querySelector('.filter-btn.active')?.dataset.category || 'all';

                priceValue.textContent = maxPrice;

                servicoItems.forEach(item => {
                    const itemPrice = parseFloat(item.getAttribute('data-price'));
                    const itemCategory = item.getAttribute('data-category');
                    const priceMatch = itemPrice <= maxPrice;
                    const categoryMatch = activeCategory === 'all' || itemCategory === activeCategory;

                    if (priceMatch && categoryMatch) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            };

            priceRange.addEventListener('input', filterProducts);

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                    filterProducts();
                });
            });

            // Set initial filter state
            filterButtons[0].classList.add('active');
            priceRange.dispatchEvent(new Event('input'));
        });
        // JavaScript (script.js)
        function toggleCart() {
            var cartSidebar = document.getElementById("cartSidebar");
            if (cartSidebar.style.width === "250px") {
                cartSidebar.style.width = "0";
            } else {
                cartSidebar.style.width = "250px";
            }
        }
    </script>
</body>

</html>