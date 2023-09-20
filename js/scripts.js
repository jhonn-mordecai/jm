//Set dynamic scroll padding for nav
function setScrollPadding() {
    const navHeight = document.querySelector('header').offsetHeight;
    document.documentElement.style.setProperty('--scroll-padding', navHeight - 1 + "px");
}
setScrollPadding();

// Listens for window resize, in case height of navbar changes
// NOT NEEDED RIGHT NOW
// window.addEventListener("resize", setScrollPadding);

//Copyright year
const year = new Date().getFullYear();
document.querySelector('.copyYear').textContent = year;

//Toggle Nav Menu
const toggleMenu = document.querySelector('.toggle-mobile-menu');
toggleMenu.addEventListener('click', (e) => {
    e.preventDefault();
    
    let icon = document.querySelector('.menu-toggle-icon');
    let hasClass = icon.classList.contains('fa-bars');

    if (hasClass) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
        toggleMenu.setAttribute('aria-expanded', 'true');
    } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
        toggleMenu.setAttribute('aria-expanded', 'false');
    }

    document.querySelector('.nav-right').classList.toggle('toggle-flex');
})

//Add bottom shadow to header on scroll
const header = document.querySelector('header');
const summarySection = document.querySelector('.summary');

window.addEventListener("scroll", () => {
    let scrollPos = header.offsetTop;
    let topOfSum = summarySection.offsetTop;

    if (scrollPos > topOfSum - '130') {
        header.classList.add('header-shadow');
    } else {
        header.classList.remove('header-shadow');
    }
})

//Handle Email Form
const submitEmail = document.getElementById("submitEmail");
const form = document.getElementById('email-form');

submitEmail.addEventListener("click", (e) => { 

    e.preventDefault();

    let params = {
        from_name: document.getElementById('name').value,
        email_id: document.getElementById('email').value,
        message: document.getElementById('message').value
    }
    
    emailjs.send("service_ojlo0il", "template_8maqzcb", params);
    form.reset();
})
