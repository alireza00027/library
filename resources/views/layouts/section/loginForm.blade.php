{{-- <div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>ورود</h3>
        <span>نام کاربری</span>
        <input type="email" name="" class="box" placeholder="ایمیل خود را وارد کنید" id="">
        <span>رمز عبور</span>
        <input type="password" name="" class="box" placeholder="رمز عبور خود را وارد کنید" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> به خاطر سپردن</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>رمز خود را فراموش کرده اید ؟ <a href="#">اینجا کلیک کنید</a></p>
        <p>ثبت نام نکرده اید ؟ <a href="{{route('register')}}">ساخت حساب</a></p>
    </form>

</div> --}}
<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h3>ورود</h3>
        <span>ایمیل</span>
        <input type="email" name="email" class="box" placeholder="ایمیل خود را وارد کنید" id="">
        <span>رمز عبور</span>
        <input type="password" name="password" class="box" placeholder="رمز عبور خود را وارد کنید" id="">
        <input type="submit" value="ورود" class="BTN">
        <p>رمز خود را فراموش کرده اید ؟ <a href="{{route('password.request')}}">اینجا کلیک کنید</a></p>
        <p>ثبت نام نکرده اید ؟ <a href="{{route('register')}}">ساخت حساب</a></p>
    </form>

</div>