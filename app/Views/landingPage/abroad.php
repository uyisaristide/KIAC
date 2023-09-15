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
    <title>Apply To Study Abroad</title>

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

        /* Center content */
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 50%;
        }

        /* Center content */
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30%;
        }

        /* Styles for the content div */
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            /* center the h2 and radio buttons */
        }

        h3 {
            margin-bottom: 20px;
        }

        label {
            display: inline-block;
            /* changed from block to inline-block */
            margin: 0 10px;
            /* added margin to space them apart */
            cursor: pointer;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            form {
                padding: 20px;
            }
        }
    </style>
</head>

<body class="bg-gray-200">
    <div class="form-container" id="abroadForm">
        <div class="max-w-xl mx-auto mt-12 text-center">
            <h2 class="bold text-2xl">STUDY ABROAD FOR SCHOLARSHIP
            </h2>
            <div class="my-4">
                <p class="text-gray-700 fw_400">KIAC is a professional educational agency, you can explore study abroad
                    opportunities with scholarships that cover 90% of your expenses. We specialize in providing guidance
                    and
                    support to students interested in studying in Turkey, Armenia, Azerbaijan, and Schengen countries.
                </p>
            </div>
        </div>
        <div class="w-1/4 px-2 forms-container">
            <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4" id="abroadApplicationForm" enctype="multipart/form-data"
                METHOD="POST">
                <p class="text-xl font-semibold mt-2">Do you want to study abroad for scholarship?</p>
                <input type="radio" name="want_to_study" value="yes" required> Yes
                <input type="radio" name="want_to_study" value="no" required> No

                <p class="text-xl font-semibold mt-2">If you are interested in this scholarship, proceed to the next
                    step.</p>
                <div class="check mt-1">
                    <input type="radio" name="interested" value="YES" required> I am interested
                    <input type="radio" name="interested" value="NO" required> Not interested
                </div>

                <p class="text-xl font-semibold mt-2">Personal Information</p>
                Names: <input type="text" name="names" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>
                Date of Birth: <input type="date" name="birth_date" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>
                <div class="radio mt-3 mb-2">
                    Gender:
                    <input type="radio" name="gender" value="Male" required> Male
                    <input type="radio" name="gender" value="Female" required> Female
                    <div class="error" id="genderError"></div>
                </div>
                Nationality: <input type="text" name="nationality" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>
                Phone Number: <input type="tel" name="phone_number" required pattern="[0-9]{10}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>
                Email Address: <input type="email" name="email_add" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>
                Location: <input type="text" name="location" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>

                <p class="text-xl font-semibold mt-2">Your current level of education</p>
                <div class="check mt-1">
                    <input type="radio" name="university_level" value="University Level" required> University Level
                    <input type="radio" name="university_level" value="Secondary Level" required> Secondary Level
                    <div class="error" id="educationLevelError"></div>
                </div>
                <p class="text-xl font-semibold mt-2">Select your desired country *</p>

                <div class="check mt-1">
                    <select id="countries" name="desired_country"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1">
                        <option value="#" selected disabled>Select Country</option>
                        <option value="Armenia">ARMENIA</option>
                        <option value="Azerbaijan">AZERBAIJAN</option>
                        <option value="Azerbaijan">RUSSIAN</option>
                        <option value="Turkey">TURKEY</option>
                    </select>
<<<<<<< HEAD
                    <div class="error" id="universityGraduatedError"></div>
=======
>>>>>>> de7b63d2d23932ed56f9bed93784dbc9f70ae9dc
                </div>
                <p class="text-xl font-semibold mt-2">Which program do you want to apply for? *</p>
                Program:
                <div class="check mt-1">
                    <select id="countries" name="program"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1">
                        <option value="#" selected disabled>Select Program</option>
                        <option value="Bachelor">BACHELOR</option>
                        <option value="Masters">MASTERS</option>
                        <option value="PhD">PhD</option>
                    </select>
                    <div class="error" id="universityGraduatedError"></div>
                </div>
                <p class="text-xl font-semibold mt-2">Required Documents</p>
                <div class="report mt-2">
                    Certificate / degree( Notified ) <input type="file" name="transcript_doc"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>
                </div>
                <div class="report mt-2">
                    Academic Transcripts( Notified ) <input type="file" name="transcript_doc"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>
                </div>
                <div class="report mt-2">
                    Your Valid Passport: <input type="file" name="id_passport"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>
                </div>
                <div class="report mt-2">
                    Date Of Birth( Notified ) <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"
                        type="date" name="dob" required><br>
                </div>

                <div class="report mt-2">
                    Your Photo Passport: <input type="file" name="passport_pic"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1"><br>
                </div>
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


    // abbroad
    function gatherAbroadFormData() {
        let formData = new FormData();
        formData.append('university_level', document.querySelector('[name="university_level"]:checked').value);
        formData.append('gender', document.querySelector('[name="gender"]:checked').value);
        formData.append('want_to_study', document.querySelector('[name="want_to_study"]:checked').value);
        formData.append('interested', document.querySelector('[name="interested"]:checked').value);
        formData.append('desired_country', document.querySelector('[name="desired_country"]').value);
        formData.append('birth_date', document.querySelector('[name="birth_date"]').value);
        formData.append('phone_number', document.querySelector('[name="phone_number"]').value);
        formData.append('email_add', document.querySelector('[name="email_add"]').value);
        formData.append('program', document.querySelector('[name="program"]').value);
        formData.append('names', document.querySelector('[name="names"]').value);
        formData.append('location', document.querySelector('[name="location"]').value);

        // Handle file uploads
        if (document.querySelector('[name="id_passport"]').files.length > 0) {
            formData.append('id_passport', document.querySelector('[name="id_passport"]').files[0]);
        }
        if (document.querySelector('[name="passport_pic"]').files.length > 0) {
            formData.append('passport_pic', document.querySelector('[name="passport_pic"]').files[0]);
        }
        if (document.querySelector('[name="vaccine"]').files.length > 0) {
            formData.append('vaccine', document.querySelector('[name="vaccine"]').files[0]);
        }

        if (document.querySelector('[name="transcript_doc"]').files.length > 0) {
            formData.append('transcript_doc', document.querySelector('[name="transcript_doc"]').files[0]);
        }
        return formData;
    }

    function isValidForm() {
        const form = document.getElementById('abroadApplicationForm');
        if (!form.checkValidity()) {
            alert('Please fill all the fields correctly.');
            return false;
        }
        return true;
    }
    function sendAbroadDataToServer() {
        if (!isValidForm()) return;

        let formData = gatherAbroadFormData();

        fetch('http://173.212.230.165:3000/api/study/abroad/application', {
            // fetch('http://localhost:3000/api/study/abroad/application', {
            method: 'POST',
            body: formData,
            dataType: 'json',
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


    document.getElementById('abroadApplicationForm').addEventListener('submit', function (e) {
        e.preventDefault();
        sendAbroadDataToServer();
    });

</script>

</html>