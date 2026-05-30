<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Shubhanu Eye Hospital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .checkvalidate {
        text-align: center;
        color: #05beff;
        font-weight: bold;
        margin-top: 15px;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #050505;
        overflow: hidden;
        position: relative;
        color: white;
    }

    .text-danger {
        font-size: 14px;
        color: red;
        font-weight: bold;
        position: relative;
        top: 4px;
        left: 2px;
    }

    body::before,
    body::after {
        content: "";
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        filter: blur(120px);
        opacity: 0.25;
        animation: move 10s infinite alternate ease-in-out;
    }

    body::before {
        background: #00c3ff;
        top: -150px;
        left: -100px;
    }

    body::after {
        background: #8b5cf6;
        bottom: -150px;
        right: -100px;
        animation-delay: 2s;
    }

    @keyframes move {
        from {
            transform: translateY(0px) translateX(0px);
        }

        to {
            transform: translateY(40px) translateX(30px);
        }
    }

    .container {
        width: 900px;
        max-width: 95%;
        min-height: 560px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(18px);
        border-radius: 24px;
        overflow: hidden;
        position: relative;
        display: flex;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
        animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .left-panel {
        width: 50%;
        background: linear-gradient(135deg, #111111, #1b1b1b);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
        position: relative;
    }

    .logo-box {
        width: 300px;
        height: 120px;
        border: 2px dashed rgba(255, 255, 255, 0.3);
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 25px;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.03);
    }

    .logo-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .logo-placeholder {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.5);
        text-align: center;
        padding: 10px;
    }

    .left-panel h1 {
        font-size: 36px;
        margin-bottom: 12px;
        text-align: center;
    }

    .left-panel p {
        color: rgba(255, 255, 255, 0.7);
        text-align: center;
        line-height: 1.7;
        max-width: 320px;
    }

    .right-panel {
        width: 50%;
        padding: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .form-container {
        width: 100%;
        max-width: 340px;
        transition: 0.4s ease;
    }

    .form-container h2 {
        margin-bottom: 25px;
        font-size: 28px;
    }

    .input-group {
        margin-bottom: 18px;
    }

    .input-group input {
        width: 100%;
        padding: 14px 16px;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        background: rgba(255, 255, 255, 0.05);
        color: white;
        outline: none;
        transition: 0.3s;
    }

    .input-group input:focus {
        border-color: #00c3ff;
        box-shadow: 0 0 12px rgba(0, 195, 255, 0.4);
    }

    .input-group input::placeholder {
        color: rgba(255, 255, 255, 0.45);
    }

    .btn {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, #00c3ff, #8b5cf6);
        color: white;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        margin-top: 10px;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(0, 195, 255, 0.25);
    }

    .switch-text {
        margin-top: 20px;
        text-align: center;
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
    }

    .switch-text span {
        color: #00c3ff;
        cursor: pointer;
        font-weight: 600;
    }

    .hidden {
        display: none;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            min-height: auto;
        }

        .left-panel,
        .right-panel {
            width: 100%;
        }

        .left-panel {
            padding: 35px 25px;
        }

        .right-panel {
            padding: 35px 25px 45px;
        }

        .left-panel h1 {
            font-size: 28px;
        }
    }
    </style>
</head>

<body>

    <div class="container">

        <div class="left-panel">
            <div class="logo-box">
                <!-- Replace this with your logo -->
                <!-- Example: <img src="logo.png" alt="Company Logo"> -->
                <div class="logo-placeholder">
                    <img src="/assets/logo.png" alt="logo" width="100%">
                </div>
            </div>

            <h1>Welcome Back</h1>
            <p>
                Secure login and modern authentication interface with dark UI and smooth animations.
            </p>
        </div>

        <div class="right-panel">

            <!-- Login Form -->
            <div class="form-container" id="loginForm">
                <h2>Sign In</h2>
                <form action="" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="email" placeholder="Email Address" name="uemail" autocomplete="off" required>
                    </div>

                    <div class="input-group">
                        <input type="password" placeholder="Password" name="upassword" autocomplete="new-password"
                            required>
                    </div>
                    <button class="btn" type="submit" value="login">Login</button>
                </form>
                <div class="switch-text">
                    Don't have an account?
                    <span onclick="showSignup()">Sign Up</span>
                </div>
                @if(session('success'))
                <div class="text-success fw-bold checkvalidate mt-3" style="text-align:center">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('fail'))
                <div class="text-danger fw-bold checkvalidate mt-3" style="text-align:center">
                    {{ session('fail') }}
                </div>
                @endif
            </div>

            <!-- Signup Form -->
            <div class="form-container hidden" id="signupForm">
                <h2>Create Account</h2>
                <form action="" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" placeholder="Full Name" name="uname" autocomplete="off">
                        @error('uname')
                        <span class="text-danger text-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <input type="email" placeholder="Email Address" name="uemail" autocomplete="off">
                        @error('uemail')
                        <span class="text-danger text-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group">
                        <input type="password" placeholder="Password" name="upassword" autocomplete="new-password">
                        @error('upassword')
                        <span class="text-danger text-bold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Confirm Password" name="upassword_confirmation"
                            autocomplete="new-password">
                        @error('upassword_confirmation')
                        <span class="text-danger text-bold">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn" type="submit" id="createuser" value="register">Create Account</button>
                </form>

                <div class="switch-text">
                    Already have an account?
                    <span onclick="showLogin()">Login</span>
                </div>
            </div>
        </div>
    </div>

    <script>
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');

    function showSignup() {
        loginForm.classList.add('hidden');
        signupForm.classList.remove('hidden');
    }

    function showLogin() {
        signupForm.classList.add('hidden');
        loginForm.classList.remove('hidden');
    }
    </script>

</body>

</html>