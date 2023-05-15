const homeHover = document.getElementById('homeHover');


homeHover.addEventListener('mouseOver', ()=>{
    this.style.backgroundColor = '#ffffffaa';
})

homeHover.addEventListener('mouseOut', ()=>{
    this.style.backgroundColor = '#ffffff00';
})