
<?php 

include '../layout/header.php';
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div >
                <div class="card-header">
                Please chech only ONE correct answer
                </div>
            <div class="card-body">
                    <form action="testas_check.php" method="get">
                        <div class="alert alert-secondary" role="alert">
                            1. Which function in PHP computes the difference of arrays
                        </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="exampleRadios1" value="array_map">
                                <?php 
                                if (isset($q1) && $q1=="array_map"){
                                    echo "checked";  
                                    } ?>                                
                                <label class="form-check-label" for="exampleRadios1">
                                array_map
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="exampleRadios2" value="array_splice">
                                <?php 
                                if (isset($q1) && $q1=="array_splice"){
                                    echo "checked";  
                                    } ?>    
                                <label class="form-check-label" for="exampleRadios2">
                                array_splice
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="exampleRadios2" value="array_unique">
                                <?php 
                                if (isset($q1) && $q1=="array_unique"){
                                    echo "checked";  
                                    } ?>    
                                <label class="form-check-label" for="exampleRadios2">
                                array_unique
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="exampleRadios2" value="array_diff">
                                <?php 
                                if (isset($q1) && $q1=="array_diff"){
                                    echo "checked";  
                                    } ?>    
                                <label class="form-check-label" for="exampleRadios2">
                                array_diff
                                </label>
                            </div>
                        <div class="alert alert-secondary my-3" role="alert">
                        2. Which function in PHP applies the callback to the elements of the given arrays
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="exampleRadios1" value="array_diff" >
                                <?php 
                                if (isset($q2) && $q2=="array_diff"){
                                    echo "checked";  
                                    } ?>    
                                <label class="form-check-label" for="exampleRadios1">
                                array_diff
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="exampleRadios2" value="array_splice">
                                <?php 
                                if (isset($q2) && $q2=="array_splice"){
                                    echo "checked";  
                                    } ?>
                                <label class="form-check-label" for="exampleRadios2">
                                array_splice
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="exampleRadios2" value="array_map">
                                <?php 
                                if (isset($q2) && $q2=="array_map"){
                                    echo "checked";  
                                    } ?>
                                <label class="form-check-label" for="exampleRadios2">
                                array_map
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="exampleRadios2" value="array_unshift">
                                <?php 
                                if (isset($q2) && $q2=="array_unshift"){
                                    echo "checked";  
                                    } ?>
                                <label class="form-check-label" for="exampleRadios2">
                                array_unshift
                                </label>
                            </div>
                            
                        <div class="alert alert-secondary my-3 " role="alert">
                       3. Which function in PHP removes duplicate values from an array
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="exampleRadios1" value="array_map" >
                                <label class="form-check-label" for="exampleRadios1">
                                array_map
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="exampleRadios2" value="array_diff">
                                <label class="form-check-label" for="exampleRadios2">
                                array_diff
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="exampleRadios2" value="array_unique">
                                <label class="form-check-label" for="exampleRadios2">
                                array_unique
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="exampleRadios2" value="array_unshift">
                                <label class="form-check-label" for="exampleRadios2">
                                array_unshift
                                </label>
                            </div>
                            
                        <div class="alert alert-secondary my-3" role="alert">
                        4. Which function in PHP return the values from a single column in the input array
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" id="exampleRadios1" value="array_column" >
                                <label class="form-check-label" for="exampleRadios1">
                                array_column
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" id="exampleRadios2" value="array_row">
                                <label class="form-check-label" for="exampleRadios2">
                                array_row
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" id="exampleRadios2" value="array_unshift">
                                <label class="form-check-label" for="exampleRadios2">
                                array_unshift
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" id="exampleRadios2" value="array_map">
                                <label class="form-check-label" for="exampleRadios2">
                                array_map
                                </label>
                            </div>
                            
                        <div class="alert alert-secondary my-3" role="alert">
                        5. Which function in PHP remove a portion of the array and replace it with something else
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" id="exampleRadios1" value="array_split" >
                                <label class="form-check-label" for="exampleRadios1">
                                    array_split
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" id="exampleRadios2" value="array_map">
                                <label class="form-check-label" for="exampleRadios2">
                                   array_map
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" id="exampleRadios2" value="array_unique">
                                <label class="form-check-label" for="exampleRadios2">
                                    array_unique
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" id="exampleRadios2" value="array_values">
                                <label class="form-check-label" for="exampleRadios2">
                                    array_values
                                </label>
                            </div>
                            
                        <div class="alert alert-secondary my-3" role="alert">
                        6. Which superglobal variable holds information about headers, paths, and script locations?
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" id="exampleRadios1" value="globals">
                                <label class="form-check-label" for="exampleRadios1">
                                    $_GLOBALS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" id="exampleRadios2" value="server">
                                <label class="form-check-label" for="exampleRadios2">
                                    $_SERVER
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" id="exampleRadios2" value="session">
                                <label class="form-check-label" for="exampleRadios2">
                                    $_SESSION
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" id="exampleRadios2" value="get">
                                <label class="form-check-label" for="exampleRadios2">
                                    $_GET
                                </label>
                            </div>
                            
                        <div class="alert alert-secondary my-3" role="alert">
                        7. Which function in PHP prepend one or more elements to the beginning of an array
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" id="exampleRadios1" value="array_combine" >
                                <label class="form-check-label" for="exampleRadios1">
                                    array_combine
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" id="exampleRadios2" value="array_pop">
                                <label class="form-check-label" for="exampleRadios2">
                                   array_pop
                                </label>
                            </div>
                            <div class="array_unshift">
                                <input class="form-check-input" type="radio" name="q7" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    array_unshift
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" id="exampleRadios2" value="array_walk">
                                <label class="form-check-label" for="exampleRadios2">
                                    array_walk
                                </label>
                            </div>
                            
                        <div class="alert alert-secondary my-3" role="alert">
                        8. What is the correct way to create a function in PHP?
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" id="exampleRadios1" value="function" >
                                <label class="form-check-label" for="exampleRadios1">
                                    function myfunction()
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" id="exampleRadios2" value="nop">
                                <label class="form-check-label" for="exampleRadios2">
                                    create Myfunction()
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" id="exampleRadios2" value="nop1">
                                <label class="form-check-label" for="exampleRadios2">
                                    new_function myFunction()
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" id="exampleRadios2" value="nop2">
                                <label class="form-check-label" for="exampleRadios2">
                                   let myFunction()
                                </label>
                            </div>
                          
                        <div class="alert alert-secondary my-3" role="alert">
                        9. Which function in PHP sort associative arrays in ascending order, according to the key
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" id="exampleRadios1" value="ksort" >
                                <label class="form-check-label" for="exampleRadios1">
                                ksort
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" id="exampleRadios2" value="sort">
                                <label class="form-check-label" for="exampleRadios2">
                                sort
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" id="exampleRadios2" value="rsort">
                                <label class="form-check-label" for="exampleRadios2">
                                rsort
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" id="exampleRadios2" value="krsort">
                                <label class="form-check-label" for="exampleRadios2">
                                krsort
                                </label>
                            </div>
                            <button type="button " class="btn btn-secondary my-2">Check your answers!</button>
                    </form>
                </div>
            </div>
        </div>   
    </div>    
</div>     

