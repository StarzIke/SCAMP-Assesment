<?php
    function fibonacciSequence($nthTerm){
        $number1 = 0;
        $number2 = 1;

        $count = 0;
        for($count = 0; $count<=$nthTerm; $count++){
            echo ' '.$number1;
            $number3 = $number2 + $number1;
            $number1 = $number2;
            $number2 = $number3;
        }
    }
?>

    <html>
    <head>
        <title>Fibonacci Sequence</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Find The Fibonacci Sequence of A Given Number</h4>           
                    
                    <form class="forms-sample" action="fibonacci.php" method="POST">
                        <div class="form-group col-md-4">
                            <label for="exampleInputName1">Enter Any Number</label>
                            <input type="text" class="form-control" name="number" id="exampleInputName1">
                        </div>   <br>                                   
                    
                        <button type="submit" name="submit" class="btn btn-success mr-2">Find Sequence</button>
                        
                    </form>
                    <div class = "row">
                    <div class="col-md-10">
                    <?php
                        if(isset($_POST["submit"])){
                            $nth = $_POST["number"];
                            
                            if($nth == 0){
                                echo "<h4>Fibonacci Sequence of {$_POST["number"]} is = 0 </h4>";
                            }elseif($nth == 1){
                                echo "<h4>Fibonacci Sequence of {$_POST["number"]} is = 0 1 </h4>";
                            }
                            else{
                                echo "<h4>Fibonacci Sequence of {$_POST["number"]} is = ";
                                echo fibonacciSequence($nth);
                                echo "</h4>";
                                
                            }
                        }else{
                            //echo "Please Confirm Input";
                        }
                    ?></div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>
        
    </body>
</html>