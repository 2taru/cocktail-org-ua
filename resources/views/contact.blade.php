<x-layout doctitle="Контактна інформація"
    description="Контактна інформація для зв'язку з нами: адреса офісу, телефон, 
    електронна пошта, години роботи та посилання на соціальні мережі. Ми завжди раді 
    допомогти вам з питаннями щодо нашого програмного забезпечення для ресторанів, барів та кафе.">

    <section class="py-2 bg-light rounded-5 m-3 shadow" id="scroll-target" style="--bs-bg-opacity: .4;">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h1 class="fw-bolder">Контактна інформація</h1>
            </div>
            <div class="container">
                <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-start">

                    <!-- Info section -->
                    <div class="col-12 col-lg-6 mt-5">
                        <div class="row justify-content-xl-center">
                            <div class="col-12 col-xl-11">
                                <div class="mb-4 mb-md-5">
                                    <div class="mb-3 text-secondary">
                                        <i class="bi bi-geo h2"></i>
                                    </div>
                                    <div>
                                        <h3 class="mb-2 h4">Офіс</h3>
                                        <p class="mb-2">Завітайте в наші офіси для консультації.</p>
                                        <hr class="w-50 mb-3 border-dark-subtle">
                                        <address class="m-0 text-secondary"><b>м. Свалява</b> вул. Головна 35/1
                                        </address>
                                        <address class="m-0 text-secondary"><b>м. Мукачево</b> вул. Августина Штефана
                                            25, Офіс 9, 2 поверх</address>
                                        <address class="m-0 text-secondary"><b>м. Берегове</b> вул. Богдана
                                            Хмельницького, 14</address>
                                        <address class="m-0 text-secondary"><b>м. Іршава</b> вул. Поштова, 4/1
                                        </address>
                                        <address class="m-0 text-secondary"><b>с. Кушниця</b> вул. Центральна, 35
                                        </address>
                                    </div>
                                </div>
                                <div class="row mb-sm-4 mb-md-5">
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-4 mb-sm-0">
                                            <div class="mb-3 text-secondary">
                                                <i class="bi bi-telephone-outbound h2"></i>
                                            </div>
                                            <div>
                                                <h3 class="mb-2 h4">Телефон</h3>
                                                <p class="mb-2">Зателефонуйте та поговоріть з нами безпосередньо.</p>
                                                <hr class="w-75 mb-3 border-dark-subtle">
                                                <p class="mb-0">
                                                    <a class="link-secondary text-decoration-none"
                                                        href="tel:+380509090109">+38 050 90 90 109</a>
                                                    <br />
                                                    <a class="link-secondary text-decoration-none"
                                                        href="tel:+380679099109">+38 067 90 99 109</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-4 mb-sm-0">
                                            <div class="mb-3 text-secondary">
                                                <i class="bi bi-people h2"></i>
                                            </div>
                                            <div>
                                                <h3 class="mb-2 h4">Соціальні мережі</h3>
                                                <p class="mb-2">Підпишіться, щоб бути в курсі останніх новин.</p>
                                                <hr class="w-75 mb-3 border-dark-subtle">
                                                <p class="mb-0">
                                                    <a class="link-secondary text-decoration-none"
                                                        href="https://www.instagram.com/skytek.svl?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                                                        <i class="bi bi-instagram"></i> skytek.svl</a>
                                                    <br />
                                                    <a class="link-secondary text-decoration-none"
                                                        href="https://www.facebook.com/cboskytek">
                                                        <i class="bi bi-facebook"></i> cboskytek</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3 text-secondary">
                                        <i class="bi bi-alarm h2"></i>
                                    </div>
                                    <div>
                                        <h3 class="mb-2 h4">Години роботи</h3>
                                        <p class="mb-2">Ознайомтеся з графіком роботи нашої компанії.</p>
                                        <hr class="w-50 mb-3 border-dark-subtle">
                                        <div class="d-flex mb-1">
                                            <p class="text-secondary fw-bold mb-0 me-5">Пн - Пт</p>
                                            <p class="text-secondary mb-0">09.00 - 17.00</p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="text-secondary fw-bold mb-0 me-5">Сб - Нд</p>
                                            <p class="text-secondary mb-0">Вихідні</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact us form -->
                    <div class="col-12 col-lg-6 mt-5">
                        <div class="overflow-hidden">
                            <div class="mb-3 mx-xl-3 mx-lg-3 text-secondary">
                                <i class="bi bi-question-circle h2"></i>
                            </div>
                            <h2 class="h4 mb-3 mx-xl-3 mx-lg-3">Задайте своє питання</h2>
                            <form action="/contact/send-email" method="POST">
                                @csrf
                                <div class="row gy-3 gy-xl-4 mx-xl-1 mx-lg-1">
                                    <div class="col-12">
                                        <label for="fullname" class="form-label">Повне Ім'я <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                            value="{{ old('fullname') }}">
                                        @error('fullname')
                                            <p class="m-0 mt-2 small alert alert-danger shadow-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-envelope"></i>
                                            </span>
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <p class="m-0 mt-2 small alert alert-danger shadow-sm">{{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="phone" class="form-label">Номер телефону</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-telephone"></i>
                                            </span>
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                value="{{ old('phone') }}">
                                            @error('phone')
                                                <p class="m-0 mt-2 small alert alert-danger shadow-sm">{{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Тема <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            value="{{ old('subject') }}">
                                        @error('subject')
                                            <p class="m-0 mt-2 small alert alert-danger shadow-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Повідомлення <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                                        @error('message')
                                            <p class="m-0 mt-2 small alert alert-danger shadow-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-secondary btn-lg" type="submit">Надіслати</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
