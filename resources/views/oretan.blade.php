
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Preview Full Screen</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* styles.css */
.image-container {
    text-align: center;
    margin-top: 20px;
}

.image-container img {
    max-width: 300px;
    cursor: pointer;
}

.full-screen-preview {
    display: none; /* Sembunyikan secara default */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
}

.full-screen-image {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    margin-top: 10%;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
    </style>

</head>
<body>
    <div class="image-container">
        <img src="image/auth-login-illustration-light.png" alt="Image" id="preview-image">
        <button onclick="openFullScreen()">Preview Full Screen</button>
    </div>

    <div id="fullScreenPreview" class="full-screen-preview">
        <span class="close" onclick="closeFullScreen()">&times;</span>
        <img class="full-screen-image" id="full-screen-image">
        <a id="download-link" download="image.jpg">
            <button onclick="downloadImage()">Download</button>
        </a>
    </div>

    <script src="script.js"></script>
    <script>
        // script.js
function openFullScreen() {
    var previewImage = document.getElementById('preview-image');
    var fullScreenImage = document.getElementById('full-screen-image');
    var fullScreenPreview = document.getElementById('fullScreenPreview');

    // Set the full-screen image source to the preview image source
    fullScreenImage.src = previewImage.src;

    // Display the full-screen preview
    fullScreenPreview.style.display = "block";
}

function closeFullScreen() {
    var fullScreenPreview = document.getElementById('fullScreenPreview');

    // Hide the full-screen preview
    fullScreenPreview.style.display = "none";
}

function downloadImage() {
    var fullScreenImage = document.getElementById('full-screen-image');
    var downloadLink = document.getElementById('download-link');

    // Set the download link href to the full-screen image source
    downloadLink.href = fullScreenImage.src;

    // Trigger the download
    downloadLink.click();
}
    </script>
</body>
</html>
