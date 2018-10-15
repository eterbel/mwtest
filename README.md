# Mobility Work Test

## Practice

> Illustration :
> In 2014, there are 4 edges which have their own tax rate: From Rp 0 to Rp 50,000,000 the tax rate is 5%. From Rp 50,000,000 to Rp 250,000,000 the tax rate is 15%. From Rp 250,000,000 to Rp 500,000,000 the tax rate is 25%. Above 500,000,000 the tax rate is 30%.   
Examples:  
> 1) If your annual taxable income is Rp 75,000,000. Your annual income tax amount will be: 5%*50,000,000 + 15%*25,000,000 = 2,500,000 + 3,750,000 = Rp 6,250,000    
> 2) If your annual taxable income is Rp 750,000,000, Your annual income tax amount will be:      5%*50,000,000 + 15%*200,000,000 + 25%*250,000,000 + 30%*250,000,000 = 2,500,000 + 30,000,000 + 62,500,000 + 75,000,000 = Rp 170,000,000   
> Task :   
Write  a program in TDD  to calculate the annual income tax above. 

## Methodology
1. Define the service's functionalities <br/>
A good way is define an interface to describe how works the service and implement an "empty" service from this interface
2. Build the suite tests to coverage all the functionalities and constraints about the service<br/>
The tests are based from the interface definitions and, for the first run, normaly, the assertions failed because the business logic is not implemented
3. Implement a first version of the service which basicly responds to the tests<br/>
In these step, we implement trivial codes to success all the test assertions and so, to validate the test's coverage
4. Implement the business logic of the service<br/>
We implement the good business logic and validate it by running the tests
5. Update tests and code if necessary

Separate the tests stuff from the business code implementation is better to garanty the impartiality of the tests's coverage.
## Test code

```
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/TaxIncomeCalculatorTest
```

## Conclusion
First, sorry for my english !
Next, I am not sure I have answered the question correctly. We should have implemented comprehension tests, but that becomes endless ...