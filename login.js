document.addEventListener("DOMContentLoaded", function (ngjarja) {
    const BtnSubmit = document.getElementById('submit-btn');
    let invalidEmail = document.getElementById('invalid-email');
    let invalidPass = document.getElementById('invalid-pass');

    /*Funksioni per te e validuar fushat e formes */
    const emailValid = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
    };

    

    const validate = (ngjarja) => {
        ngjarja.preventDefault();
        const fjalkalimi = document.getElementById('pass');
        const emailin = document.getElementById('email');

        invalidPass.textContent = "";
        invalidEmail.textContent = "";

        if(emailin.value === ""){
            invalidEmail.textContent = "Invalid Email!"
            fjalkalimi.focus();
            return false;
        }

        if (fjalkalimi.value === "" || fjalkalimi.value.length < 7) {
            invalidPass.textContent = "Invalid password!"
            fjalkalimi.focus();
            return false;
        }
        if (!emailValid(emailin.value) || emailin.value === "") {
            invalidEmail.textContent = "Invalid email!.";
            emailin.focus();
            return false;
        }

        // Redirect to travelingWeb.html
        window.location.href = 'travelingWeb.html';

        return true; // mund te dergohet te serveri
    };

    BtnSubmit.addEventListener('click', validate);
});
