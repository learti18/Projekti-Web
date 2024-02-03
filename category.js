document.addEventListener("DOMContentLoaded", function () {
    var buttons = document.querySelectorAll(".toggle-button");
    var currentCategory = "team"; // Set the default category to "team"

    var defaultButton = document.querySelector('.toggle-button[data-category="' + currentCategory + '"]');
    if (defaultButton) {
        defaultButton.classList.add("activebtn");
    }

    function handleCategoryChange(category) {
        // Update the current category
        currentCategory = category;

        // Fetch and display destinations for the current category
        console.log("Fetching destinations for category:", currentCategory);
        fetchDestinations(currentCategory);
    }

    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            var category = this.getAttribute("data-category");
            buttons.forEach(function (btn) {
                btn.classList.remove("activebtn");
            });

            // Add 'active' class to the clicked button
            this.classList.add("activebtn");

            // Check if the selected category is different from the current one
            if (category !== currentCategory) {
                console.log("Category changed. New category:", category);
                handleCategoryChange(category);
            } else {
                console.log("Category already active. No change needed.");
            }
        });
    });

    // Fetch and display default destinations on page load with a delay
    setTimeout(function () {
        console.log("Initial fetch for category:", currentCategory);
        handleCategoryChange(currentCategory);
    }, 100); 
});


function fetchDestinations(category) {
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
}

function clearDestinations() {
    console.log("Clearing existing destinations.");
    document.querySelector(".cards").innerHTML = ''; // Clear existing destinations
}

function displayDestinationCard(destination) {
    let imageUrl = destination.first_image_url !== './photos/' ? destination.first_image_url : './photos/default_image.jpg';
    let city = destination.city;
    let price = destination.price;
    let startDate = new Date(destination.start_date);
    let endDate = new Date(destination.end_date);
    let durationDays = Math.floor((endDate - startDate) / (1000 * 60 * 60 * 24));
    let durationNights = durationDays - 1;

    let cardHtml = `
        <div class="card">
            <div class="card-pic">
                <img class="img1" src="${imageUrl}" alt="pic of the sea">
                <p>${new Date(destination.start_date).toLocaleDateString()}</p>
            </div>
            <p class="residence-time"><span>${destination.category}</span> ${durationDays} Days, ${durationNights}Nights</p>
            <h3 class="destination-title1">${city}</h3>
            <div class="book-section">
                <p><span class="price">${price}$</span>/Person</p>
                <a href="product.php?id=${destination.destination_id}" class="buttons">Book Now</a>
            </div>
        </div>
    `;

    document.querySelector(".cards").insertAdjacentHTML('beforeend', cardHtml);
}

function displayDestinations(response) {
    // Check if the 'data' property exists in the response and is an array
    if (response.data && Array.isArray(response.data)) {
        response.data.forEach(function (destination) {
            displayDestinationCard(destination);
        });
    }
    console.log("Displaying destinations:", response.data);
}

//recommended cards
document.addEventListener("DOMContentLoaded", function () {
    var recommendedButtons = document.querySelectorAll(".recommended-toggle");
    var currentCategory = "popular"; // Set the default category to "popular"

    // Add 'active' class to the button corresponding to the default category
    var defaultButton = document.querySelector('.recommended-toggle[data-category="' + currentCategory + '"]');
    if (defaultButton) {
        defaultButton.classList.add("rec-active");
    }

    function handleCategoryChange(category) {
        // Update the current category
        currentCategory = category;

        // Fetch and display recommended destinations for the current category
        console.log("Fetching recommended destinations for category:", currentCategory);
        fetchRecommendedDestinations(currentCategory);
    }

    recommendedButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var category = this.getAttribute("data-category");
            recommendedButtons.forEach(function (btn) {
                btn.classList.remove("rec-active");
            });

            // Add 'active' class to the clicked button
            this.classList.add("rec-active");

            // Check if the selected category is different from the current one
            if (category !== currentCategory) {
                console.log("Category changed. New category:", category);
                handleCategoryChange(category);
            } else {
                console.log("Category already active. No change needed.");
            }
        });
    });

    // Fetch and display default recommended destinations on page load
    console.log("Initial fetch for recommended category:", currentCategory);
    handleCategoryChange(currentCategory);
});
function fetchRecommendedDestinations(category) {
    fetch("fetch_recommended_destinations.php", {
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
        clearRecommendedDestinations();
        displayRecommendedDestinations(data);
    })
    .catch(function (error) {
        console.error("Error fetching recommended data: ", error);
    });
}

function clearRecommendedDestinations() {
    console.log("Clearing existing recommended destinations.");
    document.querySelector(".destination-cards").innerHTML = ''; 
}

function displayRecommendedDestinationCard(destination) {
    let imageUrl = destination.first_image_url !== './photos/' ?  destination.first_image_url : './photos/default_image.jpg';

    let cardHtml = `
        <a class="card-destination" href="product.php?id=${destination.destination_id}">
            <span class="photos-destination"><img src="${imageUrl}" alt="pic of the sea">${destination.city}</span>
            <span class="photos-destination2"><img src="photos/Location.svg">${destination.country}</span>
        </a>
    `;

    document.querySelector(".destination-cards").insertAdjacentHTML('beforeend', cardHtml);
}

function displayRecommendedDestinations(response) {
    // Check if the 'data' property exists in the response and is an array
    if (response.data && Array.isArray(response.data)) {
        response.data.forEach(function (destination) {
            displayRecommendedDestinationCard(destination);
        });
    }
    console.log("Displaying recommended destinations:", response.data);
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



//navbar
const menuBtn = document.querySelector(".menu-btn")
            const barsLogo = document.querySelector(".bx-menu")
            const xLogo = document.querySelector(".bx-x")
            const sideBar = document.querySelector(".sidebar")
            const nav = document.querySelector("nav")
            const logo =document.querySelector(".logo a")

            let isSidebarActive = false;

            menuBtn.addEventListener("click",function(){
            // Toggle sidebar visibility
                isSidebarActive = !isSidebarActive
                isSidebarActive ? sideBar.style = "display:flex" : sideBar.style = "display:none"
            // Toggle background color and logo color based on sidebar state
                isSidebarActive ? nav.style = "background: #fff" : nav.style = "background: none";
                isSidebarActive ? logo.style = "color:#3E86F5;" : logo.style = "color:#fff"
            // Toggle menu icons
                isSidebarActive ? barsLogo.style = "display:none" : barsLogo.style = "display: flex"
                isSidebarActive ? xLogo.style = "display:flex" : xLogo.style = "display: none"
            })
