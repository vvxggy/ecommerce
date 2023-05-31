<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/ecommerce/assets/modulos/modulo-producto/modulo-musica.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- contenido -->
<section class="mt-5 mb-5 col-md-10">
    <div class="row">
        <?php 
            $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page = -1; // -1 shows all posts
            $args = array(
                'post_type' => 'product',
                'orderby' => 'date',
                'order' => 'ASC',
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
            );
            $wp_query = new WP_Query($args);

            if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <div class="col-md">
                    <?php wc_get_template_part('content', 'product');?>
                </div>
            <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
            
    </div>
</section>

<!------seccion contacto---->