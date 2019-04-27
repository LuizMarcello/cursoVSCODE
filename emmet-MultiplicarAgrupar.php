<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>  
    <!-- MULTIPLICAR -->
    <!-- ul>li*3 -->
    <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <!-- O sinal de '+' é: o mesmo nível hierárquico -->

    <!-- table>tr*3>td*3 -->
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <!-- AGRUPAR -->
    <!-- div>(ul>li*3>a)+div -->
    <div>
        <ul>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>
        <div></div>
    </div>

    <!-- table>(thead>th*3)+tbody>tr>td*3 -->
    <table>
        <thead>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>