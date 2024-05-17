@extends('welcome')
@section('content')
		<div class="container">
			<div class="sigin-sigup">
				<div id="login-form">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						<form action="{{URL::to('/login-customer')}}" method="POST">
                            {{csrf_field()}}
                            <div class="input-field">
                                <i class="fas fa-user"></i><input type="text" name="email_account" placeholder="Email" />
                            </div>

							<div class="input-field">
                                <i class="fas fa-lock"></i><input type="password" name="password_account" placeholder="Password" />
                            </div>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
                            <p class="social-text">Hoặc đăng nhập với:</p>
                            <div class="social-media">
                                <a href="" class="social-icon">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                            <p>Bạn chưa có tài khoản? <a href="#" id="switch-to-signup">Đăng kí</a></p>
						</form>
					</div><!--/login form-->
				</div>

				<div id="signup-form">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng kí</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
                            {{csrf_field()}}
							<div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="customer_name" placeholder="Họ và tên"/>
                            </div>
							<div class="input-field">
                                <i class="fas fa-envelope"></i> 
                                <input type="email"name="customer_email" placeholder="Địa chỉ email"/>
                            </div>
							<div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="customer_password"placeholder="Mật khẩu"/>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-phone"></i>
                                <input type="text" name="customer_phone"  placeholder="Phone"/>
                            </div>
							<button type="submit" class="btn btn-default">Đăng kí</button>

                            <p class="social-text">Hoặc đăng ký với:</p>
                            <div class="social-media">
                                <a href="" class="social-icon">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                            <p>Bạn đã có tài khoản? <a href="#" id="switch-to-login">Đăng nhập</a></p>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
@endsection