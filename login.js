document.addEventListener("DOMContentLoaded", function (ngjarja) {
    const BtnSubmit = document.getElementById('submit-btn');
    let invalidEmail = document.getElementById('invalid-email');
    let invalidPass = document.getElementById('invalid-pass');    

    const validate = (ngjarja) => {
        ngjarja.preventDefault();
        const fjalkalimi = document.getElementById('pass');
        const username = document.getElementById('username');

        invalidPass.textContent = "";
        invalidEmail.textContent = "";

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
