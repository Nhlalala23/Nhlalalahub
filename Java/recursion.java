package Java;
// solving complicated problems using java recursion 
/*public class recursion {
   public static void main(String [] args){
    int results = sum(10);
    System.out.println(results);
   }

   public static int sum(int k){
    if(k > 0){
        return k + sum(k -1);
    }

    else{
        return 0;
    }

    }  
}*/
//a = num

public class recursion{
    public static int factorial(int a){
        if( a ==0 || a ==1)
        {
            return 1;
        }
        else{
            return a * factorial(a - 1);
        }

    }

    public static void  main(String[] args){
        int num =5;
        int result = factorial(num);
        System.out.println("Factorial of " + num + " is " + result );

    }
}
