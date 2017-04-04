<?php include 'inc/header.html'; ?>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <img src="img/saver-logo.svg" class="img-responsive">
                </div>
            </div>
            <div class="col-sm-6">
                <form class="navbar-form navbar-search">
                    <div class="form-group">
                        <input type="search" placeholder="Buscar" class="form-control">
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="navbar-user">
                    <div class="notifications">
                        <a href="#" class="btn btn-link"><i class="material-icons">notifications</i></a>
                        <a href="#" class="btn btn-link"><i class="material-icons">chat_bubble</i></a>
                    </div>
                    <div class="profile">
                        <a href="#" class="profile-img btn btn-link"></a>
                            
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown">Jhon Doe <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="material-icons">person</i>Perfil</a></li>
                            <li><a href="#"><i class="material-icons">exit_to_app</i>Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="feed">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        <div class="profile text-center">
                            <a href="#">
                                <div class="profile-img">
                                    
                                </div>
                                <div class="profile-description">
                                    <h3>Juan Cevallos</h3>
                                    <h4>Plomero</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="#">Terminos y Condiciones</a> |
                <a href="#">Acerca de Saver</a>
            </div>
        </div>
    </div>
</footer>
<?php include 'inc/footer.html'; ?>