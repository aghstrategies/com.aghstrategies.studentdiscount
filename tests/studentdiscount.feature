Feature: Require a ".edu" email address on the student registration form for participants to receive the student discount code

Scenario: Using a student discount code with a .edu email address

When the user enters a CiviDiscount code that contains the word "Student"
And the user enters bob@princeton.edu email address as their primary email address
Then On Submit of the form the discount is applied

Scenario: Using an international student email (.edu.)

When the user enters a CiviDiscount code that contains the word "Student"
And the user enters bob@princeton.edu.us email address as their primary email address
Then On Submit of the form the discount is applied

Scenario: Attempting to use a student discount code without a .edu email address

When the user enters a CiviDiscount code that contains the word "Student"
And the user enters a .com email address as their primary email address
Then On Submit of the form a validation error is thrown saying to use this code they must use a ".edu" email
