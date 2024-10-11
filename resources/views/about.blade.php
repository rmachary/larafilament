@include('layout.layouts')


            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Welcome to Bethsaida Girls Secondary School</h1>
                                <p class="lead fw-normal text-muted mb-4">Bethsaida Secondary School was established through the Bethsaida Orphanage Education Centre (BOEC) and has successfully graduated over 400 students since its inception. Primarily serving orphaned girls, the school is widely regarded as one of the best secondary schools in Tanzania. Although its operations heavily depend on donations, various strategies are being implemented to ensure its future sustainability, allowing the school to thrive and continue providing quality education to its students.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one-->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{asset('images/logoNGO.jpg')}}" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Bethsaida Education Foundation "NGO of the School"</h2>
                            <p class="lead fw-normal text-muted mb-0">Bethsaida Education Foundation is the NGO for the school with the aim to raise funds to support the school projects in order  to ensure the school's sustainability. You may access our NGO through our Website: www.bethsaida.or.tz </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{asset('images/shuleLog.jpg')}}" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Bethsaida Secondary School</h2>
                            <p class="lead fw-normal text-muted mb-0">Bethsaida Secondary School has the capacity to accommodate 200 students based on its current resources. However, there are only 113 students enrolled at the moment. The school has struggled to meet its enrollment target due to financial constraints, particularly concerning food and other basic needs for the students. Additionally, since its inception, no major rehabilitation has been undertaken at the school..</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team members section-->

        </main>
        @include('layout.layour2')
