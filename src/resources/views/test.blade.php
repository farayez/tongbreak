<html>
    <head>
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>   -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    </head>
    <body>
        <h1>Hello, {{ $name }}</h1>

        <div style="position: relative; flex:start">
            <strong>Include:</strong>
            <!-- <input class="timepicker form-control" type="text"> -->
            <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
            <div style="display: inline-block">
                <div style="display: inline-block">
                    <a style="font-weight: bold">+</a>
                </div>
                <div style="display: inline-block">
                    <a style="font-weight: bold">-</a>
                </div>
            </div>
            
        </div>
        <div style="position: relative">
            <strong>Include:</strong>
            <!-- <input class="timepicker form-control" type="text"> -->
            <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
        </div>

        <script type="text/javascript">
            $(function() {
                $('input[name="daterange"]').daterangepicker({
                    opens: 'left',
                    timePicker: true,
                    startDate: moment().startOf('hour'),
                    endDate: moment().startOf('hour').add(32, 'hour'),
                    locale: {
                        format: 'M-DD hh:mm A'
                    }
                }, function(start, end, label) {
                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });
            });
        </script>  
    </body>
</html>

