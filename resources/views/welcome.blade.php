<!DOCTYPE html>
<html>
<head>
  <title>Laravel</title>
  <style>
    .box {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    header,footer {
      flex:1;
    }
    .container {
      display: flex;
      flex:10;
    }
    .container-main {
      flex:1;
    }
    .container-nav {
      order: -1;
      flex: 0 0 12em;
    }
    header ul {
      list-style: none;
      margin:0px;
      padding: 0px;
      width: auto;
    }
    header ul li {
      float: left;
    }

    .header-li {

    }
  </style>
</head>
<body class="box">
  <header>
    <ul>
      <li class="header-li">1</li>
      <li class="header-li">3</li>
      <li class="header-li">5</li>
      <li class="header-li">7</li>
      <li class="header-li">9</li>
    </ul>
  </header>
  <div class="container">
    <main class="container-main">content</main>
    <nav class="container-nav">nav</nav>
  </div>
  <footer>footer</footer>
</body>
</html>
