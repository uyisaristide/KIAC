<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | KIAC</title>
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
            text-justify: ;
        }

        p.main-p {
            font-size: 18px !important;
            font-weight: 450 !important;
        }

        h1,
        h2 {
            color: #036e9d;
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

        .kiac-values {
            display: flex;
            text-align: left !important;
            justify-content: left !important;
            align-items: left !important;
            align-content: left !important;
        }

        /* Custom list-style type for the "KIAC Values" section */
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
            left: 0;
        }

        .column.wrapper {
            display: flex !important;
            flex-wrap: wrap !important;
        }

        .philosophy {
            flex: 1;
            max-width: 50% !important;
        }

        .contact {
            flex: 1;
            max-width: 50% !important;
        }

        @media (min-width: 768px) {
            .contact, .philosophy{
                display: block !important;
            }

            /* Add any specific styling for larger screens here */
            .philosophy {
                max-width: 100% !important;
                /* Adjust the width as needed for larger screens */
            }

            .contact {
                max-width: 100% !important;
                /* Adjust the width as needed for larger screens */
            }
        }


        .phone-icon {
            margin-right: 10px;
            font-size: 20px;
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-3">
        <h1 class="text-2xl font-bold mb-4">WHO WE ARE</h1>
        <div class="p-6 rounded-lg big-p">
            <h2 class="text-xl font-semibold mb-2">About KIAC</h2>
            <p class="text-gray-700 main-p">
                Kigali International Art College (KIAC) is a dynamic and forward-looking technical school,
                vibrant and lively; established in 2015 under the Workforce Development Authority (WDA)
                decision, to produce highly technical skilled workforce to meet industry and social needs. We
                are confident that our technical courses are internationally benchmarked and meet national and
                international demands. Technical and Vocational training tackle directly the environment issues
                through nurturing young skilled technician with skills of renewable energy.
            </p>
        </div>
        <div class="columns">
            <div class="column">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Our Curriculum & Teaching Approach</h2>
                    <p class="text-gray-700">
                        The curriculum of KIAC is designed to respond to the global professional requirements of Art.
                        KIAC works closely with different entities, partnerships to ensure top value professional
                        industry.
                        Students are prepared to gain real world technical experience and expertise through classroom
                        lectures, industrial attachments, practical lessons, group discussions, demonstrations and
                        presentations. Students receive their academic awards upon successful fulfillment of the number
                        of modules designed in each program.
                    </p>
                </div>
            </div>

            <div class="column">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Technical Programs</h2>
                    <p class="text-gray-700">
                        These Programs are taught by KIAC in collaboration with national and International Art related
                        entities. The technical programs take only 6 months. Courses are conducted in day and evening
                        sessions in either French or English language. There is flexibility of time for the working
                        students.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Art Modules </h2>
                    <p class="text-gray-700">
                        These comprehensive 6 months program is a specific technical program in Art industry. Art
                        program is designed to equip the student per-requisite entrepreneurial, marketing and
                        operational skills necessary for technical course. This program aims to produce professionals
                        with strong academic and practical foundation in Creative Art, Video Production, Photography,
                        Graphic design, Web design, Software development, Computer system, electronic services, CCTV
                        Camera Installation, Music.
                    </p>
                </div>
            </div>
        </div>
        <div class="admission-requirements py-2 px-6 ">
            <h2 class="text-xl font-semibold mb-2">Admission Requirements</h2>
            <ul>
                <li>Filled application form</li>
                <li>Certificate or Degree</li>
                <li>ID or Passport document</li>
                <li>Photo passport</li>
                <li>Registration fee: 15,000 Rwf</li>
                <li>Tuition fee: 250,000 Rwf</li>
                <li>Laptop</li>
                <li>Paper Lame</li>
            </ul>
        </div>
        <div class="p-6 rounded-lg big-p">
            <h2 class="text-xl font-semibold mb-2">KIAC Objectives</h2>
            <p class="text-gray-700 main-p">
                To offer professional training to meet both local and international market demands to develop and
                improve the effectiveness on young generations through quality training, capacity building & career
                guidance.
                To participate in discovery, transmission and preservation and enhancement of technical skills and
                stimulate the intellectual participation of trainees in the economic, art, professional technological
                development of Rwanda.
                Upon successful completion of the course, students will be issued a certificate, depending on the
                organizers of the course. After getting all required skills student can be able to graduate and start
                making differences.
            </p>
        </div>

        <div class="columns flex flex-wrap">
            <div class="column w-full md:w-1/4">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">KIAC Mission</h2>
                    <p class="text-gray-700">
                        The fundamental mission of KIAC college is to provide the students with technical and vocational
                        training which enables them to become actors of development of the nation (Rwanda).
                    </p>
                </div>
            </div>

            <div class="column w-full md:w-1/4">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">KIAC Vision</h2>
                    <p class="text-gray-700">
                        To stand out as a remarkable college for excellence in short-term vocational training that
                        enables beneficiaries to acquire the skills required to create jobs and compete in the labor
                        market.
                    </p>
                </div>
            </div>

            <div class="column w-full md:w-1/4 kiac-values">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">KIAC Values</h2>
                    <ul>
                        <li>Integrity</li>
                        <li>Humanity</li>
                        <li>Creativity</li>
                        <li>Innovation</li>
                        <li>Hardworking</li>
                        <li>Self-confidence</li>
                        <li>Determination</li>
                        <li>Excellence</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column wrapper">
            <div class="kiac-values philosophy" style="display: inline-block; vertical-align: top;">
                <div class="py-2 px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">KIAC Philosophy</h2>
                    <ul>
                        <p class="mb-2">The Philosophy of KIAC is based on 4 fundamental principles that are:</p>
                        <li>To have faith in God</li>
                        <li>To know your mission on earth</li>
                        <li>To live ethical values</li>
                        <li>Having positive thoughts</li>
                    </ul>
                </div>
            </div>
            <div class="contact text-center" style="display: inline-block; vertical-align: top;">
                <h2 class="text-xl font-semibold mb-4">Call to ask any question</h2>
                <ul>
                    <li style="color:#036e9d"><i class="fa fa-phone" style="font-size: 16px; color:#036e9d"></i> +250
                        781 847 787</li>
                    <li style="color:#036e9d"><i class="fa fa-phone" style="font-size:16px; color:#036e9d"></i> +250 737
                        765 072</li>
                </ul>
            </div>
        </div>

    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>