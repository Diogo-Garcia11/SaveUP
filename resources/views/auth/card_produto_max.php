<?php

$product = [
    "id"          => 1,

    "name"        => "Vintage Hoodie",

    "price"       => 189.90,

    "description" => "Uma peça de arquivo rara em estado excepcional. Garimpada de uma coleção particular, este moletom vintage carrega a confiança discreta de uma era definida pela contenção e pelo artesanato autêntico.",

    "images" => [
        "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=1200",
        "https://images.unsplash.com/photo-1503341504253-dff4815485f1?q=80&w=1200",
        "https://images.unsplash.com/photo-1509942774463-acf339cf87d5?q=80&w=1200"
    ]
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?php echo htmlspecialchars($product['name']); ?> · SaveUP
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=DM+Sans:wght@400;500;600&display=swap"
        rel="stylesheet"
    >

    <style>

        :root {

            --cream:        #F7F4EF;
            --warm-white:   #F0ECE5;
            --ink:          #1E1C1A;
            --ink-soft:     #3D3A36;
            --muted:        #8A8580;
            --muted-light:  #B5B0A8;
            --border:       #DDD8CF;
            --border-mid:   #C8C2B8;
            --orange:       #FF964F;
            --orange-dark:  #E8823A;
            --orange-pale:  #FFF0E6;
        }

        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            background: var(--cream);

            color: var(--ink);

            font-family: 'DM Sans', sans-serif;

            min-height: 100vh;

            -webkit-font-smoothing: antialiased;
        }

        html {

            scroll-behavior: smooth;
        }

        .nav {

            position: fixed;

            top: 0;
            left: 0;
            right: 0;

            z-index: 100;

            height: 68px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 52px;

            background: rgba(247,244,239,0.94);

            backdrop-filter: blur(16px);

            border-bottom: 1px solid var(--border);
        }

        .nav-logo {

            text-decoration: none;

            color: var(--ink);

            font-family: 'Playfair Display', serif;

            font-size: 36px;

            font-weight: 700;

            letter-spacing: .08em;

            text-transform: uppercase;
        }

        .nav-logo span {

            color: var(--orange);
        }

        .nav-links {

            display: flex;

            gap: 40px;

            list-style: none;
        }

        .nav-links a {

            text-decoration: none;

            color: var(--muted);

            font-size: 14px;

            font-weight: 600;

            letter-spacing: .14em;

            text-transform: uppercase;
        }

        .nav-right {

            display: flex;

            align-items: center;

            gap: 14px;
        }

        .nav-icon-btn {

            width: 44px;

            height: 44px;

            border-radius: 999px;

            border: 1px solid var(--border);

            background: rgba(255,255,255,0.7);

            display: flex;

            align-items: center;

            justify-content: center;

            cursor: pointer;

            transition: .25s ease;
        }

        .nav-icon-btn:hover {

            border-color: var(--orange);

            background: white;
        }

        .nav-icon-btn svg {

            width: 18px;

            height: 18px;

            stroke: var(--ink-soft);

            fill: none;

            stroke-width: 2;
        }

        /* SEARCH */

        .search-wrapper {

            position: relative;

            display: flex;

            align-items: center;
        }

        .search-bar {

            position: absolute;

            top: 50%;

            right: 52px;

            transform: translateY(-50%);

            width: 0;

            opacity: 0;

            overflow: hidden;

            display: flex;

            align-items: center;

            background: rgba(255,255,255,0.98);

            border: 1.5px solid var(--border);

            border-radius: 999px;

            transition:
                width 0.35s ease,
                opacity 0.25s ease,
                border-color 0.25s ease;

            backdrop-filter: blur(14px);

            box-shadow: 0 10px 35px rgba(30,28,26,0.08);
        }

        .search-bar.active {

            width: 340px;

            opacity: 1;
        }

        .search-bar input {

            flex: 1;

            border: none;

            background: transparent;

            padding: 14px 18px;

            font-size: 14px;

            font-weight: 500;

            color: var(--ink);

            outline: none;
        }

        .search-bar input::placeholder {

            color: var(--muted-light);
        }

        .search-bar button {

            width: 48px;

            height: 48px;

            border: none;

            background: transparent;

            cursor: pointer;

            display: flex;

            align-items: center;

            justify-content: center;
        }

        .search-bar button svg {

            width: 18px;

            height: 18px;

            stroke: var(--muted);

            fill: none;

            stroke-width: 2;
        }

        .search-bar button:hover svg {

            stroke: var(--orange);
        }

        .page {

            padding-top: 68px;
        }

        .container {

            max-width: 1300px;

            margin: 0 auto;

            padding: 60px 52px 80px;
        }

        .breadcrumb {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 30px;

            color: var(--muted-light);

            font-size: 14px;

            letter-spacing: .12em;

            text-transform: uppercase;
        }

        .breadcrumb a {

            text-decoration: none;

            color: var(--muted);
        }

        .breadcrumb-current {

            color: var(--ink-soft);
        }

        .product-grid {

            display: grid;

            grid-template-columns: 54% 1fr;

            gap: 72px;

            align-items: start;
        }

        .image-section {

            display: flex;

            gap: 14px;

            position: sticky;

            top: 90px;
        }

        .thumbnails {

            width: 76px;

            display: flex;

            flex-direction: column;

            gap: 10px;
        }

        .thumb {

            width: 76px;

            height: 96px;

            overflow: hidden;

            border-radius: 8px;

            border: 1px solid var(--border);

            cursor: pointer;

            background: var(--warm-white);
        }

        .thumb.active {

            border-color: var(--orange);
        }

        .thumb img {

            width: 100%;

            height: 100%;

            object-fit: cover;
        }

        .main-image-wrap {

            position: relative;

            flex: 1;

            aspect-ratio: 3 / 4;

            overflow: hidden;

            border-radius: 12px;

            border: 1px solid var(--border);

            background: var(--warm-white);
        }

        .main-image-wrap img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: opacity .3s ease;
        }

        .fade-out {

            opacity: 0;
        }

        .image-badges {

            position: absolute;

            top: 14px;

            left: 14px;

            z-index: 5;
        }

        .img-badge {

            padding: 6px 12px;

            border-radius: 6px;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: .16em;

            text-transform: uppercase;

            background: rgba(247,244,239,0.95);

            border: 1px solid var(--border);

            color: var(--ink-soft);
        }

        .dot-indicators {

            position: absolute;

            bottom: 14px;

            left: 50%;

            transform: translateX(-50%);

            display: flex;

            gap: 6px;
        }

        .dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background: rgba(255,255,255,.5);

            cursor: pointer;
        }

        .dot.active {

            background: white;

            transform: scale(1.3);
        }

        .brand-label {

            margin-bottom: 18px;

            color: var(--muted);

            font-size: 15px;

            font-weight: 700;

            letter-spacing: .26em;

            text-transform: uppercase;
        }

        .product-title {

            font-family: 'Playfair Display', serif;

            font-size: clamp(42px, 4vw, 58px);

            line-height: 1.05;

            margin-bottom: 28px;
        }

        .product-title em {

            font-style: italic;

            color: var(--ink-soft);
        }

        .price-row {

            margin-bottom: 32px;

            padding-bottom: 32px;

            border-bottom: 1px solid var(--border);
        }

    .price-current {

    font-family: 'DM Sans', sans-serif;

    font-size: 42px;

    font-weight: 700;

    letter-spacing: -0.03em;

    color: var(--ink);
    }

        .chips-row {

            display: flex;

            flex-wrap: wrap;

            gap: 8px;

            margin-bottom: 32px;
        }

        .chip {

            display: flex;

            align-items: center;

            gap: 7px;

            padding: 8px 16px;

            border-radius: 8px;

            border: 1px solid var(--border);

            background: white;

            font-size: 15px;

            font-weight: 600;

            color: var(--ink-soft);
        }

        .chip-dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background: var(--orange);
        }

        .btn-group {

            display: flex;

            flex-direction: column;

            gap: 12px;

            margin: 32px 0 28px;
        }

        .btn {

            width: 100%;

            padding: 22px 32px;

            border-radius: 10px;

            border: 2px solid transparent;

            text-decoration: none;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 10px;

            cursor: pointer;

            transition: .25s ease;

            font-size: 15px;

            font-weight: 700;

            letter-spacing: .18em;

            text-transform: uppercase;
        }

        .btn svg {

            width: 18px;

            height: 18px;

            stroke: currentColor;

            fill: none;

            stroke-width: 2;
        }

        .btn-primary {

            background: var(--ink);

            color: white;
        }

        .btn-primary:hover {

            background: var(--orange);
        }

        .btn-secondary {

            background: white;

            border-color: var(--border-mid);

            color: var(--ink-soft);
        }

        .btn-secondary.saved {

            background: var(--orange-pale);

            border-color: var(--orange);

            color: var(--orange-dark);
        }

        .trust-strip {

            display: flex;

            flex-wrap: wrap;

            justify-content: center;

            align-items: center;

            gap: 20px;

            padding: 16px 20px;

            border-radius: 10px;

            border: 1px solid var(--border);

            background: var(--warm-white);
        }

        .trust-item {

            display: flex;

            align-items: center;

            gap: 10px;

            color: var(--muted);

            font-size: 13px;

            font-weight: 600;
        }

        .trust-item svg {

            width: 17px;

            height: 17px;

            stroke: var(--orange);

            fill: none;

            stroke-width: 2;
        }

        .trust-sep {

            width: 1px;

            height: 18px;

            background: var(--border);
        }

        .ornament {

            display: flex;

            align-items: center;

            gap: 14px;

            margin: 30px 0;
        }

        .ornament-line {

            flex: 1;

            height: 1px;

            background: var(--border);
        }

        .ornament-mark {

            color: var(--orange);

            font-size: 24px;
        }

        .accordion {

            border-top: 1px solid var(--border);
        }

        .accordion-item {

            border-bottom: 1px solid var(--border);
        }

        .accordion-trigger {

            width: 100%;

            padding: 20px 0;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background: none;

            border: none;

            cursor: pointer;
        }

        .accordion-label {

            font-size: 16px;

            font-weight: 700;

            letter-spacing: .16em;

            text-transform: uppercase;
        }

        .accordion-icon {

            position: relative;

            width: 18px;

            height: 18px;
        }

        .accordion-icon::before,
        .accordion-icon::after {

            content: '';

            position: absolute;

            background: var(--muted);

            top: 50%;

            left: 50%;

            transform: translate(-50%, -50%);
        }

        .accordion-icon::before {

            width: 12px;

            height: 1.5px;
        }

        .accordion-icon::after {

            width: 1.5px;

            height: 12px;
        }

        .accordion-trigger.open .accordion-icon::after {

            opacity: 0;
        }

        .accordion-body {

            max-height: 0;

            overflow: hidden;

            transition: .35s ease;
        }

        .accordion-body.open {

            max-height: 500px;

            padding-bottom: 20px;
        }

        .accordion-content {

            color: var(--ink-soft);

            font-size: 17px;

            line-height: 1.8;
        }

        .site-footer {

            max-width: 1300px;

            margin: 100px auto 0;

            padding: 40px 52px;

            border-top: 1px solid var(--border);

            display: flex;

            align-items: center;

            justify-content: space-between;

            flex-wrap: wrap;

            gap: 20px;
        }

        .footer-logo {

            font-family: 'Playfair Display', serif;

            font-size: 24px;

            font-weight: 700;

            text-transform: uppercase;
        }

        .footer-logo span {

            color: var(--orange);
        }

        .footer-links {

            display: flex;

            gap: 24px;

            list-style: none;
        }

        .footer-links a {

            text-decoration: none;

            color: var(--muted);

            font-size: 14px;

            font-weight: 600;

            letter-spacing: .12em;

            text-transform: uppercase;
        }

        .footer-copy {

            color: var(--muted-light);

            font-size: 11px;
        }

        @media (max-width: 768px) {

            .nav {

                padding: 0 20px;
            }

            .nav-links {

                display: none;
            }

            .container {

                padding: 36px 20px 60px;
            }

            .product-grid {

                grid-template-columns: 1fr;

                gap: 40px;
            }

            .image-section {

                position: static;

                flex-direction: column-reverse;
            }

            .thumbnails {

                width: 100%;

                flex-direction: row;
            }

            .thumb {

                width: calc(25% - 8px);

                height: 78px;
            }

            .site-footer {

                flex-direction: column;

                text-align: center;

                padding: 32px 20px;
            }

            .search-bar {

                right: 46px;
            }

            .search-bar.active {

                width: 78vw;
            }

            .trust-sep {

                display: none;
            }
        }

    </style>

