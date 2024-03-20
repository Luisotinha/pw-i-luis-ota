<?php  
      $peso = 52;
      $altura = 1.60;
      $imc = $peso / ($altura ** 2);

      echo "Seu peso é: ", $peso,"Kg.";
      echo "<br>","Sua altura é: ",$altura ,"m.";


      if ($imc <= 18.4) {
        echo "<br>", "Seu IMC é:", $imc, "<br>", "Sua classificação é: Abaixo do peso.";
      }
      else if ($imc >= 18.5 && $imc < 25) {
        echo "<br>", "Seu IMC é:", $imc, "<br>", "Sua classificação é: Peso ideal.";
      } 
      else if ($imc >= 25 && $imc < 30) {
        echo  "<br>", "Seu IMC é:", $imc, "<br>", "Sua classificação é: Acima do peso.";
      }
      else if ($imc >= 30 && $imc < 34.9) {
        echo  "<br>", "Seu IMC é:", $imc, "<br>", "Sua classificação é: Obesidade grau I.";
      }
      else if ($imc >= 34.9 && $imc <= 39.9) {
      echo  "<br>", "Seu IMC é:", $imc, "<br>", "Sua classificação é: Obesidade grau II.";
      }
      else if ($imc >= 40) {
      echo  "<br>", "Seu IMC é:", $imc, "<br>", "Sua classificação é: Obesidade grau III.";
      }