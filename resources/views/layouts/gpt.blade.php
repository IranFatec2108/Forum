<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Minha Página</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }
    #container {
        display: flex;
        min-height: 100vh;
    }
    #sidebar {
        width: 250px;
        background-color: #fff;
        border-right: 1px solid #e0e0e0;
    }
    #sidebar ul {
        list-style-type: none;
        padding: 0;
    }
    #sidebar ul li {
        padding: 10px 20px;
        border-bottom: 1px solid #e0e0e0;
    }
    #sidebar ul li a {
        text-decoration: none;
        color: #333;
    }
    #sidebar ul li:hover {
        background-color: #f0f0f0;
    }
    #content {
        flex: 1;
        padding: 20px;
    }
    header, footer {
        background-color: #ffe600;
        color: #333;
        padding: 10px;
        text-align: center;
    }
    main {
        background-color: #f5f5f5;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
    }
</style>
</head>
<body>

<div id="container">
    <div id="sidebar">
        <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
        </ul>
    </div>
    <div id="content">
        <header>
            <h1>Meu Site</h1>
        </header>
        <main>
            <p>Hello, World!</p>
        </main>
    </div>
</div>

<footer>
    <p>Rodapé - © 2024</p>
</footer>

</body>
</html>
