<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="<?= base_url(); ?>assets/landing_new/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url(); ?>assets/landing_new/img/logo.png" rel="icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/landing_new/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/landing_new/css/main2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu1.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu2.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/menu3.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/landing_new/css/main.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link href="<?= base_url(); ?>assets/css/tailwind/output.css" rel="stylesheet">
    <title>Document</title>
    <style>
        h2 {
            font-size: 25px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            padding: 50px 0 20px;
            color: #036e9d;

        }

        h3 {
            font-size: 18px;
            padding: 10px;
        }

        .form-container {
            width: 25%;
            margin-right: 10px;
        }

        .banner {
            display: flex;
            justify-content: center;
            align-items: center;
    

        }
        .banner form{
            width: 40%;

        }

        .form-wrapper {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .form-container {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        form {
            padding: 20px;
        }
    </style>
</head>

<body class="bg-gray-200">
    <h2 style="text-decoration: underline;">Web Administration</h2>

    <!-- Banner Update Form -->
    <h2>Banner Section</h2>
    <div class="w-1/4 px-2 banner">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">Update Banner</h2>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bannerID">
                    Banner ID:
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="bannerID" type="text" placeholder="Enter Banner ID">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bannerImage">
                    Banner Image:
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="bannerImage" type="file">
            </div>

            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button">
                Update Banner
            </button>
        </form>
    </div>

    <h2>Service Section</h2>
    <div class="flex flex-wrap justify-between flex-wrapper">
        <div class="w-full max-w-md mx-auto w-1/4 px-2 form-container">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">Update News</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="newsTitle">
                        News Title
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="newsTitle" type="text" placeholder="Enter news title">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="newsContent">
                        News Content
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="newsContent" placeholder="Enter news content" rows="4"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Save News
                    </button>
                </div>
            </form>
        </div>

        <div class="w-full max-w-md mx-auto w-1/4 px-2 form-container">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-xl font-semibold mb-4">Update Upcoming Events</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="eventName">
                        Event Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="eventName" type="text" placeholder="Enter event name">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="eventDate">
                        Event Date
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="eventDate" type="date">
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Save Event
                    </button>
                </div>
            </form>
        </div>

        <div class="w-full max-w-md mx-auto w-1/4 px-2 form-container">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">Update Announcements</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="announcementTitle">
                        Announcement Title
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="announcementTitle" type="text" placeholder="Enter announcement title">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="announcementContent">
                        Announcement Content
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="announcementContent" placeholder="Enter announcement content" rows="4"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Save Announcement
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>