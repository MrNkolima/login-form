const form=document.getElementById("form");
const result= document.getElementById("result");

form.addEventListener("submit", function(e) {
    e.preventDefault();
    
    const formData= new FormData(form);
    const xhr=new XMLHttpRequest();

    xhr.onreadystatechange = function(){
      if(this.readyState ==4 && this.status == 200){
       result.innerHTML= xhr.responseText;
      }
}; 
xhr.open("POST","auth.php",true);
xhr.send(formData);
});

// Dealing with form-create
const formCreate = document.getElementById("form-create");
const formLogin = document.getElementById("form-login");
// Activate the register div
function changeToRegister(){
    formCreate.style.display = "block";
    formLogin.style.display = "none";
}
// Activate Login div
function turnLogin(){
    formCreate.style.display = "none";
    formLogin.style.display = "block";
}
