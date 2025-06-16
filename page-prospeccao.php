<?php
/* Template Name: Página Prospecção Assertive */
get_header();

// Buscar o valor da imagem hero
$hero_image = get_post_meta(get_the_ID(), 'hero_imagem', true);
?>

<div class="hero-section inria-sans-font"
     <?php if ($hero_image): ?>
       style="background: url('<?php echo esc_url($hero_image); ?>') center/cover no-repeat;"
     <?php endif; ?>>
    <div class="hero-content right">
        <hr class="hero-line">
        <h1 class="inria-sans-bold">
            <?php echo esc_html(get_post_meta(get_the_ID(), 'hero_titulo', true)); ?>
        </h1>
        <p class="inria-sans-regular">
            <?php echo esc_html(get_post_meta(get_the_ID(), 'hero_descricao', true)); ?>
        </p>
        <a href="#contato" class="btn-primary">
            <?php echo esc_html(get_post_meta(get_the_ID(), 'hero_botao_texto', true)); ?>
        </a>
        <hr class="hero-line">
    </div>
</div>

<div class="grid-section-container white-bg">
    <div class="grid-section">
        <div class="grid inria-sans-font">
            <img class="right" src="<?php echo esc_url(get_post_meta(get_the_ID(), 'imagem_1', true)); ?>" alt="">
            <div class="left">
                <h1 class="league-spartan-bold"><?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_bloco_1', true)); ?></h1>
                <p class="inria-sans-regular"><?php echo esc_html(get_post_meta(get_the_ID(), 'texto_bloco_1', true)); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="grid-section-container blue-bgd">
    <div class="grid-section">
        <div class="grid inria-sans-font">
            <div class="right">
                <h1 class="league-spartan-bold">
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_bloco_2', true)); ?>
                </h1>
                <p class="inria-sans-regular">
                    <?php
                    $texto2 = get_post_meta(get_the_ID(), 'texto_bloco_2', true);
                    if ($texto2) {
                        echo nl2br( esc_html( $texto2 ) );
                    }
                    ?>
                </p>
            </div>
            <img class="left" src="<?php echo esc_url(get_post_meta(get_the_ID(), 'imagem_2', true)); ?>" alt="">
        </div>
    </div>
</div>

<div class="grid-section-container white-bg">
    <div class="bigger-grid-section">
        <div class="grid inria-sans-font">
            <div class="left">
                <h1 class="league-spartan-bold"><?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_bloco_3', true)); ?></h1>
                <p class="inria-sans-regular"><?php echo esc_html(get_post_meta(get_the_ID(), 'texto_bloco_3', true)); ?></p>
            </div>
            <img class="right" src="<?php echo esc_url(get_post_meta(get_the_ID(), 'imagem_3', true)); ?>" alt="">
        </div>
    </div>
</div>

<div class="banner league-spartan-bold">
    <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_banner', true)); ?></h1>
</div>

<div class="how-it-works-container">
    <div class="how-it-works-grid">
        <div class="dots-container">
            <div class="dot">1.</div>
            <div class="dot">2.</div>
            <div class="dot">3.</div>
            <div class="dot">4.</div>
        </div>

        <hr>

        <div class="information-container inria-sans-font">
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="dot"><?php echo $i; ?>.</div>
                <div>
                    <h1 class="inria-sans-bold"><?php echo esc_html(get_post_meta(get_the_ID(), "etapa_{$i}_titulo", true)); ?></h1>
                    <p class="inria-sans-regular"><?php echo esc_html(get_post_meta(get_the_ID(), "etapa_{$i}_descricao", true)); ?></p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>