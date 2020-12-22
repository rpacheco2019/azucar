<?php
    session_start();
    include('xcrud/xcrud.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lluvia de azúcar 1.0</title>
</head>
 
<body>
 
<?php
    $xcrud= Xcrud::get_instance()->table('formato');
    
    /* Bloqueo de campos en Edit() */
    $xcrud->fields('id',true);

    /* Mapeo de columnas */
    $xcrud->columns('id,ODS,nombreCliente,pax,producto,tema,estado,fechaProduccion,fechaEntrega');

    /* Cambiar nombres de columnas y campos */
    $xcrud->label('nombreCliente','Cliente');
    $xcrud->label('notaInterna','Folio de Pago');
    $xcrud->label('fechaEntrega','Fecha Compromiso');
    $xcrud->label('fechaProduccion','Fecha de Produccion');
    $xcrud->label('ODS','#ODS');
    $xcrud->label('tipoEvento','Tipo de Evento');
    $xcrud->label('evento','Nombre de Evento');
    $xcrud->label('direccionEntrega','Dirección de Entrega');
    $xcrud->label('tipoPastel','Tipo de pastel');
    $xcrud->label('tipoFlor','Tipo de flor');
    $xcrud->label('descFlor','Detalles de Flores');
    $xcrud->label('textoGeneral','Texto a escribir en el pastel');
    $xcrud->label('notaPastel','Notas de pastel');

    $xcrud->label('alturaPiso0','Altura PAX 8');
    $xcrud->label('panPiso0','Pan PAX 8');
    $xcrud->label('rellenoPiso0','Relleno PAX 8');
    $xcrud->label('relleno2Piso0','Relleno 2 PAX 8');

    $xcrud->label('alturaPiso1','Altura PAX 10');
    $xcrud->label('panPiso1','Pan PAX 10');
    $xcrud->label('rellenoPiso1','Relleno PAX 10');
    $xcrud->label('relleno2Piso1','Relleno 2 PAX 10');

    $xcrud->label('alturaPiso2','Altura PAX 20');
    $xcrud->label('panPiso2','Pan PAX 20');
    $xcrud->label('rellenoPiso2','Relleno PAX 20');
    $xcrud->label('relleno2Piso2','Relleno 2 PAX 20');

    $xcrud->label('alturaPiso3','Altura PAX 30');
    $xcrud->label('panPiso3','Pan PAX 30');
    $xcrud->label('rellenoPiso3','Relleno PAX 30');
    $xcrud->label('relleno2Piso3','Relleno 2 PAX 30');

    $xcrud->label('alturaPiso4','Altura PAX 40');
    $xcrud->label('panPiso4','Pan PAX 40');
    $xcrud->label('rellenoPiso4','Relleno PAX 40');
    $xcrud->label('relleno2Piso4','Relleno 2 PAX 40');

    $xcrud->label('alturaPiso5','Altura PAX 50');
    $xcrud->label('panPiso5','Pan PAX 50');
    $xcrud->label('rellenoPiso5','Relleno PAX 50');
    $xcrud->label('relleno2Piso5','Relleno 2 PAX 50');

    /* Tabs */
    $xcrud->fields('fechaEntrega,fechaProduccion,notaInterna,ODS,estado', false, 'Programación');
    $xcrud->fields('nombreCliente,evento,tipoEvento,direccionEntrega', false, 'Cliente');
    $xcrud->fields('producto,pax,tema,tipoPastel,tipoFlor,descFlor,textoGeneral,notaPastel,imagen', false, 'Producto');
    $xcrud->fields('alturaPiso0,panPiso0,rellenoPiso0,relleno2Piso0,alturaPiso1,panPiso1,rellenoPiso1,relleno2Piso1,alturaPiso2,panPiso2,rellenoPiso2,relleno2Piso2,alturaPiso3,panPiso3,rellenoPiso3,relleno2Piso3,alturaPiso4,panPiso4,rellenoPiso4,relleno2Piso4,alturaPiso5,panPiso5,rellenoPiso5,relleno2Piso5', false, 'Pisos(pastel)');
    /* $xcrud->fields('alturaPiso1,panPiso1,rellenoPiso1,alturaPiso2,panPiso2,rellenoPiso2,alturaPiso3,panPiso3,rellenoPiso3,alturaPiso4,panPiso4,rellenoPiso4,alturaPiso5,panPiso5,rellenoPiso5', false, 'Pisos(pastel)'); */
    

    /* Cambiar nombre de la tabla */
    $xcrud->table_name('Ordenes de producción');

    /* Listas de campos */
    $xcrud->change_type('producto','select','black,white',array('values'=>'Pastel,Cupcake,Galletas,Letras'));
    $xcrud->change_type('tipoFlor','select','black,white',array('values'=>'Ninguna,Natural,Azucar'));
    $xcrud->change_type('tipoPastel','select','black,white',array('values'=>'Crema,Fondant,Naked'));
    $xcrud->change_type('estado','select','black,white',array('values'=>'Produciendo,Terminado,Entregado'));

    $xcrud->change_type('tipoEvento','select','black,white',array('values'=>'Cumpleaños,Boda,XV Años,Bautizo,Comunión,Otros'));

    $xcrud->change_type('alturaPiso0','select','black,white',array('values'=>'-,4",5",6",7",8",9",10"'));
    $xcrud->change_type('alturaPiso1','select','black,white',array('values'=>'-,4",5",6",7",8",9",10"'));
    $xcrud->change_type('alturaPiso2','select','black,white',array('values'=>'-,4",5",6",7",8",9",10"'));
    $xcrud->change_type('alturaPiso3','select','black,white',array('values'=>'-,4",5",6",7",8",9",10"'));
    $xcrud->change_type('alturaPiso4','select','black,white',array('values'=>'-,4",5",6",7",8",9",10"'));
    $xcrud->change_type('alturaPiso5','select','black,white',array('values'=>'-,4",5",6",7",8",9",10"'));

    $xcrud->change_type('panPiso0','select','black,white',array('values'=>'-,Falso,Vanilla,Marmoleado,Chocolate,Red Velvet,Arcoiris,Funfetti,Marmol Colores'));
    $xcrud->change_type('panPiso1','select','black,white',array('values'=>'-,Falso,Vanilla,Marmoleado,Chocolate,Red Velvet,Arcoiris,Funfetti,Marmol Colores'));
    $xcrud->change_type('panPiso2','select','black,white',array('values'=>'-,Falso,Vanilla,Marmoleado,Chocolate,Red Velvet,Arcoiris,Funfetti,Marmol Colores'));
    $xcrud->change_type('panPiso3','select','black,white',array('values'=>'-,Falso,Vanilla,Marmoleado,Chocolate,Red Velvet,Arcoiris,Funfetti,Marmol Colores'));
    $xcrud->change_type('panPiso4','select','black,white',array('values'=>'-,Falso,Vanilla,Marmoleado,Chocolate,Red Velvet,Arcoiris,Funfetti,Marmol Colores'));
    $xcrud->change_type('panPiso5','select','black,white',array('values'=>'-,Falso,Vanilla,Marmoleado,Chocolate,Red Velvet,Arcoiris,Funfetti,Marmol Colores'));

    $xcrud->change_type('rellenoPiso0','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('relleno2Piso0','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('rellenoPiso1','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('relleno2Piso1','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('rellenoPiso2','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('relleno2Piso2','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('rellenoPiso3','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('relleno2Piso3','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('rellenoPiso4','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('relleno2Piso4','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('rellenoPiso5','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));
    $xcrud->change_type('relleno2Piso5','select','black,white',array('values'=>'-,Ganache,Nutella,Chocolate Blanco,Dulce de leche,Philadelphia,Fresas con crema,Brigadeiro'));

    /* Imagen */
    $xcrud->change_type('imagen', 'image', '', array('not_rename'=>true));

    /* Pruebas  */
    $xcrud->button('imprimir.php?id={id}');

    /* Seek and destroy */
    echo $xcrud;
    /* echo $xcrud->render('create'); */

?>
 
</body>
</html>