</head>

<body>

<nav class="nav">

    <a href="/" class="nav-logo">
        Save<span>UP</span>
    </a>

    <ul class="nav-links">
        <li><a href="#">Novidades</a></li>
        <li><a href="#">Arquivo</a></li>
        <li><a href="#">Vintage</a></li>
        <li><a href="#">Sobre</a></li>
    </ul>

    <div class="nav-right">

        <div class="search-wrapper" id="searchWrapper">

            <button class="nav-icon-btn" id="searchToggle" aria-label="Buscar">

                <svg viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                </svg>

            </button>

            <div class="search-bar" id="searchBar">

                <input
                    type="text"
                    placeholder="Buscar peças, marcas, categorias..."
                />

                <button aria-label="Pesquisar">

                    <svg viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="7"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>

                </button>

            </div>

        </div>

    </div>

</nav>

<main class="page">

<div class="container">

    <nav class="breadcrumb">

        <a href="/">Início</a>

        <span>›</span>

        <a href="/arquivo">Arquivo</a>

        <span>›</span>

        <span class="breadcrumb-current">
            <?php echo htmlspecialchars($product['name']); ?>
        </span>

    </nav>

    <div class="product-grid">

        <div class="image-section">

            <div class="thumbnails">

                <?php foreach ($product['images'] as $i => $img): ?>

                    <div
                        class="thumb <?php echo $i === 0 ? 'active' : ''; ?>"
                        onclick="switchImage(<?php echo $i; ?>)"
                    >

                        <img
                            src="<?php echo htmlspecialchars($img); ?>"
                            alt=""
                        >

                    </div>

                <?php endforeach; ?>

            </div>

            <div class="main-image-wrap">

                <div class="image-badges">

                    <span class="img-badge">
                        Vintage
                    </span>

                </div>

                <img
                    id="mainImage"
                    src="<?php echo htmlspecialchars($product['images'][0]); ?>"
                    alt=""
                >

                <div class="dot-indicators">

                    <?php foreach ($product['images'] as $i => $img): ?>

                        <div
                            class="dot <?php echo $i === 0 ? 'active' : ''; ?>"
                            onclick="switchImage(<?php echo $i; ?>)"
                        ></div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

        <div class="product-info">

            <p class="brand-label">
                SAVEUP ARCHIVE
            </p>

            <h1 class="product-title">

                <?php

                    $words = explode(' ', htmlspecialchars($product['name']));

                    $last = array_pop($words);

                    echo implode(' ', $words) . ' <em>' . $last . '</em>';

                ?>

            </h1>

            <div class="price-row">

                <span class="price-current">

                    R$
                    <?php echo number_format($product['price'], 2, ',', '.'); ?>

                </span>

            </div>

            <div class="chips-row">

                <div class="chip">

                    <span class="chip-dot"></span>

                    Peça de Arquivo

                </div>

                <div class="chip">

                    <span class="chip-dot"></span>

                    Vintage Selecionado

                </div>

                <div class="chip">

                    <span class="chip-dot"></span>

                    Unidade Única

                </div>

            </div>

            <div class="btn-group">

                <a href="#" class="btn btn-primary">

                    <svg viewBox="0 0 24 24">
                        <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
                        <line x1="3" y1="6" x2="21" y2="6"/>
                        <path d="M16 10a4 4 0 0 1-8 0"/>
                    </svg>

                    Adicionar à Sacola

                </a>

                <button
                    class="btn btn-secondary"
                    id="wishlistBtn"
                    onclick="toggleWishlist(this)"
                >

                    <svg viewBox="0 0 24 24">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>

                    <span id="wishlistLabel">
                        Salvar nos Favoritos
                    </span>

                </button>

            </div>

            <div class="trust-strip">

                <div class="trust-item">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>

                    Autenticidade garantida

                </div>

                <div class="trust-sep"></div>

                <div class="trust-item">

                    <svg viewBox="0 0 24 24">
                        <rect x="1" y="3" width="15" height="13"/>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                        <circle cx="5.5" cy="18.5" r="2.5"/>
                        <circle cx="18.5" cy="18.5" r="2.5"/>
                    </svg>

                    Frete grátis

                </div>

                <div class="trust-sep"></div>

                <div class="trust-item">

                    <svg viewBox="0 0 24 24">
                        <polyline points="1 4 1 10 7 10"/>
                        <path d="M3.51 15a9 9 0 1 0 .49-4.93"/>
                    </svg>

                    14 dias para devolver

                </div>

            </div>

            <div class="ornament">

                <div class="ornament-line"></div>

                <div class="ornament-mark">✦</div>

                <div class="ornament-line"></div>

            </div>

            <div class="accordion">

                <div class="accordion-item">

                    <button
                        class="accordion-trigger open"
                        onclick="toggleAccordion(this)"
                    >

                        <span class="accordion-label">
                            Descrição
                        </span>

                        <span class="accordion-icon"></span>

                    </button>

                    <div class="accordion-body open">

                        <div class="accordion-content">

                            <?php echo htmlspecialchars($product['description']); ?>

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <button
                        class="accordion-trigger"
                        onclick="toggleAccordion(this)"
                    >

                        <span class="accordion-label">
                            Detalhes da Peça
                        </span>

                        <span class="accordion-icon"></span>

                    </button>

                    <div class="accordion-body">

                        <div class="accordion-content">

                            Esta peça faz parte da curadoria exclusiva SaveUP.
                            Cada item é selecionado individualmente considerando
                            estética, raridade e autenticidade visual.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <button
                        class="accordion-trigger"
                        onclick="toggleAccordion(this)"
                    >

                        <span class="accordion-label">
                            Medidas
                        </span>

                        <span class="accordion-icon"></span>

                    </button>

                    <div class="accordion-body">

                        <div class="accordion-content">

                            Consulte as medidas entrando em contato com a loja.

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<footer class="site-footer">

    <div class="footer-logo">
        Save<span>UP</span>
    </div>

    <ul class="footer-links">

        <li><a href="#">Sobre</a></li>

        <li><a href="#">Contato</a></li>

        <li><a href="#">Autenticidade</a></li>

    </ul>

    <p class="footer-copy">

        © <?php echo date('Y'); ?> SaveUP

    </p>

