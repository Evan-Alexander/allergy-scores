<?php

    require_once "src/Allergies.php";

    class AllergiesTest extends PHPUnit_Framework_TestCase
    {
        function testegg()
        {
            //Arrange
            $new_allergy = new Allergies;
            $input = 1;

            //Act
            $result = $new_allergy->allergyScore($input);

            //Assert
            $this->assertEquals("eggs", $result);
        }

        // function testeggsandpeanuts()
        // {
        //     //Arrange
        //     $new_allergy = new Allergies;
        //     $input = 3;
        //
        //     //Act
        //     $result = $new_allergy->allergyScore($input);
        //
        //     //Assert
        //     $this->assertEquals("eggs and peanuts", $result);
        // }
    }



?>
