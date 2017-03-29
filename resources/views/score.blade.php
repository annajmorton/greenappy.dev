@extends('master')

@section('styles')
    @parent
    <meta name="viewport" content="width=device-width" />
    <script src="https://use.fontawesome.com/892c4b30ee.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet"> --}}
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Economica', sans-serif;
            
            background-color: black;
            color: white;
        }

        .container {
            padding: 1.5%;
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }
        .textblk{
            /*display: flex;
            justify-content: space-around;
            align-items: center;*/
            text-align: center;
            background-color: white;
            padding: 5%;
            color: black;
            text-decoration: bold;
        }
        .post.lg.title{
            color: black;
            background-color: white;
            width: 25%;
            font-family: 'Permanent Marker', cursive;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        .title{
            font-family: 'Permanent Marker', cursive;
            color:black;
            font-size: 5em;
            margin-top: none;
            margin-left:2%; 
            margin-right:2%;
        }

        .page{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
        }

        img#logo{
            background-color: transparent;
            width: 100%;
            box-shadow: none;
        }

        @media only screen and (min-width: 769px) {
            .parallax{
                /*height: 100%;*/
                /*width: 100%;*/
                background-image: url("images/cork_board.jpeg");
                background-attachment: fixed;
            
            }
            .section{
                display: flex;
                justify-content: space-around;
                align-items: center;
                margin-top: 5%;
                margin-bottom: 5%;
            }
            .post{
                width: auto;
                height: 100%;
            }
        }
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            .parallax{
                background-image: url("images/cork_board.jpeg");
                background-attachment: fixed;
                /*background-size: 200%;*/
                /*background-repeat: no-repeat;*/
                /*turn off parallax*/
            }
            .section {
                display: flex;
                align-items: center;
                flex-direction: column;
                margin-top: 5%;
                margin-bottom: 5%;
            }
            .post.lg{
                width: 100%;
                height: auto;
            }
            .post.sm{
                width: 50%;
                height: auto;
            }
            .post.xs{
                width: 25%;
                height: auto;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .post.lg.title {
                width: auto;
                height: auto;
            }
        }
        .sketch{
            width: 80%;
            height: auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .spacer{
            height: 30px;
            width: 100%; 
        }

        input {
            background-color: black;
            /*border: 2px solid black;*/
            /*border-radius: 5%;*/
            border: none;
            min-width: 25%;
            margin: 5%;
            padding: 5%;
            display: block;
            min-height: 80px; 
            min-width: 300px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            color: yellow;
            font-family: 'Permanent Marker', cursive;
            font-size: 1.5em;
        }

        /*input placeholder font color*/
        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
          color: #ff72de;
        }
        ::-moz-placeholder { /* Firefox 19+ */
          color: #ff72de;
        }
        :-ms-input-placeholder { /* IE 10+ */
          color: #ff72de;
        }
        :-moz-placeholder { /* Firefox 18- */
          color: #ff72de;
        }

        /* mouse over link */
        input:hover {
            font-weight: bold;
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 8px 22px 0 rgba(0, 0, 0, 0.19);
        }

        /* selected link */
        input:focus {
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 8px 22px 0 rgba(0, 0, 0, 0.19); 
            outline: none;
            border-bottom: solid black 5px;
            background-color: #42f4c5;
            color: #ff72de;
            margin: 5%;
            padding: 5%;
        }

        [type="submit"]:focus {
            border: solid black 5px;
            color: yellow;
        }

        .checkbox-inline{
            color: black;
            font-weight: bold;
            color: black;
            text-shadow:
            -2px -2px 0 #fff,
            2px -2px 0 #fff,
            -2px 2px 0 #fff,
            2px 2px 0 #fff; 
        }
    </style>
@endsection


@section('content')
    <a id="backtotop"></a>
    <div class="parallax">
        <div class="page">
           <div class="section"></div>
           <div class="title">Share Your Carbon Footprint</div>
           <div class="section"></div>

           
           <div class="textblk">
            <h2>Carbon Scoreboard</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>email</th>
                  <th>lbsCO2</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>34,070</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>36,500</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                  <td>36,870</td>
                </tr>
              </tbody>
            </table>

           </div>
           <div class="section"></div>

          <div class="textblk">
                <a href="https://www3.epa.gov/carbon-footprint-calculator/" target="_blank">
                    <h2>click this link to calculate your footprint!</h2>
                </a>   
           </div>

           <div class="section"></div>
           <div class="textblk">
                <h2>post your data to the scoreboard!</h2>
                <form method="GET" action="">
                    <input type="text" placeholder="name" name="name">
                    <input type="email" pattern="[^ @]*@[^ @]*" name="email" value="" placeholder="type email...">
                    <input type="text" placeholder="carbon score" name="carbon_score">
                    <input type="submit" value="submit!">
                </form>
          </div>
            <div>
                <a class="post lg title" href="#backtotop">
                    <h2>return to top of page</h2>
                </a>
              
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    @parent

  
@endsection