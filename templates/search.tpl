<link href="{$templateRoot}libs/pickadate.js-3.5.3/lib/compressed/themes/default.css" rel="stylesheet">
<link href="{$templateRoot}libs/pickadate.js-3.5.3/lib/compressed/themes/default.date.css" rel="stylesheet">
<link href="{$templateRoot}css/search.css" rel="stylesheet">
<script src="{$templateRoot}libs/pickadate.js-3.5.3/lib/compressed/picker.js"></script>
<script src="{$templateRoot}libs/pickadate.js-3.5.3/lib/compressed/picker.date.js"></script>
<script src="{$templateRoot}libs/pickadate.js-3.5.3/lib/compressed/translations/pt_BR.js" charset="UTF-8"></script>
<script src="{$templateRoot}js/search.js"></script>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pesquisar<small></small></h1>
                <div class="panelWraper col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class=" panel panel-default">
                        <div class="panel panel-heading">
                            <h3 class="panel-title">Pesquisar corridas <i class="fa fa-fw fa-search"></i></h3>
                        </div>
                        <div class="panel panel-body">
                            <form method="POST">
                                <fieldset>
                                    <legend class="form-legend">Pesquisar por data</legend>
                                    <div class="col-xs-12">
                                        <div id="sandbox-container" class="form-group pull-left">
                                            <div class="form-group-lg input-group date">
                                                <input type="text" id="runDate" name="runDate" placeholder="Data da corrida" class="input-lg form-control"><span class="clendar-icon input-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <a class="btn btn-success btn-lg searchBtn hidden-xs hidden-sm pull-left" href="#"><span class="fa fa-fw fa-search"></span></a>
                                        <a class="btn btn-success btn-lg searchBtn visible-xs visible-sm pull-right col-xs-12" href="#"> Pesquisar<span class="fa fa-fw fa-search"></span></a>
                                    </div>
                                </fieldset> 
                            </form>
                        </div>
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