let username = document.getElementById('username')
let password = document.getElementById('password')
let form = document.getElementById('form')
let confpassword = document.getElementById('confpassword')
let userError = document.getElementById('userError')
let passError = document.getElementById('passError')
let confpassError = document.getElementById('confpassError')
let form_contact = document.getElementById('form_contact')
let cphone = document.getElementById('cphone')
let cemail = document.getElementById('cemail')
let caddresse = document.getElementById('caddresse')
let phoneError = document.getElementById('phoneError')
let mailError = document.getElementById('mailError')
let adrError = document.getElementById('adrError')
let userregex = /^[A-Za-z]\w{2,20}$/;
let passregex = /^[A-Za-z1-9]$/;
let phoneregex = /^[1-9]\w{10,16}$/
let emailregex = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/
// let msgregex = /[^A-Za-z0-9]+/







form.addEventListener('submit', (e) => {
   if (username.value == '') {
      e.preventDefault()
      userError.innerHTML = " This feild is empty"
   }

   else if (!username.value.match(userregex)) {
      e.preventDefault()
      userError.innerHTML = "Invalid Format"
   } else if (username.value.lenght != 0) {
      userError.innerHTML = ""
   }  
   
   
   
   if (password.value.lenght == 0) {
      e.preventDefault()
      passError.innerHTML = "Password Feild Connot be Empty"
   } else if (password.value.lenght != 0) {
      passError.innerHTML = ""
   }else if (!password.value.match(userregex)) {
      e.preventDefault()
      passError.innerHTML = "Password must contain Letters and Numbers and be 6-16 characters "
   } else if (password.value.lenght > 1){
      passError.innerHTML = ""
   }


   if (confpassword.value == '') {
      e.preventDefault()
      confpassError.innerHTML = "Password Feild Connot be Empty"
   } else if (password.value != confpassword.value) {
      e.preventDefault()
      confpassError.innerHTML = "Password Not Match"
   } else if (confpassword.value.lenght != 0) {
      confpassError.innerHTML = ""
   }


   
   
   if (cphone.value == '') {
      e.preventDefault()
      phoneError.innerHTML = " this feild is empty"
   } else if (!cphone.value.match(phoneregex)) {
      e.preventDefault()
      phoneError.innerHTML = " invalid phone number"

   } else if (cphone.value.match(phoneregex)) {
      phoneError.innerHTML = ""

   }


   if (cemail.value == "") {
      e.preventDefault()
      mailError.innerHTML = "this feild is empty"
   } else if (!cemail.value.match(emailregex)) {
      e.preventDefault()
      mailError.innerHTML = "invalid email format"
   }
   
 


 // form_contact.addEventListener('submit', (e) => {

   //    // if (username.value == '') {
   //    //    e.preventDefault()
   //    //    userError.innerHTML = " Empty feild"
   //    // }
   //    // else if (!username.value.match(userregex) ) {
   //    //    e.preventDefault()
   //    //    userError.innerHTML = "Invalid UserName Format"
   //    // } else if (username.value.lenght != 0) {
   //    //    userError.innerHTML = ""
   //    // }

   //    if(mailError.value== ''){
   //       e.preventDefault()
   //       mailError.innerHTML == "empty feild"
   //    }


// if (!caddresse.value.match(msgregex)) {
   //    e.preventDefault()
   //    adrError.innerHTML = "symbol are not allowed"
   // }
   // else if (caddresse.value == "") {
   //    e.preventDefault()
   //    adrError.innerHTML = "this feild is required"
   // }



})



  


