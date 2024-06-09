// Sepetteki ürün sayısını güncelleyen işlev
function guncelleSepetIkonu() {
  var cartCookie = "<?php echo isset($_COOKIE['cart']) ? $_COOKIE['cart'] : ''; ?>";
  var sepettekiUrunSayisi = 0;
  
  // Eğer çerez varsa, çerez içeriğini bir JavaScript nesnesine dönüştür
  var cartItems = [];
  if (cartCookie !== '') {
    cartItems = JSON.parse(cartCookie);
    // Çerezdeki ürün sayısını bulma
    sepettekiUrunSayisi = cartItems.length;
  }
<<<<<<< HEAD
});

document.addEventListener('DOMContentLoaded', function() {
    // 'submit-order' düğmesine tıklama olayını ekle
    var submitOrderButton = document.getElementById('submit-order');
    submitOrderButton.addEventListener('click', function() {
        // 'sepet-data' alanına JSON verileri ekle
        var sepetDataField = document.getElementById('sepet-data');
        sepetDataField.value = JSON.stringify(sepet);

        // 'order-form' formunu gönder
        var orderForm = document.getElementById('order-form');
        orderForm.submit();
    });
});
=======
console.log(sepettekiUrunSayisi);
  const count = document.getElementById('count');
  count.innerText = sepettekiUrunSayisi;
}

// Sayfa yüklendiğinde sepet ikonunu güncelle
window.onload = function() {
  guncelleSepetIkonu();
}

// Sepet ikonuna tıklandığında
// document.querySelector("header container .icons .shopping").onclick = function() {
//   // this.href="../payment.php";
//   window.location.href = "../payment.php";
// };
// function guncelleSepetIkonu() {
//   var sepettekiUrunSayisi = 0;
//   var cookies = document.cookie.split(';');
//   for (var i = 0; i < cookies.length; i++) {
//       var cookie = cookies[i].trim();
//       if (cookie.startsWith("urun=")) {
//           sepettekiUrunSayisi++;
//       }
//   }

//   const count = document.getElementById('count');

//   count.innerText = sepettekiUrunSayisi;
// }

// // Sayfa yüklendiğinde sepet ikonunu güncelle
// window.onload = function() {
//   guncelleSepetIkonu();
// }

// // Sepet ikonuna tıklandığında
// document.querySelector("header container .icons .shopping").onclick = function() {
//   // this.href="../payment.php";
//   window.location.href = "../payment.php";
// };









// // const basketList = document.getElementById('basket-list');
// // const clearBasket = document.getElementById('clear-basket');
// // const shopping = document.getElementById('shopping');
// // const eklemeButonlari = document.querySelectorAll('.button');
// // const shopIcon = document.getElementById('icon2');
// // const shoppingBasket = document.getElementById('shopping-basket');
// // const removeButtons = document.querySelectorAll('.button-remove');

// // const alert = document.createElement("p");
// // alert.id="sepet-uyari";


// // let sepet = [];

// // // Tüm ürün ekleme butonlarına tıklama olayı ekle
// // eklemeButonlari.forEach((buton) => {
// //   buton.addEventListener('click', sepeteEkle);
// // });

// // function sepeteEkle(event) {
// //     const urunBilgileri = {
// //     isim: event.target.parentNode.querySelector('.description span').innerText,
// //     fiyat: event.target.parentNode.querySelector('.price h4').innerText,
// //     resim: event.target.parentNode.querySelector('img'),
// //     };
// //     // Ürünü sepet dizisine ekle
// //     sepet.push(urunBilgileri);
// //     sepetiGuncelle();
// //     const urunDiv = document.createElement('div');
// //     urunDiv.classList.add('urun');
// //     basketList.appendChild(urunDiv);
// //     urunDiv.innerHTML = `
// //     <a href="#">${urunBilgileri.isim}</a>
// //     <a href="#">${urunBilgileri.fiyat}</a>
// //     <img src="${urunBilgileri.resim}">
// //     <input type="button" class="button-remove" value="Sil">
// //     `;
// //     alert.remove();
// //     clearBasket.style.display='block';
    
