<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIAC | Admission Requirements</title>
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
            padding-left: 10px;
            margin-bottom: 10px;
            font-size: 18px;
            list-style-type: numeric;
        }

        /* .admission-requirements ul li:before {
            content: "\2713\0020";
            position: absolute;
            color: #036e9d;
            left: 0;
        } */

        .kiac-values ul {
            list-style-type: none;
            padding-left: 0;
        }

        .kiac-values ul li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
        }

        .downloadBtn {
            font-size: 18px;
            color: #036e9d;
            text-decoration: underline;
            padding: 5px 0 10px;
        }

        .downloadBtn {
            color: #007bff !important;
            text-decoration: underline !important;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-3">
        <div class="p-6 rounded-lg big-p">
            <h2 class="text-xl font-semibold mb-2">KIAC Admission Requirements</h2>
            <p class="text-gray-700 main-p">
                Kigali International Art College welcomes all students who satisfy the minimum entry
                requirement in a particular Course:
            </p>
        </div>
        <div class="admission-requirements py-2 px-6 ">
            <h2 class="text-xl font-semibold mb-2">Download pdf document requirements for</h2>
            <ul class="pb-3">
                    <li>Video Production</li>
                    <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>

                <li>Photography</li>
                <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>
                <li>Creative Art</li>
                <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>
                <li>Graphic Design</li>
                <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>
                <li>Web Design</li>
                <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>
                <li>Software Development</li>
                <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>
                <li>Computer System</li>
                <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>
                <li>Electronic Services</li>
                <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>
                <li>CCTV Camera Installation</li>
                <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>
                <li>Music</li>
                <div class="document">
                    <div>
                        <object data="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf" type="application/pdf"
                            width="50%" height="300">
                        </object>
                    </div>

                    <div>
                        <a href="<?= base_url(); ?>assets/landing_new/img/PDFdocument.pdf"
                            download="Requirements_Document.pdf">
                            <button class="downloadBtn">Download PDF</button>
                        </a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>