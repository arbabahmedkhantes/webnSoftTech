<?php
include '../layouts/config.php'; // Include the database connection

echo 'aya';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $title = $_POST['title'];
    $author = $_POST['author'];
    $image = $_FILES['image'];
    $slug = $_POST['slug'];
    $content1 = $_POST['content1']; // This will contain the HTML content from TinyMCE

    echo '<br>';
    echo $title;
    echo '<br>';
    echo $author;
    echo '<br>';
    print_r($image);
    echo '<br>';
    print_r($slug);
    echo '<br>';
    // echo $slug;
    print_r($content1);

    exit;

    

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $image = $_FILES['image'];

        // Define the allowed image types
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($image['type'], $allowedTypes)) {
            // Set up the directory for images
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
            }

            // Generate a unique filename for the image
            $imageName = time() . '_' . basename($image['name']);
            $imagePath = $uploadDir . $imageName;

            // Move the uploaded image to the specified directory
            if (move_uploaded_file($image['tmp_name'], $imagePath)) {
                // Image uploaded successfully, save the blog post with the image path
                $title = $conn->real_escape_string($title);
                $author = $conn->real_escape_string($author);
                $content = $conn->real_escape_string($content);
                $imagePath = $conn->real_escape_string($imagePath);

                // Insert the blog post into the database
                $sql = "INSERT INTO blogs (title, content, author, image_path) VALUES ('$title', '$content', '$author', '$imagePath')";

                if ($conn->query($sql) === TRUE) {
                    echo "New blog post saved successfully with image!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Failed to upload the image.";
            }
        } else {
            echo "Invalid image type. Please upload a JPEG, PNG, or GIF image.";
        }
    } else {
        // If no image is uploaded, save blog without image
        $title = $conn->real_escape_string($title);
        $author = $conn->real_escape_string($author);
        $content = $conn->real_escape_string($content);

        $sql = "INSERT INTO blogs (title, content, author) VALUES ('$title', '$content', '$author')";

        if ($conn->query($sql) === TRUE) {
            echo "New blog post saved successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the connection
    $conn->close();
}
?>
