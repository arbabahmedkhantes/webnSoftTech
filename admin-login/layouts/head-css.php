<!-- Layout config Js -->
<script src="assets/js/layout.js"></script>
<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- Include TinyMCE CDN -->
<script src="https://cdn.tiny.cloud/1/q8ifoxfjikux41l2gjuqa0ztmsj3h53pw8yurz953ekacqyk/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    // Initialize TinyMCE
    tinymce.init({
        selector: '#content', // Apply TinyMCE to the textarea with id="content"
        plugins: 'image link lists code',
        toolbar: 'undo redo | styleselect | bold italic | link image | alignleft aligncenter alignright | code',
        height: 300
    });
</script>