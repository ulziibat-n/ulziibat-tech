<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ulziibat-tech
 */

get_header();
?>

	<section id="primary" class="flex flex-col justify-center grow ">
		<main id="main" class="">

			<div class="container">
				<div class="flex flex-col max-w-lg gap-12 py-20">
					<header class="block">
						<h1 class="text-6xl font-black text-white"><?php esc_html_e( 'Хуудас олдсонгүй', 'ulziibat-tech' ); ?></h1>
					</header><!-- .page-header -->
					<div class="flex flex-col items-start gap-8">
						<p class="text-white"><?php esc_html_e( 'Энэ хуудас олдсонгүй. Устгагдсан эсвэл нэр өөрчлөгдсөн байж магадгүй, эсвэл хэзээ ч байгаагүй байж болно.', 'ulziibat-tech' ); ?></p>
						<a class="px-6 py-2 text-sm font-semibold no-underline transition-colors duration-300 bg-white rounded-full text-zinc-700 hover:bg-lime-500 hover:text-white ease-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Эхлэл хуудас', 'ulziibat-tech' ); ?></a>
					</div><!-- .page-content -->
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
