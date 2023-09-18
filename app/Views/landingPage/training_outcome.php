<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIAC | Intended Training Outcome</title>
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
            <h2 class="text-xl font-semibold mb-2">KIAC Intended Training Outcome</h2>
            <p class="text-gray-700 main-p">
                We have hereby published the Intended training Outcomes for various courses offered at Kigali
                International Art College (KIAC)
            </p>
        </div>
        <div class="admission-requirements py-2 px-6">
            <h2 class="text-xl font-semibold mb-2">These Intended outcomes are:</h2>
            <ul class="pb-10">
                <li>Training Outcomes for Video Production</li>
                <li>Training Outcomes for Photography</li>
                <li>Training Outcomes for Creative Art</li>
                <li>Training Outcomes for Graphic Design and Animation</li>
                <li>Training Outcomes for Web Design</li>
                <li>Training Outcomes for Software Development</li>
                <li>Training Outcomes for Computer Systems</li>
                <li>Training Outcomes for Electronic Services</li>
                <li>Training Outcomes for CCTV Camera Installation</li>
                <li>Training Outcomes for Music</li>
            </ul>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>