<x-layout>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">Фронтенд офіс</h1>
                        {{-- <p class="lead fw-normal text-muted mb-4">
                            Керувати закладом ще ніколи не було так просто зі
                            зручним бек-офісом у браузері вашого комп’ютера. Маючи доступ до детальної статистики, ви
                            можете точно планувати закупівлі, розраховувати навантаження. За рахунок оптимізації меню та
                            складу уникаєте зайвих витрат. Розшируєте коло постійних гостей завдяки програмі лояльності.
                            Контролюйте роботу працівників.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About section-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Простий інтерфейс</h2>
                    <p class="lead fw-normal text-muted mb-3">Тривале навчання не потрібне – офіціанти зможуть працювати
                        в програмі одразу ж після встановлення.
                        <br />
                        Може працювати як на звичайному або сенсорному екрані, так і на мобільних пристроях. Офіціанти
                        зможуть керувати замовленнями не відходячи від гостей.
                    </p>
                    <h2 class="fw-bolder">Мапи залів</h2>
                    <p class="lead fw-normal text-muted mb-3">Для зручного і швидкого обслуговування в програмі можна
                        власноруч створити карту кожного залу зі столиками.
                        <br />
                        Для полегшення роботи персоналу передбачена візуальна індикація "своїх" та "чужих" столів.
                    </p>
                </div>
                <div class="col-lg-6 mt-2">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/pos01.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/pos02.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/pos03.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/pos04.jpg" class="d-block w-100" alt="...">
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

            </div>
        </div>
    </section>
</x-layout>
