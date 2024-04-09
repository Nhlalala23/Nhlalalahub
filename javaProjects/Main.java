package javaProjects;

public class Main {
    public static void main(String[] args){
        Account savingAcc = new savingAcc(10000);
        double savingInterest = savingAcc.interest();
        System.out.println("interest earned on savings account: $ " + savingInterest);
       
        Account CurrentAcc = new CurrentAccount(1000);
        double currentInterest = CurrentAcc.interest();

        System.out.println("interest earned on current account:$ " +currentInterest);
    }
    
}
