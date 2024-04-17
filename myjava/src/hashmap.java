/*HashMap<KeyType, ValueType> map = new HashMap<>(); // syntax
 KeyType =>is the type of key
 * ValueType => type of values to be stored in hashmap
 * 
 */

 //adding elements to hashmap by using put() method

 /*map.put(Key1,value1);
 map.put(key2,value2);

 //retriving elements
 ValueType = map.get(key);

 //removing elements from hashmap
 map.remove(key);

 //checking if key exist using containkey()

 boolean exist = map.containKey(key);

 //iterating over hashmap
 for(HashMap.Entry<KeyType.ValueType> entry : map.entrySe()){
    System.out.println(entry.getKey() + " : " + entry.gotValues());
 }*/

import java.util.HashMap;

public class hashmap{
    public static void main(String[] args) {
        HashMap<String,Integer> score = new HashMap<>();
        scores.put("Alice" ,95);
        scores.put("Lala",98);
        scores.put("bob",85);

        System.out.println("Alice's score: " + scores.get("Alice"));

        scores.remove("Bob");

        System.out.println("Is Bob score present? " + scores.containKey("Bob"));

        for (HashMap.Entry<String,Integer> entry : scores.entrySet()){
            System.out.println(entry.getKey() + " : " + entry.getValue());
        }    }
}


