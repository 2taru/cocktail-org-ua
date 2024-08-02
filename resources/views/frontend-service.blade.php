<x-layout doctitle="Фронт офіс | Касова програма"
    description="Фронт офіс для ресторанів, барів та кафе: зручна касова програма, 
    швидке обслуговування гостей, просте управління замовленнями та оплатами, 
    підтримка програмних РРО, адаптивний інтерфейс для ефективної роботи персоналу.">
    <!-- Header-->
    <header class="bg-dark py-4 shadow" style="--bs-bg-opacity: .7;">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center text-light my-5">
                        <h1 class="fw-bolder mb-3">Front Office</h1>
                        <p class="lead fw-normal text-light mb-4">
                            <b>Front Office</b> забезпечує безперебійне обслуговування клієнтів
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Content section one-->
    <section class="py-2 rounded-5 mx-3">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Легке керування</h2>
                    <p class="lead fw-normal text-dark mb-0 mt-3">Інтуїтивний інтерфейс для швидкого та зручного
                        оформлення замовлень.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Мобільність</h2>
                    <p class="lead fw-normal text-dark mb-0 mt-3">прийом замовлення та передача замовлення на необхідний
                        підрозділ не відходячи від столика, що пришвидшує процес обслуговування клієнта.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section two-->
    <section class="py-2 bg-light rounded-5 mx-3 shadow" id="scroll-target" style="--bs-bg-opacity: .4;">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center mt-3">
                <div class="col-lg-6 mt-2 order-first order-lg-last">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/pos01.jpg" class="d-block w-100" alt="Фото програми 1"
                                    title="cocktail-front-office-photo-1">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/pos02.jpg" class="d-block w-100" alt="Фото програми 2"
                                    title="cocktail-front-office-photo-2">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/pos03.jpg" class="d-block w-100" alt="Фото програми 3"
                                    title="cocktail-front-office-photo-3">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/pos04.jpg" class="d-block w-100" alt="Фото програми 4"
                                    title="cocktail-front-office-photo-4">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-underline mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active text-dark" id="table-accounting-tab" data-bs-toggle="tab"
                                href="#table-accounting" role="tab" aria-controls="table-accounting"
                                aria-selected="true">Облік столиків</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-dark" id="payment-and-settlements-tab" data-bs-toggle="tab"
                                href="#payment-and-settlements" role="tab" aria-controls="payment-and-settlements"
                                aria-selected="false">Оплата та розрахунки</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="table-accounting" role="tabpanel"
                            aria-labelledby="table-accounting-tab">
                            <h2 class="fw-bolder">Облік столиків</h2>
                            <p class="lead fw-normal text-dark mb-0 mt-3">Управління резервами та контроль зайнятості
                                столиків у реальному часі.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="payment-and-settlements" role="tabpanel"
                            aria-labelledby="payment-and-settlements-tab">
                            <h2 class="fw-bolder">Оплата та розрахунки</h2>
                            <p class="lead fw-normal text-dark mb-0 mt-3">Підтримка різних способів оплати, включаючи
                                готівку та оплату картою.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section three-->
    <section class="py-2 rounded-5 mx-3">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Примітки</h2>
                    <p class="lead fw-normal text-dark mb-0 mt-3">Можливість внесення приміток до страви, процесу
                        приготування чи терміну подачі
                    </p>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Доставка</h2>
                    <p class="lead fw-normal text-dark mb-0 mt-3"> Робота з онлайн-замовленнями : по телефону, чи через
                        додаток. Внесення інформації про клієнта,місце доставки та прийом замовлення.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
