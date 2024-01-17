const basketList = document.getElementById('basket-list');
const totalPrice = document.getElementById('total-price');
const clearBasket = document.getElementById('clear-basket');
const shopping = document.getElementById('shopping');
const eklemeButonlari = document.querySelectorAll('.button');
const shopIcon = document.getElementById('icon2');
const shoppingBasket = document.getElementById('shopping-basket');
const removeButtons = document.querySelectorAll('.button-remove');

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
    resim: event.target.parentNode.querySelector('img'),
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
    <input type="button" class="button-remove" value="Sil">
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


removeButtons.forEach((removeButton, index) => {
  removeButton.addEventListener('click', () => {
    sepettenUrunuSil(index);
  });
});

function sepettenUrunuSil(index) {
  sepet.splice(index, 1); // index'teki öğeyi kaldır
  localStorage.setItem('sepet', JSON.stringify(sepet));
  sepetiGuncelle();
}



// Sayfa yüklendiğinde localStorage'de sepet verisi varsa onu al
document.addEventListener('DOMContentLoaded', () => {
  const localStorageSepet = localStorage.getItem('sepet');
  if (localStorageSepet) {
    sepet = JSON.parse(localStorageSepet);
    sepetiGuncelle();
    for (const urun of sepet) {
      const urunDiv = document.createElement('div');
      urunDiv.classList.add('urun');
      basketList.appendChild(urunDiv);
      urunDiv.innerHTML = `
      <a href="#">${urun.isim}</a>
      <a href="#">${urun.fiyat}</a>
      <img src="${urun.resim}">
      <input type="button" class="button-remove" value="Sil">
      `;
    }
  }
});