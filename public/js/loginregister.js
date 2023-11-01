function togglePasswordVisibility() {
    const passwordInput = document.getElementById
    ('password');
    const eye = document.getElementById('fa-eye-1');
    const closed_eye = document.getElementById('fa-eye-slash-1');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        closed_eye.style.display = 'none';
        eye.style.display = 'block';
    } else {
        passwordInput.type = 'password';
        eye.style.display = 'none';
        closed_eye.style.display = 'block';
    }
}
function togglePasswordConfirmationVisibility() {
    const passwordInput = document.getElementById
    ('password_confirmation');
    const eye = document.getElementById('fa-eye-2');
    const closed_eye = document.getElementById('fa-eye-slash-2');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        closed_eye.style.display = 'none';
        eye.style.display = 'block';
    } else {
        passwordInput.type = 'password';
        eye.style.display = 'none';
        closed_eye.style.display = 'block';
    }
}
