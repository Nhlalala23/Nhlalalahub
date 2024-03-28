package Java.classes;

//fields
public class Student {
    String name;
    int age;
    String student_id;
    String course;

    // Contructor
    public Student(String name, int student_id,String course)
    {
        this.name ="Nhlalala";
        this.student_id ="21677546";
        this.course ="Software development";

    }

    //Getter Method
    public String getName(){
        return name;
    }

    public int getAge()
    {
        return age;
    }

    public String courseName(){
        return course;
    }
    //Method o display student information

    public void information(){
        System.out.println("Name: " + name);
        System.out.println("Age: " + age);
    }
}
