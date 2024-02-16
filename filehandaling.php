<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>file handaling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        
    }
    .s1-d {
        padding-top: 2%;
        display: flex;
        justify-content: center;
        padding-bottom: 2%;
     
    }

    .s1-c {
        background-color: rgb(5, 139, 218, 0.5);
    }
    .section1 {
        width: 100%;
        height: auto;
        background-image: url(img/b.avif);
        background-repeat: no-repeat;
        background-size: 100%;
        position: relative;
        top:0;
    }
    .d1{
        width: 600px;
        position: absolute;
        bottom:550px;
        left:300px;
   
    margin-right:20px;
   
    }
    
   .b1{
    margin-left:100px;
    margin-right:100px;
   }
</style>

<body>
    <!-- section 1 -->
    <form action="getdata.php" method="post">
    <section class="section1  ">
        <div class="s1-d">
            <div class=" col-lg-4 col-md-6 col-ms-12 col-12">
                <div class="s1-c p-5 rounded-3">
                    <h2 class="text-center text-light pb-3">Registation Form</h2>

                    <p><div class="mb-3">
                       <label for="formGroupExampleInput" class="form-label"  >Full Name</label>
                       <input type="text" class="form-control rounded-pill " name="Full name" id="formGroupExampleInput" placeholder="Full name">
                       </div>
                       <div class="mb-3">
                         <label for="formGroupExampleInput2" class="form-label"  >Email</label>
                         <input type="email" class="form-control rounded-pill" name="email" id="formGroupExampleInput2" placeholder="Email" >
                       </div>

                       <div class="mb-3">
                       <label for="formGroupExampleInput" class="form-label">Phone Number</label>
                       <input type="number" class="form-control rounded-pill" id="formGroupExampleInput" name="number"  placeholder="Phone Number">
                       </div>
                       <div class="mb-3">
                         <label for="formGroupExampleInput2" class="form-label">Password</label>
                         <input type="text" class="form-control rounded-pill" id="formGroupExampleInput2 "  name="password"placeholder="Password">
                       </div>

                       <div class="">
                       <label for="formGroupExampleInput" class="form-label">Confirm Password</label>
                       <input type="text" class="form-control rounded-pill" id="formGroupExampleInput" name="Confirm password" placeholder="Confirm Password">
                       </div>
                    
                        
                        </p>

                   
                    <div class="b1 d-grid gap-2 pt-3  ">
                        <button class="btn btn-primary rounded-pill py-2" type="Register" value="Register" name="Register">submit</button>

                    </div>
           
                </div>
            </div>

        </div>
        <div class="d1 ">
       <img src="img/pngwing.com.png" alt="" width="25%" >
        </div>
    </section>
   



     </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

