 <!-- Sidebar -->
 <ul class="sidebar navbar-nav">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="../Home/Partials/Main.html.php">
          <i class="fas fa-fax"></i>
          <span>Dashboard</span>
        </a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Archivos</span>
        </a>
        <div class="dropdown-menu " aria-labelledby="pagesDropdown">
          <a class="dropdown-item " id="viewProduct" >Productos</a>
          <a class="dropdown-item " id="showCustomer">Clientes</a>
          <a class="dropdown-item" id="showProvider">Proveedores</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-box"></i>
          <span>Ventas</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" id="showGenerateSale" >Generar de Venta</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-shopping-cart" id="showPurchase"></i>
          <span>Compras</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" id="showInvoice">Factura de Compra</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-key"></i>
          <span>Seguridad</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" id="showProfile" >Perfil</a>
          <a class="dropdown-item " id="showAudit" >Auditoria</a>

        </div>
      </li>
      
      <form name="clock">
          <div class="text-center contenedor-div">
		      	<input class="bordeado" name="face" value="">
          </div>
			</form>

    </ul>
<!-- =========== -->
<style>
    .contenedor-div{
      position:absolute;
      bottom:10px;
      left:-44px;
  }
  .bordeado{
    width: 50%;
    height: 25px;
    margin: 0 auto;
    border: none; /* <-- This thing here */
    border:solid 1px #ccc;
    border-radius: 10px;
    text-align: center;
  }
</style>


