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
    <title>Apply To Study At Kigali International Art School</title>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f5f5f5;
            font-size: 14px;
            /* Reduced font size */
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 40px auto;
        }

        h3 {
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 16px;
            /* Adjusted font size */
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 13px;
            outline: none;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="tel"]:focus,
        input[type="email"]:focus,
        select:focus {
            border-color: #007BFF;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            transform: scale(0.9);
            /* Reduce size a bit */
        }

        input[type="file"] {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 13px;
            width: 100%;
        }


        #submitButton {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 13px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: block;
            width: 100%;
            text-align: center;
        }

        #submitButton:hover {
            background-color: #0056b3;
            transform: scale(1.05);
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
    <div class="form-container" id="studentForm">
        <div class="max-w-xl mx-auto mt-12">
            <div class="form-container" id="abroadForm">
                <div class="max-w-xl mx-auto mt-12">
                    <h2 class="text-gray-700 font-bold text-2xl">STUDY ABROAD FOR SCHOLARSHIP
                    </h2>

                    <div class="my-4">
                        <p class="text-gray-700 font-medium">KIAC is a professional educational agency, you can explore
                            study
                            abroad
                            opportunities with scholarships that cover 90% of your expenses. We specialize in providing
                            guidance
                            and
                            support to students interested in studying in Turkey, Armenia, Azerbaijan, and Schengen
                            countries.
                        </p>
                    </div>
                    <form id="abroadApplicationForm" enctype="multipart/form-data" METHOD="POST">

                        <h3>DO YOU WANT TO STUDY ABROAD FOR SCHOLARSHIP ?</h3>
                        <input type="radio" name="want_to_study" value="yes" required> Yes
                        <input type="radio" name="want_to_study" value="no" required> No
                        <!-- <div class="error" id="educationLevelError"></div> -->

                        <h3>IF YOU ARE INTERESTED ON THIS SCHOLARSHIP; PROCEED TO THE NEXT STEP.</h3>
                        <input type="radio" name="interested" value="YES" required>I AM INTERESTED
                        <input type="radio" name="interested" value="NO" required> NOT INTERESTED
                        <!-- <div class="error" id="secondaryFinishedError"></div> -->

                        <h3>PERSONAL INFORMATION</h3>
                        <!-- First Name: <input type="text" name="firstName" required><br>
        Last Name: <input type="text" name="lastName" required><br> -->
                        Date of Birth: <input type="date" name="birth_date" required><br>
                        Gender:
                        <input type="radio" name="gender" value="Male" required> Male
                        <input type="radio" name="gender" value="Female" required> Female
                        <div class="error" id="genderError"></div>
                        Nationality: <input type="text" name="nationality" required><br>
                        Phone Number: <input type="tel" name="phone_number" required pattern="[0-9]{10}"><br>
                        Email Address: <input type="email" name="email_add" required><br>


                        <h3>YOUR CURRENT LEVEL OF EDUCATION </h3>
                        <input type="radio" name="university_level" value="University Level" required> University Level
                        <input type="radio" name="university_level" value="Secondary Level" required> Secondary Level
                        <div class="error" id="educationLevelError"></div>

                        <!-- ... Repeat for all other sections ... -->
                        <h3>SELECT YOUR DESIRED COUNTRY
                            *</h3>
                        <input type="radio" name="desired_country" value="TURKEY" required> TURKEY
                        <input type="radio" name="desired_country" value="ARMENIA" required> ARMENIA
                        <input type="radio" name="desired_country" value="AZERBAIJAN" required> AZERBAIJAN
                        <div class="error" id="universityGraduatedError"></div>

                        <h3>WHICH PROGRAM DO YOU WANT TO APPLY FOR ?
                            *</h3>
                        Program:
                        <input type="text" name="program" required><br>
                        <h3>REQUIRED DOCUMENT</h3>
                        YOUR PHOTO PASSPORT: <input type="file" name="passport_pic"><br>
                        ACADEMIC TRANSCRIPT [SCHOOL REPORT]: <input type="file" name="transcript_doc"><br>
                        YOUR VALID PASSPORT: <input type="file" name="id_passport"><br>
                        COVID_19 VACINATION CERTIFICATE <input type="file" name="vaccine"><br>

                        <input type="submit" value="Submit Application" id="submitButton">

                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p id="modalText"></p>
                            </div>
                        </div>

                    </form>
                    <!-- Your form fields for abroad student go here -->

                </div>
            </div>
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
        formData.append('desired_country', document.querySelector('[name="desired_country"]:checked').value);
        formData.append('birth_date', document.querySelector('[name="birth_date"]').value);
        formData.append('phone_number', document.querySelector('[name="phone_number"]').value);
        formData.append('email_add', document.querySelector('[name="email_add"]').value);
        formData.append('program', document.querySelector('[name="program"]').value);

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

    function sendAbroadDataToServer() {

        let formData = gatherAbroadFormData();

        // fetch('http://localhost:3000/api/study/abroad/application', {
        fetch('http://173.212.230.165:3000/api/study/abroad/application', {
            method: 'POST',
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    return response.json().then((data) => {
                        const errorMessage = data.error || 'Please fill the form correctly';
                        alertAndLogError(errorMessage);
                        throw new Error(errorMessage);
                    });
                }
                return response.json();
            })
            .then((data) => {
                console.log(data);
                alertAndReload('Your application was sent successfully!');
            })
            .catch((error) => {
                console.error('Client-Side Error:', error);
                alertAndLogError('Something went wrong! Please fill the form correctly.');
            });
    }

    function alertAndLogError(errorMessage) {
        alert(errorMessage);
        console.error('Server-Side Error:', errorMessage);
    }



    document.getElementById('abroadApplicationForm').addEventListener('submit', function (e) {
        e.preventDefault();
        sendAbroadDataToServer();
    });


    function alertAndReload(message) {
        alert(message);
        location.reload();
    }

    function checkOnlyOne(checkbox) {
        const checkboxes = document.getElementsByName('program');
        checkboxes.forEach((chk) => {
            if (chk !== checkbox) {
                chk.checked = false;
            }
        });
    }

</script>

</html>