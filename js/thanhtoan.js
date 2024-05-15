// document.addEventListener("DOMContentLoaded", {
// })
let mainThanhToan = document.querySelector(".main");
let iconClose = document.querySelector(".icon_close");
let thanhToanBtn = document.querySelector(".btnthanhtoan");

thanhToanBtn.addEventListener("click", function() {
    mainThanhToan.classList.add("active");
});

iconClose.addEventListener("click", function () {
    mainThanhToan.classList.remove("active");
})

let imgQRBank = document.querySelector(".qrbank");
let imgQRMomo = document.querySelector(".qrmomo");

let btnBank = document.querySelector(".bankqr");
let btnBankMomo = document.querySelector(".momoqr");
let btnPayMoney = document.querySelector(".paymoney");
let btnBankPaypal = document.querySelector(".paypalqr");



btnBankMomo.addEventListener("click", function() {
    imgQRBank.classList.remove("active");
    imgQRMomo.classList.add("active");
});

btnBank.addEventListener("click", function() {
    imgQRBank.classList.add("active");
    imgQRMomo.classList.remove("active");
});

btnBankPaypal.addEventListener("click", function() {
    alert("Nhà hàng không hỗ trợ hình thức thanh toán, vui lòng chọn phương thức khác")
});
btnPayMoney.addEventListener("click", function() {
    alert("Xác nhận thanh toán bằng tiền mặt!")
});



