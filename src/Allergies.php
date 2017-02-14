<?php

    class Allergies
    {
        function allergyScore($score)
        {

            $eggs = 1;
            $peanuts = 2;
            // $shellfish = 4;
            // $strawberries = 8;
            // $tomatoes = 16;
            // $chocolate = 32;
            // $pollen = 64;
            // $cats = 128;

            $allergy_array_total = 255;
            $leftover_after_score = $allergy_array_total - $score;
            // $reveal_allergies = $leftover_after_score;

            $allergy_array = array();
            // $output = "";
            for ($index = $score; $index > 0; --$index) {
                if (($index - $peanuts) == 0) {
                    array_push($allergy_array, "peanuts");
                } else if (($index - $eggs) == 0) {
                    array_push($allergy_array, "eggs");
                }

            }
            // if (($score - $cats) > 0) {
            //     array_push($allergy_array, "cats");
            // } else if (($score - $pollen) > 0) {
            //     array_push($allergy_array, "pollen");
            // } else if (($score - $chocolate) > 0) {
            //     array_push($allergy_array, "chocolate");
            // } else if (($score - $tomatoes) > 0) {
            //     array_push($allergy_array, "tomatoes");
            // } else if (($score - $strawberries) > 0) {
            //     array_push($allergy_array, "strawberries");
            // } else if (($score - $shellfish) > 0) {
            //     array_push($allergy_array, "shellfish");
            // } else
            return implode(" and ", $allergy_array);
        }
    }

?>
