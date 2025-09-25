{{-- resources/views/auth/forgot-password.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            width: 400px;
            text-align: center;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
            background: linear-gradient(135deg, #fbfbfcff, #f9f9faff);
            color: black;
        }
        .card h2 {
            margin-bottom: 15px;
        }
        .card p {
            font-size: 14px;
            margin-bottom: 25px;
            color: #0a0a0aff;
        }
        .input-box {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 2px solid #999898ff;
            outline: none;
            font-size: 16px;
        }
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
              background: #2563eb;
            color: white;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn:hover {
              background: #fafafcff;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            color: #030303ff;
            text-decoration: none;
            font-size: 14px;
        }
        .back-link:hover {
            text-decoration: underline;
            color: #0a0a0aff;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Forgot Your Password?</h2>
        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        
        {{-- Form Laravel --}}
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <input type="email" name="email" class="input-box" placeholder="Email" required autofocus>
            <button type="submit" class="btn">Email Password Reset Link</button>
        </form>
        
        <a href="{{ route('login') }}" class="back-link">Back to login</a>
    </div>
</body>
</html>
