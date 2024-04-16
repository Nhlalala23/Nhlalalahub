import java.util.ArrayList;


public class arrayList {
    public static void main(String[] args){
        java.util.ArrayList<String> fruits = new ArrayList<>();

        //adding elements to arraylist

        fruits.add("Apple");
        fruits.add("Banana");
        fruits.add("Pear");

        //Acessing an element by index
        System.out.println(fruits.get(0));

        //updating element at a specific index
        fruits.set(1,"Mango")  //Replace "Banana" with "Cherry"

        //Removing an element
        fruits.remove("Pear");

        //iterating through the ArrayList and printing each element
        for(String fruit : fruits){
            System.out.println(fruits);
        }

    }
    
}
