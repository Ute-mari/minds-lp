'use strict';

//点滅
const dd = document.querySelectorAll('.answer');
const active = document.querySelector('.active');

dd.forEach(function(element){
    element.addEventListener('click',function(){
        element.classList.add('active');
        dd.forEach(function(el){
            if(el !== element){
                el.classList.remove('active');
            }
        })
    })
})

//5番目入力後、メールアドレス項目表示
const num5 = document.querySelector('.num5');
const mail = document.querySelector('.your_email');

num5.addEventListener('input',function(){
    mail.classList.add('open');
})