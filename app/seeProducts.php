<?php

require_once 'db.php';
echo '

<p>Numero total de registros: '.$seeProducts->rowCount().' </p>
<ul class=" list-group list-group-flush" id="list">
';


foreach($seeProducts as $row): 
    echo '
    <li class="list-group-item" id="product'.$row['id'].'">
    <div class="todo-indicator bg-warning"></div>
    <div class="widget-content p-0">
        <div class="widget-content-wrapper">
            <div class="widget-content-left mr-2">
                
            </div>
            <div class="widget-content-left">
                <div class="widget-heading">'.$row['product'].'
                    <div class="badge badge-danger ml-2">'.$row['supplier'].'</div>
                </div>
                <div class="widget-subheading"><i>Cantidad: '.$row['available'].'</i> <i>Precio: Q'.$row['price'].' </i><br><i>Total: Q'.$row['total'].' </i></div>
            </div>
            <div class="widget-content-right eliminar" id="'.$row['id'].'"> <button class="border-0 btn-transition btn btn-outline-danger" id="btnDelete" > <i class="fa fa-trash"></i> </button> </div>
        </div>
    </div>
</li>
    ';
endforeach;
echo '
</ul>
';