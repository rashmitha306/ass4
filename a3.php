<html>
<body>
<?php
    //function: isPalindrome
    //description
    function isPalindrome($number){
        //assign number to temp variable
        $temp = $number;
        //variable 'sum' to store reverse number
        $sum = 0;
       
        //loop that will extract digits from the last
        //to make reverse number
        while(floor($temp)){
            $digit = $temp % 10;
            $sum = $sum*10 + $digit;
            $temp = $temp/10;
        }
        //if number is equal to its reverse number
        //then it will be a palindrome number
        if($sum == $number)
            return 1;
        else
            return 0;
    }
    //Main code to test above function
    $num = 12321;
    if(isPalindrome($num))
        echo($num . " is a palindrome number");
    else
        echo($num . " is not a palindrome number");
?>
</body>
</html>
