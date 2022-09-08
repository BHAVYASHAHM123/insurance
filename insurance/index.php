<?php
    $url = 'https://api.nicesnippets.com/api/users';
    $fields_string = 'customerID=1&';
    $fields_string .= 'getBanner=getBanner&';
    rtrim($fields_string, '&');
    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, 2);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

    //execute post
    $result = curl_exec($ch);
    echo $result;
    //close connection
    curl_close($ch);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>1insurance Diary | index</title>
</head>
<body>

    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
  
          <div class="row">

                <div class="col-xl-3 col-sm-6 col-6"> 
                    <div class="card" >
                    <div class="card-content" style="padding-left: 15px; padding-right: 15px; padding-top: 5px;padding-bottom: 5px;">
                        <div class="card-body p-0" style="padding-left: 15px;">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                            <span style="font-size: 20px;font-weight: bold; color: black;">Bhavya</span>
                            </div>
                        </div>
                        
                        </div>
                        
                    </div>
                    
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-6"> 
                    
                        <div class="media d-flex">
                            <div class="media-body text-right">
                                <img src="images/whatsapp.png" height="50px" width="50px">
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>

    


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="box-shadow: 5px;padding: 10px;">
        <div class="carousel-indicators" style="height: 20px;">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" >
          <div class="carousel-item active" >
            <img src="touch.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="about.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="team2.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <br> <br>
    
    
    <div class="grey-bg container-fluid">
      <section id="minimal-statistics">

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12"> 
                <div class="card">
                <div class="card-content">
                    <div class="card-body">
                    <div class="media d-flex">
                        <div class="align-self-center">
                        <img src="images/policy.jpg" width="110px" height="80px">
                        </div>
                        <div class="media-body text-right" style="padding-top: 25px;">
                        <span style="font-size: 20px;font-weight: bold; color: black;">My Policy Details</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12"> 
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <img src="images/documents.jpg" width="100px" height="80px">
                            </div>
                            <div class="media-body " style="padding-top: 25px;">
                                <span style="font-size: 20px;font-weight: bold; color: black;">My Document</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12"> 
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <img src="images/intimation.jpg" width="110px" height="80px">
                            </div>
                            <div class="media-body " style="padding-top: 25px;">
                                <span style="font-size: 20px;font-weight: bold; color: black;">Claim Intimation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12"> 
            <div class="card">
                <a href="https://finance.marvytech.co.in/apis/getlinks.php?customerID=1">
                <div class="card-content">
                    <div class="card-body">
                    <div class="media d-flex">
                        <div class="align-self-center">
                            <img src="images/links.jpg" width="110px" height="80px">
                        </div>
                        <div class="media-body " style="padding-top: 25px;">
                            <span style="font-size: 20px;font-weight: bold; color: black;">Useful links</span>
                        </div>
                    </div>
                </div></a>
            </div>
        </div>
            </div>
          </div>
        </div>
      
        
      </div>
    </section>
    </div>
</body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    const myCarousel = document.getElementById('myCarousel')

myCarousel.addEventListener('slide.bs.carousel', event => {
  // do something...
})
</script>