<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .register-wrapper {
            width: 100%;
            max-width: 480px;
        }
        
        .register-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            position: relative;
        }
        
        .register-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
            background-size: 200% 100%;
            animation: shimmer 3s ease infinite;
        }
        
        @keyframes shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        .register-header {
            padding: 35px 40px 25px;
            text-align: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
        }
        
        .register-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }
        
        .register-icon i {
            font-size: 2.5rem;
            color: white;
        }
        
        .register-header h2 {
            color: #1f2937;
            font-weight: 700;
            margin: 0;
            font-size: 1.75rem;
        }
        
        .register-header p {
            color: #6b7280;
            margin: 8px 0 0;
            font-size: 0.95rem;
        }
        
        .register-body {
            padding: 25px 40px 35px;
        }
        
        .form-group {
            margin-bottom: 18px;
            position: relative;
        }
        
        .form-label {
            font-weight: 500;
            color: #374151;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }
        
        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 14px 16px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: #f9fafb;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            background: #fff;
        }
        
        .form-control.is-invalid {
            border-color: #dc2626;
        }
        
        .input-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 1.1rem;
        }
        
        .form-control:focus ~ .input-icon,
        .form-control:not(:placeholder-shown) ~ .input-icon {
            color: #667eea;
        }
        
        .invalid-feedback {
            color: #dc2626;
            font-size: 0.8rem;
            margin-top: 6px;
            display: none;
        }
        
        .form-control.is-invalid ~ .invalid-feedback {
            display: block;
        }
        
        .btn-register {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 16px;
            font-weight: 600;
            font-size: 1rem;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 10px;
        }
        
        .btn-register::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }
        
        .btn-register:hover::before {
            left: 100%;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent, #e5e7eb, transparent);
        }
        
        .divider span {
            padding: 0 16px;
            color: #9ca3af;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .login-link {
            text-align: center;
            color: #6b7280;
            font-size: 0.9rem;
        }
        
        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        .login-link a:hover {
            color: #764ba2;
            text-decoration: underline;
        }
        
        .alert-error {
            background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
            color: #dc2626;
            padding: 14px 16px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: flex-start;
            border-left: 4px solid #dc2626;
        }
        
        .alert-error i {
            margin-right: 10px;
            font-size: 1.1rem;
            margin-top: 2px;
        }
        
        .alert-success {
            background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
            color: #059669;
            padding: 14px 16px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            border-left: 4px solid #059669;
        }
        
        .alert-success i {
            margin-right: 10px;
            font-size: 1.1rem;
        }
        
        .password-strength {
            margin-top: 8px;
        }
        
        .strength-bar {
            height: 4px;
            border-radius: 2px;
            background: #e5e7eb;
            overflow: hidden;
            margin-bottom: 6px;
        }
        
        .strength-fill {
            height: 100%;
            width: 0;
            transition: all 0.3s ease;
            border-radius: 2px;
        }
        
        .strength-fill.weak { width: 33%; background: #dc2626; }
        .strength-fill.medium { width: 66%; background: #f59e0b; }
        .strength-fill.strong { width: 100%; background: #10b981; }
        
        .strength-text {
            font-size: 0.75rem;
            color: #9ca3af;
        }
        
        .terms {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .terms a {
            color: #667eea;
            text-decoration: none;
        }
        
        .terms a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-wrapper">
        <div class="register-card">
            <div class="register-header">
                <div class="register-icon">
                    <i class="bi bi-person-plus"></i>
                </div>
                <h2>Create Account</h2>
                <p>Join us and start shopping</p>
            </div>
            
            <div class="register-body">
                @if($errors->any())
                    <div class="alert-error">
                        <i class="bi bi-exclamation-circle-fill"></i>
                        <div>
                            @foreach($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                @if(session('success'))
                    <div class="alert-success">
                        <i class="bi bi-check-circle-fill"></i>
                        {{ session('success') }}
                    </div>
                @endif
                
                <form method="POST" action="/register">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your full name" value="{{ old('name') }}" required>
                        <i class="bi bi-person input-icon"></i>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                        <i class="bi bi-envelope input-icon"></i>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Create a password" required minlength="8">
                        <i class="bi bi-lock input-icon"></i>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="password-strength">
                            <div class="strength-bar">
                                <div class="strength-fill" id="strengthFill"></div>
                            </div>
                            <span class="strength-text" id="strengthText">Password must be at least 8 characters</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                        <i class="bi bi-lock-fill input-icon"></i>
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="terms">
                        By creating an account, you agree to our 
                        <a href="#">Terms of Service</a> and 
                        <a href="#">Privacy Policy</a>
                    </div>
                    
                    <button type="submit" class="btn btn-register">
                        <i class="bi bi-person-plus me-2"></i>Create Account
                    </button>
                    
                    <div class="login-link">
                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const strengthFill = document.getElementById('strengthFill');
        const strengthText = document.getElementById('strengthText');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (password.length >= 12) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            
            strengthFill.className = 'strength-fill';
            
            if (password.length === 0) {
                strengthText.textContent = 'Password must be at least 8 characters';
            } else if (strength <= 2) {
                strengthFill.classList.add('weak');
                strengthText.textContent = 'Weak password';
            } else if (strength <= 3) {
                strengthFill.classList.add('medium');
                strengthText.textContent = 'Medium strength password';
            } else {
                strengthFill.classList.add('strong');
                strengthText.textContent = 'Strong password';
            }
        });
    </script>
</body>
</html>
