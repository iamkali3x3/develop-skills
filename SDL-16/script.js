document.addEventListener('DOMContentLoaded', function() {
    const registrationForm = document.getElementById('registration-form');
    const registrationSection = document.getElementById('registration-section');
    const displaySection = document.getElementById('display-section');
    const userDetails = document.getElementById('user-details');
    const backToFormBtn = document.getElementById('back-to-form');

    registrationForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate form
        if (validateForm()) {
            // Get form values
            const formData = {
                firstName: document.getElementById('first-name').value.trim(),
                lastName: document.getElementById('last-name').value.trim(),
                email: document.getElementById('email').value.trim(),
                phone: document.getElementById('phone').value.trim(),
                organization: document.getElementById('organization').value.trim(),
                gender: document.querySelector('input[name="gender"]:checked')?.value || 'Not specified',
                dob: document.getElementById('dob').value,
                hobbies: Array.from(document.querySelectorAll('input[name="hobbies"]:checked')).map(el => el.value),
                bio: document.getElementById('bio').value.trim(),
                password: document.getElementById('password').value
            };
            
            // Display the data
            displayUserDetails(formData);
            
            // Show display section and hide form
            registrationSection.style.display = 'none';
            displaySection.style.display = 'block';
            
            // In a real application, you would send the data to a server here
            // console.log('Form data:', formData);
        }
    });

    backToFormBtn.addEventListener('click', function() {
        // Show form and hide display section
        displaySection.style.display = 'none';
        registrationSection.style.display = 'block';
        
        // Reset the form
        registrationForm.reset();
        
        // Clear all error messages
        document.querySelectorAll('.error-message').forEach(el => {
            el.textContent = '';
        });
    });

    function validateForm() {
        let isValid = true;
        
        // Reset error messages
        document.querySelectorAll('.error-message').forEach(el => {
            el.textContent = '';
        });
        
        // Validate first name
        const firstName = document.getElementById('first-name').value.trim();
        if (!firstName) {
            document.getElementById('first-name-error').textContent = 'First name is required';
            isValid = false;
        } else if (firstName.length < 2) {
            document.getElementById('first-name-error').textContent = 'First name must be at least 2 characters';
            isValid = false;
        }
        
        // Validate last name
        const lastName = document.getElementById('last-name').value.trim();
        if (!lastName) {
            document.getElementById('last-name-error').textContent = 'Last name is required';
            isValid = false;
        } else if (lastName.length < 2) {
            document.getElementById('last-name-error').textContent = 'Last name must be at least 2 characters';
            isValid = false;
        }
        
        // Validate email
        const email = document.getElementById('email').value.trim();
        if (!email) {
            document.getElementById('email-error').textContent = 'Email is required';
            isValid = false;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            document.getElementById('email-error').textContent = 'Please enter a valid email address';
            isValid = false;
        }
        
        // Validate phone (if provided)
        const phone = document.getElementById('phone').value.trim();
        if (phone && !/^[\d\s\-()+]{10,}$/.test(phone)) {
            document.getElementById('phone-error').textContent = 'Please enter a valid phone number';
            isValid = false;
        }
        
        // Validate password
        const password = document.getElementById('password').value;
        if (!password) {
            document.getElementById('password-error').textContent = 'Password is required';
            isValid = false;
        } else if (password.length < 8) {
            document.getElementById('password-error').textContent = 'Password must be at least 8 characters';
            isValid = false;
        }
        
        // Validate password confirmation
        const confirmPassword = document.getElementById('confirm-password').value;
        if (password !== confirmPassword) {
            document.getElementById('confirm-password-error').textContent = 'Passwords do not match';
            isValid = false;
        }
        
        return isValid;
    }

    function displayUserDetails(data) {
        let html = `
            <p><span class="detail-label">First Name:</span> ${data.firstName}</p>
            <p><span class="detail-label">Last Name:</span> ${data.lastName}</p>
            <p><span class="detail-label">Email:</span> ${data.email}</p>
        `;
        
        if (data.phone) {
            html += `<p><span class="detail-label">Phone:</span> ${data.phone}</p>`;
        }
        
        if (data.organization) {
            html += `<p><span class="detail-label">Organization:</span> ${data.organization}</p>`;
        }
        
        html += `<p><span class="detail-label">Gender:</span> ${data.gender}</p>`;
        
        if (data.dob) {
            html += `<p><span class="detail-label">Date of Birth:</span> ${new Date(data.dob).toLocaleDateString()}</p>`;
        }
        
        if (data.hobbies.length > 0) {
            html += `<p><span class="detail-label">Hobbies:</span> ${data.hobbies.join(', ')}</p>`;
        } else {
            html += `<p><span class="detail-label">Hobbies:</span> None specified</p>`;
        }
        
        if (data.bio) {
            html += `<p><span class="detail-label">Bio:</span> ${data.bio}</p>`;
        }
        
        userDetails.innerHTML = html;
    }
});
