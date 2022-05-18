
document.querySelector('.nav_burger').onclick = function () {
    document.querySelector('.nav_burger').classList.toggle('active');
    document.querySelector('#nav').classList.toggle('active');
    document.querySelector('header').classList.toggle('active');
    document.querySelector('#btn').classList.toggle('none');
    document.querySelector('body').classList.toggle('lock');
}
/*var itemsCarusel = document.querySelectorAll('.carousel-item');
var index = itemsCarusel.length;
document.querySelector('#around').textContent = "/" + index;
var span = document.querySelector("#current");
var txt = 1;
span.textContent = txt;
console.log(index);
const myCarousel = document.getElementById('carouselExampleInterval')
myCarousel.addEventListener('slide.bs.carousel', event => {
    document.querySelector('#around').textContent = "/" + index;

})*/
var num = document.querySelectorAll('#current');
var prew = false;
const myCarousel = document.getElementById('carouselExampleInterval')
myCarousel.addEventListener('slide.bs.carousel', event => {
    setTimeout(slide,500);
    function slide(){
        if(!prew)   
        {
            for(var i = 0 ; i < num.length; i++)
            {
                if(num[i].classList.contains('active'))
                {
                    if(i+1==num.length)
                    {
                        num[i].classList.remove('active');
                        num[0].classList.add('active');
                    }
                    else{
                        num[i].classList.remove('active');
                        num[++i].classList.add('active');
                    }
                        
                }
                
            }
        }
        else
            prew = false;
    }
});
document.querySelector('.carousel-control-prev').onclick=  function(){
    prew=true;
    setTimeout(prewSlide,500);
    function prewSlide(){
        for(var i=num.length-1; i >= 0; i--)
        {
            if(num[i].classList.contains('active'))
            {
                if(i==0)
                {
                    num[0].classList.remove('active');
                    num[num.length-1].classList.add('active');
                }
                else{
                    num[i].classList.remove('active');
                    num[--i].classList.add('active');
                }
                        
            }
        }
    }
}