import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;



public class file {
    public static void main(String[] args) {
        try (ButteredReader reader = new BufferedReader((new FileReader("sample.txt"))));
        String line;
        while((line = reader.readLine())!=null){
            System.out.println(line);
        }
        catch(IOException e){
            e.printStackTrace();
        }
    }
    
}
