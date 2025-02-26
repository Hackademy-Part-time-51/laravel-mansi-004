<x-layout>
    <x-navbar />
    <!-- Testimonial section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="/invia-contatto">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text"
                                value="{{ old('name') }}" placeholder="Enter your name...">
                            <label for="name">Full name</label>
                            @error('name')
                                Nome Obbligatorio
                            @enderror
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control @error('email') is-invalid @enderror" id="email"
                                value="{{ old('email') }}" name="email" type="email"
                                placeholder="name@example.com" />
                            <label for="email">Email address</label>

                        </div>

                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..."
                                style="height: 10rem">{{ old('message') }}</textarea>
                            <label for="message">Message</label>

                        </div>


                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg " id="submitButton"
                                type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-layout>
