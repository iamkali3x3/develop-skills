document.addEventListener('DOMContentLoaded', function() {
    // DOM elements
    const signupSection = document.getElementById('signup-section');
    const loginSection = document.getElementById('login-section');
    const welcomeSection = document.getElementById('welcome-section');
    const showLoginLink = document.getElementById('show-login');
    const showSignupLink = document.getElementById('show-signup');
    const logoutBtn = document.getElementById('logout-btn');
    const signupForm = document.getElementById('signup-form');
    const loginForm = document.getElementById('login-form');
    const displayUsername = document.getElementById('display-username');

    // Toggle between signup and login forms
    showLoginLink.addEventListener('click', function(e) {
        e.preventDefault();
        signupSection.style.display = 'none';
        loginSection.style.display = 'block';
    });

    showSignupLink.addEventListener('click', function(e) {
        e.preventDefault();
        loginSection.style.display = 'none';
        signupSection.style.display = 'block';
    });

    // Logout functionality
    logoutBtn.addEventListener('click', function() {
        welcomeSection.style.display = 'none';
        loginSection.style.display = 'block';
        // Clear the login form
        document.getElementById('login-username').value = '';
        document.getElementById('login-password').value = '';
    });

    // Signup form validation and submission
    signupForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const username = document.getElementById('signup-username').value.trim();
        const password = document.getElementById('signup-password').value;
        const confirmPassword = document.getElementById('confirm-password').value;
        
        // Reset error messages
        document.getElementById('signup-username-error').textContent = '';
        document.getElementById('signup-password-error').textContent = '';
        document.getElementById('confirm-password-error').textContent = '';
        
        // Validate username
        if (username.length < 4) {
            document.getElementById('signup-username-error').textContent = 'Username must be at least 4 characters';
            return;
        }
        
        // Validate password
        if (password.length < 6) {
            document.getElementById('signup-password-error').textContent = 'Password must be at least 6 characters';
            return;
        }
        
        // Validate password match
        if (password !== confirmPassword) {
            document.getElementById('confirm-password-error').textContent = 'Passwords do not match';
            return;
        }
        
        // Store user data in localStorage (in a real app, you would send to a server)
        localStorage.setItem('username', username);
        localStorage.setItem('password', password);
        
        // Show success message and switch to login
        alert('Sign up successful! Please login.');
        signupSection.style.display = 'none';
        loginSection.style.display = 'block';
        
        // Clear the form
        signupForm.reset();
    });

    // Login form validation and submission
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const username = document.getElementById('login-username').value.trim();
        const password = document.getElementById('login-password').value;
        
        // Reset error messages
        document.getElementById('login-username-error').textContent = '';
        document.getElementById('login-password-error').textContent = '';
        
        // Get stored user data
        const storedUsername = localStorage.getItem('username');
        const storedPassword = localStorage.getItem('password');
        
        // Validate credentials
        if (!username || !password) {
            document.getElementById('login-username-error').textContent = 'Please enter both username and password';
            return;
        }
        
        if (username !== storedUsername || password !== storedPassword) {
            document.getElementById('login-password-error').textContent = 'Invalid username or password';
            return;
        }
        
        // Successful login
        displayUsername.textContent = username;
        loginSection.style.display = 'none';
        welcomeSection.style.display = 'block';
        
        // Clear the form
        loginForm.reset();
    });
});
