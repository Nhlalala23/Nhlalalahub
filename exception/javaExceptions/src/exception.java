public class exception {
    public static void main(String[] args) throws Exception {
     try{
        int results = divide(10,0);
     }catch(ArithmeticException e){
        System.out.println("Cannot divide by zero");
     }
    }
    public static int divide(int num1, int num2) throws ArithmeticException{
        if(num2 ==0){
            throw new ArithmeticException("Cannot divide by zero");
        }
        return num1 / num2;
    }
}
