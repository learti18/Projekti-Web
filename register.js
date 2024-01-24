document.addEventListener("DOMContentLoaded", function (ngjarja) {
    const BtnSubmit = document.getElementById('submit-btn');
    
    const invalidEmail = document.getElementById('invalid-email');
    const invalidPass = document.getElementById('invalid-pass');
    const invalidConfirm = document.getElementById('invalid-confirm');
    const invalidUsername = document.getElementById('invalid-username');
    /*Funksioni per te e validuar fushat e formes */
    const emailValid = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
    };

    const validate = (ngjarja) => {
        ngjarja.preventDefault();
        
        invalidPass.textContent = "";
        invalidConfirm.textContent = "";
        invalidEmail.textContent = "";
        invalidUsername.textContent = "";

        const emailin = document.getElementById('email');
        const fjalkalimi = document.getElementById('pass');
        const confirmFjalkalimi = document.getElementById('confirmpass');
        const username = document.getElementById('username');

        if (emailin.value === "") {
            invalidEmail.textContent = "Invalid email!.";
            emailin.focus();
            return false;
        }
        if(username.value === ""){
            invalidUsername.textContent = "Invalid username!";
            username.focus();
            return false;
        }
        if (!emailValid(emailin.value)) {
            invalidEmail.textContent = "Invalid email!";
            emailin.focus();
            return false;
        }
        if (fjalkalimi.value === "" || fjalkalimi.value.length < 7) {
            invalidPass.textContent = "Invalid password!"
            fjalkalimi.focus();
            return false;
        }
        if(fjalkalimi.value != confirmFjalkalimi.value){
            invalidConfirm.textContent = "Passwords do not match.";
            fjalkalimi.focus();
            return false;
        }

        return true; // mund te dergohet te serveri
    };

    BtnSubmit.addEventListener('click', validate);
});