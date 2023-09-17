<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIAC | Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .big-p {
            text-align: justify;
            text-justify: auto;
        }

        .admission-requirements p {
            font-size: 16px !important;
            font-weight: 450 !important;
            text-align: justify;
            text-justify: auto;
        }

        p.main-p {
            font-size: 18px !important;
            font-weight: 450 !important;
        }

        h1,
        h2 {
            color: #036e9d;
        }

        p a {
            color: #036e9d !important;
            text-decoration: underline;
        }

        p a:hover {
            color: #007bff !important;
            text-decoration: underline !important;
        }

        .admission-requirements {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
        }

        .admission-requirements ul {
            list-style-type: none;
            padding-left: 0;
        }

        .admission-requirements ul li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
        }

        .admission-requirements ul li:before {
            content: "\2713\0020";
            position: absolute;
            color: #036e9d;
            left: 0;
        }

        .kiac-values ul {
            list-style-type: none;
            padding-left: 0;
        }

        .kiac-values ul li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-3">
        <div class="p-6 rounded-lg big-p">
            <h2 class="text-xl font-semibold mb-2">KIAC Library</h2>
            <p class="text-gray-700 main-p">
                Kigali International Art College (KIAC) Library
            </p>
        </div>
        <div class="admission-requirements py-2 px-6 ">
            <h2 class="text-xl font-semibold mb-2">A welcome message from the KIAC Librarian</h2>

            <p class="text-gray-700 mb-2">
                Welcome to the Kigali International Art College Library services. As the Largest Training Library TVET
                Schools in Rwanda, we are a key partner in training, innovate and Transform. We provide diverse and
                user-focused services and collections in an inviting, collaborative, and innovative learning environment
                across the Africa.
            </p>
            <p class="text-gray-700 mb-2">
                By combining the latest information technology, the staff builds and maintains a rich information
                environment, facilitates access to it, and creates a place that functions as a hub of KIAC activity
                where students and training staff meet to interact with librarians and expert staff, use collections and
                collaborate.
            </p>
            <p class="text-gray-700 mb-2">
                Whether you are a new student writing your first project, training staff or a graduate student exploring
                open access publishing options, or a visiting trainee, the librarians are ready to connect you with the
                materials you need and lend their expertise to help you leverage new technologies to their full
                advantage.
            </p>
            <p class="text-gray-700 mb-2">
                I hope the libraries’ rich collections, inspiring spaces, and innovative services will help you achieve
                your training goals and enrich your experience at KIAC.
            </p>
            <p class="pb-10"><a href="#">Click here to access the KIAC Library’s website</a></p>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>