@extends('client.master')
@section('main-movie')
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="{{ asset('assets') }}/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">welcome</span>
                        <h2 class="title">to Boleto </h2>
                    </div>
                    <form class="account-form">
                        <div class="form-group">
                            <label for="email1">Email<span>*</span></label>
                            <input type="text" placeholder="Enter Your Email" id="email1" required>
                        </div>
                        <div class="form-group">
                            <label for="pass1">Password<span>*</span></label>
                            <input type="password" placeholder="Password" id="pass1" required>
                        </div>
                        <div class="form-group">
                            <label for="pass2">Confirm Password<span>*</span></label>
                            <input type="password" placeholder="Password" id="pass2" required>
                        </div>
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal" required checked>
                            <label for="bal">I agree to the <a href="#0">Terms, Privacy Policy</a> and <a
                                    href="#0">Fees</a></label>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Sign Up">
                        </div>
                    </form>
                    <div class="option">
                        Already have an account? <a href="{{ route('FormSignIn') }}">Login</a>
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