// //     // Sepet verilerini localStorage'de sakla
// //     localStorage.setItem('sepet', JSON.stringify(sepet));
// // }

// function sepetiGuncelle() {
 // // Sepetteki toplam ürün sayısını al
//   const toplamUrun = sepet.length;

//   const count = document.getElementById('count');

//   count.innerText = toplamUrun;
// }

// clearBasket.addEventListener('click', sepetiBosalt);

// // function sepetiBosalt() {
// //     sepet = [];
// //     localStorage.removeItem('sepet');
// //     sepetiGuncelle();
// //     basketList.innerHTML = '';
// //     alert.innerText = "Sepetinizde Ürün Bulunmamaktadır!";
// //     shoppingBasket.appendChild(alert);
// //     clearBasket.style.display='none';
// // }

// // shopIcon.addEventListener('click', () => {
// //     shoppingBasket.style.display = (shoppingBasket.style.display === 'block') ? 'none' : 'block';
// //     if(sepet.length<=0 && !document.getElementById('sepet-uyari')){
// //         alert.innerText = "Sepetinizde Urun Bulunmamaktadir!";
// //         shoppingBasket.appendChild(alert);
// //     }
// // });


// // removeButtons.forEach((removeButton, index) => {
// //   removeButton.addEventListener('click', () => {
// //     sepettenUrunuSil(index);
// //   });
// // });

// // function sepettenUrunuSil(index) {
// //   sepet.splice(index, 1); // index'teki öğeyi kaldır
// //   localStorage.setItem('sepet', JSON.stringify(sepet));
// //   sepetiGuncelle();
// // }



// // // Sayfa yüklendiğinde localStorage'de sepet verisi varsa onu al
// // document.addEventListener('DOMContentLoaded', () => {
// //   const localStorageSepet = localStorage.getItem('sepet');
// //   if (localStorageSepet) {
// //     sepet = JSON.parse(localStorageSepet);
// //     sepetiGuncelle();
// //     for (const urun of sepet) {
// //       const urunDiv = document.createElement('div');
// //       urunDiv.classList.add('urun');
// //       basketList.appendChild(urunDiv);
// //       urunDiv.innerHTML = `
// //       <a href="#">${urun.isim}</a>
// //       <a href="#">${urun.fiyat}</a>
// //       <img src="${urun.resim}">
// //       <input type="button" class="button-remove" value="Sil">
// //       `;
// //     }
// //   }
// // });

// // document.addEventListener('DOMContentLoaded', function() {
// //     // 'submit-order' düğmesine tıklama olayını ekle
// //     var submitOrderButton = document.getElementById('submit-order');
// //     submitOrderButton.addEventListener('click', function() {
// //         // 'sepet-data' alanına JSON verileri ekle
// //         var sepetDataField = document.getElementById('sepet-data');
// //         sepetDataField.value = JSON.stringify(sepet);

// //         // 'order-form' formunu gönder
// //         var orderForm = document.getElementById('order-form');
// //         orderForm.submit();
// //     });
// // });

// const basketList = document.getElementById('basket-list');
// const clearBasket = document.getElementById('clear-basket');
// const shopping = document.getElementById('shopping');
// const eklemeButonlari = document.querySelectorAll('.button');
// const shopIcon = document.getElementById('icon2');
// const shoppingBasket = document.getElementById('shopping-basket');
// const alert = document.createElement("p");
// alert.id="sepet-uyari";
// let sepet = [];

// // Tüm ürün ekleme butonlarına tıklama olayı ekle
// eklemeButonlari.forEach((buton) => {
//   buton.addEventListener('click', sepeteEkle);
// });

