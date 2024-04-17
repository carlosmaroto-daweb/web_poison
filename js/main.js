/*****************************************************************************/
/** EVENTS **/
/*****************************************************************************/

window.addEventListener('load', manageAnimations);
window.addEventListener('load', showScroll);
window.addEventListener('scroll', manageAnimations);
window.addEventListener('scroll', showScroll);

/*****************************************************************************/
/** FUNCTIONS **/
/*****************************************************************************/

function isInViewport(elem) {
    let distance = elem.getBoundingClientRect();
    return (distance.top < (window.innerHeight || document.documentElement.clientHeight) && distance.bottom > 0);
}

function manageAnimations() {
    let elements = document.getElementsByClassName('animate-slide-left');
    for (let i=0; i<elements.length; i++) {
        if (isInViewport(elements[i])) {
            elements[i].classList.replace('animate-slide-left', 'animate-slide-left-viewport');
            i--;
        }
    }
    elements = document.getElementsByClassName('animate-slide-right');
    for (let i=0; i<elements.length; i++) {
        if (isInViewport(elements[i])) {
            elements[i].classList.replace('animate-slide-right', 'animate-slide-right-viewport');
            i--;
        }
    }
}

function showScroll() {
    var scrollIcon = document.getElementById('scroll-icon');
    if (window.scrollY > 0) {
        scrollIcon.classList.add('animate-slide-bottom');
        scrollIcon.classList.remove('animate-slide-bottom-viewport');
    } else {
        scrollIcon.classList.add('animate-slide-bottom-viewport');
        scrollIcon.classList.remove('animate-slide-bottom');
    }
};