<?php
    include("cadeira.php");

    $c1 = new cadeira("Azul","5.3","Ferro","10","120","0.4",true,"0.85","0.4");

    $c1->aumentar(0.5);

    $c2 = new cadeira("Preta","2.3","Plastico","5","40","0.4",true,"0.4","0.4");

?>

<table border="1">
    <tr>
        <th>Cor</th>
        <th>Peso</th>
        <th>Material</th>
        <th>Durabilidade</th>
        <th>Encosto</th>
        <th>Regulagem minima</th>
        <th>Regulagem máxima</th>
        <th>Tamanho</th>
        <th>Custo</th>
    </tr>

<?php
    echo "<tr>
            <td>$c1->cor</td>
            <td>$c1->peso</td>
            <td>$c1->material</td>
            <td>$c1->durabilidade</td>
            <td>$c1->encosto</td>
            <td>$c1->regulagem_minima</td>
            <td>$c1->regulagem_maxima</td>
            <td>$c1->tamanho</td>
            <td>$c1->custo</td>
        </tr>"
    
        echo "<tr>
        <td>$c2->cor</td>
        <td>$c2->peso</td>
        <td>$c2->material</td>
        <td>$c2->durabilidade</td>
        <td>$c2->encosto</td>
        <td>$c2->regulagem_minima</td>
        <td>$c2->regulagem_maxima</td>
        <td>$c2->tamanho</td>
        <td>$c2->custo</td>
    </tr>"
?>