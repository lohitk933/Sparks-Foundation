<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>

    <section id="services" class="services">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5">Our Services</h1>
            <div class="container">
                <div class="row row-cols-2">       
                    <div class="col ">
                        <h3>Manage Everything at one place</h3>   
                        <div class="container col my-5">
                            <p class="lead"> To see all Customers</p>
                            <a href="customer.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                        </div>
                        <div class="container col my-5">
                            <p class="lead"> To see all Transaction</p>
                            <a href="transaction.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                        </div>
                    </div>
                    <div class="col">
                        <img src="img/bank4.jpg" class="rounded img-fluid float-right" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- footer  -->
     <?php require_once './include/footer.php' ?>  

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>