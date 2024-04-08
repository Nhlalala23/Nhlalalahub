//polymorphism -> many forms
//->occurs when we have many classes that are related to each other by inheritance



class Person{
    public void introduce(){
        System.out.print("hi..person");

    }

}
//subclass
class Student extends Person{
    @Override
    void introduce(){
        System.out.print("Hi?...Student");
  
    }
}
public class main{
    public static void main(String[] args){
        Person person1 = new Person();
        Person person2 = new Student();

        person1.introduce();
        person2.introduce();


    }
}

