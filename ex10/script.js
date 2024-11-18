$(document).ready(function () {
    // Screen resolution minus some offset
    const width = screen.width - 150;
    const height = screen.height - 300;
    const numBubbles = 5; // Number of bubbles to display

    // Function to generate a random letter between A-Z
    function generateRandomLetter() {
        const randomCode = Math.floor(Math.random() * 26) + 65; // ASCII codes for A-Z
        return String.fromCharCode(randomCode);
    }

    // Function to generate a random color
    function generateRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Function to place a bubble in a random position
    function createBubble() {
        const letter = generateRandomLetter();
        const randomX = Math.floor(Math.random() * (width - 100));
        const randomY = Math.floor(Math.random() * (height - 100));
        const color = generateRandomColor();

        // Create bubble element
        const bubble = $('<div class="bubble"></div>')
            .text(letter)
            .css({
                'background-color': color,
                'left': randomX + 'px',
                'top': randomY + 'px'
            })
            .attr('data-letter', letter);

        // Append to the bubble container
        $('#bubble-container').append(bubble);
    }

    // Function to initialize bubbles
    function initializeBubbles() {
        $('#bubble-container').empty(); // Clear existing bubbles
        for (let i = 0; i < numBubbles; i++) {
            createBubble();
        }
    }

    // Initial bubbles generation
    initializeBubbles();

    // Event listener for keypress
    $(document).on('keypress', function (e) {
        const pressedKey = String.fromCharCode(e.which).toUpperCase();

        // Check if any bubble has the pressed letter
        $('.bubble').each(function () {
            const bubbleLetter = $(this).attr('data-letter');
            if (pressedKey === bubbleLetter) {
                $(this).remove(); // Remove the bubble
                createBubble(); // Create a new bubble
            }
        });
    });
});
