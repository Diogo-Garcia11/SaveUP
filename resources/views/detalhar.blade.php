<x-app-layout>
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

<head>


</head>
<main class="page">

<div class="container">

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

                    Unidade Única

                </div>

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

            <span class="accordion-label">
                Descrição
            </span>

            <div class="accordion-content">

                <?php echo htmlspecialchars($product['description']); ?>

            </div>

        </div><!-- product-info -->

    </div> <!-- product-grid -->

</div> <!--container -->

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

</script>
</x-app-layout>
