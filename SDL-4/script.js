document.getElementById("gmailForm").addEventListener("submit", function (e) {
    e.preventDefault(); // prevent form submission
  
    const fname = document.getElementById("fname").value.trim();
    const lname = document.getElementById("lname").value.trim();
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const phone = document.getElementById("phone").value.trim();
    const recovery = document.getElementById("recovery").value.trim();
    const errorMsg = document.getElementById("errorMsg");
  
    // Username validation
    if (username.length < 6 || username.includes(" ")) {
      errorMsg.textContent = "Username must be at least 6 characters and no spaces.";
      return;
    }
  
    // Password validation
    if (password.length < 6) {
      errorMsg.textContent = "Password must be at least 6 characters.";
      return;
    }
  
    if (password !== confirmPassword) {
      errorMsg.textContent = "Passwords do not match.";
      return;
    }
  
    // Phone number validation
    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
      errorMsg.textContent = "Phone number must be 10 digits.";
      return;
    }
  
    // Recovery email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(recovery)) {
      errorMsg.textContent = "Enter a valid recovery email.";
      return;
    }
  
    errorMsg.textContent = "";
    alert("Registration Successful!");
  });
  