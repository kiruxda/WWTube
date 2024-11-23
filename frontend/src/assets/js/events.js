let sub_btn = document.querySelector('#content .sub-btn')
sub_btn.addEventListener('click', (event) =>{
    sub_btn.classList.toggle('unsub-btn')
    if(sub_btn.classList.contains('unsub-btn')){
        sub_btn.innerHTML='<span>Unsubscribe</span>'
        sub_btn.classList.remove('sub-btn')
    }
    else{
        sub_btn.innerHTML='<span>Subscribe</span>'
        sub_btn.classList.toggle('sub-btn')
    }
})

const searchBlock=document.querySelector('.search')
searchBlock.addEventListener('keydown', (event) =>{
    console.log(searchBlock.value)
})