/// syntax
public class test{
    public static void main(String[] args){
        System.out.println("Hello, world");
        System.out.println("well yeah i don't know what's happening");
        System.out.print("hello"); // no new line
        System.out.println("Hello, world");

        System.out.println(23 + "yep");

        //java casting
        /*-widening casting->automatically - converting smaller number type to larger type size
        Narrowing casting->manually- coverting larger to smaller */
        int mynum= 19;
        double mydouble =mynum;

        System.out.println(mynum);
       System.out.println(mydouble);

       //Strings
       String greeting ="Hello";

       //string length
       System.out.println("length = " + greeting.length());
    }
}

