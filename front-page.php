<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sellon
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="page__container">
    <section class="hero">
      <div class="background-overlay"></div>
      <div class="hero-heading">
        <h2>Наша миссия:</h2>
        <div class="underline-heading"></div>
        <h2>продвижение экспортёров<br>
          на рынки СНГ, Европы, азии, <br>
          африки и америки.</h2>
      </div>
    </section>
    <section class="quote">
      <div class="container">
        <div class="container-row around">
          <div class="quote-icon"><svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" viewBox="0 0 24 24">
              <path
                d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
            </svg></div>
          <div class="quote-text">
            <p>«Возможность никогда не заинтересуется человеком, который сам не заинтересовался ею.</p>
            <p>— NAPOLEON HILL</p>
          </div>
        </div>
      </div>
    </section>
    <section class="services">
      <div class="container">
        <div class="container-row between">
          <div class="heading">
            <h2>наши сервисы</h2>
          </div>
        </div>
        <div class="container-row between">
          <div class="services-item">
            <div class="services-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/allbiz-1.jpg"
                alt="Размещение аккаунтов Клиентов на All.Biz">
            </div>
            <div class="services-caption">
              <p>Размещение аккаунтов Клиентов на All.Biz</p>
            </div>
          </div>
          <div class="services-item">
            <div class="services-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/allbiz-2.jpg"
                alt="Годовое сопровождение Клиентов на All.Biz">
            </div>
            <div class="services-caption">
              <p>Годовое сопровождение Клиентов на All.Biz</p>
            </div>
          </div>
        </div>
        <div class="container-row between">
          <div class="button-row">
            <div class="button">
              <a href="/about/services/">узнать больше</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="clients">
      <div class="container">
        <div class="container-row between column">
          <div class="heading">
            <h2>НАШИ КЛИЕНТЫ</h2>
          </div>
          <div class="heading-text">
            <p>Если Ваша компания заинтересована в привлечении покупателей как в ближнем так и дальнем зарубежье,
              заполните <a href="/questionnaire/">Анкету экспортера</a></p>
          </div>
        </div>
        <div class="container-row between">
          <div class="client-item">
            <div class="client-img">
              <a href="https://sellonexport.com/our-clients/"><img
                  src="<?php echo get_template_directory_uri(); ?>/images/client-1.jpg"
                  alt="Природная питьевая вода премиум-класса, минерально-столовая вода"></a>
            </div>
            <div class="client-heading">
              <h3>ЧИСТАЯ ВОДА</h3>
            </div>
            <div class="client-description">
              <p>природная питьевая вода премиум-класса, минерально-столовая вода</p>
            </div>
          </div>
          <div class="client-item">
            <div class="client-img">
              <a href="https://paperfoodface.com/"><img
                  src="<?php echo get_template_directory_uri(); ?>/images/client-2.jpg"
                  alt="Картонные тарелки, стаканчики, креманки, упаковка для фаст-фуда"></a>
            </div>
            <div class="client-heading">
              <h3>FOODFACE</h3>
            </div>
            <div class="client-description">
              <p>картонные тарелки, стаканчики, креманки, упаковка для фаст-фуда</p>
            </div>
          </div>
          <div class="client-item">
            <div class="client-img">
              <a href="https://tsbk-invest.com/"><img
                  src="<?php echo get_template_directory_uri(); ?>/images/client-3.jpg"
                  alt="Бумага, гофрослои, картон, лента креповая, шпагат"></a>
            </div>
            <div class="client-heading">
              <h3>ЦБК-ИНВЕСТ</h3>
            </div>
            <div class="client-description">
              <p>бумага, гофрослои, картон, лента креповая, шпагат</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-row between">
        <div class="button-row">
          <div class="button">
            <a href="/about/services/">смотреть все</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();