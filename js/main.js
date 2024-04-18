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
    /*
    const container = document.getElementById('card-container');
    const cards = container.querySelectorAll('.card');

    const columns = 4; // Número de columnas
    const columnHeights = Array.from({ length: columns }, () => 0);

    cards.forEach(card => {
        const minHeightIndex = columnHeights.indexOf(Math.min(...columnHeights));
        const minHeight = columnHeights[minHeightIndex];

        card.style.position = 'absolute';
        card.style.left = `${minHeightIndex * (100 / columns)}%`; // Calcula la posición horizontal basada en el número de columnas
        card.style.top = `${minHeight}px`; // Asigna la posición vertical basada en la columna más corta

        columnHeights[minHeightIndex] += card.offsetHeight + 30; // Suma la altura de la tarjeta a la columna
    });

    container.style.height = `${Math.max(...columnHeights)}px`; // Establece la altura del contenedor basada en la columna más alta
    */
}