<?php

    class Allergies
    {
        function allergyScore($score)
        {

            $eggs = 1;
            $peanuts = 2;
            $shellfish = 4;
            $strawberries = 8;
            $tomatoes = 16;
            $chocolate = 32;
            $pollen = 64;
            $cats = 128;

            $all_allergies = array($eggs, $peanuts, $shellfish, $strawberries, $tomatoes, $chocolate, $pollen, $cats);

            $allergy_array_total = 255;
            $leftover_after_score = $allergy_array_total - $score;

            $allergy_array = array();

            if ($score >= $cats) {
                array_push($allergy_array, "cats");
                $score = $score - $cats;
            }
            if ($score >= $pollen) {
                array_push($allergy_array, "pollen");
                $score = $score - $pollen;
            }
            if ($score >= $chocolate) {
                array_push($allergy_array, "chocolate");
                $score = $score - $chocolate;
            }
            if ($score >= $tomatoes) {
                array_push($allergy_array, "tomatoes");
                $score = $score - $tomatoes;
            }
            if ($score >= $strawberries) {
                array_push($allergy_array, "strawberries");
                $score = $score - $strawberries;
            }
            if ($score >= $shellfish) {
                array_push($allergy_array, "shellfish");
                $score = $score - $shellfish;
            }
            if ($score >= $peanuts) {
                array_push($allergy_array, "peanuts");
                $score = $score - $peanuts;
            }
            if ($score >= $eggs) {
                array_push($allergy_array, "eggs");
                $score = $score - $eggs;
            }

            return implode(" and ", $allergy_array);
        }
    }

?>
