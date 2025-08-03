// 滚动感知
// 导航栏
if (document.getElementById('home')) {
    const header = document.querySelector('.header-wrapper');
    const sub = document.querySelector('.sub');
    const navLinks = document.querySelectorAll('.header-nav-li a');
    header.classList.add('home');
    sub.classList.add('home');
    navLinks.forEach(link => link.classList.add('home'));
    window.addEventListener('scroll', () => {
        if (window.scrollY >= 10) {
            header.classList.add('scrolled');
            sub.classList.add('scrolled');
            navLinks.forEach(link => link.classList.add('scrolled'));
        } else {
            header.classList.remove('scrolled');
            sub.classList.remove('scrolled');
            navLinks.forEach(link => link.classList.remove('scrolled'));
        }
    });
}

