let btn = document.getElementById('btn');
onscroll=function(){
    if(this.scrollY >=50)
    {
        btn.style.display='block'
    }
    else
    {
        btn.style.display='none'
    }
}
btn.onclick = function(){
    scroll({
        top:0,
        behavior:"smooth",
    })
}




















