<section class="parallax-section">
    <div class="parallax-background"></div>

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h2 class="mb-2">Запишитесь на бесплатную консультацию в нашем салоне</h2>
                <p>На консультации Вы узнаете:</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex d-lg-block text-center text-lg-center align-items-center">
                    <div class="mb-0 mb-lg-3 me-3 me-lg-0 flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/icon1.svg" alt="Увидите все на современных образцах" class="img-fluid">
                    </div>
                    <p class="mb-0 text-start text-lg-center">Увидите все на современных образцах выполнения мебели</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="d-flex d-lg-block text-center text-lg-center align-items-center">
                    <div class="mb-0 mb-lg-3 me-3 me-lg-0 flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/icon2.svg" alt="Узнаете преимущества и недостатки" class="img-fluid">
                    </div>
                    <p class="mb-0 text-start text-lg-center">Узнаете преимущества и недостатки всех материалов</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="d-flex d-lg-block text-center text-lg-center align-items-center">
                    <div class="mb-0 mb-lg-3 me-3 me-lg-0 flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/icon3.svg" alt="Узнаете реальную стоимость" class="img-fluid">
                    </div>
                    <p class="mb-0 text-start text-lg-center">Узнаете реальную стоимость проэма изготовления</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="d-flex d-lg-block text-center text-lg-center align-items-center">
                    <div class="mb-0 mb-lg-3 me-3 me-lg-0 flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/icon4.svg" alt="Получите ответы" class="img-fluid">
                    </div>
                    <p class="mb-0 text-start text-lg-center">Получите ответы на все свои вопросы</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#callbackModalConsul">Рассчитать стоимость</a>
            </div>
        </div>
    </div>
</section>

<style>
    .parallax-section {
        position: relative;
        min-height: 470px;
        display: flex;
        align-items: center;
        padding: 60px 0;
        overflow: hidden;
    }

    .parallax-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/paralax.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        z-index: -1;
    }
</style>