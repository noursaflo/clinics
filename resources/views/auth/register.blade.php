
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        overflow: hidden;
    }

    .wave {
        position: fixed;
        bottom: 0;
        left: 0;
        height: 100%;
        z-index: -1;
    }

    .container {
        width: 100vw;
        height: 100vh;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 7rem;
        padding: 0 2rem;
    }

    input {
        direction: rtl;
        text-align: right;

    }

    .img {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .login-content {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        text-align: center;
    }

    .img img {
        width: 500px;
    }

    form {
        width: 360px;
    }

    .login-content img {
        height: 100px;
    }

    .login-content h2 {
        margin: 15px 0;
        color: #333;
        text-transform: uppercase;
        font-size: 2.9rem;
    }

    .login-content .input-div {
        position: relative;
        display: grid;
        grid-template-columns: 7% 93%;
        margin: 25px 0;
        padding: 5px 0;
        border-bottom: 2px solid #d9d9d9;
        direction: rtl;

    }

    .login-content .input-div.one {
        margin-top: 0;
    }

    .i {
        color: #d9d9d9;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .i i {
        transition: .3s;
    }

    .input-div>div {
        position: relative;
        height: 45px;
    }

    .input-div>div>h5 {
        text-align: right;
        direction: rtl;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 18px;
        transition: .3s;
    }

    .input-div:before,
    .input-div:after {
        content: '';
        position: absolute;
        bottom: -2px;
        width: 0%;
        height: 2px;
        background-color: #38d39f;
        transition: .4s;
    }

    .input-div:before {
        right: 50%;
    }

    .input-div:after {
        left: 50%;
    }

    .input-div.focus:before,
    .input-div.focus:after {
        width: 50%;
    }

    .input-div.focus>div>h5 {
        top: -5px;
        font-size: 15px;
    }

    .input-div.focus>.i>i {
        color: #38d39f;
    }

    .input-div>div>input {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: none;
        outline: none;
        background: none;
        padding: 0.5rem 0.7rem;
        font-size: 1.2rem;
        color: #555;
        font-family: 'poppins', sans-serif;
    }

    .input-div.pass {
        margin-bottom: 4px;
    }

    a {
        display: block;
        text-align: right;
        text-decoration: none;
        color: #999;
        font-size: 0.9rem;
        transition: .3s;
    }

    a:hover {
        color: #38d39f;
    }

    .btn {
        display: block;
        width: 100%;
        height: 50px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
        background-size: 200%;
        font-size: 1.2rem;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: .5s;
    }

    .btn:hover {
        background-position: right;
    }


    @media screen and (max-width: 1050px) {
        .container {
            grid-gap: 5rem;
        }
    }

    @media screen and (max-width: 1000px) {
        form {
            width: 290px;
        }

        .login-content h2 {
            font-size: 2.4rem;
            margin: 8px 0;
        }

        .img img {
            width: 400px;
        }
    }

    @media screen and (max-width: 900px) {
        .container {
            grid-template-columns: 1fr;
        }

        .img {
            display: none;
        }

        .wave {
            display: none;
        }

        .login-content {
            justify-content: center;
        }
    }
    #subheader {
   width: 100%;
   color: #fff;
   margin-bottom: 5%;
   background: #fffff;
}

#subheader {
   font-size: 25px;
   padding: 0px 25px 0px 50px !important;
}

.left {
   margin-top: 1.5%;
}

#subheader .row {
   display: flex;
   justify-content: space-between;
}
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
<link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!--Sub-Header-->
    <div id="subheader">
        <div class="row">
            <a href="back"><i class="fas fa-arrow-left" style="color:#38d39f"></i></a>
        </div>
    </div>
        <!---->
<img class="wave" src="images/wave.png">
<div class="container">
    <div class="img">
        <img src="images/bg.svg">
    </div>
    <div class="login-content">
            <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <img src="images/avatar.svg">
                    <h2 class="title">{{ __('تسجيل دخول') }}</h2>
        
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5 for="name">{{ __('الاسم') }}</h5>
                            <input id="name" type="text" class="input  @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
        
                        </div>
                    </div>
        
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="div">
                            <h5 for="email">{{ __('البريد الالكتروني') }}</h5>
                            <input id="email" type="email" class="input S @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5 for="password">{{ __('كلمة المرور') }}</h5>
                            <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5 for="password-confirm">{{ __('تأكيد كلمة المرور') }}</h5>
                            <input id="password-confirm" type="password" class="input form-control" name="password_confirmation"
                                required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
        
                    <button type="submit" class="btn btn-primary">
                        {{ __('تسجيل') }}
                    </button>
        </form>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
