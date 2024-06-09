


// document.addEventListener('DOMContentLoaded', function() {
//     // Sepet verilerini yakala
//     var sepetDataField = document.getElementById('sepet-data');
//     var sepetData = JSON.parse(sepetDataField.value);

//     // Yakalanan verileri kullanarak sayfayı güncelle
//     sepetiGoster(sepetData);
// });
// function sepetiGoster(sepetData) {
//     var productsDiv = document.querySelector('.products');
//     productsDiv.innerHTML = '<h2>Sepetim</h2>';

//     // JSON verileri üzerinde dönerek her bir ürünü ekrana ekleyin
//     sepetData.forEach(function(urun) {
//         var productItemDiv = document.createElement('div');
//         productItemDiv.classList.add('product-item');
        
//         var urunImg = document.createElement('img');
//         urunImg.src = urun.resim;
//         urunImg.alt = urun.isim;

//         var urunAdDiv = document.createElement('div');
//         urunAdDiv.textContent = 'Ürün Adı: ' + urun.isim;

//         var urunFiyatDiv = document.createElement('div');
//         urunFiyatDiv.textContent = 'Fiyat: ' + urun.fiyat;

//         productItemDiv.appendChild(urunImg);
//         productItemDiv.appendChild(urunAdDiv);
//         productItemDiv.appendChild(urunFiyatDiv);

//         productsDiv.appendChild(productItemDiv);
//     });
// }








document.addEventListener('DOMContentLoaded', () => {
    const spinners = document.querySelectorAll('.number-spinner');

    spinners.forEach(spinner => {
        const decreaseButton = spinner.querySelector('.decrease');
        const increaseButton = spinner.querySelector('.increase');
        const numberInput = spinner.querySelector('.number-input');

        decreaseButton.addEventListener('click', () => {
            changeValue(numberInput, -1);
        });

        increaseButton.addEventListener('click', () => {
            changeValue(numberInput, 1);
        });
    });
});

function changeValue(inputElement, amount) {
    let currentValue = parseInt(inputElement.value);
    currentValue += amount;

    // Minimum değeri kontrol et
    if (currentValue < 1) {
        currentValue = 1;
    }

    // AJAX isteği gönder
    sendAjaxRequest(currentValue, (response) => {
        // Sunucudan gelen yanıta göre input değerini güncelle
        inputElement.value = response.newValue;
    });
}

function sendAjaxRequest(newValue, callback) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'updateValue.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            callback(response);
        }
    };
    xhr.send(JSON.stringify({ value: newValue }));
}
