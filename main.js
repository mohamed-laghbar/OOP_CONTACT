const username = document.getElementById('username')
const password = document.getElementById('password')
const form = document.getElementById('form')
const confpassword = document.getElementById('confpassword')
const userError = document.getElementById('userError')
const passError = document.getElementById('passError')
const confpassError = document.getElementById('confpassError')
const userregex = /^[A-Za-z]\w{2,20}$/;
const passregex = /^[A-Za-z1-9]$/;






   form.addEventListener('submit', (e) => {
      if (username.value == '') {
         e.preventDefault()
         userError.innerHTML = " Empty feild"
      }
      else if (!username.value.match(userregex)) {
         e.preventDefault()
         userError.innerHTML = "Invalid UserName Format"
      } else if (username.value.lenght != 0) {
         userError.innerHTML = ""
      }

      if (password.value == '') {
         e.preventDefault()
         passError.innerHTML = "Password Feild Connot be Empty"
      } else if (!password.value.match(userregex)) {
         e.preventDefault()
         passError.innerHTML = "Password must contain Letters and Numbers and be 6-16 characters "
      } else if (password.value.lenght != 0) {
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

      









   })