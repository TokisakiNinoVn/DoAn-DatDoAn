document.addEventListener('DOMContentLoaded', function () { 

    const formLogin = document.querySelector('.login_form')
    const formRegister = document.querySelector('.register_form')
    const switchRegister = document.querySelector('.switch_register')
    const switchLogin = document.querySelector('.switch_login')

    switchRegister.addEventListener('click', () => {
        formLogin.classList.remove('active')
        formRegister.classList.add('active')
    })


    switchLogin.addEventListener('click', () => {
        formLogin.classList.add('active')
        formRegister.classList.remove('active')
    })


})