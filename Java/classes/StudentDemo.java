package Java.classes;

public class StudentDemo {
    public static void main(String[] args){
        //instances ogf a student
        Student student1 =new Student("lala", 20);
        Student student2 =new Student("sie", 20);

        //Displaying student info
        System.out.println("Student 1: ");
        student1.displayInfo();

        System.out.println("\nStudent 2: ");
        student2.displayInfo();

    }
}
