<!DOCTYPE html>
<html data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!--include bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='//cdn.jsdelivr.net/npm/hack-font@3.3.0/build/web/hack.css'>

    <!--include mermaide -->
    <script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
    <script>
        // Initialize Mermaid
        mermaid.initialize({
            startOnLoad: true,
            theme: 'dark',
        });
    </script>
        <!--include highligt.js and styling  -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/an-old-hope.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
</head>

<body>
<div class="container">
    <?php
    require_once __DIR__ . '/vendor/autoload.php';
    $md = "markdown/2023-01-01-hello-world.md";


    $Parsedown = new Parsedown();

    $text =   $Parsedown->text(file_get_contents($md));

    $text = str_replace("language-mermaid", "mermaid nohighlight", $text);

    echo $text;

    ?>
</div>
</body>
</html>


