
@include('layout.layouts')

           <!--- section test  --->
            <div class="container mt-5">
                <div class ="row">
                    <div class="col-md-2">
                        <div class="clearfix">
                            <img src="{{ asset('images/raymondpassp.png') }}" class="col-md-6 float-md-end mb-3 ms-md-3" style="width: auto; height:250px;" alt="Mr. Machary" padding = "10px" >
                        </div>
                    </div>
            <div class="col-md-10" style="background-color: #dee2e6;">
                <p style="margin-top: 40px; margin-bottom: 9px; justify-content: center; text-align: left; padding=10px">
                    Bethsaida Secondary School, founded in 2005 under the Bethsaida Orphanage Education Centre, is a nonprofit institution with a mission to provide orphaned girls in Tanzania access to quality secondary education. The school was established in response to the overwhelming challenges girls face in obtaining education, particularly in underserved communities where access to schooling is limited or non-existent. By focusing on these vulnerable groups, Bethsaida seeks to bridge the gap and offer educational opportunities that would otherwise be out of reach.

                        Over the years, we have proudly seen over 400 students successfully graduate from our secondary school program...                                              <center><a class="btn btn-primary btn-lg px-4 me-sm-3 mt-3" href="#features">Read more..</a></center>
                </p>

            </div>


            </div>






            <!-- Features section-->

            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Services Offer by the Bethsaida Secondary School in Tanzania.</h2>
                            <p class="mb-5 mt-4 bg-info p-3 rounded-3">Bethsaida Secondary School is dedicated to empowering orphaned girls in Tanzania by providing quality education, a safe and supportive orphanage environment, and practical vocational training to help them build sustainable futures. Through our fundraising efforts, we ensure these girls have access to essential resources, education, and skills that enable them to break the cycle of poverty and thrive both academically and personally. <br>
                                </p>
                        </div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Fundrising</h2>
                                    <p class="mb-0">Bethsaida offers impactful fundraising services that support the education and welfare of orphaned girls in Tanzania, ensuring they have access to quality schooling and basic necessities. By partnering with donors, we create long-term opportunities for these girls to escape poverty and build brighter futures.</p>


                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Provide Education</h2>
                                    <p class="mb-0">Bethsaida is committed to providing quality education to orphaned girls in Tanzania, offering them the opportunity to pursue secondary education that would otherwise be out of reach. Our academic programs not only focus on traditional subjects but also foster critical thinking, leadership, and life skills, empowering these girls to build successful futures and contribute meaningfully to their communities.</div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5"> Orphanage Service</h2>
                                    <p class="mb-0">Bethsaida provides comprehensive orphanage services that offer a safe and nurturing environment for orphaned girls, ensuring their physical, emotional, and educational needs are met. Our holistic care model supports their growth and development, empowering them to thrive both in school and in life. </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Vocation Training</h2>
                                    <p class="mb-0">Bethsaida offers vocational training programs designed to equip orphaned girls with practical skills that prepare them for self-reliance and employment opportunities. These programs focus on empowering the girls with marketable skills, helping them build sustainable careers and break the cycle of poverty. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"I believe that quality education is a fundamental right and the key to transforming lives. With education, we can empower individuals and break the cycle of poverty. Through collective support, we can change the future for countless children around the world."</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="fw-bold">
                                        Raymond Machary
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        Chairman of the Centre
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">News and Update</h2>
                                <p class="lead fw-normal text-muted mb-5">Welcome to our website! We are excited to share the latest news and important updates about our school, highlighting the positive impact we're making in the lives of orphaned girls in Tanzania.</div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{asset('images/bethsaida004.jpg')}}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Exploring Tanzania's Rich History: A Visit to the Museum</h5></a>
                                    <p class="card-text mb-0">The students of Bethsaida recently visited a museum in Tanzania to explore the nation's rich history, focusing on tribal wars and their causes. This educational experience allowed them to engage with exhibits and ask questions, deepening their understanding of Tanzania's cultural heritage. </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="{{asset('images/busines_ico.png')}} " alt="..." width="50px" height="50px" />
                                            <div class="small">
                                                <div class="fw-bold">Raymond Machary</div>
                                                <div class="text-muted">October 11, 2024 &middot; 6 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{asset('images/bethsaida003.jpg')}}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Culture and Styles</h5></a>
                                    <p class="card-text mb-0">Creativity allows students to express themselves, develop their unique talents, and discover new interests. By fostering an environment that values innovation and artistic expression, we empower our students to take risks and embrace challenges, ultimately enhancing their overall personal growth and development. At Bethsaida, we believe that nurturing creativity is essential for cultivating confident individuals who can contribute positively to their communities and beyond.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="{{asset('images/busines_ico.png')}} " alt="..." width="50px" height="50px" />
                                            <div class="small">
                                                <div class="fw-bold">Raymond Machary</div>
                                                <div class="text-muted">October 11, 2024 &middot; 4 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{asset('images/bethsaida0002.jpg')}}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">The greate support for young energetic girls voluntee to build capacity to girls</h5></a>
                                    <p class="card-text mb-0">Recently, we had the great pleasure of hosting a group of energetic young women who visited our school to spend time with our students. Through their presence, our students gained valuable insights into leadership and management, learning important skills that will serve them well in the future. The interaction inspired and motivated our students, enriching their educational experience and broadening their perspectives.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="{{asset('images/busines_ico.png')}} " alt="..." width="50px" height="50px" />
                                            <div class="small">
                                                <div class="fw-bold">Raymond Machary</div>
                                                <div class="text-muted">October 11, 2024 &middot; 10 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Call to action-->
                    <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">Your will receive newsletter from us.</div>
                                <div class="text-white-50">Sign up for our newsletter for the latest updates of our school.</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                                </div>
                                <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; bethsaida Secondary School - 2024</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
