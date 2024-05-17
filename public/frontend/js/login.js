const loginForm = document.getElementById("login-form");
        const signupForm = document.getElementById("signup-form");
        const switchToSignup = document.getElementById("switch-to-signup");
        const switchToLogin = document.getElementById("switch-to-login");

        switchToSignup.addEventListener("click", () => {
            loginForm.style.display = "none";
            signupForm.style.display = "block";
        });

        switchToLogin.addEventListener("click", () => {
            signupForm.style.display = "none";
            loginForm.style.display = "block";
        });

        // Kiểm tra xem người dùng đã có tài khoản hay chưa
        const hasAccount = false; // Thay đổi thành true nếu người dùng đã có tài khoản

        if (hasAccount) {
            loginForm.style.display = "block";
            signupForm.style.display = "none";
        } else {
            loginForm.style.display = "none";
            signupForm.style.display = "block";
        }