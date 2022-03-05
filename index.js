const videobtn = document.querySelector('.video-btn');
const darkbtn =  document.querySelector('.dark-btn');
videobtn.addEventListener('mouseenter', function(){
    videobtn.classList.toggle('video-btn-hover')
})

darkbtn.addEventListener('click', function(){
    console.log("click")
})
