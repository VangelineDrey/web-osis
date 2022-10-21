<!DOCTYPE html>
    <html>
        <head>
            <title>Detail | SMK</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            @if ($student->id ==100)
                <style>
                    body{
                        background: url("{{ asset('img/bg-student.gif') }}") no-repeat center center fixed; 
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    }

                    .w3-container{
                        opacity: 0.8;
                    }
                    p, b{
                        opacity: 1!important;
                    }
                </style>
            @endif
                <style>
                html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
                .peps{
                    width: 100%;
                max-width: 405px;
                height: auto;
                }
                </style>
        </head>
        <body class="w3-light-grey">
            <!-- Page Container -->
            <div class="w3-content w3-margin-top" style="max-width:1400px;">

            <!-- The Grid -->
            <div class="w3-row-padding">
            
                <!-- Left Column -->
                <div class="w3-third">
                
                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                    @if($student->image !="")
                        <img src="../../img/people/{{$student->image}}" class="peps">
                    @else
                        <img src="../../img/noprofile.jpg" class="peps"/>
                    @endif
                    
                    </div>
                </div><br>

                <!-- End Left Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-twothird">
                
                <div class="w3-container w3-card w3-white w3-margin-bottom">
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="float:right;margin-top:5px;">
                <a href="/" class="text-sm text-gray-700 underline"><i class="fa fa-home w3-hover-opacity"></i>&nbsp;Home</a><t>&nbsp;/&nbsp;
                <a href="/classroom/{{$kelas->id}}" class="text-sm text-gray-700 underline"><i class="fa fa-arrow-left w3-hover-opacity"></i>&nbsp;Back</a>
            </div>
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>{{$student->name}}</h2>
                    <div class="w3-container">
                    <h5 class="w3-opacity"><b>Nickname / {{$student->nickname}}</b></h5>
                    <h5 class="w3-opacity"><b>Date of Birth / {{$student->dob}}</b></h5>
                    <h5 class="w3-opacity"><b>Class / {{$kelas->name}}</b></h5><hr>
                    <h6 class="w3-text-teal"><i class="fa fa-file-archive-o fa-fw w3-margin-right"></i>Short Description</h6>
                    <p>{{$student->sfm}}</p>
                    <hr>
                    </div>
                    <div class="w3-container">
                    <h6 class="w3-text-teal"><i class="fa fa-heart fa-fw w3-margin-right"></i>My Hobby</h6>
                    <p>{{$student->hobby}}</p>
                    <hr>
                    </div>
                </div>

                

                <!-- End Right Column -->
                </div>
                
            <!-- End Grid -->
            </div>
            
            <!-- End Page Container -->
            </div>

            <footer class="w3-container w3-teal w3-center w3-margin-top">
            <p>Si Ganteng | Siswa SMK Cinta Kasih Tzu Chi</p>
            <a href="#"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-twitter w3-hover-opacity"></i></a>
            <a href="#"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
            </footer>

        </body>
</html>

