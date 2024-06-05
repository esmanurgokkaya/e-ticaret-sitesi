const pass = document.querySelector(".input-box input[type='password']");
<<<<<<< HEAD
toggleBtn = document.querySelector("#pass-box .icon");

const hide = document.getElementById("hide");
const show = document.getElementById("show");

=======

toggleBtn = document.querySelector("#pass-box .icon");

const hide = document.getElementById("hide");
const show = document.getElementById("show");

>>>>>>> 23b433d59a81df5b9153f8b578f927422244bca2
toggleBtn.onclick = () =>{
    if(pass.type == "password"){
        pass.type = "text";
        toggleBtn.classList.add("active");
        show.style.display="inline-block";
        hide.style.display="none";
    }
    else{
        pass.type = "password";
        toggleBtn.classList.remove("active");
        hide.style.display="inline-block";
        show.style.display="none";
    }
}