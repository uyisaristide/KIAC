<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KIAC | Intended Training Outcomes</title>
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
            <h2 class="text-xl font-semibold mb-2">KIAC Intended Training Outcome</h2>
            <p class="text-gray-700 main-p">
                We have hereby published the Intended training Outcomes for various courses offered at Kigali
                International Art College (KIAC)
            </p>
        </div>


        <div class="columns">
            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">1. Training outcomes for Video Production</h2>
                    <p class="text-gray-700 pb-2">
                        Media plays a vital role in the modern life and facilitates the public to update the information
                        & reports of events. This short course of Six months’ duration in KIAC is designed / developed
                        in order to produce the workforce in the field of Video Production keeping in view the need of
                        the job market to meet requirements this course covers general audio and sound mixing
                        techniques, including the handling of common audio problems camera placement and operations,
                        including a basic understanding of camera color balancing, camera optics, light levels and the
                        use of special filters.
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li>Describe digital audio/video production and its process.</li>
                        <li>Describe different parameters of sounds and its quality. </li>
                        <li>Introduction of software used in audio video production. </li>
                        <li>Explain the function of video camera.</li>
                        <li>Explain focusing. </li>
                        <li>Define the TV production.</li>
                        <li>Define the role of director. </li>
                        <li>Explain the pre production. </li>
                        <li>Explain the production. </li>
                        <li>Define the post production. </li>
                        <li>Define the media marketing. </li>
                        <li>Describe to prepare the projects. </li>
                    </ul>
                </div>
            </div>

            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">2. Training outcomes for Photography </h2>
                    <p class="text-gray-700 pb-2">
                        The photography program provides an in-depth curriculum that is focused specifically on fine art
                        photography through studying at Kigali International Art College(KIAC) expands beyond making
                        photographs into a deep understanding of how photographs function and our graduates are working
                        in all fields of the photographic spectrum.
                        Kigali International Art College helps the students to specialize and be familiar with
                        photography by becoming proficient at the technical aspect of photographing with a digital
                        camera.
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li>Master essential photography skills like technical knowledge, artistic talent, camera
                            equipment expertise and editing software proficiency. </li>
                        <li>Develop interpersonal skills such as communication, positivity and understanding for success
                            in the industry. </li>
                        <li>Enhance your craft with formal training workshops resources to take your photography to the
                            next level or become a professional photographer. </li>
                        <li>Setting up photographic equipment </li>
                        <li>Taking pictures </li>
                        <li>Choosing and setting up locations</li>
                        <li>Reproducing and framing photographs </li>
                        <li>Promoting their business (especially if self-employed)</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="columns">

            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">3. Training outcomes for Creative art</h2>
                    <p class="text-gray-700 pb-2">
                        Kigali International Art College provides short term training program of six months in Creative
                        Arts domain that composed of artistic activities that allow students in KIAC to use their
                        imaginations, creativity, and express ideas in a variety of mediums.
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li>Demonstrate mastery of elements of design </li>
                        <li>Demonstrate mastery of materials, tools, and processes in predominantly one medium </li>
                        <li>Create a series of original works of art with coherent formal, conceptual, and procedural
                            relationships to one another </li>
                        <li>Describe, analyze, and interpret artwork of students' own creation </li>
                        <li>Analyze, interpret, and evaluate the form and content of works of art. </li>
                        <li>Produce creative works that demonstrate innovation in concept, formal language and/or
                            materials </li>
                        <li>Compare and contrast contemporary work with their historical antecedent </li>
                        <li>Analyze works of art contextually </li>
                    </ul>
                </div>
            </div>
            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">4. Training outcomes for Web design </h2>
                    <p class="text-gray-700 pb-2">
                        Kigali International Art College provide web design as a short-term training course for six
                        months which is designed to introduce the student to the tools and facilities of web design:
                        page composition, XHTML, CSS, web design and code validation. Students will use these software
                        technologies together to produce web design projects. Students will cover the Web
                        design/development process, with Macromedia Dreamweaver as the primary Web development tool.
                        Topics covered include basic and enhanced site structure, local and remote site management, and
                        optimization of Web graphics.
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li>Create an Information Architecture document for a web site. </li>
                        <li>Construct a web site that conforms to the web standards of today and includes e-commerce and
                            web marketing </li>
                        <li>Publish the website to a remote server using FTP. </li>
                        <li>Perform regular web site maintenance (test, repair and change). </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">5. Training outcomes for Graphic design and animation </h2>
                    <p class="text-gray-700 pb-2">
                        The Graphic Design is a short-term training program provided by KIAC, which includes a core set
                        of required courses and a robust collection of electives that will expand your designer’s
                        toolbox with a diverse set of skills and knowledge that can prepare you to work in a variety of
                        design-related fields.
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li>Create effective print and digital communications, and user experiences through the
                            application of theories, tools, and best practices in the field. </li>
                        <li>Exhibit a thoughtful application of the elements and principles of visual design, color
                            theory, information hierarchy, and typography to successfully communicate narratives,
                            concepts, emotions, and/or identities across a variety of media. </li>
                        <li>Demonstrate critical thinking and problem-solving skills for project planning, design, and
                            creation. </li>
                        <li>Communicate clearly in visual, verbal, and written forms using techniques appropriate for
                            the intended audience. </li>
                        <li>Participate as a team member to make collaborative decisions toward shared objectives with
                            civility, interpersonal skills, and professionalism. </li>
                        <li>Explain how design enhances viewer comprehension in extracting meaning from designed
                            elements. </li>
                        <li>Interpret the ethical, environmental, legal, or social effects of designed works on the
                            larger global community</li>
                    </ul>
                </div>
            </div>
            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">6. Training outcomes for Software development </h2>
                    <p class="text-gray-700 pb-2">
                        Software industries have the biggest markets in the world, Kigali International Art College has
                        designed this training course for six months for helping learners to learn how to create,
                        design, deploy, and support computer software and cover system software, the latest programming
                        languages, and helps the learners to learn how to build apps for any platform.
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li> Solve problems by designing, coding, testing, and implementing programs using several
                            programming languages, at least one to a professional language-specific standard. </li>
                        <li> Develop integrated systems of hardware and software, using current system development
                            methodologies to fulfil the processing needs of a client.</li>
                        <li>Use and configure several operating systems in the development and deployment of software at
                            a professional level. </li>
                        <li>Develop and deploy Internet-based applications using current technologies to meet client
                            needs. </li>
                        <li>Design databases and develop applications that process database contents using a DBMS and
                            various programming languages, to current industry standards. </li>
                        <li>Apply data communications, networking, and security concepts to the development of
                            multi-site, multi-user systems, following relevant industry standards. </li>
                        <li>Use effective written, oral, and visual communication skills to communicate with technical
                            and non-technical audiences, at levels appropriate for a variety of business settings.</li>
                        <li>Apply project management theory and techniques to the development of automated systems,
                            using a basic understanding of business principles and practices.</li>
                        <li>Work effectively and cooperatively as a team member in different roles and settings using
                            appropriate technical and interpersonal skills, in the development of automated systems.
                        </li>
                        <li>Continue the life-long learning process of acquiring new skills and knowledge through formal
                            and self-directed means using information and learning resources.</li>
                        <li>Incorporate knowledge of organizational structure, management functions, business objects,
                            and established practices in the design of business systems and software, including
                            strategic planning and corporate objectives, administrative processes, human resources,
                            accounting, marketing, and e-business.</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="columns">

            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">7. Training outcomes for Computer hardware maintenance </h2>
                    <p class="text-gray-700 pb-2">
                        Kigali International Art college has designed a six months training of computer hardware in
                        order to develop student' skills and knowledge of computer hardware for installation and
                        maintenance at the equipment level. Students learn to install, protect, and troubleshoot CPUs,
                        disk drives, memory, circuit boards, video adapters, displays, CD-ROM drives, etc.
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li>Prepare tools, Material and Equipment</li>
                        <li>Describe Computer Hardware </li>
                        <li>Repair computer hardware </li>
                        <li>Document the work done </li>
                        <li>Use the Internet to upgrade and maintain computers. </li>
                        <li>Bring together all the physical components of equipment evaluation for purchase, future
                            maintenance, and growth </li>
                        <li>Perform routine maintenance on the different computer hardware and software operating
                            systems in today's business. </li>
                        <li>Update and upgrade different computer hardware and operating systems in today's businesses
                        </li>
                        <li>Trouble-shoot and fix computers and their peripherals along with their operating systems
                            that are used in today's businesses.</li>
                        <li>Describe the function of the essential components of a computer</li>
                    </ul>
                </div>
            </div>

            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">8. Training outcomes for electronic services </h2>
                    <p class="text-gray-700 pb-2">
                        Kigali International Art College set of competencies to acquire to perform the occupation of an
                        electronic sound equipment repairer and a phone repairer in short term training for six months
                        in electronics. It is designed with an approach that takes into account the training needs, the
                        work situation, as well as the goals and the means to implement training which focuses on the
                        labor market.
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li>Provide a comprehensive understanding of electronic devices and circuits </li>
                        <li>Understand the working diode and transistor.</li>
                        <li>Study basic circuits using diodes and transistors. </li>
                        <li>Know the concept of feedback and design feedback amplifier. </li>
                        <li>Study oscillators and power amplifiers using transistor. </li>
                        <li>Know the characteristics of diodes and transistors </li>
                        <li>Design simple circuits and mini projects.</li>
                        <li>Know the benefits of feedback in amplifier </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="columns">

            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">9. Training outcomes for CCTV Camera Installation </h2>
                    <p class="text-gray-700 pb-2">
                        CCTV cameras play a significant role in ensuring the safety of premises. It is quite common for
                        us to come across them at schools, colleges, shops, ATMs, banks, offices, factories, and homes.
                        Kigali International Art College has designed the sixth moth training in CCTV Camera
                        Installation. From learning about cabling to the latest HD analogue and IP integration
                        techniques, this practical course is the perfect option if you want a career in the exciting
                        world of CCTV installation. This is a vocational training program. The main aim of the CCTV
                        short course is to impart relevant skills to students. As part of this program, students are
                        trained in areas such as – CCTV hardware, software, installation, maintenance and operation
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li>Identify different types of cameras.</li>
                        <li>Work with coaxial cable. </li>
                        <li>Set up IP and Network. </li>
                        <li>Set up relevant video recording software and device.</li>
                    </ul>
                </div>
            </div>

            <div class="column kiac-values" style="display: flex; flex-direction: column; justify-content: flex-start;">
                <div class="px-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-2 py-2">10. Training outcomes for Music </h2>
                    <p class="text-gray-700 pb-2">
                        Kigali International Art College have experts in music technology, world music, conducting,
                        jazz, musicology, music education, and specialists on all orchestra instruments, voice, guitar,
                        and piano and it offering a short course training for only six months in Music in field of Audio
                        production, Guitar and Piano.
                    </p>
                    <p class="text-gray-700 main-p pb-2" style="color: #036e9d;">
                        On successful completion of this course at KIAC, the trainee should be able to:
                    </p>
                    <ul>
                        <li>Use suitable playing techniques with basic percussion instruments (tuned and untuned) (PK,
                            CI)</li>
                        <li>Play in time with the beat (PK)</li>
                        <li>Imitate and repeat simple rhythmic or melodic patterns (PK, DI)</li>
                        <li>Improvise simple rhythmic or melodic patterns over a beat (PK, DI)</li>
                        <li>Read and play from a graphic score (PK, CI)</li>
                        <li>Read and play simple rhythmic notation (PK)</li>
                        <li>Play familiar phrases and tunes by ear (PK)</li>
                        <li>Experiment with sounds and musical ideas and improvise with them to create moods, patterns,
                            and effects (PK, DI)</li>
                        <li>Create simple musical pieces using structural devices (PK, DI)</li>
                        <li>Use appropriate notation to represent musical ideas and compositions (PK, CI)</li>
                        <li>Present, discuss, and evaluate their compositions using appropriate vocabulary (PK, CI)</li>
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