class TrackingFormWizard {
    constructor() {
        this.currentStep = 1;
        this.totalSteps = 3;

        // Get DOM elements
        this.prevBtn = document.querySelector('#prevBtn');
        this.packageSelect = document.querySelector('#package_id');  // Package dropdown
        this.nextBtn = document.querySelector('#nextBtn');
        this.submitBtn = document.querySelector('#submitBtn');

        // Bind event listeners
        if (this.packageSelect) {
            this.packageSelect.addEventListener('change', this.populatePackageDetails.bind(this));
            this.packageSelect.addEventListener('change', () => this.populatePackageDetails());
        }
        // this.initializeEventListeners();
        this.initializeEventListeners();

        // Initialize the form
        this.updateSteps();
    }

    initializeEventListeners() {
        this.packageSelect?.addEventListener('change', () => this.populateTrackingReview()); // Listen for package selection change
        this.nextBtn?.addEventListener('click', () => this.nextStep());
        this.prevBtn?.addEventListener('click', () => this.prevStep());
    }

    populatePackageDetails() {
        const selectedPackageId = this.packageSelect?.value;
        const selectedPackageOption = document.querySelector(`#package_id option[value="${selectedPackageId}"]`);

        // Ensure the selected option exists
        if (selectedPackageOption) {
            // Populate the hidden form fields or visible fields for the package
            // document.querySelector('#packageName').value = selectedPackageOption.textContent.trim().split(' - ')[0]; // Set package name
            document.querySelector('#packageName').value = selectedPackageOption.getAttribute('data-display-text'); // Set package name

            document.querySelector('#weight').value = selectedPackageOption.getAttribute('data-weight'); // Set package weight
            document.querySelector('#amount').value = selectedPackageOption.getAttribute('data-price'); // Set package price
            document.querySelector('#description').value = selectedPackageOption.getAttribute('data-description'); // Set description
        } else {
            // Reset values if no package is selected
            document.querySelector('#packageName').value = '';
            document.querySelector('#weight').value = '';
            document.querySelector('#amount').value = '';
            document.querySelector('#description').value = '';
        }
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
                this.populateTrackingReview();
            }
        }

        // After moving to the next step, fill in the package details if selected
        const selectedPackageId = this.packageSelect?.value;
        const selectedPackageOption = document.querySelector(`#package_id option[value="${selectedPackageId}"]`);
    
        // Ensure the selected option exists
        if (selectedPackageOption) {
            // Populate the hidden form fields or visible fields for the package
            document.querySelector('#packageName').value = selectedPackageOption.textContent.trim().split(' - ')[0]; // Set package name
            document.querySelector('#weight').value = selectedPackageOption.getAttribute('data-weight'); // Set package weight
            document.querySelector('#amount').value = selectedPackageOption.getAttribute('data-price'); // Set package price
        } else {
            // Reset values if no package is selected
            document.querySelector('#packageName').value = '';
            document.querySelector('#weight').value = '';
            document.querySelector('#amount').value = '';
        }

        // Log the form values to check if everything is filled correctly before submission
        if (this.checkFormFields()) {
            console.log('Form is ready for submission');
        } else {
            console.error('Form contains missing required fields');
        }
    }

    checkFormFields() {
        const fields = [
            { id: '#packageName', name: 'Package Name' },
            { id: '#weight', name: 'Weight' },
            { id: '#amount', name: 'Amount' },
            { id: '#trackingNumber', name: 'Tracking Number' },
            { id: '#address_id', name: 'Address ID' },
            { id: '#shippingMethod', name: 'Shipping Method' },
            { id: '#shipDate', name: 'Ship Date' },
            { id: '#deliveryDate', name: 'Delivery Date' },
            { id: '#carrierName', name: 'Carrier Name' },
            { id: '#shippingCost', name: 'Shipping Cost' },
            { id: '#currentLocation', name: 'Current Location' },
            { id: '#notes', name: 'Notes' },
            { id: '#packageStatus', name: 'Package Status' },
            { id: '#isDelayed', name: 'Is Delayed' },
            { id: '#isReturned', name: 'Is Returned' },
            { id: '#isInsured', name: 'Is Insured' },
        ];
    
        let allFieldsValid = true;

        // Check and log each field's status
        fields.forEach(field => {
            const fieldElement = document.querySelector(field.id);
            const fieldValue = fieldElement?.value;
            if (!fieldValue) {
                console.error(`${field.name} is missing or empty`);
                allFieldsValid = false;
            } else {
                console.log(`${field.name}: ${fieldValue}`);
            }
        });
    
        return allFieldsValid;
    }

    prevStep() {
        if (this.currentStep > 1) {
            this.currentStep--;
            this.updateSteps();
        }
    }

    // Update and display selected package info in Step 3
    populateTrackingReview() {
        const reviewContent = document.querySelector('#reviewContent');
        if (!reviewContent) return;
    
        // Get all form data
        const formData = new FormData(document.querySelector('#trackingForm'));
        let html = '<div class="table-responsive"><table class="table table-bordered">';
    
        // Get the selected package ID
        const selectedPackageId = this.packageSelect?.value;
        const selectedPackageOption = document.querySelector(`#package_id option[value="${selectedPackageId}"]`);
    
        // Ensure the selected option exists
        if (selectedPackageOption) {
            const selectedPackageName = selectedPackageOption.textContent.trim(); // Package name
            const selectedPackagePrice = selectedPackageOption.getAttribute('data-price'); // Package price
            const selectedPackageWeight = selectedPackageOption.getAttribute('data-weight'); // Package weight
    
            // Add package details to the review table
            html += `
                <tr>
                    <th class="w-25">Selected Package</th>
                    <td>${selectedPackageName}</td>
                </tr>
                <tr>
                    <th class="w-25">Price</th>
                    <td>${selectedPackagePrice}</td>
                </tr>
                <tr>
                    <th class="w-25">Weight</th>
                    <td>${selectedPackageWeight} kg</td>
                </tr>`;
        } else {
            html += `
                <tr>
                    <th class="w-25">Selected Package</th>
                    <td>No package selected</td>
                </tr>
                <tr>
                    <th class="w-25">Price</th>
                    <td>N/A</td>
                </tr>
                <tr>
                    <th class="w-25">Weight</th>
                    <td>N/A</td>
                </tr>`;
        }
    
        // Add other form data
        formData.forEach((value, key) => {
            if (value && key !== '_token') {
                // Format key for display (capitalize and replace underscores)
                const formattedKey = key
                    .replace(/([A-Z])/g, ' $1') // Add space before capital letters
                    .replace(/^./, str => str.toUpperCase()) // Capitalize first letter
                    .replace(/_/g, ' ') // Replace underscores with spaces
                    .trim();
    
                // Format boolean values for display (if any)
                const formatBoolean = (value) => {
                    if (value === '1') return 'Yes';
                    if (value === '0') return 'No';
                    return value;
                };
    
                // Add the row to the review table
                html += `
                    <tr>
                        <th class="w-25">${formattedKey}</th>
                        <td>${['is_delayed', 'is_returned', 'is_insured'].includes(key) ? formatBoolean(value) : value}</td>
                    </tr>`;
            }
        });
    
        html += '</table></div>';
        reviewContent.innerHTML = html; // Display review content in Step 3
    }
    }    


// Initialize the tracking form wizard when DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    new TrackingFormWizard();
});
