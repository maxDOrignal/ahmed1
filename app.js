const menuBar = document.querySelector('.parBars');
const b1      = document.querySelector('.b1');
const b2      = document.querySelector('.b2');
const b3      = document.querySelector('.b3');
const nav     = document.querySelector('.sec1 .header ul');
const bod     = document.querySelector('body');

menuBar.addEventListener('click', function() {
    console.log("ok");
    b1.classList.toggle('rotateR');
    b2.classList.toggle('hide');
    b3.classList.toggle('rotateL');
    nav.classList.toggle('show');
    document.body.classList.toggle('overflowHidden')
});


function translate() {
    
}