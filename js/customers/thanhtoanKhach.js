// document.addEventListener("DOMContentLoaded", {
// })
let mainThanhToan = document.querySelector(".main_form_thanhtoan");
let iconClose = document.querySelector(".icon_close");
let thanhToanBtn = document.querySelector(".view_thanhtoan");
let cancelPay = document.querySelector(".cancel_pay");

thanhToanBtn.addEventListener("click", function() {
    mainThanhToan.classList.add("active");
});

iconClose.addEventListener("click", function () {
    mainThanhToan.classList.remove("active");
})
cancelPay.addEventListener("click", function () {
    mainThanhToan.classList.remove("active");
})



document.addEventListener('DOMContentLoaded', (event) => {
    let optionPay = document.querySelector('.pay_type');
    let optionPayType = document.querySelector('.options_pay');
    let optionPayTypeMenu = document.querySelector('.menuType');
    // let qrImage = document.querySelector('.options');
    let imgQRBank = document.querySelector(".qrbank");
    let imgQRMomo = document.querySelector(".qrmomo");

    optionPay.addEventListener('change', function() {
        let valueOptionPay = optionPay.value;

        if(valueOptionPay === 'offline') {
            optionPayType.classList.remove('active');
        } else {
            optionPayType.classList.add('active');
        }
    });
    
    optionPayTypeMenu.addEventListener('change', function () { 
        let valuePay = optionPayTypeMenu.value
        if (valuePay == 1) {
            imgQRBank.classList.add('active')
            imgQRMomo.classList.remove('active')
            return
        }
        if (valuePay == 2) {
            imgQRBank.classList.remove('active')
            imgQRMomo.classList.add('active')
            return
        }
        if (valuePay == 3) {
            alert("Nhà hàng không hỗ trợ hình thức này!")
            optionPayTypeMenu.value = 1
            return
        }
    })
    // Trigger change event on page load to set initial state
    optionPay.dispatchEvent(new Event('change'));
    optionPayTypeMenu.dispatchEvent(new Event('change'));
});


