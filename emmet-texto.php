<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
   
   <!-- ul>li*3>a{me clique} -->
    <ul>
        <li><a href="">me clique</a></li>
        <li><a href="">me clique</a></li>
        <li><a href="">me clique</a></li>
    </ul>

    <!-- a*3>{clique }+b{aqui} -->
    <a href="">clique <b>aqui</b></a>
    <a href="">clique <b>aqui</b></a>
    <a href="">clique <b>aqui</b></a>

    <!-- O sinal de '+' é: o mesmo nível hierárquico -->

     <!-- div>p>{texto do lorem}+(ul>li*3>a>{clique }b{aqui})+div -->
     <div>
         <p>
             texto do lorem
             <ul>
                 <li><a href="">clique <b>aqui</b></a></li>
                 <li><a href="">clique <b>aqui</b></a></li>
                 <li><a href="">clique <b>aqui</b></a></li>
             </ul>
             <div></div>
         </p>
     </div>


</body>
</html>