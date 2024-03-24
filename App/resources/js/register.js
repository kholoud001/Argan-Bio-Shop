// register.js
document.getElementById('registerForm').addEventListener('submit', async function(event) {
    event.preventDefault();
    try {
        const formData = new FormData(this);
        const response = await axios.post(registerRoute, formData);
        showMessage(response.data.message, true);
        // Redirect to login page after 5 seconds
        setTimeout(() => {
            window.location.href = loginRoute;
        }, 5000);
    } catch (error) {
        console.error('Registration failed:', error);
        showMessage(error.response.data.message, false);
    }
});

function showMessage(message, success) {
    const toast = document.createElement('div');
    toast.className = success ? 'fixed bottom-5 right-10 bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded' : 'fixed bottom-5 right-10 bg-red-100 border-red-400 text-red-700 px-4 py-3 rounded';
    toast.textContent = message;
    document.body.appendChild(toast);

    setTimeout(() => {
        document.body.removeChild(toast);
    }, 5000);
}
