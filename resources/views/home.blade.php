<!DOCTYPE html>
<html lang="es">

<head>
  <title>Matrix Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('Plantilla/assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('Plantilla/assets/css/bootstrap-responsive.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('Plantilla/assets/css/fullcalendar.css')}}" />
  <link rel="stylesheet" href="{{ asset('Plantilla/assets/css/matrix-style.css')}}" />
  <link rel="stylesheet" href="{{ asset('Plantilla/assets/css/matrix-media.css')}}" />
  <link href="{{ asset('Plantilla/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('Plantilla/assets/css/jquery.gritter.css')}}" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

  <!--Header-part-->
  <div id="header">
    <h1><a href="#">FACTO</a></h1>
  </div>
  <!--close-Header-part-->


  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">Welcome User</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-user"></i> Perfil</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-key"></i> Salir</a></li>
        </ul>
      </li>

      <li class=""><a title="" href="#"><i class="icon icon-share-alt"></i> <span class="text">Salir</span></a></li>
    </ul>
  </div>
  <!--close-top-Header-menu-->
  <!--start-top-serch-->
  <div id="search">
    <input type="text" placeholder="Search here..." />
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
  </div>
  <!--close-top-serch-->
  <!--sidebar-menu-->
  <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> INICIO</a>
    <ul>
      <li class="active"><a href="#"><i class="icon icon-home"></i> <span>INICIO</span></a> </li>
    </ul>
  </div>
  <!--sidebar-menu-->

  <!--main-container-part-->
  <div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->


    <div class="container-fluid">
      <hr>
      <button type="button" class="btn btn-block" onclick="actualizarData()">actualizar</button>
      <button type="button" class="btn btn-block" onclick="dataPorcentaje()">porcentaje</button>
      <button type="button" class="btn btn-block" onclick="listData()">Listar</button>
      <div class="row-fluid">

        <form id="for1" class="form-horizontal">
          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Encuesta</h5>
              </div>
              <div class="widget-content nopadding">

                <div class="control-group">
                  <label class="control-label">1. Identifique su sexo para intervenir en el estudio</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="1" value="1a" checked />
                      Masculino</label>
                    <label>
                      <input type="radio" name="1" value="1b" />
                      Femenino</label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">2. Su edad esta comprendido entre</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="2" value="2a" checked />
                      40-50 años </label>
                    <label>
                      <input type="radio" name="2" value="2b" />
                      51 - 60 años</label>
                    <label>
                      <input type="radio" name="2" value="2c" />
                      Mayor de 60 años</label>
                    <label>
                      <input type="radio" name="2" value="2d" />
                      No corresponde</label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">3. Índice de Masa corporal</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="3" value="3a" checked />
                      Menor a 30 </label>
                    <label>
                      <input type="radio" name="3" value="3b" />
                      31 - 34</label>
                    <label>
                      <input type="radio" name="3" value="3c" />
                      35 - 39</label>
                    <label>
                      <input type="radio" name="3" value="3d" />
                      Mayor o igual a 40</label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">4. Presencia de cefalea o dolor de cabeza</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="4" value="4a" checked />
                      Si</label>
                    <label>
                      <input type="radio" name="4" value="4b" />
                      No</label>
                    Third One</label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">5. Presencia de parestesia (adormecimientos)</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="5" value="5a" checked />
                      Si</label>
                    <label>
                      <input type="radio" name="5" value="5b" />
                      No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Encuesta</h5>
              </div>
              <div class="widget-content nopadding">
                <div class="control-group">
                  <label class="control-label">6. Presencia de tinitus (ruidos en el obrero)</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="6" value="6a" checked />
                      Si</label>
                    <label>
                      <input type="radio" name="6" value="6b" />
                      No</label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">7. Presencia de dificultad respiratoria</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="7" value="7a" checked />
                      Leve</label>
                    <label>
                      <input type="radio" name="7" value="7b" />
                      Moderado</label>
                    <label>
                      <input type="radio" name="7" value="7c" />
                      Severo</label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">8. presencia de coloración azulada (cianosis) en los dedos</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="8" value="8a" checked />
                      Leve</label>
                    <label>
                      <input type="radio" name="8" value="8b" />
                      Moderada</label>
                    <label>
                      <input type="radio" name="8" value="8c" />
                      Severa</label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">9. Diagnóstico previo de hipertensión arterial </label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="9" value="9a" checked />
                      Si</label>
                    <label>
                      <input type="radio" name="9" value="9b" />
                      No</label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">10. Frecuencia de visitas a control médico</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="10" value="10a" checked />
                      1 vez al año</label>
                    <label>
                      <input type="radio" name="10" value="10b" />
                      2 - 3 veces al año</label>
                    <label>
                      <input type="radio" name="10" value="10c" />
                      No Asiste</label>
                  </div>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-success">Registrar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="container-fluid">
          <hr>
          
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P1</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="ssss">
                </ul>
              </div>
            </div>
          </div>  
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P2</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="dP2">
                </ul>
              </div>
            </div>
          </div>
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P3</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="dP3">
                </ul>
              </div>
            </div>
          </div>
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P4</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="dP4">
                </ul>
              </div>
            </div>
          </div>
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P5</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="dP5">
                </ul>
              </div>
            </div>
          </div>
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P6</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="dP6">
                </ul>
              </div>
            </div>
          </div>  
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P7</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="dP7">
                </ul>
              </div>
            </div>
          </div>
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P8</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="dP8">
                </ul>
              </div>
            </div>
          </div>
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P9</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="dP9">
                </ul>
              </div>
            </div>
          </div>
          <div class="span2">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>P10</h5>
              </div>
              <div class="widget-content">
                <ul class="unstyled" id="dP10">
                </ul>
              </div>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12">
              <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                  <h5>Relevacion de datos</h5>
                </div>
                <div class="widget-content nopadding">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Pre - 1</th>
                        <th>Pre - 2</th>
                        <th>Pre - 3</th>
                        <th>Pre - 4</th>
                        <th>Pre - 5</th>
                        <th>Pre - 6</th>
                        <th>Pre - 7</th>
                        <th>Pre - 8</th>
                        <th>Pre - 9</th>
                        <th>Pre - 10</th>
                      </tr>
                    </thead>
                    <tbody id="tablaLista">
                      <tr class="odd gradeX">
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!--end-main-container-part-->

  <!--Footer-part-->

  <div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
  </div>

  <!--end-Footer-part-->

  <script src="{{ asset('Plantilla/assets/js/excanvas.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.ui.custom.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.flot.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.flot.resize.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.peity.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/fullcalendar.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/matrix.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/matrix.dashboard.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.gritter.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/matrix.interface.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/matrix.chat.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.validate.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/matrix.form_validation.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.wizard.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.uniform.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/select2.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/matrix.popover.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('Plantilla/assets/js/matrix.tables.js')}}  "></script>


  <script src="{{ asset('resources/js/formulario.js')}}  "></script>

  <script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green", "blue", "orange", "brown"];

    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {
          display: false
        },
        title: {
          display: true,
          text: "World Wine Production 2018"
        }
      }
    });
  </script>

  <script type="text/javascript">
    $(function() {
      // we use an inline data source in the example, usually data would
      // be fetched from a server
      var data = [],
        totalPoints = 300;

      function getRandomData() {
        if (data.length > 0)
          data = data.slice(1);

        // do a random walk
        while (data.length < totalPoints) {
          var prev = data.length > 0 ? data[data.length - 1] : 50;
          var y = prev + Math.random() * 10 - 5;
          if (y < 0)
            y = 0;
          if (y > 100)
            y = 100;
          data.push(y);
        }

        // zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < data.length; ++i)
          res.push([i, data[i]])
        return res;
      }

      // setup control widget
      var updateInterval = 30;
      $("#updateInterval").val(updateInterval).change(function() {
        var v = $(this).val();
        if (v && !isNaN(+v)) {
          updateInterval = +v;
          if (updateInterval < 1)
            updateInterval = 1;
          if (updateInterval > 2000)
            updateInterval = 2000;
          $(this).val("" + updateInterval);
        }
      });

      // setup plot
      var options = {
        series: {
          shadowSize: 0
        }, // drawing is faster without shadows
        yaxis: {
          min: 0,
          max: 100
        },
        xaxis: {
          show: false
        }
      };
      var plot = $.plot($("#placeholder2"), [getRandomData()], options);

      function update() {
        plot.setData([getRandomData()]);
        // since the axes don't change, we don't need to call plot.setupGrid()
        plot.draw();

        setTimeout(update, updateInterval);
      }

      update();
    });
  </script>


</body>

</html>