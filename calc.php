<?php
      $date = $_POST['date']; //invest date
      $summn = $_POST['sum']; //invest start size
      $period = $_POST['period']; //invest period
      $enlarge = $_POST['enlarge']; //add money every month - y/n
      $summadd = $_POST['enlarge_sum']; //how much money to add every month

      $percent = 0.1; //bank percent

      if($enlarge == "no") {
        $summadd = 0;
      }

      $months = $period*12; //months allover
      $dmy = explode(".", $date); //0 - day 1 - month 2 - year

      $month = $dmy[1];
      $year = $dmy[2];

      $daysn = cal_days_in_month(CAL_GREGORIAN, $month, $year);
      $daysy = ($year % 4 == 0) ? 366 : 365;

      //first month:
      $first_month_days = $daysn - $dmy[0];
      $summn += ($summn + $summadd) * $first_month_days * ($percent / $daysy);

      //other months:
      for($i = 0; $i < $months; $i++) {

        if($month == 12) {
          $month = 1;
          $year += 1;
          $daysy = ($year % 4 == 0) ? 366 : 365;
        } else {
          $month++;
        }

        if($i == $months-1) {
          $summn += ($summn + $summadd) * $dmy[0] * ($percent / $daysy);
        } else {
          $daysn = cal_days_in_month(CAL_GREGORIAN, $month, $year);
          $summn += ($summn + $summadd) * $daysn * ($percent / $daysy);
        }

      }

      echo(round($summn, 2) .' руб.');

 ?>
