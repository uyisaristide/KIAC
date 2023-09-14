<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Apply For Internship</title>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .form-container h2 {
            color: #036e9d;
        }

        .form-container p {
            font-size: 16px;
        }

        .forms-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .forms-container form {
            width: 40%;
            padding: 20px;
            --tw-bg-opacity: 0.5;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important;
            /* background-color: #EBF8FF; */
            border: 1px solid rgba(3, 110, 157, 0.3);
        }

        .forms-container p {
            border-bottom: 2px solid #e0e0e0;
            padding: 10px 0 5px;
            font-weight: 500;
            font-size: 16px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            transform: scale(0.9);
        }

        #submitButton {
            margin-top: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: block;
            width: 100%;
            text-align: center;
        }

        #submitButton:hover {
            background-color: #0056b3;
            transform: scale(1.0);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 50%;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30%;
        }

        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        @media (max-width: 768px) {
            form {
                padding: 20px;
            }
        }
    </style>
</head>

<body class="bg-gray-200">

    <div class="form-container" id="studentForm">
        <div class="max-w-xl mx-auto mt-12 text-center">
            <h2 class="bold text-2xl">
                KIAC INTERNSHIP APPLICATION FORM
            </h2>
            <div class="my-4">
                <p class="text-gray-700 fw_400">
                    Tell about you, Education Background, Language Competence, Internship Duration, About Internship,
                    Internship Goals and Expectations and References
                </p>
            </div>
        </div>
        <!-- <h4>Student Form</h4> -->
        <div class="w-1/4 px-2 forms-container">
            <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4" id="InternshipApplicationForm" METHOD="POST">

                <!-- Personal Information -->
                <p class="text-xl font-semibold mt-2">Personal Details</p>
                First Name: <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="text" name="firstName" required placeholder="Enter First Name"><br>
                Last Name: <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="text" name="lastName" required placeholder="Enter Last Name"><br>
                National ID : <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="text" name="national_id" required placeholder="Enter National ID"><br>
                Gender:
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    name="gender" required>
                    <option value="--" selected disabled>--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <div class="error" id="courseError"></div>
                Date of Birth: <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="date" name="dob" required><br>
                Phone Number: <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="tel" name="phone" required pattern="[0-9]{10}" placeholder="Enter Phone Number"><br>
                Email Address: <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="email" name="email" required placeholder="Enter Email"><br>

                <p class="text-xl font-semibold mt-2">Education Background</p>
                Institution name:
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="text" name="institution" required placeholder="Enter Institution Name"><br>
                Country:
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    name="country" required>
                    <option value="" selected>Rwanda</option>
                    <option value="armenia">Armenia</option>
                    <option value="turkey">Turkey</option>
                    <option value="Poland">Poland</option>
                    <option value="cyprus">Cyprus</option>
                </select>
                Field of Study:
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="text" name="fieldOfStudy" required placeholder="Enter Field of Study"><br>

                <p class="text-xl font-semibold mt-2">Internship Duration</p>
                Desired Date to Start:<input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="date" name="dts" required><br>
                Duration (in months):
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    type="text" name="duration" required placeholder="Enter a Number(Not Exceeding 6 Months)"><br>
                <p class="text-xl font-semibold mt-2">About Internship</p>
                Select your preferred area of work
                Department:
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    name="course" required>
                    <option value="select" disabled selected>-Select Department-</option>
                    <option value="CCTV CAMERA">CCTV Camera</option>
                    <option value="Computer Hardware">Computer Hardware</option>
                    <option value="Music">Music</option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Video Production">Video Production</option>
                    <option value="Creative Art">Creative Art</option>
                    <option value="Web design">Web design</option>
                    <option value="Software Development">Software Development</option>
                    <option value="Photography">Photography</option>
                    <option value="Electronic Services">Electronic Services</option>
                </select>
                <p class="text-xl font-semibold mt-2">Internship Goals and Expectations</p>
                Career Plans:
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    id="subject" name="career_plan" placeholder="Please Elaborate" style="height:60px"></textarea><br>
                What are your objectives in undertaking an intership with KIAC?
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    id="subject" name="objective" placeholder="Please Elaborate" style="height:60px"></textarea><br>
                Describe your expactations during this internship:
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                    id="subject" name="expectation" placeholder="Please Elaborate" style="height:60px"></textarea><br>



                <input type="submit" value="Submit Application" id="submitButton">

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p id="modalText"></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>
<script>

    function gatherFormData() {
        const formData = {
            firstName: document.querySelector('[name="firstName"]').value,
            email: document.querySelector('[name="email"]').value,
            lastName: document.querySelector('[name="lastName"]').value,
            phone: document.querySelector('[name="phone"]').value,
            dob: document.querySelector('[name="dob"]').value,
            national_id: document.querySelector('[name="national_id"]').value,
            gender: document.querySelector('[name="gender"]').value,
            institution: document.querySelector('[name="institution"]').value,
            country: document.querySelector('[name="country"]').value,
            fieldOfStudy: document.querySelector('[name="fieldOfStudy"]').value,
            dts: document.querySelector('[name="dts"]').value,
            duration: document.querySelector('[name="duration"]').value,
            course: document.querySelector('[name="course"]').value,
            career_plan: document.querySelector('[name="career_plan"]').value,
            objective: document.querySelector('[name="objective"]').value,
            expectation: document.querySelector('[name="expectation"]').value
        };

        return new URLSearchParams(formData).toString();
    }

    function isValidForm() {
        const form = document.getElementById('InternshipApplicationForm');
        if (!form.checkValidity()) {
            alert('Please fill all the fields correctly.');
            return false;
        }
        return true;
    }


    function sendDataToServer() {
        if (!isValidForm()) return;
        let formData = gatherFormData();
        fetch('http://173.212.230.165:3000/api/internships/application', {
        // fetch('http://localhost:3000/api/internships/application', {
            method: 'POST',
            body: formData,
            dataType: 'json',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },

        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showModal('Your application was sent successfully!');
                } else {
                    const errorMsg = data.error || 'Please fill the form correctly';
                    showModal(errorMsg);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showModal('Something went wrong! Please try again.');
                // showModal(error);
            });
    }

    function showModal(message) {
        const modal = document.getElementById('myModal');
        const span = document.getElementsByClassName("close")[0];
        const modalText = document.getElementById('modalText');

        modalText.innerHTML = message;
        modal.style.display = "block";

        span.onclick = function () {
            modal.style.display = "none";
            location.reload(); // reloads the page
        }

        window.onclick = function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
                location.reload(); // reloads the page
            }
        }
    }



    function checkOnlyOne(checkboxGroupName) {
        // Get all checkboxes with the same name
        const checkboxes = document.querySelectorAll(`input[name="${checkboxGroupName}"]`);

        // Add event listeners to each checkbox
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                // If the changed checkbox is checked, uncheck all others
                if (this.checked) {
                    checkboxes.forEach(postal_box => {
                        if (postal_box !== this) postal_box.checked = false;
                    });
                }
            });
        });
    }

    // Usage:
    // Assuming you have checkboxes with the name attribute as "status" and "occupation"
    window.onload = function () {
        checkOnlyOne('status');
        checkOnlyOne('occupation');
    }

    document.getElementById('InternshipApplicationForm').addEventListener('submit', function (e) {
        e.preventDefault();
        sendDataToServer();
    });


</script>

</body>

</html>