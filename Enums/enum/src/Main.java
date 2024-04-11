//enumarations are use to define a collection of constants

public class Main {
    enum Beverage{
        COFFEE("Coffee",25.99), // string and double
        TEA("Tea", 19.99),
        SODA("Soda",35.99);

        private final String name;
        private final double price;

        Beverage(String name, double price)
        {
            this.name =name;
            this.price = price;
        }

        public String getName(){
            return name;
        }

        public double getPrice(){
            return price;
        }
    }

    public static void main(String[] args){
        Beverage coffee = Beverage.COFFEE;
        System.out.println("I will have a "+ coffee.getName() + "for R" + coffee.getPrice());

        System.out.println("Menu:");

        for(Beverage  beverage: Beverage.values()){
            System.out.println(beverage.getName() + ": R" + beverage.getPrice());
        }
    }
   

}

