/* hashSet is used to collect unique elements
no duplicate elements
 * 
 * syntax=> HashSet<ElementType> set = new HashSet<>();
 */
import java.util.HashSet;

public class hashset {
    public static void main(String[] args) {
        HashSet<String> names = new HashSet<>();

        names.add("Lala");
        names.add("Nhlalala");
        names.add("Alice");
        names.add("chris");

        System.out.println("Size of HashSet: " + names.size());

        for(String name : names ){
            System.out.println(name);
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
}
