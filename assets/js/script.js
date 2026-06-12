document.addEventListener("DOMContentLoaded", function() {

    const forms = document.querySelectorAll("form");
    
    forms.forEach(form => {
        form.addEventListener("submit", function(e) {
            let valid = true;
            
            const requiredInputs = form.querySelectorAll("input[required], textarea[required], select[required]");
            
            requiredInputs.forEach(input => {
                if (input.value.trim() === "") {
                    valid = false;
                    input.style.borderColor = "#ef4444";
                    let errorMsg = input.nextElementSibling;
                    if (!errorMsg || !errorMsg.classList.contains('error-text')) {
                        const span = document.createElement("span");
                        span.textContent = "Kolom ini wajib diisi.";
                        span.style.color = "#ef4444";
                        span.style.fontSize = "0.75rem";
                        span.style.marginTop = "5px";
                        span.style.display = "block";
                        span.className = "error-text";
                        input.parentNode.insertBefore(span, input.nextSibling);
                    }
                } else {
                    input.style.borderColor = "#374151"; 
                    let errorMsg = input.nextElementSibling;
                    if (errorMsg && errorMsg.classList.contains('error-text')) {
                        errorMsg.remove();
                    }
                }
            });

            const passwordInputs = form.querySelectorAll('input[type="password"]');
            if (passwordInputs.length >= 2) {
                const password = passwordInputs[0];
                const confirmPassword = passwordInputs[1];
                
                if (password.value !== confirmPassword.value) {
                    valid = false;
                    confirmPassword.style.borderColor = "#ef4444";
                    alert("Kata sandi dan konfirmasi kata sandi tidak cocok!");
                }
            }

            if (!valid) {
                e.preventDefault(); 
            }
        });
        
        const allInputs = form.querySelectorAll("input, textarea, select");
        allInputs.forEach(input => {
            input.addEventListener("input", function() {
                this.style.borderColor = "#374151";
                let errorMsg = this.nextElementSibling;
                if (errorMsg && errorMsg.classList.contains('error-text')) {
                    errorMsg.remove();
                }
            });
        });
    });
});

function confirmAction(message) {
    return confirm(message);
}