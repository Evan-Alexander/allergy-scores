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

        function testeggsandpeanuts()
        {
            //Arrange
            $new_allergy = new Allergies;
            $input = 3;

            //Act
            $result = $new_allergy->allergyScore($input);

            //Assert
            $this->assertEquals("peanuts and eggs", $result);
        }

        function testeggspeanutsshellfish()
        {
            //Arrange
            $new_allergy = new Allergies;
            $input = 7;

            //Act
            $result = $new_allergy->allergyScore($input);

            //Assert
            $this->assertEquals("shellfish and peanuts and eggs", $result);
        }

        function testallallergies()
        {
            //Arrange
            $new_allergy = new Allergies;
            $input = 255;

            //Act
            $result = $new_allergy->allergyScore($input);

            //Assert
            $this->assertEquals("cats and pollen and chocolate and tomatoes and strawberries and shellfish and peanuts and eggs", $result);
        }

        // function testshellfishtomatoes()
        // {
        //     //Arrange
        //     $new_allergy = new Allergies;
        //     $input = 20;
        //
        //     //Act
        //     $result = $new_allergy->allergyScore($input);
        //
        //     //Assert
        //     $this->assertEquals("shellfish and tomatoes", $result);
        // }
    }



?>
