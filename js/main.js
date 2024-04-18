/*****************************************************************************/
/** EVENTS **/
/*****************************************************************************/

window.addEventListener('load', manageAnimations);
window.addEventListener('load', showScroll);
window.addEventListener('load', adjustMasonry);
window.addEventListener('scroll', manageAnimations);
window.addEventListener('scroll', showScroll);
window.addEventListener('resize', adjustMasonry);

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
    elements = document.getElementsByClassName('animate-show-slide');
    for (let i=0; i<elements.length; i++) {
        if (isInViewport(elements[i])) {
            elements[i].classList.replace('animate-show-slide', 'animate-show-slide-viewport');
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

function adjustMasonry() {
    const container = document.getElementById('card-container');
    const cards = container.querySelectorAll('.card');

    const gap = parseInt(window.getComputedStyle(container).gap);
    const columnWidth = cards[0].offsetWidth + gap;
    const columns = Math.floor(container.offsetWidth / columnWidth) + 1;
    const numCards = cards.length;
    const rows = numCards / columns;

    let diffHeights = [];
    let maxHeights = 0;
    let indexCard = 0;
    let indexAux = 0;

    for (let i=0; i<rows; i++) {
        diffHeights[i] = [];
        maxHeights = 0;
        indexAux = indexCard;
        for (let j=0; j<columns; j++) {
            if (cards[indexAux].clientHeight > maxHeights) {
                maxHeights = cards[indexAux].clientHeight;
            }
            indexAux++;
        }
        for (let j=0; j<columns; j++) {
            diffHeights[i][j] = maxHeights - cards[indexCard].clientHeight;
            indexCard++;
        }
    }
    
    indexCard = columns;
    let totalDifference = 0;
    for (let i=1; i<rows; i++) {
        for (let j=0; j<columns; j++) {
            totalDifference = 0;
            for (let k=0; k<i; k++) {
                totalDifference += diffHeights[k][j];
            }
            cards[indexCard].style.transform = 'translateY(' + (- totalDifference) + 'px)';
            indexCard++;
        }
    }
}