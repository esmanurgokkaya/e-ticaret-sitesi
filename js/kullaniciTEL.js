var phoneCodeSelect = document.getElementById("phone-code");
var phoneInput = document.getElementById("phone");

var countryCodes = [
    { code: "+90", country: "TR" },
];

countryCodes.forEach(function(country) {
    var option = document.createElement("option");
    option.value = country.code;
    option.textContent = country.code + " (" + country.country + ")";
    phoneCodeSelect.appendChild(option);
});

function formatPhoneNumber() {
    var phoneNumber = phoneInput.value.replace(/\D/g, "");

    if (phoneNumber.length <= 3) {
        phoneInput.value = phoneNumber;
    } else if (phoneNumber.length <= 7) {
        phoneInput.value = phoneNumber.slice(0, 3) + "-" + phoneNumber.slice(3);
    } else {
        phoneInput.value = phoneNumber.slice(0, 3) + "-" + phoneNumber.slice(3, 6) + "-" + phoneNumber.slice(6, 10);
    }
}

phoneInput.addEventListener("input", formatPhoneNumber);
