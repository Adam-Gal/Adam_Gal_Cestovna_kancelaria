// Define a function to toggle the button state
function toggleButton(btn) {
    if (btn.style.backgroundColor === 'grey') {
        btn.style.backgroundColor = 'green';
        btn.textContent = 'Vybraté';
    } else {
        btn.style.backgroundColor = 'grey';
        btn.textContent = 'Vybrať';
    }
}

// Get all the buttons
const buttons = document.querySelectorAll('[id^="btn"]');

// Add event listener to each button
buttons.forEach(btn => {
    btn.addEventListener('click', () => toggleButton(btn));
});
