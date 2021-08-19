<?php get_header();

global $porto_settings;
?>

<div id="content" class="no-content">
  <div class="container">
    <section class="page-not-found">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-not-found-main">
			<h3 class="err_cust">ой, что-то случилось</h3>
            <div class="bg-404-cust">
              <picture class="bg-404__img-cust">
<!--                 <source media="(min-width: 992px)" srcset="/wp-content/uploads/2019/07/404-bg.png">
                <source media="(min-width: 320px)" srcset="/wp-content/uploads/2019/07/404-bg-992.png"> -->
                <img src="/wp-content/uploads/2019/09/404.png" style="width:auto;">
              </picture>
            </div>
			<h2 class="err_cust">Ошибка</h2>
            <div class="bottom-text-cust">
              <p class="description-cust"><span>К сожалению, страница которую вы искали не найдена, или была удалена.</span><span>Попробуйте найти нужную информацию на нашем сайте.</span></p>
              <div class="vc_btn3-container  main-button blue-button vc_btn3-center btn-404 custom-btn blue">
                <a href="<?=home_url()?>" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-default vc_btn3-style-classic vc_btn3-color-default btn link-with-pseudo">вернуться на главную</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<?php get_footer(); ?>