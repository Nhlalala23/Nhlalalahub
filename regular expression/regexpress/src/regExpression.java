// matching specific words
/*Pattern pattern =Pattern.compile("\\bapple\\b");
Matcher matcher = pattern.matcher("I am eating an apple");

if(matcher.find())
{
    System.out.println("Matcher found");

}
else{
    System.out.println("Not matching word");
}*/

Pattern pattern = Pattern.compile("[a-zA-ZO-9._%+-]+@[a-zA-ZO-9.-]+\\.[a-zA-Z]{2,}");
Matcher matcher = pattern.matcher("mthombeninhlalala41@gmail.com");

if(matcher.matches()){
    System.out.println("Valid email address.");

}
else{
    System.out.println("Invalid email address.");
}

