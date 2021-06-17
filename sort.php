<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sorting</title>
        <link rel="shortcut icon" href="/favicon.ico">
         <script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="tablesorter.js"></script>
    <script>
    $(document).ready(function (){
        $("#myTable").tablesorter();
        
    });
    </script>
    <style>
        th.headerSortUp{
            background-image: url(asc.gif);
            background-color: #3399FF;
            background-repeat: no-repeat;
            background-position: center right;
        }
          th.headerSortDown{
            background-image: url(desc.gif);
            background-color: #3399FF;
            background-repeat: no-repeat;
            background-position: center right;
        }
    </style>
    
    </head>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Select a ticket of your choice</h1>
                <hr>
                               <table class="table" id="myTable">
                  <thead class="thead-inverse">
                    <tr>
                      <th>#</th>
                      <th>Route</th>
                      <th>Day/Night</th>
                      <th>Rate</th>
                      <th>Confirmation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Direct</td>
                      <td>Morning 9AM</td>
                      <td>7500/-</td>
                      <td><button type="button" class="btn btn-success">Book now</button></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Direct</td>
                      <td>Afternoon 12PM</td>
                      <td>8500/-</td>
                      <td><button type="button" class="btn btn-success">Book now</button></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Direct</td>
                      <td>Evening 5PM</td>
                      <td>9500/-</td>
                      <td><button type="button" class="btn btn-success">Book now</button></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Direct</td>
                      <td>Night 11PM</td>
                      <td>11000/-</td>
                      <td><button type="button" class="btn btn-success">Book now</button></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Indirect</td>
                      <td>Morning 9AM</td>
                      <td>8000/-</td>
                      <td><button type="button" class="btn btn-success">Book now</button></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Indirect</td>
                      <td>Afternoon 12PM</td>
                      <td>9000/-</td>
                      <td><button type="button" class="btn btn-success">Book now</button></td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Indirect</td>
                      <td>Evening 5PM</td>
                      <td>10000/-</td>
                      <td><button type="button" class="btn btn-success">Book now</button></td>
                    </tr>
                    
                    <tr>
                      <th scope="row">8</th>
                      <td>Indirect</td>
                      <td>Night 11PM</td>
                      <td>12000/-</td>
                      <td><button type="button" class="btn btn-success">Book now</button></td>
                    </tr>
                  </tbody>
                </table>
                
            </div>
        </div>
    </div>
    
</html>

