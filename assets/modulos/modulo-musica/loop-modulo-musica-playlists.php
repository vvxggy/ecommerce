<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/prisa-chile/assets/modulos/modulo-musica/modulo-musica.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- contenido -->
<section class="mt-5 mb-5 caja-modulo-1 col-md-10">
    <h3 class="text-white pb-4 text-md-start text-center">Playlists de Spotify</h3>
    <div class="row">
        <?php 
            $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page = -1; // -1 shows all posts
            $args = array(
                'post_type' => 'musica',
                'orderby' => 'date',
                'order' => 'ASC',
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                // Aquí se registra la catergoría
                'tax_query'=> array (
                    array (
                        'taxonomy'=>'genero-musica',
                        'field'=>'slug',
                        'terms'=>'playlists',
                    ),
                ),
            );
            $wp_query = new WP_Query($args);

            if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="col-md col-12 d-flex justify-content-center flex-md-column mt-md-0 mt-5">
                    <div class="estilo-loop">
                    <?php spotify_post_thumbnail(); ?>
                        <div>
                            <h3><?php echo get_the_title();?></h3><br>
                            <p><?php echo get_the_excerpt();?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    </div>
</section>

<!------seccion contacto---->