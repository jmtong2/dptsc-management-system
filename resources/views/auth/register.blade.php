<x-guest-layout>
    <section class="login-content">
        <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
                <div class="col-lg-8">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-7 align-self-center">
                                    <div class="p-3">
                                        <h2 class="mb-2">Sign Up</h2>
                                        <p>Create your ReservationSystem account.</p>
                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')"/>

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                                        <form method="POST" action="{{ route('register') }}" data-toggle="validator">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" id="name"
                                                               name="first_name" value="{{old('first_name')}}"
                                                               class="form-control" type="text" placeholder=" "
                                                               required>
                                                        <label>Full Name<span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" type="text"
                                                               name="last_name" placeholder=" "
                                                               value="{{old('last_name')}}" required>
                                                        <label>Last Name<span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" type="email"
                                                               placeholder=" " id="email" name="email"
                                                               value="{{old('email')}}" required>
                                                        <label>Email<span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" type="text"
                                                               name="phone_number" placeholder=" ">
                                                        <label>Phone No.<span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" type="password"
                                                               placeholder=" " id="password" name="password" required
                                                               autocomplete="new-password">
                                                        <label>Password<span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" type="password"
                                                               placeholder=" " name="password_confirmation" required>
                                                        <label>Confirm Password<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">I agree
                                                            with the terms of use<span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary"> {{ __('sign up') }}</button>
                                            <p class="mt-3">
                                                Already have an Account <a href="{{route('auth.login')}}"
                                                                           class="text-primary">Sign In</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 content-right">
                                    <img src="{{asset('images/login/01.png')}}" class="img-fluid image-right" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
