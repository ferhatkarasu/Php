        <?php
                if(isset($_POST["control"]))
                {
                    $number1=$_POST["number1"];
                    $number2=$_POST["number2"];
                    $select=$_POST["select"];
                    $result=0;
                    
                    if($select == 'add')
                    {
                        $result=$number1+$number2;
                    }
                    elseif($select == 'subtract')
                    {
                        $result=$number1-$number2;    
                    }
                    elseif($select == 'multiply')
                    {
                        $result=$number1*$number2;    
                    }
                    elseif($select == 'divide')
                    {
                         $result=$number1/$number2;   
                    }
                    
                    echo "<h1 class='text-info'>$result</h1>";
                }     
                ?>