<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!--
Operadores de Atributo    
ID e Class
Outros Atributos
Itens numéricos e suas direções
-->

<!-- ID e CLASS -->

<!-- ID #header -->
<!-- div#header -->
<div id="header"></div>

<!-- Class .page -->
<!-- div.page -->
<div class="page"></div>

<!-- Class .container -->
<!-- div.container -->
<div class="container"></div>

<!-- Operadores e Multiplicadores -->
<!-- div.row>div*3.col-sm-4 -->
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
</div>

<!-- Sem escrever div -->
<!-- .container>.row>div*3.col-md-4 -->
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
</div>

<!-- Utilizando ID ou Class pelo Pai  -->
<!-- ul>.nav-item*3 -->
<ul>
    <li class="nav-item"></li>
    <li class="nav-item"></li>
    <li class="nav-item"></li>
</ul>
<!-- table>.tableHeader*2>#qualquerCoisa -->
<table>
    <tr class="tableHeader">
        <td id="qualquerCoisa"></td>
    </tr>
    <tr class="tableHeader">
        <td id="qualquerCoisa"></td>
    </tr>
</table>

<!-- estruturas maiores -->

<!-- .container>(header>.page.navbar)+(section>article>h1+p)+footer>ul>.navbar*3 -->
<div class="container">
    <header>
        <div class="page navbar"></div>
    </header>
    <section>
        <article>
            <h1></h1>
            <p></p>
        </article>
    </section>
    <footer>
        <ul>
            <li class="navbar"></li>
            <li class="navbar"></li>
            <li class="navbar"></li>
        </ul>
    </footer>
</div>

<!-- .container>header>.page.navbar^section>article>h1+p^^footer>ul>.navbar*3 -->
<div class="container">
    <header>
        <div class="page navbar"></div>
    </header>
    <section>
        <article>
            <h1></h1>
            <p></p>
        </article>
    </section>
    <footer>
        <ul>
            <li class="navbar"></li>
            <li class="navbar"></li>
            <li class="navbar"></li>
        </ul>
    </footer>
</div>

<!-- OUTROS ATRIBUTOS -->

<!-- a[href=# title=descricao]*4 -->
<a href="#" title="descricao"></a>
<a href="#" title="descricao"></a>
<a href="#" title="descricao"></a>
<a href="#" title="descricao"></a>

<!-- img[width=200 height=100]*4 -->
<img src="" alt="" width="200" height="100">
<img src="" alt="" width="200" height="100">
<img src="" alt="" width="200" height="100">
<img src="" alt="" width="200" height="100">


<!-- ITENS NUMÉRICOS E SUAS DIREÇÔES -->

<!-- ul>li.item$*3 -->
<ul>
    <li class="item1"></li>
    <li class="item2"></li>
    <li class="item3"></li>
</ul>

<!-- ul>li*3>a{item$$$} -->
<ul>
    <li><a href="">item001</a></li>
    <li><a href="">item002</a></li>
    <li><a href="">item003</a></li>
</ul>

<!-- ul>li*3>a{item$$$@-} -->
<ul>
    <li><a href="">item003</a></li>
    <li><a href="">item002</a></li>
    <li><a href="">item001</a></li>
</ul>

<!-- a[href=item$$$@-]{texto$$@-3}*5 -->
<a href="item005">texto07</a>
<a href="item004">texto06</a>
<a href="item003">texto05</a>
<a href="item002">texto04</a>
<a href="item001">texto03</a>

<body>
    
</body>
</html>