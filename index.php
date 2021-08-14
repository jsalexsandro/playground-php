<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playground</title>
    <link rel="stylesheet" href="./styles/index.php.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.2/codemirror.min.css">
  <link rel="stylesheet" href="https://codemirror.net/theme/dracula.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.2/codemirror.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.2/mode/python/python.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.2/mode/javascript/javascript.min.js"></script>
</head>
<body>
    <!-- <header>

    </header> -->
    <main id="main-central">
        <form id="form-central" method="POST" action="/python.php">
            <textarea id="code" name="code"></textarea>
            <button>RUN</button>
        </form>
    </main>
    <script src="./scripts/configureEditor.js"></script>
</body>
</html>