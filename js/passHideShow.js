var a;
function pass(){
    if(a==1){
    document.getElementById('pass').type ='password';
    document.getElementById('passHide').innerHTML="<i class='fa-regular fa-eye'></i>";
    a=0;
}else{
    document.getElementById('pass').type ='text';
    document.getElementById('passHide').innerHTML="<i class='fa-regular fa-eye-slash'></i>";
}
}