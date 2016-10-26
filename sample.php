<!DOCTYPE html">
<html>
    <head id="Head1">
        <title>My Calendar</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1.0">
        
        <link href="css/dailog.css" rel="stylesheet" type="text/css" />
        <link href="css/calendar.css" rel="stylesheet" type="text/css" /> 
        <link href="css/dp.css" rel="stylesheet" type="text/css" />   
        <link href="css/alert.css" rel="stylesheet" type="text/css" /> 
        <link href="css/main.css" rel="stylesheet" type="text/css" />     
    </head>
    <body>
        <div>
            <div id="calhead" style="padding-left:1px;padding-right:1px;">          
                <div class="cHead">
                    <div class="ftitle">Mi Calendario</div>
                    <div id="loadingpannel" class="ptogtitle loadicon" style="display: none;">Cargando datos...</div>
                    <div id="errorpannel" class="ptogtitle loaderror" style="display: none;">Disculpe, no se puede cargar los datos.</div>
                </div>
                <div id="caltoolbar" class="ctoolbar">
                    <div id="faddbtn" class="fbutton">
                        <div><span title='Clic para Crear Evento' class="addcal">Nuevo Evento</span></div>
                    </div>
                    <div class="btnseparator"></div>
                    
                    <div id="showtodaybtn" class="fbutton">
                        <div><span title='Clic para ver hoy' class="showtoday">Hoy</span></div>
                    </div>
                    <div class="btnseparator"></div>

                    <div id="showdaybtn" class="fbutton">
                        <div><span title='Día' class="showdayview">Día</span></div>
                    </div>
                    <div  id="showweekbtn" class="fbutton fcurrent">
                        <div><span title='Semana' class="showweekview">Semana</span></div>
                    </div>
                    <div  id="showmonthbtn" class="fbutton">
                        <div><span title='Mes' class="showmonthview">Mes</span></div>
                    </div>
                    <div class="btnseparator"></div>
                    <div  id="showreflashbtn" class="fbutton">
                        <div><span title='Actualizar' class="showdayflash">Actualizar</span></div>
                    </div>
                    <div class="btnseparator"></div>
                    
                    <div id="sfprevbtn" title="Anterior" class="fbutton">
                        <span class="fprev"></span>
                    </div>
                    <div id="sfnextbtn" title="Siguiente" class="fbutton">
                        <span class="fnext"></span>
                    </div>
                    <div class="fshowdatep fbutton">
                        <div><input type="hidden" name="txtshow" id="hdtxtshow"><span id="txtdatetimeshow">Calendario</span></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div style="padding:1px;">
                <div class="t1 chromeColor">&nbsp;</div>
                <div class="t2 chromeColor">&nbsp;</div>
                <div id="dvCalMain" class="calmain printborder">
                    <div id="gridcontainer" style="overflow-y: visible;"></div>
                </div>
                <div class="t2 chromeColor">&nbsp;</div>
                <div class="t1 chromeColor">&nbsp;</div>   
            </div>
        </div>

        <script src="src/jquery.js" type="text/javascript"></script>  
        <script src="src/Plugins/Common.js" type="text/javascript"></script>    
        <script src="src/Plugins/datepicker_lang_US.js" type="text/javascript"></script>     
        <script src="src/Plugins/jquery.datepicker.js" type="text/javascript"></script>

        <script src="src/Plugins/jquery.alert.js" type="text/javascript"></script>    
        <script src="src/Plugins/jquery.ifrmdailog.js" defer="defer" type="text/javascript"></script>
        <script src="src/Plugins/wdCalendar_lang_US.js" type="text/javascript"></script>    
        <script src="src/Plugins/jquery.calendar.js" type="text/javascript"></script>   

        <script type="text/javascript" src="main.js"></script>
    </body>
</html>