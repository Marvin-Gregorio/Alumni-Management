let printBtn  = document.querySelector('#printed');
let backBtn = document.querySelector('#home');

printBtn.addEventListener("click", function () {
    window.print();
})