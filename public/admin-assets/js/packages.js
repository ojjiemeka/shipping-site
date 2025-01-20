class PackageFormWizard {
    constructor() {
        this.currentStep = 1;
        this.totalSteps = 2;

        // Get DOM elements
        this.prevBtn = document.querySelector('#prevBtn');
        this.nextBtn = document.querySelector('#nextBtn');
        this.submitBtn = document.querySelector('#submitBtn');
        this.form = document.querySelector('#trackingForm');

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
        document.querySelectorAll('.step').forEach(step => step.classList.add('d-none'));
        document.querySelector(`#step${this.currentStep}`)?.classList.remove('d-none');

        this.prevBtn.style.display = this.currentStep === 1 ? 'none' : 'block';
        this.nextBtn.style.display = this.currentStep === this.totalSteps ? 'none' : 'block';
        this.submitBtn.style.display = this.currentStep === this.totalSteps ? 'block' : 'none';

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
            if (!this.checkFormFields()) return;
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

    checkFormFields() {
        const fields = [
            { id: '#packageName', name: 'Package Name' },
            { id: '#weight', name: 'Weight' },
            { id: '#amount', name: 'Amount' },
            { id: '#description', name: 'Description' }
        ];

        let allValid = true;
        fields.forEach(field => {
            const value = document.querySelector(field.id)?.value.trim();
            if (!value) {
                console.error(`${field.name} is missing or empty`);
                allValid = false;
            } else {
                console.log(`${field.name}: ${value}`);
            }
        });
        return allValid;
    }

    populateReview() {
        const reviewContent = document.querySelector('#reviewContent');
        if (!reviewContent) return;

        const formData = new FormData(this.form);
        let html = '<table class="table table-bordered">';

        formData.forEach((value, key) => {
            if (key !== '_token' && value) { // Exclude CSRF token
                const formattedKey = key.replace(/_/g, ' ').replace(/^./, str => str.toUpperCase());
                html += `<tr><th class="w-25">${formattedKey}</th><td>${value}</td></tr>`;
            }
        });

        html += '</table>';
        reviewContent.innerHTML = html;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new PackageFormWizard();
});
