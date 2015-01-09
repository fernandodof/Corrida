<link href="{$templateRoot}css/profile.css" rel="stylesheet">
<script src="{$templateRoot}libs/jquery.dim-background.js"></script>
<script src="{$templateRoot}js/profile.js"></script>
<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cadastro <small></small></h1>
                <div class="col-lg-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <a class="btn btn-default" id="editBtn" onclick="edit();">Editar <span class="fa fa-fw fa-edit"></span></a>
                    <div>
                        <form id="editRegistrationForm" method="POST">
                            <div class="form-group">
                                <input class="form-control editToogle" disabled type="text" id="name" name="name" placeholder="Nome" value="{$runner->getName()}">
                            </div>
                            <div class="form-group">
                                <input class="form-control editToogle" disabled  type="text" id="email" name="email" placeholder="Email" value="{$runner->getEmail()}">
                            </div>
                            <div class="form-group">
                                <input class="form-control editToogle" disabled  type="text" id="login" name="login" placeholder="Login" value="{$runner->getLogin()}">
                            </div>
                            <div class="form-group">
                                <input class="form-control editToogle" disabled  type="password" id="password1" name="password1" placeholder="Senha">
                            </div>
                            <button type="submit" id="btnSave" disabled class="btn btn-block btn-success editToogle">Salvar <img src="{$templateRoot}images/loader/loginLoader.gif" id="loginLoader"></button>
                        </form>
                    </div>
                    <div id="wrapPassword">
                        
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
</body>
</html>