<x-guest-layout>
    <section class="login-content">
        <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
                <div class="col-lg-5">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center auth-content">
                                <div class="col-lg-13">

                                    <div class="p-4">                                  
                                        <img src="{{asset('images/login/01.png')}}" class="img-fluid image-right" alt="">   
                                        <p>Login to stay connected.</p>
                                        <x-auth-session-status class="mb-4" :status="session('status')"/>

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                                        <form method="POST" action="{{ route('login') }}" data-toggle="validator">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" id="email"
                                                               type="email" name="email" value="{{old('email')}}"
                                                               placeholder="" required>
                                                        <label style="height: fit-content;">Email<span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                        <input class="floating-input form-control" type="password"
                                                               placeholder="" name="password" required
                                                               autocomplete="current-password">
                                                        <label>Password<span class="text-danger">*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button>
                                            <p class="mt-3">
                                                Create an Account <a href="{{route('auth.register')}}"
                                                                     class="text-primary">Sign Up</a>
                                            </p>
                                        </form>
                                    </div>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
