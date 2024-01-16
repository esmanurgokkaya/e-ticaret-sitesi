const basketList = document.getElementById('basket-list');
const totalPrice = document.getElementById('total-price');
const clearBasket = document.getElementById('clear-basket');
const shopping = document.getElementById('shopping');
const eklemeButonlari = document.querySelectorAll('.button');
const shopIcon = document.getElementById('icon2');
const shoppingBasket = document.getElementById('shopping-basket');

const alert = document.createElement("p");
alert.id="sepet-uyari";


let sepet = [];

// Tüm ürün ekleme butonlarına tıklama olayı ekle
eklemeButonlari.forEach((buton) => {
  buton.addEventListener('click', sepeteEkle);
});

function sepeteEkle(event) {
    const urunBilgileri = {
    isim: event.target.parentNode.querySelector('.description span').innerText,
    fiyat: event.target.parentNode.querySelector('.price h4').innerText,
    resim: event.target.parentNode.getElementsByTagName('img').src
    };
    // Ürünü sepet dizisine ekle
    sepet.push(urunBilgileri);
    sepetiGuncelle();
    const urunDiv = document.createElement('div');
    urunDiv.classList.add('urun');
    basketList.appendChild(urunDiv);
    urunDiv.innerHTML = `
    <a href="#">${urunBilgileri.isim}</a>
    <a href="#">${urunBilgileri.fiyat}</a>
    <img src="${urunBilgileri.resim}">
    `;
    alert.remove();
    clearBasket.style.display='block';
    
    // Sepet verilerini localStorage'de sakla
    localStorage.setItem('sepet', JSON.stringify(sepet));
}

function sepetiGuncelle() {
  // Sepetteki toplam ürün sayısını al
  const toplamUrun = sepet.length;

  const count = document.getElementById('count');

  count.innerText = toplamUrun;
}

clearBasket.addEventListener('click', sepetiBosalt);

function sepetiBosalt() {
    sepet = [];
    localStorage.removeItem('sepet');
    sepetiGuncelle();
    basketList.innerHTML = '';
    alert.innerText = "Sepetinizde Ürün Bulunmamaktadır!";
    shoppingBasket.appendChild(alert);
    clearBasket.style.display='none';
}

shopIcon.addEventListener('click', () => {
    shoppingBasket.style.display = (shoppingBasket.style.display === 'block') ? 'none' : 'block';
    if(sepet.length<=0 && !document.getElementById('sepet-uyari')){
        alert.innerText = "Sepetinizde Urun Bulunmamaktadir!";
        shoppingBasket.appendChild(alert);
    }
});


// Sayfa yüklendiğinde localStorage'de sepet verisi varsa onu al
document.addEventListener('DOMContentLoaded', () => {
  const localStorageSepet = localStorage.getItem('sepet');
  if (localStorageSepet) {
    sepet = JSON.parse(localStorageSepet);
    sepetiGuncelle();
  }
});

