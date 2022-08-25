const readMoreBtn = document.querySelector('.read-more-btn');
const text = document.querySelector('.text');

readMoreBtn.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');
    if(readMoreBtn.innerText === 'read less'){
        readMoreBtn.innerText = 'read more';
    }else {
        readMoreBtn.innerText = 'read less';
    }
})
//  section2
const readMoreBtn1 = document.querySelector('.read-more-btn1');
const text1= document.querySelector('.text1');

readMoreBtn1.addEventListener('click',(e)=>{
    text1.classList.toggle('show-more');
    if(readMoreBtn1.innerText === 'read less'){
        readMoreBtn1.innerText = 'read more';
    }else {
        readMoreBtn1.innerText = 'read less';
    }
})

// section3

const readMoreBtn2 = document.querySelector('.read-more-btn2');
const text2= document.querySelector('.text2');

readMoreBtn2.addEventListener('click',(e)=>{
    text2.classList.toggle('show-more');
    if(readMoreBtn2.innerText === 'read less'){
        readMoreBtn2.innerText = 'read more';
    }else {
        readMoreBtn2.innerText = 'read less';
    }
})


// section4

const readMoreBtn3 = document.querySelector('.read-more-btn3');
const text3= document.querySelector('.text3');

readMoreBtn3.addEventListener('click',(e)=>{
    text3.classList.toggle('show-more');
    if(readMoreBtn3.innerText === 'read less'){
        readMoreBtn3.innerText = 'read more';
    }else {
        readMoreBtn3.innerText = 'read less';
    }
})











