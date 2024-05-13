<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slicing Template</title>
    <!-- Link Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

@include('components.app-layout.header')

<main>
    {{ $slot }}
</main>

<script type="text/javascript">
    function toggleHeaderClass() {
        var header = document.getElementById('header');
        var scrollPosition = window.pageYOffset;

        if (scrollPosition > 0) {
            header.classList.add('active');
        } else {
            header.classList.remove('active');
        }
    }

    window.addEventListener('scroll', function() {
        toggleHeaderClass();
    });
</script>
</body>
</html>
