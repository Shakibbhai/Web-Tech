document.getElementById('contactForm').addEventListener('submit', function(event) {
    let requiredFields = document.querySelectorAll('#contactForm input[required], #contactForm textarea[required]');
    
    for (let field of requiredFields) {
        if (!field.value.trim()) { // Trim to prevent spaces from bypassing validation
            alert('Please fill out all required fields.');
            event.preventDefault();
            return false;
        }
    }


});

document.addEventListener('DOMContentLoaded', function() {
    const aboutLink = document.querySelector('.dropdown > a');
    aboutLink.addEventListener('click', function(event) {
        window.location.href = 'personal_info.php';
    });
});
