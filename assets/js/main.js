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

/**
 * Checks if an element is in the visible area of the browser's viewport.
 * @param {HTMLElement} elem - The HTML element to check.
 * @returns {boolean} - Returns true if the element is in the viewport, otherwise returns false.
 */
function isInViewport(elem) {
    let distance = elem.getBoundingClientRect();
    return (distance.top < (window.innerHeight || document.documentElement.clientHeight) && distance.bottom > 0);
}

/**
 * Manages animations for elements based on their visibility in the viewport.
 * Checks for specific CSS classes and replaces them with viewport-specific classes if the element is in the viewport.
 */
function manageAnimations() {
    // Animate Slide Left
    let elements = document.getElementsByClassName('animate-slide-left');
    for (let i=0; i<elements.length; i++) {
        if (isInViewport(elements[i])) {
            elements[i].classList.replace('animate-slide-left', 'animate-slide-left-viewport');
            i--;
        }
    }
    // Animate Slide Right
    elements = document.getElementsByClassName('animate-slide-right');
    for (let i=0; i<elements.length; i++) {
        if (isInViewport(elements[i])) {
            elements[i].classList.replace('animate-slide-right', 'animate-slide-right-viewport');
            i--;
        }
    }
    // Animate Show Slide
    elements = document.getElementsByClassName('animate-show-slide');
    for (let i=0; i<elements.length; i++) {
        if (isInViewport(elements[i])) {
            elements[i].classList.replace('animate-show-slide', 'animate-show-slide-viewport');
            i--;
        }
    }
}

/**
 * Manages the display of a scroll icon based on the scroll position.
 * Adds or removes CSS classes to the scroll icon element to control its animation.
 */
function showScroll() {
    var scrollIcon = document.getElementById('scroll-icon');
    if (scrollIcon) {
        if (window.scrollY > 0) {
            scrollIcon.classList.add('animate-slide-bottom');
            scrollIcon.classList.remove('animate-slide-bottom-viewport');
        } else {
            scrollIcon.classList.add('animate-slide-bottom-viewport');
            scrollIcon.classList.remove('animate-slide-bottom');
        }
    }
};

/**
 * Adjusts the layout of a masonry grid to ensure even heights of cards in each row.
 * Uses CSS transforms to adjust the vertical position of cards.
 */
function adjustMasonry() {
    // Get the container element
    const container = document.getElementById('card-container');

    // Check if the container exists
    if (container) {

        // Get all card elements inside the container and check if there are any card elements
        const cards = container.querySelectorAll('.card');
        if (cards.length > 0) {

            // Reset the vertical position of all cards
            const numCards = cards.length;
            for (let i=0; i<numCards; i++) {
                cards[i].style.transform = 'translateY(0px)';
            }

            // Check if the display style of the element is "grid"
            let containerDisplay = window.getComputedStyle(container).display;
            if (containerDisplay == "grid") {

                // Calculate column width and number of columns and row
                const gap = parseInt(window.getComputedStyle(container).gap);
                const columnWidth = cards[0].offsetWidth + gap;
                const columns = Math.floor(container.offsetWidth / columnWidth) + 1;
                const rows = numCards / columns;

                // Initialize variables for storing height differences
                let diffHeights = [];
                let maxHeights = 0;
                let indexCard = 0;
                let indexAux = 0;

                // If there are more than one column
                if (columns > 1) {
                    // Calculate height differences for each row
                    for (let i=0; i<rows; i++) {
                        diffHeights[i] = [];
                        maxHeights = 0;
                        indexAux = indexCard;
                        for (let j=0; j<columns && indexAux<numCards; j++) {
                            if (cards[indexAux].clientHeight > maxHeights) {
                                maxHeights = cards[indexAux].clientHeight;
                            }
                            indexAux++;
                        }
                        for (let j=0; j<columns && indexAux<numCards; j++) {
                            diffHeights[i][j] = maxHeights - cards[indexCard].clientHeight;
                            indexCard++;
                        }
                    }
                    // If there is more than one row, adjust the vertical position of cards
                    if (rows > 1) {
                        indexCard = columns;
                        let totalDifference = 0;
                        for (let i=1; i<rows; i++) {
                            for (let j=0; j<columns && indexCard<numCards; j++) {
                                totalDifference = 0;
                                for (let k=0; k<i; k++) {
                                    totalDifference += diffHeights[k][j];
                                }
                                cards[indexCard].style.transform = 'translateY(' + (- totalDifference) + 'px)';
                                indexCard++;
                            }
                        }
                    }
                }
            }
            else {
                // Enable horizontal scrolling of the container using mouse events
                let isDown = false;
                let startX;
                let scrollLeft;
                
                container.addEventListener('mousedown', (event) => {
                    isDown = true;
                    startX = event.pageX - container.offsetLeft;
                    scrollLeft = container.scrollLeft;
                });
                container.addEventListener('mouseleave', () => {
                    isDown = false;
                });
                container.addEventListener('mouseup', () => {
                    isDown = false;
                });
                container.addEventListener('mousemove', (event) => {
                    if(!isDown) return;
                    event.preventDefault();
                    const x = event.pageX - container.offsetLeft;
                    const walk = x - startX;
                    container.scrollLeft = scrollLeft - walk;
                    container.style.scrollBehavior = 'auto';
                });
            }
        }
    }
}

var posts_per_page = 12;
var offset = posts_per_page;
document.getElementById('load-more-posts').addEventListener('click', function() {

    // Define the URL for the AJAX request
    var ajaxurl = 'https://sidn.infinityfreeapp.com/wp-admin/admin-ajax.php';

    // Make a fetch request to the defined URL
    fetch(ajaxurl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'action=load_more_posts&offset=' + offset
    })
    // Process the response as JSON
    .then(function(response) {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    // Once the JSON data is received, perform actions with it
    .then(function(data) {
        // Insert the received posts data into the HTML element with the id 'card-container'
        document.getElementById('card-container').insertAdjacentHTML('beforeend', data.posts);
        // Call functions to manage animations and adjust masonry layout
        manageAnimations();
        adjustMasonry();
        // Increment the offset by posts_per_page
        offset += posts_per_page;
        // If the offset exceeds or equals the total number of posts, hide the 'load-more-posts' button
        if (offset >= data.total_posts) {
            document.getElementById('load-more-posts').style.display = 'none';
        }
    })
    .catch(function(error) {
        console.error('There was a problem with the fetch operation:', error);
    });
});