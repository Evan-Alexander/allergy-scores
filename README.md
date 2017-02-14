# Allergies Webpage

#### _A webpage that tells you what a person is allergic to, 14 February 2017_

#### By _**Erica Wright & Jason Brown**_

## Description

This webpage will allow the user to enter an allergy score and display which allergens the person is allergic to.

## Setup/Installation Requirements

1. _Fork and clone this repository from_ [gitHub]https://github.com/ericaw21/allergies.git.
2. Run `composer install --prefer-source --no-interaction` from project root
3. Create a local server in the /web directory within the project folder using the command: __php -S localhost:8000__ (assuming you are using a mac).
4. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| Enter an allergy score. | "1" | "eggs" |
| Enter an allergy score. | "3" | "eggs and peanuts" |
| Enter an allergy score. | "20" | "shellfish and tomatoes" |
| Enter an allergy score. | "255" | "eggs, peanuts, shellfish, strawberries, tomatoes, chocolate, pollen, cats" |

## Known Bugs

No known bugs.

## Support and contact details

Please contact ericaw21@gmail.com or jasontbrown99@gmail.com with questions or concerns.

## Technologies Used

* _HTML_
* _CSS_
* _Bootstrap_
* _PHP_
* _Silex_
* _Twig_
* _Composer_

## License

*MIT license*

Copyright (c) 2017 {**Erica Wright & Jason Brown**} All Rights Reserved.
