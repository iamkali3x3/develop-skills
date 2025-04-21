// Function to display greeting based on the current time
function displayGreeting() {
    const now = new Date();
    const hours = now.getHours();
    let greeting = "";

    if (hours < 12) {
        greeting = "Good Morning!";
    } else if (hours >= 12 && hours < 18) {
        greeting = "Good Afternoon!";
    } else {
        greeting = "Good Evening!";
    }

    alert(greeting); // Display the greeting in an alert box
    document.getElementById("greeting").innerText = greeting; // Show the greeting on the page

    updateCurrentTime(); // Update the current time on page load
}

// Function to update the current time dynamically (with hours, minutes, and seconds)
function updateCurrentTime() {
    setInterval(function() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0'); // Format to 2 digits
        const minutes = now.getMinutes().toString().padStart(2, '0'); // Format to 2 digits
        const seconds = now.getSeconds().toString().padStart(2, '0'); // Format to 2 digits
        document.getElementById("current-time").innerText = `Current Time: ${hours}:${minutes}:${seconds}`;
    }, 1000); // Update every second (1000 milliseconds)
}

// Function to calculate the lifespan in years, months, days, and weeks
function calculateLifespan() {
    const birthDate = new Date(document.getElementById("birthdate").value);
    const deathDate = new Date(document.getElementById("deathdate").value);
    
    if (birthDate == "Invalid Date" || deathDate == "Invalid Date") {
        alert("Please enter valid dates.");
        return;
    }

    const totalMilliseconds = deathDate - birthDate;
    const totalDays = totalMilliseconds / (1000 * 3600 * 24);
    const totalWeeks = totalDays / 7;

    const years = Math.floor(totalDays / 365);
    const months = Math.floor((totalDays % 365) / 30);
    const days = Math.floor(totalDays % 30);

    const result = `
        <p>Age in Years: ${years} years</p>
        <p>Age in Months: ${months} months</p>
        <p>Age in Days: ${days} days</p>
        <p>Age in Weeks: ${Math.floor(totalWeeks)} weeks</p>
    `;

    document.getElementById("lifespan-results").innerHTML = result;
}

// Call the greeting function on page load
window.onload = displayGreeting;
