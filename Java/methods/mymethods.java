
/*public class mymethods{
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
}*/


//java scope
//class level scope
//These variables are accessible throughout the class, including all methods and constructors within the class.
/*public class mymethods{
    private int classLevelVariable;

    //methods can  access class-level variable

    public void method1(){
        classLevelVariable = 24;
    }

   
}*/

/*public class mymethods {
    public void method1(){
        // method-level variable ->only accessable withing only withing a method

        int methodlevelvariable =10;
        System.out.println(methodlevelvariable);
    }

    
}*/

//block level Scope -> vaeiables are obly accessable  only within the block in which they are declared

/*public class mymethods {

    public void method1(){
        int blocklevelVariable = 13;
        System.out.println(blocklevelVariable);

    }
}*/

//loop control variable scope
// These variables are accessible only within the loop in which they are declared. 
 
public class mymethods {
    public static void main() {
        for(int i = 0; i < 20; i++)
        {
            System.out.println(i + 1);
        }
        
    }
} 