// function sepeteEkle(event) {
//     const urunBilgileri = {
//         isim: event.target.parentNode.querySelector('.description span').innerText,
//         fiyat: event.target.parentNode.querySelector('.price h4').innerText,
//         resim: event.target.parentNode.querySelector('img').src,
//     };
//     // Ürünü sepet dizisine ekle
//     sepet.push(urunBilgileri);
//     sepetiGuncelle();
//     const urunDiv = document.createElement('div');
//     urunDiv.classList.add('urun');
//     basketList.appendChild(urunDiv);
//     urunDiv.innerHTML = `
//     <a href="#">${urunBilgileri.isim}</a>
//     <a href="#">${urunBilgileri.fiyat}</a>
//     <img src="${urunBilgileri.resim}">
//     <input type="button" class="button-remove" value="Sil">
//     `;
//     alert.remove();
//     clearBasket.style.display='block';
    
//     // Sepet verilerini localStorage'de sakla
//     localStorage.setItem('sepet', JSON.stringify(sepet));
//     // Sepet verilerini cookie'de sakla
//     document.cookie = `cart=${JSON.stringify(sepet)}; path=/; max-age=${30*24*60*60}`;
// }

// function sepetiGuncelle() {
//     // Sepetteki toplam ürün sayısını al
//     const toplamUrun = sepet.length;
//     const count = document.getElementById('count');
//     count.innerText = toplamUrun;
// }

// clearBasket.addEventListener('click', sepetiBosalt);

// function sepetiBosalt() {
//     sepet = [];
//     localStorage.removeItem('sepet');
//     document.cookie = "cart=; path=/; max-age=0";
//     sepetiGuncelle();
//     basketList.innerHTML = '';
//     alert.innerText = "Sepetinizde Ürün Bulunmamaktadır!";
//     shoppingBasket.appendChild(alert);
//     clearBasket.style.display='none';
// }

// shopIcon.addEventListener('click', () => {
//     shoppingBasket.style.display = (shoppingBasket.style.display === 'block') ? 'none' : 'block';
//     if(sepet.length <= 0 && !document.getElementById('sepet-uyari')){
//         alert.innerText = "Sepetinizde Urun Bulunmamaktadir!";
//         shoppingBasket.appendChild(alert);
//     }
// });

// document.addEventListener('DOMContentLoaded', () => {
//     // localStorage'den sepet verisini al
//     const localStorageSepet = localStorage.getItem('sepet');
//     // Çerezden sepet verisini al
//     const cookieSepet = document.cookie.split('; ').find(row => row.startsWith('cart='));
//     if (cookieSepet) {
//         sepet = JSON.parse(cookieSepet.split('=')[1]);
//     } else if (localStorageSepet) {
//         sepet = JSON.parse(localStorageSepet);
//     }
//     sepetiGuncelle();
//     for (const urun of sepet) {
//         const urunDiv = document.createElement('div');
//         urunDiv.classList.add('urun');
//         basketList.appendChild(urunDiv);
//         urunDiv.innerHTML = `
//         <a href="#">${urun.isim}</a>
//         <a href="#">${urun.fiyat}</a>
//         <img src="${urun.resim}">
//         <input type="button" class="button-remove" value="Sil">
//         `;
//     }
// });

// document.addEventListener('DOMContentLoaded', function() {
//     var submitOrderButton = document.getElementById('submit-order');
//     submitOrderButton.addEventListener('click', function() {
//         var sepetDataField = document.getElementById('sepet-data');
//         sepetDataField.value = JSON.stringify(sepet);
//         var orderForm = document.getElementById('order-form');
//         orderForm.submit();
//     });
// });

// function sepettenUrunuSil(index) {
//     sepet.splice(index, 1); // index'teki öğeyi kaldır
//     localStorage.setItem('sepet', JSON.stringify(sepet));
//     document.cookie = `cart=${JSON.stringify(sepet)}; path=/; max-age=${30*24*60*60}`;
//     sepetiGuncelle();
// }

>>>>>>> master
