<x-layout doctitle="Гість | Функціонал замовлення від гостя"
    description="Функціонал замовлення від гостя забезпечує комфорт і зручність обслуговування: 
    мобільні замовлення через QR-коди, інтерактивне онлайн-меню, зміна замовлення в реальному часі, 
    попереднє замовлення, та персоналізація з урахуванням побажань гостей.">
    <!-- Header-->
    <header class="bg-dark py-4 shadow" style="--bs-bg-opacity: .7;">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center text-light my-5">
                        <h1 class="fw-bolder mb-3">Гість</h1>
                        <p class="lead fw-normal text-light mb-4">
                            <b> Замовлення від гостя</b> робить обслуговування більш комфортним та зручним
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
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded-4 mb-5 mb-lg-0"
                        src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Мобільне замовлення</h2>
                    <p class="lead fw-normal text-dark mb-0 mt-3">Гості можуть замовляти зі своїх мобільних пристроїв,
                        скануючи QR-код на столі.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section two-->
    <section class="py-2 bg-light rounded-5 mx-3 shadow" id="scroll-target" style="--bs-bg-opacity: .4;">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center mt-3">
                <div class="col-lg-6 mt-2 order-firs">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://dummyimage.com/600x400/343a40/6c757d" class="d-block w-100" alt="Фото програми 1"
                                    title="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://dummyimage.com/600x400/343a40/6c757d" class="d-block w-100" alt="Фото програми 1"
                                    title="...">
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
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <ul class="nav nav-underline mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active text-dark" id="online-menu-tab" data-bs-toggle="tab"
                                href="#online-menu" role="tab" aria-controls="online-menu"
                                aria-selected="true">Онлайн-меню</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-dark" id="order-tab" data-bs-toggle="tab" href="#order"
                                role="tab" aria-controls="order" aria-selected="false">Вибір/зміна замовлення</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="online-menu" role="tabpanel"
                            aria-labelledby="online-menu-tab">
                            <h2 class="fw-bolder">Онлайн-меню</h2>
                            <p class="lead fw-normal text-dark mb-0 mt-3">Доступ до інтерактивного меню з детальними
                                описами та фотографіями страв.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                            <h2 class="fw-bolder">Вибір та зміна замовлення</h2>
                            <p class="lead fw-normal text-dark mb-0 mt-3">Гості можуть додавати або змінювати
                                замовлення в реальному часі.</p>
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
                    <h2 class="fw-bolder">Попереднє замовлення</h2>
                    <p class="lead fw-normal text-dark mb-0 mt-3">Можливість робити замовлення заздалегідь, щоб
                        отримати
                        страви до приходу в заклад.
                    </p>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-sm-5 mt-5">
                    <h2 class="fw-bolder">Персоналізація замовлення</h2>
                    <p class="lead fw-normal text-dark mb-0 mt-3">Опція залишати побажання або коментарі до замовлень,
                        враховуючи алергії або інші переваги.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
