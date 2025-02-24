<x-layout>
    <x-navbar />

    <!-- Features section-->

    <!-- Testimonial section-->

    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">From our blog</h2>
                        <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <x-card :article="$service"></x-card>
            </div>

        </div>
    </section>
</x-layout>
