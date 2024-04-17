
/*boolean hasNext();
 * E next() ->returns the next element
 * void remove ->removes from underlying collection
 */

 import java.util.ArrayList;

//get the iterator
        Iterator<String> iterator = list.iterator();

        //Traverse and print elements using iterator

        while(iterator.hasNext()){
            String element = iterator.next();
            System.out.println(element);
        }

        
    }
 }

 import java.util.HashSet;
import java.util.Iterator;
 //iterator with hashSet
 public class iterator{
    public static void main(String[] args) {
        HashSet<String> set = new HashSet<>();

        set.add("Apple");
        set.add("Peach");
        set.add("Grape");

        //get the itarator
        Iterator<String> iterator = set.itarator();
        //this.name = name example******

        while(itarator.hasNext()){
            String fruit = itarator.next();
            System.out.println(fruit);
        }
    }
}





/*
 * public class Main{
 * public static void main(String [] args){
 * Arraylist<integer> numbers = new Arraylist<integer>();
 * numbers.add(20);
 * numbers.add(5);
 * numbers.add(15);
 * numbers.add(67);
 * 
 * Iterator<Integer> it = numbers.iterator();
 * 
 * while(it.HashNext()){
 * Integer i = it.next()
 * if(i < 10){
 * it.remove()
 * }
 * }
 * System.out.println(numbers);
 * }
 * }
 */