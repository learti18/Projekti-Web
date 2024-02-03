document.addEventListener("DOMContentLoaded", function (ngjarja) {
    // Get references to DOM elements
    const BtnSubmit = document.getElementById('submit-btn');
    let invalidEmail = document.getElementById('invalid-email');
    let invalidPass = document.getElementById('invalid-pass');  

    // Validation function that runs when the form is submitted
    const validate = (ngjarja) => {
        ngjarja.preventDefault();

        // Get references to input fields
        const fjalkalimi = document.getElementById('pass');
        const username = document.getElementById('username');

        invalidPass.textContent = "";
        invalidEmail.textContent = "";
        
        // Validate username
        if(username.value === ""){
            invalidEmail.textContent = "Invalid Email!"
            fjalkalimi.focus();
            return false;
        }

        if (fjalkalimi.value === "" || fjalkalimi.value.length < 7) {
            invalidPass.textContent = "Invalid password!"
            fjalkalimi.focus();
            return false;
        }

        return true; // mund te dergohet te serveri
    };
});
