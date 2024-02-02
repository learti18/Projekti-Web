document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".toggle-button");

    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            var category = this.getAttribute("data-category");
            buttons.forEach(function (btn) {
                btn.classList.remove("active");
            });

            this.classList.add("active");
            fetch("fetch_destinations.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: "category=" + category,
            })
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                clearDestinations(); // Clear existing destinations
                displayDestinations(data);
            })
            .catch(function (error) {
                console.error("Error fetching data: ", error);
            });
        });
    });

    // Trigger a click on the button associated with the "team" category after setting up the event listeners
    var teamButton = document.querySelector('[data-category="team"]');
    if (teamButton) {
        teamButton.click();
    }
});

function clearDestinations() {
    document.querySelector(".cards").innerHTML = ''; // Clear existing destinations
}

function displayDestinationCard(destination) {
    var imageUrl = destination.image_url !== '' ? './photos/' + destination.image_url : './photos/default_image.jpg';
    var city = destination.city;
    var price = destination.price;
    var startDate = new Date(destination.start_date);
    var endDate = new Date(destination.end_date);

    // Calculate residence time in days
    var residenceTimeInMilliseconds = endDate - startDate;
    var residenceTimeInDays = residenceTimeInMilliseconds / (1000 * 60 * 60 * 24);
    var residenceTimeInNights = residenceTimeInDays - 1;

    var cardHtml = `
        <div class="card">
            <div class="card-pic">
                <img class="img1" src="${imageUrl}" alt="pic of the sea">
                <p>${new Date(destination.start_date).toLocaleDateString()}</p>
            </div>
            <p class="residence-time"><span>${destination.category}</span> ${residenceTimeInDays} Days, ${residenceTimeInNights} Nights</p>
            <h3 class="destination-title1">${city}</h3>
            <div class="book-section">
                <p><span class="price">${price}$</span>/Person</p>
                <a href="product.php?id=${destination.destination_id}" class="buttons">Book Now</a>
            </div>
        </div>
    `;

    document.querySelector(".cards").insertAdjacentHTML('beforeend', cardHtml);
}

function displayDestinations(destinations) {
    destinations.forEach(function (destination) {
        displayDestinationCard(destination);
    });
}

//reviews slider
document.addEventListener('DOMContentLoaded', function() {
    let reviewCards = document.querySelectorAll('.review-card');
    let cardWidth = document.querySelector('.review-card').offsetWidth;
    let currentIndex = 0;

    document.getElementById('right-arrow').addEventListener('click', function() {
        const maxIndex = reviewCards.length - (isMobile() ? 1 : 2);
        if (currentIndex < maxIndex) {
            currentIndex += isMobile() ? 1 : 2;
            updateSlider();
        }
    });

    document.getElementById('left-arrow').addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex -= isMobile() ? 1 : 2;
            updateSlider();
        }
    });

    // Add an event listener for window resize
    window.addEventListener('resize', function() {
        updateSlider();
    });

    function updateSlider() {
        let isMobileScreen = isMobile();
        let transformValue = -currentIndex * cardWidth + 'px';
        reviewCards.forEach((card, index) => {
            if (index >= currentIndex && index < currentIndex + (isMobileScreen ? 1 : 2)) {
                card.style.display = 'flex';
                card.classList.remove('review-card-hidden'); // Remove the hidden class
            } else {
                card.style.display = 'none';
                if (!isMobileScreen && index === currentIndex + 1) {
                    card.classList.add('review-card-hidden'); // Add the hidden class to the second card on larger screens
                }
            }
        });
    }

    // Show the first card by default
    updateSlider();

    // Function to check if the screen width is considered mobile
    function isMobile() {
        return window.innerWidth <= 768; // Adjust the breakpoint as needed
    }
});