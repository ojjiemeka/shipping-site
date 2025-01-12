class FormWizard {
    constructor() {
        this.currentStep = 1;
        this.totalSteps = 3;
        
        // Get DOM elements
        this.prevBtn = document.querySelector('#prevBtn');
        this.nextBtn = document.querySelector('#nextBtn');
        this.submitBtn = document.querySelector('#submitBtn');
        
        // Bind event listeners
        this.initializeEventListeners();
        
        // Initialize the form
        this.updateSteps();
    }

    initializeEventListeners() {
        this.nextBtn?.addEventListener('click', () => this.nextStep());
        this.prevBtn?.addEventListener('click', () => this.prevStep());
    }

    updateSteps() {
        // Hide all steps
        document.querySelectorAll('.step').forEach(step => step.classList.add('d-none'));
        
        // Show current step
        const currentStepElement = document.querySelector(`#step${this.currentStep}`);
        if (currentStepElement) {
            currentStepElement.classList.remove('d-none');
        }
        
        // Update navigation buttons
        if (this.prevBtn) {
            this.prevBtn.style.display = this.currentStep === 1 ? 'none' : 'block';
        }
        
        if (this.nextBtn && this.submitBtn) {
            this.nextBtn.style.display = this.currentStep === this.totalSteps ? 'none' : 'block';
            this.submitBtn.style.display = this.currentStep === this.totalSteps ? 'block' : 'none';
        }
        
        // Update tabs
        document.querySelectorAll('.nav-link').forEach((tab, index) => {
            tab.classList.remove('completed', 'active');
            if (index + 1 < this.currentStep) {
                tab.classList.add('completed');
            } else if (index + 1 === this.currentStep) {
                tab.classList.add('active');
            }
        });
    }

    nextStep() {
        if (this.currentStep < this.totalSteps) {
            this.currentStep++;
            this.updateSteps();
            if (this.currentStep === this.totalSteps) {
                this.populateReview();
            }
        }
    }

    prevStep() {
        if (this.currentStep > 1) {
            this.currentStep--;
            this.updateSteps();
        }
    }

    populateReview() {
        const reviewContent = document.querySelector('#reviewContent');
        if (!reviewContent) return;

        const formData = new FormData(document.querySelector('#shippingForm'));
        let html = '<div class="table-responsive"><table class="table table-bordered">';
        
        formData.forEach((value, key) => {
            // Skip _token and empty values
            if (value && key !== '_token') {
                // Format the key for display (convert camelCase to Title Case)
                const formattedKey = key
                    .replace(/([A-Z])/g, ' $1') // Add space before capital letters
                    .replace(/^./, str => str.toUpperCase()) // Capitalize first letter
                    .trim();
                html += `
                    <tr>
                        <th class="w-25">${formattedKey}</th>
                        <td>${value}</td>
                    </tr>`;
            }
        });
        
        html += '</table></div>';
        reviewContent.innerHTML = html;
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new FormWizard();
});