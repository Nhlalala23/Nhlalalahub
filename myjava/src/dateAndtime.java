/*public class dateAndtime {
    public static void main(String[] args) throws Exception {
        Date currenDate = new Date();
        System.out.println("Current date and time: " + currentDate);
    }
}/ */

import java.util.LocalDateTime;
import java.time.format.DateTimeFormatter;

public class dateAndtime{
    //current date
    LocalDateTime currentDateTime = LocalDateTime.now();

    // date and time format
    DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy/MM/HH:mm:ss");


    //formatting the current date and time
    String formatterDateTime = currentDateTime.format(formatter);

    //displaying
    System.out.println("Current date and time: " + formatterDateTime);
}



