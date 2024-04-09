/*
"Abstraction in Java refers to the concept of 
hiding the complex implementation details and showing 
only the necessary features of an object to the outside world

 An abstract class is a class that cannot be instantiated on its own
  and may contain one or more abstract methods"
*/

abstract class Account{
    protected double balance;

    public Account(double balance){
        this.balance = balance;
    }

    //calculating interest 
    abstract double interest;
}