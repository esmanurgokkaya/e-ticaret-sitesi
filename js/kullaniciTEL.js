// Get references to the select element and the phone number input
var phoneCodeSelect = document.getElementById("phone-code");
var phoneInput = document.getElementById("phone");

// Populate country codes
var countryCodes = [
    { code: "+90", country: "TR" },
    // Add more country codes as needed
];

countryCodes.forEach(function(country) {
    var option = document.createElement("option");
    option.value = country.code;
    option.textContent = country.code + " (" + country.country + ")";
    phoneCodeSelect.appendChild(option);
});

// Function to format the phone number as the user types
function formatPhoneNumber() {
    // Remove any non-numeric characters from the input
    var phoneNumber = phoneInput.value.replace(/\D/g, "");

    // Format the number based on its length
    if (phoneNumber.length <= 3) {
        phoneInput.value = phoneNumber;
    } else if (phoneNumber.length <= 7) {
        phoneInput.value = phoneNumber.slice(0, 3) + "-" + phoneNumber.slice(3);
    } else {
        phoneInput.value = phoneNumber.slice(0, 3) + "-" + phoneNumber.slice(3, 6) + "-" + phoneNumber.slice(6, 10);
    }
}

// Listen for changes in the phone number input
phoneInput.addEventListener("input", formatPhoneNumber);
