// Get references to the select elements
var dobDaySelect = document.getElementById("dob_day");
var dobMonthSelect = document.getElementById("dob_month");
var dobYearSelect = document.getElementById("dob_year");

// Function to populate days
function populateDays() {
    // Clear existing options
    dobDaySelect.innerHTML = "<option value=''>Gün</option>";
    
    // Get the selected month and year
    var selectedMonth = dobMonthSelect.value;
    var selectedYear = dobYearSelect.value;
    
    // Get the number of days in the selected month
    var daysInMonth = new Date(selectedYear, selectedMonth, 0).getDate();
    
    // Populate days based on the number of days in the selected month
    for (var i = 1; i <= daysInMonth; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.textContent = i;
        dobDaySelect.appendChild(option);
    }
}

// Function to populate years
function populateYears() {
    // Clear existing options
    dobYearSelect.innerHTML = "<option value=''>Yıl</option>";
    
    // Get the current year
    var currentYear = new Date().getFullYear();
    
    // Populate years from the current year to 100 years ago
    for (var i = currentYear; i >= currentYear - 100; i--) {
        var option = document.createElement("option");
        option.value = i;
        option.textContent = i;
        dobYearSelect.appendChild(option);
    }
}

// Populate months
var months = [
    "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran",
    "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
];

for (var i = 0; i < 12; i++) {
    var option = document.createElement("option");
    option.value = i + 1;
    option.textContent = months[i];
    dobMonthSelect.appendChild(option);
}

// Populate days and years when month or year is changed
dobMonthSelect.addEventListener("change", populateDays);
dobYearSelect.addEventListener("change", populateDays);

// Initially populate days and years
populateDays();
populateYears();
