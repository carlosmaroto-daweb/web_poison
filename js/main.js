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
    
    const gap = parseInt(window.getComputedStyle(container).gap);
    const columnWidth = cards[0].offsetWidth + gap;
    const columns = Math.floor(container.offsetWidth / columnWidth) + 1;
    let columnHeights = Array.from({ length: columns }, () => 0);
    cards.forEach(card => {
        const minHeight = Math.min(...columnHeights);
        console.log(minHeight);
        const columnIndex = columnHeights.indexOf(minHeight); // Obtener el índice de la columna más corta
        const leftOffset = columnIndex * columnWidth; // Calcular el desplazamiento horizontal
        const topOffset = columnHeights[columnIndex]; // Calcular el desplazamiento vertical

        card.style.position = 'absolute';
        card.style.left = `${leftOffset}px`;
        card.style.top = `${topOffset}px`;

        columnHeights[columnIndex] += card.offsetHeight + gap; // Actualizar la altura de la columna
    });

    const maxColumnHeight = Math.max(...columnHeights); // Obtener la altura máxima de todas las columnas
    container.style.height = `${maxColumnHeight}px`; // Establecer la altura del contenedor
    */
}