<header> 
  <!-- Navbar-->
  </head>
   <body class="sb-nav-fixed">
       <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a href="index.html" class="link color-main mx-15"><img  src="..\i\logo.png" height="150" width="150" class="w-300 h-300 radius_full" alt="" /></a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.html">Logout</a>
            </div>
        </li>
    </ul>
</nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Livraison
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Livraison</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Livreur</a>
                                </nav>
                            </div>
                               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
                              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Produits
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                          </a>
                          <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                              <a class="nav-link" href="afficherproduit1.php">Produits</a>
                                  <a class="nav-link" href="affichercategorie1.php">catégories</a>
                              </nav>
                          </div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Promotions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="list.php">List</a>
                                    <a class="nav-link" href="promo.php">promo</a>
                                </nav>
                            </div>
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts7" aria-expanded="false" aria-controls="collapseLayouts7">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Reclamation
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts7" aria-labelledby="headingOne1" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="retour.php">Retour</a>
                                    <a class="nav-link" href="listreclamation.html">Messages</a>
                                </nav>
                            </div>

                           

                           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        User
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne1" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="administrateur.php">administrateur</a>
                            <a class="nav-link" href="clients.php">client</a>
                            <a class="nav-link" href="vendeurs.php">vendeur</a>
                        </nav>
                    </div>
                    
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts5">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Evenement&Actualité
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne1" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="evenementForm.php">Add Evenement</a>
                                    <a class="nav-link" href="evenementView.php">View Evenement</a>
                                    <a class="nav-link" href="actualiteForm.php">Add Actualité</a>
                                    <a class="nav-link" href="actualiteView.php">View Actualité</a>
                                </nav>
                            </div>


</header>