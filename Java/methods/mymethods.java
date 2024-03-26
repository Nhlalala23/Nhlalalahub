
public class mymethods{
    // Create a checkAge() method with an integer variable called age
    static void checkAge(int age){
        if(age < 18){
            System.out.println("only for people 18 and above");
        }
        else{
            System.out.println("Welcome ->you are old enough");
        }
    }

    public static void main(String[] args){
        checkAge(19);
    }
}