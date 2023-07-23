$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:4,
            },
            1000:{
                items:4,
            }
        }
    })
})
const observer =  new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});


const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el)=>observer.observe(el));