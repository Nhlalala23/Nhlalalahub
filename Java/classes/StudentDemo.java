package Java.classes;

public class StudentDemo {


    public static void main(String[] args){
        //instance for student
        Student  student1 = new Student("Nhlalala" ,2134567,"Computer Science");
        
        //display student information

        System.out.println("Student Details");
        System.out.println("Name: " + student1.getName());
        System.out.println("Student Number: " + student1.getstudent_id());
        System.out.println("Course name: " + student1.getcourseName());
        System.out.println("==================");
        student1.information();


    }
}


