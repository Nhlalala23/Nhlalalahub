 public class myfile {
    public static void main(String[] args){
        // Creating an instance of MyClass
        MyClass myObject = new MyClass();

        //calling methods of MyClass
        int result = myObject.addNumbers(2,4);
        System.out.println("Result of addition: "+ result); // Changed 'results' to 'result'
    }

    static class MyClass{
        public void printMessage(){
            System.out.println("My class results");
        }

        public int addNumbers(int a , int b){
            return a + b;
        }
    }
}