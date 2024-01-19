var products = {
    dresses: [
        { id: 1, name: 'Kırmızı Mini Elbise', feature1: '150TL', feature2: 'Standart', feature3: 'Kırmızı'  },
        { id: 2, name: 'Çizgili Kaban', feature1: '900TL', feature2: 'L', feature3: 'Gri' },
        { id: 3, name: 'Kot Jean', feature1: '380TL', feature2: '38', feature3: 'Mavi' },
        { id: 4, name: 'Unisex Beyaz Spor Ayakkabı', feature1: '690TL', feature2: '37', feature3: 'Beyaz' },
        { id: 5, name: 'Siyah Yırtmaçlı Etek', feature1: '280TL', feature2: '38', feature3: 'Siyah' },
    ],
    pants: [
        { id: 6, name: 'Pantolon 1', feature1: 'Özellik 1F', feature2: 'Özellik 2F' },
        { id: 7, name: 'Pantolon 2', feature1: 'Özellik 1G', feature2: 'Özellik 2G' },
        { id: 8, name: 'Pantolon 3', feature1: 'Özellik 1H', feature2: 'Özellik 2H' },
        { id: 9, name: 'Pantolon 4', feature1: 'Özellik 1I', feature2: 'Özellik 2I' },
        { id: 10, name: 'Pantolon 5', feature1: 'Özellik 1J', feature2: 'Özellik 2J' },
    ],
    shoes: [
        { id: 11, name: 'Ayakkabı 1', feature1: 'Özellik 1K', feature2: 'Özellik 2K' },
        { id: 12, name: 'Ayakkabı 2', feature1: 'Özellik 1L', feature2: 'Özellik 2L' },
        { id: 13, name: 'Ayakkabı 3', feature1: 'Özellik 1M', feature2: 'Özellik 2M' },
        { id: 14, name: 'Ayakkabı 4', feature1: 'Özellik 1N', feature2: 'Özellik 2N' },
        { id: 15, name: 'Ayakkabı 5', feature1: 'Özellik 1O', feature2: 'Özellik 2O' },
    ],
};

var currentCategory = 'dresses'; // İlk açılışta Elbiseler kategorisi gösterilecek
showCategory(currentCategory);

function showCategory(category) {
    var title = document.getElementById('categoryTitle');
    title.innerText = capitalizeFirstLetter(category);

    var productList = document.getElementById('productList');
    productList.innerHTML = '';

    var productsInCategory = products[category];
    for (var i = 0; i < productsInCategory.length; i++) {
        var product = productsInCategory[i];

        var row = document.createElement('tr');
        row.innerHTML = `
            <td>${product.id}</td>
            <td>${product.name}</td>
            <td>${product.feature1}</td>
            <td>${product.feature2}</td>
            <td>${product.feature3}</td>
            <td class="actions">
                <button onclick="editProduct(${product.id})">Düzenle</button>
                <button onclick="deleteProduct(${product.id})">Sil</button>
            </td>
        `;

        productList.appendChild(row);
    }
}

function openAddProductForm() {
    var form = document.getElementById('addProductForm');
    form.style.display = 'block';
}

function addProduct() {
    var form = document.getElementById('newProductForm');
    var productName = document.getElementById('productName').value;
    var productFeature1 = document.getElementById('productFeature1').value;
    var productFeature2 = document.getElementById('productFeature2').value;

    var newProduct = {
        id: generateProductId(),
        name: productName,
        feature1: productFeature1,
        feature2: productFeature2,
    };

    products[currentCategory].push(newProduct);
    showCategory(currentCategory);
    cancelAdd();
}

function generateProductId() {
var productsInCategory = products[currentCategory];
return productsInCategory.length > 0 ? productsInCategory[productsInCategory.length - 1].id + 1 : 1;
}

function cancelAdd() {
var form = document.getElementById('addProductForm');
form.style.display = 'none';

// Temizleme işlemleri
document.getElementById('productName').value = '';
document.getElementById('productFeature1').value = '';
document.getElementById('productFeature2').value = '';
}

function editProduct(productId) {
var productsInCategory = products[currentCategory];
var product = productsInCategory.find(p => p.id === productId);

if (product) {
    var form = document.getElementById('editForm');
    var newFeature1Input = document.getElementById('newFeature1');
    var newFeature2Input = document.getElementById('newFeature2');

    newFeature1Input.value = product.feature1;
    newFeature2Input.value = product.feature2;

    form.style.display = 'block';

    form.onsubmit = function (event) {
        event.preventDefault();
       
        product.feature1 = newFeature1Input.value;
        product.feature2 = newFeature2Input.value;
        form.style.display = 'none';
        showCategory(currentCategory);
    };
}
}

function deleteProduct(productId) {
var confirmDelete = confirm('Bu ürünü silmek istediğinizden emin misiniz?');

if (confirmDelete) {
    var productsInCategory = products[currentCategory];
    var index = productsInCategory.findIndex(p => p.id === productId);

    if (index !== -1) {
        productsInCategory.splice(index, 1);
        showCategory(currentCategory);
    }
}
}

function capitalizeFirstLetter(string) {
return string.charAt(0).toUpperCase() + string.slice(1);
}

function saveChanges() {
    var form = document.getElementById('editForm');
    var newFeature1Input = document.getElementById('newFeature1');
    var newFeature2Input = document.getElementById('newFeature2');

    var productId = form.dataset.productId; // Düzenlenen ürünün ID'sini al
    var productsInCategory = products[currentCategory];
    var product = productsInCategory.find(p => p.id == productId);

    if (product) {
        product.feature1 = newFeature1Input.value;
        product.feature2 = newFeature2Input.value;

        form.style.display = 'none';
        showCategory(currentCategory);
        
    }
}

function cancelEdit() {
var form = document.getElementById('editForm');
form.style.display = 'none';
}

function updateBar(barId, numberId) {
var bar = document.getElementById(barId);
var number = parseInt(document.getElementById(numberId).innerText);
var maxWidth = bar.parentElement.offsetWidth;

// Barın genişliğini güncelle
var barWidth = (number / 10000) * maxWidth; // 10000 maksimum değer kabul edildi
bar.style.width = barWidth + 'px';
}

function updateDashboardNumbers() {
document.getElementById('userActivity').innerText = Math.floor(Math.random() * 5000) + 1000;
document.getElementById('pageViews').innerText = Math.floor(Math.random() * 5000) + 1000;
document.getElementById('monthlyRevenue').innerText = Math.floor(Math.random() * 50000) + 10000;
document.getElementById('newEmails').innerText = Math.floor(Math.random() * 5000) + 1000;
}

function updateBars() {
updateBar('userActivityBar', 'userActivity');
updateBar('pageViewsBar', 'pageViews');
updateBar('monthlyRevenueBar', 'monthlyRevenue');
updateBar('newEmailsBar', 'newEmails');
}

document.addEventListener('DOMContentLoaded', function () {
updateDashboardNumbers();
updateBars();

setInterval(function () {
    updateDashboardNumbers();
    updateBars();
}, 5000);
});