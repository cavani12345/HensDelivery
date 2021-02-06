<style>
    @media screen and (min-width: 480px) {
  nav {
    margin-top: 10px;
  }
}
</style>
<nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="products.php?prod=cocks">Cocks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php?prod=hens">Hens</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php?prod=eggs">Eggs</a>
      </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        All Categories
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="products.php?prod=hens">HENS</a>
        <a class="dropdown-item" href="products.php?prod=cocks">COCKS</a>
        <a class="dropdown-item" href="products.php?prod=eggs">EGGS</a>
      </div>
    </li>
    </ul>
  </div>  
</nav>