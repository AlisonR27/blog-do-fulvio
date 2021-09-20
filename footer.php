<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
    <style>
      .footer-form {
        margin: 50px 0;
      }
      .footer-form h2 {
        margin-bottom: 10px;
      }
      .footer-form input, .footer-form textarea {
        background:white;
        padding: 5px 10px !important;
        margin-bottom:10px;
      }
      .footer-form input {
        height: 2.5rem !important;
      }
      .footer-form textarea {
        min-height: 6rem;
      }
      .footer-form input:focus, .footer-form textarea:focus {
        background: white;
      }
    </style>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
      <form action="" class="col-6 text-white footer-form">
        <h2>
          Contato
        </h2>
        <label for="nome">Qual o seu nome:</label>
        <input type="text" class="form-control">
        <label for="email">Qual o seu email:</label>
        <input type="email" class="form-control">
        <label for="nome">Sua mensagem:</label>
        <textarea type="text" class="form-control"></textarea>
        <button type="submit"> ENVIAR MENSAGEM </button>
      </form>
            <div class="site-info text-center">
              Blog do Fúlvio por <a href="https://agenciagaragem.com.br">Agência Garagem</a> - 2021 - © Todos os direitos reservados - <a href="#privacidade"> Acesse nossa política de privacidade </a>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>