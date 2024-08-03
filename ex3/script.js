function validateForm() {
    let isValid = true;

    document.querySelectorAll('.error').forEach(error => error.textContent = '');

    const studentName = document.getElementById('studentname').value.trim();
    if (studentName === '') {
        document.getElementById('studentname-error').textContent = 'Student name is required';
        isValid = false;
        alert('Student name is required');
    }

    const rollno = document.getElementById('rollno').value.trim();
    if (rollno === '') {
        document.getElementById('rollno-error').textContent = 'Roll number is required';
        isValid = false;
        alert('Roll number is required');

    }

    const gender = document.getElementById('gender').value.trim();
    if (gender === '') {
        document.getElementById('gender-error').textContent = 'Gender is required';
        isValid = false;
        alert('Gender is required');
    }

    const year = document.getElementById('year').value.trim();
    if (year === '') {
        document.getElementById('year-error').textContent = 'Year is required';
        isValid = false;
    } else if (isNaN(year) || year < 1 || year > 4) {
        document.getElementById('year-error').textContent = 'Invalid year';
        isValid = false;
        alert('Invalid year');

    }

    const department = document.getElementById('department').value.trim();
    if (department === '') {
        document.getElementById('department-error').textContent = 'Department is required';
        isValid = false;
        alert('Department is required');

    }

    const section = document.getElementById('section').value.trim();
    if (section === '') {
        document.getElementById('section-error').textContent = 'Section is required';
        isValid = false;
        alert('Section is required');

    }
     //COURSE VALIDATION
    const course = document.getElementById('course').value.trim();
    const coursePattern = /^[A-Z]{2}[0-9]{5}$/;
    if (course === '') {
        document.getElementById('course-error').textContent = 'Course ID is required';
        isValid = false;
    } else if (!coursePattern.test(course)) {
        document.getElementById('course-error').textContent = 'Invalid course ID';
        isValid = false;
        alert('Invalid course ID')
    }

    const mobileNo = document.getElementById('mobile_no').value.trim();
    const mobileNoPattern = /^[6-9]\d{9}$/;
    if (mobileNo === '') {
        document.getElementById('mobile_no-error').textContent = 'Mobile number is required';
        isValid = false;
    } else if (!mobileNoPattern.test(mobileNo)) {
        document.getElementById('mobile_no-error').textContent = 'Invalid mobile number';
        isValid = false;
        alert('Invalid mobile number');
    }

    const email = document.getElementById('email').value.trim();
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email === '') {
        document.getElementById('email-error').textContent = 'E-Mail ID is required';
        isValid = false;
    } else if (!emailPattern.test(email)) {
        document.getElementById('email-error').textContent = 'Invalid email address';
        isValid = false;
        alert('Invalid email address')
    }

    const address = document.getElementById('address').value.trim();
    if (address === '') {
        document.getElementById('address-error').textContent = 'Address is required';
        isValid = false;
        alert('Address is required');
    }

    const city = document.getElementById('city').value.trim();
    if (city === '') {
        document.getElementById('city-error').textContent = 'City is required';
        isValid = false;
        alert('City is required');
    }

    const country = document.getElementById('country').value.trim();
    if (country === '') {
        document.getElementById('country-error').textContent = 'Country is required';
        isValid = false;
        alert('Country is required');
    }

    const pincode = document.getElementById('pincode').value.trim();
    const pincodePattern = /^\d{6}$/;
    if (pincode === '') {
        document.getElementById('pincode-error').textContent = 'Pincode is required';
        isValid = false;
    } else if (!pincodePattern.test(pincode)) {
        document.getElementById('pincode-error').textContent = 'Invalid pincode';
        isValid = false;
        alert('Invalid pincode');
    }

    if (isValid) {
        alert('Form submitted successfully!');
        document.getElementById('personal-info-form').reset();
    }
    
}
