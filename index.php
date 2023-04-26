<?php include("./template/header.php");?>

 <?php include("./content/ult-productos.php");?> 

<div class="p-3 bg-light">
    <div class="container ">
        <h1 class="display-3 text-center">Portafolio Especial</h1>
        <hr class="my-3">
        <div class="row">
                <a class="btn btn-primary btn-lg aling-center" href="archivos/accesorios.pdf" role="button">Descargar</a>
                <br>
            <div class="grid text-center"> 
                <object class="pdfview" type="application/pdf" data="archivos/accesorios.pdf" height="800px" width="100%" ></object>
            </div>   
        </div>
    </div>
</div>    
<?php include("template/footer.php")?>