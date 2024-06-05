// // function changeValue(amount) {
// //     const numberInput = document.getElementById('number');
// //     let currentValue = parseInt(numberInput.value);
// //     currentValue += amount;
// //     numberInput.value = currentValue;
// // }
// document.addEventListener('DOMContentLoaded', () => {
//     const spinners = document.querySelectorAll('.container .products .product-item .number-spinner');
    
//     spinners.forEach(spinner => {
//         const decreaseButton = spinner.querySelector('.container .products .product-item .number-spinner .decrease');
//         const increaseButton = spinner.querySelector('.container .products .product-item .number-spinner .increase');
//         const numberInput = spinner.querySelector('.container .products .product-item .number-spinner .number-input');
        
//         decreaseButton.addEventListener('click', () => {
//             changeValue(numberInput, -1);
//         });
        
//         increaseButton.addEventListener('click', () => {
//             changeValue(numberInput, 1);
//         });
//     });
// });






// function changeValue(inputElement, amount) {
//     let currentValue = parseInt(inputElement.value);
//     currentValue += amount;
    
//     // Minimum değeri kontrol et
//     if (currentValue < 1) {
//         currentValue = 1;
//     }
    
//     inputElement.value = currentValue;
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
