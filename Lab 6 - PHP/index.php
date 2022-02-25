<php class="validate executablePath"></php>
<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <p>
        <?php
        echo "Hello World";
        ?>
        </p>
        <p>
        <?php
       $myage = 21;
       if ($myage >= 21) {
           echo "You can buy specs, mugs, and sausage rolls";
       }
       elseif ($myage >= 18) {
           echo "You can buy specs and mugs";
       }
       elseif ($myage >= 16) {
           "You can buy specs"
       }
       else {
           "You can't buy anything"
       }
        ?>
        </p>
        <p>
        <?php
       $wantedgood =  "specs";
       switch ($wantedgood) {
           case "specs":
            echo "You have to be 16  to buy specs";
            break;
            case "mugs":
                echo "You have to be 18 to buy mugs";
                break;
                case "sausage rolls";
                echo "You have to be 21 to buy sausage rolls";
                break;
                default;
                echo "You have not selected a thing to buy";
        ?>
        </p>
</body>
</html>