function openChat() {
    // Open Tawk.to chat widget if needed
    if (typeof Tawk_API !== 'undefined') {
        Tawk_API.toggle(); // This will toggle the chat window (open/close)
    }
}

function closeChat() {
    // Close the modal if using custom modal (optional)
    document.getElementById('chat-modal').style.display = 'none';
}

document.getElementById("booking-form").addEventListener("submit", function (event) {
    event.preventDefault();
    
    const dogName = document.getElementById("dog-name").value;
    const walkTime = document.getElementById("walk-time").value;
    const address = document.getElementById("address").value;

    if (dogName === "" || walkTime === "" || address === "") {
        alert("Please fill in all fields before submitting the booking.");
    } else {
        alert(`Booking successful for ${dogName} at ${walkTime}. Address: ${address}`);
    }
});

document.getElementById("walker-form").addEventListener("submit", function (event) {
    event.preventDefault();
    
    const walkerName = document.getElementById("walker-name").value;
    const walkerEmail = document.getElementById("walker-email").value;
    const walkerPhone = document.getElementById("walker-phone").value;

    if (walkerName === "" || walkerEmail === "" || walkerPhone === "") {
        alert("Please fill in all fields before submitting your registration.");
    } else {
        alert(`Thank you for registering as a dog walker, ${walkerName}. We will contact you soon!`);
    }
});
