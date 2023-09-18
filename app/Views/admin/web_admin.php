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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const updateBannerButton = document.getElementById('updateBannerButton');
            const newBannerImageInput = document.getElementById('newBannerImage');
            const bannerIDSelect = document.getElementById('bannerID'); // Updated to select element

            // Load saved images from localStorage
            const bannerImages = document.querySelectorAll('[data-banner-id]');
            bannerImages.forEach(bannerImage => {
                const bannerID = bannerImage.getAttribute('data-banner-id');
                const savedImageUrl = localStorage.getItem(`savedImageUrl_${bannerID}`);
                if (savedImageUrl) {
                    bannerImage.src = savedImageUrl;
                }
            });

            updateBannerButton.addEventListener('click', function () {
                const bannerID = bannerIDSelect.value; // Get selected banner ID from the select element
                const currentBannerImage = document.querySelector(`[data-banner-id="${bannerID}"]`);

                if (currentBannerImage) {
                    if (newBannerImageInput && newBannerImageInput.files.length > 0) {
                        const newImageFile = newBannerImageInput.files[0];
                        const newImageUrl = URL.createObjectURL(newImageFile);

                        // Update the image source
                        currentBannerImage.src = newImageUrl;

                        // Clear the form fields
                        newBannerImageInput.value = '';
                        bannerIDSelect.selectedIndex = 0;

                        // Save the new image URL to localStorage using a dynamic key
                        localStorage.setItem(`savedImageUrl_${bannerID}`, newImageUrl);
                    } else {
                        alert('No image selected.');
                    }
                } else {
                    alert('Banner ID not found.');
                }
            });
        });




    </script>
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

        .banner form {
            width: 40%;
            padding: 20px !important;

        }

        .form-wrapper {
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {

            .form-container,
            .banner {
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

    <img id="bannerImage1" src="<?= base_url(); ?>assets/landing_new/img/banner_left.jpg" data-banner-id="banner1"
        alt="Banner Image">
    <br>
    <img id="bannerImage2" src="<?= base_url(); ?>assets/landing_new/img/banner_left.jpg" data-banner-id="banner2"
        alt="Banner Image">

    <div class="w-1/4 px-2 banner">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" id="bannerUpdateForm">
            <h2 class="text-xl font-semibold mb-4">Update Banners</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bannerID">
                    Banner ID:
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="bannerID">
                    <option value="select" selected disabled>-- Select Banner ID --</option>
                    <option value="banner1">Banner 1</option>
                    <option value="banner2">Banner 2</option>
                </select>
            </div>
            <!-- ... other form fields ... -->

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="newBannerImage">
                    New Banner Image:
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="newBannerImage" type="file">
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

</html>