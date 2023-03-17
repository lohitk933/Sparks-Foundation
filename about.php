<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>About page</title>
</head>
<body>
  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>
    
<section id="about" class="about">
    <div class="container">
        <div class="section-title " >
            <h1 class="text-center my-5">About Us</h1>
        </div>
        <div class="row content">
            <div class="col-lg-6 " >
                <img class="rounded img-fluid float-left" src="img/bank5.jpg" />
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 " >
                <p>
                    Our Banking System is a collection of facilities that provides us with financial services. This organization is in charge of running a payment system. Transfering and accepting deposits. The features of the Indian banking system are: Deals with Money.
                </p>
                <a href="https://lohitk933.github.io/lohitportfolio.github.io/" class="btn-learn-more">Learn More</a>
            </div>
        </div>
    </div>
</section>

     <!-- footer  -->
     <?php require_once './include/footer.php' ?>  

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>