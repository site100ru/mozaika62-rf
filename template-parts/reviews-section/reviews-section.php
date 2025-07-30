<?php
/**
 * Template: Секция "Отзывы о нас в независимых источниках"
 * Файл: template-parts/reviews-section/reviews-section.php
 * Описание: Отдельная секция для отображения отзывов клиентов салона
 */
?>

<!-- Reviews section -->
<section class="reviews-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col text-center pb-5">
              <div class="col text-md-center">
                <h2>Отзывы о нас в независимых источниках</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-title-dec.svg">	
            </div>
        </div>

        <div class="row">
            <div class="col text-center pb-4">
              <div class="col text-md-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/yandex-logo.svg" class="mb-3">	
                <div class="review-rating mb-3 d-flex align-items-end justify-content-center gap-4">
                    <div>
                      <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                      <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                      <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                      <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                      <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                    </div>
                    <p class="mb-0" style="font-size: 18px">4,9 из 5</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Отзыв 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="review-card rounded h-100">
                    <!-- Фото и информация о клиенте -->
                    <div class="review-header d-flex align-items-center mb-3">
                        <div class="review-photo me-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/icon-1.png" 
                                 alt="Ульяна Нехорошкова" 
                                 class="rounded-circle" 
                                 width="50" 
                                 height="50">
                        </div>
                        <div class="review-info">
                            <p class="review-title mb-0">Ульяна Нехорошкова</p>
                            <p class="review-date text-muted small mb-0">18 июля 2025</p>
                        </div>
                    </div>
                    
                    <!-- Звездочки -->
                    <div class="review-rating mb-3">
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                    </div>
                    
                    <!-- Текст отзыва -->
                    <div class="review-text">
                        <p class="review-description">Наши планы по ремонту сдвинулись, и я взяла шикарную кухню в магазине. Вся моя семья в восторге! Как начну готовить, так все в очереди стоят, чтобы попробовать!</p>
                    </div>
                </div>
            </div>
            
            <!-- Отзыв 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="review-card rounded h-100">
                    <!-- Фото и информация о клиенте -->
                    <div class="review-header d-flex align-items-center mb-3">
                        <div class="review-photo me-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/icon-2.png" 
                                 alt="Егор" 
                                 class="rounded-circle" 
                                 width="50" 
                                 height="50">
                        </div>
                        <div class="review-info">
                            <p class="review-title mb-0">Егор</p>
                            <p class="review-date text-muted small mb-0">14 июля 2025</p>
                        </div>
                    </div>
                    
                    <!-- Звездочки -->
                    <div class="review-rating mb-3">
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                    </div>
                    
                    <!-- Текст отзыва -->
                    <div class="review-text">
                        <p class="review-description">Спасибо за мою новую кухню! Дизайн, функциональность и качество – всё на 5+. Особенно радует вместительность шкафов и удобная рабочая зона.</p>
                    </div>
                </div>
            </div>
            
            <!-- Отзыв 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="review-card rounded h-100">
                    <!-- Фото и информация о клиенте -->
                    <div class="review-header d-flex align-items-center mb-3">
                        <div class="review-photo me-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/icon-3.png" 
                                 alt="Лена Шагдурова" 
                                 class="rounded-circle" 
                                 width="50" 
                                 height="50">
                        </div>
                        <div class="review-info">
                            <p class="review-title mb-0">Лена Шагдурова</p>
                            <p class="review-date text-muted small mb-0">26 апреля 2025</p>
                        </div>
                    </div>
                    
                    <!-- Звездочки -->
                    <div class="review-rating mb-3">
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                        <i class="star-filled"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/stars.svg" alt="stars"></i>
                    </div>
                    
                    <!-- Текст отзыва -->
                    <div class="review-text">
                        <p class="review-description">Очень довольны покупкой новой кухни! Она получилась не только красивой но и удобной. Всё элементы были качественно собраны дополнительно установили встроенную технику и теперь ... <a href="https://yandex.ru/profile/89191942001" style="text-decoration: none; color: #323232; font-weight: 500; font-family: 'Gilroy-Medium';">читать еще</a></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Кнопка "Показать все отзывы" -->
        <div class="row text-center mt-4">
            <div class="col">
                <a href="https://yandex.ru/profile/89191942001" class="btn btn-lg btn-corporate-color-1 px-4 mx-3">Все отзывы</a>
            </div>
        </div>
    </div>
</section>
<!-- /Reviews section -->