</footer>

</main>

<script>

const images = <?php echo json_encode($product['images']); ?>;

let current = 0;

let switching = false;

function switchImage(index) {

    if (switching || index === current) return;

    switching = true;

    const img = document.getElementById('mainImage');

    const thumbs = document.querySelectorAll('.thumb');

    const dots = document.querySelectorAll('.dot');

    img.classList.add('fade-out');

    setTimeout(() => {

        img.src = images[index];

        const done = () => {

            img.classList.remove('fade-out');

            switching = false;
        };

        img.onload = done;

        if (img.complete) done();

    }, 250);

    thumbs.forEach((t, i) => {

        t.classList.toggle('active', i === index);
    });

    dots.forEach((d, i) => {

        d.classList.toggle('active', i === index);
    });

    current = index;
}

function toggleWishlist(btn) {

    const active = btn.classList.toggle('saved');

    document.getElementById('wishlistLabel').textContent =
        active
            ? 'Salvo nos Favoritos ✓'
            : 'Salvar nos Favoritos';
}

function toggleAccordion(trigger) {

    const body = trigger.nextElementSibling;

    const isOpen = trigger.classList.contains('open');

    trigger.classList.toggle('open', !isOpen);

    body.classList.toggle('open', !isOpen);
}

/* SEARCH TOGGLE */

const searchToggle = document.getElementById('searchToggle');

const searchBar = document.getElementById('searchBar');

searchToggle.addEventListener('click', () => {

    searchBar.classList.toggle('active');

    if (searchBar.classList.contains('active')) {

        searchBar.querySelector('input').focus();
    }
});

/* FECHA AO CLICAR FORA */

document.addEventListener('click', (e) => {

    if (
        !document.getElementById('searchWrapper').contains(e.target)
    ) {

        searchBar.classList.remove('active');
    }
});

document.addEventListener('keydown', (e) => {

    if (e.key === 'ArrowRight') {

        switchImage((current + 1) % images.length);
    }

    if (e.key === 'ArrowLeft') {

        switchImage((current - 1 + images.length) % images.length);
    }
});

</script>

</body>
</html>