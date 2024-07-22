<x-layout doctitle="Контакти">
    <!-- Page content-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact cards-->
            <div class="bg-light rounded-3 mb-3 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Зв'яжись з нами</h1>
                </div>
                <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                    <div class="col">
                        <div class="feature bg-gradient text-dark rounded-3 mb-3">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="h5">Зателефонуй нам</div>
                        <p class="text-muted mb-0">
                            Телефонуйте нам у звичайний робочий час за номером
                            <br> 050-743-9656
                            <br> 050-909-0109
                        </p>
                    </div>
                    <div class="col">
                        <div class="feature bg-gradient text-dark rounded-3 mb-3">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <div class="h5 mb-2">Напиши на електронну пошту</div>
                        <p class="text-muted mb-0">svl.skytek@gmail.com</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-gradient text-dark rounded-3 mb-3">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="h5">Прийди в офіс</div>
                        <p class="text-muted mb-0">м. Мукачево вул. Августина Штефана, 25 Офіс 12, 2 поверх</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-gradient text-dark rounded-3 mb-3">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <div class="h5">Центр підтримки</div>
                        <p class="text-muted mb-0">Перегляньте FAQ та статті підтримки, щоб знайти рішення.</p>
                    </div>
                </div>
            </div>

            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-3">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Задай своє питання</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text"
                                    placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                    data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                    data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                    required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                    style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                                </div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                                    type="submit">Надіслати</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
