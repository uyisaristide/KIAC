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

        .form-container {
            width: 30%;
            margin-right: 10px;
        }

        .banner {
            display: flex;
            justify-content: center;
            align-items: center;
    
        }
        .banner form{
            width: 40%;
            padding: 20px !important;

        }

        .form-wrapper {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .form-container, .banner {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        form {
            padding: 10px;
        }
    </style>
</head>

<body class="bg-gray-200">
    <!-- Banner Update Form -->
    <div class="w-1/4 px-2 banner">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" id="">
            <h2 class="text-xl font-semibold mb-4">Update Banners</h2>

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
                type="button" id="updateBannerButton">
                Update Banner
            </button>
        </form>
    </div>

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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to your HTML elements
        const bannerIDInput = document.getElementById("bannerID");
        const bannerImageInput = document.getElementById("bannerImage");
        const updateBannerButton = document.getElementById("updateBannerButton");
        const bannerImage = document.getElementById("banner1");

        // Add a click event listener to the update button
        updateBannerButton.addEventListener("click", function() {
            const bannerID = bannerIDInput.value;

            // Check if the user has selected a file
            if (bannerImageInput.files.length === 0) {
                alert("Please select a file.");
                return;
            }

            const file = bannerImageInput.files[0];

            // Check if the file is an image (you can add more validation if needed)
            if (!file.type.startsWith("image/")) {
                alert("Please select an image file.");
                return;
            }

            // Assuming your local storage structure is similar to your website structure
            const imageUrl = `/${bannerID}.jpg`; // Update the file extension as needed

            // Update the image source with the new image
            bannerImage.src = imageUrl;

            // Optional: You can also upload the file to your server here
            // You may need to use a server-side language like PHP to handle file uploads
            // and save the file to the appropriate location.

            // Clear the input fields
            bannerIDInput.value = "";
            bannerImageInput.value = "";
        });
    });
</script>
</html>