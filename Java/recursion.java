package Java;
// solving complicated problems using java recursion 
public class recursion {
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
}
