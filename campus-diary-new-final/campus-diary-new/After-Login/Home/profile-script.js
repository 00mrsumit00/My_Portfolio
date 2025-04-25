
// Change to navbar elements
const topicList = document.getElementById('topic-list');
const topics = document.querySelectorAll('.topic');

// Function to show selected tutorial and hide others
function showTopic(selectedTopic) {
    topics.forEach(tutorial => {
        if (tutorial.id === selectedTopic) {
            tutorial.style.display = 'flex';

        } else {
            tutorial.style.display = 'none';
        }
    });

    const activeItem = document.querySelector('.activeTopic');
    if (activeItem) {
        activeItem.classList.remove('activeTopic');
    }
    document.getElementById(selectedTopic).classList.add('activeTopic');
}

// Event listener for tutorial list items
topicList.addEventListener('click', (event) => {
    if (event.target.tagName === 'LI') {
        const selectedTopic = event.target.id;
        showTopic(selectedTopic);
    }
});

// Show default tutorial on page load
showTopic(topicList.firstElementChild.id);


// Display html Code
const tutorialList = document.getElementById('tutorial-list');
const tutorials = document.querySelectorAll('.tutorial');

// Function to show selected tutorial and hide others
function showTutorial(selectedTopic) {
    tutorials.forEach(tutorial => {
        if (tutorial.id === selectedTopic) {
            tutorial.style.display = 'block';

        } else {
            tutorial.style.display = 'none';
        }
    });

    const activeItem = document.querySelector('.active');
    if (activeItem) {
        activeItem.classList.remove('active');
    }
    document.getElementById(selectedTopic).classList.add('active');
}

// // Function to show next tutorial in the navigation
// function showNextTutorial() {
//     const activeItem = document.querySelector('.tutorial.active');
//     if (activeItem) {
//         const nextTutorial = activeItem.nextElementSibling;
//         if (nextTutorial) {
//             showTutorial(nextTutorial.id); // Call the function to show the next tutorial
//             const selectedTopic = nextTutorial.id;
//             showTopic(selectedTopic); // Call the function to activate the corresponding navigation item
//         }
//     }
// }

// // Event listener for "Next" button
// document.getElementById('next-btn').addEventListener('click', () => {
//     showNextTutorial(); // Call the function to show the next tutorial
// });

// Event listener for tutorial list items
tutorialList.addEventListener('click', (event) => {
    if (event.target.tagName === 'LI') {
        const selectedTopic = event.target.id;
        showTutorial(selectedTopic);
    }
});

// Show default tutorial on page load
showTutorial(tutorialList.firstElementChild.id);


