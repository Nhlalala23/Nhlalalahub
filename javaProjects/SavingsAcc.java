package javaProjects;

public class SavingsAcc extends Account{
    super(balance); // the parent
    
}
@Override
double interest(){
    double interestRate = 0.1; //10%
    return balance * interestRate;
}
