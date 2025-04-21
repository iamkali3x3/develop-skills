function validateForm() {
    const fname = document.getElementById("fname").value.trim();
    const lname = document.getElementById("lname").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const dob = document.getElementById("dob").value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const errorMsg = document.getElementById("errorMsg");
  
    // Name validation
    if (fname.length < 2 || lname.length < 2) {
      errorMsg.textContent = "First and last name must be at least 2 characters.";
      return false;
    }
  
    // Email format
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      errorMsg.textContent = "Please enter a valid email address.";
      return false;
    }
  
    // Password strength
    if (password.length < 6) {
      errorMsg.textContent = "Password must be at least 6 characters.";
      return false;
    }
  
    // DOB not empty and user is at least 13
    if (!dob) {
      errorMsg.textContent = "Please select your date of birth.";
      return false;
    }
    const birthDate = new Date(dob);
    const age = new Date().getFullYear() - birthDate.getFullYear();
    if (age < 13) {
      errorMsg.textContent = "You must be at least 13 years old to register.";
      return false;
    }
  
    // Gender selected
    if (!gender) {
      errorMsg.textContent = "Please select your gender.";
      return false;
    }
  
    errorMsg.textContent = ""; // clear error
    alert("Registration Successful!");
    return true;
  }
  