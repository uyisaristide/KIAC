<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KIAC | Technical Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        /* Custom CSS for column layout */
        .columns {
            display: flex;
            flex-wrap: wrap;
            text-align: justify;
            text-justify: auto;
        }

        .big-p {
            text-align: justify;
            text-justify: auto;
        }

        .column p {
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

        .column {
            flex-basis: calc(33.33% - 20px);
            /* Adjust as needed */
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .column:last-child {
            margin-right: 0;
        }

        /* Custom styles for the columns */
        .column {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3) !important;
        }

        /* Add gradients for a more polished look */
        .column:nth-child(1) {
            background: linear-gradient(135deg, #f1f1f1, #ffffff);
        }

        .column:nth-child(2) {
            background: linear-gradient(135deg, #f9f9f9, #ffffff);
        }

        .column:nth-child(3) {
            background: linear-gradient(-135deg, #f1f1f1, #ffffff);
        }

        /* Responsive design: Display as blocks and 100% width on smaller screens */
        @media (max-width: 768px) {
            .column {
                flex-basis: 100%;
                margin-right: 0;
            }
        }

        .admission-requirements {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
        }

        /* Custom list-style type for admission requirements */
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
            content: "\2714\0020";
            position: absolute;
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

        .kiac-values ul li:before {
            content: "\2713\0020";
            position: absolute;
            color: #036e9d;
            left: 0;
        }

        .column.wrapper {
            display: flex !important;
            flex-wrap: wrap !important;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-3">
        <div class="p-6 rounded-lg big-p">
            <h2 class="text-xl font-semibold mb-2">KIAC Technical Courses</h2>
            <p class="text-gray-700 main-p">
                Through our various colleges and Schools at Kigali International Art College (KIAC) and in partnership
                with other
                institutions, research councils, government agencies, we offer World-class postgraduate education and
                continuing professional development through flexible, part-time courses to give you - and your employer
                - the competitive edge.
            </p>
        </div>
        <div class="columns">
            <div class="column kiac-values">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Why you should join us ?</h2>
                    <ul>
                        <li>Flexible, part-time programmes specially designed for busy professionals.</li>
                        <li>Access to amazing learning, research and teaching facilities available at Kigali
                            International Art College.</li>
                        <li>Gain essential skills needed by employers to develop their workforce</li>
                        <li>Opportunities to enhance career paths and improve employ ability</li>
                    </ul>
                </div>
            </div>

            <div class="column kiac-values">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">College of Business and Economics</h2>
                    <p class="text-gray-700 pb-2">
                        Programs offered at the various colleges include College of Business and Economics;
                    </p>
                    <p class="text-gray-700 pb-2">
                        KIAC College of Business and Economics (KIAC-CBE) offers various
                        courses including:
                    </p>
                    <ul>
                        <li>Procurement Short Courses</li>
                        <li>CPA through KASNEB and ICPAR</li>
                        <li>Banking and Insurance Short Courses</li>
                    </ul>
                    <p><a href="https://cass.ur.ac.rw/index.php/colors/layouts/professional-courses"
                            target="_blank">Click here to read more about the programs at the CBE website</a></p>
                </div>
            </div>
            <div class="column kiac-values">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">College of Education</h2>
                    <p class="text-gray-700 pb-2">
                        Another Program offered at the various colleges is College of Education;
                    </p>
                    <p class="text-gray-700 pb-2">
                        KIAC college of Education (KIAC-CE) offers various language proficiency courses
                        including:
                    </p>
                    <ul>
                        <li>Certificate Of Proficiency In Kinyarwanda</li>
                        <li>Certificate Of Proficiency In English</li>
                        <li>Certificate Of Proficiency In French</li>
                        <li>Certificate Of Proficiency In Kiswahili</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>