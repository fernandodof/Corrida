<link href="../libs/bootstrap-datepicker-1.3.1/css/datepicker3.css" rel="stylesheet">
<link href="../libs/bootstrap-3-timepicker-0.2.5/css/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="../libs/iCheck-1.0.2/skins/square/blue.css" rel="stylesheet">
<link href="../css/newActivity.css" rel="stylesheet">
<script src="../libs/bootstrap-datepicker-1.3.1/js/bootstrap-datepicker.js"></script>
<script src="../libs/bootstrap-3-timepicker-0.2.5/js/bootstrap-timepicker.min.js"></script>
<script src="../libs/iCheck-1.0.2/icheck.min.js"></script>
<script src="../libs/bootstrap-datepicker-1.3.1/js/locales/bootstrap-datepicker.pt-BR.js" charset="UTF-8"></script>
<script src="../js/newActivity.js"></script>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Adicionar novas corridas<small></small></h1>

                <div class="panelWraper col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                    <div class=" panel panel-primary">
                        <div class="panel panel-heading">
                            <h3 class="panel-title">Nova Corrida <i class="fa fa-fw fa-plus-circle"></i></h3>
                        </div>
                        <div class="panel panel-body">

                            <div class="col-md-7">
                                <div id="sandbox-container" class="group">
                                    <div class="form-group form-group-lg input-group date">
                                        <input type="text" id="runDate" placeholder="Data da corrida" class="input-lg form-control"><span class="input-group-addon"><i class="fa fa-fw fa-calendar"></i></span>
                                    </div>
                                </div>

                                <div id="time-container" class="group">
                                    <small> Tempo hh:mm:ss</small>
                                    <div class="form-group form-group-lg input-group bootstrap-timepicker time">
                                        <input id="timepicker" type="text" class="input-lg form-control input-group-addon">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-clock-o"></i></span>
                                    </div>
                                </div>
                                <label id="lbDistancia">Distancia: </label>
                                <div id="distance-container" class="col-xs-12 row pull-left group">
                                    <div class="form-group pull-left form-group-lg">
                                        <input type="text" name="distance" id="distance" class="form-control" value="0">
                                    </div>
                                    <div class="pull-left group" id="distance-radio-btn">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked name="distanceUnit" value="k" /> Km
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="distanceUnit" value="m" /> Metros
                                            </label>
                                        </div>
                                    </div>                                    
                                </div>

                            </div>

                            <div class="form-group-lg group">
                                <textarea name="notes" placeholder="Observações" id="notes" class="form-control"></textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div><!-- /#page-wrapper -->
</div>
</body>
</html>