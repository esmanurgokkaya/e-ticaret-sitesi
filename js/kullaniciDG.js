var dobDaySelect = document.getElementById("dob_day");
var dobMonthSelect = document.getElementById("dob_month");
var dobYearSelect = document.getElementById("dob_year");

function populateDays() {
    
    for (var i = 1; i <= 31; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.textContent = i;
        dobDaySelect.appendChild(option);
    }
}

function populateYears() {
    var currentYear = new Date().getFullYear();
    for (var i = currentYear; i >= currentYear - 100; i--) {
        var option = document.createElement("option");
        option.value = i;
        option.textContent = i;
        dobYearSelect.appendChild(option);
    }
}

// Ay seçeneklerini doldur
for (var i = 0; i < 12; i++) {
    var option = document.createElement("option");
    option.value = i + 1;
    option.textContent = i + 1;
    dobMonthSelect.appendChild(option);
}

// Değişiklik olaylarına dinleyici ekle
dobMonthSelect.addEventListener("change", populateDays);
dobYearSelect.addEventListener("change", populateDays);

// Yılları ve günleri doldur
populateYears();
populateDays();
