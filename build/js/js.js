const nav = document.querySelector('.barra-navegacion');
console.log(nav)

window.addEventListener('scroll',function(){
    nav.classList.toggle('active',window.scrollY>0);
})