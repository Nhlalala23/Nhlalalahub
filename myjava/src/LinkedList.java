public class LinkedList {
    public static void main(String[]args)
{
    //Declaring and instantiation of linkedlist
    LinkedList<String> linked_list = new linkedList<>();


    //Ading elements to linked_list
    linked_list.add("Mango");
    linked_list.add("Banana");
    linked_list.add("Cherry");

    //accessing elememnts by index
    System.out.println(linked_list.get(0)); // the first element

    //adding element at the beginning 
    linked_list.addFirst("Pear");

    linked_list.addLast("orange");

    //remove
    linked_list.removeFirst();
    linked_list.removeLast();

    for(String fruit : linkedList){
        System.out.println(fruit);
    }

}}
