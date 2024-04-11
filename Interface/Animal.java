/**
 * delaring
 */
public interface Animal { //interface is declared using interface keyword

     void makeSound();
     String getSpecies();
     double PI = 3.14;
}


//implementing an interface
class Dog implements Animal{
    @Override
    public void makeSound()
    {
        System.out.println("woof");

    }

    @Override
    public String geString(){
        return "canine";
    }
}

//multiple interface implementation
class Labrador implements Animal,Pet {
    @Override
    public void makeSound(){
        System.out.println("woof");
    }

    @Override
    public String getSpecies ()
    {
        return "Dog";
    }

    @Override
    public void play()
    {
        System.out.println(println("Fetching ball"));
    }
}

