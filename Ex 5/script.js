// script.js

document.getElementById("signupForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    // Get form values
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // Simple validation (optional)
    if (name === "" || email === "" || password === "") {
        alert("Please fill in all fields.");
        return;
    }

    // Display result
    document.getElementById("result").innerText = `Thank you, ${name}! Your registration is complete.`;

    // Clear the form
    document.getElementById("signupForm").reset();
});
